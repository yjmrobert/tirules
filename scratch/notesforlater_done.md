## some rules have exceptions. in the rules reference
Commit: 26ead52
some rules have exceptions. in the rules reference part these should be ignored... for now but in notes they need to be accounted for
ie A non–fighter ship cannot use its Sustain Damage ability to cancel a hit produced by an anti–fighter barrage roll.1 should account for waylay

## Page titles are not formatted correctly. see: anti-fighter
Commit: 64f7ec1
Page titles are not formatted correctly. see: anti-fighter barrage

## A single planet may have multiple attachments.2 Unverified
Commit: 7bb1037
A single planet may have multiple attachments.2
Unverified: 2 The matched RulesPal entry (bombardment) does not address this.
this is dumb stuff like this should meerly switch to an asterisk

## related topics needs a review
Commit: eec5462, e47e482, 100e6db, 83b8c2c, 1e766f6, e749d75  (rule: LRR 2.0 RELATED TOPICS lists + topics a note is actually about; existing extras kept)
related topics needs a review


## links to thinks like factions that have their own
Commit: d5c2ad0, 5fb88bc  (faction names -> /F_x, rule topics -> /R_x, self-links unlinked; component links kept on wiki)
links to thinks like factions that have their own dedicated page like mahact on the attacker page should link to their pages on this site. When the Mahact player resolves their Benediction hero ability, the player that had their ships moved will be the attacker.4

## how do we check for updates from these
Commit: c6e1032  (weekly GitHub Action + tools/check_sources.py; snapshots on source-snapshots branch; one-time diff vs scratch found 1 missing RulesPal entry, added to scratch)
how do we check for updates from these sources. i dont want to have to do it manually. scheduled github actions? background php?

## these seem like they can be consolidated:
Commit: e010a81  (merged three capacity-timing notes into one with sub-points)
these seem like they can be consolidated:
If a player moves more fighters and/or ground forces into a system containing another player’s ships, capacity limits must be met before proceeding to the Space Cannon Offense substep or the Space Combat step.2
Implicit: 2 RulesPal, “When is capacity checked if a carrier is lost?”: “Immediately whenever it isn’t combat, for example after each player’s Space Cannon Offense volley, before the next player fires.”
If a ship with capacity is destroyed during the Space Cannon Offense step, capacity limits must be met before space combat starts.2,5
Explicit: 2 RulesPal, “When is capacity checked if a carrier is lost?”: “Immediately whenever it isn’t combat, for example after each player’s Space Cannon Offense volley, before the next player fires.”
Unverified: 5 The matched designer ruling does not address this.
If multiple players use Space Cannon abilities during the Space Cannon Offense step, capacity limits must be met after each player’s hits are assigned, before the next player rolls.2
Explicit: 2 RulesPal, “When is capacity checked if a carrier is lost?”: “Immediately whenever it isn’t combat, for example after each player’s Space Cannon Offense volley, before the next player fires.”

## 3.2 through 3.6 should be subitems of 3.1
Commit: e010a81  (example items nested under 3.1; stray notes un-nested)
3.2 through 3.6 should be subitems of 3.1 on the r_capacity

## somethings have more sources listed than they have
Commit: 7c67c56  (62 notes audited: 61 proofs added, F_nekro Alastor note drops source 4)
somethings have more sources listed than they have in proof A coexisting structure is always blockaded, regardless of what ships, if any, are in the system.2,6,7,9 find or add more proof or remove the citation. check everything

## this needs more detail: A player is considered
Commit: 6bd9f42  (objective notes merged as part of coexistence reorganization)
this needs more detail: A player is considered to control a planet they are coexisting on when scoring an objective.2,6,7,9
based on proof for each not expand information where its available and significantly changes the meaning. actually it looks like this one just needs to be combined with a note further down the page. lump this in to consolidation

## unsurpisingly coexist page needs work. mostly consolidation
Commit: 6bd9f42  (merged duplicates, fixed nesting, grouped by topic)
unsurpisingly coexist page needs work. mostly consolidation and ordering

## notes 2 and 3 on combat (attribute) should
Commit: f6b0f0b  (copied to Space Combat and Ground Combat; kept on Combat too, per owner)
notes 2 and 3 on combat (attribute) should only be in space combat and ground combat

## why: (Not among the cited sources.)
Commit: d18ec05  (remark = proof from an uncited source; cited it on R_commodities and 13 other notes with explicit uncited proofs; F_hacan @17 skipped, mislabeled E)
why: (Not among the cited sources.)

## this seems wrong A player may only resolve
Commit: 891e0bc  (site note correct per LRR 30.2a; proof added, wording kept, RulesPal unconfirmed entry not used)
this seems wrong
A player may only resolve a deploy ability to place a unit that is in their reinforcements. A player cannot remove a unit from the board to use its deploy ability.1,8 maybe use the unconfirmed source from rulespal

## this is silly Unverified: 2 The matched RulesPal
Commit: 7da9f24  (quoted lines already removed earlier; last "matched ... does not address" filler on F_vuilraith @37 replaced)
this is silly
Unverified: 2 The matched RulesPal entry (Scanlink) does not address this.
Unverified: 3 The matched Learn to Play passage (Production) does not address this.

## ### Do units 'placed' by an effect cost
Commit: ebfd545  (added place-is-free sub-note on R_cost and R_producing_units)
 ### Do units 'placed' by an effect cost resources, and do they count as producing?

## The following are examples of non–binding deals:5
Commit: 53b2ace  (added four binding examples mirroring the non-binding ones)
 The following are examples of non–binding deals:5
 lets add some examples for binding deals

## Resolving abilities will be by initiative order, starting
Commit: 501ace8  (removed from R_defender; equivalent note already on F_mahact Benediction)
 Resolving abilities will be by initiative order, starting with the Mahact player. As such, the defender may resolve abilities before the attacker, depending on what order those two players are in.*
Unverified: No source found.
i want to move this to under mahact

## lets add the bit about the token limits
Commit: bd50785  (copied component-limits deploy note + proofs to R_deploy; added Related link)
lets add the bit about the token limits to the deploy page

## Wormhole tokens that would be placed in an
Commit: ba56e55  (sub-notes: discarded = supply/reinforcements (*), Wormhole Generator, Hil Colish, gamma (moved), Ion Storm)
Wormhole tokens that would be placed in an entropic scar are discarded instead.
add a note here for the gamma wormhole and the creuss tokens. also indicate discarded means eturned to the supply or a player’s reinforcements as appropriate

## some things seem to have become less specific
Commit: cd9358f  (example already trimmed; site-wide judgment sweep: 13 proposed, owner kept 7 trims)
some things seem to have become less specific. lets look at things like Planets will also ready at the end of each agenda phase. Leaders, relics and technologies will not. becoming Planets will also ready at the end of each agenda phase.

## If a player already has their breakthrough when
Commit: b7ca1ea  (dropped "other than for the sixth and final slice")
If a player already has their breakthrough when they claim a slice, no additional effect will trigger, other than for the sixth and final slice.
"other than for the sixth and final slice." is confusing. just leave it as no additional effect. then let the next note carry the rest

## Thunder’s Edge may be placed in a system that
Commit: 1dec709  (added "(and meets the other requirements)")
Thunder’s Edge may be placed in a system that contains a planet destroyed by the Stellar Converter relic, provided that system contains no other planets (and meets the other requirements)

## note ion storm in entropic scar wormhole removal
Commit: no change: Ion Storm sub-note already added to R_entropic_scars in ba56e55
note ion storm in entropic scar wormhole removal

## "future rule changes" these seem like things BRR
Commit: 8f8ba6c  (5 notes reworded to "intended"; 14 TE sub-items added inline to LRR text)
"future rule changes" these seem like things BRR might have adressed There are 5 types of anomalies after TE
Lets check to see if there are other rules that TE breaks in this way. consider wording changes in BRR's version of the LRR

## A: Once all ships are in, fleet supply
Commit: c820ea1  (old 2018 ordering superseded; added note: rift rolls during movement, fleet pool checked after arrival)
A: Once all ships are in, fleet supply is in violation and must immediately be dealt with. Then, you roll for gravity rift.
this seems to be an old ruling

## Lost Star Chart vs. Enforced Travel Ban (C_action_cards
Commit: no change: site follows the designer ruling; RulesPal contradicts itself (its Lost Star Chart entry agrees); N2 conflict lines kept
Lost Star Chart vs. Enforced Travel Ban (C_action_cards 128, C_agendas 51): the designer ruling says Lost Star Chart overrides the ban; RulesPal says the ban cancels it for movement.

## Classified Document Leaks discarded (C_agendas 19)
Commit: eeb862d  (site follows LRR FAQ over RulesPal; added secret-total clause)
Classified Document Leaks discarded (C_agendas 19): the LRR FAQ says the objective stays in play; RulesPal says it returns to its owner as a secret.

## Prophet's Tears for the Nekro (F_nekro 25)
Commit: no change: site follows designer-answered source 4 over RulesPal; N2 conflict kept
Prophet's Tears for the Nekro (F_nekro 25): the Unofficially Official FAQ says yes; RulesPal says no.

## Gravity rift bonus when crossing the same rift
Commit: d3c445c  (note @5 + F_vuilraith @26 corrected per TE/RAW)
Gravity rift bonus when crossing the same rift twice (R_gravity_rift 4, F_vuilraith 26): the notes say +1 each time; the RAW ruling says the bonus is once per ship per tactical action.

## 41.3 A gravity rift can affect the same
Commit: d3c445c  (first <del> strike-through; TE replacement cited 6,7)
41.3 A gravity rift can affect the same ship multiple times during a single movement. this has changed. i want to make changes in line to the LRR sections but leave the old text as struck through with the new text cited

## If a ship moves through or out of multiple
Commit: d3c445c
If a ship moves through or out of multiple gravity rifts, and/or the same gravity rift multiple times, each instance will provide a +1 to movement, and requires a separate roll for removal. this is wrong the same rift can only apply to each ship once

## Voting with space stations (R_space_stations 10)
Commit: b62c625  (reconciled: can vote, cannot be elected; N7 -> I7; nesting fixed)
Voting with space stations (R_space_stations 10): the site follows the Designer Q&A; the Thunder's Edge rulebook says space stations don't count for voting.

## Uprising with Political Data Nexus Ω (F_xxcha 54)
Commit: no change: site follows designer-answered source 4; RulesPal agrees on the general rule; N2 partial conflict kept
Uprising with Political Data Nexus Ω (F_xxcha 54): RulesPal and the Unofficially Official FAQ partly disagree on which value is used.

## Arborec infantry placement (F_arborec 0)
Commit: 091e8b1  (reversed to follow designer ruling, source 5)
Arborec infantry placement (F_arborec 0): a designer ruling may conflict with the note.

## Retreating from a gravity rift will result in
Commit: e5e8153  (header restored uncited + 3 dropped sub-notes; build_pudding skips uncited headers; site-wide check: only C_objectives Strengthen Bonds list also missing, owner chose to leave it out)
Retreating from a gravity rift will result in the following:
seems like some missing headers including this one. we'll have to find a way to include these if they were removed and keep them uncited. 

## all of retreating from a rift needs to
Commit: e5e8153
all of retreating from a rift needs to be reviewed

## clarify If a ship with capacity would transport
Commit: 0d99026
clarify If a ship with capacity would transport another unit after moving out of or through a gravity rift, but is removed, that unit remains where it is.* this should be clear it only applys to units that would be picked up along the way to the active system after the unit with capacity exits the rift

