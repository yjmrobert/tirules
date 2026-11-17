<?php
// Dark mode toggle, shared by prefix.php and index.php. Echoes the <head> script;
// the caller places $theme_toggle_button inside <header>.
$theme_toggle_button = '<button type="button" class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle dark mode" title="Toggle dark mode">&#9680;</button>';
?>
<script>
try { var t = localStorage.getItem('theme'); if (t) document.documentElement.dataset.theme = t; } catch (e) {}
function toggleTheme()
{
    var d = document.documentElement;
    var c = d.dataset.theme || (matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
    d.dataset.theme = c == 'dark' ? 'light' : 'dark';
    try { localStorage.setItem('theme', d.dataset.theme); } catch (e) {}
}
</script>
<noscript><style>.theme-toggle { display: none; }</style></noscript>
