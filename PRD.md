# Alpine Movers Calgary — Product Requirements Document (PRD)

**Last Updated:** 2026-02-18
**Status:** Active

---

## 1. Product Vision

Alpine Movers Calgary is a professional moving company website designed to **generate quote leads** through SEO-optimized content and establish **brand credibility** as a trusted, affordable, and flexible moving service in Calgary and across Alberta.

### Mission Statement
Make Alpine Movers the go-to choice for residential and commercial moves in Calgary and Alberta by providing a fast, trustworthy, and affordable moving experience — starting with making it effortless for customers to request a quote online.

---

## 2. Target Users

### Primary Users

**Residential Customers**
- Families and individuals moving homes, apartments, condos in Calgary
- People relocating within Alberta (Calgary ↔ Edmonton, Red Deer, Lethbridge, etc.)
- Typical searches: "movers Calgary", "moving company near me", "Calgary to Edmonton movers"

**Commercial Customers**
- Small-to-medium businesses relocating offices
- Retail stores, restaurants moving locations
- Typical searches: "commercial movers Calgary", "office moving Calgary"

### Secondary Users

**Admin Team (Internal)**
- Uses the Filament admin panel at `/admin`
- Manages incoming quotes, tracks lead status, updates content
- Needs: quick quote overview, status tracking, activity logging

---

## 3. Competitive Differentiators

| Advantage | How It Shows on the Website |
|-----------|-----------------------------|
| **Affordable Pricing** | Transparent pricing page, "budget-friendly" messaging, competitive rate callouts |
| **Licensed & Insured** | Dedicated `/about/licensed-insured` page, trust badges on every page, credentials in footer |
| **Speed & Flexibility** | Same-day, evening, and weekend availability highlighted. Fast quote response promise |

> **NOT in scope:** Eco-friendly/green positioning and bilingual (French) service. These have been explicitly removed from the brand.

---

## 4. Service Area

### Local (Primary)
- Calgary city (all quadrants: NW, NE, SW, SE)
- Calgary neighborhoods (55+ area pages)
- Surrounding communities: Airdrie, Cochrane, Okotoks, Chestermere, Strathmore, High River, Canmore, Banff

### Long-Distance (Alberta)
- Calgary ↔ Edmonton
- Calgary ↔ Red Deer
- Calgary ↔ Lethbridge
- Calgary ↔ Medicine Hat
- Calgary ↔ Grande Prairie
- Calgary ↔ Fort McMurray
- Calgary ↔ Canmore/Banff
- Edmonton ↔ Red Deer
- And other inter-city Alberta corridors (15-20 total route pages)

---

## 5. Feature Requirements

### 5.1 Quote System (Priority #1)

**Public Quote Form (`/get-a-quote`)**

| Field | Type | Required | Notes |
|-------|------|----------|-------|
| Full Name | text | Yes | Max 150 chars |
| Phone | tel | Yes | 403/587/825 area codes expected |
| Email | email | Yes | For auto-reply delivery |
| Moving From | address | Yes | Google Places autocomplete (future) |
| Moving To | address | Yes | Google Places autocomplete (future) |
| Move Date | date | Yes | Date picker, no past dates |
| Move Size | select | Yes | Studio, 1BR, 2BR, 3BR, 4BR+, Office |
| Services Needed | multi-select | Yes | Moving, Packing, Piano, Storage, etc. |
| Additional Notes | textarea | No | Stairs, elevator, special items |
| Referral Source | select | No | Google, Referral, Social, HomeStars, Kijiji, Other |

**Acceptance Criteria:**
- Form validates all required fields before submission
- Phone field accepts Canadian formats (with/without country code)
- Move date cannot be in the past
- Form is mobile-responsive and loads fast
- Submission creates a quote record with status "new"

**After Submission — Customer Experience:**
1. Customer sees a thank you/confirmation page with:
   - "Thank you, [Name]! We've received your quote request."
   - Summary of their move details
   - "Our team will get back to you as soon as possible."
   - Company phone number for urgent inquiries
2. Customer receives an **auto-reply email** containing:
   - Personalized greeting with their name
   - Summary of their quote details (date, from/to, move size)
   - "We'll get back to you as soon as possible"
   - Company contact info (phone, email)
   - Professional Alpine Movers branding

**After Submission — Admin Experience:**
1. Admin receives a **notification email**:
   - Subject: "New Quote Request — [Customer Name] — [Move Size]"
   - All quote details at a glance
   - Direct link to quote in Filament admin panel
2. Quote appears in Filament dashboard with status "new"

**Quote Management (Filament Admin):**
- List all quotes with filtering by status, date range, city, service
- Status workflow: new → contacted → quoted → booked → completed
- Activity log per quote (status changes, notes, phone calls, emails)
- Assign quotes to team members
- Track quoted_amount and final_amount
- Bulk actions: mark as contacted, export to CSV

### 5.2 Service Pages (19 pages)

