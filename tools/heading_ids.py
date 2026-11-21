#!/usr/bin/env python3
"""Give every card heading on the C_ and F_ pages an id, so notes can be linked
(/C_action_cards#sabotage), and write an A-Z jump list at the top of each C_ page.

Run from the repo root after adding or renaming a card heading: ./tools/heading_ids.py
It is safe to run again: existing ids are recomputed and the jump list is rewritten.
The id is built from the heading's first link text (the card name): lowercase,
"Ω" becomes "omega", other symbols are dropped, words are joined with "-". A repeated
name on the same page gets "-2", "-3", ...
"""
import glob, html, os, re, unicodedata

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
H2 = re.compile(r'<h2(?P<attrs>[^>]*)>(?P<body>.*?)</h2>', re.S)
JUMP = re.compile(r'<p class="jump">.*?</p>\n', re.S)

def card_name(body):
    m = re.search(r'<a [^>]*>(.*?)</a>', body, re.S)
    text = m.group(1) if m else body
    text = re.sub(r'<br\s*/?>', ' ', text)
    text = html.unescape(re.sub(r'<[^>]+>', '', text))
    return ''.join(c for c in text if unicodedata.category(c) != 'So').strip()

def slug(name):
    s = name.replace('Ω', ' omega ').replace('&', ' and ')
    s = unicodedata.normalize('NFKD', s).encode('ascii', 'ignore').decode()
    s = re.sub(r"['’]", '', s.lower())
    return re.sub(r'[^a-z0-9]+', '-', s).strip('-')

def process(path, jump):
    s = open(path, encoding='utf-8').read()
    seen, entries = {}, []

    def add_id(m):
        attrs = re.sub(r'\s*id="[^"]*"', '', m.group('attrs'))
        name = card_name(m.group('body'))
        base = slug(name) or 'section'
        seen[base] = seen.get(base, 0) + 1
        hid = base if seen[base] == 1 else f'{base}-{seen[base]}'
        entries.append((hid, name, 'class="removed"' in attrs))
        return f'<h2 id="{hid}"{attrs}>{m.group("body")}</h2>'

    s = H2.sub(add_id, s)
    s = JUMP.sub('', s)
    if jump and entries:
        ent = {'Ω': '&Omega;', '’': '&rsquo;', '–': '&ndash;', '“': '&ldquo;', '”': '&rdquo;'}
        def text(name):
            t = html.escape(name, quote=False)
            for ch, e in ent.items():
                t = t.replace(ch, e)
            return t
        cls = ' class="removed"'
        links = ' &middot;\n'.join(
            '<a href="#%s"%s>%s</a>' % (hid, cls if removed else '', text(name))
            for hid, name, removed in entries)
        first = s.index('<h2 ')
        s = s[:first] + f'<p class="jump">\n{links}\n</p>\n' + s[first:]
    open(path, 'w', encoding='utf-8').write(s)
    return len(entries)

if __name__ == '__main__':
    os.chdir(ROOT)
    for path in sorted(glob.glob('C_*.php')):
        print(f'{path}: {process(path, jump=True)} headings, jump list')
    for path in sorted(glob.glob('F_*.php')):
        print(f'{path}: {process(path, jump=False)} headings')
