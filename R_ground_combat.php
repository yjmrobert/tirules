<?php include "prefix.php"?>
<header><h1>Ground Combat</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '42.' counter(item, decimal);} </style>
<p data-src="1,2,3">During the <b>Ground Combat</b> step of an invasion, if the active player has ground forces on a planet that contains another player&rsquo;s ground forces, those players resolve a ground combat on that planet. To resolve a ground combat, players perform the following steps:</p>
    <ol class="lrr">
    <li data-src="1,3"><b>Step 1 &ndash; Roll Dice</b>: Each player rolls one die for each ground force they have on the planet; this is a combat roll. If a unit&rsquo;s combat roll produces a result that is equal to or greater than that unit&rsquo;s combat value, that roll produces a hit.</li>
    <ol><li data-src="1,3">If a unit&rsquo;s combat value contains two or more burst icons, the player rolls one die for each burst icon instead.</li></ol>
    <li data-src="1,3"><b>Step 2 &ndash; Assign Hits</b>: Each player in the combat must choose one of their own ground forces on the planet to be destroyed for each hit result their opponent produced.</li>
    <ol><li data-src="1">When a unit is destroyed, the player who controls that unit removes it from the board and places it in their reinforcements.</li></ol>
    <li data-src="1,3">After assigning hits, if both players still have ground forces on the planet, players resolve a new combat round starting with the <b>Roll Dice</b> step.</li>
    <li data-src="1,3">Ground combat ends when only one player (or neither player) has ground forces on the planet.</li>
    <ol>
        <li data-src="1,2">During the first round of a combat, &ldquo;start of combat&rdquo; and &ldquo;start of combat round&rdquo; effects occur during the same timing window.</li>
        <li data-src="1">During the last round of a combat, &ldquo;end of combat&rdquo; and &ldquo;end of combat round&rdquo; effects occur during the same timing window.</li>
        <li data-src="1,2">After a combat ends, the player with one or more ground forces remaining on the planet is the winner of the combat; the other player is the loser of the combat.</li>
        <li data-src="1,2,5">If neither player has a ground force remaining, there is no winner; the combat ends in a draw.</li>
    </ol>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>If ground combat is to happen on multiple planets during a single invasion step, they will be resolved planet by planet, after the <b>Space Cannon Defense</b> step has been resolved on all planets and before the <b>Establish Control</b> step is resolved on any planet. The active player chooses the order combats are fought in.<sup>3</sup></li>
    <li>The &ldquo;start of combat&rdquo; and &ldquo;start of combat round&rdquo; windows occur before the <b>Roll Dice</b> step.<sup>2</sup></li>
    <li>The &ldquo;end of combat&rdquo; and &ldquo;end of combat round&rdquo; windows occur after the <b>Assign Hits</b> step.<sup>*</sup></li>
    <li>Abilities that trigger &ldquo;at the start of a combat&rdquo;, other than those on agents, can only be resolved during a combat in which the player resolving them is participating.<sup>4</sup></li>
    <li>A player may use the <a href="/R_sustain_damage"><sc>Sustain Damage</sc></a> ability of a unit involved in a combat, usually a mech, to cancel a hit produced by their opponent.<sup>1</sup></li>
    <li>No player may retreat from a ground combat.<sup>1</sup></li>
    <li>A player may score up to one secret objective per ground combat.<sup>1,2</sup></li>
    <li>A player only wins a combat if a space combat or ground combat occurred. Destroying all opposing ships with the Space Cannon ability, destroying all opposing ground forces with the Bombardment ability, landing ground forces on a planet without opposing ground forces, or the opposing player avoiding the combat with the <a href="/F_naalu">Naalu</a> player&rsquo;s Foresight faction ability does not count as winning a combat. A planet containing only another player&rsquo;s structures does not cause a ground combat.<sup>2</sup></li>
    <li>The &ldquo;0&rdquo; side of the d10 represents a result of 10.<sup>1,2</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_attacker">Attacker</a></li>
    <li><a href="/R_combat">Combat</a></li>
    <li><a href="/R_defender">Defender</a></li>
    <li><a href="/R_destroyed">Destroyed</a></li>
    <li><a href="/R_ground_forces">Ground Forces</a></li>
    <li><a href="/R_invasion">Invasion</a></li>
    <li><a href="/R_modifiers">Modifiers</a></li>
    <li><a href="/R_opponent">Opponent</a></li>
    <li><a href="/R_planets">Planets</a></li>
    <li><a href="/R_rerolls">Rerolls</a></li>
    <li><a href="/R_sustain_damage">Sustain Damage</a></li>
    </ul>
</article>
<?php include "suffix.php"?>