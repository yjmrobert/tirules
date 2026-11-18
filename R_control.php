<?php include "prefix.php"?>
<header><h1>Control</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '25.' counter(item, decimal);} </style>
<p data-src="1,2">Each player begins the game with control of each planet in their home system. During the game, players can gain control of additional planets.</p>
    <ol class="lrr">
    <li data-src="1,2,3">When a player gains control of a planet, they take the planet card that corresponds to that planet and place it in their play area; that card is exhausted.</li>
    <ol>
        <li data-src="1">If a player is the first player to control a planet, they take the planet card from the planet card deck.</li>
        <li data-src="1">If another player controls the planet, they take that planet&rsquo;s card from the other player&rsquo;s play area.</li>
        <li data-src="1,8">When a player gains control of a planet that is not already controlled by another player, they explore that planet.</li>
    </ol>
    <li data-src="1">A player cannot gain control of a planet that they already control.</li>
    <li data-src="1,2">While a player controls a planet, that planet&rsquo;s card remains in their play area until they lose control of that planet.</li>
    <li data-src="1,2">A player can control a planet that they do not have any units on; that player places a control token on that planet to mark that they control it.</li>
    <li data-src="1,2">A player loses control of a planet if they no longer have units on it and another player has units on it.</li>
    <ol>
        <li data-src="1">The player that placed units on the planet gains control of that planet.</li>
        <li data-src="1,5,6">During the <b><a href="/R_invasion">Invasion</a></b> step of a tactical action, control is determined during the <b><a href="/R_invasion">Establish Control</a></b> step instead.</li>
        <li>(Thunder&rsquo;s Edge) The player whose units trigger <a href="/R_coexistence">coexistence</a> on a planet does not gain or retain control of it; if they already controlled it, the player they now coexist with gains control of it, exhausted. If a player&rsquo;s coexisting units become the only units on a planet, that player gains control of it.<sup>7</sup></li>
    </ol>
    <li data-src="1,2">A player can lose control of a planet through some game effects.</li>
    <li data-src="1">If a player loses control of a planet that contains their control token, they remove their control token from the planet.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>Control tokens are not component limited.<sup>1</sup></li>
    <li>Different players may control different planets in the same system.<sup>2</sup></li>
    <li>If a player is given another player&rsquo;s planet card, such as with the <a href="/F_hacan">Hacan</a> player&rsquo;s mech, <a href="https://twilight-imperium.fandom.com/wiki/The_Emirates_of_Hacan#Mech:~:text=Pride%20of%20Kenara">Pride of Kenara</a>, they gain control of that planet.<sup>2</sup></li>
    <li>Each player controls every planet in their home system from the start of the game, even if that planet contains none of their units. As this control is not gained, it does not trigger abilities that resolve when a player gains control of a planet, such as the <a href="/F_saar">Saar</a> player&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/The_Clan_of_Saar#Faction_Abilities:~:text=Scavenge"><sc>Scavenge</sc></a> faction ability.<sup>2</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_attach">Attach</a></li>
    <li><a href="/R_exhausted">Exhausted</a></li>
    <li><a href="/R_invasion">Invasion</a></li>
    <li><a href="/R_planets">Planets</a></li>
    </ul>
</article>
<?php include "suffix.php"?>