## this line is interesting. feels like it should
Commit: 7592bd6  (on R_anomalies + 4 type pages, 'intended' wording, E4 proof)
this line is interesting. feels like it should be on all anamolies or only in the anomoly page
All units moving into, through or out of anomalies must follow the same rules as ships moving into, through or out of anomalies.4
Implicit: 4 On Sardakk N’orr’s commander: the LRR “Will also prevent units from being committed to planets in anomalies without the appropriate technology.”
"A future rule change will place the ship movement restrictions of anomalies upon all units."

## Explicit: 7 Thunder's Edge Rulebook p. 13 (Alliance
Commit: c3c19a5  (R_imperial @3: E7 alliance -> I7 coexist passage)
Explicit: 7 Thunder’s Edge Rulebook p. 13 (Alliance variant): units “do not count for scoring objectives or scoring the ‘Imperial’ victory point.” Covers allies, not coexistence.
this seems implicit

## The cited entry (capacity) does not address this.
Commit: no change: already removed in 7bb1037 (stale 'does not address' cleanup)
The cited entry (capacity) does not address this.

## A player may remove a plastic infantry figure
Commit: e9e34af  (* -> 2,5 with I5 designer + I2 RulesPal swap proofs)
A player may remove a plastic infantry figure from a planet or space area, along with any accompanying infantry tokens, if doing so allows them to swap it into the active system and allows them to commit ground forces to and fight ground combats on multiple planets during the Invasion step of the tactical action in that system when they could otherwise not do so.*
Implicit: 2 RulesPal, “When all my plastic fighters or infantry are on the board, can I move some to where I’m producing?”: “you may remove them from systems without your command token.” Covers producing, not committing.

## things that have top level pages such as
Commit: 77dc27b  (13 Mecatol Rex wiki links -> /R_mecatol_rex; ability mentions already local; plain-text linking not done)
things that have top level pages such as bombardment should link to this site not the wiki

## When an effect (such as retreating) moves a
Commit: 1a68c93  (example added on R_modifiers, R_move, R_movement; R_move stale remark removed)
When an effect (such as retreating) moves a unit to an adjacent system, modifying that unit’s move value will have no effect.1
Explicit: 2 RulesPal, “Where can my ships retreat to?”: “Movement bonuses don’t matter, as a retreat always goes to an adjacent system.”

## To resolve movement, players perform the following steps:
Commit: no change: owner chose to leave as is
To resolve movement, players perform the following steps: dont like this indented

## A future rule change will allow ships to
Commit: 8f8ba6c  (already reworded to 'intended' with E4 nebula-rules proof)
A future rule change will allow ships to move into a nebula when it is not the active system.4
Implicit: 4 “The Nebula section of the LRR will be edited to reflect changing the printed move value of a unit to 1.”

## nebula page needs work
Commit: ecc2201  (retreat, bonuses, defender +1 scope, effects list; R_space_combat retreat note generalized)
nebula page needs work

## players fighting in space or ground combat are
Commit: 32a08ee
players fighting in space or ground combat are neighbors

## The Bombardment and Space Cannon steps happen outside
Commit: 6c34438  (added LRR step-order proofs + designer AFB ruling; cites 1,2 and 1,2,5)
The Bombardment and Space Cannon steps happen outside of combat.2
Explicit: 2 RulesPal, “Which kills trigger Nekro’s Technological Singularity?”: “Kills from Space Cannon, Bombardment … happen outside combat.”
The Anti–Fighter Barrage step, however, is a step during combat.2
Explicit: 2 Same entry: “Anti-Fighter Barrage is part of combat and counts.”
can we source this better

## A PDS is both a structure and a unit
Commit: 2252160  (E1 LRR 83; E3 LTP faction sheet + I2 RulesPal, cite 2,3,8)
A PDS is both a structure and a unit.1,2
Explicit: 1 LRR 63: “A PDS (planetary defense system) is a structure that allows a player to defend their territory.”
Explicit: 2 RulesPal, “Does the Codex (Omega) Magen Defense Grid still work if the PDS … has been hit by Disable?”: “it is still a structure.”
Each PDS also has the Planetary Shield ability.3,8
Explicit: 8 PoK rulebook unit card: “PLANETARY SHIELD ✦ SPACE CANNON 6 PDS I.”
Implicit: 3 Learn to Play (war sun): “Your opponents’ PDS units lose PLANETARY SHIELD.”
this has to have a better source too

## "The matched passage (LRR 1.27) is less direct."
Commit: 4217b0d  (22 stale remarks removed across 18 proof files)
"The matched passage (LRR 1.27) is less direct."
The matched passage (Arborec FAQ) is the wrong rule.

## these seem like they can be combined into
Commit: 3a3418a  (R_politics @4 nested under @1)
these seem like they can be combined into a sub item
When resolving the primary ability of the Politics card, the active player cannot show the agenda cards they drew to any other player.2
Explicit: 2 RulesPal, “After Politics, is it public whether the agenda cards went to the top or bottom of the deck?”: “You also can’t show the cards themselves to other players, since you may only reveal hidden components you own.”
Other players may see whether each agenda card is placed on the top or the bottom of the agenda deck. Although the active player cannot show the cards, they may tell other players what the cards are, truthfully or not.2
Explicit: 2 RulesPal, “After Politics, is it public whether the agenda cards went to the top or bottom …?”: “Yes — everyone can see where each card goes; only the faces stay secret … you can tell them what they are (truthfully or not).”

## coexisting? A player cannot produce ground forces
Commit: ee32473  (sub-note added, cites 7,9; no TE prefix on notes)
coexisting?
A player cannot produce ground forces on a planet that contains another player’s ground forces.4
Explicit: 4 “You can’t produce ground forces on a planet with another player’s ground forces.”

## this seems like it should have a 2
Commit: 755275e  (* -> 1,2 with I1 LRR + I2; site-wide * sweep added to deferred)
this seems like it should have a 2
When two players make a trade for a promissory note, the specific promissory note that was traded may be hidden from other players.*
Implicit: 2 RulesPal, “Can I trade on a promissory note I received from another player, and must I show it?”: “you needn’t show it, though the recipient may want to see it first.”

## this citation isnt complete
Commit: 11b7788  (quote completed in 3 files; 'RulesPal,' label added to 53 more source-2 lines)
this citation isnt complete
Implicit: 2 “Can I show my action cards or secret objectives to other players?”: “you may reveal your own hidden cards to anyone at any time” promissory notes in hand are hidden cards of the player.

## this has a 2 but no 2 in proof
Commit: no change: R_promissory_notes @5 already has an E2 RulesPal proof (Creuss IFF entry)
this has a 2 but no 2 in proof
If a player receives a card, such as a promissory note, in a transaction during that card’s timing window, they may play it immediately. For example, a promissory note with “At the start of your turn:” timing may be played immediately if the transaction occurred during the “start of turn” timing window.1,2,5
Explicit: 1 LRR FAQ: “Can a card (such as a promissory note) with a specified timing of a certain window that is acquired from a transaction during that window be played immediately? A: Yes. For example, a promissory note with ‘At the start of your turn:’ timing may be immediately played.”
Explicit: 5 Designer ruling: “You can trade a promissory note and have it be immediately used during the start of turn window.”
either prove it using 2 or remove the citation

## (follow-up) other sources with label inconsistencies
Commit: dadadef  (source 4 -> Designer ruling, 6 -> Community consensus, 3/7/8 label fixes)
also check if there are other sources that have inconsistencies like this

## seems like this should be mentioned on command tokens
Commit: no change: already covered by LRR 20.3a (cites 1,2); owner declined the spent-token note
seems like this should be mentioned on command tokens
### What happens if I would gain a command token but have none left in my reinforcements?
    - id: `command-tokens-are-limited` — grade: Community consensus
    - A: You don't gain it. Your 16 command tokens are a hard limit. Tokens you spend, such as for a secondary ability, go back to your reinforcements, not to your command sheet.

## The matched passage is the LRR index.
Commit: 4217b0d  (stale remarks already removed)
The matched passage is the LRR index.

## on the space combat page we should have retreat
Commit: b52a473  (10 retreat notes nested under uncited 'The following apply to retreats:')
on the space combat page we should have retreat information under a subheader

## make sure this is on the bottom of every
Commit: 5eede82  (moved on 5 lists; R_fracture sub-item left in place)
make sure this is on the bottom of every notes list that contains it: The “0” side of the d10 represents a result of 10.1,2

## The Shared Research law will not allow a
Commit: 8ba58d5  (Shared Research/nebula keep-removed; added anomaly retreat, gravity rift pointer, fighters example; Queue C lines 9721,9854-9869 logged)
The Shared Research law will not allow a player to retreat into a nebula.
review the space combat page changes

## The Nav Suite action card will not allow a
Commit: 4b70ded  (reason added on R_space_combat only; C_action_cards change declined)
The Nav Suite action card will not allow a player to ignore an anomaly while retreating.* [as retreating is not a tactical action]

## do we say anywhere that the player has to
Commit: no change: site says the opposite (need not decide until executing the retreat), per Codex I Retreating with Infantry
do we say anywhere that the player has to declare which ground forces theyre taking with them at the time of announcing retreat?

## try to organize the space combat (and other
Commit: fbe6f8b  (R_space_combat + R_ground_combat reordered by step; R_combat unchanged)
try to organize the space combat (and other combat notes) by the order of steps ie antifighter barrage comes first, retreat comes last.

## A Space Dock is both a structure and a
Commit: 4b4ae38  (E1 LRR 83 + E2 RulesPal pds-and-space-docks-are-structures)
A Space Dock is both a structure and a unit.1,2
Explicit: 1 LRR 79: “A space dock is a structure that allows players to produce units.”
Implicit: 2 RulesPal, on the Hel-Titan: “It is a structure as well as a ground force.”
neither of these prove this. find something better or asterisk it

## Fighters transported during movement remain assigned
Commit: e49396d  (sentence restored + pick-up sub-note cites 1; Queue C 9913 restored)
Fighters transported during movement remain assigned to the transporting ship until movement is complete. They cannot be counted towards a space dock’s allocation until after movement is complete.
If a player moves one of their units with capacity into a system, transporting fighters, they cannot pick up ground forces from a planet in that system with that ship by transferring those fighters to a space dock in that system to free up capacity. [as picking up ground forces is part of movement]

## several notes have credits that arent listed in
Commit: 82ff60d  (site-wide check: 0 cited numbers lack E/I proofs on all 136 proof pages; R_agenda_phase.txt was missing, rebuilt)
several notes have credits that arent listed in proof. prove them or remove

## With two strategy cards, which one sets my
Commit: 9691262  (E2 added to R_strategy_card @2)
 ### With two strategy cards, which one sets my initiative, and must I use the lower card first?
    - id: `initiative-with-two-strategy-cards` — grade: Community consensus
    - A: Only your lower-numbered card sets your initiative. You still take one turn at a time like everyone else, never two in a row, and you may use either card first.
      - hooliganj · 2025-08-12 — https://boardgamegeek.com/thread/3558097/article/46462918#46462918
      - TreacleMiner · 2025-08-12 — https://boardgamegeek.com/thread/3558097/article/46463060#46463060
      - Clipper · 2020-10-09 — https://boardgamegeek.com/thread/2517925/article/35994768#35994768
      - mpappy · 2023-03-26 — https://boardgamegeek.com/thread/3053864/article/41978380#41978380
      - McBartsomeville · 2023-03-26 — https://boardgamegeek.com/thread/3053864/article/41978381#41978381
this is better proof for
A player with two strategy cards may perform the strategic actions of those cards in either order. They still take only one action per turn.2

## mention on supernova that mirage can be place
Commit: 73ab77e
mention on supernova that mirage can be place in it

