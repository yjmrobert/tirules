"""Build scratch/NOTE_SOURCES.md: every note on every page, with the cited sources
and the best-matching passage in each cited source text (heuristic)."""
import glob, html, math, os, re, sys
from collections import Counter

ROOT = sys.argv[1]
SCR = os.path.join(ROOT, "scratch")

STOP = set("""a an the of to in on at for by with from and or but if then than that this these those
is are was were be been being it its as can may must not no any each all their they them his her
he she player players during when while into onto only also does do which who whom what such so
other another same more one two use used using has have had there here would will""".split())

def stem(w):
    for suf in ("ing", "ed", "es", "s"):
        if len(w) > 4 and w.endswith(suf):
            return w[: -len(suf)]
    return w

def toks(s):
    s = html.unescape(re.sub(r"<[^>]+>", " ", s)).lower().replace("’", "'")
    s = re.sub(r"\bd10s?\b", "ten sided die", s).replace("dice", "die")
    return [stem(w) for w in re.findall(r"[a-z0-9']+", s) if w not in STOP and len(w) > 1]

def clean(s):
    s = re.sub(r"<sup>.*?</sup>", "", s)
    return re.sub(r"\s+", " ", html.unescape(re.sub(r"<[^>]+>", "", s))).strip()

# ---------- sources ----------
NAMES = {}
for m in re.finditer(r'<sup>(\d+)</sup>&nbsp;<a href="([^"]+)"[^>]*>(.*?)</a>', open(os.path.join(ROOT, "suffix.php")).read()):
    NAMES[m.group(1)] = (html.unescape(m.group(3)), m.group(2))

def chunks_pdf(lines):
    """Windows of 12 lines (step 6) inside each PDF page; label with page and LRR rule number."""
    out, page, rule, start = [], "?", None, 0
    pages = []  # (page, [(lineno, text)])
    for i, l in enumerate(lines, 1):
        m = re.match(r"===== PAGE (\d+) =====", l)
        if m:
            pages.append((m.group(1), []))
            continue
        if not pages:
            pages.append(("?", []))
        pages[-1][1].append((i, l))
    for page, ls in pages:
        for s in range(0, max(1, len(ls)), 6):
            w = ls[s : s + 12]
            if not w:
                continue
            out.append({"line": w[0][0], "label": f"p. {page}", "text": "\n".join(t for _, t in w)})
    return out

def lrr_label(lines, lineno):
    for j in range(lineno + 8, 0, -1):
        if j - 1 < len(lines):
            m = re.match(r"^(\d{1,3}\.\d{1,2})\s", lines[j - 1])
            if m and j <= lineno + 8:
                return m.group(1)
    return None

def chunks_blocks(lines, label_re=None):
    """Blank-line separated blocks, grouped so each chunk starts at a Q: (or a header line)."""
    out, cur, curstart, header = [], [], None, ""
    def flush():
        if cur and "".join(cur).strip():
            first = next(t for t in cur if t.strip()).strip()
            out.append({"line": curstart, "label": (header + " — " if header else "") + first[:90], "text": "\n".join(cur)})
    for i, l in enumerate(lines, 1):
        if label_re and re.match(label_re, l.strip()):
            header = l.strip()[:60]
        if l.startswith("Q:") or l.startswith("@") or (label_re and re.match(label_re, l.strip())):
            flush(); cur, curstart = [], i
        if curstart is None:
            curstart = i
        cur.append(l)
    flush()
    # also add sliding windows over long chunks so long answers don't dilute
    extra = []
    for c in out:
        ls = c["text"].split("\n")
        if len(ls) > 25:
            for s in range(0, len(ls), 10):
                extra.append({"line": c["line"] + s, "label": c["label"], "text": "\n".join(ls[s : s + 20])})
    return out + extra

def chunks_rulespal(lines):
    out, cur, start, title = [], [], None, ""
    def flush():
        if cur and title:
            body = "\n".join(cur)
            out.append({"line": start, "label": title, "text": body, "unused": "NOT USED" in body})
    for i, l in enumerate(lines, 1):
        if l.startswith("### "):
            flush(); cur, start, title = [l], i, l[4:].strip()
            continue
        if l.startswith("- id: `"):
            title += "  (id `" + l.split("`")[1] + "`)"
        if start:
            cur.append(l)
    flush()
    return out

