<footer>
<p><a href="/./" style="font-size:2em;">Home</a></p>
<?php
// Link each page to its note proofs (/R_combat/pudding), and each proof page back.
$footer_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
if (preg_match('#^/([RFC]_[A-Za-z0-9_]+)$#', $footer_path, $m) && is_file(__DIR__ . '/pudding/' . $m[1] . '.php')) {
    echo "<p><a href=\"/{$m[1]}/pudding\">Proof</a>: the source text behind each note on this page.</p>\n";
} elseif (preg_match('#^/([RFC]_[A-Za-z0-9_]+)/pudding$#', $footer_path, $m)) {
    echo "<p><a href=\"/{$m[1]}\">Back to the page</a></p>\n";
}
// Prefilled GitHub issue for reporting a problem with this page.
$report_page = 'https://tirules2.com' . $footer_path;
$report_url = 'https://github.com/dangothemango/tirules/issues/new?template=page-issue.yml'
    . '&title=' . rawurlencode('[' . ($footer_path === '/' ? 'home' : ltrim($footer_path, '/')) . '] ')
    . '&page=' . rawurlencode($report_page);
echo "<p><a href=\"" . htmlspecialchars($report_url) . "\" target=\"_blank\" rel=\"noopener\">Report a problem with this page</a> (opens a GitHub issue form).</p>\n";
?>
<p><i>Twilight Imperium</i> &copy; Fantasy Flight Games. Not Affiliated.</p>
<p>This website is not affiliated with tirules.com. <a href="https://github.com/dangothemango/tirules">Github</a></p>
<p>This site costs $50+ a month to host. If you find it useful, consider <a href="https://buymeacoffee.com/dangorman">buying me a coffee</a>.</p>
<p>Sources:<br/>
<sup>1</sup>&nbsp;<a href="https://images-cdn.fantasyflightgames.com/filer_public/51/55/51552c7f-c05c-445b-84bf-4b073456d008/ti10_pok_living_rules_reference_20_web.pdf" target="_blank" rel="noopener">Living Rules Reference v2.0</a><br/>
<sup>2</sup>&nbsp;<a href="https://www.rulespal.com/twilight-imperium-4/faq" target="_blank" rel="noopener">RulesPal TI4 FAQ (community consensus and designer rulings)</a><br/>
<sup>3</sup>&nbsp;<a href="https://cdn.svc.asmodee.net/production-fantasyflightgames/uploads/2026/08/ti-k0289_learn_to_play_2020_web.pdf" target="_blank" rel="noopener">Learn to Play</a><br/>
<sup>4</sup>&nbsp;<a href="https://docs.google.com/document/d/1_93kw7KkzvAXoQAxRioxo7iAt-Ar6BMIxdNf4Lv25rI/edit" target="_blank" rel="noopener">The Unofficially Official FAQ and Errata (PoK v3.1.1)</a><br/>
<sup>5</sup>&nbsp;<a href="https://docs.google.com/document/d/1Bgl9OpP-162sifCcratI9RtbOSTNXtFGnKEU_-89rZI/edit" target="_blank" rel="noopener">Compiled Designer Rulings (2018&ndash;2019)</a><br/>
<sup>6</sup>&nbsp;<a href="https://docs.google.com/document/d/1Un6F7oDY-b5oUx2RIbGH7644HJvb9jF1wtM399FuFts/edit" target="_blank" rel="noopener">Rules-as-Written &amp; Community Consensus Rulings (unofficial)</a><br/>
<sup>7</sup>&nbsp;<a href="https://cdn.svc.asmodee.net/production-fantasyflightgames/uploads/2026/08/te_rulebook_web.pdf" target="_blank" rel="noopener">Thunder&rsquo;s Edge Rulebook</a><br/>
<sup>8</sup>&nbsp;<a href="https://cdn.svc.asmodee.net/production-fantasyflightgames/uploads/2026/08/ti10_rulebook_web-good.pdf" target="_blank" rel="noopener">Prophecy of Kings Rulebook</a><br/>
<sup>9</sup>&nbsp;<a href="https://docs.google.com/document/d/11_D2URJTHozgqnOUv8AKHmh4E5DFFaC-AALy3YhBqsc/edit" target="_blank" rel="noopener">Designer Q&amp;A</a><br/>
<sup>10</sup>&nbsp;<a href="https://cdn.svc.asmodee.net/production-fantasyflightgames/uploads/2026/08/ti_codex_1_rules_compressed.pdf" target="_blank" rel="noopener">Twilight Codex Vol. I</a><br/>
<sup>11</sup>&nbsp;<a href="https://cdn.svc.asmodee.net/production-fantasyflightgames/uploads/2026/08/ti_codex_4_rules.pdf" target="_blank" rel="noopener">Twilight Codex Vol. IV: Liberation</a><br/>
<sup>12</sup>&nbsp;<a href="https://cdn.svc.asmodee.net/production-fantasyflightgames/uploads/2026/08/ti_codex_volume_3_vigil_v2_1-compressed.pdf" target="_blank" rel="noopener">Twilight Codex Vol. III: Vigil</a><br/>
<sup>13</sup>&nbsp;<a href="https://twilight-imperium.fandom.com/wiki/Thunder%27s_Edge" target="_blank" rel="noopener">Thunder&rsquo;s Edge revised strategy cards (card text as transcribed on the Twilight Imperium Wiki)</a><br/>
<sup>14</sup>&nbsp;<a href="https://cdn.svc.asmodee.net/production-fantasyflightgames/uploads/2026/08/ti_codex_ii_rules_web.pdf" target="_blank" rel="noopener">Twilight Codex Vol. II: Affinity</a><br/>
<sup>15</sup>&nbsp;<a href="https://cdn.svc.asmodee.net/production-fantasyflightgames/uploads/2026/08/codex_45_technology_card_updates.pdf" target="_blank" rel="noopener">Codex 4.5 Technology Card Updates</a></p>
<p><sup>*</sup>&nbsp;I could not find a source for these rulings but kept them in as they fit with my understanding of the game.</p>
</footer>
</body>
</html>
