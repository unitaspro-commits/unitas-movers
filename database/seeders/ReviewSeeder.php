<?php

namespace Database\Seeders;

use App\Models\Area;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $services = Service::pluck('id', 'slug');
        $areas = Area::pluck('id', 'slug');

        $reviews = [
            // ── Featured Reviews (shown on homepage) ─────────────
            [
                'customer_name' => 'Sarah M.',
                'rating' => 5,
                'body' => 'Unitas Movers made our move from Tuscany to Airdrie completely stress-free. The crew arrived on time, wrapped everything carefully, and had us fully moved in by 3 PM. I was especially impressed with how they handled our piano — not a scratch. Will absolutely recommend to friends and family.',
                'service_id' => $services['residential-moving'] ?? null,
                'area_id' => $areas['tuscany'] ?? null,
                'source' => 'google',
                'is_featured' => true,
            ],
            [
                'customer_name' => 'James & Priya K.',
                'rating' => 5,
                'body' => 'We moved our entire 4-bedroom house from Signal Hill to Mahogany. The Unitas Movers team was professional from the first phone call to the last box. They disassembled and reassembled all our furniture, protected our hardwood floors, and even helped us rearrange the living room twice until we were happy. Outstanding service.',
                'service_id' => $services['residential-moving'] ?? null,
                'area_id' => $areas['signal-hill'] ?? null,
                'source' => 'google',
                'is_featured' => true,
            ],
            [
                'customer_name' => 'Marcus T.',
                'rating' => 5,
                'body' => 'Hired Unitas Movers for our office relocation downtown. They moved 15 desks, server equipment, and a boardroom table over a weekend so we didn\'t lose any business days. Everything was labelled and placed exactly where we wanted it. The project manager kept us updated throughout. Highly professional.',
                'service_id' => $services['commercial-moving'] ?? null,
                'area_id' => $areas['beltline'] ?? null,
                'source' => 'google',
                'is_featured' => true,
            ],
            [
                'customer_name' => 'Linda & Gary P.',
                'rating' => 5,
                'body' => 'After 35 years in our Edgemont home, downsizing to a condo was emotional. The Unitas Movers crew was incredibly patient and compassionate. They let us take our time, handled our antiques with genuine care, and even helped us figure out what would fit in the new place. I can\'t say enough good things.',
                'service_id' => $services['senior-moving'] ?? null,
                'area_id' => $areas['edgemont'] ?? null,
                'source' => 'homestars',
                'is_featured' => true,
            ],
            [
                'customer_name' => 'Emily R.',
                'rating' => 5,
                'body' => 'I\'ve used Unitas Movers three times now — two apartment moves in the Beltline and one move to a house in Marda Loop. Consistently excellent. They know the downtown buildings inside out, handle elevator bookings smoothly, and the crews are always friendly and efficient. My go-to movers in Calgary.',
                'service_id' => $services['apartment-moving'] ?? null,
                'area_id' => $areas['marda-loop'] ?? null,
                'source' => 'google',
                'is_featured' => true,
            ],

            // ── 5-Star Reviews ───────────────────────────────────
            [
                'customer_name' => 'David L.',
                'rating' => 5,
                'body' => 'Moved from a 2-bedroom condo in Mission to a townhouse in Copperfield. Two-person crew, done in under 4 hours. They were careful with my TV and artwork, used floor runners everywhere, and charged exactly what was quoted. No surprises, no damage. Perfect.',
                'service_id' => $services['condo-moving'] ?? null,
                'area_id' => $areas['mission'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Amandeep S.',
                'rating' => 5,
                'body' => 'Our family moved from NE Calgary to Saddleridge and Unitas Movers was fantastic. The crew spoke Punjabi which made my parents feel comfortable. They moved our entire house including a heavy treadmill from the basement — up the stairs without any wall damage. Very impressive.',
                'service_id' => $services['residential-moving'] ?? null,
                'area_id' => $areas['saddleridge'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Rachel & Mike D.',
                'rating' => 5,
                'body' => 'We had a last-minute move after our closing date changed. Unitas Movers fit us in with only 3 days notice and did an amazing job. The crew of three knocked out our 3-bedroom house in Varsity in about 5 hours. Professional, fast, and friendly. Saved us from a very stressful situation.',
                'service_id' => $services['same-day-moving'] ?? null,
                'area_id' => $areas['varsity'] ?? null,
                'source' => 'homestars',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Chen W.',
                'rating' => 5,
                'body' => 'Unitas Movers handled our piano move from Hillhurst to Lakeview. It\'s a 1920s upright that\'s been in the family for generations. They had the right equipment, moved it down a flight of stairs, and delivered it without a single issue. The piano tuner said it was in perfect shape after. Thank you!',
                'service_id' => $services['piano-moving'] ?? null,
                'area_id' => $areas['hillhurst'] ?? null,
                'source' => 'direct',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Fatima A.',
                'rating' => 5,
                'body' => 'First time using professional movers and I\'m so glad I chose Unitas. Moving from my Skyview Ranch apartment to a new house in Auburn Bay. They packed my kitchen (I hate packing!) and moved everything in one day. The packing was so well done that nothing was damaged. Worth every penny.',
                'service_id' => $services['packing-unpacking'] ?? null,
                'area_id' => $areas['auburn-bay'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Jordan B.',
                'rating' => 5,
                'body' => 'Moved from Calgary to Canmore — a mountain move that I was nervous about. The Unitas Movers crew handled the steep driveway and tight garage at the Canmore end like pros. They even wrapped my skis and mountain bikes individually. Everything arrived in perfect condition. Truly know what they\'re doing.',
                'service_id' => $services['long-distance-moving'] ?? null,
                'area_id' => $areas['canmore'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Tom & Heather N.',
                'rating' => 5,
                'body' => 'We hired Unitas for a full-service move from Discovery Ridge to Cochrane. They packed everything, moved it, and unpacked at the other end. With three kids and a dog, we couldn\'t have managed without them. The house was set up and liveable by bedtime. Exceptional service.',
                'service_id' => $services['residential-moving'] ?? null,
                'area_id' => $areas['discovery-ridge'] ?? null,
                'source' => 'homestars',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Olivia F.',
                'rating' => 5,
                'body' => 'Moved my small studio apartment in Bankview to a 1-bedroom in Kensington. The two-person crew was fast and efficient — done in about 2 hours. They even helped me move my heavy dresser up to the third floor walk-up. Great value for the price. Will use again when my lease is up.',
                'service_id' => $services['small-moves'] ?? null,
                'area_id' => $areas['kensington'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Robert & Nancy H.',
                'rating' => 5,
                'body' => 'Unitas Movers moved us from our Scenic Acres home of 22 years to a condo in Brentwood. The amount of stuff we had was embarrassing, but the crew never complained. They were patient, organized, and treated our belongings like their own. A special thank-you to the team lead who helped us decide what would fit.',
                'service_id' => $services['senior-moving'] ?? null,
                'area_id' => $areas['scenic-acres'] ?? null,
                'source' => 'direct',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Kevin O.',
                'rating' => 5,
                'body' => 'Had Unitas Movers move some heavy furniture pieces — a pool table, a sectional sofa, and a gun safe — from a house in Dalhousie. Just furniture, no boxes. They knew exactly how to handle each piece and had the right dollies and straps. Quick, professional, and damage-free.',
                'service_id' => $services['furniture-moving'] ?? null,
                'area_id' => $areas['dalhousie'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Stephanie C.',
                'rating' => 5,
                'body' => 'We needed an evening move because of work schedules — Unitas was one of the few companies that offered it. The crew arrived at 5 PM and had our 2-bedroom Killarney house loaded and unloaded at the Altadore house by 9:30 PM. Efficient, careful, and accommodating with our schedule.',
                'service_id' => $services['evening-weekend-moving'] ?? null,
                'area_id' => $areas['killarney'] ?? null,
                'source' => 'homestars',
                'is_featured' => false,
            ],

            // ── 4-Star Reviews (realistic mix) ───────────────────
            [
                'customer_name' => 'Derek J.',
                'rating' => 4,
                'body' => 'Good experience overall. Moved a 3-bedroom house from Cranston to McKenzie Towne. Crew was professional and careful with our furniture. The only reason for 4 stars instead of 5 is that they arrived about 30 minutes late due to a previous job running over. Once they started though, they were excellent and made up the time.',
                'service_id' => $services['residential-moving'] ?? null,
                'area_id' => $areas['cranston'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Nicole P.',
                'rating' => 4,
                'body' => 'Moved from Bridgeland to Bowness. The crew did a great job with the heavy lifting and was very friendly. I would have liked a bit more communication during the booking process — I had to follow up on my confirmation email. But the actual move day was smooth and professional. Would still recommend.',
                'service_id' => $services['local-moving'] ?? null,
                'area_id' => $areas['bridgeland'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Hassan M.',
                'rating' => 4,
                'body' => 'Used Unitas Movers for our move from Marlborough to Falconridge. Good value for the price and the crew was hardworking. They wrapped all the furniture in blankets and used floor protection. One small scuff on a wall during the move, but they were upfront about it and took responsibility. Honest company.',
                'service_id' => $services['local-moving'] ?? null,
                'area_id' => $areas['falconridge'] ?? null,
                'source' => 'homestars',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Brittany S.',
                'rating' => 4,
                'body' => 'Hired Unitas for a Calgary to Edmonton move. The long-distance process was well-organized — they gave us a detailed flat-rate quote and stuck to it. Everything arrived in good condition. Would have appreciated slightly better communication about the exact delivery window, but overall a solid experience.',
                'service_id' => $services['long-distance-moving'] ?? null,
                'area_id' => null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Michael & Andrea G.',
                'rating' => 4,
                'body' => 'Moved our family from Renfrew to Royal Oak. Three-person crew handled our 3-bedroom house efficiently. The guys were friendly and worked hard. Took about 5.5 hours. Only minor note: one box was placed in the wrong room, but easily sorted out. Happy with the service and the price was fair.',
                'service_id' => $services['residential-moving'] ?? null,
                'area_id' => $areas['royal-oak'] ?? null,
                'source' => 'direct',
                'is_featured' => false,
            ],

            // ── More 5-Star Reviews ──────────────────────────────
            [
                'customer_name' => 'Laura T.',
                'rating' => 5,
                'body' => 'Unitas Movers helped us relocate from Calgary to Okotoks. The move was seamless — they loaded our 4-bedroom house in the morning and had everything unloaded and placed by mid-afternoon. The crew lead even remembered where each piece of furniture was supposed to go from our walkthrough. Impressed!',
                'service_id' => $services['residential-moving'] ?? null,
                'area_id' => $areas['okotoks'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Chris & Danielle B.',
                'rating' => 5,
                'body' => 'Just moved into our first home in Walden from a Beltline apartment. Unitas Movers was patient with our condo building\'s strict elevator rules and handled the loading dock like they\'d done it a hundred times (they probably have!). Everything arrived in perfect condition at our new house. Couldn\'t be happier.',
                'service_id' => $services['apartment-moving'] ?? null,
                'area_id' => $areas['walden'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Raj P.',
                'rating' => 5,
                'body' => 'I run a dental practice and needed to move equipment to a new clinic space in NW Calgary. Unitas Movers handled our sensitive dental chairs, X-ray units, and office furniture with extreme care. They padded and wrapped everything individually. Zero damage. Their specialty moving team clearly knows what they\'re doing.',
                'service_id' => $services['specialty-moving'] ?? null,
                'area_id' => $areas['nw-calgary'] ?? null,
                'source' => 'direct',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Amanda & Steve L.',
                'rating' => 5,
                'body' => 'We moved from New Brighton to Chestermere with a hot tub, a home gym, and a workshop full of tools on top of a regular household. Unitas sent a four-person crew and they had everything loaded and unloaded in one day. The hot tub move alone was worth hiring professionals for. Fantastic job.',
                'service_id' => $services['specialty-moving'] ?? null,
                'area_id' => $areas['chestermere'] ?? null,
                'source' => 'homestars',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Paul V.',
                'rating' => 5,
                'body' => 'Needed to put some furniture and boxes in storage while between homes. Unitas Movers loaded everything into a storage unit, organized it so we could access things, and then moved it all out to our new place in Aspen Woods three weeks later. Both moves were smooth and reasonably priced.',
                'service_id' => $services['storage-solutions'] ?? null,
                'area_id' => $areas['aspen-woods'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Yuki N.',
                'rating' => 5,
                'body' => 'Small move from a furnished room in University Heights to a 1-bedroom apartment in Brentwood. I only had a bed, desk, dresser, and about 10 boxes. Unitas offered their small move rate which was very affordable. Two guys knocked it out in 90 minutes. Perfect for students and small moves.',
                'service_id' => $services['small-moves'] ?? null,
                'area_id' => $areas['university-heights'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Doug & Wendy K.',
                'rating' => 5,
                'body' => 'We needed help clearing out a deceased relative\'s home in South Calgary. Unitas Movers was incredibly respectful and sensitive to the situation. They helped us move the items we were keeping to our home and coordinated a donation pickup for the rest. Above and beyond what we expected from a moving company.',
                'service_id' => $services['junk-removal'] ?? null,
                'area_id' => $areas['south-calgary'] ?? null,
                'source' => 'direct',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Samira E.',
                'rating' => 5,
                'body' => 'Recently moved to Calgary from Vancouver and Unitas Movers handled the BC end pickup and delivery here in Douglasdale. The mountain highway drive was a concern but they assured us they do it regularly. Everything arrived on schedule and in perfect condition after 1,000 km through the Rockies. True professionals.',
                'service_id' => $services['long-distance-moving'] ?? null,
                'area_id' => $areas['douglasdale'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
            [
                'customer_name' => 'Tyler & Jess W.',
                'rating' => 5,
                'body' => 'Saturday afternoon move from Martindale to Cityscape. We needed weekend availability and Unitas was happy to accommodate. The two-person crew was fast and careful. They even helped us hook up the washer and dryer at the new place. Little things like that make a big difference. Five stars, no question.',
                'service_id' => $services['evening-weekend-moving'] ?? null,
                'area_id' => $areas['cityscape'] ?? null,
                'source' => 'google',
                'is_featured' => false,
            ],
        ];

        foreach ($reviews as $data) {
            $data['is_published'] = true;
            Review::create($data);
        }
    }
}
