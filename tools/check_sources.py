#!/usr/bin/env python3
"""Check the site's live sources for changes.

Fetches each source that can change after publication (the Google Docs, RulesPal and the
Twilight Imperium Wiki page behind source 13), reduces it to plain text, and compares it with
the snapshot from the last run. The fixed PDFs (LRR, rulebooks, Codexes) are not checked.

RulesPal's FAQ page lists only the questions (and an "Updated <date>" line); each answer is on
its own page. The index is checked every run. All answer pages (about 740, fetched one per
second) are only re-read when the index changes or there is no answers snapshot yet.

Usage:
    tools/check_sources.py SNAPSHOT_DIR [--report FILE]

SNAPSHOT_DIR holds one <n>.txt per source. Changed sources are rewritten in place, so the
directory always holds the latest text. If --report is given and anything changed, a Markdown
report with a unified diff per source is written to FILE. Exit status: 0 no change, 1 changed,
2 a fetch failed (other sources are still checked and saved).

Standard library only. Run weekly by .github/workflows/check-sources.yml.
"""
import difflib
import html.parser
import json
import os
import re
import sys
import time
import urllib.request

GDOC = "https://docs.google.com/document/d/{}/export?format=txt"
SOURCES = [
    (2, "RulesPal TI4 FAQ", "https://www.rulespal.com/twilight-imperium-4/faq", "rulespal"),
    (4, "Unofficially Official FAQ and Errata", GDOC.format("1_93kw7KkzvAXoQAxRioxo7iAt-Ar6BMIxdNf4Lv25rI"), "text"),
    (5, "Compiled Designer Rulings", GDOC.format("1Bgl9OpP-162sifCcratI9RtbOSTNXtFGnKEU_-89rZI"), "text"),
    (6, "RAW and Community Consensus Rulings", GDOC.format("1Un6F7oDY-b5oUx2RIbGH7644HJvb9jF1wtM399FuFts"), "text"),
    (9, "Designer Q&A", GDOC.format("11_D2URJTHozgqnOUv8AKHmh4E5DFFaC-AALy3YhBqsc"), "text"),
    (13, "Wiki: Thunder's Edge", "https://twilight-imperium.fandom.com/api.php?action=parse&page=Thunder%27s_Edge&prop=wikitext&format=json", "wikitext"),
]
MAX_DIFF_LINES = 400  # per source
MAX_REPORT_CHARS = 60000


class TextExtractor(html.parser.HTMLParser):
    """Visible text of an HTML page, one block element per line."""
    SKIP = {"script", "style", "noscript", "svg", "head"}
    BLOCK = {"p", "div", "li", "h1", "h2", "h3", "h4", "h5", "h6", "br", "tr", "section", "article", "summary", "details", "dt", "dd"}

    def __init__(self):
        super().__init__(convert_charrefs=True)
        self.out, self.skip = [], 0

    def handle_starttag(self, tag, attrs):
        if tag in self.SKIP:
            self.skip += 1
        elif tag in self.BLOCK:
            self.out.append("\n")

    def handle_endtag(self, tag):
        if tag in self.SKIP:
            self.skip = max(0, self.skip - 1)
        elif tag in self.BLOCK:
            self.out.append("\n")

    def handle_data(self, data):
        if not self.skip:
            self.out.append(data)


def fetch(url):
    req = urllib.request.Request(url, headers={"User-Agent": "Mozilla/5.0 (tirules source check)"})
    with urllib.request.urlopen(req, timeout=60) as r:
        return r.read().decode("utf-8", errors="replace")


def rulespal_answers(index_html):
    """Text of every RulesPal answer page, in index order, as one document."""
    # Answer links on the index page; the embedded question data (whose format has changed
    # before) is a fallback.
    ids = list(dict.fromkeys(
        re.findall(r'href="/twilight-imperium-4/faq/([a-z0-9-]+)"', index_html)
        or re.findall(r'\bid:"([a-z0-9-]+)",question:', index_html)
        or re.findall(r'\\"id\\":\\"([a-z0-9-]+)\\",\\"question', index_html)))
    if not ids:
        raise ValueError("no question ids found in the RulesPal index")
    out = []
    for qid in ids:
        time.sleep(1)
        text = normalize(fetch(f"https://www.rulespal.com/twilight-imperium-4/faq/{qid}"), "html")
        m = re.search(r"\n← All [^\n]*questions\n(.*?)\nMore [^\n]*questions", text, re.S)
        out.append(f"### {qid}\n{(m.group(1) if m else text).strip()}\n")
    return "\n".join(out)


