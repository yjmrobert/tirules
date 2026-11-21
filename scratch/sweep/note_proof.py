#!/usr/bin/env python3
"""Print a note's raw <li> and its proof block. Usage (repo root): note_proof.py <page> "<unique note text>" """
import os, re, sys
sys.path.insert(0, os.path.dirname(os.path.abspath(__file__)))
from insert_proof import note_index, ROOT
page, key = sys.argv[1], sys.argv[2]
k = note_index(page, key)
s = open(os.path.join(ROOT, page + ".php"), encoding="utf-8").read()
i = s.index(key); a = s.rfind("<li", 0, i); b = s.index("</li>", i) + 5
t = open(os.path.join(ROOT, "tools", "pudding", page + ".txt"), encoding="utf-8").read()
m = re.search(r"(?m)^@%d\n(.*?)(?=^@|\Z)" % k, t, re.S)
print(f"== {page} @{k}\n{s[a:b]}\n{m.group(1) if m else '(no proof block)'}")
