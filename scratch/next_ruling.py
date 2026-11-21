#!/usr/bin/env python3
"""Find the next ruling to review in sources 1, 2, 4, 5, 6 and 9.

A ruling is "tabbed" (already used as a site source, per the owner's manual review) when its
first line is indented. Untabbed rulings are reviewed one at a time and logged in
scratch/rulings_log.tsv. This prints the first untabbed ruling that is not in the log.

Usage (from anywhere):
    python3 scratch/next_ruling.py            # show the next ruling
    python3 scratch/next_ruling.py -n 5       # show the next 5
    python3 scratch/next_ruling.py --status   # remaining count per source
    python3 scratch/next_ruling.py --log SRC LINE OUTCOME "detail"
        Record the ruling that starts at LINE of source SRC (1,2,4,5,6,9). OUTCOME is one of
        duplicate, simple, on-site, added, ignored, not-a-ruling, other. Detail is free text,
        such as the page and commit hash.
"""
import os, re, sys

HERE = os.path.dirname(os.path.abspath(__file__))
LOG = os.path.join(HERE, "rulings_log.tsv")
FILES = {
    1: "01_LRR_Living_Rules_Reference_v2.0.txt",
    2: "02_RulesPal_TI4_FAQ.md",
    4: "04_Unofficially_Official_FAQ_and_Errata.txt",
    5: "05_Compiled_Designer_Rulings_2018-2019.txt",
    6: "06_RAW_and_Community_Consensus_Rulings.txt",
    9: "09_Designer_QA.txt",
}
OUTCOMES = {"duplicate", "simple", "on-site", "added", "ignored", "not-a-ruling", "other"}
# Designer-rulings posts start with "name, date" or "@name ... date".
POST = re.compile(r"^(@\S.*\d{4}|[\w .'()-]{1,40}, (posted on )?(\d{1,2} )?[A-Z][a-z]{2,8}\.? \d{1,2},? \d{4}|[\w .'()+:-]{1,40},? \d{1,2}/\d{1,2}/\d{4}|[\w .'()+:-]{1,40} UTC ?[-+]?\d{1,4}/\d{1,2}/\d{4}|[A-Z][a-z]{2,8}\.? \d{1,2},? \d{4}|https://www\.reddit\.com/\S+)\s*$")
SECTION_05 = re.compile(r"^[A-Z][A-Z ]+$")


def key(line):
    return re.sub(r"\s+", " ", line.strip())[:100]


def starts(src, line):
    s = line.strip()
    if src == 2:
        return s.startswith("### ")
    if src == 5:
        return bool(POST.match(s)) or bool(SECTION_05.match(s))
    return s.startswith("Q:")


def units(src):
    """Yield (line_no, untabbed, text) for each ruling in a source."""
    lines = open(os.path.join(HERE, FILES[src]), encoding="utf-8-sig").read().split("\n")
    idx = [i for i, l in enumerate(lines) if starts(src, l)]
    for j, i in enumerate(idx):
        end = idx[j + 1] if j + 1 < len(idx) else len(lines)
        if src == 2:  # stop at the next "## Section" heading
            for k in range(i + 1, end):
                if lines[k].lstrip().startswith("## "):
                    end = k
                    break
        if src == 5 and SECTION_05.match(lines[i].strip()):
            continue
        body = [l for l in lines[i:end] if l.strip() and not l.startswith("=====") and not l.strip().isdigit()]
        untabbed = not lines[i][:1].isspace()
        yield i + 1, untabbed, "\n".join(body)


def logged():
    done = set()
    if os.path.exists(LOG):
        for row in open(LOG, encoding="utf-8"):
            p = row.rstrip("\n").split("\t")
            if len(p) >= 2 and p[0].isdigit():
                done.add((int(p[0]), p[1]))
    return done


def pending():
    done = logged()
    for src in FILES:
        for ln, untabbed, text in units(src):
            if untabbed and (src, key(text.split("\n")[0])) not in done:
                yield src, ln, text


def main(a):
    if "--status" in a:
        done = logged()
        for src in FILES:
            u = [x for x in units(src) if x[1]]
            left = sum((src, key(t.split("\n")[0])) not in done for _, _, t in u)
            print(f"source {src}: {len(u)} untabbed, {left} left")
        return
    if a[:1] == ["--log"]:
        src, ln, outcome, detail = int(a[1]), int(a[2]), a[3], " ".join(a[4:])
        if outcome not in OUTCOMES:
            sys.exit(f"outcome must be one of {sorted(OUTCOMES)}")
        line = open(os.path.join(HERE, FILES[src]), encoding="utf-8-sig").read().split("\n")[ln - 1]
        if not starts(src, line):
            sys.exit(f"line {ln} of source {src} does not start a ruling: {line!r}")
        new = not os.path.exists(LOG)
        with open(LOG, "a", encoding="utf-8") as f:
            if new:
                f.write("src\tfirst line\toutcome\tdetail\n")
            f.write(f"{src}\t{key(line)}\t{outcome}\t{detail}\n")
        print("logged")
        return
    n = int(a[a.index("-n") + 1]) if "-n" in a else 1
    shown = 0
    for src, ln, text in pending():
        if shown == n:
            break
        print(f"===== source {src}, {FILES[src]}:{ln}\n{text}\n")
        shown += 1
    if not shown:
        print("All untabbed rulings are reviewed.")


if __name__ == "__main__":
    main(sys.argv[1:])