def normalize(raw, kind):
    if kind in ("html", "rulespal"):
        p = TextExtractor()
        p.feed(raw)
        raw = "".join(p.out)
    elif kind == "wikitext":
        raw = json.loads(raw)["parse"]["wikitext"]["*"]
    raw = raw.replace("﻿", "").replace("\r\n", "\n").replace("\r", "\n").replace("\xa0", " ")
    lines = [re.sub(r"[ \t]+", " ", l).strip() for l in raw.split("\n")]
    text, blank = [], False
    for l in lines:
        if l or not blank:
            text.append(l)
        blank = not l
    return "\n".join(text).strip() + "\n"


def main():
    args = sys.argv[1:]
    report = None
    if "--report" in args:
        i = args.index("--report")
        report = args[i + 1]
        del args[i:i + 2]
    if len(args) != 1:
        sys.exit(__doc__)
    snap = args[0]
    os.makedirs(snap, exist_ok=True)

    sections, failed = [], []

    def compare(key, name, url, new):
        """Save new text for snapshot <key>.txt and return True if it changed."""
        path = os.path.join(snap, f"{key}.txt")
        old = open(path, encoding="utf-8").read() if os.path.exists(path) else None
        if old == new:
            print(f"{key}: unchanged")
            return False
        with open(path, "w", encoding="utf-8") as f:
            f.write(new)
        if old is None:
            print(f"{key}: first snapshot saved")
            return True
        diff = list(difflib.unified_diff(old.splitlines(), new.splitlines(), f"{key}.txt (before)", f"{key}.txt (now)", lineterm="", n=2))
        added = sum(1 for l in diff if l.startswith("+") and not l.startswith("+++"))
        removed = sum(1 for l in diff if l.startswith("-") and not l.startswith("---"))
        print(f"{key}: CHANGED (+{added} -{removed} lines)")
        body = diff[:MAX_DIFF_LINES]
        if len(diff) > MAX_DIFF_LINES:
            body.append(f"... ({len(diff) - MAX_DIFF_LINES} more diff lines; see the source-snapshots branch)")
        sections.append(f"## Source {name} (+{added} / -{removed} lines)\n\n{url.replace('/export?format=txt', '/edit')}\n\n```diff\n" + "\n".join(body) + "\n```\n")
        return True

    for n, name, url, kind in SOURCES:
        label = f"{n}: {name}"
        try:
            raw = fetch(url)
            changed = compare(str(n), label, url, normalize(raw, kind))
            if kind == "rulespal" and (changed or not os.path.exists(os.path.join(snap, f"{n}_answers.txt"))):
                compare(f"{n}_answers", label + " (answers)", url, rulespal_answers(raw))
        except Exception as e:  # keep checking the others
            failed.append(f"- Source {label}: {e}")
            print(f"{n}: FETCH FAILED: {e}", file=sys.stderr)

    if report and (sections or failed):
        text = ""
        if sections:
            text += "These sources changed since the last check. Review new or changed rulings against the site.\n\n"
            text += "\n".join(sections)
        if failed:
            text += "\n## Fetch failures\n\n" + "\n".join(failed) + "\n"
        if len(text) > MAX_REPORT_CHARS:  # GitHub issue bodies are limited to 65536 characters
            text = text[:MAX_REPORT_CHARS] + "\n```\n\n(Report truncated; see the source-snapshots branch for the full text.)\n"
        with open(report, "w", encoding="utf-8") as f:
            f.write(text)
    if sections:
        return 1
    return 2 if failed else 0


if __name__ == "__main__":
    sys.exit(main())
