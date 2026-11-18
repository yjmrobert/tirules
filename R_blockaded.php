<?php include "prefix.php"?>
<header><h1>Blockaded</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '14.' counter(item, decimal);} </style>
<p data-src="1,2">A player&rsquo;s unit with <a href="/R_production"><sc>Production</sc></a> is blockaded if it is in a system that does not contain any of their ships and contains other players&rsquo; ships.</p>
    <ol class="lrr">
    <li data-src="1,2,3">A player cannot use a blockaded unit to produce ships; that player can still use a blockaded unit to produce ground forces.</li>
    <ol><li>(Thunder&rsquo;s Edge) <a href="/R_coexistence">Coexisting</a> units are always blockaded, so they can produce ground forces but cannot produce ships.<sup>7,9</sup></li></ol>
    <li data-src="1,8">When a player blockades another player&rsquo;s space dock, if the blockaded player has captured any of the blockading player&rsquo;s units, those units are returned to the blockading player&rsquo;s reinforcements.</li>
    <ol><li data-src="1,8">While a player is blockading another player, the blockaded player cannot capture any of the blockading player&rsquo;s units.</li></ol>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>While a player is involved in a space combat in a system, their units in that system are not blockaded, as both players will have ships in the system.<sup>1,2</sup></li>
    <li>If, at the end of a combat, one player has no ships, but a space dock in the system, and the other player has only fighters, the space dock will be blockaded before the fighters are removed.<sup>*</sup></li>
    <li>When a ship moves, it does not blockade units in systems it moves through.<sup>*</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_capture">Capture</a></li>
    <li><a href="/R_producing_units">Producing Units</a></li>
    <li><a href="/R_production">Production</a></li>
    <li><a href="/R_ships">Ships</a></li>
    <li><a href="/R_space_combat">Space Combat</a></li>
    <li><a href="/R_space_dock">Space Dock</a></li>
    </ul>
</article>
<?php include "suffix.php"?>