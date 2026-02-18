# Unitas Movers — Project Guide

## INSTRUCTIONS FOR CLAUDE

Every time a new session starts in this project:
1. Read this file to understand the project context and progress
2. Briefly greet the user and summarize current progress status
3. Suggest the next logical task(s) to work on from the pending items below
4. Reference docs are in `docs/` folder — consult these when needed for schema details

**IMPORTANT:** When a task is completed, update the progress tracker below by moving it from "Pending" to "Completed" with the date. This keeps the file accurate across sessions.

---

## Project Overview

**Unitas Movers** — A professional moving company website + CMS for managing leads, content, and SEO.

- **URL:** unitasmovers.ca (Calgary-based moving company)
- **Goal:** Generate quote leads via SEO-optimized pages, manage leads through Filament admin panel

## Tech Stack

| Layer | Technology |
|-------|-----------|
| Framework | Laravel 12 (PHP 8.2+) |
| Admin Panel | Filament 3.0 |
| Frontend | Blade + Tailwind CSS 4.x + Alpine.js |
| Build Tool | Vite 7.0 |
| Database | MySQL |
| HTTP Client | Axios |

## Key Commands

```bash
# Development
composer run dev          # Runs Laravel server + queue + Vite concurrently
npm run dev              # Vite dev server only
npm run build            # Production build

# Database
php artisan migrate      # Run migrations
php artisan db:seed      # Seed data (19 services pre-populated)
php artisan migrate:fresh --seed  # Reset & reseed

# Testing
php artisan test         # Run PHPUnit tests

# Admin Panel
# Access at: /admin (Filament dashboard)
```

## Database Schema (10 tables + 3 Laravel defaults)

### Lead Management (Priority #1)
- **quotes** — 24 fields: customer info, move details, status tracking, UTM attribution
- **quote_activities** — Activity log per quote (status changes, notes, calls, emails)

### Content (SEO Pages)
- **services** — 19 service pages (residential, commercial, piano, etc.)
- **areas** — 55+ area pages (quadrants, neighborhoods, towns — hierarchical with parent_id)
- **routes** — 15-20 inter-city moving corridors (Calgary-Edmonton, etc.)
- **blog_posts** — Long-tail keyword content (guides, tips, seasonal, local, pillar)
- **french_pages** — French translations

### Supporting
- **reviews** — Customer testimonials (rating, featured flag, source)
- **faqs** — FAQ entries with category and sort order
- **redirects** — 301/302 redirect map with hit tracking
- **media** — Image library with alt text and dimensions
- **internal_links** — Cross-page link audit
- **seo_meta** — Polymorphic SEO for static pages

### Quote Status Flow
```
new → contacted → quoted → booked → completed
  ↓       ↓          ↓        ↓
  cancelled  no_response  cancelled  cancelled
```

## Project Structure

```
app/
├── Enums/           → QuoteStatus, MoveSize, ReferralSource
├── Filament/        → 11 admin resources (44 files total)
├── Http/Controllers → 7 controllers (Home, Service, Area, Blog, Page, Quote, base)
├── Models/          → 14 Eloquent models
└── Providers/       → Service providers

resources/views/     → 19 Blade templates
├── layouts/app.blade.php    → Main layout
├── pages/home.blade.php     → Homepage
├── pages/quote.blade.php    → Quote form
├── pages/pricing|about|privacy|terms|licensed-insured
├── pages/fr/                → French pages (4)
├── services/index|show      → Service listing & detail
├── areas/index|show         → Area listing & detail
└── blog/index|show          → Blog listing & detail

routes/web.php       → All routes (English + French prefix /fr)
```

## Filament Admin Resources (all CRUD with List/Create/Edit pages)
Quote, Service, Area, Route, BlogPost, Review, Faq, Redirect, Media, FrenchPage, SeoMeta

---

## PROGRESS TRACKER

### Completed
- [x] Laravel 12 project setup and configuration
- [x] Database schema — all 10 migrations created and functional
- [x] All 14 Eloquent models with relationships, casts, scopes
- [x] 3 Enums (QuoteStatus, MoveSize, ReferralSource) with labels, colors, icons
- [x] ServiceSeeder — 19 services pre-populated with SEO meta
- [x] Filament admin panel — 11 resources with full CRUD (44 files)
- [x] QuoteResource with activity tracking pages
- [x] All frontend routes (English + French)
- [x] 7 Controllers (Home, Service, Area, Blog, Page, Quote, base)
- [x] 19 Blade templates (layouts, pages, services, areas, blog, French)
- [x] Tailwind CSS + Alpine.js frontend
- [x] Vite build system configured
- [x] Quote form frontend at /get-a-quote (create + store)

