<?php require __DIR__ . '/redirect_php_urls.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Twilight Imperium Rule Help</title>
<meta name="description" content="Rules reference for Twilight Imperium Fourth Edition: the Living Rules Reference with notes and rulings for Prophecy of Kings, the Codices and Thunder&rsquo;s Edge, each with its source."/>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type"/>
<meta content="utf-8" http-equiv="encoding"/>
<meta name="author" content="BradleyΣ"/>
<meta name="version" content="v0.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="canonical" href="https://tirules2.com/"/>
<link rel="icon" href="favicon.png"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php include __DIR__ . '/theme.php'; ?>
<style>
.note
{
    counter-reset: nitem;
}
.lrr > li:before
{
    content: counter(item, decimal) '.';
}
</style>
</head>
<body>
<header><h1>Twilight Imperium Rules</h1><?php echo $theme_toggle_button; ?></header>
<article>
<p><strong>This is a work in progress.</strong></p>
<p>This website contains the rules for Fantasy Flight&rsquo;s fourth edition of <i>Twilight Imperium</i>.</p>
<p>Also available are various notes on those rules, based on rules found in other sections, rulings from Dane Beltrami and/or Fantasy Flight, or community consensus.</p>
<p>All information on this website is based off of v2.0 of the Living Rules Reference, released November 2020. 
    This includes the <i>Prophecy of Kings</i> expansion. 
    Notes are included for the Codices, up to and including Codex IV, released June 2025, and notes are also included for the <i>Thunder&rsquo;s Edge</i> expansion, released October 2025. Fantasy Flight has not yet published a Living Rules Reference that includes <i>Thunder&rsquo;s Edge</i> (last checked November 2026).</p>
