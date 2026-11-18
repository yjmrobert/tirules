<?php include "prefix.php"?>
<header><h1>Game Board</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '39.' counter(item, decimal);} </style>
<p data-src="1">The game board consists of all system tiles in play.</p>
    <ol class="lrr">
    <li data-src="1">The game board consists of all system tiles that were placed during setup, even if the sides of those tiles do not touch any other system tiles, such as the Ghosts of <a href="/F_creuss">Creuss</a>&rsquo; home system.</li>
    <li data-src="1,2">A system tile is on the edge of the game board if any of its sides are not touching another system tile.</li>
    <ol>
        <li data-src="1,2,8">The Ghosts of <a href="/F_creuss">Creuss</a> home system and the wormhole nexus are on the edge of the game board.</li>
        <li>(Thunder&rsquo;s Edge) Each system in The Fracture is considered to be on the edge of the game board.<sup>7</sup></li>
    </ol>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>If the edge of a system tile is touching a hyperlane tile, that edge does not cause that system tile to be on the edge of the game board.<sup>2,4</sup></li>
    <ol>
        <li>When using the five&ndash; and seven&ndash;player hyperlane setups, the system tile in the center of the ring of hyperlanes is not on the edge of the game board.<sup>2</sup></li>
        <li>When using the seven&ndash; and eight&ndash;player alternate setups, only the system tiles designated as &ldquo;Ring 3&rdquo; and home systems are on the edge of the game board, along with the <a href="/F_creuss">Creuss</a> home system and the wormhole nexus.<sup>*</sup></li>
    </ol>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_adjacency">Adjacency</a></li>
    <li><a href="/R_hyperlanes">Hyperlanes</a></li>
    <li><a href="/R_system_tiles">System Tiles</a></li>
    </ul>
</article>
<?php include "suffix.php"?>