SOURCES = {}
for f in sorted(glob.glob(os.path.join(SCR, "[01][0-9]_*"))):
    n = str(int(os.path.basename(f)[:2]))
    lines = open(f, encoding="utf-8", errors="replace").read().split("\n")
    if f.endswith(".md"):
        ch = chunks_rulespal(lines)
    elif any(l.startswith("===== PAGE") for l in lines[:5]):
        ch = chunks_pdf(lines)
        if n == "1":
            FAQ_LINE = next(i for i, l in enumerate(lines, 1) if l.startswith("===== PAGE 40 "))
            for c in ch:
                r = lrr_label(lines, c["line"])
                if c["line"] >= FAQ_LINE:
                    c["label"] += ", LRR Errata/FAQ section"
                elif r:
                    c["label"] += f", near rule {r}"
    elif n == "5":
        ch = chunks_blocks(lines, label_re=r"^.{2,40}, ?\d{1,2}/\d{1,2}/\d{4}$")
    else:
        ch = chunks_blocks(lines)
    for c in ch:
        c["toks"] = Counter(toks(c["text"]))
    df = Counter()
    for c in ch:
        df.update(set(c["toks"]))
    N = len(ch)
    idf = {t: math.log((N + 1) / (d + 0.5)) for t, d in df.items()}
    SOURCES[n] = {"file": os.path.basename(f), "chunks": ch, "idf": idf, "N": N}

def best(n, note):
    src = SOURCES.get(n)
    if not src:
        return None
    nt = set(toks(note))
    if not nt:
        return None
    idf = src["idf"]
    default = math.log(src["N"] + 1)
    total = sum(idf.get(t, default) for t in nt)
    bigrams = set(zip(toks(note), toks(note)[1:]))
    scored = []
    for c in src["chunks"]:
        hit = sum(idf.get(t, default) for t in nt if t in c["toks"])
        cov = hit / total
        ct = toks(c["text"]) if bigrams else []
        cb = set(zip(ct, ct[1:]))
        bonus = 0.15 * len(bigrams & cb) / max(1, len(bigrams))
        sc = cov + bonus - (0.25 if c.get("unused") else 0)
        scored.append((sc, c))
    scored.sort(key=lambda x: -x[0])
    seen, top = set(), []
    for sc, c in scored:
        if c["label"] in seen:
            continue
        seen.add(c["label"]); top.append((sc, c))
        if len(top) == 2:
            break
    return top

def snippet(c, note):
    nt = set(toks(note))
    lines = [l.strip() for l in c["text"].split("\n") if l.strip() and not l.strip().startswith("- id:")]
    # pick the 2 consecutive lines with most overlap
    bi, bs = 0, -1
    for i in range(len(lines)):
        s = len(nt & set(toks(" ".join(lines[i : i + 3]))))
        if s > bs:
            bi, bs = i, s
    sn = " ".join(lines[bi : bi + 3])
    sn = re.sub(r"\s+", " ", sn)
    return (sn[:260] + "…") if len(sn) > 260 else sn

# ---------- pages ----------
def page_title(s):
    m = re.search(r"<h1>(.*?)</h1>", s, re.S)
    return clean(m.group(1)) if m else ""

def iter_notes(s):
    """Yield (section, depth, text, cites) for each note <li>, tracking nested <ol>."""
    section = ""
    pos = 0
    tokre = re.compile(r'<h2[^>]*>(.*?)</h2>|<ol class="note">|<ol[^>]*>|</ol>|<li[^>]*>(.*?)</li>', re.S)
    stack = []
    for m in tokre.finditer(s):
        t = m.group(0)
        if t.startswith("<h2"):
            section = clean(m.group(1))
        elif t.startswith('<ol class="note"'):
            stack.append("note")
        elif t.startswith("<ol"):
            stack.append("ol" if stack and stack[-1] in ("note", "ol") and "note" in stack else "other")
        elif t == "</ol>":
            if stack:
                stack.pop()
        elif t.startswith("<li") and stack and "note" in stack and stack[-1] != "other":
            body = m.group(2)
            cites = []
            for sm in re.finditer(r"<sup>(.*?)</sup>", body):
                cites += [c.strip() for c in clean(sm.group(1)).split(",") if c.strip()]
            yield section, len(stack) - stack.index("note") - 1, clean(body), cites

