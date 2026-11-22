<?php include "prefix.php"?>
<header><h1>Trade <sub>(Strategy Card)</sub></h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '92.' counter(item, decimal);} </style>
<p data-src="1,3">The <i>Trade</i> strategy card allows players to gain trade goods and replenish commodities. This card&rsquo;s initiative value is &ldquo;5&rdquo;.</p>
    <ol class="lrr">
    <li data-src="1">During the action phase, if the active player has the <i>Trade</i> strategy card, they can perform a strategic action to resolve that card&rsquo;s primary ability. To resolve the primary ability on the <i>Trade</i> strategy card, the active player resolves the following effects in order:</li>
    <li data-src="1,3"><b>Step 1</b>: The active player gains 3 trade goods.</li>
    <li data-src="1,3"><b>Step 2</b>: The active player replenishes their commodities by taking the number of commodity tokens necessary to have an amount equal to the commodity value on their faction sheet. Then, they place those tokens in the commodity area of their faction sheet.</li>
    <ol><li data-src="1,3">A player cannot have more commodities than the commodity value printed on their faction sheet.</li></ol>
    <li data-src="1,3"><b>Step 3</b>: The active player chooses any number of other players. Those players use the secondary ability of this card without spending a command token.</li>
    <ol>
        <li data-src="1,2,5">The chosen players <b>must</b> resolve the secondary ability of this card without spending a command token after the active player finishes resolving the primary ability.</li>
        <li data-src="1">The chosen players can only use the secondary ability once, and they cannot use it by spending command tokens.</li>
    </ol>
    <li data-src="1,3">After the active player resolves the primary ability of the <i>Trade</i> strategy card, each other player, beginning with the player to the left of the active player and proceeding clockwise, may spend one command token from their strategy pool to replenish their commodities.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>Say, for example, Alice is the active player, and is performing a strategic action with the <i>Trade</i> strategy card. To her left is Bob, then Cheng, then Diego, then Esther, then Fahd. The full order of steps is:<sup>1,5</sup></li>
    <ol>
        <li>Alice gains three trade goods.<sup>1</sup></li>
        <li>Alice replenishes her commodities.<sup>1</sup></li>
        <li>Alice chooses players for the secondary ability.<sup>1</sup></li>
        <li>If Alice chose Bob, Bob must resolve the secondary ability, replenishing his commodities. Otherwise, Bob may resolve it by spending a command token from his strategy pool.<sup>1</sup></li>
        <li>Cheng, Diego, Esther and Fahd then do the same, in that order.<sup>1</sup></li>
    </ol>
    <li>Choosing players to resolve the secondary ability of <i>Trade</i> without spending a command token is not a transaction. Those players do not need to be neighbors of the active player, and it does not count toward the active player&rsquo;s transaction limit.<sup>2</sup></li>
    <li>A deal made during a given step is non&ndash;binding if any part of it is to resolve during a later step. As such, if Alice makes a deal to choose a player with the primary ability in exchange for commodities from that player after they perform the secondary, then such a deal will be non&ndash;binding.<sup>2,5</sup></li>
    <li>If a player has their maximum number of commodities, and is instructed to replenish their commodities, they will take no commodities. However, they will still trigger any &ldquo;when [this] player replenishes commodities&rdquo; effects, most notably the <a href="https://twilight-imperium.fandom.com/wiki/Promissory_Notes#Trade_Agreement"><i>Trade Agreement</i></a> promissory note.<sup>1,2</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_command_tokens">Command Tokens</a></li>
    <li><a href="/R_commodities">Commodities</a></li>
    <li><a href="/R_initiative_order">Initiative Order</a></li>
    <li><a href="/R_neighbors">Neighbors</a></li>
    <li><a href="/R_strategic_action">Strategic Action</a></li>
    <li><a href="/R_strategy_card">Strategy Card</a></li>
    <li><a href="/R_trade_goods">Trade Goods</a></li>
    <li><a href="/R_transactions">Transactions</a></li>
    </ul>
</article>
<?php include "suffix.php"?>
