# tirules.com Style Guide

## general
- Third Person, gender neutral. Exception: named players in a worked example (Alice, Bob…) may use he/she (owner preference, R_trade).
- All lines end with a period.
- US English.
- A reference to an object found on the same page can be referenced by just its name. A reference to an object found on another page should be referenced by name and type (including faction if applicable).
  - e.g. "The Harrow ability" on the L1Z1X page, or "The L1Z1X player's Harrow faction ability" on any other page.
  - Leaders and flagships on other pages should be post-fix in commas, e.g. "the Nomad player's flagship, the *Memoria*, ...".
- Players should be described as such.
  - e.g. "The L1Z1X player&rsquo;s ships...", not ""The L1Z1X&rsquo;s ships...".
- #TODO: work out when to use "effect" and when to use "ability".
- "May" if permitted. "Cannot" if prohibited.

## code
- If an item has a single subitem, both the `<ol>` and `</ol>` tag go on the same line as the subitem, with no additional indent.
- If an item has multiple subitems, the `<ol>` and `</ol>` tags go on their own lines, and each subitem is indented.
- `&ndash;` `&ldquo;`, `&rdquo;`, `&rsquo`, `&Omega;`, etc.

## formatting
- **Bold** - Step names.
- *Italics* - Card Names.
- Sᴍᴀʟʟ Cᴀᴘs (with the `<sc>` tag) - Faction sheet abilities, standard unit abilities.
- "Quotes" - any quoted text, "For", "Against".
- `code` - the site's own wording inserted into Rules Reference text (e.g. "See rulebook for images.").
- ~~Strikethrough~~ (`<del>`) - Rules Reference text superseded by a later ruling or expansion. The rule that replaces it goes directly below, as a "(Thunder&rsquo;s Edge)" sub-item or as a note.

### Anti-Fighter Barrage, Bombardment, Space Cannon 
- Sᴍᴀʟʟ Cᴀᴘs with Each Word Capitalized for the ability name
- **Bold** with Each Word Capitalized for the step
- lowercase plain for rolls

## rules reference and notes
- Rules Reference items are LRR text and carry no citation. A sub-item the site adds from a later source starts with the expansion in brackets, e.g. "(Thunder&rsquo;s Edge) ...", and ends with a citation.
- Every note ends with a citation: `<sup>n</sup>` for numbered sources, `<sup>*</sup>` when no source exists. Each note has a proof in `tools/pudding/<page>.txt`.
- Example players (Alice, Bob, ...) are referred to as "they".
- Components removed from the game, and replaced versions of cards, use `class="removed"` (red), on the heading and on notes that only apply to the old version. The red is the marker: no "original card only" wording, and no notes for the current version added beside the red ones.
- Updated card versions are marked &Omega; (Codex) and &Omega;&Omega; (later); &Omega;(&Omega;) means the &Omega; and &Omega;&Omega; versions are the same.

## headings
- Card headings on `C_` and `F_` pages carry an `id` (e.g. `/C_action_cards#sabotage`) and the `C_` pages have an A&ndash;Z jump list. Both come from `./tools/heading_ids.py`; run it after adding, renaming or removing a card heading.