### Pending / To Do
- [x] **Area pages content** — 52 area pages seeded (4 quadrants, 38 neighborhoods, 10 towns) — 2026-02-18
- [x] **Route pages content** — 17 route corridors seeded (Alberta cities, mountain towns, satellites, BC, SK) — 2026-02-18
- [x] **Blog posts content** — 19 blog posts seeded (2 pillar, 6 guides, 4 tips, 3 seasonal, 4 local) — 2026-02-18
- [x] **Reviews seeder** — 30 placeholder reviews seeded (5 featured, 25/5★ + 5/4★, 16 services, 29 areas) — 2026-02-18
- [x] **FAQ content** — 35 FAQs seeded across 8 categories (general, pricing, moving-day, services, protection, apartments, booking, restrictions) — 2026-02-18
- [x] **SEO meta for static pages** — 10 static pages seeded with meta titles, descriptions, canonical URLs, and schema.org JSON — 2026-02-18
- [ ] **Google Places autocomplete** — Integrate on quote form address fields
- [ ] **Distance calculation** — Auto-calculate estimated_distance_km from addresses
- [x] **Sitemap generation** — XML sitemap at /sitemap.xml with ~117 URLs (static + services + areas + routes + blog) — 2026-02-18
- [x] **Redirect middleware** — HandleRedirects middleware checks redirects table, performs 301/302 redirects with hit tracking — 2026-02-18
- [x] **Internal linking system** — InternalLinkService + <x-related-pages> component on service/area/blog detail pages + `php artisan links:generate` audit command (893 links) — 2026-02-18
- [x] **Image optimization** — Intervention Image v3, on-upload WebP variant generation (thumb/medium/large), `<x-responsive-image>` Blade component, `images:regenerate` artisan command — 2026-02-18
- [x] **Production deployment** — DigitalOcean droplet (159.203.23.196), Ubuntu 24.04, Nginx, PHP 8.3, MySQL 8, SSL via Let's Encrypt, live at https://unitasmovers.ca — 2026-02-19
- [ ] **Analytics integration** — Google Analytics / Tag Manager
- [x] **Schema.org markup** — JSON-LD structured data on all pages: MovingCompany, AggregateRating, WebSite, Service, BlogPosting, FAQPage, BreadcrumbList via SchemaMarkupService + Blade component — 2026-02-18
- [x] **Performance optimization** — Redirect caching, sitemap caching, aggregate rating cache, internal link caching, N+1 fixes, font preload, ClearsSiteCache trait, `app:optimize` command — 2026-02-19

### Nice to Have (Future)
- [ ] Email notifications — Admin notification when new quote arrives + customer auto-reply confirmation
- [ ] Online booking/payment integration
- [ ] Customer portal (track move status)
- [ ] SMS notifications
- [ ] Automated follow-up sequences
- [ ] A/B testing on quote form

---

## Reference Documents

- **PRD (Product Requirements):** `PRD.md` — Full product spec, features, phases, business rules
- **Database Schema:** `docs/DATABASE_SCHEMA_README.md` — Table structures, field reference, status flows
- **Schema Implementation:** `docs/alpine-movers-schema.tar.gz` — Migrations, models, enums, seeders
- **Pre-Dev Action Plan:** `docs/Alpine_Movers_Pre-Development_Action_Plan.txt` — Brand identity, wireframes, content plan, timeline, decisions
- **Original docs location:** `/home/lovleen/Desktop/work data/movers docs/` (backup copy)

---

## Conventions

- Slugs are used for SEO-friendly URLs (services, areas, routes, blog posts)
- All content tables have meta_title, meta_description, h1 for SEO
- Quote status transitions are managed through the QuoteStatus enum's allowedTransitions()
- Filament admin is at /admin
- **NOT in scope:** Eco-friendly/green branding and bilingual (French) service — removed from brand positioning
- Differentiators: Affordable pricing, licensed/insured, speed & flexibility