<p>Key: each note ends with the number of its source, listed at the foot of every page; <sup>*</sup> marks a note with no source. <span class="removed">Red</span> marks a component removed from the game, or replaced by a newer version marked &Omega; (&Omega;(&Omega;) means the &Omega; and &Omega;&Omega; versions are the same). Rule topics marked TE come from <i>Thunder&rsquo;s Edge</i> and have no Living Rules Reference section yet.</p>
<p>For more on <i>Twilight Imperium</i>, please see its <a href="https://www.fantasyflightgames.com/en/products/twilight-imperium-fourth-edition/">page on the Fantasy Flight website.</a></p>
<p style="font-family:lazax;">&ldquo;For as often as I reference (tirules.com), it's probably better than official&rdquo; - Dane Beltrami, TI4 Lead Designer.</p>
<h2 class="section">Rule Topics</h2>
<style>
li.te:before
{
    content: 'TE';
    counter-increment: item 0;
}
</style>
    <ol class="lrr">
    <li><a href="/R_abilities">Abilities</a></li>
    <li><a href="/R_action_cards">Action Cards</a></li>
    <li><a href="/R_action_phase">Action Phase</a></li>
    <li><a href="/R_active_player">Active Player</a></li>
    <li><a href="/R_active_system">Active System</a></li>
    <li><a href="/R_adjacency">Adjacency</a></li>
    <li><a href="/R_agenda_card">Agenda Card</a></li>
    <li><a href="/R_agenda_phase">Agenda Phase</a></li>
    <li><a href="/R_anomalies">Anomalies</a></li>
    <li><a href="/R_anti_fighter_barrage">Anti&ndash;Fighter Barrage</a></li>
    <li><a href="/R_asteroid_field">Asteroid Field</a></li>
    <li><a href="/R_attach">Attach</a></li>
    <li><a href="/R_attacker">Attacker</a></li>
    <li><a href="/R_blockaded">Blockaded</a></li>
    <li><a href="/R_bombardment">Bombardment</a></li>
    <li class="te"><a href="/R_breakthroughs">Breakthroughs</a></li>
    <li><a href="/R_capacity">Capacity</a></li>
    <li><a href="/R_capture">Capture</a></li>
    <li class="te"><a href="/R_coexistence">Coexistence</a></li>
    <li><a href="/R_combat">Combat</a></li>
    <li><a href="/R_command_sheet">Command Sheet</a></li>
    <li><a href="/R_command_tokens">Command Tokens</a></li>
    <li><a href="/R_commodities">Commodities</a></li>
    <li><a href="/R_component_action">Component Action</a></li>
    <li><a href="/R_component_limitations">Component Limitations</a></li>
    <li><a href="/R_construction">Construction</a></li>
    <li><a href="/R_control">Control</a></li>
    <li><a href="/R_cost">Cost</a></li>
    <li><a href="/R_custodians_token">Custodians Token</a></li>
    <li><a href="/R_deals">Deals</a></li>
    <li><a href="/R_defender">Defender</a></li>
    <li><a href="/R_deploy">Deploy</a></li>
    <li><a href="/R_destroyed">Destroyed</a></li>
    <li><a href="/R_diplomacy">Diplomacy</a></li>
    <li><a href="/R_elimination">Elimination</a></li>
    <li class="te"><a href="/R_entropic_scars">Entropic Scars</a></li>
    <li><a href="/R_exhausted">Exhausted</a></li>
    <li class="te"><a href="/R_expedition">Expedition</a></li>
    <li><a href="/R_exploration">Exploration</a></li>
    <li><a href="/R_fighter_tokens">Fighter Tokens</a></li>
    <li><a href="/R_fleet_pool">Fleet Pool</a></li>
    <li class="te"><a href="/R_fracture">The Fracture</a></li>
    <li><a href="/R_frontier_tokens">Frontier Tokens</a></li>
    <li><a href="/R_game_board">Game Board</a></li>
    <li><a href="/R_game_round">Game Round</a></li>
    <li><a href="/R_gravity_rift">Gravity Rift</a></li>
    <li><a href="/R_ground_combat">Ground Combat</a></li>
    <li><a href="/R_ground_forces">Ground Forces</a></li>
    <li><a href="/R_hyperlanes">Hyperlanes</a></li>
    <li><a href="/R_imperial">Imperial</a></li>
    <li><a href="/R_infantry_tokens">Infantry Tokens</a></li>
    <li><a href="/R_influence">Influence</a></li>
    <li><a href="/R_initiative_order">Initiative Order</a></li>
    <li><a href="/R_invasion">Invasion</a></li>
    <li><a href="/R_leader_sheet">Leader Sheet</a></li>
    <li><a href="/R_leaders">Leaders</a></li>
    <li><a href="/R_leadership">Leadership</a></li>
    <li><a href="/R_legendary_planets">Legendary Planets</a></li>
    <li><a href="/R_mecatol_rex">Mecatol Rex</a></li>
    <li><a href="/R_mechs">Mechs</a></li>
    <li><a href="/R_modifiers">Modifiers</a></li>
    <li><a href="/R_move">Move</a></li>
    <li><a href="/R_movement">Movement</a></li>
    <li><a href="/R_nebula">Nebula</a></li>
    <li><a href="/R_neighbors">Neighbors</a></li>
    <li class="te"><a href="/R_neutral_units">Neutral Units</a></li>
    <li><a href="/R_objective_cards">Objective Cards</a></li>
    <li><a href="/R_opponent">Opponent</a></li>
    <li><a href="/R_pds">PDS</a></li>
    <li><a href="/R_planets">Planets</a></li>
    <li><a href="/R_planetary_shield">Planetary Shield</a></li>
    <li><a href="/R_politics">Politics</a></li>
    <li><a href="/R_producing_units">Producing Units</a></li>
    <li><a href="/R_production">Production</a></li>
    <li><a href="/R_promissory_notes">Promissory Notes</a></li>
    <li><a href="/R_purge">Purge</a></li>
    <li><a href="/R_readied">Readied</a></li>
    <li><a href="/R_reinforcements">Reinforcements</a></li>
    <li><a href="/R_relics">Relics</a></li>
    <li><a href="/R_rerolls">Rerolls</a></li>
    <li><a href="/R_resources">Resources</a></li>
    <li><a href="/R_ships">Ships</a></li>
    <li><a href="/R_space_cannon">Space Cannon</a></li>
    <li><a href="/R_space_combat">Space Combat</a></li>
    <li><a href="/R_space_dock">Space Dock</a></li>
    <li class="te"><a href="/R_space_stations">Space Stations</a></li>
    <li><a href="/R_speaker">Speaker</a></li>
    <li><a href="/R_status_phase">Status Phase</a></li>
    <li><a href="/R_strategic_action">Strategic Action</a></li>
    <li><a href="/R_strategy_card">Strategy Card</a></li>
    <li><a href="/R_strategy_phase">Strategy Phase</a></li>
    <li><a href="/R_structures">Structures</a></li>
    <li><a href="/R_supernova">Supernova</a></li>
    <li><a href="/R_sustain_damage">Sustain Damage</a></li>
    <li class="te"><a href="/R_synergy">Synergy</a></li>
    <li><a href="/R_system_tiles">System Tiles</a></li>
    <li><a href="/R_tactical_action">Tactical Action</a></li>
    <li><a href="/R_technology">Technology</a></li>
    <li><a href="/R_technology_sc">Technology <sub style="font-size: 66.67%; vertical-align: baseline;">(<abbr title="Strategy Card">S.C.</abbr>)</sub></a></li>
    <li><a href="/R_trade">Trade</a></li>
    <li><a href="/R_trade_goods">Trade Goods</a></li>
    <li><a href="/R_transactions">Transactions</a></li>
    <li><a href="/R_transport">Transport</a></li>
    <li><a href="/R_units">Units</a></li>
    <li><a href="/R_unit_upgrades">Unit Upgrades</a></li>
    <li><a href="/R_victory_points">Victory Points</a></li>
    <li><a href="/R_warfare">Warfare</a></li>
    <li><a href="/R_wormhole_nexus">Wormhole Nexus</a></li>
    <li><a href="/R_wormholes">Wormholes</a></li>
    </ol>
