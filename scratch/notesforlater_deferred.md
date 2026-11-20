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
