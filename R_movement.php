<?php include "prefix.php"?>
<header><h1>Movement</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '58.' counter(item, decimal);} </style>
<style> .lrr {counter-reset: item 1; }</style>
<p data-src="1,3">A player can move their ships by resolving a tactical action during the action phase. Additionally, some abilities can move a unit outside of the tactical action.</p>
    <ol class="lrr">
    <h2><li>Tactical Action Movement</li></h2>
    <li data-src="1,3">A ship&rsquo;s move value is presented along with its other attributes on faction sheets and unit upgrade technology cards. This value indicates the distance from its current system that a ship can move.</li>
    <p>To resolve movement, players perform the following steps:</p>
    <li data-src="1,3"><b>Step 1 &ndash; Move Ships</b>: A player can move any number of their eligible ships into the active system, obeying the following rules:</li>
    <ol>
        <li data-src="1,2,3">The ship must end its movement in the active system.</li>
        <li data-src="1,2,3">The ship cannot move through a system that contains ships that are controlled by another player.</li>
        <li data-src="1,2,3">The ship <b>cannot</b> move if it started its movement in another system that contains one of its faction&rsquo;s command tokens.</li>
        <li data-src="1,2">The ship <b>can</b> move through systems that contain its own faction&rsquo;s command tokens.</li>
        <li data-src="1,2">The ship <b>can</b> move out of the <b>active</b> system and back into it if its move value is high enough.</li>
        <li data-src="1,2">The ship must move along a path of adjacent systems, and the number of systems the ship enters cannot exceed its move value.</li>
    </ol>
    <li data-src="1,2,3">When a ship with a capacity value moves or is moved, it may transport ground forces and fighters.</li>
    <li data-src="1,2">The active player declares which of their ships are moving before any ships move. Those ships arrive in the active system simultaneously.</li>
    <li data-src="1,2,3"><b>Step 2 &ndash; Space Cannon Offense</b>: After the <b>Move Ships</b> step, players can use the <a href="/R_space_cannon"><sc>Space Cannon</sc></a> abilities of their units in the active system.</li>
    <h2><li>Ability Movement</li></h2>
    <li data-src="1,2">If an ability moves a unit outside of the <b>Movement</b> step of a tactical action, players follow the rules specified by that ability; neither a unit&rsquo;s move value nor the rules specified above apply.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>When an effect, such as retreating, moves a unit to an adjacent system, modifying that unit&rsquo;s move value will have no effect.<sup>1,2</sup></li>
    <li>When an ability moves a player&rsquo;s ships outside of a tactical action, those ships may transport units out of systems that contain that player&rsquo;s command tokens; this restriction only applies during tactical actions.<sup>1,2,4</sup></li>
    <ol><li>During a retreat, units may be transported from the active system.<sup>5,10</sup></li></ol>
    <li>A ship that can both move and be transported (i.e. Fighter II) cannot do both by &ldquo;meeting&rdquo; a ship with capacity partway through a tactical action movement, as all movement is simultaneous.<sup>1,5</sup></li>
    <li>Ships only move &ldquo;into&rdquo; the destination system. A ship may move &ldquo;through&rdquo; other systems.<sup>2,4</sup></li>
    <li>Fighters alone will block other players&rsquo; ships from moving through that system, whether they are accompanied by a <a href="/R_space_dock">Space Dock</a> or they are Fighters II.<sup>1,2,5</sup></li>
    <li>Another player&rsquo;s ground forces and PDS do not prevent a ship from moving through a system.<sup>2</sup></li>
    <li>A deal cannot allow a player&rsquo;s ships to move through a system that contains another player&rsquo;s ships.<sup>2</sup></li>
    <li>When an ability moves ships outside of a tactical action, the movement restrictions of anomalies still apply, unless the ability says otherwise.<sup>2</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_action_phase">Action Phase</a></li>
    <li><a href="/R_active_system">Active System</a></li>
    <li><a href="/R_adjacency">Adjacency</a></li>
    <li><a href="/R_anomalies">Anomalies</a></li>
    <li><a href="/R_capacity">Capacity</a></li>
    <li><a href="/R_deals">Deals</a></li>
    <li><a href="/R_hyperlanes">Hyperlanes</a></li>
    <li><a href="/R_move">Move</a></li>
    <li><a href="/R_ships">Ships</a></li>
    <li><a href="/R_space_cannon">Space Cannon</a></li>
    <li><a href="/R_tactical_action">Tactical Action</a></li>
    <li><a href="/R_transport">Transport</a></li>
    <li><a href="/R_wormholes">Wormholes</a></li>
    </ul>
</article>
<?php include "suffix.php"?>
