<?php include "prefix.php"?>
<header><h1>Nebula</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '59.' counter(item, decimal);} </style>
<p data-src="1">A nebula is an anomaly that affects movement and combat.</p>
    <ol class="lrr">
    <li data-src="1">A ship can only move into a nebula if it is the active system.</li>
    <ol><li data-src="1,3,8">A ship cannot move through a nebula. That is, a ship cannot move into and out of a nebula during the same movement.</li></ol>
    <li data-src="1,2,3,8">A ship that begins the <b><a href="/R_movement">Movement</a></b> step of a tactical action in a nebula treats its move value as &ldquo;1&rdquo; for the duration of that step.</li>
    <ol><li data-src="1,2">Other abilities and effects can increase this number.</li></ol>
    <li data-src="1,3,8">If a space combat occurs in a nebula, the defender applies +1 to each combat roll of their ships during that combat.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>All units moving into, through or out of anomalies must follow the same rules as ships moving into, through or out of anomalies.<sup>4</sup></li>
    <li>A future rule change will allow ships to move into a nebula when it is not the active system.<sup>4</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_active_system">Active System</a></li>
    <li><a href="/R_anomalies">Anomalies</a></li>
    <li><a href="/R_combat">Combat</a></li>
    <li><a href="/R_defender">Defender</a></li>
    <li><a href="/R_move">Move</a></li>
    </ul>
</article>
<?php include "suffix.php"?>