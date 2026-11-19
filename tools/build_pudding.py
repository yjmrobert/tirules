#!/usr/bin/env python3
"""Write pudding/<page>.php (served at /<page>/pudding) from <page>.php and the proofs in
tools/pudding/<page>.txt. Run from the repo root: ./tools/build_pudding.py C_action_cards

Proof file format: "@n" starts the proofs for the page's nth note (0-based, in page order,
sub-notes included; uncited <li> headers without a <sup> are skipped). "@rn" starts the proofs for
the nth cited item in the Rules Reference section (an <li> or <p> with a <sup>, outside the note lists). Each following line is one proof:
    E9 Designer Q&A, "Voting with Space Stations": "Yeah you can vote with them."
    I1 LRR 8.4: "Each player readies each of their exhausted planets." Names only planets.
    N No source found.
E = explicit, I = implicit, N = no support found; the number is the source's footnote number.
"""
import html, os, re, sys, unicodedata

ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
ENT = {"‘": "&lsquo;", "’": "&rsquo;", "“": "&ldquo;", "”": "&rdquo;", "–": "&ndash;", "—": "&mdash;", "…": "&hellip;"}

def typo(s):
    s = html.escape(s, quote=False)
    s = re.sub(r'(^|[\s(\[—–/])"', r"\1“", s).replace('"', "”")
    s = re.sub(r"(^|[\s(\[—–/])'", r"\1‘", s).replace("'", "’")
    for k, v in ENT.items():
        s = s.replace(k, v)
    return s

def proofs(page):
    out, cur = {}, None
    for line in open(os.path.join(ROOT, "tools", "pudding", page + ".txt"), encoding="utf-8"):
        line = line.strip()
        if not line:
            continue
        if line.startswith("@"):
            key = line[1:]
            cur = out.setdefault(key if key.startswith("r") else int(key), [])
            continue
        m = re.match(r"([EIN])(\d*)\s+(.*)", line)
        kind = {"E": "Explicit", "I": "Implicit", "N": "Unverified"}[m.group(1)]
        sup = f" <sup>{m.group(2)}</sup>" if m.group(2) else ""
        cur.append(f"<li><b>{kind}</b>:{sup} {typo(m.group(3))}</li>")
    return out

def page_title(h1):
    """Header markup -> plain text, as prefix.php does for <title>: <br> becomes " / ", entities
    are decoded, decorative symbols are dropped. Typographic characters go back to entities."""
    t = html.unescape(re.sub(r"<[^>]+>", "", re.sub(r"<br\s*/?>", " / ", h1, flags=re.I)))
    t = re.sub(r"\s+", " ", "".join(c for c in t if unicodedata.category(c) != "So")).strip()
    t = html.escape(t, quote=False)
    for ch, ent in ENT.items():
        t = t.replace(ch, ent)
    return t

def build(page):
    s = open(os.path.join(ROOT, page + ".php"), encoding="utf-8").read()
    h1 = re.search(r"<h1>(.*?)</h1>", s, re.S).group(1).strip()
    h1 = re.sub(r"<(?!br\s*/?>)[^>]+>", "", h1)  # keep symbols and line breaks, drop other tags
    title = page_title(h1)
    # The proof page's <h1> keeps the page's symbols and line breaks; ": Proof" goes
    # before any trailing spacing entities so they keep balancing the line.
    pad = re.search(r"(?:&emsp14;|&emsp;|&ensp;|&nbsp;)*$", h1).group(0)
    heading = h1[:len(h1) - len(pad)] + ": Proof" + pad
    pr = proofs(page)
    body, n, emitted = [], 0, set()
    # Cited Rules Reference items (outside the note lists), proved as @r0, @r1, ...
    first_note = s.find('<ol class="note">')
    rules = s[s.index("<article>"):first_note if first_note >= 0 else len(s)]
    rr = [m.group(2) for m in re.finditer(r"<(li|p)[^>]*>((?:(?!</?(?:li|p)[ >]).)*?<sup>[^<]*</sup>)\s*</(?:li|p)>", rules, re.S)]
    if rr:
        body.append("\n<h2>Rules Reference</h2>\n    <ul>")
        for k, text in enumerate(rr):
            items = pr.get(f"r{k}", ["<li><b>Unverified</b>: not yet checked.</li>"])
            body.append("    <li>" + text.strip() + "\n        <ul>\n        " + "\n        ".join(items) + "\n        </ul></li>")
        body.append("    </ul>")
    for m in re.finditer(r'<ol class="note">', s):
        # the note block runs to its matching </ol>
        depth, i = 0, m.start()
        for t in re.finditer(r"<ol[^>]*>|</ol>", s[m.start():]):
            depth += 1 if t.group(0).startswith("<ol") else -1
            if depth == 0:
                end = m.start() + t.end()
                break
        h2 = list(re.finditer(r"<h2[^>]*>.*?</h2>", s[:m.start()], re.S))
        if h2 and h2[-1].start() not in emitted and not h2[-1].group(0).startswith("<h2><li>"):
            emitted.add(h2[-1].start())
            body.append("\n" + h2[-1].group(0))
        block = s[m.start():end]
        def add(li):
            nonlocal n
            if "<sup>" not in li.group(1):
                return li.group(0)  # uncited header: shown as context, no proof, not counted
            items = pr.get(n, ["<li><b>Unverified</b>: not yet checked.</li>"])
            n += 1
            return li.group(1) + "\n        <ul>\n        " + "\n        ".join(items) + "\n        </ul></li>"
        block = re.sub(r"(<li[^>]*>.*?)</li>", add, block, flags=re.S)
        body.append("    " + block)
    extra = sorted(k for k in pr if isinstance(k, int) and k >= n) + sorted(k for k in pr if isinstance(k, str) and int(k[1:]) >= len(rr))
    if extra:
        sys.exit(f"{page}: proofs for notes {extra} but the page has only {n} notes")
    styles = "".join(m + "\n" for m in re.findall(r"<style>.*?</style>", s[:s.find("<header>")], re.S))
    out = (f'<?php include __DIR__ . "/../prefix.php"?>\n{styles}<header><h1>{heading}</h1></header>\n<article>\n'
           f'<p>The source text behind each note on <a href="/{page}">{title}</a>. <b>Explicit</b> sources state the note directly. '
           f"<b>Implicit</b> sources support it without stating it.</p>\n"
           + "\n".join(body) + '\n</article>\n<?php include __DIR__ . "/../suffix.php"?>\n')
    open(os.path.join(ROOT, "pudding", page + ".php"), "w", encoding="utf-8").write(out)
    print(f"pudding/{page}.php: {n} notes, {len(rr)} rules items, {len(pr)} with proofs")

for p in sys.argv[1:]:
    build(p)
