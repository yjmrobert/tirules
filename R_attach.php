<?php include "prefix.php"?>
<header><h1>Attach</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '12.' counter(item, decimal);} </style>
<p data-src="1,8">Some game effects instruct a player to attach a card to a planet card. The attached card modifies that planet card in some way.</p>
    <ol class="lrr">
    <li data-src="1,8">To attach a card to a planet card, a player places the card with the attach effect partially underneath the planet card.</li>
    <li data-src="1,8">If a player gains or loses control of planet that contains a card with an attach effect, the attached card stays with that planet.</li>
    <ol>
        <li data-src="1">The attached card maintains its exhausted or readied state.</li>
        <li data-src="1">If a planet card is purged, also purge all cards that are attached to that planet card and remove the corresponding attachment tokens from the game board.</li>
    </ol>
    <li data-src="1,8">When a card is attached to a planet card, place the corresponding attachment token on that planet on the game board.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>A single planet may have multiple attachments.<sup>2</sup></li>
    <li>The custodians token is not an attachment.<sup>*</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_agenda_card">Agenda Card</a></li>
    <li><a href="/R_control">Control</a></li>
    <li><a href="/R_custodians_token">Custodians Token</a></li>
    <li><a href="/R_exploration">Exploration</a></li>
    <li><a href="/R_planets">Planets</a></li>
    </ul>
</article>
<?php include "suffix.php"?>