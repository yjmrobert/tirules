<?php include "prefix.php"?>
<header><h1>Nebula</h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '59.' counter(item, decimal);} </style>
<p data-src="1">A nebula is an anomaly that affects movement and combat.</p>
    <ol class="lrr">
    <li data-src="1"><del>A ship can only move into a nebula if it is the active system.</del></li>
    <ol><li data-src="1,3,8">A ship cannot move through a nebula. That is, a ship cannot move into and out of a nebula during the same movement.</li></ol>
    <li data-src="1,2,3,8">A ship that begins the <b><a href="/R_movement">Movement</a></b> step of a tactical action in a nebula treats its move value as &ldquo;1&rdquo; for the duration of that step.</li>
    <ol><li data-src="1,2">Other abilities and effects can increase this number.</li></ol>
    <li data-src="1,3,8">If a space combat occurs in a nebula, the defender applies +1 to each combat roll of their ships during that combat.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>The movement restrictions of anomalies are intended to apply to all units, not only ships.<sup>4</sup></li>
    <li>Units are intended to be able to move into a nebula even when it is not the active system, but not through it.<sup>4</sup></li>
    <li>Ships can retreat into a nebula, as a nebula is intended to no longer need to be the active system for units to move into it.<sup>4</sup></li>
    <li>Movement bonuses, such as those from the <a href="https://twilight-imperium.fandom.com/wiki/Propulsion_Technologies#Gravity_Drive"><i>Gravity Drive</i></a> technology or the <a href="https://twilight-imperium.fandom.com/wiki/Action_Cards#Twilight_Imperium_Fourth_Edition:~:text=Flank%20Speed"><i>Flank Speed</i></a> action card, are added to the move value of 1.<sup>2</sup></li>
    <li>The defender&rsquo;s +1 applies only to combat rolls during space combat; like other <a href="/R_modifiers">combat roll modifiers</a>, it does not modify anti&ndash;fighter barrage, bombardment or space cannon rolls.<sup>1</sup></li>
    <li>The following effects change how a nebula affects movement:</li>
    <ol>
        <li>The <a href="/F_empyrean">Empyrean</a> player&rsquo;s ships are not affected by nebulae when moving, due to their <a href="https://twilight-imperium.fandom.com/wiki/The_Empyrean#Faction_Abilities:~:text=Voidborn"><sc>Voidborn</sc></a> faction ability.<sup>*</sup></li>
        <li>The owner of the <a href="https://twilight-imperium.fandom.com/wiki/Relics#Codex_IV:~:text=Circlet%20of%20the%20Void"><i>Circlet of the Void</i></a> relic ignores the movement effects of nebulae.<sup>11</sup></li>
        <li>The <a href="https://twilight-imperium.fandom.com/wiki/Action_Cards#Codex_I:~:text=Nav%20Suite"><i>Nav Suite</i></a> action card allows ships to move through a nebula, and ships moving out of a nebula keep their normal move value.<sup>*</sup></li>
        <li>The <a href="/F_saar">Saar</a> player&rsquo;s agent, <a href="https://twilight-imperium.fandom.com/wiki/The_Clan_of_Saar#Leaders:~:text=Captain%20Mendosa">Captain Mendosa</a>, is treated as a bonus and overrides the nebula&rsquo;s move value of 1.<sup>4</sup></li>
        <li>If a <a href="/F_vuilraith">Vuil&rsquo;raith</a> Dimensional Tear is in a nebula, its +1 is applied after the nebula sets each ship&rsquo;s move value to 1.<sup>*</sup></li>
    </ol>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_active_system">Active System</a></li>
    <li><a href="/R_anomalies">Anomalies</a></li>
    <li><a href="/R_combat">Combat</a></li>
    <li><a href="/R_defender">Defender</a></li>
    <li><a href="/R_move">Move</a></li>
    </ul>
</article>
<?php include "suffix.php"?>