"""Print a page's notes with the best-matching passages from each cited source (and, for
unsourced notes, from LRR/RulesPal), to draft pudding/<page>.php. Usage: pudding_ctx.py R_combat"""
import os, re, sys
ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))
src = open(os.path.join(ROOT, "scratch", "build_note_sources.py")).read()
src = src.split("order = sorted(")[0]
sys.argv = [sys.argv[0], ROOT] + sys.argv[1:]
exec(src)

def snip(c, note, n=300):
    nt = set(toks(note))
    lines = [l.strip() for l in c["text"].split("\n") if l.strip() and not l.strip().startswith(("- id:", "  - ")) and "boardgamegeek" not in l]
    bi, bs = 0, -1
    for i in range(len(lines)):
        s = len(nt & set(toks(" ".join(lines[i:i + 4]))))
        if s > bs: bi, bs = i, s
    sn = re.sub(r"\s+", " ", " ".join(lines[max(0, bi - 1):bi + 5]))
    return sn[:n]

page = sys.argv[2]
lo, hi = (int(sys.argv[3]), int(sys.argv[4])) if len(sys.argv) > 4 else (0, 10**9)
s = open(os.path.join(ROOT, page + ".php"), encoding="utf-8").read()
sec = None
for i, (section, depth, text, cites) in enumerate(iter_notes(s)):
    if not lo <= i < hi: continue
    if section != sec:
        sec = section; print(f"\n## {sec}")
    print(f"\n{'  '*depth}{i}* {text} [{','.join(cites)}]")
    for c in (cites if cites != ["*"] else ["1", "2"]):
        if c == "*": continue
        r = best(c, text) or []
        for sc, ch in r[:1]:
            if cites == ["*"] and sc < 0.6: continue
            print(f"{'  '*depth}  [{c}{'?' if cites == ['*'] else ''}] {round(sc*100)}% {ch['label'][:110]} :: {snip(ch, text)}")
