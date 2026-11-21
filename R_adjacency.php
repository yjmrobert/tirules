<?php include "prefix.php"?>
<header><h1>Adjacency</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '6.' counter(item, decimal);} </style>
<p data-src="1">Two system tiles are adjacent to each other if any of the tiles&rsquo; sides are touching each other.</p>
    <ol class="lrr">
    <li data-src="1,2,3">A system that has a wormhole is treated as being adjacent to a system that has a matching wormhole.</li>
    <li data-src="1">A unit or planet is adjacent to all system tiles that are adjacent to the system tile that contains that unit or planet.</li>
    <ol><li data-src="1,2">A system is not adjacent to itself.</li></ol>
    <li data-src="1,2">A planet is treated as being adjacent to the system that contains that planet.</li>
    <li data-src="1,7,8">Systems that are connected by lines drawn across one or more hyperlane tiles are adjacent for all purposes.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>A unit is not adjacent to the system it is in.<sup>1,2</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_game_board">Game Board</a></li>
    <li><a href="/R_hyperlanes">Hyperlanes</a></li>
    <li><a href="/R_movement">Movement</a></li>
    <li><a href="/R_neighbors">Neighbors</a></li>
    <li><a href="/R_pds">PDS</a></li>
    <li><a href="/R_system_tiles">System Tiles</a></li>
    <li><a href="/R_wormhole_nexus">Wormhole Nexus</a></li>
    <li><a href="/R_wormholes">Wormholes</a></li>
    </ul>
</article>
<?php include "suffix.php"?>