## An ability that ends a player's turn ends
Commit: e1f9667  (end-of-turn exception added, E4 Il Na Viroset ruling)
An ability that ends a player’s turn ends that turn as soon as it is resolved. No further abilities may be resolved during that same timing window.2,4 [end of turn effects may still be resolved]

## There are four colors of technologies. See your
Commit: 0c49d20
There are four colors of technologies. See your rulebook for images.
    blue - propulsion
    red - warfare
    green - biotic
    yellow - cybernetic?

## Choosing players to resolve the secondary ability of
Commit: 0dd1873
Choosing players to resolve the secondary ability of Trade without spending a command token is not a transaction. Those players do not need to be neighbors of the active player, and it does not count towards the active player’s transaction limit.2
Explicit: 2 “Is replenishing other players’ commodities with Trade a transaction?”: “No — it is a strategy card effect: recipients needn’t be neighbors, can’t refuse, it doesn’t use up a transaction”
this doesnt need to be a subitem

## wheres the proof for this (keep it under
Commit: 6e64a9e  (<p> -> sub-note li with E5 Skootur + I2 proofs)
wheres the proof for this (keep it under the example):
A deal made during a given step is non–binding if any part of it is to resolve during a later step. As such, if Alice makes a deal to chose a player with the primary ability in exchange for commodities from that player after they perform the secondary, then such a deal will be non–binding.2,5

## systems the fracture is touching are also considered
Commit: 3a06ba2  (sub-note cites 7 via I7; nesting fixed)
systems the fracture is touching are also considered to be on the edge of the game board

## lets mention vulraith here:
Commit: dacfd80
lets mention vulraith here:
If The Fracture was brought into play as a result of a player rolling a dice

## can we tab in the rest of this example
Commit: c41b879  (R_transport example nested and made identical to R_capacity, incl. proofs)
can we tab in the rest of this example
h four fighters. On the only planet in that system are eight infantry. There are no other units in the system. When the carrier moves out of the system, it obeys the following:5
Explicit: 5 Same ruling: “You would have to leave some of them on the planet in this case.”
The carrier may transport the four fighters, leaving behind all eight of the infantry in the system.2
Explicit: 2 RulesPal, “Can a carrier pick up more units than its capacity so the excess are destroyed, or leave fighters behind to die?”: “You can’t pick up more than the moving ships’ capacity … But you can load ground forces and leave fighters or infantry already in space behind; capacity is a system total, so those left over are removed if what remains can’t hold them.”
The carrier may transport four of the eight infantry, leaving behind the four remaining infantry in the system. Now that the system has zero capacity, all four of the fighters will be removed.2,5
Explicit: 2 RulesPal, “Can a carrier pick up more units than its capacity so the excess are destroyed, or leave fighters behind to die?”: “You can’t pick up more than the moving ships’ capacity … But you can load ground forces and leave fighters or infantry already in space behind; capacity is a system total, so those left over are removed if what remains can’t hold them.”
The carrier may transport two of the eight infantry and two of the four fighters, leaving behind the six remaining infantry in the system. Now that the system has zero capacity, the two remaining fighters will be removed.2
Explicit: 2 RulesPal, “Can a carrier pick up more units than its capacity so the excess are destroyed, or leave fighters behind to die?”: “You can’t pick up more than the moving ships’ capacity … But you can load ground forces and leave fighters or infantry already in space behind; capacity is a system total, so those left over are removed if what remains can’t hold them.”
The carrier c

## can you retreat out of a system with a
Commit: 629a5f8
can you retreat out of a system with a command token. to the retreat section. unless its already there

## theres gotta be proof for this: faction-specific unit upgrade
Commit: 67198b3  (* -> 2 on R_unit_upgrades and R_technology, I2 'replace' entry)
theres gotta be proof for this:
If a player is playing a faction with a faction–specific unit upgrade, they cannot research or otherwise gain the generic upgrade for that unit type.*

## lets throw proof for the rules references that
Commit: 1bd330c  (build_pudding @rN; 20 Rules Reference items proved on 15 pages)
lets throw proof for the rules references that have sources (warfare and others)

## There are two advanced types of wormhole: delta
Commit: 7b49bc0  (partial <del> + TE item, I9 Sundered quote)
There are two advanced types of wormhole: delta and gamma. These wormholes follow all other wormhole rules. [now epsilon]

## Stymie Ω (Promissory Note) Stymie cannot place
Commit: 511f6c5  (* -> 2,6 with I2 + I6 Avernus ruling)
Stymie Ω (Promissory Note)
Stymie cannot place a command token in the home system of an eliminated player.*
Unverified: No source found. (source this implicitly with a home system stays a home system when a player is eliminated)

## Effects timed 'after the speaker votes', like Bribery,
Commit: beec052  (Zeal sub-note on F_argent)
Effects timed 'after the speaker votes', like Bribery, come right after the Argent vote when Argent is speaker.

## dont like this proof (Viscount Unlenn combat rolls)
Commit: 0ec3498  (E4 Unlenn ruling + I1 LRR 10.1c; cites 1,4)
dont like this proof
This ability only applies to combat rolls. It does not apply to dice rolls for a unit’s Anti–Fighter Barrage ability.4
Explicit: 4 “Does the Crown of Thalnos Relic work with … Anti-Fighter Barrage? A: … no to Anti-Fighter Barrage. The intent is ONLY combat rolls.”

## barony breakthrough should sort notes by combat vs
Commit: d187c98
barony breakthrough should sort notes by combat vs movement abilities of the breakthrough

## want to find somewhere to put this (home planets
Commit: 2ddc38f  (R_control @3)
want to find somewhere to put this     ### Do I control both planets in my home system at the start, and does that trigger 'gain control' effects?
    - id: `home-planets-controlled-at-start` — grade: Community consensus
    - A: You control every home planet from the start, empty or not; a control token on an empty one is just a reminder. Because you begin with control rather than gaining it, abilities like Saar's Scavenge don't trigger at setup.

## this should have this citation (Floating Factory)
Commit: 1a62f4b  (F_saar @31 E5 full garfielder quote)
this should have this citation

Explicit: 5 Designer ruling (garfielder, Sep 19 2017): “if the Saar Space dock was alone when the ships move in, it is destroyed”
This will happen before the Space Cannon Offense step. The Floating Factory is destroyed, even if all of the other player’ ships are destroyed during this step.2,5 

## this source can be applied here as well (Mendosa)
Commit: 3c6fe29  (F_saar @41 * -> 4, I4)
this source can be applied here as well
Explicit: 4 “How does Clan of Saar’s agent, Mendosa, interact with abilities that increase movement such as Gravity Drive or Flank Speed? A: Clan of Saar’s agent, Mendosa, will get an errata to ‘WHEN you activate a system.’ This means other bonuses would be applied after Mendosa takes effect.”
Gravity rifts apply the +1 during movement. This modifier will not be included in Captain Mendosa’s effect.*

## If a third law is put into play, the
Commit: 45489e1  (F_keleres @25, F_xxcha @45, C_objectives @54: * -> 2 with I2)
If a third law is put into play, the Dictate Policy secret objective cannot be scored until the agenda phase.*
Unverified: No source found.
The Drive the Debate secret objective cannot be scored while resolving Executive Order.2
Explicit: 2 RulesPal: “agenda-phase secrets, Drive the Debate included, can’t be scored.”
these should have the same source

