# Full-site sweep (2026-11-21)

Owner request: "do a full sweep of this repo, checking all the sources, and the web... a list
of suggestions in 3 groups: things that are wrong, things that need to be added or need
additional detail, things that are confusing. Look at the site as a whole but consider
individual pages for usability."

This was a **report-only** sweep. No site files were edited. Each finding is a suggestion for
the owner to accept, reject or turn into a queue item (for example a new "Queue D" in
`scratch/REVIEW_AGENT_BRIEF.md`, worked one item at a time with diff, approval and commit, like
the other queues). The raw notes taken during the read are in `SWEEP_working_notes.md`.

Confidence tags: (high) = verified against a source quote; (med) = clear problem, fix needs
owner judgment; (low) = minor, style or polish.

## Status: COMPLETE

Every page was read: 109 R_, 10 C_, 30 F_, plus index.php, the shared includes, routing,
sitemap and CSS. Sources checked: scratch/01–15, questions.md, scratch/wiki_faq_gaps.md, and
the TE rulebook Clarifications (07:2122–2165), item by item.

Web check (2026-11-21): found **no** new Living Rules Reference, no official Thunder's Edge
FAQ or errata, and no Codex V. FFG has published a separate **Twilight's Fall** rulebook
(https://images-cdn.fantasyflightgames.com/filer_public/7d/1a/7d1ab223-20f7-425d-bc4c-0bb37846d55b/te_twilights_fall_rulebook_web.pdf).
A third-party reference (scottmk.github.io/ti4-reference) lists Twilight's Fall errata from
March 2026; this was not verified as official.

## How to continue or re-run (for the next agent)

1. Regenerate compact text dumps (tags stripped, citations as `[n]`, internal links as
   `{R_x}`, `R` = RR item, `N` = note, indentation = sub-item):
   ```
   mkdir -p /tmp/sweeptxt; for f in [RFC]_*.php index.php; do python3 scratch/sweep/dump.py $f > /tmp/sweeptxt/${f%.php}.txt; done
   ```
   Known quirks: `<br/>` in headings shows as " / " (e.g. "Ta Zern / / Agnlan Oln"); a bare `<ol>`
   inside `<p>` (R_game_round) prints as "- " lines.
2. To act on a finding: re-open the page, quote the note and source verbatim (brief rule), make
   the change and its proof in `tools/pudding/<page>.txt`, then commit once approved.
3. Tick items here (`- [x]`) as they are resolved so this file stays the queue.

---

## 1. Wrong

- [x] (effe42b) **R_expedition — "command tokens" should be "control tokens".** Note: "First, all command tokens on the expedition token are returned to the respective player's reinforcements[*]". Rulebook: "placing one of their **control** tokens in that slice" (07:894); "the player with the most control tokens on the expedition" (07:917). (high)
- [x] (no change: owner declined; red notes are enough) **R_planetary_shield — RR items describe retired card versions.** "The ^Planetary Shield^ ability does not prevent a planet from being affected by the _X–89 Bacterial Weapon_ technology" and "Units treated as if they do not have a ^Planetary Shield^ ability cannot use the _Magen Defense Grid_ technology". Both cards have been replaced twice (C_technology: Ω, then ΩΩ in Codex 4.5). X–89 ΩΩ is "Double the hits produced by your units' BOMBARDMENT and ground combat rolls" (15:100), so Planetary Shield now *blocks* its bombardment doubling. Magen ΩΩ (15:21) doesn't mention Planetary Shield. The page has no notes for the current cards, only two red Ω notes. Mark the RR items superseded and add ΩΩ notes. (high)
- [x] (no change: the note is sourced to the TE-specific RulesPal entry 02:5502 and still holds) **R_construction — obsolete note.** "Resolving the secondary ability of the _Construction_ strategy card does not activate a system, and it does not matter whether the system has already been activated.[2]" This was about the PoK secondary, which put a strategy token in a system. The TE secondary used by the site (RR item [2,13]; 13:62 "Spend 1 token from your strategy pool to place 1 structure on a planet you control") places no token. Remove or reword it. Related: the open wiki gap for Jae Mir Kan (source 4:269, `scratch/wiki_faq_gaps.md`) also assumes the old secondary. (high)
- [x] (a6e9a03; needed an `h2.section` rule, plain h2 renders smaller) **index.php — four `<h1>` tags.** The page has "Twilight Imperium Rules" (header), plus "Rule Topics", "Faction Notes" and "Component Notes". AGENTS.md: "One `<h1>` per page, inside `<header>`." Changing the three to `<h2>` looks the same, because style.css styles `article > h1, article > h2` together. (high)
- [x] (a8ee805) **F_bastion, Proxima Targeting VI — "the Jol–Nar player's commander, Ta Zern".** Every game with Last Bastion is a TE game, and with PoK the Jol-Nar commander is **Agnlan Oln** (07:193 "replace the Jol-Nar's 'Ta Zern' leader with their 'Agnlan Oln' leader"). "Ta Zern" is now the Deepwrought hero, which is on the site as "Ta Zern — Wave Function Collapse". Use Agnlan Oln. The same note's "_X–89 Bacterial Weapon_" means the ΩΩ version; name it. (med-high)
- [x] (5196a4b; added source 9, text unchanged) **Citations that predate the content they support (epsilon wormholes are TE).** C_agendas, Wormhole Reconstruction: "...alpha, beta, gamma, delta or epsilon wormhole[2,5]" (source 5 is 2018–19). F_creuss, Emissary Taivra: "adjacent to systems with delta and epsilon wormholes.[8]" (source 8 is the PoK rulebook). Split "epsilon" into its own sub-note, cited `*` or to a TE source. (med)

## 2. Missing or needs more detail

### Rulings with an official source that aren't on the site
- [x] (1a66557) **TE rulebook clarifications missing** (07:2122–2165; the other 14 of the 17 are on the site):
  - R_abilities: "An ability that is unresolved cannot be triggered again within a timing window that is generated by itself." (high)
  - F_firmament: "Once the game starts, the Firmament's Plot cards are hidden information. Players can look at the plot cards before the game begins, however." (high)
  - F_firmament: Firmament/Obsidian faction techs "cannot be researched once The Firmament has become The Obsidian, they can be gained directly by game effects that specify 'gain.'" (high)
- [x] (e77064c) **F_jol_nar — Agnlan Oln.** The heading lists "Ta Zern / Agnlan Oln", but every note says "Ta Zern". Add RulesPal 02:5410: "the two cards work identically. Ta Zern now belongs to the Deepwrought, and the swap avoids two components sharing a name." (med)
- [x] (no change: 4:269 is about placing a token, which the TE secondary no longer does; obsolete) **F_mahact, Jae Mir Kan** — source 4:269 (from wiki_faq_gaps). Check it against the TE Construction first (see Wrong). (med)

### Coverage gaps
- [x] (f05e653; home page section, "Coming soon") **Twilight's Fall isn't mentioned anywhere.** It's an official TE game mode with its own rulebook. At minimum, index.php should say it isn't covered. (med)
- [x] (1b4d532, 1feac00, b42ab8d; notes added to Sustain Damage, Destroyed, Victory Points; owner chose to leave the other 10) **13 pages show an empty "Notes" heading:** R_destroyed, R_ground_forces, R_influence, R_leader_sheet, R_opponent, R_purge, R_resources, R_strategic_action, R_structures, R_sustain_damage, R_technology_sc, R_trade_goods, R_victory_points. Drop the heading, or add cross-link notes. High-value examples: R_destroyed (destroyed vs *removed*: gravity rift, capacity, fleet pool, unaccompanied tokens); R_sustain_damage (mechs vs Bombardment, Space Cannon, AFB, _Direct Hit_ timing); R_victory_points (losing VPs via _Mutiny_, _Political Censure_, _Support for the Throne_; 14-point track vs "cannot have more than 10"). (med)
- [x] (bcebb56; the all-16-on-board case left off: no ruling exists) **R_command_tokens** has one note. Missing: the 16-token limit and what happens when all 16 are on the board (questions.md "Command Tokens": retreat, Diplomacy); fleet-pool tokens can't be spent unless an effect says so; Diplomacy and retreat tokens don't activate a system (that's only on R_active_system). (med)
- [x] (128fa85) **R_warfare exception isn't linked where readers look.** R_active_system RR "A player cannot activate a system that already contains one of their command tokens" and R_tactical_action Step 1 "must activate a system that does not contain one of their command tokens" need a TE sub-item or a link to the Warfare primary. (med)
- [x] (5c4c0c9) **R_mecatol_rex** only says tile 112 is legendary. It doesn't link its legendary card, _The Galactic Council_ (notes on C_legendary_planets). R_legendary_planets doesn't mention Mecatol or Thunder's Edge either. (med)
- [x] (30e2502, 72350ad) **R_expedition:** (a) whether a player may claim more than one slice at the end of one turn (07:894 says "an unclaimed slice"; no ruling found, so flag it as open); (b) RulesPal 02:5543 "no planet (token planets like Mirage count)" for Thunder's Edge placement. (med)
- [x] (no change: owner skipped) **Ω / ΩΩ entries don't say what changed.** "X (replaced by Ω)" sections say only "This card is replaced by the Ω version." A player holding an old card can't tell whether the difference matters. Add a one-line summary of each change. (med)
- [x] (no change: same decision as Wrong #2, R_planetary_shield) **Current-version notes are missing where the old note is kept in red.** C_objectives _Make an Example of Their World Ω_ has a red X–89 Ω note and nothing for X–89 ΩΩ. C_action_cards _Disable_ has a red Magen Ω note and nothing for Magen ΩΩ. R_planetary_shield: see Wrong. (med)
- [x] (no change: owner keeps the `*` all-or-none reading) **Bombardment and Space Cannon all-or-nothing rule has no source.** R_space_cannon: "If a player chooses to use the ^Space Cannon^ ability of their units, they must do so for all of their eligible units[*]". R_bombardment has the same rule, also `*`. The RR says "may use the ^Space Cannon^ ability of each of their units"; RulesPal 02:1840 says only that the ability is optional. Find a source or soften the wording, because players will challenge it. (med)
- [ ] (DEFERRED to scratch/notesforlater_deferred.md: too big for one item; suggested its own queue, unanswered) **Unsourced notes:** 886 of 2,843 notes (31%) are `*`. The highest shares are F_nomad 43/56, C_events 30/46, F_muaat 28/46, F_naaz_rokha 25/42, C_objectives 77/171 and C_action_cards 80/290. These are the best places for a targeted sourcing pass. (med)
- [x] (253d040) **R_wormholes** lists the epsilon wormhole but never says where it appears or links /F_rebellion. (low)
- [x] (056ac62; breakthrough and coexisting parts: no general ruling) **R_elimination:** space stations don't prevent elimination (this is only on R_space_stations). Also missing: what happens to an eliminated player's breakthrough and coexisting units. (low)
- [x] (967d49b) **R_frontier_tokens** doesn't link the TE cases: space-station systems (R_space_stations), The Fracture (R_fracture), Thunder's Edge (R_expedition). (low)
- [x] (d3a1421) **R_commodities** doesn't link the space-station +1 commodity value. (low)
- [x] (db8289f) **R_abilities** timing covers the action, strategy and agenda phases but not the status phase. R_status_phase says initiative order [2]; add a one-line pointer. (low)
- [x] (6539ae9; moved) **C_legendary_planets:** the _Imperial Arms Vault — Hope's End_ section is empty, but its note is on R_legendary_planets. Move it or cross-link. (low)

### Site-wide
- [x] (30839c3) **No `<meta name="description">` on any page and no `<html lang="en">`.** Both are cheap SEO and accessibility gains, and both are allowed under AGENTS.md. A description could come from the page's first RR paragraph in prefix.php. (med)
- [x] (72a0f24) **questions.md is out of date.** Several questions are now answered on the site: public objectives while coexisting in the home system (R_coexistence [6,9]), _Stake Your Claim_ while coexisting (C_objectives), Thunder's Edge in a Stellar Converter system (R_expedition), _Wormhole Generator_ into an entropic scar, two entropic scars (R_entropic_scars). Mark them answered so the file stays a true open list. (low)
- [x] (0c9c8e5) **Missing pages return no proper 404.** router.php serves index.php for any unknown URL (status 200, a soft 404). Production nginx falls through to `$1.php`. Check that a missing page returns a real 404, ideally with a small styled page. (low)

## 3. Confusing

### Site-wide
- [x] (e1ef000; ids + jump lists; card names already link to the wiki, so no internal relinking) **Card names can't be linked or deep-linked.** No `<h2>` on the site has an `id` (C_action_cards alone has 110 headings). Italic card names on R_ and F_ pages (_Sabotage_, _Direct Hit_, _Nano–Forge_…) aren't linked to their notes, though rules terms are. Adding ids, internal links and an A–Z jump list at the top of each C_ page needs no JS, adds little weight, and is the biggest navigation win available. (high)
- [x] (1da05a9; `<del>` convention documented in style.md) **LRR text that a note on the same page overrides is shown without a marker.** R_nebula RR: "A ship can only move into a nebula if it is the active system", but the note says "Units are intended to be able to move into a nebula even when it is not the active system[4]". R_fighter_tokens and R_infantry_tokens RR: "the unit is destroyed", but the note says "removed instead of destroyed[4]". R_gravity_rift and R_wormholes each have a TE sub-item that repeats its parent with a change ("two advanced types" followed by "three advanced types"). style.md already defines a marker ("`code` - when a section of the Rules Reference has been changed"), but only R_anomalies uses it. (high)
- [x] (bf9da7f) **No legends.** 15 pages use red `class="removed"` text. On C_ pages the heading explains it ("replaced by Ω"); on R_planetary_shield nothing does. "Ω(Ω)" on F_yin is never explained. The `[*]` meaning is only in the footer. Thunder's Edge topics on the home page are numbered "n/a.", which looks broken. A short key on index.php (and a "(TE)" label in place of "n/a.") would fix all of these. (med)
- [x] (6585074; "This is a work in progress" left as is, see deferred) **The home page reads as stale.** "This is a work in progress" and "preliminary notes ... pending the publication of a new Living Rules Reference" have stood for over a year. Add a "last checked for new official rules: <date>" line. (low)

### Specific pages
- [x] (c9d7972) **R_agenda_card, R_agenda_phase:** "If the outcome of an agenda affects multiple players, it will do so in speaker order.[*]" reads as universal. F_xxcha ("initiative order[4]") and F_keleres say otherwise for agendas resolved in the action phase. Both are right (R_victory_points: initiative order, or clockwise from the speaker when no one has strategy cards), but they look contradictory. Scope the R_ notes to "during the agenda phase", cite source 1 (the LRR VP rule) or 02:1238, and link the action-phase exception. (high)
- [x] (7d37009) **R_agenda_phase:** "Only planets ready at the end of the phase.[2]" is cryptic. Suggested: "Only planets are readied at the end of the agenda phase; technologies, agents and other cards stay exhausted." (high)
- [x] (7d37009) **R_agenda_phase:** "A player may cast votes with space stations, _The Triad_, and Oceans." "Oceans" is unexplained. Link /F_deepwrought (Oceanbound) and /R_space_stations. (med)
- [x] (782d1c9) **R_warfare:** "...ships cannot move out of a system that has already been activated." The real restriction is the command token, and the Warfare system itself gets no token. Reword in command-token terms. (med)
- [x] (4a8b0fd) **R_neutral_units:** "The speaker makes any decisions for neutral units other than assigning hits during combat, such as assigning hits produced by ^Space Cannon^" reads as contradicting itself. Say what the speaker decides. Also "placed in some system" → "some systems". (med)
- [ ] (7320269 reverted in 910e026: owner prefers the original wording) **R_coexistence:** "If a game effect instructs a player to coexist on a planet they do control, then another player will gain control" is abstract. Name the effect that does this, or give an example. (med)
- [x] (01ee239) **F_nekro, Antivirus:** "The player holding _Antivirus_ may only play it at the start of a combat they are participating in" is followed by "_Antivirus_ may be played at the start of a combat that the Nekro player is not participating in." These read as contradictory; spell out who must be in the combat. (med)
- [x] (fcbe1e4; owner kept he/she for named players) **R_trade example:** named players with he/she pronouns (style.md says gender neutral), and "may/must" reads as unsure. Spell out "must (if chosen) / may (by spending a strategy token)". (med)
- [x] (7253ea5) **R_abilities:** "the Crimson Flagship" → "the Rebellion player's flagship, the _Quietus_" with a link (style.md). (low)
- [x] (fc18e10) **C_relics:** "purge _The Obsidian_" now clashes with the TE faction name; say "the _The Obsidian_ relic". Nano–Forge: "will also no longer be non–legendary" is a double negative. (low)
- [x] (b0c7d30) **C_events, Minor Factions:** "place the Creuss Gate (tile 17) in the equidistant": "equidistant" used as a noun is jargon. (low)
- [x] (0134216; all 9 occurrences, 7 pages) **C_promissory_notes:** "command counter" (twice) → "command token". (low)
- [x] (no change: owner keeps each card self-contained) **Repetition:** the same rider notes appear under all 8 riders, the "none in reinforcements" note under ~12 cards, and "three scored secret objectives may draw a fourth" under 4 cards. Consider one "Riders" section and links to R_component_limitations. (low)
- [x] (9bbb14a) **Tone:** C_promissory_notes, Support for the Throne: "Doing so is considered a dick move.[*]". It sits on a site whose home page quotes the lead designer. Owner's call. (low)
- [x] (b4cbbe0) **R_action_cards:** "Action cards are dealt out in initiative order. Though it rarely matters in practice." The second sentence is a fragment. (low)
- [ ] **R_game_round:** the four-phase list is an `<ol>` inside a `<p>` (invalid HTML), and the phases aren't linked to their pages. (low)

### Typos and style
- [ ] R_fracture "roll a dice" / "rolling a dice" → "a die"; "an ingress token is place into" → "placed". R_movement "other player's ships" → "players'". R_supernova "only ships moving into or through a supernova is prevented" → "are". R_elimination "Ghost of Creuss" → "Ghosts" (check the LRR original). (low)
- [ ] C_action_cards Sabotage "all other players has declined" → "have". C_technology Plasma Scoring "one additional dice" (×3) → "die". C_objectives: "_Fight with Precision_" inside the Ω section should carry the Ω; "Destroy Their Greatest Ship" heading vs "_Destroy their Greatest Ship_" in notes; "one of their fighters are destroyed" → "is"; "_Unveil Flagship._" has the period inside the italics. C_agendas "If the Muaat{F_muaat} does not own" → "Muaat player". (low)
- [ ] F_letnev "^Sustain damage^" (×5) → "Sustain Damage"; "_War Funding Ω _" has a stray space; Viscount Unlenn "The extra dice" → "die". F_sol "Bombardment dice" → "die". F_xxcha "Planetary Defense Nexus ΩΩ(Hero)" needs a space. F_nomad "During a space combat, A Quantum" → "a"; the Thundarian notes italicise faction abilities (_Munitions Reserves_, _Harrow_) where style.md calls for `<sc>`. F_norr "The N'orr cannot choose", F_yin "The Yin cannot choose", F_nekro "When the Nekro places" → "player". F_nekro "the speaker's technology are" → "technologies are". F_bastion "dice specifically allocated to it" → "them". (low)
