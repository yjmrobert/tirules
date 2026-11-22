<?php include "prefix.php"?>
<header><h1>Agenda Phase</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '8.' counter(item, decimal);} </style>
<p data-src="1">During the agenda phase, players can cast votes on agendas that can change the rules of the game.</p>
    <ol class="lrr">
    <li data-src="1,2,3">Players skip the agenda phase during the early portion of each game. After the custodians token is removed from <a href="/R_mecatol_rex">Mecatol Rex</a>, the agenda phase is added to each game round. To resolve the agenda phase, players perform the following steps:</li>
    <li data-src="1"><b>Step 1 &ndash; First Agenda</b>: Players resolve the first agenda by following these steps in order:</li>
    <ol class="roman">
        <li data-src="1,3"><b>Reveal Agenda</b>: The speaker draws one agenda card from the top of the agenda deck and reads it aloud to all players, including all of its possible outcomes.</li>
        <li data-src="1,2,3"><b>Vote</b>: Each player, starting with the player to the left of the speaker and continuing clockwise, can cast votes for an outcome of the current agenda.</li>
        <li data-src="1,3"><b>Resolve Outcome</b>: Players tally each vote that was cast and resolve the outcome that received the most votes.</li>
    </ol>
    <li data-src="1,3"><b>Step 2 &ndash; Second Agenda</b>: Players repeat the <b>First Agenda</b> step of this phase for a second agenda.</li>
    <li data-src="1,2,3"><b>Step 3 &ndash; Ready Planets</b>: Each player readies each of their exhausted planets. Then, a new game round begins starting with the strategy phase.</li>
    <h2><li>Voting</li></h2>
    <p data-src="1">When voting during the agenda phase, a player can cast votes for a specific outcome of an agenda.</p>
    <li data-src="1,3">To cast votes, a player exhausts any number of their planets and chooses an outcome. The number of votes cast for that outcome is equal to the combined influence values of the planets that the player exhausts.</li>
    <ol><li data-src="1,2">When a player exhausts a planet to cast votes, that player must cast the full amount of votes provided by that planet.</li></ol>
    <li data-src="1,3">A player cannot cast votes for multiple outcomes of the same agenda. Each vote a player casts must be for the same outcome.</li>
    <li data-src="1,3">Some agendas have &ldquo;For&rdquo; and &ldquo;Against&rdquo; outcomes. When a player casts votes on such an agenda, that player must cast their votes either &ldquo;For&rdquo; or &ldquo;Against&rdquo;.</li>
    <li data-src="1">Some agendas instruct players to elect either a player or a planet. When a player casts votes for such an agenda, that player must cast their vote for an eligible player or planet as described on the agenda.</li>
    <li data-src="1">When electing a player, a player can cast votes for themselves.</li>
    <ol><li data-src="1">When resolving these agendas, the &ldquo;elected player&rdquo; is the player for whom the most votes are cast.</li></ol>
    <li data-src="1,2,3">When electing a planet, a player must cast votes for a planet that is controlled by a player.</li>
    <ol>
        <li data-src="1">When resolving these agendas, the &ldquo;elected planet&rdquo; is the planet that had the most votes cast for it.</li>
        <li>(Thunder&rsquo;s Edge) A space station cannot be elected, although its influence can be used to cast votes.<sup>6</sup></li>
    </ol>
    <li data-src="1,3">When casting votes, a player must declare aloud the outcome for which their votes are being cast.</li>
    <li data-src="1,2">Trade goods cannot be spent to cast votes.</li>
    <li data-src="1,2,3">A player may choose to abstain by not casting any votes.</li>
    <li data-src="1,5">Some game effects allow a player to cast additional votes for an outcome. These votes cannot be cast for a different outcome than other votes cast by that player.</li>
    <li data-src="1,5">If a player cannot vote on an agenda because of a game effect, that player cannot cast votes for that agenda by exhausting planets or through any other game effect.</li>
    <h2><li>Outcomes</li></h2>
    <li data-src="1">To resolve an outcome, the speaker follows the instructions on the agenda card.</li>
    <li data-src="1,2,3">If there is a tie for the outcome that received the most votes, or if no outcome receives any votes, the speaker decides which of the tied outcomes to resolve.</li>
    <ol><li data-src="1,2">The speaker&rsquo;s decision is not a vote.</li></ol>
    <li data-src="1,2,3">If an &ldquo;Elect&rdquo; or &ldquo;For&rdquo; outcome of a law was resolved, that card remains in play and permanently affects the game.</li>
    <li data-src="1,2,3">If a directive or an &ldquo;Against&rdquo; outcome of a law was resolved, that card is placed in the agenda discard pile.</li>
    <li data-src="1,2">Some game effects instruct a player to predict an outcome. To predict an outcome, a player declares aloud the outcome they think will receive the most votes. That player must make this prediction after the agenda is revealed but before any votes have been cast.</li>
    <ol>
        <li data-src="1">A predicted outcome must be a possible outcome of the revealed agenda.</li>
        <li data-src="1,2">After resolving the outcome of the agenda, any abilities that were dependent upon predicting the outcome are resolved.</li>
    </ol>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>When a player casts votes during the agenda phase, it is not that player&rsquo;s turn for the purpose of game effects.<sup>2</sup></li>
    <li>A player may cast votes with <a href="/R_space_stations">space stations</a>, <a href="https://twilight-imperium.fandom.com/wiki/Relics#Thunder's_Edge:~:text=The%20Triad"><i>The Triad</i></a>, and the <a href="/F_deepwrought">Deepwrought</a> player&rsquo;s <a href="/F_deepwrought#oceanbound">ocean cards</a>.<sup>6,9</sup></li>
    <li>Players may exhaust planets during the agenda phase for purposes other than casting votes, such as spending resources or using technology specialties. Planets exhausted this way cannot then be used to cast votes.<sup>2</sup></li>
    <li>Casting zero votes for an outcome is the same as abstaining. A player that casts zero votes gains no positive or negative effects of voting for that outcome.<sup>1,2,5</sup></li>
    <li>The speaker decides tied outcomes even if they cannot vote on that agenda, such as when they are the <a href="/F_nekro">Nekro</a> player or have played a rider, as deciding a tie is not a vote.<sup>2</sup></li>
    <li>An agenda&rsquo;s outcome affects every player, regardless of how they voted or whether they abstained, unless the agenda states otherwise, such as the <a href="https://twilight-imperium.fandom.com/wiki/Agenda_Cards#Directives:~:text=Mutiny"><i>Mutiny</i></a> agenda.<sup>2</sup></li>
    <li>During the agenda phase, if the outcome of an agenda affects multiple players, it does so in speaker order, starting with the <a href="/R_speaker">speaker</a> and proceeding clockwise. If an agenda is resolved during the action phase, such as with the <a href="/F_keleres">Keleres</a> player&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/The_Council_Keleres#Thunder's_Edge_2:~:text=Executive%20Order"><i>Executive Order</i></a> technology, it does so in <a href="/R_initiative_order">initiative order</a>.<sup>2,4</sup></li>
    <li>Riders are resolved after the agenda is fully resolved, in speaker order.<sup>1,2</sup></li>
    <li>If a player successfully predicts multiple riders, they resolve one at a time, in the order that player chooses, with each other player having the opportunity to resolve an ability between each.<sup>1</sup></li>
    <li>Each pair of players may resolve one transaction during each agenda.<sup>1,2,3</sup></li>
    <li>Planets are readied at the end of the agenda phase; other exhausted cards, such as technologies and agents, stay exhausted.<sup>2</sup></li>
    <ol><li>The Deepwrought player&rsquo;s <a href="/F_deepwrought#oceanbound">ocean cards</a>, <a href="/R_space_stations">space stations</a> and <a href="https://twilight-imperium.fandom.com/wiki/Relics#Thunder's_Edge:~:text=The%20Triad"><i>The Triad</i></a> are also readied at the end of the agenda phase.<sup>3,6,7</sup></li></ol>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_agenda_card">Agenda Cards</a></li>
    <li><a href="/C_agendas">Agenda Card Notes</a></li>
    <li><a href="/R_custodians_token">Custodians Token</a></li>
    <li><a href="/R_exhausted">Exhausted</a></li>
    <li><a href="/R_game_round">Game Round</a></li>
    <li><a href="/R_influence">Influence</a></li>
    <li><a href="/R_space_stations">Space Stations</a></li>
    <li><a href="/R_speaker">Speaker</a></li>
    <li><a href="/R_transactions">Transactions</a></li>
    </ul>
</article>
<?php include "suffix.php"?>