order = sorted(glob.glob(os.path.join(ROOT, "R_*.php"))) + sorted(glob.glob(os.path.join(ROOT, "F_*.php"))) + sorted(glob.glob(os.path.join(ROOT, "C_*.php")))
out = []
out.append("# Note sources, by page\n")
out.append("Every note on every `R_`, `F_` and `C_` page, in site order, with the sources it cites and where in each source the supporting text most likely is.\n")
out.append("**How locations were found:** each cited source text in `scratch/` was searched automatically for the passage whose wording best overlaps the note. "
           "The location is a best guess, not a verified citation. The match % is how much of the note's distinctive wording appears in that passage; "
           "anything marked **⚠ weak** (under 40%) and shows the runner-up passage too needs a manual check. `file:line` points into the `scratch/` copy of the source. "
           "RulesPal entries marked NOT USED were penalised but can still appear if nothing else matched.\n")
out.append("Sources: " + "; ".join(f"**{k}** {v[0]}" for k, v in sorted(NAMES.items(), key=lambda x: int(x[0]))) + ". **\\*** = no source found.\n")

stats = Counter()
toc = []
body = []
groups = {"R": "Rules (R_)", "F": "Factions (F_)", "C": "Components (C_)"}
cur_group = None
for f in order:
    s = open(f, encoding="utf-8").read()
    notes = list(iter_notes(s))
    if not notes:
        continue
    g = os.path.basename(f)[0]
    if g != cur_group:
        cur_group = g
        body.append(f"\n## {groups[g]}\n")
    name = os.path.basename(f)
    title = page_title(s)
    url = "/" + name[:-4]
    anchor = re.sub(r"[^a-z0-9 -]", "", (title + " " + name).lower()).replace(" ", "-")
    body.append(f"\n### {title} — `{name}`\n")
    body.append(f"[{url}](https://tirules2.com{url}) · {len(notes)} notes\n")
    section, num = None, [0, 0, 0]
    for sec, depth, text, cites in notes:
        if sec != section:
            section = sec
            num = [0, 0, 0]
            body.append(f"\n#### {sec or '(page notes)'}\n")
        num[depth] += 1
        for d in range(depth + 1, 3):
            num[d] = 0
        label = ".".join(str(num[d]) for d in range(depth + 1))
        indent = "  " * depth
        stats["notes"] += 1
        body.append(f"{indent}- **{label}** {text}")
        if not cites:
            body.append(f"{indent}  - _no citation marker_")
            stats["nocite"] += 1
        for c in cites:
            if c == "*":
                body.append(f"{indent}  - **\\*** no source found")
                stats["star"] += 1
                continue
            nm = NAMES.get(c, (f"source {c}", ""))[0]
            r = best(c, text)
            if not r:
                body.append(f"{indent}  - **[{c}] {nm}** — source text not available in `scratch/`")
                continue
            sc, ch = r[0]
            pct = max(0, min(100, round(sc * 100)))
            weak = " **⚠ weak**" if pct < 40 else ""
            stats["cites"] += 1
            if weak:
                stats["weak"] += 1
            body.append(f"{indent}  - **[{c}] {nm}** — {ch['label']} (`{SOURCES[c]['file']}:{ch['line']}`, match {pct}%){weak}")
            body.append(f"{indent}    > {snippet(ch, text)}")
            if weak and len(r) > 1:
                sc2, ch2 = r[1]
                body.append(f"{indent}    - runner-up: {ch2['label']} (`{SOURCES[c]['file']}:{ch2['line']}`, match {max(0, round(sc2 * 100))}%)")
    body.append("")

out.append(f"**Totals:** {stats['notes']} notes; {stats['cites']} source citations located ({stats['weak']} weak matches); {stats['star']} unsourced (\\*); {stats['nocite']} with no citation marker.\n")
out += body
open(os.path.join(SCR, "NOTE_SOURCES.md"), "w").write("\n".join(out) + "\n")
print(dict(stats))
