<?php include "prefix.php"?>
<header><h1>Capacity <sub>(Attribute)</sub></h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '16.' counter(item, decimal);} </style>
<p data-src="1,3">Capacity is an attribute of some units that is presented on faction sheets and unit upgrade technology cards.</p>
    <ol class="lrr">
    <li data-src="1,2,3,5">A unit&rsquo;s capacity value indicates the maximum combined number of fighters and ground forces that it can transport.</li>
    <li data-src="1,2,3,5">The combined capacity values of a player&rsquo;s ships in a system determine the number of fighters and ground forces that player can have in that system&rsquo;s space area.</li>
    <li data-src="1">If a player has more fighters and ground forces in the space area of a system than the total capacity of that player&rsquo;s ships in that system, that player must remove the excess units.</li>
    <ol>
        <li data-src="1,2">A player can choose which of their excess units to remove.</li>
        <li data-src="1,2,3">Ground forces on planets do not count against capacity.</li>
        <li data-src="1,2,5">A player&rsquo;s fighters and ground forces do not count against capacity during combat. At the end of combat, any excess units are removed and returned to that player&rsquo;s reinforcements.</li>
    </ol>
    <li data-src="1,2">Fighters and ground forces are not assigned to specific ships, except while they are being transported.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>Capacity limits are checked immediately whenever a combat is not in progress.<sup>2,5</sup></li>
    <ol>
        <li>If, after movement, a player has more fighters and ground forces in the active system than their ships there can carry, they must remove the excess before the <b>Space Cannon Offense</b> step.<sup>2</sup></li>
        <li>If a ship with capacity is destroyed during the <b>Space Cannon Offense</b> step, its player removes the excess units immediately, after that player&rsquo;s hits are assigned and before the next player rolls. The excess units do not remain until space combat.<sup>2,5</sup></li>
        <li>Capacity is checked after the winner of a space combat is determined. It is possible to win a space combat with only fighters remaining, before those fighters are removed due to lack of capacity.<sup>1</sup></li>
    </ol>
    <li>A ship cannot pick up more units from a planet than it has capacity. However, a ship may pick up any units (including zero) in a system as it transports, even if doing so would cause units to be removed due to capacity limits.<sup>2,5</sup></li>
    <ol>
        <li>For example, say a carrier (with capacity four) is in the space area of a system along with four fighters. On the only planet in that system are eight infantry. There are no other units in the system. When the carrier moves out of the system, it obeys the following:<sup>5</sup></li>
        <ol>
            <li>The carrier may transport the four fighters, leaving behind all eight of the infantry in the system.<sup>2,5</sup></li>
            <li>The carrier may transport four of the eight infantry, leaving behind the four remaining infantry in the system. Now that the system has zero capacity, all four of the fighters will be removed.<sup>2,5</sup></li>
            <li>The carrier may transport two of the eight infantry and two of the four fighters, leaving behind the six remaining infantry in the system. Now that the system has zero capacity, the two remaining fighters will be removed.<sup>2,5</sup></li>
            <li>The carrier may transport nothing, leaving behind all eight of the infantry in the system. Now that the system has zero capacity, all four of the fighters will be removed.<sup>2,5</sup></li>
            <li>The carrier cannot attempt to pick up all eight infantry, even if it immediately removes four of them (and the fighters).<sup>2,5</sup></li>
        </ol>
    </ol>
    <li>Units that are removed due to capacity limits are not destroyed. For example, removed Infantry II units do not roll for the Infantry II unit upgrade&rsquo;s ability.<sup>2</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_destroyed">Destroyed</a></li>
    <li><a href="/R_fleet_pool">Fleet Pool</a></li>
    <li><a href="/R_movement">Movement</a></li>
    <li><a href="/R_space_cannon">Space Cannon</a></li>
    <li><a href="/R_space_combat">Space Combat</a></li>
    <li><a href="/R_transport">Transport</a></li>
    </ul>
</article>
<?php include "suffix.php"?>