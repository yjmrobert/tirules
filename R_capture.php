<?php include "prefix.php"?>
<header><h1>Capture</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '17.' counter(item, decimal);} </style>
<p data-src="1">Some abilities instruct a player to capture a unit, preventing the unit&rsquo;s original owner from using it.</p>
    <ol class="lrr">
    <li data-src="1,8">If a player captures a non&ndash;fighter ship or mech, they place it on their faction sheet. When such a unit is returned, it is placed into the reinforcements of the original owner.</li>
    <li data-src="1,8">A captured non&ndash;fighter ship or mech is returned under the following circumstances:</li>
    <ol>
        <li data-src="1,8">If the player who captured the unit agrees to return it as part of a transaction.</li>
        <li data-src="1,8">If an ability instructs the capturing player to return the unit as part of an ability&rsquo;s cost.</li>
        <li data-src="1,8">If the player whose unit was captured blockades a space dock of the player who captured the unit.</li>
    </ol>
    <li data-src="1,2,8">If a player captures a fighter or infantry, it is placed in its reinforcements instead of on the capturing player&rsquo;s faction sheet; the capturing player places a fighter or infantry token from the supply on their faction sheet instead.</li>
    <li data-src="1,8">Captured fighters and infantry do not belong to any player and are returned only when an ability instructs the capturing player to do so.</li>
    <ol>
        <li data-src="1,8">Captured fighters and infantry cannot be returned as part of a transaction.</li>
        <li data-src="1,8">Captured fighters and infantry are not returned as the result of a blockade.</li>
        <li data-src="1,8">When a captured fighter or infantry is returned, it is placed in the supply.</li>
    </ol>
    <li data-src="1,6">While a unit is captured, it cannot be produced or placed by its original owner until it is returned.</li>
    <li data-src="1,8">If one or more of a player&rsquo;s space docks is being blockaded, that player cannot capture units from the blockading players.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>Units are returned as soon as a space dock is blockaded.<sup>1,2</sup></li>
    <li>A captured unit may only be returned to the player that originally owned it.<sup>1</sup></li>
    <li>The <a href="/F_nekro">Nekro</a> player and the <a href="/F_yssaril">Yssaril</a> player are able to capture units by copying the <a href="/F_vuilraith">Vuil&rsquo;raith</a> player&rsquo;s abilities, but they will be unable to spend the captured units.<sup>*</sup></li>
    <li>If a player is eliminated, any of their units that are captured remain with the player that captured them. When the capturing player would return them, the units are instead returned to the game box.<sup>4</sup></li>
    <li>A player who captures their own units may return them to their reinforcements at any time. They cannot place their own captured units unless instructed to do so by a game effect.<sup>6</sup></li>
    <li>If a player has all of their units of one type on the game board or captured, and so have none in their reinforcements, and would place a unit of that type, they may remove a unit from any system on the game board that does not contain one of their command tokens and place that unit in their reinforcements, before placing that unit on the game board.<sup>1</sup></li>
    <li>A player cannot capture fighter or infantry tokens corresponding to units belonging to a player that is blockading one of their space docks.<sup>1,8</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_blockaded">Blockaded</a></li>
    <li><a href="/R_fighter_tokens">Fighter Tokens</a></li>
    <li><a href="/R_ground_combat">Ground Combat</a></li>
    <li><a href="/R_infantry_tokens">Infantry Tokens</a></li>
    <li><a href="/R_reinforcements">Reinforcements</a></li>
    <li><a href="/R_space_combat">Space Combat</a></li>
    <li><a href="/R_space_dock">Space Dock</a></li>
    <li><a href="/R_transactions">Transactions</a></li>
    </ul>
</article>
<?php include "suffix.php"?>