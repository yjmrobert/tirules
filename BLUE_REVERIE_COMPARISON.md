# Comparison: this site vs. "Revisions to the TI4 Living Rules Reference (2.0)" (Blue Reverie)

Compared document: [Revisions to the Twilight Imperium: Fourth Edition Living Rules Reference (2.0)](https://docs.google.com/document/d/1Av1tJSor1ArYEtvGSByZDjvzEYPKSuWvP7Z1M-yJThk/edit).
It describes itself as **unofficial** ("these revisions are not official rules"), written for the Blue Reverie homebrew project
while an official LRR update is pending. It lists only the LRR items it changes or adds, mostly to fold in Thunder's Edge.

**This is a read-only comparison. No page on the site was changed.** Site source numbers in this document refer to the
footer list: 1 LRR 2.0, 2 RulesPal TI4 FAQ, 3 Learn to Play, 4 Unofficially Official FAQ, 5 Compiled Designer Rulings (2018–2019), 6 Rules-as-Written & Community Consensus (unofficial), 7 Thunder's Edge Rulebook, 8 Prophecy of Kings Rulebook, 9 Designer Q&A, 10 Codex I, 11 Codex IV, 12 Codex III, 13 Thunder's Edge revised strategy cards, 14 Codex II, 15 Codex 4.5.

The Blue Reverie document **renumbers** the LRR (it inserts sections such as 15 Breakthrough, 19 Coexistence, 30 Damaged,
37 Entropic scar, 39 Expedition, 43 Fracture, 87 Space station, 96 Synergy), so its section numbers do not match the site's.
Sections were matched by topic. "BR" below means the Blue Reverie document; "site" item numbers are the numbers shown on this site.

## Summary

| Result | Count | Meaning |
|---|---|---|
| Match | 86 | The site already states the same rule (not listed below). |
| Changed LRR | 87 | BR rewords an LRR 2.0 item that the site still shows in 2.0 wording. |
| New | 50 | BR states a rule the site does not have anywhere. |
| Conflict | 5 | BR says something different from a note or item on the site. |
| Partial | 20 | The site covers part of the BR rule. |
| Removed | 13 | BR deletes an LRR item that the site still shows. |
| **Total differences** | **175** | |

## Main themes

1. **Thunder's Edge folded into the LRR.** BR adds full rules sections for coexistence, breakthroughs, the Fracture, entropic scars,
   expeditions, space stations and synergy, and threads "non-coexisting"/"participating" wording through Control, Ground Combat,
   Invasion, Opponent and Producing Units. The site keeps LRR 2.0 wording in those sections and covers Thunder's Edge in separate note pages.
2. **Rewritten strategy cards.** Warfare and Construction use the Thunder's Edge versions; four faction notes on the site
   (Arborec Letani Warrior/Behemoth, Ul Hel–Titan, Keleres) conflict with the new Warfare secondary.
3. **"Ship" widened to "unit".** Asteroid fields, capacity, capture, blockades, gravity rifts and supernovas apply to units in BR.
   Several site notes from the FAQ (source 4) already anticipate some of these changes.
4. **Destroyed → removed.** Unaccompanied fighter/infantry tokens are "removed" rather than "destroyed", matching the site's FAQ notes
   but not its LRR items (an open conflict already listed in CHANGES_REVIEW.md).
5. **Lone structures.** BR removes the "unaccompanied PDS/space dock is destroyed" rules (PDS 63.4, space dock 79.4/79.4(a)) and replaces
   them with a Structures rule tied to gaining control of a planet.
6. **New general timing rules** in Abilities (optional "allow" effects, continuing timing windows, status-phase ordering,
   no destroying your own units with abilities).

## Conflicts with site notes (most important)

- **Neutral units:** the site (source 6) says the speaker makes decisions for neutral units and an out-of-supply neutral unit is not placed; BR says a random non-active player decides, and neutral units are not component limited.
- **Vuil'raith ingress placement:** the site note (sources 6, 9) uses the Cabal breakthrough synergy for Al'raith Ix Ianovar; BR uses synergy only for a breakthrough roll (same as the Thunder's Edge Rulebook conflict already listed in CHANGES_REVIEW.md).
- **Synergy scope:** the site notes (source 7) limit synergy to researching and scoring; BR applies it "for all purposes".
- **Warfare secondary:** four faction notes assume the old one-space-dock secondary.
- **Mecatol Rex:** BR treats it as a legendary planet system; the site note (source 7) limits this to the tile 112 version.

## Details by section

### Complete setup (Step 11) → no site page

- **NEW**: BR (Step 11): "Each player gains the starting technologies, units, and any other components listed on the back of their faction sheet, following any included instructions... three command tokens in their tactic pool, three ... fleet pool, and two ... strategy pool." BR note: "[modified as articulated in Thunder's Edge rulebook]". The site has no setup page; nothing on any R_/F_/C_ page states starting components or starting command tokens.
Matches: 0

### 1 Abilities → [R_abilities.php](R_abilities.php)

- **CHANGED-LRR** (site 1.2, source 1): Site: "If a card ability contradicts information in the Rules Reference, the card takes precedence." BR (1.2): "If an ability contradicts information in the Rules Reference, that ability takes precedence." (This covers all abilities, not only card abilities.)
- **NEW**: BR (1.6(b)): "Information in this rules reference does not take precedence over a contradictory ability, even if this reference uses the word 'cannot'..." Would belong under site 1.6.
- **NEW**: BR (1.8(a)): "An ability which would 'allow' a player to resolve an effect is optional to that player." (The closest site text is R_deploy note 1, which says Deploy is always optional.) Would belong under site 1.8.
- **PARTIAL**: BR (1.18(a)): abilities with continuing windows ("at any time," "during combat," "during the action phase") "can be resolved more than once during that continuing timing window, but not for the same effect during a discrete timing window". Site note 2 (source 5) only says "An ability from a single physical object cannot be resolved more than once in one timing window". The site does not distinguish continuing windows from discrete ones.
- **NEW**: BR (1.18(b)): "Non-agent abilities that can be resolved at the start, end, or otherwise during a combat cannot be resolved by players not participating in that combat unless otherwise specified." Would belong on R_abilities Notes or R_combat.
- **CHANGED-LRR** (site 1.19 + 1.20, sources 1, 5): The site has separate items for the action phase (initiative order from the active player) and the strategy/agenda phases (speaker, clockwise). BR (1.19) merges them into one item, 1.19(a)/(b). BR note: "[consolidation and clarification]".
- **NEW**: BR (1.19(c)): "During the status phase, players take turns in initiative order, if able, and otherwise start with the speaker before proceeding clockwise." The site gives no ordering for the status phase.
- **NEW**: BR (1.20): "An ability that is not resolved cannot be resolved within a timing window generated by that ability."
- **NEW**: BR (1.20(a)): "A player cannot satisfy an ability's timing conditions during the same window they would also resolve that ability" (example: a unit placed "when" a system is activated cannot satisfy another "when activated" condition).
- **NEW**: BR (1.26(a)): if a unit "gains" a unit ability it already has, "that unit's owner may choose to use either the original or gained unit ability, but not both." Would belong under site 1.26.
- **NEW**: BR (1.28): "A player cannot use an ability to destroy their own units unless that effect is part of that ability's cost, or otherwise specified." (The site only has the card-specific notes for Lucky Shot and space cannon.)
- **NEW**: BR (1.29): "Abilities that occur during a continuing timing window (e.g., a turn, phase, or combat) can also be resolved at the 'start' and 'end' of that timing window."
Matches: 2

### 3 Action phase → [R_action_phase.php](R_action_phase.php)

- **CHANGED-LRR** (site 3.4 + 3.4(a), source 1, 3): Site: "A player cannot pass until they have performed the strategic action of their strategy card." and (a) "During a three-player or four-player game, a player cannot pass until they have exhausted both of their strategy cards." BR (3.2): "A player cannot pass until they have performed the strategic action of each of their strategy cards. Once a player has performed the strategic action of their strategy cards, they may pass during their turn, before and instead of taking any actions." Site 3.2 ("If a player cannot perform an action, they must pass") becomes BR 3.2(a).
- **REMOVED** (site 3.4): BR "[removed]". Its content now lives in BR 3.2.
- **REMOVED** (site 3.4(a)): BR "[removed]". It is folded into BR 3.2's "each of their strategy cards". Site 3.5 is renumbered to BR 3.4 with no change to its text.
Matches: 2

### 4 Active player → [R_active_player.php](R_active_player.php)

- **NEW**: BR (4.2(a)): "Each player who has not passed only gets one turn each time through initiative order (e.g., if initiative order changes during the action phase)."
- **NEW**: BR (4.4): "if a player is performing one or more steps of a tactical action, they are treated as the 'active player' for the purposes of performing those steps of that action."
- **NEW**: BR (4.4(a)): "If an ability would end a player's turn while they are performing an action, that ability also ends that action. If it is not the active player's turn, only the action ends."
Matches: 0

### 5 Active system → [R_active_system.php](R_active_system.php)

- **NEW**: BR (5.5): "A system is treated as the active system while any steps of a tactical action are being performed in that system." This adds to site 5.4 ("remains the active system for the duration of the tactical action").
Matches: 0

### 7 Agenda card → [R_agenda_card.php](R_agenda_card.php)

- **NEW**: BR (7.3(a)): "Space Stations cannot be elected by an agenda." This is not stated anywhere on the site. R_space_stations note 5 says space stations count as planets for voting. It would belong on R_agenda_card Notes and/or R_space_stations.
Matches: 0

### 8 Agenda phase → [R_agenda_phase.php](R_agenda_phase.php)

- **CHANGED-LRR** (site 8.4, sources 1, 3): Site: "Each player readies each of their exhausted planets." BR (8.4): "Each player readies each of their exhausted planets and planet-like cards."
- **NEW**: BR (8.23): "When a game effect or ability instructs players to 'immediately' vote on an agenda, they proceed to voting without resolving any abilities dependent on revealing that agenda other than those on the agenda card itself."
Matches: 0

### 9 Anomalies → [R_anomalies.php](R_anomalies.php)

- **CHANGED-LRR** (site 9.2, source 1): Site: "There are four types of anomalies: asteroid fields, nebulae, supernovas, and gravity rifts." BR (9.2): "There are five regular types of anomalies: asteroid fields, entropic scars, nebulae, supernovas, and gravity rifts." BR 9.3 also adds the entropic scar art. The site's 9.3 only says "See rulebook for images", so 9.3 is counted as a match.
- **CHANGED-LRR** (site 9.5, source 1): Site: "Abilities can cause a system to be two different anomalies; that system has the properties of both anomalies." BR (9.5): "...multiple different anomalies; that system is (and has the properties of) all those anomalies."
- **NEW**: BR (9.6): "A system that contains multiple of the same anomaly is treated as a single anomaly."
Matches: 1

### 10 Anti-fighter barrage → [R_anti_fighter_barrage.php](R_anti_fighter_barrage.php)

- **CHANGED-LRR** (site intro, sources 1, 3): Site: "During the Anti-Fighter Barrage step of the first round of space combat, players perform the following steps". BR: "To use the 'Anti-Fighter Barrage' ability, such as during the 'Anti-Fighter Barrage' step of the first round of space combat, players resolve the following steps". The step is now one example of when the ability can be used, not the only time.
- **CHANGED-LRR** (site 10.1, sources 1, 3): Site: "Each player rolls dice for each of their units in the combat that has the Anti-Fighter Barrage ability". BR (10.1): "Each player may use the 'Anti-Fighter Barrage' ability of each of their units in the active system by rolling..." The roll becomes optional, and it covers units in the active system rather than units "in the combat".
- **CHANGED-LRR** (site 10.1(b), sources 1, 3): BR adds "An 'Anti-Fighter Barrage' ability may not be accompanied by a (Y) value; the anti-fighter barrage roll for such a unit consists of one die."
- **REMOVED** (site 10.1(d), sources 1, 8): Site: "This ability can still be used if no fighters are present; hits produced may be used to trigger specific abilities." BR (10.1(d)): "[removed]".
Matches: 1

### 11 Asteroid field → [R_asteroid_field.php](R_asteroid_field.php)

- **CHANGED-LRR** (site 11.1, sources 1, 3): Site: "A ship cannot move through or into an asteroid field." BR (11.1): "A unit cannot move through or into an asteroid field." Site note 1 (source 4) already says "A future rule change will place the ship movement restrictions of anomalies upon all units", and R_nebula note 1 says the same.
Matches: 0

### 12 Attach → [R_attach.php](R_attach.php)

- **CHANGED-LRR** (site intro, sources 1, 8): Site: "attach a card to a planet card. The attached card modifies that planet card". BR: "attach a card to another component, such as a planet card. The attached card modifies that component".
- **CHANGED-LRR** (site 12.1, sources 1, 8): BR adds "To attach a card to any other component, a player places that card visibly near the component."
- **NEW**: BR (12.4): "Attached cards cannot be exchanged as part of a transaction, except while attached to a component being exchanged as part of that transaction."
- **NEW**: BR (12.4(a)): "Attachments cannot be interacted with separately from the component they are attached to, unless otherwise specified."
Matches: 0

### 14 Blockaded → [R_blockaded.php](R_blockaded.php)

- **CHANGED-LRR** (site intro, source 1): Site: "A player's unit with Production is blockaded if..." BR: "A player's unit is blockaded if it is in a system that does not contain any of their ships and contains other players' ships." Any unit can now be blockaded, not only units with Production.
- **CHANGED-LRR** (site 14.2(a), sources 1, 8): Site: "While a player is blockading another player, the blockaded player cannot capture..." BR (14.2(a)): "While a player is blockading another player's space dock, the blockaded player cannot capture..."
- **PARTIAL**: BR (14.3): "If a player's structure in the space area of a system is blockaded, it is destroyed." The site has only F_ral_nel.php (Miniaturization) note (source 6): structures in the space area "remain there until they are blockaded, transported, or placed onto planets". It does not say they are destroyed, and there is no general rule.
Matches: 1

### 15 Breakthrough → [R_breakthroughs.php](R_breakthroughs.php)

The site page has no LRR section, only notes (source 7). The intro, 15.1 and 15.2 match the site notes and R_fracture notes.
- **NEW**: BR (15.3): "Some breakthroughs are also unit upgrades, these unit upgrades are placed on top of the corresponding unit upgrade technology, but are not technologies." Would belong on R_breakthroughs Notes, with a cross-reference on R_unit_upgrades.
Matches: 3

### 16 Bombardment → [R_bombardment.php](R_bombardment.php)

- **CHANGED-LRR** (site intro, sources 1, 3): Site: "During the Bombardment step, players perform the following steps". BR: "To use the 'Bombardment' ability, such as during the 'Bombardment' step, players resolve the following steps".
- **CHANGED-LRR** (site 15.1, sources 1, 3): Site: "The active player chooses which planet each of their units that has a Bombardment ability will bombard." BR (16.1): "The bombarding player may use the 'Bombardment' ability of each of their units in the space area of the active system by choosing which planet each of those units will bombard, and which player's units on that planet to bombard, if any." This says "bombarding player" where the site says "active player". Site note 1 (sources 1, 4) still says "Only the active player may bombard".
- **CHANGED-LRR** (site 15.1(d), sources 1, 3): BR adds "and player's units on those planets (if coexisting)... which player's units on that planet a unit is bombarding". R_coexistence note 6 (source 7) already covers choosing a player.
- **CHANGED-LRR** (site 15.2, sources 1, 3): Site: "The player who controls the planet that is being bombarded chooses and destroys..." BR (16.2): "The player whose units are being bombarded chooses and destroys..."
Matches: 1

### 17 Capacity → [R_capacity.php](R_capacity.php)

- **CHANGED-LRR** (site 16.2, sources 1, 3, 5): Site: "The combined capacity values of a player's ships in a system". BR (17.2): "...a player's units in a system".
- **CHANGED-LRR** (site 16.3, source 1): Site: "...than the total capacity of that player's ships in that system". BR (17.3): "...that player's units in that system".
Matches: 0

### 18 Capture → [R_capture.php](R_capture.php)

- **CHANGED-LRR** (site 17.1, sources 1, 8): Site: "If a player captures a non-fighter ship or mech". BR (18.1): "If a player captures a non-fighter, non-infantry unit". This now includes structures.
- **CHANGED-LRR** (site 17.2, sources 1, 8): Site: "A captured non-fighter ship or mech is returned under the following circumstances". BR (18.2): "A captured unit is returned to its owner under the following circumstances".
- **PARTIAL**: BR (18.2(d)): "A player who has captured their own units may return those units at any time." The site states this only in F_nekro.php (source 6), for the Nekro player copying The Terror Between. There is no general rule.
Matches: 1

### 19 Coexistence → [R_coexistence.php](R_coexistence.php)

The site page has no LRR section, only notes (sources 6, 7, 9). BR adds a full section.
- **PARTIAL**: BR (intro): "A planet must contain a player's units for other players to coexist on that planet." Site note 2 says only "One player controls the planet; all other players are coexisting on that planet."
- **PARTIAL**: BR (19.1): "Coexisting units are blockaded and do not participate in combat." Site note 2(c) and note 3 cover blockaded. No site note says they do not participate in combat.
- **NEW**: BR (19.1(a)): "A player's units cannot begin coexisting, or enter coexistence without another player to coexist with."
- **NEW**: BR (19.2(a)): "Players only consider their own units on planets toward scoring objectives and other game effects."
- **PARTIAL**: BR (19.4(a)): "When a player commits any number of units to a planet they control, they may end coexistence for 1 other player's units on that planet." Site note 7 (sources 6, 7) lets the controller start a ground combat against a coexisting player during the invasion step. The site has no requirement to commit units and no limit of one player.
- **PARTIAL**: BR (19.4(b)): before gaining control, the active player "may end coexistence for up to 1 other player's units on each of those planets which were in coexistence at the start of the tactical action, and return to the start of the 'Ground Combat' step." Site note 10 (source 7) allows repeated ground combats against further coexisting players. It lacks the condition "in coexistence at the start of the tactical action".
Matches: 8

### 21 Command sheet → [R_command_sheet.php](R_command_sheet.php)

- **CHANGED-LRR** (site 19.1, sources 1, 3): Site: "used by that player to perform strategic and tactical actions and to increase..." BR (21.1): "used by that player to perform strategic abilities and tactical actions as well as to increase..."
Matches: 0

### 23 Commodities → [R_commodities.php](R_commodities.php)

- **CHANGED-LRR** (site 21.4, sources 1, 3): Site: "When a player replenishes commodities, that player takes the commodity tokens from the supply." BR (23.4): "When a player replenishes or gains commodities..."
Matches: 0

### 26 Construction → [R_construction.php](R_construction.php)

- **CHANGED-LRR** (site 24.2, sources 1, 3): Site: "the active player may place either one PDS or one space dock on a planet they control. Then, that player may place an additional PDS". BR (26.2): "the active player may either place a structure on a planet they control, or use the 'Production' ability of 1 of their space docks. Then, that player may place a structure on a planet they control."
- **CHANGED-LRR** (site 24.3, sources 1, 3): Site: the secondary player spends a strategy token "and place[s] that command token in any system... Then, that player places either one PDS or one space dock on a planet they control in that system." BR (26.3): "may spend one command token from their strategy pool to place 1 structure on a planet they control." BR has no token placement in a system and no limit to that system.
- **CHANGED-LRR** (site 24.4, source 1): Site: "places either a PDS or space dock... take that PDS or space dock". BR (26.4): "places a structure... take that structure".
Matches: 0

### 27 Control → [R_control.php](R_control.php)

- **CHANGED-LRR** (site 25.4, source 1): BR (27.4) adds "if that control does not default to a coexisting player".
- **CHANGED-LRR** (site 25.5, source 1): Site: "if they no longer have units on it and another player has units on it." BR (27.5): "...non-coexisting units on it and another player has non-coexisting units on it."
- **CHANGED-LRR** (site 25.5(a), source 1): Site: "The player that placed units on the planet gains control of that planet." BR (27.5(a)): "The player with non-coexisting units on the planet gains control of that planet, if able, otherwise the planet reverts to being uncontrolled."
- BR 27.1(d), "gain one relic" on a relic planet, matches R_fracture note 11 (source 7). That note is on R_fracture, not on R_control.
Matches: 1

### 28 Cost → [R_cost.php](R_cost.php)

- **NEW**: BR (28.1(a)): "If a player produces multiple units of the same type for their cost, the combined cost of those units is their shared cost attribute."
Matches: 0

### 29 Custodians token → [R_custodians_token.php](R_custodians_token.php)

- **NEW**: BR (29.1(a)): "A player cannot resolve an ability or game effect to place units on Mecatol Rex until the custodians token has been removed." The site only restricts committing ground forces (site 27.1, R_invasion note).
Matches: 0

### 30 Damaged → no site page

BR adds a new section. The closest site coverage is [R_sustain_damage.php](R_sustain_damage.php), items 87.1–87.3.
- BR intro ("Damaged units are placed on their side and repair during the status phase") matches R_sustain_damage 87.1/87.3. This is counted as a match.
- **PARTIAL**: BR (30.1): "A unit cannot become damaged if it is already damaged." The site only says a damaged unit cannot use Sustain Damage. It has no general rule for other effects that damage units.
Matches: 1

### 31 Deals → [R_deals.php](R_deals.php)

- **NEW**: BR (31.5): "Players may simultaneously make related but separate binding and non-binding deals."
Matches: 0

### 32 Defender → [R_defender.php](R_defender.php)

- **CHANGED-LRR** (site intro, sources 1, 3): Site: "During either a space or ground combat, the player who is not the active player is the defender." BR: "During combat, the participating player who is not the active player is the defender."
Matches: 0

### 33 Deploy → [R_deploy.php](R_deploy.php)

- **CHANGED-LRR** (site 30.3, sources 1, 8): Site: "A unit's Deploy ability can be resolved only once per timing window." BR (33.3): "...can be resolved only once each time the ability's conditions are met to place that unit on the game board."
Matches: 0

### 34 Destroyed → [R_destroyed.php](R_destroyed.php)

- **NEW**: BR (34.1(a)): "Some abilities 'produce' and 'assign' a hit as part of their effect, in these cases, a player may still resolve abilities or game effects which would allow them to cancel that hit, before that hit is assigned."
Matches: 0

Sections with only matches or "[none]": 2 Action cards, 6 Adjacency (BR 6.5/6.5(a) ingress/egress matches R_fracture note 5, which is on R_fracture rather than R_adjacency), 13 Attacker, 20 Combat, 22 Command tokens, 24 Component action, 25 Component limitations, 35 Diplomacy.

_BR sections 36–67. All BR topics in this range have a site page. Sections marked `[none]` in BR (42 Fleet pool, 46 Game round, 50 Hyperlanes, 51 Imperial, 53 Influence, 54 Initiative order, 56 Leader sheet, 58 Leadership, 61 Mechs, 63 Move, 66 Neighbors) are unchanged and not listed. The site has no LRR section for Entropic scar, Expedition, Fracture, Neutral units or Space stations (notes only), so BR's new LRR-style items there were compared against notes. BR 59 is retitled "Legendary planets and space stations" and maps to R_legendary_planets.php. The only bracketed reasons in this range are "[removed]" (36.10, 44.1(d)), "[unmodified from the Thunder's Edge rulebook]" (39.1(a) expedition costs, which match the site), and "[redundant with the player-based enforcement of capacity rules, but possibly a helpful clarification]" (67.2(b))._

### 36 Elimination → [R_elimination.php](R_elimination.php)

- **CHANGED-LRR** (site 33.2, source 1): Site: "all of the units, command tokens, control tokens, promissory notes, technologies, command sheets, and the faction sheet that matches that player's faction or color are returned to the game box" — BR (36.2): "all components matching that player's faction or color are returned to the game box".
- **NEW**: BR (36.2(a)): "Faction-specific components remain in play unless and until their game effects can no longer interact with any other player or the game board." The site states no general principle, only per-faction notes (F_empyrean, F_muaat, F_rebellion, F_ral_nel, F_firmament). Would belong under site 33.2.
- **REMOVED**: BR (36.10): "[removed]". Site 33.10 (source 1) still lists the per-faction elimination cases (Nekro assimilator, Creuss wormholes, Naalu "0" token, Ul attachments, Mahact tokens). BR replaces these with 36.2(a).
Matches: 0

### 37 Entropic scar → [R_entropic_scars.php](R_entropic_scars.php)

- **NEW**: BR (37.1(b)): "The "Deploy" unit ability cannot be used to place a unit into an entropic scar." Not on R_entropic_scars or R_deploy. Would belong on R_entropic_scars.php Notes (and possibly R_deploy.php).
Matches: 5

### 38 Exhausted → [R_exhausted.php](R_exhausted.php)

- **CHANGED-LRR** (site 34 intro, sources 1, 3): Site: "A player cannot resolve abilities or spend the resources or influence of an exhausted card." — BR (38 intro): "A player cannot resolve active abilities…". This fits the site's own 34.4(a) (passive abilities still apply).
Matches: 0

### 39 Expedition → [R_expedition.php](R_expedition.php)

- **PARTIAL**: BR (39.4(b)): "places that many infantry on Thunder's Edge, and gains control of that planet." The site note (source 7) covers placing the infantry but does not say that player gains control. BR 39.4(a) also adds "setting aside any control tokens on the Thunder's Edge token", which the site does not mention.
Matches: 9

### 41 Fighter tokens → [R_fighter_tokens.php](R_fighter_tokens.php)

- **CHANGED-LRR** (site 36.3(a), source 1): Site: "If the player cannot replace the token, the unit is destroyed." — BR (41.3(a)): "…the unit is removed from the game board." The site's note (source 4) already says "A future rule change will have any unaccompanied fighter tokens removed, instead of destroyed."
Matches: 0

### 43 Fracture → [R_fracture.php](R_fracture.php)

- **CONFLICT**: Site note on [F_vuilraith.php](F_vuilraith.php) (sources 6, 9): "When The Fracture is brought into play by Al'raith Ix Ianovar, the Vuil'raith player places ingress tokens according to the synergy on the Cabal breakthrough." — BR (43.4/43.4(a)) uses synergy only "If the Fracture was brought into play by a roll from a player gaining their breakthrough". If it was "instead brought into play by another ability", the player uses four systems with different color specialties.
- **PARTIAL**: BR (43 intro and 43.7): the Fracture "is only connected to the rest of the galaxy via ingress and egress systems… A system in the Fracture cannot be adjacent to any non-Fracture system… unless it contains an egress and that system contains an ingress." The site covers ingress/egress adjacency but never says that this is the only connection.
- **NEW**: BR (43.7(b)): "An ingress has no effect if there is not an egress on the game board; and egress has no effect if there is not an ingress on the game board." Would belong on R_fracture.php Notes.
- **NEW**: BR (43.7(c)): "Units cannot move or be moved into or out of the Fracture except via the adjacency created by an ingress and egress." Would belong on R_fracture.php Notes.
- **NEW**: BR (43.8): "Fracture system tiles cannot be purged, swapped, replaced, or otherwise directly manipulated by abilities." Would belong on R_fracture.php Notes.
Matches: 9

### 44 Frontier tokens → [R_frontier_tokens.php](R_frontier_tokens.php)

- **CHANGED-LRR** (site 38.1(a), source 1): Site: "Frontier tokens are not placed on hyperlane tiles." — BR (44.1(a)): "…not placed on hyperlane tiles, or systems in the Fracture during setup."
- **REMOVED**: BR (44.1(d)): "[removed]". Site 38.1(d) (source 1): "A frontier token is placed in the Creuss gate system." is still shown.
Matches: 0

### 45 Game board → [R_game_board.php](R_game_board.php)

- **CHANGED-LRR** (site 39.2(a), sources 1, 8): Site: "The Ghosts of Creuss home system and the wormhole nexus are on the edge of the game board." — BR (45.2(a)): "A system tile such as the Ghosts of Creuss home system, Crimson Rebellion home system, or wormhole nexus is on the edge of the game board if none of its sides are touching another tile."
Matches: 2 (BR's new intro edge definition, which excludes hyperlane and Fracture tiles, is covered by the site's hyperlane note and its Fracture "edge" note)

### 47 Gravity rift → [R_gravity_rift.php](R_gravity_rift.php)

- **CHANGED-LRR** (site 41.2, sources 1, 3, 8, 10): Site: "For each ship that would move out of or through a gravity rift, one die is rolled immediately before it exits the gravity rift system" — BR (47.2): "For each unit that would move out of or through one or more gravity rifts, one die is rolled for each of those gravity rifts; on a result of 1–3, that unit is removed". BR changes "ship" to "unit", rolls once per rift, and drops "immediately before it exits". The site's multi-rift note matches the per-rift roll.
- **NEW**: BR (47.2(d)): "This roll is not a movement effect." Would belong on R_gravity_rift.php Notes.
Matches: 1

### 48 Ground combat → [R_ground_combat.php](R_ground_combat.php)

- **CHANGED-LRR** (site 42 intro, sources 1, 3): Site: "…a planet that contains another player's ground forces" — BR: "…another player's non-coexisting ground forces".
- **CHANGED-LRR** (site 42.1, sources 1, 3): Site: "Each player rolls…; this is a combat roll" — BR (48.1): "Each participating player rolls…; this is called a ground combat roll, or combat roll."
- **CHANGED-LRR** (site 42.4, sources 1, 3): Site: "when only one player (or neither player)" — BR (48.4): "only one participating player (or neither participating player)".
- **CHANGED-LRR** (site 42.4(c), source 1): Site: "the player with one or more ground forces remaining" — BR (48.4(c)): "the participating player with…".
- **CHANGED-LRR** (site 42.4(d), sources 1, 5): Site: "If neither player has a ground force remaining" — BR (48.4(d)): "If no participating player has a ground force remaining".
Matches: 0

### 49 Ground forces → [R_ground_forces.php](R_ground_forces.php)

- **CHANGED-LRR** (site 43 intro, source 1): Site ends with "Some races have unique infantry units." — BR (49 intro) leaves this sentence out: "A ground force is a type of unit. All infantry and mech units in the game are ground forces."
Matches: 0

### 52 Infantry tokens → [R_infantry_tokens.php](R_infantry_tokens.php)

- **CHANGED-LRR** (site 46.3(a), source 1): Site: "If that player cannot replace the token, the unit is destroyed." — BR (52.3(a)): "…the unit is removed from the game board." The site's note (source 4) already agrees with BR.
Matches: 0

### 55 Invasion → [R_invasion.php](R_invasion.php)

- **CHANGED-LRR** (site 49.2, sources 1, 3): Site: "If the active player has ground forces in the space area of the active system, that player may commit…" — BR (55.2): adds "or coexisting on planets in that system… and any of those coexisting ground forces to the planets that contain them."
- **CHANGED-LRR** (site 49.2(a), sources 1, 3): Site: "…places that ground force unit on that planet." — BR (55.2(a)): adds "if that unit was coexisting, that player's units on that planet stop coexisting."
- **NEW**: BR (55.2(d)): "Non-coexisting units that are placed on planets during a tactical action are treated as if they were committed during this step." Would belong under site 49.2.
- **CHANGED-LRR** (site 49.4, sources 1, 3): Site: "…contains another player's ground forces" — BR (55.4): "…another player's non-coexisting ground forces".
- **PARTIAL**: BR (55.4(b)): "Before the active player gains control of any planets, that player may end coexistence for up to 1 other player's units on each of those planets which were in coexistence at the start of the tactical action, and return to the start of the "Ground Combat" step." R_coexistence.php notes (source 7) let a player who wins start more ground combats against coexisting players. They do not include BR's "at the start of the tactical action" limit or its "up to 1 other player per planet" wording.
- **CHANGED-LRR** (site 49.5(a), sources 1, 3): Site: "any structures on the planet that belong to other players are immediately destroyed." — BR (55.5(a)): "all non-coexisting structures controlled by other players on that planet are destroyed."
- **CHANGED-LRR** (site 49.5(d), sources 1, 5): Site: "…the defender retains control of the planet and places one of their control tokens on the planet." — BR (55.5(d)): adds "unless control would otherwise default to a coexisting player" (and "all participating units" in place of "all units belonging to both players").
Matches: 0

### 57 Leaders → [R_leaders.php](R_leaders.php)

- **PARTIAL**: BR (57.4(a)): "Agents can be used during a combat a player is not participating in." This is not under site 51.4. R_combat.php has a related note (source 4), but only about "start of a combat" abilities: "Abilities that trigger "at the start of a combat", other than those on agents, can only be resolved during a combat in which the player resolving them is participating."
- **CHANGED-LRR** (site 51.6(b), sources 1, 8): Site: "they flip it over to its unlocked side." — BR (57.6(b)): adds "and can use its abilities."
Matches: 0

### 59 Legendary planets and space stations → [R_legendary_planets.php](R_legendary_planets.php)

- **CHANGED-LRR** (site 53 intro, sources 1, 7, 8): Site: "Legendary planets grant the player that controls them unique, planet-specific abilities." — BR: "Legendary planets and space stations grant… unique abilities to the corresponding planet or space station." BR extends the whole section to space stations. Neither site page says space stations can be legendary.
- **CHANGED-LRR** (site 53.1, sources 1, 7, 8): Site: "A legendary planet is indicated by…" — BR (59.1): "A legendary planet or space station is indicated by the legendary planet icon."
- **CHANGED-LRR** (site 53.2, sources 1, 7, 8): Site: "…its legendary planet ability card…" — BR (59.2): "When a player gains control of a legendary planet or space station, they also place its legendary ability card—if any—…"
- **NEW**: BR (59.2(c)): "When a player loses control of a legendary planet or space station, they also lose control of its legendary ability card—if any—and must return that card to the supply." Would belong on R_legendary_planets.php.
- **CHANGED-LRR** (site 53.4, source 1): Site: "If a legendary planet's planet card is purged, its corresponding legendary planet ability card is also purged." — BR moves this to 59.2(d) and adds "or space station's".
- **NEW**: BR (59.4): "Abilities may reference legendary ability cards as either or both "legendary planet ability cards" and / or "legendary space station ability cards" interchangeably." Would belong on R_legendary_planets.php.
Matches: 3

### 60 Mecatol Rex → [R_mecatol_rex.php](R_mecatol_rex.php)

- **CHANGED-LRR** (site 54 intro, source 1): Site: "Mecatol Rex is the planet placed in the center of the game board during setup." — BR (60): "Mecatol Rex is a legendary planet system placed in the center…". The site's note (source 7) says the tile 18 Mecatol Rex is not legendary and only the tile 112 version is. BR treats Mecatol Rex as legendary without that distinction.
Matches: 0

### 62 Modifiers → [R_modifiers.php](R_modifiers.php)

- **NEW**: BR (62.2(a)): "A "+" or "-" that is not accompanied by a value is simply a reminder of another ability or game effect." Would belong under site 56.2.
Matches: 0

### 64 Movement → [R_movement.php](R_movement.php)

- **CHANGED-LRR** (site 58.4(f), source 1): Site: "The ship must move along a path of adjacent systems, and the number of systems the ship enters cannot exceed its move value." — BR (64.4(f)): "…including the active system and each system the ship moves through (counting a system separately each time the ship moves through it)—and the number of systems in that path cannot exceed the ship's move value. A ship cannot move if its move value leaving any system on the path would be insufficient to reach the next system on that path."
- **CHANGED-LRR** (site 58.5, sources 1, 3): Site: "…it may transport ground forces and fighters." — BR (64.5): adds "transported units do not "move" for the purposes of triggering abilities or game effects."
Matches: 1

### 65 Nebula → [R_nebula.php](R_nebula.php)

- **CHANGED-LRR** (site 59.1 and 59.1(a), sources 1 / 1,2,7): Site: "A ship can only move into a nebula if it is the active system." — BR (65.1): "Units can move into and out of nebulas, but cannot move through them." The site's note (source 4) already says "A future rule change will allow ships to move into a nebula when it is not the active system."
- **CHANGED-LRR** (site 59.2, sources 1, 3, 8): Site: "treats its move value as "1"" — BR (65.2): "reduces its move value to "1"".
- **NEW**: BR (65.2(b)): "Ships that have a move value of "0" do not increase that value." Would belong under site 59.2.
Matches: 3

### 67 Neutral units → [R_neutral_units.php](R_neutral_units.php)

- **CONFLICT**: Site note (source 6): "The speaker makes any decisions for neutral units other than assigning hits during combat, such as assigning hits produced by Space Cannon." — BR (67.4(b)): "a random player other than the active player makes that decision instead."
- **CONFLICT**: Site note (source 6): "If there are no neutral units of a given type left in the supply, and one would be placed, it is not placed." — BR (67.5): "Neutral units are not component limited; if neutral units are depleted, players can use a suitable replacement, such as plastic units of an unused color."
- **NEW**: BR (67.2(a)): "Game effects or abilities which would destroy neutral units, or remove them from the game board follow the same priority unless otherwise specified." Would belong on R_neutral_units.php Notes.
- **NEW**: BR (67.2(b)): "Neutral fighters do not count against neutral ships' capacity." BR note: "[redundant with the player-based enforcement of capacity rules, but possibly a helpful clarification]". Would belong on R_neutral_units.php Notes.
- **PARTIAL**: BR (67.4): "…neutral units revert a planet to being uncontrolled instead of establishing control." The site note (source 7) says only that neutral units "are considered to be another player's ships… there is no neutral player". It does not cover reverting a planet to uncontrolled, and it says "ships" where BR says "units".
Matches: 5

_Part 3 covers BR sections 68 (Objective cards) through 110 (Wormholes), which runs to the end of doc6.txt. This part of BR has no bracketed reason notes. Its only editorial markers are "[removed]", "[renumbered]" and "[none]". The sections marked [none] are 73 Politics, 76 Promissory notes, 80 Relics, 82 Resources, 88 Speaker, 89 Status phase, 91 Strategy card, 92 Strategy phase, 98 Tactical action, 100 Technology SC, 101 Trade, 102 Trade goods, 107 Victory points and 109 Wormhole nexus. Every BR section here has a site page. 87 Space station ([R_space_stations.php](R_space_stations.php)) and 96 Synergy ([R_synergy.php](R_synergy.php)) are notes-only pages with no LRR list. Site item numbers below are the CSS-counter positions the site renders. The site uses LRR 2.0 section numbers, for example 61 Objective Cards and 96 Units._

### 68 Objective cards → [R_objective_cards.php](R_objective_cards.php)

- **NEW**: BR (68.16(a)): "A player cannot control any planets in a purged home system." Would belong on R_objective_cards.php under 61.16 as (a). The only related site text is a Saar/Silver Flame note on [C_relics.php](C_relics.php).
- **CHANGED-LRR** (site 61.21(a), sources 1, 3): Site: "If a player draws a secret objective and has more than three, that player must choose one of their unscored secret objectives and return it to the deck." BR (68.21(a)): "If a player ever has more than their maximum number of secret objectives, that player must choose one … and return it to the deck, if able." BR adds "ever", a variable maximum, and "if able". (61.21 "maximum of three" vs "up to three total" is a wording-only match.)
Matches: 2 (BR .16(b) on public objectives without a home-system space station matches [R_space_stations.php](R_space_stations.php) note 6, source 7.)

### 69 Opponent → [R_opponent.php](R_opponent.php)

- **CHANGED-LRR** (site intro paragraph, source 1): Site: "…or has ground forces on the planet at the start of a ground combat." BR (69 intro): "…or has non-coexisting ground forces on the planet…". The site states this nowhere, including [R_coexistence.php](R_coexistence.php).
Matches: 0

### 70 PDS → [R_pds.php](R_pds.php)

- **REMOVED** (site 63.4, source 1): "If a player's PDS is ever on a planet that does not contain any of their own ground forces and contains a unit that belongs to another player, that PDS is destroyed." BR (70.4): "[removed]". It is replaced by the general rule in BR Structures 93.7.
Matches: 0

### 71 Planets → [R_planets.php](R_planets.php)

- **PARTIAL**: BR (71.3(a)): "Planets that have multiple planet traits count as having each of those traits." The site has only the exploration-specific note "If a planet has multiple traits, the player exploring the planet chooses which … deck to draw from" on [R_exploration.php](R_exploration.php) and [F_ul.php](F_ul.php). The general rule is missing from R_planets.php.
- **CHANGED-LRR** (site 64.4, sources 1, 3): Site: "Some planets have a technology specialty, which allows those planets to be exhausted to satisfy a prerequisite…". BR (71.4): "…have one or more technology specialties, which allows those planets to be exhausted to satisfy prerequisites…".
- **PARTIAL**: BR (71.6, new): "Some planets are relic planets, as indicated by the relic planet icon. When a player gains control of a relic planet, if that planet was not controlled by another player, they also gain one relic." The site has only a Fracture-specific version: "When a player gains control of a planet in The Fracture that is not already controlled by another player, they draw one relic card" ([R_fracture.php](R_fracture.php) note 11, source 7). BR also renumbers the site's 64.6–64.9 (Planet Card heading through "cannot spend an exhausted planet") to .7–.10.
- **PARTIAL**: BR (71.11): "Some non-planet, non-station cards (such as The Deepwrought Scholarate's Ocean cards) contain resource and influence values. These cards may be exhausted and readied as if they were planet cards…". The site covers only the faction case: "Ocean cards are spent as though they were planet cards" ([F_deepwrought.php](F_deepwrought.php), source 6). There is no general rule on R_planets.php.
Matches: 0

### 72 Planetary shield → [R_planetary_shield.php](R_planetary_shield.php)

- **REMOVED** (site 65.1, source 1): "The Planetary Shield ability does not prevent a planet from being affected by the X–89 Bacterial Weapon technology." BR (72.1): "[removed]". The site's note 2 (source 10, Codex Ω version) already treats Planetary Shield as blocking X–89 Ω.
- **REMOVED** (site 65.3(a), source 1): "Units treated as if they do not have a Planetary Shield ability cannot use the Magen Defense Grid technology." BR (72.3(a)): "[removed]". BR renumbers 65.3(b) to .3(a).
Matches: 2 (intro; .2 Harrow, which is 65.2 renumbered to .1)

### 74 Producing units → [R_producing_units.php](R_producing_units.php)

- **CHANGED-LRR** (site 67.4(a), source 1): Site: "A player cannot produce a unit on a planet they do not control." BR (74.4(a)): "…unless that planet also contains their coexisting units." The site's [R_coexistence.php](R_coexistence.php) note 18 (source 9) partly covers this: coexisting units may produce ground forces but not ships.
Matches: 0

### 75 Production → [R_production.php](R_production.php)

- **CHANGED-LRR** (site intro, sources 1, 3): Site: "During the Production step of a tactical action, the active player can resolve the Production ability of each of their units that are in the active system…". BR (75 intro): "Some abilities or game effects allow players to resolve the 'Production' ability of some of their units to produce units."
- **CHANGED-LRR** (site 68.1(a), sources 1, 3): Site: "If the active player has multiple units in the active system…". BR (75.1(a)): "If a player has multiple units…".
- **CHANGED-LRR** (site 68.2, sources 1, 3): Site: "…that player must place them in the active system." BR (75.2): "…must place them in the same system as those units."
- **CHANGED-LRR** (site 68.3, sources 1, 3, 5): Site: "…on planets that contain a unit that used its Production ability." BR (75.3): adds "in the same system as those units."
Matches: 0

### 77 Purge → [R_purge.php](R_purge.php)

- **CHANGED-LRR** (site 70.1, sources 1, 7, 8): Site: "…that component is removed from the game and returned to the box." BR (77.1): "…that component and each component attached to it are removed from the game…". The site covers only planet cards: [R_attach.php](R_attach.php) says "If a planet card is purged, also purge all cards that are attached to that planet card."
Matches: 0

### 78 Readied → [R_readied.php](R_readied.php)

- **CHANGED-LRR** (site 71.4, sources 1, 3): Site: "…a player cannot resolve that card's abilities…". BR (78.4): "…cannot resolve that card's active abilities…". This is consistent with site note 1 that passive abilities still apply.
Matches: 0

### 79 Reinforcements → [R_reinforcements.php](R_reinforcements.php)

- **NEW**: BR (79.2): "A player's components that are removed from the game board are returned to their reinforcements unless otherwise specified." It would belong on R_reinforcements.php as 72.2. The site states this only for destroyed units, on R_destroyed.php.
Matches: 0

### 81 Rerolls → [R_rerolls.php](R_rerolls.php)

- **REMOVED** (site 74.3, source 1): "Die rerolls must occur after rolling the dice, before other abilities are resolved." BR (81.3): "[removed]".
Matches: 0

### 84 Space cannon → [R_space_cannon.php](R_space_cannon.php)

- **CHANGED-LRR** (site 77.2 intro paragraph, source 1): Site: "During a tactical action, after the Move Ships substep…, beginning with the active player and proceeding clockwise, each player may use the Space Cannon ability…". BR (84.2): "A unit with the 'Space Cannon' ability may be able to destroy another player's ships. To use the 'Space Cannon' ability, such as during the 'Space Cannon Offense' step, players resolve the following steps". BR no longer ties Space Cannon to the tactical action.
- **CHANGED-LRR** (site 77.3, sources 1, 3): Site: "The player rolls dice for each of their units in the active system that has the Space Cannon ability…". BR (84.3): "Each player may use the 'Space Cannon' ability of each of their units in the active system by rolling a specific number of dice for each of those units…".
- **CHANGED-LRR** (site 77.6 intro paragraph, source 1): Site: "During the invasion step…, after ground forces have been committed…, players other than the active player can resolve the Space Cannon ability of their units on those planets". BR (84.6): "A unit with the 'Space Cannon' ability may also be able to destroy another player's ground forces after they are committed to its planet. During the 'Space Cannon Defense' step, players resolve the following steps". BR drops "players other than the active player", which fits the site's coexistence note 2(h).
Matches: 1 (.1(b), the "Space Cannon X (xY)" display rule, which is 77.3(b) on the site)

### 85 Space combat → [R_space_combat.php](R_space_combat.php)

- **CHANGED-LRR** (site intro, sources 1, 3): Site: "After resolving the Space Cannon Offense step of a tactical action, if two players have ships in the active system, those players must resolve a space combat." BR (85 intro): "During the 'Space Combat' step of an tactical action, if the active player has ships in the space area of a system that contains another player's ships, those players resolve a space combat in that system."
- **CHANGED-LRR** (site 78.1, source 1): Site: "If the active player is the only player with ships in the system, they skip…". BR (85.1): "If the active player controls all ships in the space area of the active system, they skip…".
- **CHANGED-LRR** (site 78.5, sources 1, 3): Site: "…this is called a combat roll." BR (85.5): "…this is called a space combat roll, or combat roll."
Matches: 0

### 86 Space dock → [R_space_dock.php](R_space_dock.php)

- **REMOVED** (site 79.4, source 1): "If a player's space dock is ever on a planet that does not contain any of their ground forces and contains a unit that belongs to another player, that space dock is destroyed." BR (79.4): "[removed]".
- **REMOVED** (site 79.4(a), sources 1, 5, 6): "The Clan of Saar's Floating Factory … is destroyed when it is blockaded…". BR (79.4(a)): "[removed]".
Matches: 0

### 87 Space station → [R_space_stations.php](R_space_stations.php) (notes-only page, no LRR list)

- **PARTIAL**: BR (87.1): "A space station is indicated by the Space Station icon." Site note 1 says only "Several systems contain space stations." It does not mention the icon.
- **NEW**: BR (87.2(b)): "If a player loses control of a space station, they return that card to the deck." The site has nothing on what happens to the card when control is lost.
- **PARTIAL**: BR (87.3): "Each space station has a corresponding planet card, which is gained exhausted…". Site note 3 (source 7) has the planet card and exhaust/ready rules but not "gained exhausted".
- **PARTIAL**: BR (87.4): "Units cannot be committed to, produced on or placed on space stations, and they do not count as planets for the purposes of being elected or objectives." Site note 4 covers only "Structures and ground forces" and does not mention "produced on". Site note 6 covers objectives. The site does not say space stations cannot be elected. (Site note 5 says they count as planets for voting, which does not conflict.)
Matches: 6 (intro, .2, .2(a), .5, .6, .7)

### 90 Strategic action → [R_strategic_action.php](R_strategic_action.php)

- **NEW**: BR (90.1(b)): "Players have an opportunity to resolve the secondary ability of a strategy card even if an ability or game effect ends a player's turn while using an ability of that strategy card." It would belong on R_strategic_action.php as 82.1(b).
Matches: 0

### 93 Structures → [R_structures.php](R_structures.php)

- **PARTIAL**: BR (93.7, new): "When a player gains control of a planet, all non-coexisting structures controlled by other players on that planet are destroyed." The site has this rule without "non-coexisting", at [R_invasion.php](R_invasion.php) 49.5(a) (sources 1, 3): "…any structures on the planet that belong to other players are immediately destroyed." R_structures.php does not have it. BR uses this rule to replace the removed PDS 63.4 and space dock 79.4.
Matches: 3 (.4, .5, .6)

### 94 Supernova → [R_supernova.php](R_supernova.php)

- **CHANGED-LRR** (site 86.1, sources 1, 3): Site: "A ship cannot move through or into a supernova." BR (94): "A unit cannot move through or into a supernova." Site note 2 (source 4) anticipates this as "A future rule change…".
Matches: 0

### 95 Sustain damage → [R_sustain_damage.php](R_sustain_damage.php)

- **NEW**: BR (95.4(b)): "Some abilities 'produce' and 'assign' a hit as part of their effect, in these cases, a unit is only eligible to be hit if the produced hit would be assigned to that unit." It would belong on R_sustain_damage.php as 87.4(b).
Matches: 0

### 96 Synergy → [R_synergy.php](R_synergy.php) (notes-only page)

- **CONFLICT**: Site note 1 (source 7): "…allowing components of one color to be treated as the other for some game effects". Site notes 2 and 3 limit synergy to researching and scoring objectives. BR (96.1): "…may treat that technology or technology speciality as the other color instead, for all purposes."
Matches: 2 (intro, .2)

### 97 System tiles → [R_system_tiles.php](R_system_tiles.php)

- **NEW**: BR (97.8): "Fracture tiles contain 2 or more systems; each hexagonal portion of each Fracture tile is a separate system for all purposes." No site page says this, including [R_fracture.php](R_fracture.php). It would belong on R_system_tiles.php as 88.8 or as an R_fracture.php note.
Matches: 0

### 99 Technology → [R_technology.php](R_technology.php)

- **CHANGED-LRR** (site 90.14, source 1; BR numbers it .13): Site: "…exhaust a planet they control that has a technology specialty to ignore one prerequisite symbol…". BR (99.13): "…that has one or more technology specialties to satisfy one prerequisite symbol of the matching type … for each of those technology specialties." BR changes "ignore" to "satisfy" and allows multiple specialties.
- **NEW**: BR (99.23): "A Valefar Assimilator token on a unit upgrade technology covered by a breakthrough unit upgrade, or on top of a breakthrough unit upgrade, gains the unit upgrade technology, not the breakthrough unit upgrade." It would belong on R_technology.php as 90.23 or on [F_nekro.php](F_nekro.php).
Matches: 1 (.12(d), the synergy-for-research rule, which matches [R_synergy.php](R_synergy.php) note 2)

### 103 Transactions → [R_transactions.php](R_transactions.php)

- **CHANGED-LRR** (site 94.2, sources 1, 3, 8): Site: "…up to one promissory note to a neighbor in exchange for…". BR (103.1, new first item): "…up to one promissory note to another player in exchange for…". BR also renumbers the site's 94.1/94.1(a) (turn and neighbor limits) to .2/.2(a).
- **NEW**: BR (103.1(a)): "A player cannot exchange components as part of a transaction which at the time of that transaction would be subject to the resolution of abilities or game effects involving another player."
- **NEW**: BR (103.7): "Players cannot exchange attached cards as part of a transaction, without also exchanging the components those cards are attached to as part of that transaction."
Matches: 0

### 104 Transport → [R_transport.php](R_transport.php)

- **CHANGED-LRR** (site 95.1, source 1): Site: "During a tactical action, it can pick up and transport units from the active system, the system it started its movement in, and each system it moves through." BR (104.1): "A moving ship can pick up and transport units from the active system, the system it started in, and each system it would move through that does not contain one of their faction's command tokens." BR drops "During a tactical action". Site note 4 (source 4) anticipates this as "A future rule change…".
- **REMOVED** (site 95.3, sources 1, 3, 5): "Fighters and ground forces cannot be picked up from a system that contains one of their faction's command tokens other than the active system." BR (104.3): "[removed]". BR folds this rule into .1 and renumbers 95.4 to .3.
Matches: 1 (.2)

### 105 Units → [R_units.php](R_units.php)

- **CHANGED-LRR** (site 96.14, source 1): Site: "Units exist either on the game board or in a player's reinforcements." BR (105.3): adds ", unless otherwise specified." The site renders this item as 96.14, not LRR 96.3, because it numbers the 11 unit-count lines as items.
Matches: 0

### 106 Unit upgrades → [R_unit_upgrades.php](R_unit_upgrades.php)

- **CHANGED-LRR** (site intro, sources 1, 3): Site: "A unit upgrade is a type of technology card." BR (106 intro): "…a type of technology card or breakthrough unit."
- **NEW**: BR (106.1(b)): "A breakthrough unit upgrade is not a technology card, shares a unit type with a unit that is printed on a player's faction sheet, and does not have a higher roman numeral… upgrades a unit upgrade technology of the same type, if applicable." It would belong on R_unit_upgrades.php as 97.1(b). No site page mentions "breakthrough unit".
- **NEW**: BR (106.2(a)): "Breakthrough unit upgrades cover both the unit of the same type that is printed on a player's faction sheet, as well as the corresponding unit upgrade technology, if any." It would belong on R_unit_upgrades.php as 97.2(a).
Matches: 0

### 108 Warfare → [R_warfare.php](R_warfare.php)

- **CHANGED-LRR** (site intro, source 1): Site: "The Warfare strategy card allows a player to remove a command token from the board and redistribute…". BR (108 intro): "…allows a player to perform a tactical action without placing a command token, as well as redistribute…".
- **CHANGED-LRR** (site 99.1, sources 1, 3): Site: "Step 1: The active player removes any one of their command tokens from the game board…". BR (108.1): "The active player performs a tactical action in any system without placing a command token, even if the system already has their command token in it; that system still counts as being activated."
- **CHANGED-LRR** (site 99.2, sources 1, 3): Site: "Step 2: The active player can redistribute their command tokens." BR (108.1(a)): "That player may redistribute their command tokens before and after this action."
- **CHANGED-LRR** (site 99.3, sources 1, 3): Site: "…resolve the Production ability of one space dock in their home system." BR (108.2): "…resolve the 'Production' ability of any or all units in their home system."
- **REMOVED** (site 99.3(a), source 1): "The command token is not placed in their home system." BR (108.3): "[removed]". BR's old .3 secondary and its (a) are dropped and the secondary moves to .2.
- **CONFLICT**: Four site notes assume the one-space-dock wording. [F_arborec.php](F_arborec.php) (source 1): "cannot use the secondary ability of the Warfare strategy card to use the Production ability of a Letani Warrior" (also Letani Behemoth). [F_ul.php](F_ul.php) (source 1): the same for Hel–Titan. [F_keleres.php](F_keleres.php) (source 4): "they use the Production ability of a single space dock in their home system". BR 108.2 ("any or all units in their home system") contradicts all four.
Matches: 0

### 110 Wormholes → [R_wormholes.php](R_wormholes.php)

- **CHANGED-LRR** (site 101.4, source 1): Site: "There are two advanced types of wormhole: delta and gamma." BR (110.3): "There are also advanced types of wormholes (e.g., delta and gamma)." This makes the list open-ended. BR also restructures the items: site 101.2 becomes .2(a), 101.3 becomes .2(b), and 101.4 becomes .3.
Matches: 4 (.1; .2, the general "use a wormhole for any adjacency" rule, implied by the [R_adjacency.php](R_adjacency.php) note; .2(a); .2(b))

Other matches not listed above: 83 Ships (1).
