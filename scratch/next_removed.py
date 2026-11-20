#!/usr/bin/env python3
"""Find the next removed note from CHANGES_REVIEW.md to re-review.

Items come from the per-page sections "Notes removed", "Notes removed (owner review)" and
"Removed notes that the site already covers elsewhere". Reviewed items are logged in
scratch/removed_log.tsv. Order: every "Notes removed" item first (page order), then every
"covers elsewhere" item.

Usage:
    python3 scratch/next_removed.py            # next item
    python3 scratch/next_removed.py -n 5       # next five
    python3 scratch/next_removed.py --status
    python3 scratch/next_removed.py --log LINE OUTCOME "detail"
        LINE is the CHANGES_REVIEW.md line number printed with the item. OUTCOME is one of
        restored, restored-star, merged, keep-removed, covered-ok, covered-fixed, other.
"""
import os, re, sys

HERE = os.path.dirname(os.path.abspath(__file__))
SRC = os.path.join(os.path.dirname(HERE), "CHANGES_REVIEW.md")
LOG = os.path.join(HERE, "removed_log.tsv")
OUTCOMES = {"restored", "restored-star", "merged", "keep-removed", "covered-ok", "covered-fixed", "other"}


def key(page, line):
    return page + "|" + re.sub(r"\s+", " ", line.strip())[:100]


def items():
    """Yield (kind, page, line_no, first_line, text). kind 0 = removed, 1 = covered elsewhere."""
    lines = open(SRC, encoding="utf-8").read().split("\n")
    page, kind = None, None
    for i, l in enumerate(lines):
        if l.startswith("### "):
            page, kind = l[4:].strip(), None
        elif l.startswith("## "):
            page, kind = None, None
        elif l.startswith("**"):
            kind = 0 if l.startswith("**Notes removed") else 1 if "covers elsewhere" in l else None
        elif page and kind is not None and l.startswith("- "):
            body = [l]
            for m in lines[i + 1:]:
                if not m.startswith("  "):
                    break
                body.append(m)
            yield kind, page, i + 1, l, "\n".join(body)


def logged():
    done = set()
    if os.path.exists(LOG):
        for row in open(LOG, encoding="utf-8"):
            p = row.rstrip("\n").split("\t")
            if len(p) >= 2 and "|" in p[0]:
                done.add(p[0])
    return done


def pending():
    done = logged()
    for want in (0, 1):
        for kind, page, ln, first, text in items():
            if kind == want and key(page, first) not in done:
                yield kind, page, ln, text


def main(a):
    if "--status" in a:
        done = logged()
        for want, name in ((0, "Notes removed"), (1, "Covered elsewhere")):
            all_ = [x for x in items() if x[0] == want]
            left = sum(key(p, f) not in done for _, p, _, f, _ in all_)
            print(f"{name}: {len(all_)} total, {left} left")
        return
    if a[:1] == ["--log"]:
        ln, outcome, detail = int(a[1]), a[2], " ".join(a[3:])
        if outcome not in OUTCOMES:
            sys.exit(f"outcome must be one of {sorted(OUTCOMES)}")
        hit = [x for x in items() if x[2] == ln]
        if not hit:
            sys.exit(f"line {ln} of CHANGES_REVIEW.md is not a removed-note item")
        _, page, _, first, _ = hit[0]
        new = not os.path.exists(LOG)
        with open(LOG, "a", encoding="utf-8") as f:
            if new:
                f.write("page|first line\toutcome\tdetail\n")
            f.write(f"{key(page, first)}\t{outcome}\t{detail}\n")
        print("logged")
        return
    n = int(a[a.index("-n") + 1]) if "-n" in a else 1
    shown = 0
    for kind, page, ln, text in pending():
        if shown == n:
            break
        label = "Notes removed" if kind == 0 else "Covered elsewhere"
        print(f"===== {label}: {page} (CHANGES_REVIEW.md:{ln})\n{text}\n")
        shown += 1
    if not shown:
        print("All removed notes are reviewed.")


if __name__ == "__main__":
    main(sys.argv[1:])
