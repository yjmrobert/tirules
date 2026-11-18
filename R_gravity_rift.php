<?php include "prefix.php"?>
<header><h1>Gravity Rift</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '41.' counter(item, decimal);} </style>
<p data-src="1">A gravity rift is an anomaly that affects movement.</p>
    <ol class="lrr">
    <li data-src="1,2,3,8">A ship that will move out of or through a gravity rift at any time during its movement, applies +1 to its move value.</li>
    <ol>
        <li data-src="1,2,5">This can allow a ship to reach the active system from farther away than it normally could.</li>
        <li>(Thunder&rsquo;s Edge) A gravity rift can contribute its movement bonus to a given ship only once.<sup>7</sup></li>
    </ol>
    <li data-src="1,2,3,8,10">For each ship that would move out of or through a gravity rift, one die is rolled immediately before it exits the gravity rift system; on a result of 1&ndash;3, that ship is removed from the board.</li>
    <ol>
        <li data-src="1,2,5">Dice are not rolled for units that are being transported by ships that have capacity.</li>
        <li data-src="1,2">Units that are being transported are removed from the board if the ship transporting them is removed from the board.</li>
        <li data-src="1,3,10">Units that are removed are returned to the player&rsquo;s reinforcements.</li>
    </ol>
    <li data-src="1,6">A gravity rift can affect the same ship multiple times during a single movement.</li>
    <li data-src="1,2">A system that contains multiple gravity rifts is treated as a single gravity rift.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>Moving into a gravity rift, usually when it is the active system, will not provide the +1, nor will the ships have to roll for removal.<sup>2</sup></li>
    <li>A ship removed by a gravity rift is not destroyed.<sup>2,10</sup></li>
    <li>All ship movement must be declared before any of them roll for gravity rift removal. A player may not choose additional ships to move after seeing the result of this roll.<sup>1,2</sup></li>
    <li>Each ship rolls for gravity rift removal as it exits the gravity rift, during movement. The fleet pool limit in the active system is checked only after all moving ships arrive, so ships removed by a gravity rift do not count against it.<sup>1,2</sup></li>
    <li>The retreating player must declare which, if any, fighters and ground forces they are moving, and which ships will be transporting them. If they have the Fighter II technology, then for each fighter, they must choose if that fighter is moving itself or being transported.<sup>*</sup></li>
    <li>If a ship moves through or out of multiple gravity rifts, and/or the same gravity rift multiple times, each instance will provide a +1 to movement, and requires a separate roll for removal.<sup>1,2,8</sup></li>
    <li>If a ship with capacity would transport another unit after moving out of or through a gravity rift, but is removed, that unit remains where it is.<sup>*</sup></li>
    <li>A system containing a <a href="/F_vuilraith">Vuil&rsquo;raith</a> <a href="https://twilight-imperium.fandom.com/wiki/The_Vuil&#x27;Raith_Cabal#:~:text=Dimensional%20Tear">Dimensional Tear</a> is an anomaly.<sup>2,4</sup></li>
    <li>All units moving into, through or out of anomalies must follow the same rules as ships moving into, through or out of anomalies.<sup>4</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_anomalies">Anomalies</a></li>
    <li><a href="/R_destroyed">Destroyed</a></li>
    <li><a href="/R_movement">Movement</a></li>
    <li><a href="/R_transport">Transport</a></li>
    </ul>
</article>
<?php include "suffix.php"?>
