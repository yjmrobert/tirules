#!/usr/bin/env python3
"""Insert a proof block for a newly added note and renumber the later @n blocks.

Usage (repo root), after adding the note to <page>.php:
    python3 scratch/sweep/insert_proof.py <page> "<unique text of the new note>" "<proof line>" ["<proof line>" ...]

Notes are counted the way tools/build_pudding.py counts them: every <li> inside each
<ol class="note"> block, in page order, skipping uncited <li> (no <sup>). Then run
./tools/build_pudding.py <page> and check placement in pudding/<page>.php.
"""
import os, re, sys

ROOT = os.path.dirname(os.path.dirname(os.path.dirname(os.path.abspath(__file__))))

def note_index(page, key):
    s = open(os.path.join(ROOT, page + ".php"), encoding="utf-8").read()
    n, found = 0, None
    for m in re.finditer(r'<ol class="note">', s):
        depth = 0
        for t in re.finditer(r"<ol[^>]*>|</ol>", s[m.start():]):
            depth += 1 if t.group(0).startswith("<ol") else -1
            if depth == 0:
                end = m.start() + t.end()
                break
        for li in re.finditer(r"(<li[^>]*>.*?)</li>", s[m.start():end], re.S):
            if "<sup>" not in li.group(1):
                continue
            if key in li.group(1):
                if found is not None:
                    sys.exit(f"'{key}' matches more than one note")
                found = n
            n += 1
    if found is None:
        sys.exit(f"'{key}' not found in a cited note")
    return found

def main():
    page, key, lines = sys.argv[1], sys.argv[2], sys.argv[3:]
    k = note_index(page, key)
    path = os.path.join(ROOT, "tools", "pudding", page + ".txt")
    out, inserted = [], False
    for line in open(path, encoding="utf-8"):
        m = re.match(r"@(\d+)\s*$", line)
        if m and int(m.group(1)) >= k:
            if not inserted:
                out += [f"@{k}\n"] + [l + "\n" for l in lines]
                inserted = True
            line = f"@{int(m.group(1)) + 1}\n"
        out.append(line)
    if not inserted:
        out += [f"@{k}\n"] + [l + "\n" for l in lines]
    open(path, "w", encoding="utf-8").write("".join(out))
    print(f"{page}: proof inserted at @{k}")

if __name__ == "__main__":
    main()