## this seems wrong A player cannot use Suffi An
Commit: b68a24d  (owner: pass isn't an action; kept, * -> 1 with I1 LRR 3.1-3.2; same for Fleet Logistics)
this seems wrong A player cannot use Suffi An to pass on the same turn they performed an action.*
Unverified: No source found.

## fleet capacity is checked during overwing zeta.. also
Commit: 396124f
fleet capacity is checked during overwing zeta.. also during crimson rebellion hero. capacity isnt checked till end of combat. (only matters for crimson)

## mention that the sever token remains in play
Commit: 9fedfbd
mention that the sever token remains in play if the crimson are eliminated. it is removed from the game when it expires at the end of the status phase

## add something under ahk ravin that says it
Commit: no change: owner — Ahk Ravin swaps two of the same player's ships, so it can't put another player's ship there
add something under ahk ravin that says it could theoretically be used to swap another players ship into the crimson home system. not sure why anyone would want to do this. but i guess you could

## Ocean cards are spent as though they were planet
Commit: c8ec675
Ocean cards are spent as though they were planet cards. However, oceans are not planets, and do not count as planets for the purpose of scoring objectives, such as Push Boundaries.6
Explicit: 6 “What are the Ocean cards exactly? Do they count as planets for scoring purposes (i.e. Push Boundaries)? … A: Oceans do not count as planets for scoring. They may be spent as planet cards.”
note here that the planets they are coexisting on do count for the purposes are scoring and cite 
Q: If DWS is coexisting on 3 planets and has 3 they control, they count as 6 when scoring Push Boundaries. How many do they control when other players want to score Push Boundaries?
A: Control via coexistence is only seen by the player coexisting, so the other players see 3 planets controlled.

## add this to tech page under antimass deflectors
Commit: 925d90f
add this to tech page under antimass deflectors:
If a player gains then loses the Antimass Deflectors technology, their units may remain in and move out of any asteroid fields they are currently in, but cannot move additional units into or through.2

## Aello cannot be used to reduce a cost paid
Commit: 381420d
Aello cannot be used to reduce a cost paid with trade goods, influence, or any other currency.* [unless you are using trade goods as resources]

## Nova Seed may target the Creuss Gate (tile 17)
Commit: 4b3dc8e
Nova Seed may target the Creuss Gate (tile 17) or the Wormhole Nexus (tile 82).* [or the sorrow]

## Nova Seed purges all tokens on the replaced system
Commit: 1d65b3e
Nova Seed purges all tokens on the replaced system tile other than command tokens and frontier tokens. Any faction–specific tokens, such as Creuss wormhole tokens or Ul sleeper tokens, are returned to the player that owns them instead.4 [including the avernus token if relevant]

## Avernus is not a ship. It does not roll
Commit: 3d9ae23
Avernus is not a ship. It does not roll for removal when it moves out of or through a gravity rift.6
Explicit: 6 RAW/Community: Avernus and gravity rifts: “Avernus does not roll for gravity rift, it is not a ship.”
this should go under stellar genesis as its part of the breakthrough ability
this too
Avernus may be moved out of a system that contains the Muaat player’s command token during a tactical action, even if there are ground forces on it, as it is not a ship.6
Explicit: 6 “Can Avernus be moved out of a locked system during a tactical action with Ground Forces on Avernus? A: Yes, it is not a ship.”

## lets mention public disgrace under quantum datahub node
Commit: 1b64fab
lets mention public disgrace under quantum datahub node on the hacan page

## wrath of kenara only affects combat rolls
Commit: 821f5ef
wrath of kenara only affects combat rolls

## "The Hacan hero makes every unit you produce free
no change: owner decided not to include the fleet/unit limits line
"The Hacan hero makes every unit you produce free, though fleet and unit limits still apply."

## mech is moved after control of the planet is
Commit: 8ea7abd
mech is moved after control of the planet is exchanged, the player gaining the planet may use their Integrated Economy [or similar] technology before coexi

## empyrean can retreat into nebula's on empy page
no change: owner decided not to add it; R_nebula already says any ships can retreat into a nebula
empyrean can retreat into nebula's on empy page

## mechs cant be hit by direct hit. as they
Commit: d75d3dc
mechs cant be hit by direct hit. as they arent ships

## If the Empyrean player becomes neighbors with all
Commit: 3036717
If the Empyrean player becomes neighbors with all players when the final player moves ships into a system containing one of the Empyrean player’s command tokens, Xuange will unlock, but the Empyrean player will not be able to resolve its ability from that movement.* this doesnt seem to fit with a commander unlocked in a timing window can be used immediatley. is it because neighbor status isnt in the "after movement window"

id like to verify the above as well as If the Empyrean player moves a ship into a system containing one of the Saar player’s Floating Factories, and no other ships, that Floating Factory will be blockaded and destroyed before the Empyrean player can unlock Xuange. If the Empyrean and Saar players are not neighbors in any other way, then Xuange will not unlock.*

## lets say on the fracture page that frontier tokens
Commit: 23fe55c
lets say on the fracture page that frontier tokens arent placed there when it is brought into play (but they can be placed there by the empy hero)

## lets add even wormhole adjacency is removed citing
Commit: 6fbc87a
lets add even wormhole adjacency is removed citing the same passage in 6 under void tether 1

## firmament obsidian proof page has a weird header
Commit: 4f3eddc
firmament obsidian proof page has a weird header

## The Enervate plot may be resolved whenever the
Commit: cba6a43
The Enervate plot may be resolved whenever the puppeted player resolves the secondary ability of a strategy card in their play area, including via the Strategize action card.6
Explicit: 6 “Does the Enervate plot card work on any secondary usage …? A: The puppeted player must have the strategy card in their play area, if you then play Strategize or otherwise resolve the secondary you may resolve Enervate.”
this is worded weirdly it should say something more like "whenever the obsidian player resolves the secondary ability of the strategy card in the puppeted players play area

## If a player is eliminated, their control tokens are
Commit: 68050df
If a player is eliminated, their control tokens are removed from any plot cards.6
Explicit: 6 “What happens to a plot card if the player whose command token on it is eliminated? A: Remove that players token and draw it if it has no players’ tokens on it.”
If the only player token on a plot card belongs to an eliminated player, that plot card returns to the Firmament player’s hand.6
Explicit: 6 “If there are no other player tokens on the Plot, it returns to hand.”
combine these two. use the return to hand terminology

## If Captain Aroz causes the Firmament player to treat
Commit: e6fdb1b
If Captain Aroz causes the Firmament player to treat a planet as controlled by them, both the Firmament player and the planet’s actual controller are treated as controlling it for the purpose of scoring objectives. This also applies to Aroz Hollow.6
theres no reason for this to apply to aroz hollow but clarify secret objectives for the firmament ie (just add, only the planets controller can use it to score public objectives)
maybe:
the firmament player is considered to control the planet for scoring secret objectives only
the planets actual controller is considered to control the planet for all purposes
...
ask me with a few options. be succint but complete

## The Creuss IFF cannot place wormhole tokens in the
Commit: 19a1fa4
The Creuss IFF cannot place wormhole tokens in the home system of an eliminated player.* [unless the player playing the note controls a planet in that system]

## The Shields Holding action card may be used to
Commit: e753a31
The Shields Holding action card may be used to cancel the hit.1,2,5
Explicit: 1 LRR FAQ: “’Shields Holding’ may be used to cancel hits that are produced by these abilities,” including “Dimensional Splicer.”
Explicit: 2 RulesPal, “Do Direct Hit and Shields Holding work on hits from Dimensional Splicer or Yin Devotion?”: “Yes to both.”
Explicit: 5 Designer ruling: “Only one instance of Shields Holding may be played to cancel hits from an incoming group of hits.”
source 5 doesnt really support this

## Wormhole Generator Ω (Technology)
Commit: 86d62ca, 0cb34a2 (source 2 implicit proof)
Wormhole Generator Ω (Technology)
Wormhole Generator [omega] cannot place wormhole tokens in the home system of an eliminated player. [unless the creuss player controls a planet in that system]*
Unverified: No source found.

## can we list this under creuss iff too
Commit: 6b66c02
can we list this under creuss iff too: 
Creuss wormhole tokens may be placed in The Fracture, including with the Creuss IFF promissory note.2,6

## wormhole generator omega should have all the same
Commit: 047f244
wormhole generator omega should have all the same notes from wormhole generator except the first (the one about being mandatory) with the omega symbols being the only differences

## id like to prove this: If the Hil Colish
Commit: 049dbdd
id like to prove this: 
If the Hil Colish is moved first, and is removed due to the effect of a gravity rift, other ships that were declared to move that can reach the destination system must do so, even if the path is through the gravity rift. Ships that cannot reach the active system do not move.*
Unverified: No source found. LRR FAQ covers the related case: other ships cannot use the wormhole once the Hil Colish is removed.

## If this ability is used, the active system will
Commit: 66f9a99
If this ability is used, the active system will be adjacent to systems with delta wormholes.8
Implicit: 8 Prophecy of Kings Rulebook, Emissary Taivra card: “that system is adjacent to all other systems that contain wormholes during this tactical action.” all systems containing wormholes includes delta.
lets consider epsilon wormholes as well

## Any tokens on either system are moved with
Commit: 195f082
Any tokens on either system are moved with their system.4
Implicit: 4 FAQ: Creuss hero Singularity Reactor and tokens: “All tokens stay with their original tile” tokens stay with tile, so move with system.
this is explicit. tile is synonymous with system in this case

## If the L1Z1X player would have to place
Commit: 4d2f6e4
If the L1Z1X player would have to place a structure, but there are none of that type left in their reinforcements, they may remove a structure of that type from any system that does not contain one of their command tokens and place that instead.1,2,4
Explicit: 1 LRR 23.4a: “that player can remove a unit from any system that does not contain one of their command tokens and place that unit in their reinforcements.”
Explicit: 4 “Any instance of ‘replace’ can be considered to say ‘remove and place’ if no units are left in reinforcements, and would be covered by Component Limitations in the LRR.”
Implicit: 2 “If all my space docks or PDS are on the board, can I place another?”: “if none are in reinforcements, you may take one from a system without your command token and place it where the effect directs” general structure-replacement rule applies to L1Z1X; Assimilate named in a related entry.
If there are none of a structure’s type in their reinforcements, the L1Z1X player is not forced to replace that structure.1,2,4
Implicit: 1 LRR 23.4a: a player “can remove” a unit; it is optional.
Implicit: 4 “’replace’ can be considered to say ‘remove and place’ if no units are left in reinforcements.”
these seem to say the same thing

## During the Bombardment step, each of the L1Z1X
Commit: 69a8200
During the Bombardment step, each of the L1Z1X player’s units with the Bombardment ability is assigned only one planet to bombard. However, during ground combat, every unit in the system with the Bombardment ability may use it against the planet the ground combat is taking place on.1,2
(all units in the active system may use bombardment against the planet the ground combat is happening on, regardless of whether or not those units bombarded that planet during the bombardment step of the invasion)

remove this
The text of Harrow is changed to: “At the end of each round of ground combat, your ships in the active system may use their bombardment abilities against your opponent’s ground forces on the planet.”1,2

## then spend two [additional resources] to pay for
Commit: c66be03
then spend two [additional resources] to pay for the cost of Inheritance Systems.

If Inheritance Systems is researched as the first technology with the primary ability of the Technology strategy card, it may be used [immediately] to ignore prerequisites of the second technology.

 - this also applies to ixthian artifact or any time a player may research two technologies back to back

## whats the deal with Ships cannot move into
Commit: 8cfbd67
whats the deal with
Ships cannot move into a supernova, even if it contains one of the L1Z1X player’s command tokens.1,2,3
the command token thing shouldnt matter

## this is interesting because sula mentarion is an
Commit: 8760f07 (follow-up research deferred)
this is interesting because sula mentarion is an after and edict is a when:
If the Mahact player wins a combat against the Mentak player and gains one of their command tokens, they cannot resolve the ability of S’ula Mentarion, the Mentak commander, from winning that same combat to take a promissory note from the Mentak player.*

## lets check for anything contradictory here: Any abilities
Commit: a6d44fb
lets check for anything contradictory here: Any abilities that trigger when a player moves their ships do not trigger.*
Unverified: No source found.

## The player whose ships were moved is considered
Commit: ad58d39
The player whose ships were moved is considered to be the attacker, the other player is considered to be the defender.4
Explicit: 4 “The ships being moved belong to the ‘attacker’ and the ships not being moved belong to the ‘defender.’”
Regardless of which of the two players in combat is the attacker and which is the defender, the next player in initiative order will resolve abilities first, after the Mahact player.*
Unverified: No source found.
add 
Q: When using the Mahact Hero, Benediction, if another player's fleet is moved into a Mahact fleet, who is the attacker/defender? 
A: The player that is moved is the attacker, the player that is moved into is the defender.

## this can be used as a source for Q:
Commit: bb8c768
this can be used as a source for Q: When using the Mahact Hero, Benediction, can the Mahact player transport other players' ground forces from planets? Can the units’ owner transport ground forces from planets?
A: No in both circumstances.
f the Mahact player moves another player’s ships, ground forces on planets are left behind

## If the Mahact player purges their War Sun
Commit: 942c43d
If the Mahact player purges their War Sun unit upgrade technology, they must remove each of their war suns from the game board.*
Unverified: No source found.
we can prove this, at least implictly using similar rulings for muaat tech with nekro

## Lazax Gate Folding is a winnu tech but
Commit: 4d2a89b
Lazax Gate Folding is a winnu tech but it links to the mentak wiki page on the mentak's tirules page

## lets add something to fleet capacity to the
Commit: 0ab63d9
lets add something to fleet capacity to the mentak's hero. prove that fleet capacity can never be exceeded including mid combat

## If all ships are removed, the strategy token
Commit: 7c3cc90
If all ships are removed, the strategy token will still be placed in the destination system.*
Unverified: No source found.
lets put this under a note that says they have to roll for a rift

## The Minister of Peace agenda and the Mahact
Commit: f5374eb
The Minister of Peace agenda and the Mahact player’s Starlancer mech still end the chosen player’s turn, even though it is not considered their turn.4
lets say end the naalu players turn as well as the chosen players action

## This will count [as] one towards their Production
Commit: cc40b70
This will count [as] one towards their Production limit.*

## Distant Suns is a naaz rokha ability
Commit: a226035
Distant Suns is a naaz rokha ability

## for distant suns put make item 4 item
Commit: 7b3ed70
for distant suns put make item 4 item 1 and put what is currently item 1 as a sub item under it

## for black market forgery If there are no
Commit: 0152834
for black market forgery If there are no cards in the relic deck, a player cannot gain a relic.1,4 should be replaced with a similar point to the first one under fabrication

## add to the naaz flagship note 2 that
Commit: 18ebfe4
add to the naaz flagship note 2 that it applies to eidolon maximum

## Q: Z-Grav Eidolon (Mech): Is flipping to a
Commit: ef631db
Q: Z-Grav Eidolon (Mech): Is flipping to a Z-Grav Eidolon a (mandatory) activated ability, or does it "just happen"? If NRA has mechs in the space area, and another player withAssault Cannon attacks them, the attacker gets to resolve an ability first. If flipping is an activated ability, then NRA couldn't kill a mech forAssault Cannon, but if it "just happens", they could.
A: Mech Flips at start of Space Combat in player order timing
this seems to support a few of the notes under eidolon

## lets include these under eidolon maximum item 5
Commit: 3df612d
lets include these under eidolon maximum item 5
Q: Eidelon Maximum (Breakthrough Unit): Does the Eidelon Maximum participate in space combat when it is on a planet?
A: Yes, it is a ship in that system.
Q: In general, is the Eidelon Maximum treated as a ship when on a planet? Does it block other player's ship movement through the system? Can it count towards ship objectives? Can it blockade space docks?
A: Yes, it is a ship in that system.

## for galactic threat move item 4 up to
Commit: 8289efa
for galactic threat move item 4 up to item 1 and make what is currently item 1 a subitem of it 

## The Prophet’s Tears relic links to the nekro
Commit: 274b114
The Prophet’s Tears relic  links to the nekro page not the relics one

## under propogation for nekro we can combine item
Commit: a18af66
under propogation for nekro we can combine item 4 and 1

## add an ie example to item 5 under
Commit: 5d240d0
add an ie example to item 5 under propogation

## e Salai Sai Corian, link on nekro page
Commit: a35a5f3
e Salai Sai Corian, link on nekro page goes to nekro page not winnu

## lets add a note to valefar assimilator x/y
Commit: 0c70f90
lets add a note to valefar assimilator x/y that says if nekro copies the nomads flagship it will overwrite the stats and abilities of the nekro flagship

alsi under the alastor 6 that says this applies to copying other factions flagship unit uprades (only the nomad currently) and not to the nomad breakthrough which doesnt overrite the alastor's abilities. prove this and the one just above

## there are two notes on the nekro valefar
Commit: 2c088ce
there are two notes on the nekro valefar assimilator z that talk about vuilraith. combine them

## mention nekro valefar z isnt a tech and
Commit: 42b3246
mention nekro valefar z isnt a tech and doesnt trigger the commander

## nekro valefar z viii and v conflict. use
Commit: 0564005
nekro valefar z viii and v conflict. use just VIII since its verified by the designer

## is this The Memoria cannot retreat to a
Commit: 562d619
is this "The Memoria cannot retreat to a system containing a Quantum Manipulator, unless it is adjacent to that system using another adjacency method.*" true? same with the next one

## this is definitely sourceable using the same logic
Commit: db896d6
this is definitely sourceable using the same logic as transit diodes
Any damaged mechs remain damaged.*
Unverified: No source found.

## If the Ral Nel player plays the Skilled
Commit: 3cdc8f5
If the Ral Nel player plays the Skilled Retreat action card, they cannot resolve the ability of the Last Dispatch.*
Unverified: No source found.
why?

## The N’orr cannot choose their own ships as
Commit: 3b7994a
The N’orr cannot choose their own ships as targets.*
Unverified: No source found.
we can probably source this with a player cant destroy their own ships

## make sure sustain damage page says destroy overrules
no change: already in the LRR list, R_sustain_damage.php:13
make sure sustain damage page says destroy overrules it

## The N’orr player cannot commit ground forces to
Commit: 743b4fd
The N’orr player cannot commit ground forces to Mirage if it is in an asteroid field, unless the N’orr player owns the Antimass Deflectors technology.4
Explicit: 4 “Does a Ceasefire promissory note have any impact on committing ground forces from adjacent planets via Sardakk N’orr’s commander …? A: Will change ‘commit ground forces’ in LRR to say ‘move’ to ensure Ceasefire works. Will also prevent units from being committed to planets in anomalies without the appropriate technology, or through wormholes if Enforced Travel Ban is a Law.”
why does this specify mirage. lets just say asteroid fields since other planets can be there

## dominus orb links to saardak page it should
Commit: feaa2dd
dominus orb links to saardak page it should link to relics

## this doesnt seem like it needs to be under
Commit: 6b197f1
this doesnt seem like it needs to be under the saardak commander
Ground forces cannot be committed to a planet if it has the Demilitarized Zone exploration card attached.*
Unverified: No source found.

## The Parley action card will place the committed
Commit: 3cea9a1
The Parley action card will place the committed ground forces in the space area of the active system. As the N’orr player will not have enough capacity in the space area for their ground forces, they will have to remove all ground forces from that planet, that are now in the space area of that system.*
Unverified: No source found.
this is at least implicit from the third item of the commander's notes

## under saardak hero lets say something like the
Commit: 35f2d3b
under saardak hero lets say something like the ships are removed not destroyed

## id like to prove this: Any abilities that
no change: no source found; owner keeps the note (Tekklar closes the after-movement window; N'orr as active player resolves it first)
id like to prove this:
Any abilities that trigger “after a player moves ships…” or similar cannot be used following Tekklar Conditioning.*
Unverified: No source found.

## The Bastion player’s action cards may still be
Commit: 764df9a
The Bastion player’s action cards may still be cancelled by other game effects.*
Unverified: No source found. [such as the empyreans watcher mech]

## A war sun has no effect on the Magen
Commit: 27efc7f
A war sun has no effect on the Magen Defense Grid Ω technology.2 or omega omega

## do we have a page for details about the
Commit: 2d448e2
do we have a page for details about the unit upgrades and notes? we should include that under units if not. looks like we have unit upgrade info under units lets add sections for Infantry 2 fighter 2 and pds 2

## this is under fighter. doesnt apply.
Commit: ef7ce10
this is under fighter. doesnt apply.
Ships may be moved into or produced in a system even if doing so would exceed the fleet pool limit. However, some of those ships must immediately be removed to satisfy the limit.2,5
Explicit: 2 RulesPal, “When is the fleet pool limit checked …?”: “Once ships arrive in the active system, any non-fighter ships over your fleet pool are removed straight away.”
Explicit: 5 Designer ruling: “Once all ships are in, fleet supply is in violation and must immediately be dealt with.”

## add that for terragenesis tokens can only be
Commit: efcb1f3
add that for terragenesis tokens can only be moved once all tokens are on the board

## do we have a note under coexist that says
Commit: 9c920af
do we have a note under coexist that says the structure limit is per player

## If another player plays the Ul player’s Ceasefire
Commit: a8da7c8
If another player plays the Ul player’s Ceasefire promissory note, the Ul player may still place units into the active system using their Awaken ability.2
Explicit: 2 RulesPal, “When can the Titans use Awaken, and can Ceasefire or Nullification Field stop it?”: “Ceasefire only stops movement, so Awaken still works.”
this should be under awaken not coalescence

## If the Ul player’s turn ends in this way,
Commit: 393c5dd
If the Ul player’s turn ends in this way, only the combat occurs. No other steps of the tactical action occur, and abilities may only be used within that combat.4
what way, just say is ended by another game effect. rather than say only the combat occurs say the combat still occurs

## is there something somewhere about the titans capturing
Commit: db40a42
is there something somewhere about the titans capturing the planet that has terraform attached? if not can we add a note that says in this situation the titans could have their own promissory note in their play area

## The Ul player may use the Deploy ability of
Commit: daa5e59
The Ul player may use the Deploy ability of a Hecatoncheires to place units into coexistence.6
[most often through using slumberstate computing]

## add a not under There is no timing window
Commit: 6e3ece6
add a not under There is no timing window or other requirement for another player allowing the Ul player to place a sleeper token on a planet they control; it may be included as part of a transaction or deal.9
 - as such it could be part of a binding deal

## can we quote lrr 1.18 on things like
Commit: f767658 (site-wide sweep deferred)
 can we quote lrr 1.18 on things like this: Once a player has used Research Agreement after the Jol–Nar player researches a technology, no other player may use Research Agreement for that same Jol–Nar research instance to gain the same technology.*
Unverified: No source found.

## can we list what unit abilities that need
Commit: dd95be6
can we list what unit abilities that need dice are under jol nar commander: anti fighter, space cannon, bombardment that might be it

## The Jol–Nar player cannot use Specialized Compounds when
Commit: 246ade0


## pretty sure i saw an explicit for this
Commit: 7633aa9
pretty sure i saw an explicit for this The Vuil’raith player cannot capture the Ul player’s Hel Titan PDS.*
Implicit: 2 RulesPal, “Is a Hel-Titan a valid target for effects on non-structures …?”: “It is a structure as well as a ground force.”

## If a player plays both Crucible and the Nav
Commit: b88f663
If a player plays both Crucible and the Nav Suite action card during the same tactical action, they will still apply +1 to the move value of their ships that move through or out of a gravity rift.*
- this +1 is from the effect of the crucible. the rift itself will not give its +1 due to nav suite

## this has no source: If another player is blockading
Commit: 20f4648
this has no source:
If another player is blockading a Dimensional Tear, their units cannot be targeted with Vortex.*
Unverified: No source found.
prove it or remove it
same with this one:
If a player’s units are blockading one of the Vuil’raith player’s Dimensional Tears, dice will not be rolled for that player’s units when resolving Dimensional Anchor.*
Unverified: No source found.
it probably has to do with the rules on capturing

## If a ship moves through or out of the
no change: already corrected (F_vuilraith.php:56, R_gravity_rift.php:17)
If a ship moves through or out of the same gravity rift multiple times, each instance will provide a +1 to movement.1
Implicit: 1 LRR quick reference: “Each Ship Moving Through or Out of Applies +1 Move and Rolls 1 die.” Repeat passes are not addressed.
Unverified: 6 Conflicts: RAW ruling on moving through the same rift twice: “the movement bonus is once per ship per tactical action, the negative roll requirement remains per time a ship moves out of or through a gravity rift.”
this is wrong it was errata'd in the te rulebook

## The player that owns the ground forces and fighters
Commit: b84f402
The player that owns the ground forces and fighters chooses which are removed. They are not assigned to particular ships beforehand.*
Unverified: No source found.
this conflicts with a note on the last bastion page. i believe last bastion is correct but check

## lets add a note unde cabal breakthrough that says
Commit: b7d70df
lets add a note unde cabal breakthrough that says the player cant move ingress tokens into systems that already contain them. i believe it says something similar under nomad's planesplitter

## this example is out of date
Commit: 803e8c9
this example is out of date
If a system meets two (or more) of the conditions listed (such as by attaching the Nano–Forge relic to Mecatol Rex), Rickar Rickani will only apply +2 to combat rolls, not +4 (or +6).4
just remove the example

## A player chosen to perform the secondary ability must
Commit: d713672
A player chosen to perform the secondary ability must still spend a command token from their strategy pool to do so, except for the Leadership strategy card and potentially the Trade strategy card.2
Explicit: 2 RulesPal, “Does a strategy card’s primary ability cost a command token, and does the Leadership secondary?”: “Secondaries cost a strategy pool token, except Leadership’s.”
If the Winnu player chooses the Trade strategy card for this ability and the Winnu player chooses a player to resolve the secondary without spending a command token via the primary ability, the chosen player must resolve the secondary ability. Additionally, if the Winnu player chooses a player to resolve the secondary via the Hero’s ability, it is optional for that player to resolve the secondary, but if they do, they must spend a strategy token to do so.*
Unverified: No source found.
these could be combined or reworded to be less redundant

## Acquiescence Ω cannot be triggered by this ability
Commit: def6373
Acquiescence Ω cannot be triggered by this ability.* [as the winnu player is not performing a strategic action]
Unverified: No source found.

## The Reclaimer need only be on the planet
Commit: 5ce8c22
The Reclaimer need only be on the planet at the end of the tactical action the Winnu player gained it, not when the Winnu player gains control of it. This can occur from effects such as the Infiltrate action card, or some exploration cards.*
infiltrate doesnt do this. use integrated economy instead

## peace accords can be used against home system planets?
Commit: 0c14883
peace accords can be used against home system planets?

## sigmazero13, Jun 19, 2018 (Quash on Miscount Disclosed)
Commit: 2c6e585
        sigmazero13, Jun 19, 2018
        https://boardgamegeek.com/article/29345926#29345926
        A couple follow-on questions about it:
        - Can the NEW Agenda be "Quashed"? (I would say yes, because it's a different agenda)
        - If players (for some reason) made transactions prior to the Quash, does the new agenda "reset" this? (I would say yes here, too, for the same reason. I should note that 83.6 was modified to say "each of the two agendas", though originally the word "two" wasn't there. Perhaps it should just say "each of the agendas"?)
        And another semi-related question:
        - If "Miscount Disclosed" causes a law to come up to be voted on again:
* Can Xxcha "Quash" it (or someone "Veto") it?
        * Does it refresh the "transaction allowance"?
        (I would say yes to both; for simplicity, if nothing else, if they are treated as if you are resolving them afresh, then it all works, and treating it as "just revealed" makes sense, too.)
        Dane: Yes, the other Agenda can be Quashed. I would also say that they could perform new transactions (I can’t really see how this could be abused—the intent of the limit was just to provide boundaries and keep negotiations from lasting an eternity. I’d like people to be able to form new bargains as new developments occur). Yes to both questions regarding Miscount disclosed, but the wording of the two cards don’t quite interact, it is something I’ll have to add to the FAQ.
xxxcha can quash miscount disclosed subsequent law. lets add to quash notes

## Unverified: 2 Partial conflict: the same RulesPal entry
Commit: 022f220
Unverified: 2 Partial conflict: the same RulesPal entry says the combined value applies “even when exhausted for Uprising.”
remove this it was overwritten by something in source 4

## lets say something about direct hit under devotion yin
Commit: 359d92f
lets say something about direct hit under devotion yin

## When resolving Impulse Core, the Yin player’s opponent
Commit: 37d7655
When resolving Impulse Core, the Yin player’s opponent chooses which ship is assigned the hit.*
Unverified: No source found.
- the chosen ship must be in the active system

## ensure pudding pages are not going to show up
no change: already noindexed by prefix.php (99bd9f3), verified locally
ensure pudding pages are not going to show up in google or other searches. AI looking at them is fine

## If all ships in the system are destroyed by hits
Commit: 2920796
If all ships in the system are destroyed by hits produced from a space cannon roll, the player that produced those hits may score the Turn Their Fleets to Dust secret objective before the new fighters are placed.4
Implicit: 4 “If the last ship in a system is destroyed, TTFTD could be scored for destroying the last ship, then after the Yin agent would trigger.”
this is explicit

## we need a brother milor omega omega section
Commit: 75b1ae2
we need a brother milor omega omega section. looks like most is the same as the omega version except
1. omega omega can only be used during combat (whenever that may occur)
4. is irrelevant
5. is irrellevant

## The Yin player may choose to produce one infantry
Commit: 202ab66
The Yin player may choose to produce one infantry for one resource. If they do, they may produce one additional infantry.2,4
- ie the yin player may choose to produce 1, 2, or 3 infantry each time they produce infantry

## brother omar should be Brother Omar Ω(Ω)
Commit: 8f6f006
brother omar should be Brother Omar Ω(Ω) since the text is the same in each case same with dannel of the tenth

## If the Yin player does have ships with capacity
Commit: 128b1b6
If the Yin player does have ships with capacity in the planet’s system, then the infantry will be placed in the space area of the system. The Yin player might then need to remove infantry and/or fighters from the system to satisfy the capacity limit.*
get rid of this its redundant

## The active player may perform a transaction (Spy Net)
Commit: cc7310d
The active player may perform a transaction with each other player at most once per turn. As such, the active player cannot receive Spy Net more than once per turn.3
this doesnt need to be under spy net

## put a note under ysia yssrila that argent
Commit: 588f7f2
put a note under ysia yssrila that argent can stop it from travelling with whatever it is that blocks movement past their structures

## suffi an on the yssaril page says mentak
Commit: a6207f9
suffi an on the yssaril page says mentak but links to keleres

## The speaker may play Distinguished Councilor after Bribery
Commit: 598dafe
The speaker may play Distinguished Councilor after another player plays Bribery.*
Unverified: No source found. LRR FAQ says the reverse case: “an effect that casts ‘additional votes,’ such as the ‘Bribery’ action card” does not “create a timing window for playing the ‘Distinguished Councilor’ action card.”
this one seems wrong. the source explicitly says otherwise. find another source or reverse the note

## Q: Does an effect that casts additional votes (Bribery / DC follow-up)
Commit: abab6b3
      Q: Does an effect that casts “additional votes,” such as the 
      “Bribery” action card, create a timing window for playing the 
      “Distinguished Councilor” action card?
      A: No. The “Distinguished Councilor” action card can only be 
      played after you vote during the “V ote” step of resolving an agenda.
      to me this sounds like what its saying is i cant play bribery and then distinguished counsilor immediately after since i just voted. if i wanted to play distinguised councilor i would have to do it immediately after my vote. 
      the ruling above i think more applies to the speaker playing distinguished councilor during the same timing window as another player (or themselves) played bribery
      similar note under distinguished councilor and under bribery

## under construction rider 6
Commit: 9c019b8
under construction rider 6
- all planets will ready at the end of the agenda phase

## Deadly Plot is played after any effects
Commit: 60d9feb
Deadly Plot is played after any effects that allow a player to cast additional votes, and after any effects that change the outcome of an agenda.* [such as confusing or confounding legal text]

## this should say space cannon offense
Commit: 4833dc5
this should say space cannon offense
For example, say a player has a dreadnought, a destroyer and a fighter in a system with no other ships during the Space Cannon Defense step. During the Roll Dice step, two hits are produced against that player. They cancel one with the dreadnought’s Sustain Damage ability, but a Direct Hit is played to destroy it. The fighter in that system is immediately removed. The player must then assign the other produced hit to their destroyer.5

## mention the nekro valefar assimilator under divert funding
Commit: 06d614b (owner: ignore Valefar; note Propagation instead)
mention the nekro valefar assimilator under divert funding

## lets add that emergency repairs can be played
Commit: 9d3b47c
lets add that emergency repairs can be played at the end of the last round of space combat

## If the Mecatol Rex planet card is returned
Commit: 141c7c8
If the Mecatol Rex planet card is returned to the planet card deck, the custodians token is not replaced. A player will be able to later commit ground forces without paying influence, and without gaining a victory point.*
Unverified: No source found.
if this happens do we still do the agenda phase

## Public Disgrace (duplicate trade-goods notes)
Commit: 1959700
Public Disgrace
If the originally chosen strategy card has trade goods on it, those will not be taken if Public Disgrace is played.2
Explicit: 2 RulesPal, “If Public Disgrace makes a player give back a strategy card, who gets its trade goods?”: “Whoever ends up choosing that card. Trade goods are collected once the choice sticks, so they stay on the returned card for the next chooser.”
The player who must choose a different strategy card does not gain any trade goods that are on the strategy card they originally chose. Trade goods on a strategy card are gained by the player who ends up with that strategy card.2,5
Explicit: 5 Designer ruling: “Public Disgrace is intended to replace that effect and force them to choose a different card instead. The trade good should go to the person who actually ends up with the card.”
Explicit: 2 RulesPal: “Whoever ends up choosing that card.”
these are the same. i like the second one better

## f Reflective Shielding is played after a ship
Commit: 424aa27
f Reflective Shielding is played after a ship uses its Sustain Damage ability during an Assign Hits step, then the hits produced by Reflective Shielding are added to any other hits produced in the immediately proceeding Roll Dice step.4
preceeding

## A unit that used its Sustain Damage ability (Reflective Shielding)
Commit: 2656189
A unit that used its Sustain Damage ability to cancel some of those other hits, and been repaired, cannot use its Sustain Damage ability again to cancel the hits produced by Reflective Shielding.*
most often in the case of the empyrean

## If the destination system already contains (Skilled Retreat)
Commit: 5a0a2e5
If the destination system already contains a player’s command token, no command token is placed.2
and
A player may move their ships to a system that already contains one of their command tokens.2,5
say the same thing

## why does deploy seem to be the only ability
no change: LRR 30.2/30.2a make Deploy a specific exception to 23.3a; already noted on R_deploy and R_component_limitations
why does deploy seem to be the only ability that doesnt work if there are no matching units in the reinforcements. everything else can be removed and placed

## anti-intellectual: this needs investigation
Commit: 86f15a3
anti-intellectual:
this needs investigation
The Nekro player’s Valefar Assimilator technologies count for the “Against” effect, whether their tokens are on another player’s faction technology or not.*
Implicit: 2 RulesPal, “Do technologies the Nekro copy with Valefar Assimilator count for objectives?”: “a copied technology counts with its colour and type.”

## If the For outcome is resolved, a player who has been given
no change: "gives" pairs with "chooses"; owner kept as is
If the “For” outcome is resolved, a player who has been given a strategy card still chooses a strategy card on their turn and give~s~ it to an eligible player.2

## If there are no other secret objectives eligable
Commit: 368123f
If there are no other secret objectives eligable (eligible)

## what happens if the owner of DMZ is eliminated?
no change: answered (the owner cannot be eliminated while controlling the DMZ planet, LRR 33.1); owner chose not to add a note
what happens if the owner of DMZ is eliminated?

## ixthian artifact 1.2 mention it will ready
Commit: 504d316
ixthian artifact 1.2 mention it will ready at the end of the agenda phase
same with wormhole research 2.1

## lets mention under ixthian artifact that creuss
Commit: 69b7e2b
lets mention under ixthian artifact that creuss quantum entaglement does not provide adjaceny for it but their flagship, the hil colish would cause their home system to be affected

## An ability that puts a space dock on the game board by replacing
Commit: 8e782cb (also a933196, which fixes a proof misplaced in 2c6e585)
An ability that puts a space dock on the game board by “replacing”, rather than “placing”, such as the Infiltrate action card, will trigger Minister of Industry.*
Explicit: 4 “Any instance of ‘replace’ can be considered to say ‘remove and place’ if no units are left in reinforcements … Note, this overturns a previous ruling regarding Minister of Industry.”
Implicit: 5 The overturned designer ruling: “’replacing’ does not trigger the L1Z1X Minister of Industry, only effects that say ‘place’ do.”
this says overturned. prove it was overturned

## If Classified Document Leaks is elected by Miscount Disclosed (spell check)
Commit: de74eba (eligable fixed earlier in 368123f)
If Classified Document Leaks is elected by Miscount Disclosed, and there are no other secret objectives eligable to be elected by the Miscount Disclosed revote, Classified Document Leaks will be discarded and replaced.*
Unverified: No source found.
eligible. maybe a site wide spell check

## lets check the wiki for action cards and agendas
Commit: e22b831
lets check the wiki for action cards and agendas that were removed in POK and mark them as such in their respective pages.

## on miscount disclosed there are two mentions to
Commit: d4bd523, e4dab52, 339e9db
on miscount disclosed there are two mentions to various agendas that were removed in PoK. 1. bring them closer to each other. 2. lets see if we can isolate things that reference old components (not omegas, removed in PoK) and flag them (turn them red) sitewide

## mutiny, if against is resolved the players
Commit: f9f7fda
mutiny, if against is resolved the players also lose their point in speaker order (although in practice this is irrelevant)

## add a note under political censure 1.2 that
Commit: 6d948cf
add a note under political censure 1.2 that says the owner of political censure remains under its effects until the vote has concluded (The elected law remains in play while it is being voted on) from miscount disclosed.
word it better

## lets look for a ruling about public execution
Commit: 3e2b7d9
lets look for a ruling about public execution if its voted on during the action phase

## If a player draws the Drive the Debate
Commit: b8c57ff
If a player draws the Drive the Debate secret objective while resolving Search Warrant, they cannot score it immediately.*
Unverified: No source found.
(as the timing window has already passed)

## add a note under wormhole reconstruction 2
Commit: bc78ee2
add a note under wormhole reconstruction 2 that just says (sorry creuss)

## minor factions players can enter the rebellions
Commit: ed1a210
minor factions players can enter the rebellions home system as the factions ability that destroys ships is not in play

## If Mahact exists as a minor faction, the
Commit: f5d0740
If Mahact exists as a minor faction, the player that controls Ixth gains access to the ability of Il Na Viroset, the Mahact commander.*
Unverified: No source found.
we should mention this under yin breakthrough

## All neutral infantry have a combat value of
Commit: 877d56d
All neutral infantry have a combat value of 8.11
Explicit: 11 Codex IV p. 15: “Use proxy components or figures for neutral infantry; they have a combat value of 8.”
Planets with neutral infantry cannot be targeted with action cards such as Plague or Uprising.*
Unverified: No source found.
Planets with neutral infantry cannot be elected by “elect planet” agendas, and are unaffected by agendas such as Swords to Plowshares.*
Unverified: No source found.
Planets with neutral infantry cannot be used to score objectives such as Make an Example of their World or Stake Your Claim.*
Unverified: No source found.
these things dont need to be under minor factions. they should be under the relevant agendas. the neutral infantry combat value shouldnt be here at all

## why is this line under total war 3
Commit: 016db04
why is this line under total war 3
If another player gains control of the home system planet holding the commodities, they also take those commodities.2
remove it

## The Creuss player may do this by moving
Commit: 39886a9
The Creuss player may do this by moving their Hil Colish flagship before or after their other ships.*
Implicit: 1 LRR FAQ: “If the ‘Hil Colish’ moves before other ships and is returned to reinforcements by a gravity rift, can other ships still use its delta wormhole …?” Assumes the Creuss player orders the flagship’s move.
i think this should have more note. something that says it will flip after movement. investigate. checking what was removed from here

## ion storm 3 readd that the ion storm
Commit: dcffdcd
ion storm 3 readd that the ion storm only flips if it was the chosen wormhole

## control the region. fighters count.
Commit: 87d339e
control the region. fighters count. whether fighter II or they are in a system with a space dock

## destroy their greatest ship 2.2 a player
Commit: a531a31
destroy their greatest ship 2.2 a player may still only score one secret per combat

## Any effect that triggers when a command token
Commit: 8122921
Any effect that triggers when a command token is spent will be triggered six times. For example, if the Muaat player has unlocked their commander, Magmus, they will gain six trade goods, one at a time, when scoring Galvanize the People.*
if those tokens come from their strategy pool
same with lead from the front

## for establish hegemny and hoard raw materials
Commit: 1ce63b6
for establish hegemny and hoard raw materials lets put notes about the xxcha breakthrough

## make an example of their world 1 and
Commit: 8273114
make an example of their world 1 and omega 2. add as the bombardment step occurs outside of combat

## make an example of their world 3. this
Commit: 1fa80c0
make an example of their world 3. this would count as the secret objective for the combat

## prove endurance add. in the case where
Commit: 02bf34f
prove endurance add. in the case where a player unpasses, such as the ral nel hero, multiple players may be eligible to score prove endurance during the same round

## lets note under stake your claim that the player
Commit: 82af868
lets note under stake your claim that the player who controls the planet may not score stake your claim if someone is coexisting on that planet

## turn their fleets to dust should specify that any
Commit: 0963b8d
turn their fleets to dust should specify that any player, not just the active player may score it

## note under ceasefire that it does not stop
Commit: no change: sources conflict (RulesPal says Ceasefire does not stop it; source 4 says it does, and F_norr already cites source 4); owner said leave as is
note under ceasefire that it does not stop the saardaks commander ability

## A player may give their Support for the Throne
Commit: 6f37134
A player may give their Support for the Throne to another player even if doing so gives that player the victory point they need to win the game. The player who gave it may activate systems containing the holder’s units without penalty.2
Explicit: 2 RulesPal, “Can Support for the Throne be given away even if it hands someone the winning point, and can the giver attack the holder?”: “Yes to both. … The giver can attack freely.”
split this into two things. then make the one saying give the player the win the last item under support for the throne. add under that item as a new note that doing so is considered a dick move

## can we make wiki links automatically open in
Commit: 72eb3ef
can we make wiki links automatically open in a new tab. also lets make sure the pudding pages will not show up in search results

## add to maw of worlds that planets will refresh
Commit: c8d6103
add to maw of worlds that planets will refresh at the end of the agenda phase

## Players may indicate a damaged infantry token in
Commit: bbb9661
Players may indicate a damaged infantry token in any way
remove this sentence

## for neural motivator lets change it to
Commit: 4cbd329
for neural motivator lets change it to 
1. Neural Motivator only applies to the Draw Action Card step of the status phase.
Here are some, but not all of the things that it doesnt apply to
politics
minister of policy
exploration card that gives action cards
relic that gives ac when research tech

## A space dock using the Space Cannon ability due
Commit: c544315
A space dock using the Space Cannon ability due to the Experimental Battlestation action card rolls an additional die from Plasma Scoring.2
change to (may roll an additional die)

## why doesnt self assembly routines have a link
Commit: eacfc3a
why doesnt self assembly routines have a link on the tech page

## something to integrated economy that says effects the
Commit: f3ab147
something to integrated economy that says effects the change a units cost such as the nomad's commander count as their printed cost for purposes of resolving integrated economy


## R_relics: add a Related Topics link to /C_relics?
Commit: 77e508e
Question: should R_relics.php Related Topics get `<li><a href="/C_relics">Relic Notes</a></li>`, matching the links added to R_agenda_phase (/C_agendas, 8779f13) and R_objective_cards (/C_objectives, 9dc7c31)?
Context: Queue C, CHANGES_REVIEW.md:9579 (removed navigation pointer "For notes about specific relics, see the relic notes page."). The link was drafted in the working tree, then reverted.
Unanswered: the owner replied "keep all removed" only.

## R_entropic_scars: "Only unit abilities are removed" vs "cannot be used"
Commit: e733753
Question: should R_entropic_scars.php line 12 "Only unit abilities are removed; text abilities are unaffected.<sup>7</sup>" be reworded to "Only unit abilities cannot be used; text abilities are unaffected.<sup>7</sup>", to match the TE rulebook ("cannot be used by or against units inside of an entropic scar") and the new sub-note that units still have their unit abilities?
Context: raised while adding the Arborec-commander sub-note (Queue C, CHANGES_REVIEW.md:7763).
Unanswered: the owner replied "approve" only.

## Should the "(Sorry, Creuss.)" aside carry <sup>*</sup>?
no change: owner chose to leave the aside uncited
Context: Wormhole Reconstruction note 2.1 on C_agendas.php is `<li class="ixth">(Sorry, Creuss.)</li>` with no citation, so build_pudding skips it (no @n block). The other ixth note (Ixthian Artifact heresy) carries <sup>*</sup>. Asked whether to add <sup>*</sup> plus an N proof (renumbering later proofs).
Unanswered: the owner approved the change without addressing it.

## C_events.php: "in the equidistant" wording
no change: owner kept "in the equidistant"
Deferred: unanswered question, 2026-11-19, after de74eba (spell check). Two setup notes say "…place the Creuss Gate (tile 17) in the equidistant…" and "…place the Sorrow (tile 94) in the equidistant…". The Thunder's Edge rulebook only uses "equidistant" as an adjective. Suggested: "in an equidistant system position". Owner chose the spelling option without answering this.

## Destroy Their Greatest Ship 2.2: "secret objective" or just "objective"?
Commit: 6d8ca84
Context: sub-note 2.2 on C_objectives.php (commit a531a31) reads "A player may still only score one secret objective during or after each combat.<sup>1</sup>". The LRR limit it cites is one objective of any kind per combat. Asked whether to drop "secret".
Unanswered: the owner approved without addressing it.

## Technology strategy card note on C_agendas.php: cite 3 instead of *?
Commit: 52126b6 (also the Leadership/Warfare/Technology cost note)
Deferred: unanswered question, 2026-11-19, after 504d316. The note "If the Technology strategy card is elected, a player may exhaust a planet with a technology specialty … This planet will ready at the end of the agenda phase.<sup>*</sup>" could cite 3 (E3 Learn to Play: "3. READY PLANETS Each player readies all of their planet cards."), as the Ixthian Artifact and Wormhole Research notes now do. Owner approved those without answering.

## Direct Hit example: "During the Roll Dice step" outside combat
Commit: 2b67708 (owner: example removed, all hits are assigned at once)
Deferred: unanswered question, 2026-11-19, after 4833dc5. The Direct Hit example sub-note on C_action_cards.php (now "during the Space Cannon Offense step") still says "During the Roll Dice step, two hits are produced". Roll Dice is a combat step, and Space Cannon Offense has no step by that name. Asked whether to reword it, e.g. "Two hits are produced against that player." Owner approved the Defense→Offense fix without answering.

## Harrow sub-note: also cite source 5? / Ω section Harrow note?
Commit: fb5a9d2 (cited 1,5; no Ω note, Ω text not in sources)
Context: Make an Example of Their World (base) note 4.1 on C_objectives.php (commit 1fa80c0) cites 1. Source 5 (05_Compiled_Designer_Rulings_2018-2019.txt:1131) quotes Harrow's timing ("After each round of ground combat") and could be a third citation. Also, the Ω section has no Harrow note; Ω card text isn't in the sources, so whether Harrow can score Ω is unknown.
Unanswered: the owner approved without addressing either.

## War Funding (Ω): drop the generic once-per-turn transaction sub-notes too?
Commit: 77241af (research on repeat use deferred to Tier 3)
Deferred: unanswered question, 2026-11-19, after cc7310d (Spy Net sub-note removed). F_letnev.php has the same sub-note under War Funding (line 20) and War Funding Ω (line 30): "The active player may perform a transaction with each other player at most once per turn. As such, the active player cannot receive War Funding more than once per turn." Asked whether to remove those as well. Owner approved the Spy Net change without answering.

## Turn Their Fleets to Dust Ω: say whose ships count?
no change: owner left the note as is
Question: should the "any player may score" note also say whose ships count, for example "...including a player whose PDS destroys the active player's ships"?
Context: asked while adding the any-player note to Turn Their Fleets to Dust Ω on C_objectives (commit 0963b8d).
Unanswered: the owner replied "approve" only.

## Dimensional Anchor: restore the excess-capacity removal note?
Commit: fc6283e
Deferred: unanswered question, 2026-11-19, after b84f402. The old F_vuilraith Dimensional Anchor note ("The player that owns the ground forces and fighters chooses which are removed. They are not assigned to particular ships beforehand.") was replaced by "Units can only be captured by the dice specifically allocated to them." Asked whether to re-add the capacity point as its own note, cited 1 (E1 LRR 16.3: "that player must remove the excess units"; 16.4: "Fighters and ground forces are not assigned to specific ships, except while they are being transported."). Owner didn't answer.

## F_deepwrought: Antimass Deflectors note under Share Knowledge looks misplaced
Commit: 47f0b1f (reworded to name Share Knowledge)
Question: the only note under Share Knowledge (Promissory Note) on F_deepwrought is "If a player gains then loses the Antimass Deflectors technology, their units may remain in and move out of any asteroid fields…". Should it move elsewhere (e.g. under Antimass Deflectors on C_technology, or be reworded to tie it to Share Knowledge)?
Context: noticed while adding the Share Knowledge elimination note (Queue B, source 6 line 26).
Unanswered: the owner replied "approved" only.

## Space Cannon range through wormholes: add nuance notes?
Commit: 109646b (only (b) Hil Colish added; (a) already on C_agendas:136, (c) already on F_nomad:39)
Question: add `*` notes for (a) Space Cannon range still using wormholes under a law that bans moving through them, (b) the Hil Colish delta wormhole counting for range, (c) the Nomad flagship's adjacency not counting?
Context: Queue B, RulesPal (source 2) line 1835 "Can Space Cannon with range reach through a wormhole?" (NOT USED, unconfirmed). Logged as ignored; general rule is on R_adjacency:8.
Unanswered: the owner replied "continue" only.

## Dimensional Tear: Nekro-copied tears hinder the Vuil'raith?
Commit: e5d81c4 (added with the removal roll)
Question: add a `*` note under Dimensional Tear on F_vuilraith, e.g. "If the Nekro player has copied Dimensional Tear II, systems containing the Nekro player's space docks are gravity rifts for the Vuil'raith player's ships."?
Context: Queue B, RulesPal (source 2) line 4221 (NOT USED): "Vuil'raith are affected by Nekro tears. All tears on the board count for the Vuil'raith hero." The hero part is already on F_vuilraith:90.
Unanswered: the owner replied "yup youre right continue" only.

## Brother Milor ΩΩ: where does the card text come from?
Commit: c3e2eb4 (owner: Thunder's Edge card; cited 7)
Question: which product (Thunder's Edge, a Codex, or something else) is Brother Milor ΩΩ from, so it can be added as a source and the new ΩΩ section on F_yin.php cited instead of *?
Context: the ΩΩ text is in no scratch/ source file, and the wiki fetch was refused (HTTP 402). The owner supplied the card text, which is quoted in the @41 proof in tools/pudding/F_yin.txt.
Went unanswered: the owner gave the card text but not its source (2026-11-19).

## Planesplitter: can it move an ingress token into a Fracture system?
Commit: 0b01ac9 (no: source 6 says ingress tokens cannot be placed in the Fracture)
Deferred by the owner for further research.
Source: RulesPal (source 2) 02_RulesPal_TI4_FAQ.md:5421, graded Best reading, unconfirmed (NOT USED):
> ### Can Plane Splitter move an ingress token into a system in the Fracture?
> A: By the rules as written, yes — the Fracture's hexes are separate systems, so one adjacent to your units qualifies. It only triggers at the start of your strategic actions, so this rarely matters. Some players read it as main-board only.
Related site notes: F_firmament Planesplitter (Obsidian) notes; R_fracture.
Queue B log: logged as `other` ("deferred") so the queue moves on.

## Wave Function Collapse vs Share Knowledge: does the borrower research a replacement?
Commit: fe4d2e6 (owner: yes, gaining a tech means owning it; cited 2)
Deferred by the owner for further research.
Source: RulesPal (source 2) 02_RulesPal_TI4_FAQ.md:5577, graded Best reading, unconfirmed (NOT USED):
> ### If Wave Function Collapse purges a technology another player gained through Share Knowledge, does that player research a replacement?
> A: Most players say yes: the holder owns the gained technology, so it is purged and they research another, keeping it after the note returns. Some argue the borrower never owned it.
Related site notes: F_deepwrought (Wave Function Collapse, Share Knowledge).
Queue B log: logged as `other` ("deferred") so the queue moves on.

## Fighter II and fleet pool during combat (R_fleet_pool.php)
no change: owner agrees over-capacity Fighter IIs count against fleet pool immediately, even during combat; removed note stays out, no new note
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

## research Edict vs S'ula Mentarion timing (F_mahact @6)
Commit: 15636be (owner: back to 'cannot'; commander doesn't see its trigger; no web ruling found)
Deferred: owner request 2026-11-19 after 8760f07. The note was reversed to say Mahact may use S'ula Mentarion (via Imperia) after winning the space combat that gains the Mentak token, cited *, on "when" (Edict) vs "after" (S'ula Mentarion) timing. No source addresses it; the only related ruling is LRR FAQ (source 1, lines 43-48) on using cards acquired during a window. Look for a designer ruling, forum post or community consensus on Imperia + commanders gained in the same combat. Also compare F_mentak.php:68 (Salvage Operations unlocking S'ula Mentarion after the same combat: "cannot", cited *).

## War Funding / Spy Net: can they be received or played more than once per turn?
Commit: 28898b6, c06657c (cited I1 LRR 1.18)
Deferred by the owner for research (2026-11-21), while removing the generic once-per-turn transaction sub-notes from War Funding and War Funding Ω on F_letnev.php (Spy Net's was removed in cc7310d).
Removed sub-note (same wording for each card):
> The active player may perform a transaction with each other player at most once per turn. As such, the active player cannot receive <i>War Funding</i> more than once per turn.<sup>3</sup>
Its proof was E3 Learn to Play: "The active player may negotiate only once with each of their neighbors per turn."
Open questions: can the same card come back to its owner and be traded again in one turn (e.g. via a different player, or because the transaction limit is per pair)? Can the holder play it more than once per turn if it returns to them? Are there designer/RulesPal rulings on either card's repeat use?
Related site notes: F_letnev.php War Funding and War Funding Ω; the Spy Net section on its faction page.

## cite LRR 1.18 on "once per timing event" notes
Commit: 8063649 (7 notes: F_creuss IFF, F_yin Indoctrination + Greyfire Ω, F_sol Military Support, C_technology Duranium, R_abilities single object, F_hacan per die)
Deferred: owner request 2026-11-19 after f767658 (Research Agreement). Sweep notes cited * (or with weak proofs) that say an ability can be used only once per occurrence, or cannot be used again for the same event/instance/combat/round, and cite LRR 1.18 as I1: "Each ability can be resolved once for each occurrence of that ability's timing event." (LRR PDF p. 7; numbering is collapsed into "1.13 ... 1.25" in the extracted text, 1.18 by order). Grep ideas: "same instance", "once per", "only once", "again during the same", "same timing window".

## sweep wiki links that point into a faction page's FAQ section
Commit: 06990fb (50 links on 15 faction pages)
Deferred: owner request 2026-11-19, found while fixing the Prophet's Tears links (274b114) and Lazax Gate Folding (4d2a89b). About 51 links on F_*.php have the form wiki/The_<Faction>#FAQ:~:text=<item>, many of them for items that have their own wiki page (objectives, relics, agendas, other factions' technologies). For each, point it at the item's own wiki page using the URL already used elsewhere on the site (e.g. C_relics.php, C_objectives.php, the owning faction page's heading), unless the FAQ entry is deliberately the target. List: grep -o 'wiki/The_[A-Za-z_%-]*#FAQ:~:text=[^"]*' F_*.php

## review * notes whose only proof is implicit
Commit: 1bd3cc7, c5834f4, a47de1a, a7c9000 (~80 notes cited; kept * on 9 where the proof doesn't cover the note: Ancient Burial Sites, Brilliance self, 3 riders notes, R_agenda_card/R_agenda_phase speaker order, R_construction DMZ, R_ground_combat end-of-combat; F_hacan proof relabelled N)
Deferred: owner request 2026-11-17. About 91 proof lines are implicit (I) proofs on notes marked *. Review each; where the implicit source is strong enough, cite it (owner would like some of these to quote the source). Also fix F_hacan @17, whose proof is labeled E2 but says "Production limits are not mentioned".
review notes on the site that have * because the only proof is implicit. some of these id like to still quote the source
Added 2026-11-17 ("this seems like it should have a 2" item): owner wants the * replaced by the proven source numbers when implicit proofs exist, as done for R_promissory_notes @1 (now 1,2). Current count: 79 notes cite * with E/I proof lines.
Also (2026-11-17): ~12 'home system of an eliminated player' * notes (R_elimination @0, F_creuss x3, F_mahact, F_muaat, F_norr, C_action_cards, C_objectives x4) can take the I6 Avernus proof used for Stymie in that commit.
Also (2026-11-21, unanswered side question): F_deepwrought Wave Function Collapse note "If they also owned the purged technology, the Deepwrought player too will research another technology.<sup>*</sup>" has an I2 RulesPal proof and is a candidate for <sup>2</sup>.

## there is a formatting error on some pages were text gets cut off
Commit: 756bc9a (Safari/WebKit multicol bug with column-span headings; columns moved onto each list)
there is a formatting error on some pages were text gets cut off

## F_mahact: stray <li>/<ol> directly inside <article>
no change: false alarm; my parser misread the HTML comment <!--li>…</li--> (hidden Benediction/Empyrean nebula note); markup is balanced
Question: F_mahact.php has an <li> and an <ol> sitting directly in <article>, outside any <ol class="note"> (also in pudding/F_mahact.php). Looks like a markup slip; fix it?
Context: found while fixing the Safari column clipping (style.css, 2026-11-21).
Unanswered: the owner replied "approve" only.

## there are a handful of things that could be consolidated
Commit: 15fdcba (49 citation copies harmonized), 6cb5cc8 (7 wording standardizations); no merge candidates found by similarity scan, remaining merges folded into the page-organization review
Deferred: site-wide consolidation sweep, not page-specific; owner deferred 2026-11-17.
there are a handful of things that could be consolidated, formatted better or removed as near duplicates

## check other pages for better organization
Commit: 7065fcd … 8ac6f07 (page-by-page sweep of all 149 pages, 2026-11-21: main rule first, related notes grouped, errata first site-wide, misplaced notes moved (Nekro VA Z, Watcher parent restored), duplicate Auto-Factories heading removed, typos)
Deferred: owner request 2026-11-17 after the coexistence reorganization (e.g. 6bd9f42): review other pages for misnesting, duplicate notes, and topic ordering.
check other pages for better organization

## research end a player's turn: Z'eu Ω / tactical actions outside a turn
Commit: 0aeac74 (F_naalu Z'eu Ω note now matches the source 4 designer ruling; dropped the unsourced 'also ends the Naalu player's turn'. Puppets On A String (source 6, community: turn-enders don't prevent the action) left as is by owner's choice, though it points the other way.)
lets research end a players turn in regards to that agent or leader that lets people take tactical actions

## Sweep notes for unmentioned exceptions
Commit: 3f3b3e6, c95d523, d23cda4 (all 531 restriction notes reviewed; added exceptions documented elsewhere: home-system scoring, transactions, moving through enemy ships, Circlet of the Void for supernovae and gravity rifts)
Deferred: owner fixed the AFB/Waylay example (26ead52) and deferred a sweep of all notes stating flat rules ("cannot", "may not") for card/ability exceptions they should mention.
some rules have exceptions. in the rules reference part these should be ignored... for now but in notes they need to be accounted for
ie A non–fighter ship cannot use its Sustain Damage ability to cancel a hit produced by an anti–fighter barrage roll.1 should account for waylay

## support request/bugreport form that makes github issues
Commit: 7a894c6 (footer link to a prefilled GitHub issue form; no backend)


## check the wiki FAQ for any notes that don't have rulings
Commit: 1db1d07 (218 wiki FAQ entries checked; F_keleres Overwing Zeta and F_vuilraith Vortex now cite source 4; uncovered entries in scratch/wiki_faq_gaps.md for owner review)
Deferred: owner request 2026-11-19 ("all everything, deferred"). Site-wide sweep: for every page (factions, components, rules), fetch the matching fandom wiki FAQ section(s). (1) For each site note cited * , check whether the wiki FAQ quotes an official ruling that can be traced to a numbered source, and cite it. (2) List wiki FAQ entries the site doesn't cover, to consider adding. The wiki is not a numbered source; only cite what can be traced to sources 1-15.
Status 2026-11-21: blocked — the fandom wiki refuses automated fetches (HTTP 402/403). Needs saved pages or pasted FAQ text from the owner.
Status 2026-11-21 (later): unblocked. 57 pages fetched as wikitext via the MediaWiki API (`api.php?action=parse&prop=wikitext`) into `scratch/wiki/*.json`. 218 FAQ entries extracted to `scratch/wiki_faq.md` / `scratch/wiki_faq.json`. Wiki entries carry no sources (`Source=-`), so each must be traced to sources 1-15 by text. Sweep done 2026-11-21: all 218 entries checked. Two `*` notes gained citations (F_keleres Overwing Zeta, F_vuilraith Vortex, both source 4). Uncovered entries listed in `scratch/wiki_faq_gaps.md` for owner review.
lets check the wiki faq for any notes that dont have rulings
