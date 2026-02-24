#!/usr/bin/env bash
#
# Smoke Test — curls every public URL on unitasmovers.ca and reports status codes.
# Usage: bash tests/smoke-test.sh [base_url]
#   Default base: https://unitasmovers.ca
#
set -euo pipefail

BASE="${1:-https://unitasmovers.ca}"
PASS=0
FAIL=0
FAILURES=()

check() {
  local path="$1"
  local url="${BASE}${path}"
  local code
  code=$(curl -s -o /dev/null -w "%{http_code}" --max-time 10 "$url" 2>/dev/null || echo "000")
  if [ "$code" = "200" ]; then
    PASS=$((PASS + 1))
    printf "  %-60s %s\n" "$path" "✓ 200"
  else
    FAIL=$((FAIL + 1))
    FAILURES+=("$code $path")
    printf "  %-60s %s\n" "$path" "✗ $code"
  fi
}

echo "============================================"
echo " Smoke Test — $BASE"
echo "============================================"
echo ""

# ── Static Pages (11) ──────────────────────────────────────────
echo "── Static Pages ──"
check "/"
check "/get-a-quote"
check "/pricing"
check "/about"
check "/about/licensed-insured"
check "/privacy-policy"
check "/terms-of-service"
check "/reviews"
check "/faq"
check "/contact"
check "/site-map"
echo ""

# ── Index Pages (4) ───────────────────────────────────────────
echo "── Index Pages ──"
check "/services"
check "/areas"
check "/routes"
check "/blog"
echo ""

# ── Sitemap ───────────────────────────────────────────────────
echo "── Sitemap ──"
check "/sitemap.xml"
echo ""

# ── Service Detail Pages (17) ─────────────────────────────────
echo "── Service Pages ──"
for slug in \
  local-moving residential-moving apartment-moving condo-moving \
  commercial-moving long-distance-moving packing-unpacking piano-moving \
  specialty-moving furniture-moving small-moves senior-moving \
  same-day-moving evening-weekend-moving storage-solutions junk-removal \
  affordable-moving; do
  check "/services/$slug"
done
echo ""

# ── Area Detail Pages (52) ────────────────────────────────────
echo "── Area Pages ──"
for slug in \
  nw-calgary ne-calgary sw-calgary se-calgary \
  kensington hillhurst university-heights varsity brentwood dalhousie \
  edgemont tuscany royal-oak scenic-acres bowness \
  bridgeland renfrew marlborough falconridge saddleridge skyview-ranch \
  cityscape martindale \
  beltline mission marda-loop killarney altadore south-calgary bankview \
  lakeview signal-hill aspen-woods discovery-ridge \
  douglasdale mahogany auburn-bay cranston mckenzie-towne copperfield \
  new-brighton walden \
  airdrie cochrane okotoks chestermere strathmore high-river canmore \
  banff langdon crossfield; do
  check "/areas/$slug"
done
echo ""

# ── Route Detail Pages (34) ───────────────────────────────────
echo "── Route Pages (forward) ──"
for slug in \
  calgary-to-edmonton calgary-to-red-deer calgary-to-lethbridge \
  calgary-to-medicine-hat calgary-to-grande-prairie calgary-to-fort-mcmurray \
  calgary-to-canmore calgary-to-banff calgary-to-airdrie calgary-to-cochrane \
  calgary-to-okotoks calgary-to-chestermere calgary-to-vancouver \
  calgary-to-kelowna calgary-to-saskatoon calgary-to-lloydminster \
  calgary-to-brooks; do
  check "/routes/$slug"
done

echo "── Route Pages (reverse) ──"
for slug in \
  edmonton-to-calgary red-deer-to-calgary lethbridge-to-calgary \
  medicine-hat-to-calgary grande-prairie-to-calgary fort-mcmurray-to-calgary \
  canmore-to-calgary banff-to-calgary airdrie-to-calgary cochrane-to-calgary \
  okotoks-to-calgary chestermere-to-calgary vancouver-to-calgary \
  kelowna-to-calgary saskatoon-to-calgary lloydminster-to-calgary \
  brooks-to-calgary; do
  check "/routes/$slug"
done
echo ""

# ── Blog Post Detail Pages (23) ──────────────────────────────
echo "── Blog Posts ──"
for slug in \
  complete-guide-to-moving-in-calgary calgary-moving-costs-guide \
  how-to-pack-for-a-move first-time-homebuyer-moving-checklist \
  how-to-move-with-pets piano-moving-guide \
  long-distance-moving-from-calgary tips-to-save-money-on-your-move \
  how-to-choose-a-moving-company apartment-moving-tips \
  what-to-do-before-moving-day winter-moving-in-calgary \
  summer-moving-season-book-early spring-decluttering-before-your-move \
  best-neighbourhoods-in-calgary-for-families \
  moving-to-calgary-from-another-province calgary-quadrants-guide \
  moving-to-calgary-suburbs senior-moving-guide-calgary \
  condo-moving-rules-calgary evening-weekend-moving-calgary-guide \
  calgary-to-banff-moving-cost what-to-look-for-moving-company-calgary; do
  check "/blog/$slug"
done
echo ""

# ── Summary ───────────────────────────────────────────────────
TOTAL=$((PASS + FAIL))
echo "============================================"
echo " Results: $PASS/$TOTAL passed"
echo "============================================"

if [ "$FAIL" -gt 0 ]; then
  echo ""
  echo " FAILURES:"
  for f in "${FAILURES[@]}"; do
    echo "   $f"
  done
  echo ""
  exit 1
else
  echo " All URLs returned 200 ✓"
  exit 0
fi
