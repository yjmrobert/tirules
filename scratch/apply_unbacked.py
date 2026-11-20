"""Apply subagent verdicts: replace N<src> lines with E/I proofs, or drop the citation from the page."""
import json, os, re, glob, sys
ROOT='/Users/dgorman/git/tirules'
SP='/private/tmp/claude-502/-Users-dgorman-git-tirules/e32f9f31-d9a3-4341-a95e-3e35f53ae10b/scratchpad'
items=json.load(open(f'{ROOT}/scratch/unbacked.json'))
res={}
for f in glob.glob(f'{SP}/result_*.json'):
    for r in json.load(open(f)): res[r['id']]=r
dry='--dry' in sys.argv
removed=[]; stats={'E':0,'I':0,'REMOVE':0,'dup':0,'missing':0}
def load(page):
    p=f'{ROOT}/tools/pudding/{page}.txt'; return p, open(p,encoding='utf-8').read().split('\n')
by_page={}
for i,o in enumerate(items): by_page.setdefault(o['page'],[]).append((i,o))
for page,lst in by_page.items():
    p,lines=load(page)
    for i,o in lst:
        # locate block
        start=lines.index('@%d'%o['n']); end=start+1
        while end<len(lines) and not lines[end].startswith('@'): end+=1
        idx=next((k for k in range(start+1,end) if re.match(r'N%s '%o['src'],lines[k]) and 'onflict' not in lines[k]),None)
        if idx is None: continue
        if o['backed_elsewhere']:
            lines[idx]='\x00DEL'; stats['dup']+=1; continue
        r=res.get(i)
        if not r: stats['missing']+=1; continue
        v=r['verdict']
        if v in('E','I'):
            q=r['quote'].replace('"',"'").strip()
            txt=f'{v}{o["src"]} {r["label"]}: ' + (q.rstrip('.')+'.' if r.get('paraphrase') else f'"{q}"')
            if v=='I' and r.get('reason'): txt+=' '+r['reason'].strip().rstrip('.')+'.'
            lines[idx]=txt; stats[v]+=1
        else:
            lines[idx]='\x00DEL'; stats['REMOVE']+=1; removed.append((page,o['n'],o['src'],r.get('reason','')))
    lines=[l for l in lines if l!='\x00DEL']
    if not dry: open(p,'w',encoding='utf-8').write('\n'.join(lines))
# drop citations from pages
rm={}
for page,n,src,_ in removed: rm.setdefault(page,{}).setdefault(n,set()).add(src)
for page,notes in rm.items():
    pp=f'{ROOT}/{page}.php'; s=open(pp,encoding='utf-8').read()
    out=[]; pos=0; k=0
    for m in re.finditer(r'<ol class="note">',s):
        depth=0
        for t in re.finditer(r'<ol[^>]*>|</ol>',s[m.start():]):
            depth+=1 if t.group(0).startswith('<ol') else -1
            if depth==0: end=m.start()+t.end(); break
        block=s[m.start():end]
        def fix(li):
            global k
            body=li.group(0)
            if k in notes:
                def sup(sm):
                    cs=[c.strip() for c in sm.group(1).split(',') if c.strip() not in notes[k]]
                    return '<sup>%s</sup>'%(','.join(cs) if cs else '*')
                body=re.sub(r'<sup>([^<]*)</sup>(?=[^<]*(?:<ol|$))',sup,body) if False else re.sub(r'<sup>([0-9*,\s]+)</sup>',sup,body)
            k+=1; return body
        out.append(s[pos:m.start()]); out.append(re.sub(r'<li[^>]*>.*?</li>',fix,block,flags=re.S)); pos=end
    out.append(s[pos:])
    if not dry: open(pp,'w',encoding='utf-8').write(''.join(out))
print(stats); json.dump(removed,open(f'{SP}/removed.json','w'),indent=1)
