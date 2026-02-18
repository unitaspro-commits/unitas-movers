# Unitas Movers — Database Schema Reference

## Overview

This schema contains **10 tables** organized into three groups:

### Lead Management (your priority #1)
- `quotes` — Every quote request submitted through the site
- `quote_activities` — Activity log for each quote (status changes, notes, calls)

### Content (SEO pages)
- `services` — 19 service pages (residential, commercial, piano, etc.)
- `areas` — 55+ area pages (quadrants, neighborhoods, towns)
- `routes` — 15–20 inter-city moving corridors
- `blog_posts` — Informational content targeting long-tail keywords
- `french_pages` — French-language translations

### Supporting
- `reviews` — Customer testimonials
- `faqs` — FAQ entries for the /faq/ page
- `redirects` — 301/302 redirect map
- `media` — Image library with alt text
- `internal_links` — Cross-page link tracking
- `seo_meta` — SEO fields for static pages (homepage, pricing, about, etc.)

---

## Quotes Table — Field Reference

| Field | Type | Required | Description |
|-------|------|----------|-------------|
| full_name | string(150) | ✅ | Customer name |
| phone | string(20) | ✅ | Primary contact — 403 area code expected |
| email | string(255) | ✅ | For quote delivery and follow-up |
| moving_from | string(500) | ✅ | Origin address (Google Places autocomplete) |
| moving_to | string(500) | ✅ | Destination address |
| move_date | date | ✅ | Requested move date |
| move_size | enum | ✅ | studio, 1br, 2br, 3br, 4br_plus, office |
| services_needed | json array | ✅ | e.g. ["moving", "packing", "piano"] |
| additional_notes | text | ❌ | Stairs, elevator, special items |
| preferred_language | enum | ❌ | en (default) or fr |
| referral_source | enum | ❌ | google, referral, social, homestar, kijiji, other |
| estimated_distance_km | int | ❌ | Auto-calculated from addresses |
| origin_city | string(100) | ❌ | Extracted from moving_from |
| destination_city | string(100) | ❌ | Extracted from moving_to |
| status | enum | auto | new → contacted → quoted → booked → completed |
| quoted_amount | decimal | ❌ | Price quoted to customer |
| final_amount | decimal | ❌ | Actual charge after completion |
| internal_notes | text | ❌ | Private notes (not visible to customer) |
| assigned_to | FK→users | ❌ | Which team member owns this lead |
| contacted_at | timestamp | auto | Set when status → contacted |
| quoted_at | timestamp | auto | Set when status → quoted |
| booked_at | timestamp | auto | Set when status → booked |
| completed_at | timestamp | auto | Set when status → completed |
| source_page | string(255) | ❌ | URL where form was submitted |
| utm_source/medium/campaign | string | ❌ | Marketing attribution |

### Status Flow

```
new → contacted → quoted → booked → completed
  ↓       ↓          ↓        ↓
  cancelled  no_response  cancelled  cancelled

no_response → contacted (re-engage)
cancelled → new (reopen)
```

---

## Files Created

```
database/migrations/
├── 2026_02_12_000001_create_quotes_table.php
├── 2026_02_12_000002_create_quote_activities_table.php
├── 2026_02_12_000003_create_services_table.php
├── 2026_02_12_000004_create_areas_table.php
├── 2026_02_12_000005_create_routes_table.php
├── 2026_02_12_000006_create_blog_posts_table.php
└── 2026_02_12_000007_create_supporting_tables.php

database/seeders/
└── ServiceSeeder.php          (19 service pages pre-populated)

app/Enums/
├── QuoteStatus.php            (new, contacted, quoted, booked, completed, cancelled, no_response)
├── MoveSize.php               (studio, 1br, 2br, 3br, 4br_plus, office)
└── ReferralSource.php         (google, referral, social, homestar, kijiji, other)

app/Models/
├── Quote.php                  (full model with relationships, scopes, status management)
└── QuoteActivity.php          (activity log model)
```

---

## What's Next

1. ~~Database schema~~ ✅ Done
2. **Quote form frontend** — The public-facing form at /get-a-quote
3. **Filament admin panel** — QuoteResource with CRUD, filtering, status tracking
4. **Email notifications** — Admin notification + customer auto-reply
