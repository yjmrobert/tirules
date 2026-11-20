"""List notes whose cited source has an N (not backed) line in tools/pudding, excluding conflicts."""
import os, re, sys, json
ROOT='/Users/dgorman/git/tirules'
src=open(os.path.join(ROOT,'scratch','build_note_sources.py')).read().split("order = sorted(")[0]
sys.argv=[sys.argv[0],ROOT]; exec(src)
out=[]
for f in sorted(os.listdir(os.path.join(ROOT,'tools','pudding'))):
    page=f[:-4]; s=open(os.path.join(ROOT,page+'.php'),encoding='utf-8').read()
    notes=list(iter_notes(s))
    blocks={}; cur=None
    for line in open(os.path.join(ROOT,'tools','pudding',f),encoding='utf-8'):
        line=line.rstrip('\n')
        if line.startswith('@'): cur=int(line[1:]); blocks[cur]=[]; continue
        if cur is not None and line: blocks[cur].append(line)
    for n,lines in blocks.items():
        cites=notes[n][3]
        for l in lines:
            m=re.match(r'N(\d+) (.*)',l)
            if not m or 'onflict' in l: continue
            d=m.group(1)
            if d not in cites: continue
            backed=any(re.match(r'[EI]'+d+r' ',x) for x in lines)
            out.append(dict(page=page,n=n,note=notes[n][2],cites=cites,src=d,backed_elsewhere=backed,why=m.group(2)))
json.dump(out,open(os.path.join(ROOT,'scratch','unbacked.json'),'w'),indent=1)
print(len(out)); from collections import Counter; print(Counter(o['src'] for o in out)); print(sum(o['backed_elsewhere'] for o in out))