<h2 class="section">Faction Notes</h2>
    <ol class="note">
        <li><a href="/F_arborec">The Arborec</a></li>
        <li><a href="/F_argent">The Argent Flight</a></li>
        <li><a href="/F_letnev">The Barony of Letnev</a></li>
        <li><a href="/F_saar">The Clan of Saar</a></li>
        <li><a href="/F_keleres">The Council Keleres</a></li>
        <li><a href="/F_rebellion">The Crimson Rebellion</a></li>
        <li><a href="/F_deepwrought">The Deepwrought Scholarate</a></li>
        <li><a href="/F_muaat">The Embers of Muaat</a></li>
        <li><a href="/F_hacan">The Emirates of Hacan</a></li>
        <li><a href="/F_empyrean">The Empyrean</a></li>
        <li><a href="/F_sol">The Federation of Sol</a></li>
        <li><a href="/F_firmament">The Firmament/The Obsidian</a></li>
        <li><a href="/F_creuss">The Ghosts of Creuss</a></li>
        <li><a href="/F_lizix">The L1Z1X Mindnet</a></li>
        <li><a href="/F_bastion">Last Bastion</a></li>
        <li><a href="/F_mahact">The Mahact Gene&ndash;Sorcerers</a></li>
        <li><a href="/F_mentak">The Mentak Coalition</a></li>
        <li><a href="/F_naalu">The Naalu Collective</a></li>
        <li><a href="/F_naaz_rokha">The Naaz&ndash;Rokha Alliance</a></li>
        <li><a href="/F_nekro">The Nekro Virus</a></li>
        <li><a href="/F_nomad">The Nomad</a></li>
        <li><a href="/F_ral_nel">The Ral Nel Consortium</a></li>
        <li><a href="/F_norr">Sardakk N&rsquo;orr</a></li>
        <li><a href="/F_ul">The Titans of Ul</a></li>
        <li><a href="/F_jol_nar">The Universities of Jol&ndash;Nar</a></li>
        <li><a href="/F_vuilraith">The Vuil&rsquo;raith Cabal</a></li>
        <li><a href="/F_winnu">The Winnu</a></li>
        <li><a href="/F_xxcha">The Xxcha Kingdom</a></li>
        <li><a href="/F_yin">The Yin Brotherhood</a></li>
        <li><a href="/F_yssaril">The Yssaril Tribes</a></li>
    </ol>
<h2 class="section">Component Notes</h2>
    <ol class="note">
        <li><a href="/C_action_cards">Action Cards</a></li>
        <li><a href="/C_agendas">Agendas</a></li>
        <li><a href="/C_events">Events</a></li>
        <li><a href="/C_exploration_cards">Exploration Cards</a></li>
        <li><a href="/C_legendary_planets">Legendary Planets</a></li>
        <li><a href="/C_objectives">Objectives</a></li>
        <li><a href="/C_promissory_notes">Promissory Notes</a></li>
        <li><a href="/C_relics">Relics</a></li>
        <li><a href="/C_technology">Technology</a></li>
        <li><a href="/C_units">Units</a></li>
    </ol>
<h2 class="section">Twilight&rsquo;s Fall</h2>
<p>Coming soon.</p>
</article>
<footer>
<p><i>Twilight Imperium</i> &copy; Fantasy Flight Games. Not Affiliated.</p>
<p>This website is not affiliated with tirules.com. <a href="https://github.com/dangothemango/tirules">Github</a></p>
<p>This site costs $50+ a month to host. If you find it useful, consider <a href="https://buymeacoffee.com/dangorman">buying me a coffee</a>.</p>
</footer>
</body>
</html>
