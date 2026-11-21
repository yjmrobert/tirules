## Sweep notes for unmentioned exceptions
Deferred: owner fixed the AFB/Waylay example (26ead52) and deferred a sweep of all notes stating flat rules ("cannot", "may not") for card/ability exceptions they should mention.
some rules have exceptions. in the rules reference part these should be ignored... for now but in notes they need to be accounted for
ie A non–fighter ship cannot use its Sustain Damage ability to cancel a hit produced by an anti–fighter barrage roll.1 should account for waylay


## there are a handful of things that could be consolidated
Deferred: site-wide consolidation sweep, not page-specific; owner deferred 2026-11-17.
there are a handful of things that could be consolidated, formatted better or removed as near duplicates

## check other pages for better organization
Deferred: owner request 2026-11-17 after the coexistence reorganization (e.g. 6bd9f42): review other pages for misnesting, duplicate notes, and topic ordering.
check other pages for better organization

## review * notes whose only proof is implicit
Deferred: owner request 2026-11-17. About 91 proof lines are implicit (I) proofs on notes marked *. Review each; where the implicit source is strong enough, cite it (owner would like some of these to quote the source). Also fix F_hacan @17, whose proof is labeled E2 but says "Production limits are not mentioned".
review notes on the site that have * because the only proof is implicit. some of these id like to still quote the source
Added 2026-11-17 ("this seems like it should have a 2" item): owner wants the * replaced by the proven source numbers when implicit proofs exist, as done for R_promissory_notes @1 (now 1,2). Current count: 79 notes cite * with E/I proof lines.
Also (2026-11-17): ~12 'home system of an eliminated player' * notes (R_elimination @0, F_creuss x3, F_mahact, F_muaat, F_norr, C_action_cards, C_objectives x4) can take the I6 Avernus proof used for Stymie in that commit.

## research Edict vs S'ula Mentarion timing (F_mahact @6)
Deferred: owner request 2026-11-19 after 8760f07. The note was reversed to say Mahact may use S'ula Mentarion (via Imperia) after winning the space combat that gains the Mentak token, cited *, on "when" (Edict) vs "after" (S'ula Mentarion) timing. No source addresses it; the only related ruling is LRR FAQ (source 1, lines 43-48) on using cards acquired during a window. Look for a designer ruling, forum post or community consensus on Imperia + commanders gained in the same combat. Also compare F_mentak.php:68 (Salvage Operations unlocking S'ula Mentarion after the same combat: "cannot", cited *).

## check the wiki FAQ for any notes that don't have rulings
Deferred: owner request 2026-11-19 ("all everything, deferred"). Site-wide sweep: for every page (factions, components, rules), fetch the matching fandom wiki FAQ section(s). (1) For each site note cited * , check whether the wiki FAQ quotes an official ruling that can be traced to a numbered source, and cite it. (2) List wiki FAQ entries the site doesn't cover, to consider adding. The wiki is not a numbered source; only cite what can be traced to sources 1-15.
lets check the wiki faq for any notes that dont have rulings

## sweep wiki links that point into a faction page's FAQ section
Deferred: owner request 2026-11-19, found while fixing the Prophet's Tears links (274b114) and Lazax Gate Folding (4d2a89b). About 51 links on F_*.php have the form wiki/The_<Faction>#FAQ:~:text=<item>, many of them for items that have their own wiki page (objectives, relics, agendas, other factions' technologies). For each, point it at the item's own wiki page using the URL already used elsewhere on the site (e.g. C_relics.php, C_objectives.php, the owning faction page's heading), unless the FAQ entry is deliberately the target. List: grep -o 'wiki/The_[A-Za-z_%-]*#FAQ:~:text=[^"]*' F_*.php

## cite LRR 1.18 on "once per timing event" notes
Deferred: owner request 2026-11-19 after f767658 (Research Agreement). Sweep notes cited * (or with weak proofs) that say an ability can be used only once per occurrence, or cannot be used again for the same event/instance/combat/round, and cite LRR 1.18 as I1: "Each ability can be resolved once for each occurrence of that ability's timing event." (LRR PDF p. 7; numbering is collapsed into "1.13 ... 1.25" in the extracted text, 1.18 by order). Grep ideas: "same instance", "once per", "only once", "again during the same", "same timing window".

## Dimensional Anchor: restore the excess-capacity removal note?
Deferred: unanswered question, 2026-11-19, after b84f402. The old F_vuilraith Dimensional Anchor note ("The player that owns the ground forces and fighters chooses which are removed. They are not assigned to particular ships beforehand.") was replaced by "Units can only be captured by the dice specifically allocated to them." Asked whether to re-add the capacity point as its own note, cited 1 (E1 LRR 16.3: "that player must remove the excess units"; 16.4: "Fighters and ground forces are not assigned to specific ships, except while they are being transported."). Owner didn't answer.

