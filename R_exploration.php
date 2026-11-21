<?php include "prefix.php"?>
<header><h1>Exploration</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '35.' counter(item, decimal);} </style>
<p data-src="1">Planets and some space areas can be explored, yielding varying results determined by the cards drawn from the exploration decks.</p>
    <ol class="lrr">
    <li data-src="1,2,8">When a player takes control of a planet that is not already controlled by another player, they explore that planet.</li>
    <li data-src="1,2,8">When a player explores a planet, they draw and resolve a card from the exploration deck that corresponds to that planet&rsquo;s trait.</li>
    <ol>
        <li data-src="1">There are three planetary exploration decks, each of which corresponds to a planet trait: cultural, hazardous, and industrial.</li>
        <li data-src="1,2,8">Planets that do not have traits, such as <a href="/R_mecatol_rex">Mecatol Rex</a> and planets in home systems, cannot be explored.</li>
        <li data-src="1,2,7">If a planet has multiple traits, the player exploring the planet chooses which of the corresponding exploration decks to draw from.</li>
        <li data-src="1,8">If a player gains control of multiple planets or resolves multiple explore effects at the same time, they choose the order in which they resolve those explorations, completely resolving each exploration card before resolving the next.</li>
    </ol>
    <li data-src="1">Certain abilities may allow a planet to be explored multiple times.</li>
    <li data-src="1,8">Players can explore space areas that contain frontier tokens if they own the <a href="https://twilight-imperium.fandom.com/wiki/Propulsion_Technologies#Dark_Energy_Tap"><i>Dark Energy Tap</i></a> technology or if another game effect allows them to.</li>
    <ol><li data-src="1,6">Frontier tokens are placed in systems during setup and by specific abilities.</li></ol>
    <li data-src="1,8">When a player explores a frontier token, they draw and resolve a card from the frontier exploration deck.</li>
    <li data-src="1,8">After a frontier token is explored, it is discarded and returned to the supply.</li>
    <li data-src="1,2,8">To resolve an exploration card, a player reads the card, makes any necessary decisions, and resolves its ability. If the card was not a relic fragment or an attachment, it is discarded into its respective discard pile.</li>
    <ol><li data-src="1,2">If there are no cards in an exploration deck, its discard pile is shuffled to form a new exploration deck.</li></ol>
    <li data-src="1,8">If a player resolves an exploration card that has an &ldquo;attach&rdquo; header, they attach that card to the planet card of the planet being explored.</li>
    <li data-src="1,2,8">If a player resolves an exploration card that has &ldquo;relic fragment&rdquo; in the title, they place that card faceup in their play area.</li>
    <ol>
        <li data-src="1,8">Players can resolve the ability of relic fragments that are in their play area. Resolving these abilities allows players to draw cards from the relic deck.</li>
        <li data-src="1,2,8">Relic fragments can be exchanged as part of transactions.</li>
    </ol>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>When a player gains control of a planet that is not controlled by another player, they explore it before resolving any &ldquo;after you gain control of a planet&rdquo; abilities, such as the <a href="https://twilight-imperium.fandom.com/wiki/Cybernetic_Technologies#Integrated_Economy"><i>Integrated Economy</i></a> technology.<sup>2</sup></li>
    <li>Before resolving an exploration card, it is revealed to all players.<sup>2</sup></li>
    <li>A player may perform transactions after revealing an exploration card and before resolving it.<sup>2,4</sup></li>
    <li>If a player is to gain multiple planets in a system, they choose the order in which they gain them, and explore each planet as they gain it before gaining the next.<sup>4,8</sup></li>
    <li><a href="https://twilight-imperium.fandom.com/wiki/Exploration#Prophecy_of_Kings_Expansion:~:text=Ion%20Storm"><i>Ion Storm</i></a> is placed into play, not into the frontier discard pile.<sup>6</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_attach">Attach</a></li>
    <li><a href="/R_control">Control</a></li>
    <li><a href="/R_frontier_tokens">Frontier Tokens</a></li>
    <li><a href="/R_invasion">Invasion</a></li>
    <li><a href="/R_planets">Planets</a></li>
    <li><a href="/R_purge">Purge</a></li>
    <li><a href="/R_relics">Relics</a></li>
    <li><a href="/R_transactions">Transactions</a></li>
    </ul>
</article>
<?php include "suffix.php"?>