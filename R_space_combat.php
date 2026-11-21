<?php include "prefix.php"?>
<header><h1>Space Combat</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '78.' counter(item, decimal);} </style>
<p data-src="1,2,3">After resolving the <b><a href="/R_space_cannon">Space Cannon Offense</a></b> step of a tactical action, if two players have ships in the active system, those players must resolve a space combat.</p>
    <ol class="lrr">
    <li data-src="1">If the active player is the only player with ships in the system, they skip the <b>Space Combat</b> step of the tactical action and proceeds to the <b><a href="/R_invasion">Invasion</a></b> step.</li>
    <li data-src="1">If an ability occurs &ldquo;before combat&rdquo;, it occurs immediately before the <b><a href="/R_anti_fighter_barrage">Anti&ndash;Fighter Barrage</a></b> step.</li>
    <ol>
        <li data-src="1,2">During the first round of a combat, &ldquo;start of combat&rdquo; and &ldquo;start of combat round&rdquo; effects occur during the same timing window.</li>
        <li data-src="1">During the last round of a combat, &ldquo;end of combat&rdquo; and &ldquo;end of combat round&rdquo; effects occur during the same timing window.</li>
    </ol>
    <p data-src="1">To resolve a space combat, players perform the following steps:</p>
    <li data-src="1,3"><b>Step 1 &ndash; Anti&ndash;Fighter Barrage</b>: If this is the first round of a space combat, the players may simultaneously use the <a href="/R_anti_fighter_barrage"><sc>Anti&ndash;Fighter Barrage</sc></a> ability of any of their units in the active system.</li>
    <ol>
        <li data-src="1">If one or both players no longer have ships in the active system after resolving this step, the space combat ends immediately.</li>
        <li data-src="1,2">Players cannot resolve <a href="/R_anti_fighter_barrage"><sc>Anti&ndash;Fighter Barrage</sc></a> abilities during any rounds of space combat other than the first round.</li>
        <li data-src="1,2,8">This step still occurs if no fighters are present.</li>
    </ol>
    <li data-src="1,2"><b>Step 2 &ndash; Announce Retreats</b>: Each player may announce a retreat, beginning with the defender.</li>
    <ol>
        <li data-src="1,2,3">A retreat will not occur immediately; the units retreat during the <b>Retreat</b> step.</li>
        <li data-src="1,2">If the defender announces a retreat, the attacker cannot announce a retreat during that combat round.</li>
        <li data-src="1,2">A player cannot announce a retreat if there is not at least one eligible system to retreat to.</li>
    </ol>
    <li data-src="1,3"><b>Step 3 &ndash; Roll Dice</b>: Each player rolls one die for each ship they have in the active system; this is called a combat roll. If a unit&rsquo;s combat roll produces a result that is equal to or greater than that unit&rsquo;s combat value, that result produces a hit.</li>
    <ol>
        <li data-src="1,3">If a unit&rsquo;s combat value contains two or more burst icons, the player rolls one die for each burst icon instead.</li>
        <li data-src="1,2">If a player has ships that have different combat values in the active system, that player rolls these dice separately.</li>
        <li data-src="1">First, that player should roll all dice for units with a combat value of &ldquo;1&rdquo;. Then, that player should roll all dice for units with combat value of &ldquo;2&rdquo;, and then &ldquo;3&rdquo;, continuing in numerical order until that player has rolled dice for each of their ships.</li>
        <li data-src="1">The player counts each hit their combat rolls produce. The total number of hits produced will destroy units during the <b>Assign Hits</b> step.</li>
        <li data-src="1,2,10">If a player has an ability that rerolls a die or affects a die after it is rolled, that player must resolve such an ability immediately after rolling all of their dice.</li>
        <li data-src="1">The attacker makes all of their combat rolls during this step before the defender. This procedure is important for abilities that allow a player to reroll an opponent&rsquo;s die.</li>
    </ol>
    <li data-src="1,3"><b>Step 4 &ndash; Assign Hits</b>: Each player in the combat must choose and destroy one of their own ships in the active system for each hit their opponent produced.</li>
    <ol>
        <li data-src="1,2">Before assigning hits, players may use their units&rsquo; <a href="/R_sustain_damage"><sc>Sustain Damage</sc></a> abilities to cancel hits.</li>
        <li data-src="1,3">When a unit is destroyed, the player who controls that unit removes it from the board and places it in their reinforcements.</li>
    </ol>
    <li data-src="1,3"><b>Step 5 &ndash; Retreat</b>: If a player announced a retreat during <b>step 2</b>, and there is still an eligible system for their units to retreat to, they must retreat.</li>
    <ol>
        <li data-src="1,2,5">If a player announced a retreat during the <b>Announce Retreats</b> step, but their opponent has no ships remaining in the system, the combat immediately ends and the retreat does not occur.</li>
        <li data-src="1,2,3,5">To retreat, a player takes all of their ships with a move value in the combat and moves them to a single system that is adjacent to the active system. That player&rsquo;s fighters and ground forces in the space area of the active system that are unable to move or be transported are removed.</li>
        <li data-src="1,2,3">The system that a player&rsquo;s units retreat to must contain one or more of that player&rsquo;s units, a planet they control, or both. Additionally, the system cannot contain ships controlled by another player.</li>
        <li data-src="1,2,3">If any of a player&rsquo;s units successfully retreat and are moved into an adjacent system, that player must place a command token from their reinforcements in the system to which their units retreated. If that system already contains one of their command tokens, that player does not place an additional token there. If the player has no command tokens in their reinforcements, that player must use one from their command sheet instead.</li>
    </ol>
    <li data-src="1,3">After the <b>Retreat</b> step, if both players still have ships in the active system, those players resolve another round of space combat beginning with the <b>Announce Retreats</b> step.</li>
    <li data-src="1,2">Space combat ends when only one player &ndash; or neither player &ndash; has a ship in the space area of the active system.</li>
    <ol><li data-src="1">During the last round of a combat, &ldquo;end of combat&rdquo; and &ldquo;end of combat round&rdquo; effects occur during the same timing window.</li></ol>
    <li data-src="1,2,3,5">After a combat ends, the player with one or more ships remaining in the system is the winner of the combat; the other player is the loser of the combat. If neither player has a ship remaining, the combat ends in a draw and there is no winner.</li>
    <ol><li data-src="1,2">If the winner of the combat has fighters or ground forces in the space area of the active system and those units exceed the capacity of that player&rsquo;s ships in that system, that player must choose and remove any excess units.</li></ol>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>Abilities that resolve at the start of a space combat, such as the <a href="https://twilight-imperium.fandom.com/wiki/Warfare_Technologies#Assault_Cannon"><i>Assault Cannon</i></a> technology and the <a href="/F_mentak">Mentak</a> player&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/The_Mentak_Coalition#Faction_Abilities:~:text=Ambush"><sc>Ambush</sc></a> faction ability, are resolved before the <b>Anti&ndash;Fighter Barrage</b> step.<sup>2,5</sup></li>
    <li>Abilities that trigger &ldquo;at the start of a combat&rdquo;, other than those on agents, can only be resolved during a combat in which the player resolving them is participating.<sup>4</sup></li>
    <li>A player&rsquo;s fighters and ground forces do not count against capacity during combat. At the end of combat, any excess units are removed and returned to that player&rsquo;s reinforcements.<sup>1,2,5</sup></li>
    <li>Capacity is checked after the winner of a space combat is determined.<sup>1</sup></li>
    <ol><li>It is possible to win a space combat with only fighters remaining, before those fighters are removed due to lack of capacity.<sup>1</sup></li></ol>
    <li>The following apply to retreats:</li>
    <ol>
        <li>Ships that have announced a retreat still roll dice during the Roll Dice step of that combat round, then retreat during the Retreat step. Retreating this way avoids abilities that resolve after the combat round, such as the <a href="/F_norr">N&rsquo;orr</a> player&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/Sardakk_N&#x27;orr#:~:text=Exotrireme"><i>Exotrireme II</i></a>.<sup>2</sup></li>
        <li>If a space combat reaches a state where neither player can win, the attacker must retreat. If the attacker cannot retreat, their units in that combat are destroyed.<sup>2</sup></li>
        <li>Modifying the move value of a ship will have no effect when retreating. Retreats are limited to adjacent systems.<sup>2</sup></li>
        <li>The <a href="https://twilight-imperium.fandom.com/wiki/Propulsion_Technologies#Dark_Energy_Tap"><i>Dark Energy Tap</i></a> technology allows a player to retreat into a system that does not contain their ships or a planet they control.<sup>2,8</sup></li>
        <li>Ships can retreat into a <a href="/R_nebula">nebula</a>, as a nebula is intended to no longer need to be the active system for units to move into it.<sup>4</sup></li>
        <li>A player can retreat into an <a href="/R_asteroid_field">asteroid field</a> or <a href="/R_supernova">supernova</a> only if an effect allows their ships to move into it, such as the <a href="https://twilight-imperium.fandom.com/wiki/Propulsion_Technologies#Antimass_Deflectors"><i>Antimass Deflectors</i></a> technology or the <a href="/F_muaat">Muaat</a> player&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/The_Embers_of_Muaat#Faction_Technologies:~:text=Magmus%20Reactor"><i>Magmus Reactor</i></a> technology.<sup>*</sup></li>
        <li>Ships retreating out of a gravity rift are affected by it; see <a href="/R_gravity_rift">Gravity Rift</a>.<sup>1</sup></li>
        <li>The <a href="https://twilight-imperium.fandom.com/wiki/Action_Cards#Codex_I:~:text=Nav%20Suite"><i>Nav Suite</i></a> action card will not allow a player to ignore an anomaly while retreating, as a retreat does not happen during the <b>Movement</b> step.<sup>*</sup></li>
        <li>Ships can retreat out of the active system, and transport units out of it, even if it contains the retreating player&rsquo;s command token.<sup>1,2</sup></li>
        <li>While retreating, a player may transport zero or more ground forces from planets they control in the active system. The player need not decide which ground forces they transport until they execute the retreat.<sup>2,10</sup></li>
        <li>While retreating, a player cannot transport more fighters and/or ground forces than they have capacity in the retreating ships.<sup>1,2,5</sup></li>
        <li>When a player retreats, their fighters that remain in the space area of the active system are removed, even if that system contains one of their space docks.<sup>2,5</sup></li>
        <li>Ground forces transported by retreating ships, or moved with the <a href="https://twilight-imperium.fandom.com/wiki/Action_Cards#Twilight_Imperium_Fourth_Edition:~:text=Skilled%20Retreat"><i>Skilled Retreat</i></a> action card, cannot land on planets in the system they move to; they remain in the space area.<sup>2</sup></li>
    </ol>
    <li>A player only wins a combat if a space combat or ground combat occurred. Destroying all opposing ships with the Space Cannon ability, destroying all opposing ground forces with the Bombardment ability, landing ground forces on a planet without opposing ground forces, or the opposing player avoiding the combat with the <a href="/F_naalu">Naalu</a> player&rsquo;s Foresight faction ability does not count as winning a combat. A planet containing only another player&rsquo;s structures does not cause a ground combat.<sup>2</sup></li>
    <li>The &ldquo;0&rdquo; side of the d10 represents a result of 10.<sup>1,2</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_anti_fighter_barrage">Anti&ndash;Fighter Barrage</a></li>
    <li><a href="/R_attacker">Attacker</a></li>
    <li><a href="/R_capacity">Capacity</a></li>
    <li><a href="/R_defender">Defender</a></li>
    <li><a href="/R_destroyed">Destroyed</a></li>
    <li><a href="/R_fleet_pool">Fleet Pool</a></li>
    <li><a href="/R_opponent">Opponent</a></li>
    <li><a href="/R_sustain_damage">Sustain Damage</a></li>
    <li><a href="/R_tactical_action">Tactical Action</a></li>
    <li><a href="/R_transport">Transport</a></li>
    </ul>
</article>
<?php include "suffix.php"?>
