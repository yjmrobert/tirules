<?php include "prefix.php"?>
<header><h1>Invasion</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '49.' counter(item, decimal);} </style>
<p data-src="1,3">Invasion is a step of the tactical action during which the active player can land ground forces on planets to gain control of those planets.</p>
<p data-src="1,3">To resolve an invasion, players perform the following steps:</p>
    <ol class="lrr">
    <li data-src="1,2,3"><b>Step 1 &ndash; Bombardment</b>: The active player may use the <a href="/R_bombardment"><sc>Bombardment</sc></a> ability of any of their units in the active system.</li>
    <li data-src="1,2,3"><b>Step 2 &ndash; Commit Ground Forces</b>: If the active player has ground forces in the space area of the active system, that player may commit any number of those ground forces to land on any of the planets in that system.</li>
    <ol>
        <li data-src="1,3">To commit a ground force to a planet, the active player places that ground force unit on that planet.</li>
        <li data-src="1">The planet may contain another player&rsquo;s ground forces.</li>
        <li data-src="1,2">If the active player does not wish to commit ground forces, that player proceeds to the <b><a href="/R_tactical_action">Production</a></b> step of the tactical action.</li>
        <li>(Thunder&rsquo;s Edge) A player can commit their <a href="/R_coexistence">coexisting</a> ground forces against the planet they are coexisting on, to end that coexistence.<sup>7</sup></li>
    </ol>
    <li data-src="1,2,3"><b>Step 3 &ndash; Space Cannon Defense</b>: If the active player commits any ground forces to a planet that contains units that have the <a href="/R_space_cannon"><sc>Space Cannon</sc></a> ability, those <a href="/R_space_cannon"><sc>Space Cannon</sc></a> abilities can be used against the committed ground forces.</li>
    <ol><li data-src="1">If the active player committed ground forces to more than one planet that contained units with a <a href="/R_space_cannon"><sc>Space Cannon</sc></a> ability, the active player chooses the order in which those <a href="/R_space_cannon"><sc>Space Cannon</sc></a> abilities are resolved.</li></ol>
    <li data-src="1,2,3"><b>Step 4 &ndash; Ground Combat</b>: If the active player has ground forces on a planet in the active system that contains another player&rsquo;s ground forces, those players resolve a ground combat on that planet.</li>
    <ol>
        <li data-src="1,3">If players must resolve a combat on more than one planet, the active player chooses the order in which those combats are resolved.</li>
        <li>(Thunder&rsquo;s Edge) <a href="/R_coexistence">Coexisting</a> units do not trigger a ground combat, but the active player may choose to engage them with ground forces committed to that planet.<sup>7</sup></li>
    </ol>
    <li data-src="1,2,3"><b>Step 5 &ndash; Establish Control</b>: The active player gains control of each planet they committed ground forces to if that planet still contains at least one of their ground forces.</li>
    <ol>
        <li data-src="1,2,3">When a player gains control of a planet, any structures on the planet that belong to other players are immediately destroyed.</li>
        <li data-src="1,2,3">When a player gains control of a planet, they gain the planet card that matches that planet and exhaust that card.</li>
        <li data-src="1">A player cannot gain control of a planet they already control.</li>
        <li data-src="1,2,5">If there was a combat, and all units belonging to both players were destroyed, the player who was the defender retains control of the planet and places one of their control tokens on the planet.</li>
    </ol>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>If a player gains control of an uncontrolled planet during the <b>Establish Control</b> step, they explore it.<sup>1,2,8</sup></li>
    <li>If a player gains control of a legendary planet, they gain the legendary planet ability card in addition to the planet card.<sup>1,7,8</sup></li>
    <li>If <a href="/R_mecatol_rex">Mecatol Rex</a> has the custodians token on it, a player must remove it before they may commit ground forces to it.<sup>1,2,3</sup></li>
    <li>Unless an ability states otherwise, ground forces can only land on a planet by being committed during the Commit Ground Forces step, even if the player already controls that planet. Abilities that move ships as part of a component action do not allow ground forces to land on planets.<sup>2</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_active_player">Active Player</a></li>
    <li><a href="/R_bombardment">Bombardment</a></li>
    <li><a href="/R_combat">Combat</a></li>
    <li><a href="/R_control">Control</a></li>
    <li><a href="/R_custodians_token">Custodians Token</a></li>
    <li><a href="/R_exploration">Exploration</a></li>
    <li><a href="/R_ground_combat">Ground Combat</a></li>
    <li><a href="/R_ground_forces">Ground Forces</a></li>
    <li><a href="/R_legendary_planets">Legendary Planets</a></li>
    <li><a href="/R_opponent">Opponent</a></li>
    <li><a href="/R_pds">PDS</a></li>
    <li><a href="/R_planets">Planets</a></li>
    <li><a href="/R_space_cannon">Space Cannon</a></li>
    </ul>
</article>
<?php include "suffix.php"?>