<?php include "prefix.php"?>
<header><h1>Transport</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '95.' counter(item, decimal);} </style>
<p data-src="1,2,3">When a ship moves, it may transport any combination of fighters and ground forces, but the number of units it transports cannot exceed that ship&rsquo;s capacity value.</p>
    <ol class="lrr">
    <li data-src="1,2">The ship can pick up and transport fighters and ground forces when it moves. During a tactical action, it can pick up and transport units from the active system, the system it started its movement in, and each system it moves through.</li>
    <ol>
        <li data-src="1,2,5">These transported units remain with the transporting ship until it is finished moving.</li>
        <li data-src="1,2">Units being transported by a ship that is removed from the board by a gravity rift are also removed from the board.</li>
    </ol>
    <li data-src="1,3">Any fighters and ground forces that a ship transports must move with the ship and remain in the space area of a system.</li>
    <li data-src="1,2,3,5">Fighters and ground forces cannot be picked up from a system that contains one of their faction&rsquo;s command tokens other than the active system.</li>
    <li data-src="1,2,3">A player can land ground forces on a planet in a system during the <b><a href="/R_invasion">Invasion</a></b> step of a tactical action.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>A ship cannot pick up more units from a planet than it has capacity.<sup>1,2,5</sup></li>
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
    <li>A ship may pick up ground forces from a planet in the active system, usually to invade a different planet in the same system.<sup>2</sup></li>
    <li>A ship may transport units in its system as it retreats or is otherwise moved out of the active system.<sup>1,2,5,10</sup></li>
    <li>A player&rsquo;s ships are intended to be able to transport units from systems that contain that player&rsquo;s command token when those ships move outside of a tactical action.<sup>4</sup></li>
    <li>A ship that can both move and be transported (i.e. Fighter II) cannot do both by &ldquo;meeting&rdquo; a ship with capacity partway through a tactical action movement, as all movement is simultaneous.<sup>1,5</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_capacity">Capacity</a></li>
    <li><a href="/R_ground_forces">Ground Forces</a></li>
    <li><a href="/R_invasion">Invasion</a></li>
    <li><a href="/R_movement">Movement</a></li>
    <li><a href="/R_tactical_action">Tactical Action</a></li>
    </ul>
</article>
<?php include "suffix.php"?>