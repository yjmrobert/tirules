# Review agent brief

You are continuing a multi-session review of tirules2.com with the repo owner. Earlier
sessions may have done some of the work. Find your place from the files below; don't rely on
memory of a past chat. Follow `AGENTS.md` and `style.md` in the repo root for every site edit.

**Always show text raw, as written.** Whenever you bring up a site note, a proof line, a
queue note or a source ruling, quote it verbatim in a block quote or code block: the note as
it appears on the page (with its `<sup>` citation), the proof line exactly as in
`tools/pudding/<page>.txt`, and the source passage exactly as in the `scratch/` file, with its
file and line number. Do not paraphrase or summarize in place of the text. Put your own reading
after the quote.

**Unanswered questions get deferred.** If you ask the owner a side question in a message
(for example "want me to add a sweep for X?") and their reply doesn't answer it (they only say
"approved", "move on", and so on), don't ask again and don't act on it. Add it to
`scratch/notesforlater_deferred.md` as its own `##` entry with the question, the context and a
one-line note that it went unanswered, and mention that you deferred it.

There are three queues. Work **Queue A** until it is empty, then **Queue B**, then **Queue C**,
unless the owner asks for something else. Do one item at a time, interactively. Stay in the same conversation
while you iterate on an item. Ask questions rather than guess.

## Start of every session

1. Run `git status` and `git log --oneline -5`. If there are uncommitted changes, an item
   was left half-done. Show the owner `git diff --stat`. Then find the item: it is the top of
   `scratch/notesforlater` (Queue A), the next ruling from `next_ruling.py` (Queue B), or the
   next item from `next_removed.py` (Queue C). Ask
   whether to continue it or discard the changes.
2. Report progress in three lines:
   - Queue A: about how many notes are left in `scratch/notesforlater`, and how many are
     done (count the `##` entries in `scratch/notesforlater_done.md`).
   - Queue B: run `python3 scratch/next_ruling.py --status`.
   - Queue C: run `python3 scratch/next_removed.py --status`.
3. Start the next item.

## Queue A: notes for later (`scratch/notesforlater`)

The owner wrote these notes while reviewing every page by hand. The file is the queue: the
**top** note is always the next one. Notes are separated by blank lines, but a single note can
span several paragraphs. It can quote page text, proof lines ("Explicit: …", "Unverified: …")
and the owner's comments, sometimes in `[brackets]`. Some notes run into each other, such as
"this too" referring to the line above. Use judgment on where a note ends. If unsure, show
your reading of the boundary and ask.

For each note:

**Repeat the queue note in every message about the item.** Every message you send while
working on an item (first look, each diff summary, each follow-up, the approval request)
starts with the queue note, verbatim from `scratch/notesforlater`, in a code block headed
"Queue note". Showing it once at the start is not enough. The owner should never have to
scroll back to see what the item is.

