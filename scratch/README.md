# Source texts for reviewing the site

One file per source. File numbers match the superscript numbers in the site footer (`suffix.php`).
This folder is git-ignored. Do not deploy it with the site.

| # | File | Source | Original | Notes |
|---|---|---|---|---|
| 1 | `01_LRR_Living_Rules_Reference_v2.0.txt` | Living Rules Reference v2.0 (official) | [PDF](https://images-cdn.fantasyflightgames.com/filer_public/51/55/51552c7f-c05c-445b-84bf-4b073456d008/ti10_pok_living_rules_reference_20_web.pdf), `pdf/ti10_pok_living_rules_reference_20_web.pdf` | Pages 40–44 are the LRR's own Errata and FAQ; the site cites those as source 1 too. |
| 2 | `02_RulesPal_TI4_FAQ.md` | RulesPal TI4 FAQ | [rulespal.com](https://www.rulespal.com/twilight-imperium-4/faq) | Third-party compilation of BGG rulings, each graded. Entries marked **NOT USED** ("Best reading — unconfirmed") were not used on the site. |
| 3 | `03_Learn_to_Play.txt` | Learn to Play (official, base game) | `pdf/ti-k0289_learn_to_play_2020_web.pdf` | Prints some original card text that the LRR later errata'd (Diplomacy, Unstable Planet). |
| 4 | `04_Unofficially_Official_FAQ_and_Errata.txt` | The Unofficially Official FAQ and Errata, PoK v3.1.1 | [Google Doc](https://docs.google.com/document/d/1_93kw7KkzvAXoQAxRioxo7iAt-Ar6BMIxdNf4Lv25rI/edit) | Designer-answered Q&A, last modified Jan 2023. |
| 5 | `05_Compiled_Designer_Rulings_2018-2019.txt` | Compiled designer rulings (Dane Beltrami), mostly 2018–2019 | [Google Doc](https://docs.google.com/document/d/1Bgl9OpP-162sifCcratI9RtbOSTNXtFGnKEU_-89rZI/edit) | Old; some rulings are superseded by later ones or by the LRR, FAQ or Codex. Check dates. |
| 6 | `06_RAW_and_Community_Consensus_Rulings.txt` | Rules-as-written and community consensus rulings | [Google Doc](https://docs.google.com/document/d/1Un6F7oDY-b5oUx2RIbGH7644HJvb9jF1wtM399FuFts/edit) | Self-described as not official. Includes Thunder's Edge. |
| 7 | `07_Thunders_Edge_Rulebook.txt` | Thunder's Edge Rulebook (official) | `pdf/te_rulebook_web.pdf` | Includes a Clarifications section (gravity rifts, Warfare, etc.). |
| 8 | `08_Prophecy_of_Kings_Rulebook.txt` | Prophecy of Kings Rulebook (official) | `pdf/ti10_rulebook_web-good.pdf` | |
| 9 | `09_Designer_QA.txt` | Designer Q&A (Thunder's Edge era) | [Google Doc](https://docs.google.com/document/d/11_D2URJTHozgqnOUv8AKHmh4E5DFFaC-AALy3YhBqsc/edit) | |
| 10 | `10_Codex_I.txt` | Twilight Codex Vol. I (rules + cards) | `pdf/ti_codex_1_*.pdf` | |
| 11 | `11_Codex_IV_Liberation.txt` | Twilight Codex Vol. IV: Liberation (rules + cards) | `pdf/ti_codex_4_*.pdf` | |
| 12 | `12_Codex_III_Vigil.txt` | Twilight Codex Vol. III: Vigil (rules + cards) | `pdf/ti_codex_volume_3_*.pdf`, `pdf/ti_codex_3_cards.pdf` | |
| 13 | `13_Thunders_Edge_Revised_Strategy_Cards.txt` | Thunder's Edge revised Warfare and Construction card text, as transcribed on the [Twilight Imperium Wiki](https://twilight-imperium.fandom.com/wiki/Thunder%27s_Edge) | wiki pages | The rulebook doesn't print the new card text; worth checking against the physical cards. |
| 14 | `14_Codex_II_Affinity.txt` | Twilight Codex Vol. II: Affinity (rules + cards) | `pdf/ti_codex_ii_rules_web.pdf`, `pdf/ti_codex_2_cards.pdf` | |
| 15 | `15_Codex_4.5_Technology_Card_Updates.txt` | Codex 4.5 Technology Card Updates | `pdf/codex_45_technology_card_updates.pdf` | |
| * | — | "I could not find a source for these rulings but kept them in as they fit with my understanding of the game." | — | Notes marked `*` on the site have no source file. |

`not_used/` holds the two documents that were reviewed but never cited:

- **Open questions:** questions with no answers.
- **Blue Reverie:** an unofficial homebrew revision of LRR 2.0 (see `BLUE_REVERIE_COMPARISON.md` in the repo root).

## Reading the PDF text

- The `.txt` files for PDFs were extracted automatically. Page breaks are marked `===== PAGE n =====`, and each PDF in a combined file starts with `########## name.pdf ##########`.
- Two-column layouts can come out interleaved, so a sentence may be split across lines or mixed with the other column. If a passage looks garbled, check the page in `pdf/`.
- Card PDFs have little extractable text where the card is mostly artwork.

## Related files in the repo root

- `CHANGES_REVIEW.md`: every change from this rebuild, by page. For each note it gives the source number and a verbatim supporting quote, and it lists removed notes with the reason.
- `WIKI_GAPS.md`: components the Twilight Imperium Wiki doesn't list, and the site names corrected to match the wiki.
- `BLUE_REVERIE_COMPARISON.md`: how the site compares with the Blue Reverie LRR revision.
