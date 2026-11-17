#!/usr/bin/env bash
# Verifies that every R_/F_/C_*.php page is listed in both index.php's nav
# and sitemap.xml, that neither lists a page that doesn't exist, and that
# links between pages point at real pages.
# Run from the repo root: ./tools/check_links.sh
set -euo pipefail
cd "$(dirname "$0")/.."

ls R_*.php F_*.php C_*.php | sed 's/\.php$//' | sort > /tmp/tirules_files.txt
grep -oE 'href="/[A-Za-z_]+"' index.php | sed -E 's/href="\///; s/"$//' | sort -u > /tmp/tirules_index_links.txt
grep -oE '<loc>https://tirules2\.com/[A-Za-z_]+</loc>' sitemap.xml | sed -E 's#<loc>https://tirules2\.com/##; s#</loc>##' | sort -u > /tmp/tirules_sitemap_links.txt

status=0

missing_from_index=$(comm -23 /tmp/tirules_files.txt /tmp/tirules_index_links.txt)
if [ -n "$missing_from_index" ]; then
    echo "Pages missing from index.php nav:"
    echo "$missing_from_index"
    status=1
fi

dangling_in_index=$(comm -13 /tmp/tirules_files.txt /tmp/tirules_index_links.txt)
if [ -n "$dangling_in_index" ]; then
    echo "index.php links to pages that don't exist:"
    echo "$dangling_in_index"
    status=1
fi

missing_from_sitemap=$(comm -23 /tmp/tirules_files.txt /tmp/tirules_sitemap_links.txt)
if [ -n "$missing_from_sitemap" ]; then
    echo "Pages missing from sitemap.xml:"
    echo "$missing_from_sitemap"
    status=1
fi

dangling_in_sitemap=$(comm -13 /tmp/tirules_files.txt /tmp/tirules_sitemap_links.txt)
if [ -n "$dangling_in_sitemap" ]; then
    echo "sitemap.xml links to pages that don't exist:"
    echo "$dangling_in_sitemap"
    status=1
fi

# Links between content pages must be absolute ("/R_combat") and match a page
# file exactly. Case matters: macOS ignores it locally, but production is Linux.
page_links=$(grep -oE 'href="[^"#]*' R_*.php F_*.php C_*.php pudding/*.php suffix.php | sed 's/href="//' \
    | grep -vE ':(https?:|mailto:|/?\.?/?$)' || true)

relative_links=$(echo "$page_links" | grep -vE ':/' || true)
if [ -n "$relative_links" ]; then
    echo "Page links missing a leading '/' (file:target):"
    echo "$relative_links"
    status=1
fi

broken_links=$(echo "$page_links" | grep -E ':/' | while IFS=: read -r file target; do
    grep -qxF "${target#/}" /tmp/tirules_files.txt || echo "$file:$target"
done)
if [ -n "$broken_links" ]; then
    echo "Page links to pages that don't exist (file:target):"
    echo "$broken_links"
    status=1
fi

# Each proof page (pudding/R_combat.php, served at /R_combat/pudding) needs its page.
orphan_puddings=$(for f in pudding/*.php; do [ -f "$(basename "$f")" ] || echo "$f"; done)
if [ -n "$orphan_puddings" ]; then
    echo "Proof pages with no matching page:"
    echo "$orphan_puddings"
    status=1
fi

rm -f /tmp/tirules_files.txt /tmp/tirules_index_links.txt /tmp/tirules_sitemap_links.txt

if [ "$status" -eq 0 ]; then
    echo "OK: index.php, sitemap.xml, page links, and page files are consistent."
fi
exit $status
