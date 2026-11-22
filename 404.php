<?php
// Not-found page. Sends a real 404 and picks one of four joke pages at random.
// ?v=0..3 shows a specific one (for previewing).
// Production nginx serves this file as its error_page, which already sends the 404 status;
// setting it here as well makes nginx intercept the response and show its bare default page.
// The local dev server (router.php) has no error_page, so set it there.
if (PHP_SAPI === 'cli-server') {
    http_response_code(404);
}
$page_noindex = true;
$variant = (isset($_GET['v']) && in_array($_GET['v'], ['0', '1', '2', '3'], true)) ? (int) $_GET['v'] : random_int(0, 3);
include "prefix.php";

if ($variant === 0) { ?>
<header><h1>Page Not Found <sub>(Unit Ability)</sub></h1></header>
<article>
<h2>Rules Reference</h2>
<style> .lrr > li:before, .lrr > h2 > li:before {content: '404.' counter(item, decimal);} </style>
<p>A page that cannot be found is treated as having been purged. Purged components cannot be used or otherwise returned to the game by any means.</p>
    <ol class="lrr">
    <li>A player cannot activate this URL; it already contains one of their command tokens.</li>
    <li>If a player navigates to a page that does not exist, they must retreat to an adjacent page that contains one of their units or a planet they control.</li>
    <ol><li>The <a href="/">home page</a> is adjacent to every page.</li></ol>
    <li>This page does not have a cost, and so it cannot be produced.</li>
    </ol>

<h2>Notes</h2>
    <ol class="note">
    <li>Looking at this page is not a transaction.<sup>*</sup></li>
    <li><i>Sabotage</i> cannot be played to cancel this page, as it is not an action card.<sup>*</sup></li>
    <li>The Nekro player does not gain a technology from this page.<sup>*</sup></li>
    <li class="ixth">To type this URL is to commit heresy.<sup>*</sup></li>
    </ol>

<h2>Related Topics</h2>
    <ul>
    <li><a href="/R_gravity_rift">Gravity Rift</a></li>
    <li><a href="/R_purge">Purge</a></li>
    <li><a href="/">Home</a></li>
    </ul>
</article>
<?php } elseif ($variant === 1) {
    $roll = random_int(1, 10); ?>
<header><h1>Removed by a Gravity Rift</h1></header>
<article>
<p>The page you were looking for moved out of a <a href="/R_gravity_rift">gravity rift</a>.</p>
<p>Gravity rift roll: <b><?php echo $roll; ?></b>.</p>
<?php if ($roll <= 3) { ?>
<p>On a result of 1&ndash;3, the page is removed from the board. It was not destroyed; effects that trigger when a unit is destroyed are not triggered.</p>
<?php } else { ?>
<p>You survived the gravity rift! Unfortunately, this page still does not exist.</p>
<?php } ?>

<h2>Notes</h2>
    <ol class="note">
    <li>The &ldquo;0&rdquo; side of the d10 represents a result of 10.<sup>1,2</sup></li>
    <li>Reloading this page is a new movement, and requires a new roll.<sup>*</sup></li>
    </ol>
<p><a href="/">Retreat to the home page</a>.</p>
</article>
<?php } elseif ($variant === 2) { ?>
<header><h1>Sabotaged</h1></header>
<article>
<p>Your request has been canceled by a <i>Sabotage</i> action card.</p>

<h2>Notes</h2>
    <ol class="note">
    <li>No costs were paid.<sup>*</sup></li>
    <li>If you have a second copy of this URL, you may play it.<sup>*</sup></li>
    <li>The canceled request is discarded faceup. Players may look through the discard pile.<sup>*</sup></li>
    </ol>
<p>Perform a different action, or <a href="/">pass</a>.</p>
</article>
<?php } else { ?>
<header><h1>Agenda: Page Not Found</h1></header>
<article>
<p><b>Directive</b></p>
<p>&ldquo;For&rdquo;: This page exists.<br/>&ldquo;Against&rdquo;: This page does not exist.</p>
<p>Votes &ldquo;For&rdquo;: 0. Votes &ldquo;Against&rdquo;: 404.</p>
<p>The &ldquo;Against&rdquo; outcome is resolved. This page is discarded.</p>

<h2>Notes</h2>
    <ol class="note">
    <li>The speaker broke the tie anyway. The speaker&rsquo;s decision is not a vote.<sup>*</sup></li>
    <li>Your <i>Imperial Rider</i> was incorrect, and does not resolve.<sup>*</sup></li>
    </ol>
<p><a href="/">Return to the home page</a>.</p>
</article>
<?php }
include "suffix.php"; ?>