## Brother Milor ΩΩ: where does the card text come from?
Question: which product (Thunder's Edge, a Codex, or something else) is Brother Milor ΩΩ from, so it can be added as a source and the new ΩΩ section on F_yin.php cited instead of *?
Context: the ΩΩ text is in no scratch/ source file, and the wiki fetch was refused (HTTP 402). The owner supplied the card text, which is quoted in the @41 proof in tools/pudding/F_yin.txt.
Went unanswered: the owner gave the card text but not its source (2026-11-19).

## War Funding (Ω): drop the generic once-per-turn transaction sub-notes too?
Deferred: unanswered question, 2026-11-19, after cc7310d (Spy Net sub-note removed). F_letnev.php has the same sub-note under War Funding (line 20) and War Funding Ω (line 30): "The active player may perform a transaction with each other player at most once per turn. As such, the active player cannot receive War Funding more than once per turn." Asked whether to remove those as well. Owner approved the Spy Net change without answering.

## Direct Hit example: "During the Roll Dice step" outside combat
Deferred: unanswered question, 2026-11-19, after 4833dc5. The Direct Hit example sub-note on C_action_cards.php (now "during the Space Cannon Offense step") still says "During the Roll Dice step, two hits are produced". Roll Dice is a combat step, and Space Cannon Offense has no step by that name. Asked whether to reword it, e.g. "Two hits are produced against that player." Owner approved the Defense→Offense fix without answering.

## Technology strategy card note on C_agendas.php: cite 3 instead of *?
Deferred: unanswered question, 2026-11-19, after 504d316. The note "If the Technology strategy card is elected, a player may exhaust a planet with a technology specialty … This planet will ready at the end of the agenda phase.<sup>*</sup>" could cite 3 (E3 Learn to Play: "3. READY PLANETS Each player readies all of their planet cards."), as the Ixthian Artifact and Wormhole Research notes now do. Owner approved those without answering.

## C_events.php: "in the equidistant" wording
Deferred: unanswered question, 2026-11-19, after de74eba (spell check). Two setup notes say "…place the Creuss Gate (tile 17) in the equidistant…" and "…place the Sorrow (tile 94) in the equidistant…". The Thunder's Edge rulebook only uses "equidistant" as an adjective. Suggested: "in an equidistant system position". Owner chose the spelling option without answering this.

## Should the "(Sorry, Creuss.)" aside carry <sup>*</sup>?
Context: Wormhole Reconstruction note 2.1 on C_agendas.php is `<li class="ixth">(Sorry, Creuss.)</li>` with no citation, so build_pudding skips it (no @n block). The other ixth note (Ixthian Artifact heresy) carries <sup>*</sup>. Asked whether to add <sup>*</sup> plus an N proof (renumbering later proofs).
Unanswered: the owner approved the change without addressing it.

## Destroy Their Greatest Ship 2.2: "secret objective" or just "objective"?
Context: sub-note 2.2 on C_objectives.php (commit a531a31) reads "A player may still only score one secret objective during or after each combat.<sup>1</sup>". The LRR limit it cites is one objective of any kind per combat. Asked whether to drop "secret".
Unanswered: the owner approved without addressing it.

## Harrow sub-note: also cite source 5? / Ω section Harrow note?
Context: Make an Example of Their World (base) note 4.1 on C_objectives.php (commit 1fa80c0) cites 1. Source 5 (05_Compiled_Designer_Rulings_2018-2019.txt:1131) quotes Harrow's timing ("After each round of ground combat") and could be a third citation. Also, the Ω section has no Harrow note; Ω card text isn't in the sources, so whether Harrow can score Ω is unknown.
Unanswered: the owner approved without addressing either.

## Turn Their Fleets to Dust Ω: say whose ships count?
Question: should the "any player may score" note also say whose ships count, for example "...including a player whose PDS destroys the active player's ships"?
Context: asked while adding the any-player note to Turn Their Fleets to Dust Ω on C_objectives (commit 0963b8d).
Unanswered: the owner replied "approve" only.

## Space Cannon range through wormholes: add nuance notes?
Question: add `*` notes for (a) Space Cannon range still using wormholes under a law that bans moving through them, (b) the Hil Colish delta wormhole counting for range, (c) the Nomad flagship's adjacency not counting?
Context: Queue B, RulesPal (source 2) line 1835 "Can Space Cannon with range reach through a wormhole?" (NOT USED, unconfirmed). Logged as ignored; general rule is on R_adjacency:8.
Unanswered: the owner replied "continue" only.

## Dimensional Tear: Nekro-copied tears hinder the Vuil'raith?
Question: add a `*` note under Dimensional Tear on F_vuilraith, e.g. "If the Nekro player has copied Dimensional Tear II, systems containing the Nekro player's space docks are gravity rifts for the Vuil'raith player's ships."?
Context: Queue B, RulesPal (source 2) line 4221 (NOT USED): "Vuil'raith are affected by Nekro tears. All tears on the board count for the Vuil'raith hero." The hero part is already on F_vuilraith:90.
Unanswered: the owner replied "yup youre right continue" only.

## Planesplitter: can it move an ingress token into a Fracture system?
Deferred by the owner for further research.
Source: RulesPal (source 2) 02_RulesPal_TI4_FAQ.md:5421, graded Best reading, unconfirmed (NOT USED):
> ### Can Plane Splitter move an ingress token into a system in the Fracture?
> A: By the rules as written, yes — the Fracture's hexes are separate systems, so one adjacent to your units qualifies. It only triggers at the start of your strategic actions, so this rarely matters. Some players read it as main-board only.
Related site notes: F_firmament Planesplitter (Obsidian) notes; R_fracture.
Queue B log: logged as `other` ("deferred") so the queue moves on.

## Wave Function Collapse vs Share Knowledge: does the borrower research a replacement?
Deferred by the owner for further research.
Source: RulesPal (source 2) 02_RulesPal_TI4_FAQ.md:5577, graded Best reading, unconfirmed (NOT USED):
> ### If Wave Function Collapse purges a technology another player gained through Share Knowledge, does that player research a replacement?
> A: Most players say yes: the holder owns the gained technology, so it is purged and they research another, keeping it after the note returns. Some argue the borrower never owned it.
Related site notes: F_deepwrought (Wave Function Collapse, Share Knowledge).
Queue B log: logged as `other` ("deferred") so the queue moves on.

## F_deepwrought: Antimass Deflectors note under Share Knowledge looks misplaced
Question: the only note under Share Knowledge (Promissory Note) on F_deepwrought is "If a player gains then loses the Antimass Deflectors technology, their units may remain in and move out of any asteroid fields…". Should it move elsewhere (e.g. under Antimass Deflectors on C_technology, or be reworded to tie it to Share Knowledge)?
Context: noticed while adding the Share Knowledge elimination note (Queue B, source 6 line 26).
Unanswered: the owner replied "approved" only.

## R_entropic_scars: "Only unit abilities are removed" vs "cannot be used"
Question: should R_entropic_scars.php line 12 "Only unit abilities are removed; text abilities are unaffected.<sup>7</sup>" be reworded to "Only unit abilities cannot be used; text abilities are unaffected.<sup>7</sup>", to match the TE rulebook ("cannot be used by or against units inside of an entropic scar") and the new sub-note that units still have their unit abilities?
Context: raised while adding the Arborec-commander sub-note (Queue C, CHANGES_REVIEW.md:7763).
Unanswered: the owner replied "approve" only.

## Fighter II and fleet pool during combat (R_fleet_pool.php)
Deferred by the owner for further research (Queue C, CHANGES_REVIEW.md:8030).
Removed note:
> - [Notes] Fighters and ground forces do not count towards capacity during combat. As such, any number of Fighter II may be in a system during combat ... When combat ends however, units will need to be removed to meet capacity and fleet pool requirements. _(no source)_ _(kept out: contradicted by RP (rp_logs conflict: fleet pool checked at all times; unsupported Fighter IIs count against fleet pool); remaining capacity part duplicates the kept sourced note)_
Against it, 02_RulesPal_TI4_FAQ.md:2122 (`fleet-pool-when-checked`, Community consensus):
> - A: At all times, except for ships that are only moving through other systems. Once ships arrive in the active system, any non-fighter ships over your fleet pool are removed straight away, before Space Cannon Offense and combat, so you can't use extras to soak hits.
02_RulesPal_TI4_FAQ.md:2168 (`fighters-without-capacity`, Community consensus):
> - A: Not normal fighters: any beyond the capacity of your ships and space docks there are removed. Fighter II can move and stay on its own, but Fighter IIs that don't fit in capacity count against your fleet pool like other ships. 
Site rules text, R_fleet_pool.php:14: "If at any time the number of a player's non-fighter ships in a system exceeds the number of tokens in that player's fleet pool, they choose and remove excess ships in that system".
Related site notes: R_fleet_pool.php:20-22 (capacity during combat; Fighter II counting toward capacity instead of fleet pool).
Open question: when a carrier is destroyed mid-combat, do now-unsupported Fighter IIs count against fleet pool immediately, or only at end of combat (capacity is not checked during combat)?
Queue C log: logged as `other` ("deferred") so the queue moves on.

## support request/bugreport form that makes github issues

## R_relics: add a Related Topics link to /C_relics?
Question: should R_relics.php Related Topics get `<li><a href="/C_relics">Relic Notes</a></li>`, matching the links added to R_agenda_phase (/C_agendas, 8779f13) and R_objective_cards (/C_objectives, 9dc7c31)?
Context: Queue C, CHANGES_REVIEW.md:9579 (removed navigation pointer "For notes about specific relics, see the relic notes page."). The link was drafted in the working tree, then reverted.
Unanswered: the owner replied "keep all removed" only.
