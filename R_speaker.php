<?php include "prefix.php"?>
<header><h1>Speaker</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '80.' counter(item, decimal);} </style>
<p data-src="1">The speaker is the player who has the speaker token.</p>
    <ol class="lrr">
    <li data-src="1,3">During the strategy phase, the speaker is the first player to choose a strategy card.</li>
    <li data-src="1,2,3">During the agenda phase, the speaker reveals the top agenda card from the agenda deck before each vote. The speaker is always the last player to vote and decides which outcome to resolve if the outcomes are tied.</li>
    <li data-src="1,3">During setup, the speaker prepares the objectives.</li>
    <li data-src="1,2,3">During the status phase, the speaker reveals a public objective.</li>
    <li data-src="1,3">A random player gains the speaker token during setup before the game begins.</li>
    <li data-src="1,2,3">During the action phase, if a player resolves the primary ability on the <a href="/R_politics"><i>Politics</i></a> strategy card, that player chooses any player other than the current speaker to gain the speaker token.</li>
    <li data-src="1">If the speaker is eliminated from the game, the speaker token is passed to the player to the speaker&rsquo;s left.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>During the strategy and agenda phases, the speaker will have the first opportunity to resolve abilities during each timing window.<sup>1,2,5</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_abilities">Abilities</a></li>
    <li><a href="/R_agenda_card">Agenda Card</a></li>
    <li><a href="/R_agenda_phase">Agenda Phase</a></li>
    <li><a href="/R_objective_cards">Objective Cards</a></li>
    <li><a href="/R_politics">Politics</a></li>
    <li><a href="/R_strategy_phase">Strategy Phase</a></li>
    </ul>
</article>
<?php include "suffix.php"?>