Each service page at `/services/{slug}` must include:
- SEO-optimized meta_title (max 70 chars) and meta_description (max 170 chars)
- Unique H1 heading
- Hero section with service description
- Detailed body content (what's included, process, tips)
- FAQ section (service-specific)
- Call-to-action → quote form
- Schema.org Service markup (future)
- Internal links to related services and areas

**Services List:**
1. Local Moving
2. Residential Moving
3. Apartment Moving
4. Condo Moving
5. Commercial Moving
6. Long Distance Moving
7. Packing & Unpacking
8. Piano Moving
9. Specialty Moving
10. Furniture Moving
11. Small Moves
12. Senior Moving
13. Same-Day Moving
14. Evening & Weekend Moving
15. Eco-Friendly Moving
16. Bilingual Movers
17. Storage Solutions
18. Junk Removal
19. Affordable Moving

### 5.3 Area Pages (55+ pages)

Each area page at `/areas/{slug}` must include:
- Hierarchical structure: Quadrant → Neighborhood → Town
- SEO title targeting "[Area] Movers" or "Moving Company [Area]"
- Local content: neighborhood description, typical move types, distance from Calgary
- Geographic data (lat/lng, population where available)
- FAQ section (area-specific)
- Call-to-action → quote form
- Links to related areas and relevant services

**Area Types:**
- **Quadrants:** NW Calgary, NE Calgary, SW Calgary, SE Calgary
- **Neighborhoods:** Beltline, Kensington, Bridgeland, Marda Loop, etc.
- **Surrounding Towns:** Airdrie, Cochrane, Okotoks, Chestermere, Canmore, etc.

### 5.4 Route Pages (15-20 pages)

Each route page at `/routes/{slug}` (or similar URL) must include:
- Origin and destination cities
- Distance (km) and estimated drive time
- Price range (starting from $X)
- Route overview content
- Cost breakdown section
- Destination guide (helpful info about the destination city)
- Bidirectional support (Calgary→Edmonton and Edmonton→Calgary)
- Call-to-action → quote form

### 5.5 Blog

Blog at `/blog` targeting long-tail SEO keywords:
- Categories: guides, tips, seasonal, local, pillar
- Each post linked to a related service and/or area (cross-linking for SEO)
- Featured image, target keyword tracking
- Pillar content flag for cornerstone articles
- SEO fields (meta_title, meta_description, canonical_url)

**Initial Content Plan (examples):**
- "Complete Guide to Moving in Calgary" (pillar)
- "How Much Does It Cost to Move in Calgary?" (guide)
- "10 Tips for a Stress-Free Move" (tips)
- "Best Calgary Neighborhoods for Families" (local)
- "Winter Moving Tips for Alberta" (seasonal)

### 5.6 Homepage

The homepage must include:
- Hero section with clear value proposition and CTA to quote form
- Key differentiators: affordable, licensed/insured, fast & flexible
- Featured services (top 4-6)
- Service areas overview with map or area links
- Customer testimonials/reviews carousel
- Recent blog posts
- Trust signals: license numbers, insurance badges, years in business
- Final CTA section → quote form

### 5.7 Static Pages

**Pricing (`/pricing`)**
- Transparent pricing information
- Rate ranges by move size
- What affects pricing (distance, stairs, specialty items)
- CTA → "Get your exact quote"

**About (`/about`)**
- Company story, mission, values
- Team photo/description
- Why choose Alpine Movers
- Differentiators highlighted

**Licensed & Insured (`/about/licensed-insured`)**
- License details and numbers
- Insurance coverage information
- Safety record
- Trust badges and certifications

**Privacy Policy & Terms of Service**
- Standard legal pages
- PIPEDA compliance (Canadian privacy law)

### 5.8 Reviews/Testimonials

- Display customer reviews on homepage and relevant pages
- Fields: customer name, rating (1-5 stars), review text, service type, source
- Featured flag for homepage carousel
- Initially seeded with placeholder testimonials, replaced with real ones over time
- Future: pull from Google Reviews API

### 5.9 French Pages — REMOVED

~~French pages have been removed from scope. Alpine Movers is not positioning as bilingual or eco-friendly.~~
This feature is not part of the current project scope.

---

## 6. SEO Requirements

### On-Page SEO
- Every content page has: meta_title, meta_description, h1, canonical_url, og_image
- URL structure: `/services/{slug}`, `/areas/{slug}`, `/blog/{slug}`
- Internal linking between related services, areas, and blog posts
- Image alt text on all images

### Technical SEO
- XML sitemap generation (auto-updated)
- robots.txt (already exists)
- 301/302 redirect management via admin panel
- Fast page load times (< 3 seconds)
- Mobile-first responsive design
- Schema.org structured data:
  - LocalBusiness (homepage)
  - Service (service pages)
  - Review/AggregateRating (reviews)
  - FAQPage (FAQ sections)
  - BreadcrumbList (all pages)

### Target Keywords (examples)
- "movers Calgary" / "Calgary moving company"
- "affordable movers Calgary"
- "long distance movers Alberta"
- "Calgary to Edmonton movers"
- "[Neighborhood] movers" (55+ variations)
- "[Service type] Calgary" (19 variations)

---

## 7. Design & UX Principles

- **Mobile-first** — majority of traffic will be mobile
- **Fast** — minimal JS, optimized images, Tailwind for small CSS bundle
- **Trust-focused** — reviews, badges, license info visible on every page
- **Clear CTAs** — every page drives toward the quote form
- **Professional but approachable** — not corporate, not casual. Reliable and friendly

### Brand Identity (from Pre-Dev Action Plan)

**Color Palette (Rocky Mountain inspired):**
| Color | Hex | Usage |
|-------|-----|-------|
| Alpine Green (Primary) | #1B4D3E | Logo, headers, primary buttons, nav |
| Forest (Secondary) | #2D6B4F | Hover states, H2 headings |
| Meadow (Accent) | #4CAF50 | CTAs, success states |
| Slate (Neutral Dark) | #2C3E50 | Body text, footer |
| Stone (Neutral Mid) | #6B7B8D | Muted text, borders |
| Snow (Background) | #F8FAF9 | Page backgrounds |
| Cream (Warm White) | #FDF8F0 | Hero sections, alternating sections |
| Bark (Warm Accent) | #8B6914 | Trust badges, review stars |
| Summit Red (Alert) | #C0392B | Errors, urgent CTAs |

**Typography:**
| Role | Font | Weight |
|------|------|--------|
| Display / H1 | DM Serif Display | 400 |
| Subheadings / Nav / Buttons | Plus Jakarta Sans | 600, 700 |
| Body text | Plus Jakarta Sans | 400, 500 |
| Pricing / Numbers | JetBrains Mono | 400 |

**Tagline Options:** "Moving Calgary Forward" / "Your Move, Our Mountain" / "Move Clean. Move Green." / "Peak Moving Experience"

---

## 8. Phased Roadmap

### Phase 1 — Core (Current Sprint)
- [x] Database schema and migrations
- [x] All Eloquent models and enums
- [x] Filament admin panel (11 resources)
- [x] All routes and controllers
- [x] Blade templates for all pages
- [x] Quote form (create + store)
- [ ] Email notifications (admin + customer auto-reply)
- [ ] SEO meta for static pages

### Phase 2 — Content & SEO
- [ ] Seed 55+ area pages with SEO content
- [ ] Seed 15-20 route pages with content
- [ ] Write initial blog posts (5-10)
- [ ] Populate FAQ entries
- [ ] Seed placeholder reviews
- [ ] Homepage content polishing
- [ ] Service page body content (detailed descriptions)

### Phase 3 — Technical SEO & Performance
- [ ] XML sitemap generation
- [ ] Schema.org structured data markup
- [ ] Redirect middleware (reads from redirects table)
- [ ] Image optimization pipeline
- [ ] Internal linking automation
- [ ] Page speed optimization

### Phase 4 — Integrations
- [ ] Google Places autocomplete on quote form
- [ ] Distance auto-calculation (moving_from → moving_to)
- [ ] Google Analytics / Tag Manager
- [ ] Google Search Console verification

### Phase 5 — Polish & Launch
- [ ] Final design review and responsive testing
- [ ] Production server setup (SSL, domain, hosting)
- [ ] Load testing
- [ ] Launch checklist and go-live

### Future (Post-Launch)
- [ ] Google Reviews integration
- [ ] Online booking & deposit payment
- [ ] Customer portal (move status tracking)
- [ ] SMS notifications
- [ ] Automated follow-up email sequences
- [ ] A/B testing on quote form
- [ ] Live chat widget

---

## 9. Business Rules

### Quote Status Transitions
```
new → contacted → quoted → booked → completed
  ↓       ↓          ↓        ↓
  cancelled  no_response  cancelled  cancelled

no_response → contacted (re-engage)
cancelled → new (reopen)
```

### Notification Triggers
| Event | Admin Email | Customer Email |
|-------|-------------|----------------|
| New quote submitted | Yes — full details + admin link | Yes — confirmation + "we'll get back to you shortly" |
| Quote status → quoted | No | Future: send quote amount to customer |
| Quote status → booked | No | Future: booking confirmation |

### Content Rules
- All service/area/route pages must have unique meta_title and meta_description
- Meta titles max 70 characters, meta descriptions max 170 characters
- Every content page must have at least one CTA to the quote form
- Blog posts should link to at least one service and one area page
- French pages must link to their English equivalent and vice versa

---

## 10. Success Metrics (Post-Launch)

| Metric | Target |
|--------|--------|
| Quote form submissions | 50+/month within 3 months |
| Organic traffic | 1,000+ visitors/month within 6 months |
| Quote → Booked conversion | 25%+ |
| Page load time | < 3 seconds |
| Mobile usability | 100% Google score |
| Indexed pages | 80+ pages in Google |

---

## 11. Reference Documents

- Database schema details: `docs/DATABASE_SCHEMA_README.md`
- Schema implementation: `docs/alpine-movers-schema.tar.gz`
- Pre-development action plan: `docs/Alpine_Movers_Pre-Development_Action_Plan.txt` — Brand, wireframes, content plan, decisions
- Project status tracker: `CLAUDE.md`
