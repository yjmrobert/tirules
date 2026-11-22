# Agent Instructions for tirules

Twilight Imperium 4th Edition rules reference site, served at https://tirules2.com.
These instructions apply to every AI agent working in this repo. The **Non-negotiable
constraints** below hold during any refactor or redesign. Do not override them unless
the repo owner explicitly asks in the current task.

## Non-negotiable constraints

### 1. The site stays PHP
- Pages stay server-rendered `.php` files. Do not migrate to a JS framework (React,
  Vue, Svelte, etc.), a static-site generator, a different backend language, or a
  build pipeline.
- No client-side rendering of content. Every rule, note and heading must be in the
  HTML the server sends, so crawlers and no-JS users see everything.
- No package managers or build steps (`npm`, `composer`, bundlers, transpilers) unless
  the owner explicitly asks for them. Copying the files to a PHP host must be enough to deploy.
- Plain PHP only. Do not add a framework (Laravel, Symfony, etc.) or a templating engine.
  Shared markup lives in plain includes (`prefix.php`, `suffix.php`).

### 2. Look, formatting, and weight stay the same
- Keep the current visual design: fonts (`helv`, `slid`, `lazax`), colors, layout,
  numbered-list structure. Restructuring
  `style.css` is fine. Changing how pages render is not, unless the owner asks for it.
- One stylesheet (`style.css`). No CSS frameworks (Tailwind, Bootstrap, etc.), no CSS
  preprocessors, no web-font CDNs. Keep fonts self-hosted.
- No JavaScript by default. If JS is truly needed, it must be small, inline or a single
  local file, not required to read content, and approved by the owner.
- No third-party scripts: analytics, trackers, ad tags, chat widgets, or external embeds.
- Do not add images or other heavy assets to content pages without a clear reason. Any
  that are added must be optimized and have `width`/`height` and `alt` set.
- Treat page weight as a budget. A typical rule page should stay a few KB of HTML plus
  the shared cached CSS and fonts. Say so explicitly if a change grows it noticeably.

### 3. SEO must not regress
- Keep clean URLs (`/R_combat`, not `/R_combat.php`). `redirect_php_urls.php` sends 301
  redirects from `.php` URLs. `router.php` (local dev) and
  `.platform/nginx/conf.d/elasticbeanstalk/rewrite.conf` (production) must stay
  consistent with each other.
- Every page keeps its `<link rel="canonical">` (emitted by `prefix.php`), a unique
  `<title>`, a viewport meta tag, and UTF-8.
- One `<h1>` per page, inside `<header>`. `prefix.php` builds the `<title>` from the
  `<header>` text. Sections use `<h2>`. Keep the semantic HTML (`<header>`, `<article>`,
  `<footer>`, ordered lists).
- Never change an existing page's URL without adding a 301 redirect from the old one.
- When adding, renaming, or removing an `R_`/`F_`/`C_` page, update both the `index.php`
  nav and `sitemap.xml`, then run `./tools/check_links.sh`.

## Site structure

- `R_*.php`: Living Rules Reference topics. `F_*.php`: faction pages. `C_*.php`:
  component pages (cards, units, technology, etc.).
- Content pages start with `<?php include "prefix.php"?>` and end with
  `<?php include "suffix.php"?>`. `prefix.php` writes the `<head>` and output-buffers
  the body to insert the dynamic `<title>`. `suffix.php` writes the footer.
- `index.php` is the standalone home page and nav.
- `report.php` (`/report`) is the "report a problem" form, opened by the bug button in the header
  (`theme.php`) and the footer link. It creates a GitHub issue through the API using the
  `GITHUB_ISSUES_TOKEN` environment variable (fine-grained token, Issues read/write on this repo
  only, set as an EB **Environment property**, not an environment secret). Without the token, or if
  GitHub refuses the request, it offers GitHub's own prefilled issue form and states the reason.
  Issues must be enabled on the repo. The page is `noindex` and is not in the nav or sitemap.
- Local dev: `php -S localhost:8000 router.php`.

## Content and markup conventions

Follow `style.md` for writing style and markup. Highlights:
- Third person, gender neutral, US English, every list item ends with a period.
- Use HTML entities for typography: `&rsquo;`, `&ldquo;`/`&rdquo;`, `&ndash;`.
- `<b>` for step names, `<i>` for card names, `<sc>` for faction-sheet and unit
  abilities (small caps).
- Notes go in `<ol class="note">`. Nested sub-points use a nested `<ol>`. A single
  sub-item puts `<ol><li>…</li></ol>` on one line.

## Notes, citations and proof pages

- Every note ends with `<sup>n</sup>` (the source numbers listed in `suffix.php`) or
  `<sup>*</sup>` when no source exists.
- Every page with notes has a proof page, `pudding/<page>.php` (served at `/<page>/pudding`),
  generated from `tools/pudding/<page>.txt` by `./tools/build_pudding.py <page>`. The proof file
  format is described at the top of `tools/build_pudding.py`: `@n` is the nth cited note in page
  order (sub-notes included, uncited header `<li>` skipped); lines are `E<src>` explicit,
  `I<src>` implicit, `N` not found.
- When you add a note, add its proof with `./tools/insert_proof.py <page> "<note text>" "<proof line>"`,
  which renumbers the later `@n` blocks. When you remove, merge, split or reorder notes, renumber
  by hand. Then rebuild the proof page and check in `pudding/<page>.php` that each proof sits under
  its note. Commit the `.txt` and the regenerated `.php` with the page.
- Citations must match the proofs: don't cite a source the proof file doesn't quote. If a cited
  number's only proof is `N`, or says it doesn't address the note, drop the number (or use `*` if
  nothing is left). The owner prefers `*` to a misleading number.
- Owner decisions that still stand: strategy cards use the Thunder's Edge versions. Component
  Limitations 23.4 deliberately reads "except for fighters and infantry".

## Committing

- Commit on the current branch. Never push.
- Show the owner the diff of any change to note text, wording, or site behavior, and commit only
  after they approve. Citation-only and proof-only changes, and plain typo fixes, may be committed
  without asking; say what was committed.
- Use a subject that says what changed on the site (for example
  `Coexistence: merge scoring notes and reorder`), and end with the `Co-Authored-By` trailer your
  harness specifies.

## Before finishing a change

1. Run `./tools/check_links.sh`.
2. Run `php -l` on any PHP file you edited.
3. If you touched layout, CSS, or shared includes, load a few pages under
   `php -S localhost:8000 router.php` and confirm they look unchanged.
4. If you added, renamed, or removed a card heading on a `C_` or `F_` page, run
   `./tools/heading_ids.py` to update the heading ids and the `C_` page jump lists, then
   `./tools/build_pudding.py <page>` for each page it changed.
