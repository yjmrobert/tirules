<?php include __DIR__ . "/../prefix.php"?>
<header><h1>Abilities: Proof</h1></header>
<article>
<p>The source text behind each note on <a href="/R_abilities">Abilities</a>. <b>Explicit</b> sources state the note directly. <b>Implicit</b> sources support it without stating it.</p>

<h2>Notes</h2>
    <ol class="note">
    <li>An ability may be triggered during the timing window it was gained, if applicable. For example, if a player receives the <a href="/F_creuss">Creuss</a> player&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/The_Ghosts_of_Creuss#Faction_Promissory_Note:~:text=Creuss%20Iff"><i>Creuss Iff</i></a> promissory note at the start of their turn, they may use it immediately.<sup>1,2,5</sup>
        <ul>
        <li><b>Explicit</b>: <sup>1</sup> LRR FAQ: &ldquo;Can a card (such as a promissory note) with a specified timing of a certain window that is acquired from a transaction during that window be played immediately? A: Yes.&rdquo;</li>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;Can I receive Creuss IFF in a transaction at the start of my turn and play it in that same window?&rdquo;: &ldquo;Yes &mdash; it is still the start of your turn until you actually take an action.&rdquo;</li>
        <li><b>Explicit</b>: <sup>5</sup> Designer ruling: &ldquo;You can trade a promissory note and have it be immediately used during the start of turn window. That is allowed.&rdquo;</li>
        </ul></li>
    <ol>
        <li>Note that some triggers check their conditions when they trigger, while some check their conditions when they would resolve.</li>
        <ol>
            <li>The <a href="/F_ul">Ul</a> player&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/The_Titans_of_Ul#Faction_Abilities:~:text=Awaken"><sc>Awaken</sc></a> ability is an example of an ability that checks its condition when it triggers; activating a system without a sleeper token will not trigger <a href="https://twilight-imperium.fandom.com/wiki/The_Titans_of_Ul#Faction_Abilities:~:text=Awaken"><sc>Awaken</sc></a>, even if a sleeper token is later added during the activation step of that tactical action.<sup>2</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;When can the Titans use Awaken &hellip;?&rdquo;: &ldquo;Right after activating a system that already held your sleeper token; a sleeper placed later in that activation, say by Scanlink exploration, can&rsquo;t be awakened then.&rdquo;</li>
        </ul></li>
            <li>The <a href="https://twilight-imperium.fandom.com/wiki/Warfare_Technologies#Assault_Cannon"><i>Assault Cannon</i></a> technology is an example of an ability that checks its condition when it would resolve; a player without three or more non&ndash;fighter ships in the system cannot use <a href="https://twilight-imperium.fandom.com/wiki/Warfare_Technologies#Assault_Cannon"><i>Assault Cannon</i></a>, even if they previously had more ships.<sup>2,5</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;If both players have start-of-combat abilities like Assault Cannon &hellip;?&rdquo;: &ldquo;with each trigger re-checked when its turn comes. So the attacker&rsquo;s Assault Cannon can push the defender below 3 non-fighter ships and deny the defender&rsquo;s own Assault Cannon.&rdquo;</li>
        <li><b>Implicit</b>: <sup>5</sup> Designer ruling (livestrongbelwas, Feb 08, 2018): &ldquo;The second player doesn&rsquo;t get to use his Assault Cannons&rdquo; Condition is checked when the ability would resolve.</li>
        </ul></li>
        </ol>
    </ol>
    <!-- <li>Once an ability has been resolved, it cannot be undone or withdrawn, even if another player then resolves an ability in response. The player may instead respond by resolving another ability when they next have the opportunity during that timing window.<sup>2</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;Once I resolve an ability in a timing window, can I take it back after my opponent responds?&rdquo;: &ldquo;No &mdash; anything already resolved stays resolved &hellip; you can answer it with another ability on your next turn in that window.&rdquo;</li>
        </ul></li> -->
    <li>All abilities that occur &ldquo;when&rdquo; an event occurs all trigger before any abilities that occur &ldquo;after&rdquo; the same event occurs.<sup>1</sup>
        <ul>
        <li><b>Explicit</b>: <sup>1</sup> LRR 1.16: &ldquo;Effects that occur &lsquo;when&rsquo; an event happens take priority over effects that occur &lsquo;after&rsquo; an event happens.&rdquo;</li>
        </ul></li>
    <li>All abilities that occur &ldquo;after&rdquo; an event occurs all trigger before any abilities that occur &ldquo;before&rdquo; the next event occurs.<sup>4</sup>
        <ul>
        <li><b>Explicit</b>: <sup>4</sup> Designer ruling, &ldquo;is &ldquo;after x&rdquo; distinct from &ldquo;before y&rdquo;&rdquo;: &ldquo;They are distinct. &ldquo;After x&rdquo; happens before &ldquo;before y&rdquo;&rdquo;</li>
        </ul></li>
    <li>Each paragraph on a card is a separate ability, and is resolved independently of the others. For example, a promissory note&rsquo;s final paragraph instructing the player to return the card is still resolved, even if an earlier paragraph had no effect.<sup>2</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;Is each paragraph on a card a separate ability &hellip;?&rdquo;: &ldquo;Yes &mdash; each paragraph is its own ability and resolves on its own. So a note&rsquo;s final return line still happens even if an earlier paragraph had no effect.&rdquo;</li>
        </ul></li>
    <!-- <li>&ldquo;At the start of your turn&rdquo; abilities are resolved before the player chooses their action or passes, and so before a system is activated. Such abilities can only be resolved during the action phase, as players do not take turns during other phases.<sup>2</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;When do &lsquo;at the start of your turn&rsquo; abilities happen, and do they work in other phases?&rdquo;: &ldquo;Before you choose your action or pass, so they come before activating a system &hellip; They only exist in the action phase.&rdquo;</li>
        </ul></li> -->
    <li>An ability that refers to &ldquo;a player&rdquo; may be used on the player resolving it. Only an ability that refers to &ldquo;another player&rdquo; excludes that player.<sup>2</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;Do &lsquo;during the action phase&rsquo; agent abilities use my action, and does &lsquo;a player&rsquo; include me?&rdquo;: &ldquo;&rsquo;A player&rsquo; includes you; only &lsquo;another player&rsquo; excludes you.&rdquo;</li>
        </ul></li>
    <li>An ability from a single physical object cannot be resolved more than once in one timing window. For example, if a player starts their turn with the <a href="/F_creuss">Creuss</a> player&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/The_Ghosts_of_Creuss#Faction_Promissory_Note:~:text=Creuss%20Iff"><i>Creuss Iff</i></a> promissory note in their hand (having received it on a previous turn) and uses it, they will not be able to use it a second time this turn, if they receive it again as part of a transaction.<sup>1,5</sup>
        <ul>
        <li><b>Implicit</b>: <sup>1</sup> LRR 1.18: &ldquo;Each ability can be resolved once for each occurrence of that ability&rsquo;s timing event.&rdquo;</li>
        <li><b>Explicit</b>: <sup>5</sup> Designer ruling: &ldquo;because of rule 1.16, that PN cannot be traded and resolved multiple times during the same window.&rdquo;</li>
        </ul></li>
    <ol><li>Each unit on the board is its own separate physical object. For example, two or more of the <a href="/F_norr">N&rsquo;orr</a> player&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/Sardakk_N&#x27;orr#:~:text=Exotrireme"><i>Exotrireme II</i></a> in a system may use their ability to destroy themselves and other ships, as the ability is linked to the units on the game board, and not the unit upgrade technology card.<sup>2</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;When exactly can Exotrireme II use its ability?&rdquo;: &ldquo;Each Exotrireme II has its own copy, resolved one at a time.&rdquo;</li>
        </ul></li></ol>
    <li>An ability that has not finished resolving cannot be triggered again within a timing window that it creates.<sup>7</sup>
        <ul>
        <li><b>Explicit</b>: <sup>7</sup> Thunder&rsquo;s Edge Rulebook p. 16, Clarifications, Abilities (General): &ldquo;An ability that is unresolved cannot be triggered again within a timing window that is generated by itself.&rdquo;</li>
        </ul></li>
    <li>During the action phase, abilities are resolved in the current relative turn order, starting with the active player. For example, if it is currently the <a href="/R_trade"><i>Trade</i></a> (5) player&rsquo;s turn, they will have the option to resolve first, then the <a href="/R_warfare"><i>Warfare</i></a> (6) player, then the <a href="/R_technology_sc"><i>Technology</i></a> (7) player, and so on.<sup>1,2,5</sup>
        <ul>
        <li><b>Explicit</b>: <sup>1</sup> LRR 1.19: &ldquo;If there are multiple abilities that players wish to resolve at the same time during the action phase, each player takes a turn resolving an ability in initiative order, beginning with the active player.&rdquo;</li>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;When several players want to resolve abilities at the same time, who goes first?&rdquo;: &ldquo;In the action phase, the active player goes first, then the other players in initiative order counting on from the active player&rsquo;s number and wrapping around.&rdquo;</li>
        <li><b>Explicit</b>: <sup>5</sup> Designer ruling (kaiteinomen, Sep 20, 2017): &ldquo;The order would be 5, 6, 7, 1, 2, 3, as you suggested.&rdquo;</li>
        </ul></li>
    <ol>
        <li>If a player has multiple abilities they wish to resolve, they must be resolved one at a time. Between each ability being resolved, each other player will have the opportunity to resolve one ability.<sup>1,2,5</sup>
        <ul>
        <li><b>Explicit</b>: <sup>1</sup> LRR 1.19: &ldquo;each player takes a turn resolving an ability &hellip; This process continues until each player has resolved each ability that they wish to resolve.&rdquo;</li>
        <li><b>Explicit</b>: <sup>5</sup> Designer ruling: &ldquo;You keep going around the circle/sequence until everybody passes simultaneously. &hellip; Dane: Regarding your question, option 2 is the intended method of resolution.&rdquo;</li>
        <li><b>Implicit</b>: <sup>2</sup> RulesPal, &ldquo;If both players have the same &lsquo;after a round of space combat&rsquo; ability, such as two Exotrireme II dreadnoughts, who resolves first?&rdquo;: &ldquo;alternating one ability at a time until nobody wants to resolve more&rdquo;</li>
        </ul></li>
        <li>For example, Alice, the active player, wishes to resolve four abilities during the current timing window. Bob, the next player in order, wishes to resolve one. Cheng, later in the order, wishes to resolve two. The order of resolution would be: Alice &num;1; Bob &num;1; Cheng &num;1; Alice &num;2; Cheng &num;2; Alice &num;3; Alice &num;4.<sup>1</sup>
        <ul>
        <li><b>Implicit</b>: <sup>1</sup> LRR 1.19: players take turns, one ability at a time.</li>
        </ul></li>
        <li>Once every player has consecutively declined to resolve an ability during a timing window, no more abilities may be resolved during that window.<sup>2,5</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;If I pass on playing an action card or ability in a timing window, can I still play one later in that window?&rdquo;: &ldquo;Yes &mdash; passing is not final. Players keep taking turns in the window, and if anyone plays something after you passed, you get another chance. The window only closes once every player passes in a row.&rdquo;</li>
        <li><b>Explicit</b>: <sup>5</sup> Designer ruling: &ldquo;You keep going around the circle/sequence until everybody passes simultaneously. &hellip; Dane: Regarding your question, option 2 is the intended method of resolution.&rdquo;</li>
        </ul></li>
        <li>A player may decline to resolve an ability during a timing window, but later choose to resolve an ability during that same timing window, but only if another player chooses to resolve an ability after the player declined.<sup>2,5</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;If I pass on playing an action card or ability in a timing window, can I still play one later in that window?&rdquo;: &ldquo;Yes &mdash; passing is not final. Players keep taking turns in the window, and if anyone plays something after you passed, you get another chance. The window only closes once every player passes in a row.&rdquo;</li>
        <li><b>Explicit</b>: <sup>5</sup> The same designer ruling rejects the alternative, &ldquo;If a player chooses not to activate an ability, then they won&rsquo;t be activating any more abilities in that timing window,&rdquo; in favor of continuing &ldquo;until everybody passes.&rdquo;</li>
        </ul></li>
        <!-- <li>Following on from the above example, had Alice declined to resolve &ldquo;Alice &num;2&rdquo;, she could still resolve &ldquo;Alice &num;3&rdquo;, as Cheng resolved &ldquo;Cheng &num;2&rdquo;, breaking the series of consecutive declinations. However, if Alice had instead declined to resolve &ldquo;Alice &num;3&rdquo;, she would be unable to resolve &ldquo;Alice &num;4&rdquo;, as then each player would have consecutively declined to resolve an ability.<sup>2</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;If I pass on playing an action card or ability in a timing window, can I still play one later in that window?&rdquo;: &ldquo;Yes &mdash; passing is not final. Players keep taking turns in the window, and if anyone plays something after you passed, you get another chance. The window only closes once every player passes in a row.&rdquo;</li>
        </ul></li> -->
    </ol>
    <li>If there are multiple abilities that players wish to resolve at the same time during the <a href="/R_status_phase">status phase</a>, such as two players each using the <a href="/F_creuss">Creuss</a> player&rsquo;s <a href="https://twilight-imperium.fandom.com/wiki/The_Ghosts_of_Creuss#Faction_Technologies:~:text=Wormhole%20Generator"><i>Wormhole Generator</i></a> faction technology, they are resolved in initiative order.<sup>2</sup>
        <ul>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;If two players have abilities at the same point of the status phase, such as both using Wormhole Generator, who goes first?&rdquo;: &ldquo;Initiative order: the player with the lower initiative number resolves first.&rdquo;</li>
        </ul></li>
    <li>The secondary abilities of strategy cards are resolved in clockwise order, after the primary ability.<sup>1,2</sup>
        <ul>
        <li><b>Explicit</b>: <sup>1</sup> LRR 82.1: &ldquo;After the active player resolves the primary ability on their strategy card, each other player, beginning with the player to the left of the active player and proceeding clockwise, may resolve that card&rsquo;s secondary ability.&rdquo;</li>
        <li><b>Explicit</b>: <sup>2</sup> RulesPal, &ldquo;When a strategy card is played, do other players resolve the secondary right away &hellip;?&rdquo;: &ldquo;Right away, clockwise from the active player.&rdquo;</li>
        </ul></li>
    <li>A player may resolve &ldquo;at the start of your turn&rdquo; and &ldquo;at the end of your turn&rdquo; abilities on the turn that they pass.<sup>1,4</sup>
        <ul>
        <li><b>Explicit</b>: <sup>1</sup> LRR 3.3a: &ldquo;During a turn that a player passes, they can resolve transactions and &lsquo;at the start of your turn&rsquo; abilities.&rdquo;</li>
        <li><b>Explicit</b>: <sup>4</sup> Designer ruling: &ldquo;Can you resolve end of turn abilities on the turn you pass? A: Yes.&rdquo;</li>
        </ul></li>
    <li>Whenever a game effect uses or grants a unit ability, treat it as if a unit were using or having that unit ability.<sup>6,9</sup>
        <ul>
        <li><b>Explicit</b>: <sup>6</sup> Community consensus: &ldquo;Metali Void Armaments: Can abilities such as the Argent commander or Jol-Nar commander affect the ANTI-FIGHTER BARRAGE roll &hellip;? A: Yes, whenever unit abilities are used, the game treats it as if a unit were using that ability.&rdquo;</li>
        <li><b>Explicit</b>: <sup>9</sup> Designer Q&amp;A, &ldquo;Unit Abilities imply Units?&rdquo;: &ldquo;Yes I&rsquo;d say let them combo and be shut down.&rdquo;</li>
        </ul></li>
    <ol><li>This means abilities that reference unit abilities, such as the <a href="/F_argent">Argent</a> player&rsquo;s commander, <a href="https://twilight-imperium.fandom.com/wiki/The_Argent_Flight#Leaders:~:text=Trrakan%20Aun%20Zulok">Trrakan Aun Zulok</a>, combo with these effects. Similarly, effects that shut down unit abilities, such as the <a href="/F_rebellion">Rebellion</a> player&rsquo;s flagship, the <a href="https://twilight-imperium.fandom.com/wiki/The_Crimson_Rebellion#Flagship:~:text=Quietus"><i>Quietus</i></a>, will affect these abilities as well.<sup>9</sup>
        <ul>
        <li><b>Explicit</b>: <sup>9</sup> Designer Q&amp;A, &ldquo;Unit Abilities imply Units?&rdquo;: &ldquo;Should these things be treated as if they were units &hellip; and thus combo with things like Argent commander, and be shut down by things like Crimson flagship? A: Yes I&rsquo;d say let them combo and be shut down.&rdquo;</li>
        </ul></li></ol>
    </ol>
</article>
<?php include __DIR__ . "/../suffix.php"?>
