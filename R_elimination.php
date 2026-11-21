<?php include "prefix.php"?>
<header><h1>Elimination</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '33.' counter(item, decimal);} </style>
<p data-src="1">A player who is eliminated is no longer part of the game.</p>
    <ol class="lrr">
    <li data-src="1,2">A player is eliminated when they meet <b>all</b> of the following three conditions:</li>
    <ol>
        <li data-src="1,2">The player has no ground forces on the game board.</li>
        <li data-src="1,2">The player has no unit that has <a href="/R_production"><sc>Production</sc></a>.</li>
        <li data-src="1,2">The player does not control any planets.</li>
    </ol>
    <li data-src="1">When a player becomes eliminated, all of the units, command tokens, control tokens, promissory notes, technologies, command sheets, and the faction sheet that matches that player&rsquo;s faction or color are returned to the game box, including those in their reinforcements.</li>
    <li data-src="1,2">When a player becomes eliminated, all agenda cards they own are discarded.</li>
    <li data-src="1">When a player becomes eliminated, each promissory note they have that matches another player&rsquo;s faction or color is returned to that player.</li>
    <ol><li data-src="1">Promissory notes that match the eliminated player are returned to the game box, even if another player has them.</li></ol>
    <li data-src="1">When a player becomes eliminated, each action card in their hand is discarded.</li>
    <li data-src="1">When a player becomes eliminated, their strategy cards are returned to the common play area whether those cards have been exhausted or not.</li>
    <li data-src="1">When a player becomes eliminated, their secret objectives are shuffled back into the secret objective deck whether those secret objectives have been completed or not.</li>
    <li data-src="1">If the speaker becomes eliminated, the speaker token passes to the player to the speaker&rsquo;s left.</li>
    <li data-src="1,2">If a game that started with five or more players becomes a game with four or fewer players due to elimination, the players continue to select only one strategy card during the strategy phase.</li>
    <li data-src="1">When players are eliminated, faction&ndash;specific components interact with the game as follows:</li>
    <ol>
        <li data-src="1,2,5">If a player becomes eliminated and the <a href="/F_nekro">Nekro</a> Virus&rsquo; assimilator &ldquo;X&rdquo; or assimilator &ldquo;Y&rdquo; token is placed on one of their faction technologies, that technology remains in play.</li>
        <li data-src="1,2">If the Ghost of <a href="/F_creuss">Creuss</a> player becomes eliminated, their wormhole tokens remain on the game board for the remainder of the game.</li>
        <li data-src="1">If the <a href="/F_naalu">Naalu</a> player becomes eliminated while another player has the <a href="/F_naalu">Naalu</a> player&rsquo;s &ldquo;0&rdquo; token, that token remains with its current player until the end of the status phase, and then it is removed from play.</li>
        <li data-src="1">If the Titans of <a href="/F_ul">Ul</a> player becomes eliminated while their hero or promissory note is attached to a planet, those attachments and attachment tokens remain in play for the remainder of the game.</li>
        <li data-src="1">If the <a href="/F_mahact">Mahact</a> Gene&ndash;Sorcerers become eliminated while they have another player&rsquo;s command tokens on their faction sheet, those command tokens are returned to their respective players&rsquo; reinforcements.</li>
        <li data-src="1">If the <a href="/F_mahact">Mahact</a> Gene&ndash;Sorcerers have an eliminated player&rsquo;s command token on their faction sheet, that command token remains in play, as does the eliminated player&rsquo;s commander, if it is unlocked.</li>
    </ol>
    <li data-src="1">If a player becomes eliminated, any units they have captured are returned to the reinforcements of their original owners.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>A <a href="/R_space_stations">space station</a> is not a planet; controlling one does not prevent a player from being eliminated.<sup>2</sup></li>
    <li>An eliminated player&rsquo;s home system remains a home system for game effects.<sup>6</sup></li>
        <ol><li>This includes effects that specify &ldquo;another player&rsquo;s home system&rdquo;.<sup>*</sup></li></ol>
    <li>If an eliminated player had any relic fragments, they are discarded. If an eliminated player had any relics, they are purged.<sup>4</sup></li>
    <li>If a player is eliminated, any of their units that are captured remain with the player that captured them. When the capturing player would return them, the units are instead returned to the game box.<sup>4</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_agenda_card">Agenda Card</a></li>
    <li><a href="/R_control">Control</a></li>
    <li><a href="/R_ground_forces">Ground Forces</a></li>
    <li><a href="/R_production">Production</a></li>
    <li><a href="/R_promissory_notes">Promissory Notes</a></li>
    <li><a href="/R_relics">Relics</a></li>
    </ul>
</article>
<?php include "suffix.php"?>