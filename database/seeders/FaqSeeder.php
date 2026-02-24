<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            // ── General / Getting Started ────────────────────────
            [
                'question' => 'How do I get a moving quote from Unitas Movers?',
                'answer' => 'You can request a free quote by filling out the form on our Get a Quote page, calling us at (403) 991-3206, or emailing info@unitasmovers.ca. We\'ll ask about your move details — home size, addresses, preferred date, and any special items — and provide a clear estimate, usually within a few hours.',
                'category' => 'general',
                'sort_order' => 1,
            ],
            [
                'question' => 'Are you licensed and insured?',
                'answer' => 'Yes. Unitas Movers is a fully licensed Calgary moving company with a City of Calgary business licence, commercial vehicle insurance, cargo liability coverage, and Workers\' Compensation Board (WCB) coverage. We\'re happy to provide proof of insurance upon request.',
                'category' => 'general',
                'sort_order' => 2,
            ],
            [
                'question' => 'How far in advance should I book my move?',
                'answer' => 'We recommend booking 2-3 weeks ahead for most moves. During peak season (June through August) and on month-end weekends, book 4-6 weeks in advance. We do accommodate last-minute moves when availability allows — call us and we\'ll do our best.',
                'category' => 'general',
                'sort_order' => 3,
            ],
            [
                'question' => 'What areas do you serve?',
                'answer' => 'We serve all of Calgary and its four quadrants (NW, NE, SW, SE), plus surrounding communities including Airdrie, Cochrane, Okotoks, Chestermere, Strathmore, Canmore, and Banff. For long-distance moves, we cover all of Alberta and regularly travel to Vancouver, Kelowna, Saskatoon, and other western Canadian cities.',
                'category' => 'general',
                'sort_order' => 4,
            ],
            [
                'question' => 'Do you offer free estimates?',
                'answer' => 'Yes — all our estimates are free and come with no obligation. For local moves, we can usually provide an accurate estimate over the phone or through our online quote form. For larger or long-distance moves, we may suggest a quick video walkthrough or in-home assessment for the most accurate pricing.',
                'category' => 'general',
                'sort_order' => 5,
            ],

            // ── Pricing ──────────────────────────────────────────
            [
                'question' => 'How much does a local Calgary move cost?',
                'answer' => 'Local Calgary moves are charged hourly. A two-person crew with truck starts at $129/hour, a three-person crew at $169/hour, and a four-person crew at $209/hour. Most one-bedroom moves cost $350-$700, two-bedroom moves $500-$1,000, and three-bedroom houses $800-$1,500. We provide a clear estimate upfront.',
                'category' => 'pricing',
                'sort_order' => 10,
            ],
            [
                'question' => 'What is included in your hourly rate?',
                'answer' => 'Our hourly rate includes the moving truck, fuel, furniture blankets and padding, dollies (appliance and furniture), floor runners, basic furniture disassembly and reassembly (beds, tables), and cargo insurance. There are no hidden truck fees, fuel surcharges, or equipment charges.',
                'category' => 'pricing',
                'sort_order' => 11,
            ],
            [
                'question' => 'Is there a minimum charge?',
                'answer' => 'Yes — we have a 2-hour minimum for local moves. This covers most studio and small one-bedroom apartment moves. The clock starts when our crew arrives at your home and stops when the last item is placed at your new home.',
                'category' => 'pricing',
                'sort_order' => 12,
            ],
            [
                'question' => 'Do you charge for travel time?',
                'answer' => 'No. We start the clock when our crew arrives at your pickup address, not when they leave our depot. You\'re only paying for active moving time. For long-distance moves, the highway drive is included in the flat-rate price.',
                'category' => 'pricing',
                'sort_order' => 13,
            ],
            [
                'question' => 'How are long-distance moves priced?',
                'answer' => 'Long-distance moves (to other cities) use flat-rate pricing based on the total volume or weight of your belongings, the distance, and any additional services like packing. You\'ll receive a fixed price upfront — no hourly surprises. The quote includes fuel, crew accommodation, highway travel, and full cargo insurance.',
                'category' => 'pricing',
                'sort_order' => 14,
            ],
            [
                'question' => 'Are there extra charges for stairs?',
                'answer' => 'For standard moves with one flight of stairs, there\'s no extra charge. If your move involves multiple flights of stairs (e.g., a third-floor walk-up) or exceptionally difficult stair access, we\'ll let you know about any additional fees upfront in your estimate — no surprises on moving day.',
                'category' => 'pricing',
                'sort_order' => 15,
            ],
            [
                'question' => 'Do you accept credit cards?',
                'answer' => 'Yes — we accept Visa, Mastercard, debit, e-transfer, cash, and cheque. Payment is due upon completion of the move. For long-distance moves, we may require a deposit to secure your booking, with the balance due on delivery.',
                'category' => 'pricing',
                'sort_order' => 16,
            ],

            // ── Moving Day ───────────────────────────────────────
            [
                'question' => 'What should I do to prepare for moving day?',
                'answer' => 'Pack all your belongings in boxes (or book our packing service), disassemble furniture you\'re able to, clear pathways from doors to rooms, label boxes by destination room, and secure parking for our truck. Have a plan for pets and small children. On the day, walk our crew through both homes and point out fragile or priority items.',
                'category' => 'moving-day',
                'sort_order' => 20,
            ],
            [
                'question' => 'Do I need to be home during the move?',
                'answer' => 'Yes — or have a designated representative present. Someone needs to be available at both the pickup and delivery locations to direct the crew on item placement, answer questions, and sign off on the move completion. You don\'t need to help with lifting — that\'s our job.',
                'category' => 'moving-day',
                'sort_order' => 21,
            ],
            [
                'question' => 'How long will my move take?',
                'answer' => 'It depends on home size, distance, stairs, and how much packing is needed. As a general guide: a studio or one-bedroom takes 2-3 hours, a two-bedroom takes 3-5 hours, a three-bedroom takes 4-7 hours, and a four-bedroom or larger takes 6-10 hours. We\'ll give you a time estimate when you book.',
                'category' => 'moving-day',
                'sort_order' => 22,
            ],
            [
                'question' => 'What happens if it rains or snows on moving day?',
                'answer' => 'We move in all weather conditions — rain, snow, and Calgary\'s famous chinook winds. Our crews use protective wrapping, tarps, and floor runners to keep your belongings and homes protected. In extreme weather (major blizzards, severe ice storms), we\'ll contact you to discuss rescheduling for safety.',
                'category' => 'moving-day',
                'sort_order' => 23,
            ],
            [
                'question' => 'Will the same crew load and unload my belongings?',
                'answer' => 'Yes — for local and most long-distance moves, the same crew that loads your truck will unload it at the destination. This means they know exactly how everything was packed and where fragile items are located, resulting in a more careful and efficient unload.',
                'category' => 'moving-day',
                'sort_order' => 24,
            ],
            [
                'question' => 'Should I tip the movers?',
                'answer' => 'Tipping is not required but always appreciated if you feel the crew did a great job. A common range is $20-$40 per mover, or 10-15% of the total bill. You can also show appreciation with cold drinks, snacks, or a positive Google review — our crews love all of the above.',
                'category' => 'moving-day',
                'sort_order' => 25,
            ],

            // ── Services ─────────────────────────────────────────
            [
                'question' => 'Do you offer packing services?',
                'answer' => 'Yes — we offer full packing (we pack your entire home), partial packing (we pack specific rooms like the kitchen or fragile items), and packing supply delivery (boxes, tape, bubble wrap, wardrobe boxes delivered to your door). Packing is typically done the day before or the morning of your move.',
                'category' => 'services',
                'sort_order' => 30,
            ],
            [
                'question' => 'Can you move a piano?',
                'answer' => 'Yes. We have specialized piano moving equipment — piano boards, heavy-duty straps, and piano dollies — and trained crews experienced with upright, baby grand, and grand pianos. Piano moves start at $150 for a local upright and go up based on size, stairs, and distance.',
                'category' => 'services',
                'sort_order' => 31,
            ],
            [
                'question' => 'Do you move hot tubs, pool tables, or gym equipment?',
                'answer' => 'Yes — we handle specialty and heavy items including hot tubs, pool tables, home gym equipment (treadmills, ellipticals, weight sets), safes, and oversized furniture. These items require additional crew members and equipment, so let us know about them when requesting your quote.',
                'category' => 'services',
                'sort_order' => 32,
            ],
            [
                'question' => 'Do you offer storage solutions?',
                'answer' => 'Yes — we can arrange short-term or long-term storage if your move-in and move-out dates don\'t align. Your belongings are stored securely and can be delivered to your new home when you\'re ready. Ask us for storage pricing when you request your moving quote.',
                'category' => 'services',
                'sort_order' => 33,
            ],
            [
                'question' => 'Can you help with commercial or office moves?',
                'answer' => 'Yes. We handle office relocations, retail moves, and commercial equipment transport. We can schedule around your business hours — evenings and weekends are available — to minimize downtime. We coordinate IT equipment, desks, filing cabinets, and sensitive equipment with care.',
                'category' => 'services',
                'sort_order' => 34,
            ],
            [
                'question' => 'Do you disassemble and reassemble furniture?',
                'answer' => 'Yes — basic furniture disassembly and reassembly (beds, dining tables, desks, shelving units) is included in our service at no extra charge. For complex items like wall units, IKEA systems, or custom furniture, we\'ll discuss specifics during your estimate.',
                'category' => 'services',
                'sort_order' => 35,
            ],

            // ── Protection & Claims ──────────────────────────────
            [
                'question' => 'How do you protect my belongings during the move?',
                'answer' => 'Every item is wrapped in thick furniture blankets and secured with straps in the truck. We use floor runners to protect hardwood and tile, door frame protectors for tight entries, and stretch wrap for upholstered items. Fragile items receive extra bubble wrap and padding. We treat your belongings like our own.',
                'category' => 'protection',
                'sort_order' => 40,
            ],
            [
                'question' => 'What if something gets damaged during the move?',
                'answer' => 'We carry cargo liability insurance that covers your belongings during transit. If damage occurs, report it to us on the same day (or as soon as you discover it) with photos. We have a straightforward claims process and will work with you to resolve the issue fairly and promptly.',
                'category' => 'protection',
                'sort_order' => 41,
            ],
            [
                'question' => 'Do you protect floors and walls during the move?',
                'answer' => 'Yes — we lay down floor runners on hardwood, tile, and laminate floors along the moving path. We use door frame protectors on tight entries and banister pads on staircases. If you\'re in a condo, we also pad the elevator and protect common-area floors as required by most buildings.',
                'category' => 'protection',
                'sort_order' => 42,
            ],

            // ── Apartments & Condos ──────────────────────────────
            [
                'question' => 'Do you handle condo and apartment moves?',
                'answer' => 'Yes — apartment and condo moves are a big part of what we do, especially in the Beltline, Mission, Bridgeland, and downtown Calgary. We coordinate elevator bookings, loading dock access, and building move rules. Our crews know the specific requirements of most major Calgary condo buildings.',
                'category' => 'apartments',
                'sort_order' => 50,
            ],
            [
                'question' => 'Do I need to book the elevator for my condo move?',
                'answer' => 'Yes — most Calgary condo buildings require elevator reservations for moves, typically 1-2 weeks in advance. Contact your building management as soon as you have your moving date. We can help guide you through the process if you\'re unsure of your building\'s requirements.',
                'category' => 'apartments',
                'sort_order' => 51,
            ],
            [
                'question' => 'Can you move me from a walk-up apartment with no elevator?',
                'answer' => 'Absolutely. Our crews handle walk-up apartment moves regularly, including third and fourth-floor units. We use stair-climbing dollies and proper lifting techniques. Stair carries take more time but we plan for it in your estimate so the price is transparent.',
                'category' => 'apartments',
                'sort_order' => 52,
            ],

            // ── Booking & Cancellation ───────────────────────────
            [
                'question' => 'What is your cancellation policy?',
                'answer' => 'We understand plans change. If you need to cancel or reschedule, we ask for at least 48 hours\' notice. Cancellations made with less than 48 hours\' notice may be subject to a cancellation fee. No-shows on moving day are charged a minimum fee. We\'re always flexible when life throws you a curveball — just communicate with us.',
                'category' => 'booking',
                'sort_order' => 60,
            ],
            [
                'question' => 'Can I reschedule my move?',
                'answer' => 'Yes — we\'re happy to reschedule with at least 48 hours\' notice at no charge, subject to availability. During peak season, rebooking on short notice may mean a different date or time than your original booking. The earlier you let us know, the more flexibility we have.',
                'category' => 'booking',
                'sort_order' => 61,
            ],
            [
                'question' => 'Do you move on weekends and holidays?',
                'answer' => 'Yes — we offer moving services on Saturdays, Sundays, and most holidays. Weekend and holiday moves are popular (especially Saturday), so book early. Some statutory holidays may have modified availability. Evening moves are also available for clients who need flexibility around work schedules.',
                'category' => 'booking',
                'sort_order' => 62,
            ],

            // ── What We Can't Move ───────────────────────────────
            [
                'question' => 'Is there anything you can\'t move?',
                'answer' => 'For safety and regulatory reasons, we cannot transport hazardous materials including propane tanks, gasoline, paint thinner, fireworks, ammunition, and corrosive chemicals. We also cannot move live plants on long-distance moves (they don\'t survive well in unheated trucks), perishable food, or pets. Dispose of hazardous materials properly before your move.',
                'category' => 'restrictions',
                'sort_order' => 70,
            ],
            [
                'question' => 'Can you move my car or vehicle?',
                'answer' => 'We don\'t transport vehicles ourselves, but we can recommend trusted auto transport partners for long-distance moves. For local moves, most clients simply drive their vehicle to the new home.',
                'category' => 'restrictions',
                'sort_order' => 71,
            ],
        ];

        foreach ($faqs as $data) {
            $data['schema_eligible'] = true;
            $data['is_published'] = true;
            Faq::create($data);
        }
    }
}
