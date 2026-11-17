<?php include "prefix.php"?>
<header><h1>Active Player</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '4.' counter(item, decimal);} </style>
<p data-src="1,3">The active player is the player taking a turn during the action phase.</p>
    <ol class="lrr">
    <li data-src="1,3">During the action phase, the player who is first in initiative order is the first active player.</li>
    <li data-src="1,3">After the active player takes a turn, the next player in initiative order becomes the active player.</li>
    <li data-src="1,3">After the last player in initiative order takes a turn, the player who is first in initiative order becomes the active player again, and turns begin again in initiative order, ignoring any players who have already passed.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>During combat, the active player is the attacker.<sup>1,3</sup></li>
    <li>The active player will have the first opportunity to resolve abilities during each timing window.<sup>1,2,5</sup></li>
    <li>All transactions during the action phase must involve the active player.<sup>2</sup></li>
    <li>If a non&ndash;active player produces hits using the <a href="/R_space_cannon"><sc>Space Cannon Offense</sc></a> ability of one of their units, those hits must be assigned to the active player&rsquo;s units.<sup>1,2</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_abilities">Abilities</a></li>
    <li><a href="/R_action_phase">Action Phase</a></li>
    <li><a href="/R_attacker">Attacker</a></li>
    <li><a href="/R_initiative_order">Initiative Order</a></li>
    <li><a href="/R_space_cannon">Space Cannon</a></li>
    <li><a href="/R_transactions">Transactions</a></li>
    </ul>
</article>
<?php include "suffix.php"?>