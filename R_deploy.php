<?php include "prefix.php"?>
<header><h1>Deploy</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '30.' counter(item, decimal);} </style>
<p data-src="1,2,8">Some units have deploy abilities. Deploy abilities are indicated by the <sc>Deploy</sc> header and provide the means to place specific units on the game board without producing them as normal.</p>
    <ol class="lrr">
    <li data-src="1">A player can use a unit&rsquo;s <sc>Deploy</sc> ability when the ability&rsquo;s conditions are met to place that unit on the game board.</li>
    <ol><li data-src="1">A player does not have to spend resources to deploy a unit unless otherwise specified.</li></ol>
    <li data-src="1,8">A player can only resolve a <sc>Deploy</sc> ability to place a unit that is in their reinforcements.</li>
    <ol><li data-src="1">If there are no units that have a <sc>Deploy</sc> ability in a player&rsquo;s reinforcements, the <sc>Deploy</sc> ability cannot be used.</li></ol>
    <li data-src="1,8">A unit&rsquo;s <sc>Deploy</sc> ability can be resolved only once per timing window.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>Using a <sc>Deploy</sc> ability is always optional, even if the ability&rsquo;s text does not include the word &ldquo;may&rdquo;.<sup>6</sup></li>
    <li>A player may only resolve a deploy ability to place a unit that is in their reinforcements. A player cannot remove a unit from the board to use its deploy ability.<sup>1,8</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_abilities">Abilities</a></li>
    <li><a href="/R_component_limitations">Component Limitations</a></li>
    <li><a href="/R_mechs">Mechs</a></li>
    <li><a href="/R_reinforcements">Reinforcements</a></li>
    </ul>
</article>
<?php include "suffix.php"?>