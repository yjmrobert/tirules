import sys, re, html, os
from html.parser import HTMLParser
class P(HTMLParser):
    def __init__(s):
        super().__init__(convert_charrefs=True); s.out=[]; s.depth=0; s.cls=[]; s.buf=''; s.href=None; s.skip=0; s.ltext=''
    def flush(s):
        m=re.match(r'^( *)',s.buf); ind=m.group(1)
        t=re.sub(r'\s+',' ',s.buf).strip()
        if t: s.out.append(ind+t)
        s.buf=''
    def handle_starttag(s,tag,a):
        a=dict(a)
        if tag in('style','script'): s.skip+=1; return
        if tag in('ol','ul'):
            s.flush(); s.cls.append(a.get('class','')); 
        elif tag=='li':
            s.flush(); lvl=len(s.cls)-1; c=s.cls[0] if s.cls else ''
            mark={'note':'N','lrr':'R'}.get(c.split()[0] if c else '', '-')
            extra=' {'+a['class']+'}' if a.get('class') else ''
            s.buf=('  '*lvl)+mark+extra+' '
        elif tag in('h1','h2','h3'):
            s.flush(); s.buf='#'*int(tag[1])+' '
        elif tag=='p':
            s.flush(); s.buf='P '
        elif tag=='sup': s.buf+='['
        elif tag=='a':
            h=a.get('href','')
            s.href=h if h.startswith('/') else None
        elif tag=='br': s.buf+=' / '
        elif tag=='i': s.buf+='_'
        elif tag=='sc': s.buf+='^'
    def handle_endtag(s,tag):
        if tag in('style','script'): s.skip-=1; return
        if tag in('ol','ul'): s.flush(); s.cls.pop()
        elif tag in('li','p','h1','h2','h3'): s.flush()
        elif tag=='sup': s.buf+=']'
        elif tag=='a':
            if s.href: s.buf+='{'+s.href.lstrip('/')+'}'
            s.href=None
        elif tag=='i': s.buf+='_'
        elif tag=='sc': s.buf+='^'
    def handle_data(s,d):
        if not s.skip: s.buf+=d
src=open(sys.argv[1]).read()
src=re.sub(r'<\?php.*?\?>','',src,flags=re.S)
p=P(); p.feed(src); p.flush()
print('\n'.join(p.out))