1. **Show the queue note** verbatim, as written in `scratch/notesforlater`, in a code block (when the owner says "raw note" they mean this entry, not the site's `<li>` note; say "queue note" vs "site note" to keep them apart), then say in a sentence or two what you think it asks for,
   which page(s) and note(s) it affects, and any question you have. Open questions go here,
   before editing. When the owner asks for options, give a few short, complete options with
   AskUserQuestion.
2. **Make the changes** in the working tree. Do not stage or commit. The owner reviews in the
   VS Code git diff view. Then tell the owner which files changed and what to look at.
3. **Iterate.** The owner may ask for changes, so repeat step 2 until they approve. Keep the
   conversation going instead of finishing the turn with a summary.
4. **Commit** once approved (see "Committing" below).
5. **Move the note out of the queue.** Cut it from the top of `scratch/notesforlater`.
   Append it to `scratch/notesforlater_done.md` as:
   ```
   ## <first ~8 words of the note>
   Commit: <short hash>  (or "no change: <reason>")
   <the note text, verbatim>
   ```
   Do this only after the commit, so the queue position stays correct if a session dies
   halfway through an item.

Special cases:
- **Sweeping or open-ended notes** (such as "check everything", "related topics needs a
  review", "how do we check for updates"): propose a scope and a plan, and ask. These can be
  split into several commits. If the owner defers a note, move it to
  `scratch/notesforlater_deferred.md` with a one-line reason.
- **Notes that need no change** (such as a question the owner wanted answered): answer it,
  confirm with the owner, and log it in the done file with `no change: <reason>`.
- **Verification requests** (such as "id like to verify …"): search the sources (below) and
  quote the passages. Don't change the site until the owner decides.

## Queue B: untabbed rulings in sources 1, 2, 4, 5, 6, 9

During manual review the owner indented ("tabbed in") every ruling in these source files that
the site already uses. The untabbed ones still need review. Find the next one with:

```
python3 scratch/next_ruling.py          # next ruling (file, line number, text)
python3 scratch/next_ruling.py -n 5     # next five, to batch obvious ones
python3 scratch/next_ruling.py --status # remaining per source
```

It works through sources in order 1, 2, 4, 5, 6, 9 and skips rulings already in
`scratch/rulings_log.tsv`. A "ruling" is a `Q:` block (sources 1, 4, 6, 9), a `###` entry
(source 2, RulesPal), or a forum, Discord or email post (source 5). The parser is heuristic.
Open the file at the given line number to see the full context. A source 5 post can hold
several numbered questions. Treat each as part of the same item.

For each ruling, show:

1. **The pure ruling text:** the question and answer, verbatim, without metadata. For
   RulesPal, also give its grade, and say so plainly if it is marked **NOT USED** ("Best
   reading — unconfirmed"). For source 5, give the post date, because old rulings can be
   superseded.
2. **Your classification**, with evidence:
   - **duplicate:** it repeats another ruling or the rule text. Name what it repeats.
   - **simple:** a very simple rules question that needs no note.
   - **on-site:** the site already says this. Show the page, the note text, and its current
     `<sup>` citation. If this source should be added to that note's citation, say so.
   - **unique:** something new. Add it to the right page in the right place, as a note
     ending with `<sup>n</sup>`, where n is the source number. Show the owner the change, the
     same way as in Queue A.
   - **other:** anything else, such as superseded, contradicted by a later ruling, unclear, or
     about content the site doesn't cover. Explain. The owner may say to ignore it, or may
     add a new category and its instructions to this brief. If they do, edit the brief, and
     add the category to `OUTCOMES` in `next_ruling.py` (or `next_removed.py`).
3. **Commit** any site change once approved.
4. **Log it**, always, even with no change:
   `python3 scratch/next_ruling.py --log <src> <line> <outcome> "<page, commit hash, or reason>"`
   The outcome is one of `duplicate simple on-site added ignored not-a-ruling other`. Also
   indent (tab in) the ruling's first line in the source file when it ends up cited on the
   site (`added`, or `on-site` with a citation added). This matches the owner's convention.
   The log key is the line's text, so indenting it does not break the log.

You can batch obvious **duplicate**, **simple** and **not-a-ruling** items, a few per
message, with the text and a one-line reason for each. Batch only those. Each ruling that
needs a site change gets its own diff and commit.

## Queue C: notes removed in the original rebuild (`CHANGES_REVIEW.md`)

`CHANGES_REVIEW.md` in the repo root records the citation rebuild page by page. Re-review
every note it lists as removed. Find the next one with:

```
python3 scratch/next_removed.py          # next item (page, CHANGES_REVIEW.md line, text)
python3 scratch/next_removed.py -n 5
python3 scratch/next_removed.py --status
```

It serves two kinds of item, in this order:
1. **Notes removed** (61): kept out because a source contradicts them, or because they only
   applied to the original Warfare and Construction cards. Each entry gives the reason.
2. **Covered elsewhere** (286): removed because another item on the site already says the
   same thing. Each entry has a "Covered by" line naming that item.

For each item:

1. **Show** the removed note verbatim, the recorded reason (or the "Covered by" item), and the
   page it came from.
2. **Re-check the reason against the current site and sources.** The site and the source
   files have changed since the rebuild. Sources 2 and 4–6 in particular gained material, so
   grep for the topic again.
   - *Notes removed:* is it still contradicted? Quote the contradicting passage, and any
     source that now supports the note. Recommend keep-removed, restore (with a source, or
     with `*`), or reword.
   - *Covered elsewhere:* open the covering item and confirm it really says the same thing.
     Look for a lost nuance, an exception or an example. Also look for a missing link: a
     reader on the original page might need a pointer, or the content might belong there
     instead. Recommend covered-ok, or a fix (restore, merge the extra detail, or link).
3. **Edit, iterate and commit** in the same way as Queue A, if the owner wants a change.
   Restored notes need a proof in `tools/pudding/<page>.txt` like any other note.
4. **Log it**, always:
   `python3 scratch/next_removed.py --log <CHANGES_REVIEW.md line> <outcome> "<detail or commit>"`
   The outcome is one of `restored restored-star merged keep-removed covered-ok
   covered-fixed other`.

Don't edit `CHANGES_REVIEW.md`. It is the historical record, and the log is keyed to its
text. You can batch **covered-ok** and **keep-removed** items a few at a time, with a one-line
reason each. Items that need a site change get their own diff and commit.

## Editing the site

- Notes live in `<ol class="note">`. Each note ends with `<sup>n</sup>`, or with `<sup>*</sup>`
  when no source exists. Sub-points go in a nested `<ol>`, and a single sub-item stays on one
  line (see `style.md`). Link to other pages on this site, such as faction pages, with
  absolute paths (`/F_mahact`).
- **Proof pages.** Every page with notes has a proof page, `pudding/<page>.php`, generated
  from `tools/pudding/<page>.txt`. In that file, `@n` is the n-th note on the page, counted
  from 0 in page order, sub-notes included. Proof lines are `E<src> …` for explicit, `I<src> …`
  for implicit, and `N …` for not found. When you add, remove, merge, split or reorder notes,
  renumber the `@n` blocks so each proof still sits under its note. Add or update the proof
  for any note you change. Then run `./tools/build_pudding.py <page>`, and commit the `.txt`
  and the regenerated `.php` with the page.
- **Citations must match the proofs.** Don't cite a source unless the proof file quotes it.
  If a citation has no proof, find one in the source text or remove the number. When a proof
  says "the matched entry does not address this" and nothing better exists, the owner prefers
  `*` over a misleading number. Apply this whenever you touch a page, without asking: if a
  cited source's only proof is `N`, or a proof that says it does not address the note, drop
  that number (or switch to `*` if nothing is left). If a proof quotes a passage that does
  support the note but still carries a leftover remark such as "The cited entry (X) does not
  address this.", delete the remark. Mention these fixes in the diff summary.
- **Finding sources:** the source texts are in `scratch/` (numbering is in
  `scratch/README.md`). Use grep. Run `python3 scratch/pudding_ctx.py <page>` to dump a
  page's notes with candidate passages. Its matches are heuristic and sometimes wrong.
  `scratch/NOTE_SOURCES.md` is a large precomputed version of the same thing.
- Owner decisions that still stand: strategy cards use the Thunder's Edge versions.
  Component Limitations 23.4 deliberately reads "except for fighters and infantry".
- `scratch/` is git-ignored. Edits there, such as the queue files and source indentation,
  don't show in git. Mention them to the owner instead.

## Committing

- Before you commit: run `php -l` on each edited PHP file and `./tools/check_links.sh`. If you
  touched layout, CSS or shared includes, check pages under `php -S localhost:8000 router.php`.
- Commit on the current branch (`refactor-all` at the time of writing). Never push.
- One commit per note or ruling, unless the owner groups them. Use a subject that says what
  changed on the site, for example `Coexistence: merge scoring notes and reorder`. Follow it
  with a blank line, then the queue item, such as `Notes for later: "unsurprisingly coexist
  page needs work"`, `Ruling: source 6 line 412` or `Removed note: CHANGES_REVIEW.md:1068`. End with the `Co-Authored-By` trailer
  your harness specifies.
- Commit only after the owner approves the diff.

## Queue D: full-site sweep findings (`scratch/sweep/SWEEP.md`)

Added 2026-11-21, after Queues A–C were empty. `SWEEP.md` lists about 50 findings in three
groups (Wrong, Missing, Confusing), each a `- [ ]` checkbox with quotes and source lines. Work
them top to bottom unless the owner picks another order. For each one, do the same as Queue A:
show the sweep item verbatim, then the site note and source passage raw, make the change, show
the diff, wait for approval (citation-only changes can be committed without asking), commit, then
tick the box in `SWEEP.md` and add the short commit hash after it.
