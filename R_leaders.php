<?php include "prefix.php"?>
<header><h1>Leaders</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '51.' counter(item, decimal);} </style>
<p data-src="1,8">Each player has several faction&ndash;specific leader cards that represent characters with unique abilities.</p>
    <ol class="lrr">
    <li data-src="1,8">Each faction has three leaders; one agent, one commander, and one hero.</li>
    <ol><li data-src="1,2">The <a href="/F_nomad">Nomad</a>&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/The_Nomad#Faction_Abilities:~:text=The%20Company"><sc>The Company</sc></a> faction ability grants them two additional agents, for a total of five leaders.</li></ol>
    <li data-src="1,8">A player&rsquo;s leaders are placed on their leader sheet during setup.</li>
    <ol>
        <li data-src="1,8">Each leader card is placed on the slot that matches its type. The leader cards are placed so that the hash mark symbols in the upper right are faceup and match the slot that the card is placed on.</li>
        <li data-src="1">The two additional <a href="/F_nomad">Nomad</a> agents are placed in the <a href="/F_nomad">Nomad</a> player&rsquo;s play area readied side up.</li>
    </ol>
    <h2><li>Agents</li></h2>
    <li data-src="1,8">An agent does not need to be unlocked and begins the game in a readied state. They can be exhausted by resolving their abilities, and they ready during the <b><a href="/R_status_phase">Ready Cards</a></b> step of the status phase.</li>
    <h2><li>Commanders</li></h2>
    <li data-src="1,8">A commander must be unlocked to use its abilities. A player unlocks their commander if they fulfill the conditions listed after the &ldquo;Unlock&rdquo; header.</li>
    <ol>
        <li data-src="1">Each faction&rsquo;s commander has a unique &ldquo;Unlock&rdquo; condition.</li>
        <li data-src="1,8">After a player fulfills the unlock condition of their commander, they flip it over to its unlocked side.</li>
        <li data-src="1,2">A commander&rsquo;s unlock conditions cannot be met while an ability or game effect is being resolved. That is, pending abilities or partially resolved game effects must be completed before checking if conditions are met.</li>
        <li data-src="1">A commander cannot flip to its locked side after it is unlocked, even if its owner no longer meets the unlock conditions.</li>
    </ol>
    <li data-src="1">A commander cannot be exhausted.</li>
    <li data-src="1,8">The <a href="https://twilight-imperium.fandom.com/wiki/Promissory_Notes#Alliance"><i>Alliance</i></a> promissory note allows a player to share their commander&rsquo;s ability with another player.</li>
    <ol><li data-src="1">A commander&rsquo;s owner can still use their commander&rsquo;s ability, even if another player has their <a href="https://twilight-imperium.fandom.com/wiki/Promissory_Notes#Alliance"><i>Alliance</i></a> promissory note.</li></ol>
    <h2><li>Heroes</li></h2>
    <li data-src="1,8">A hero needs to be unlocked to use their abilities. A player unlocks their hero if they fulfill the conditions listed after the &ldquo;Unlock&rdquo; header.</li>
    <ol>
        <li data-src="1">The &ldquo;Unlock&rdquo; condition for each hero is to have three scored objectives; these can be any combination of secret objectives and public objectives.</li>
        <li data-src="1">Victory points do not count toward unlocking heroes.</li>
        <li data-src="1,8">After a player fulfills the unlock condition of their hero, they flip it to its unlocked side.</li>
        <li data-src="1">A hero cannot flip to its locked side after it is unlocked.</li>
    </ol>
    <li data-src="1">A hero cannot be exhausted.</li>
    <li data-src="1">A hero is purged after its abilities are resolved.</li>
    <ol><li data-src="1">The Titans of <a href="/F_ul">Ul</a>&rsquo;s hero is not purged; it is attached to the planet Elysium instead.</li></ol>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>A commander&rsquo;s ability cannot be applied to the instance of the effect that unlocked it.<sup>2</sup></li>
    <li>A commander may be unlocked between two abilities that occur in the same timing window.<sup>2</sup></li>
    <li>Using an agent&rsquo;s ability on behalf of another player is not a transaction, and does not require the players to be neighbors.<sup>2</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_abilities">Abilities</a></li>
    <li><a href="/R_component_action">Component Action</a></li>
    <li><a href="/R_exhausted">Exhausted</a></li>
    <li><a href="/R_leader_sheet">Leader Sheet</a></li>
    <li><a href="/R_neighbors">Neighbors</a></li>
    <li><a href="/R_purge">Purge</a></li>
    <li><a href="/R_readied">Readied</a></li>
    <li><a href="/R_transactions">Transactions</a></li>
    </ul>
</article>
<?php include "suffix.php"?>