<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    public function run(): void
    {
        // ── Quadrants ────────────────────────────────────────────
        $quadrants = $this->seedQuadrants();

        // ── Neighborhoods ────────────────────────────────────────
        $this->seedNeighborhoods($quadrants);

        // ── Surrounding Towns ────────────────────────────────────
        $this->seedTowns($quadrants);
    }

    private function seedQuadrants(): array
    {
        $quadrants = [
            [
                'slug' => 'nw-calgary',
                'name' => 'NW Calgary',
                'area_type' => 'quadrant',
                'meta_title' => 'NW Calgary Movers | Unitas Movers',
                'meta_description' => 'Trusted movers in NW Calgary. From Kensington to Tuscany, our licensed crews handle every neighbourhood. Free quotes — call today.',
                'h1' => 'Moving Services in Northwest Calgary',
                'body' => '<p>Northwest Calgary is one of the city\'s most diverse quadrants, stretching from the trendy inner-city streets of Kensington all the way to the family-oriented suburbs of Tuscany and Royal Oak near the Rocky Mountain foothills.</p>
<h2>Why People Move in NW Calgary</h2>
<p>The northwest attracts everyone from young professionals drawn to Kensington\'s walkable cafes and shops, to growing families who want newer homes in communities like Evanston and Sage Hill. The University of Calgary anchors the area\'s centre, making University Heights and Varsity popular with faculty and students alike.</p>
<h2>What to Expect from Your NW Calgary Move</h2>
<p>Homes in the inner northwest — Hillhurst, West Hillhurst, and Hounsfield Heights — tend to be older character homes on narrow streets, so our crews arrive with the right-sized trucks and protective gear. Further out, communities like Dalhousie, Edgemont, and Scenic Acres feature wider suburban streets and attached garages that make loading straightforward.</p>
<p>Whether you\'re upsizing from a Brentwood bungalow to a Tuscany two-storey or downsizing from Bowness to a condo in the core, Unitas Movers knows every corner of the northwest.</p>',
                'latitude' => 51.0800,
                'longitude' => -114.1300,
                'population' => null,
                'faq_json' => [
                    ['question' => 'How much does it cost to hire movers in NW Calgary?', 'answer' => 'Most NW Calgary moves start at $129/hour for a two-person crew with truck. The final cost depends on the size of your home and whether you need packing services.'],
                    ['question' => 'Do you serve all NW Calgary neighbourhoods?', 'answer' => 'Yes — we cover every NW community from Kensington and Hillhurst to Tuscany, Royal Oak, Evanston, and everywhere in between.'],
                    ['question' => 'Can you handle moves on narrow NW Calgary streets?', 'answer' => 'Absolutely. Our crews are experienced with the tight streets and back lanes in older NW neighbourhoods like Hillhurst and Hounsfield Heights.'],
                ],
                'is_published' => true,
                'sort_order' => 1,
            ],
            [
                'slug' => 'ne-calgary',
                'name' => 'NE Calgary',
                'area_type' => 'quadrant',
                'meta_title' => 'NE Calgary Movers | Unitas Movers',
                'meta_description' => 'Affordable NE Calgary movers. From Bridgeland to Skyview Ranch, we move families and businesses across the northeast. Free estimates.',
                'h1' => 'Professional Movers in Northeast Calgary',
                'body' => '<p>Northeast Calgary is the city\'s most culturally vibrant quadrant. From the established inner-city charm of Bridgeland and Renfrew to the rapidly growing master-planned communities along the northern edge, the NE offers some of Calgary\'s most affordable housing and strongest community spirit.</p>
<h2>Moving Trends in NE Calgary</h2>
<p>The northeast has experienced explosive growth over the past decade. Communities like Skyview Ranch, Cityscape, and Redstone are attracting first-time buyers and newcomers to Canada with brand-new homes at competitive prices. Meanwhile, Bridgeland has transformed into one of Calgary\'s hottest walkable neighbourhoods, with condos, restaurants, and river pathways.</p>
<h2>NE Calgary Moving Tips</h2>
<p>Many NE communities are close to the Calgary International Airport, so scheduling around flight paths and traffic patterns on 36 Street and Deerfoot Trail is something our dispatchers plan for. We\'re also experienced with the condo and townhouse complexes common in Saddleridge and Martindale, including elevator bookings and loading dock reservations.</p>
<p>Unitas Movers serves every NE neighbourhood with the same care and professionalism — no matter the size of the move.</p>',
                'latitude' => 51.0800,
                'longitude' => -114.0000,
                'population' => null,
                'faq_json' => [
                    ['question' => 'Do you move apartments and townhouses in NE Calgary?', 'answer' => 'Yes. Many NE communities have multi-family housing and we handle apartment, townhouse, and condo moves daily — including elevator bookings and loading dock coordination.'],
                    ['question' => 'Is NE Calgary hard to move in during rush hour?', 'answer' => 'Deerfoot Trail and 36 Street can get congested. We schedule NE moves to avoid peak traffic and plan efficient routes through the quadrant.'],
                    ['question' => 'What areas in NE Calgary do you serve?', 'answer' => 'We serve all NE communities including Bridgeland, Renfrew, Marlborough, Falconridge, Saddleridge, Skyview Ranch, Cityscape, Martindale, and more.'],
                ],
                'is_published' => true,
                'sort_order' => 2,
            ],
            [
                'slug' => 'sw-calgary',
                'name' => 'SW Calgary',
                'area_type' => 'quadrant',
                'meta_title' => 'SW Calgary Movers | Unitas Movers',
                'meta_description' => 'Expert movers for SW Calgary. Beltline, Marda Loop, Aspen Woods and beyond. Licensed, insured, and affordable. Get a free quote now.',
                'h1' => 'Trusted Moving Company in Southwest Calgary',
                'body' => '<p>Southwest Calgary is home to the city\'s most sought-after inner-city neighbourhoods and some of its most prestigious suburban communities. From the urban energy of the Beltline to the luxury estates of Aspen Woods, the SW quadrant offers an enormous range of housing — and moving challenges.</p>
<h2>Why SW Calgary Moves Are Unique</h2>
<p>The Beltline is Calgary\'s densest neighbourhood, packed with high-rise condos that require elevator reservations, loading dock scheduling, and careful furniture protection in tight corridors. Marda Loop and Altadore feature a mix of renovated bungalows and modern infills on relatively narrow streets. Further west, communities like Signal Hill, Discovery Ridge, and Aspen Woods have large executive homes that need full-service moving crews.</p>
<h2>Our SW Calgary Expertise</h2>
<p>We\'ve handled hundreds of moves in the southwest — from studio apartments on 17th Avenue to five-bedroom homes in Springbank Hill. Our crews know the parking restrictions on busy commercial streets, the elevator booking processes in downtown-adjacent towers, and the best routes to navigate Crowchild Trail and Sarcee Trail.</p>',
                'latitude' => 51.0200,
                'longitude' => -114.1300,
                'population' => null,
                'faq_json' => [
                    ['question' => 'How do you handle Beltline condo moves?', 'answer' => 'We coordinate elevator bookings, reserve loading docks, and protect common areas. Our crews are experienced with high-rise moves throughout the Beltline and downtown core.'],
                    ['question' => 'Do you move large homes in Aspen Woods and Signal Hill?', 'answer' => 'Yes. We have the crew sizes and truck capacity for large SW Calgary homes, including specialty items like pianos, hot tubs, and home gym equipment.'],
                    ['question' => 'What is the average cost of a move in SW Calgary?', 'answer' => 'SW Calgary moves typically range from $400 to $2,000+ depending on home size, distance, and services needed. Contact us for a free custom estimate.'],
                ],
                'is_published' => true,
                'sort_order' => 3,
            ],
            [
                'slug' => 'se-calgary',
                'name' => 'SE Calgary',
                'area_type' => 'quadrant',
                'meta_title' => 'SE Calgary Movers | Unitas Movers',
                'meta_description' => 'Reliable SE Calgary movers. Mahogany, Cranston, McKenzie Towne and all SE communities. Insured crews, fair pricing. Book your free quote.',
                'h1' => 'Movers in Southeast Calgary',
                'body' => '<p>Southeast Calgary has been one of the city\'s fastest-growing areas for over a decade. Master-planned communities like Mahogany, Auburn Bay, and Cranston have drawn thousands of families with their lakes, pathways, and modern amenities. The SE also includes established areas like Douglasdale and McKenzie Towne that offer mature trees and strong community identity.</p>
<h2>What Makes SE Calgary Moves Different</h2>
<p>Most SE communities were built after 2000, which means wider streets, attached double garages, and open-concept floor plans — all of which make moving day smoother. However, the distance from the city core means longer drive times, so we plan our truck routes carefully to keep your costs down.</p>
<h2>Communities We Serve in SE Calgary</h2>
<p>From the lakeside homes of Mahogany and Auburn Bay to the charming streets of McKenzie Towne, from the newer builds of Walden and Legacy to the established feel of Douglasdale — we serve every SE community. Our crews are especially familiar with HOA and condo board requirements in lake communities where moving access may be restricted.</p>',
                'latitude' => 50.9600,
                'longitude' => -113.9800,
                'population' => null,
                'faq_json' => [
                    ['question' => 'Do you serve the lake communities in SE Calgary?', 'answer' => 'Yes — we regularly move families in and out of Mahogany, Auburn Bay, and other lake communities. We handle HOA requirements and restricted access scheduling.'],
                    ['question' => 'Is it more expensive to move in SE Calgary due to distance?', 'answer' => 'SE communities are further from downtown, but our efficient routing keeps costs competitive. We provide transparent pricing with no hidden fees.'],
                    ['question' => 'Can you move us within the same SE neighbourhood?', 'answer' => 'Absolutely. Local moves within the same community are some of our most popular bookings. Short-distance moves are fast and affordable.'],
                ],
                'is_published' => true,
                'sort_order' => 4,
            ],
        ];

        $result = [];
        foreach ($quadrants as $data) {
            $result[$data['slug']] = Area::create($data);
        }

        return $result;
    }

    private function seedNeighborhoods(array $quadrants): void
    {
        $sortOrder = 10;

        // ── NW Calgary Neighbourhoods ────────────────────────────
        $nwNeighborhoods = [
            [
                'slug' => 'kensington',
                'name' => 'Kensington',
                'meta_title' => 'Kensington Movers Calgary | Unitas Movers',
                'meta_description' => 'Local movers in Kensington, Calgary. Condos, apartments, and character homes. Licensed and insured. Get your free moving quote today.',
                'h1' => 'Movers in Kensington, Calgary',
                'body' => '<p>Kensington is one of Calgary\'s most walkable and vibrant inner-city neighbourhoods, sitting just north of the Bow River and minutes from downtown. Known for its eclectic shops, independent cafes, and tree-lined streets, Kensington draws young professionals, students, and anyone who values an urban lifestyle without the downtown price tag.</p>
<h2>Moving in Kensington</h2>
<p>Housing in Kensington ranges from older low-rise apartment buildings and character homes to modern condo developments. Street parking can be limited, especially along Kensington Road and 10th Street NW, so Unitas Movers coordinates parking permits and timing to ensure a smooth move day.</p>
<h2>Why Choose Unitas Movers for Your Kensington Move</h2>
<p>We\'ve moved hundreds of Kensington residents and know the neighbourhood inside out — from navigating narrow back lanes to protecting hardwood floors in century-old homes. Whether you\'re moving into a studio apartment above a Kensington shop or a renovated character home on a side street, our crews handle it with care.</p>',
                'latitude' => 51.0530,
                'longitude' => -114.0900,
                'population' => 4700,
                'faq_json' => [
                    ['question' => 'Is parking an issue for movers in Kensington?', 'answer' => 'Street parking in Kensington can be tight. We help coordinate temporary parking permits and schedule moves during lower-traffic times.'],
                    ['question' => 'Do you move small apartments in Kensington?', 'answer' => 'Yes — studio and one-bedroom apartment moves are some of our most common Kensington bookings. We offer competitive hourly rates for smaller moves.'],
                    ['question' => 'How far is Kensington from downtown Calgary?', 'answer' => 'Kensington is directly across the Bow River from downtown — about a 5-minute drive or a short walk across the Peace Bridge.'],
                ],
            ],
            [
                'slug' => 'hillhurst',
                'name' => 'Hillhurst',
                'meta_title' => 'Hillhurst Movers Calgary | Unitas Movers',
                'meta_description' => 'Professional movers in Hillhurst, Calgary. Character homes and infills handled with care. Licensed, insured. Free estimates available.',
                'h1' => 'Hillhurst Moving Company in Calgary',
                'body' => '<p>Hillhurst is a mature inner-city neighbourhood adjacent to Kensington, known for its tree-lined streets, character homes dating back to the early 1900s, and a growing number of modern infills. It\'s one of Calgary\'s most desirable communities for families and professionals who want inner-city living with a neighbourhood feel.</p>
<h2>Moving Considerations in Hillhurst</h2>
<p>Hillhurst\'s older homes often feature narrow staircases, uneven floors, and back-lane access only. Modern infills can be tall and narrow with tight interior layouts. Our crews bring the right protective materials — floor runners, banister pads, and corner guards — to handle both styles of home.</p>
<p>Street parking is residential permit-only in many blocks, so we arrange temporary permits in advance. Moves during weekday mornings tend to be smoothest when neighbourhood traffic is lightest.</p>',
                'latitude' => 51.0560,
                'longitude' => -114.0930,
                'population' => 6500,
                'faq_json' => [
                    ['question' => 'Can you move furniture out of older Hillhurst homes with narrow stairs?', 'answer' => 'Yes. Our crews are trained to navigate narrow staircases, tight doorways, and back-lane access common in Hillhurst\'s older homes.'],
                    ['question' => 'Do I need a parking permit for movers in Hillhurst?', 'answer' => 'Many Hillhurst blocks require residential parking permits. We can help arrange temporary permits so our truck has guaranteed access on moving day.'],
                    ['question' => 'What does a typical Hillhurst move cost?', 'answer' => 'A two-bedroom Hillhurst home typically costs between $400 and $900 to move, depending on stairs, distance, and packing needs.'],
                ],
            ],
            [
                'slug' => 'university-heights',
                'name' => 'University Heights',
                'meta_title' => 'University Heights Movers | Unitas Movers',
                'meta_description' => 'Movers near the University of Calgary. Student and faculty moves in University Heights. Fast, affordable, licensed. Book online.',
                'h1' => 'University Heights Moving Services',
                'body' => '<p>University Heights sits directly adjacent to the University of Calgary campus, making it one of the city\'s most convenient locations for students, faculty, and hospital workers at the nearby Foothills Medical Centre. The neighbourhood is quiet and residential, with a mix of single-family homes and low-rise apartments.</p>
<h2>Moving Near the University of Calgary</h2>
<p>September and April are peak moving months in University Heights as the academic calendar drives turnover. We recommend booking early during these periods. Many residents are moving relatively small loads — dorm rooms, shared apartments, or starter homes — so we offer flexible crew sizes and hourly rates to keep costs down.</p>
<p>The neighbourhood\'s proximity to Crowchild Trail provides easy access for our trucks, and the residential streets are generally wide enough for comfortable loading.</p>',
                'latitude' => 51.0690,
                'longitude' => -114.1230,
                'population' => 3200,
                'faq_json' => [
                    ['question' => 'Do you offer student moving rates near U of C?', 'answer' => 'We offer competitive hourly rates that work well for smaller student moves. A one-bedroom move can often be completed in 2-3 hours.'],
                    ['question' => 'When is the busiest time for moves in University Heights?', 'answer' => 'September (start of fall term) and April (end of winter term) are the busiest. Book at least two weeks in advance during these months.'],
                    ['question' => 'Can you help with a partial move or just heavy items?', 'answer' => 'Yes — we offer labour-only services where our crew moves specific heavy items like couches, beds, or desks without a full-home move.'],
                ],
            ],
            [
                'slug' => 'varsity',
                'name' => 'Varsity',
                'meta_title' => 'Varsity Movers Calgary | Unitas Movers',
                'meta_description' => 'Trusted movers in Varsity, Calgary. Bungalows, splits, and townhomes. Close to U of C and Market Mall. Free moving quotes.',
                'h1' => 'Movers in Varsity, Calgary',
                'body' => '<p>Varsity is a well-established NW Calgary neighbourhood built primarily in the 1960s and 70s, sitting between the University of Calgary and Market Mall. It\'s popular with families, retirees, and professionals who appreciate mature trees, generous lot sizes, and excellent access to transit and shopping.</p>
<h2>Moving in Varsity</h2>
<p>Varsity is predominantly single-family homes — bungalows, side-splits, and bi-levels — with some townhouse complexes and low-rise condos near Crowchild Trail. The neighbourhood\'s wide residential streets and back-lane garage access make loading and unloading straightforward for our crews.</p>
<p>Many Varsity moves involve downsizing retirees or families upgrading to larger homes in newer NW suburbs. We offer packing services, furniture disassembly, and careful handling of antiques and valuables that have accumulated over decades in these homes.</p>',
                'latitude' => 51.0740,
                'longitude' => -114.1370,
                'population' => 8200,
                'faq_json' => [
                    ['question' => 'Do you help with downsizing moves in Varsity?', 'answer' => 'Yes — we help many Varsity retirees downsize. We offer packing, sorting assistance, and can coordinate donations or disposal of items you no longer need.'],
                    ['question' => 'How long does a typical Varsity move take?', 'answer' => 'A three-bedroom Varsity bungalow typically takes 4-6 hours with a two-person crew. Larger homes or moves requiring packing may take a full day.'],
                    ['question' => 'Is Varsity close to major roads for moving trucks?', 'answer' => 'Yes — Varsity has excellent access via Crowchild Trail, Shaganappi Trail, and Varsity Drive, making truck routing efficient.'],
                ],
            ],
            [
                'slug' => 'brentwood',
                'name' => 'Brentwood',
                'meta_title' => 'Brentwood Movers Calgary | Unitas Movers',
                'meta_description' => 'Moving in Brentwood, Calgary? Licensed movers near U of C and Brentwood Village. Affordable rates, careful crews. Get a free quote.',
                'h1' => 'Brentwood Calgary Moving Services',
                'body' => '<p>Brentwood is a mature NW Calgary neighbourhood conveniently located near the University of Calgary, Brentwood Village Mall, and the Brentwood CTrain station. Built mainly in the 1960s, the community is experiencing significant redevelopment as older bungalows make way for modern infills and townhomes.</p>
<h2>Moving in Brentwood</h2>
<p>The mix of original bungalows and new builds means Unitas Movers handles a wide variety of moves here — from compact bungalow cleanouts to loading brand-new infills with contemporary furniture. Construction activity on some blocks can affect parking and access, so we scout conditions in advance.</p>
<p>The Brentwood CTrain station makes this area popular with commuters, and the nearby shops and schools make it a strong family neighbourhood. Whether you\'re arriving or leaving, our crews know Brentwood\'s streets and can plan an efficient move.</p>',
                'latitude' => 51.0860,
                'longitude' => -114.1280,
                'population' => 5100,
                'faq_json' => [
                    ['question' => 'Is construction in Brentwood a problem for moving trucks?', 'answer' => 'Some Brentwood blocks have active redevelopment. We check conditions before your move day and plan access and parking accordingly.'],
                    ['question' => 'How close is Brentwood to downtown Calgary?', 'answer' => 'Brentwood is about 15 minutes from downtown by car and even faster by CTrain — the Brentwood station is right in the neighbourhood.'],
                    ['question' => 'Do you move infill homes in Brentwood?', 'answer' => 'Yes — we\'re experienced with the narrow layouts and multiple levels typical of Brentwood\'s newer infill homes.'],
                ],
            ],
            [
                'slug' => 'dalhousie',
                'name' => 'Dalhousie',
                'meta_title' => 'Dalhousie Movers Calgary | Unitas Movers',
                'meta_description' => 'Reliable movers in Dalhousie, NW Calgary. Family homes, CTrain access. Licensed and insured. Call for a free moving quote.',
                'h1' => 'Dalhousie Moving Company — NW Calgary',
                'body' => '<p>Dalhousie is a family-friendly NW Calgary neighbourhood known for its excellent schools, the Dalhousie CTrain station, and easy access to Nose Hill Park. Developed in the 1970s, it offers a mix of single-family homes, townhouses, and apartment buildings at relatively affordable prices for the northwest.</p>
<h2>What to Know About Moving in Dalhousie</h2>
<p>Dalhousie\'s residential streets are well-maintained and wide enough for moving trucks. Most homes feature attached or detached garages with back-lane access. The neighbourhood\'s proximity to Crowchild Trail and Shaganappi Trail makes it easy for our trucks to get in and out efficiently.</p>
<p>Popular moves in Dalhousie include families moving to larger homes in newer NW suburbs and young buyers purchasing their first home here thanks to Dalhousie\'s relative affordability. Whatever your reason for moving, Unitas Movers provides careful, professional service.</p>',
                'latitude' => 51.1050,
                'longitude' => -114.1570,
                'population' => 10500,
                'faq_json' => [
                    ['question' => 'Do you serve the Dalhousie townhouse complexes?', 'answer' => 'Yes — we frequently move residents in and out of Dalhousie\'s townhouse and condo complexes, handling stair carries and tight parking lots.'],
                    ['question' => 'What is the average home size in Dalhousie?', 'answer' => 'Most Dalhousie homes are three to four bedrooms. A typical move takes 4-6 hours with a two or three-person crew.'],
                    ['question' => 'Can I get same-day movers in Dalhousie?', 'answer' => 'We sometimes have same-day availability. Call us and we\'ll do our best to fit you in, though booking a few days ahead is recommended.'],
                ],
            ],
            [
                'slug' => 'edgemont',
                'name' => 'Edgemont',
                'meta_title' => 'Edgemont Movers Calgary | Unitas Movers',
                'meta_description' => 'Professional movers in Edgemont, NW Calgary. Family homes near Nose Hill Park. Affordable, insured. Get your free estimate today.',
                'h1' => 'Movers in Edgemont, NW Calgary',
                'body' => '<p>Edgemont is one of NW Calgary\'s most popular family suburbs, perched along the western edge of Nose Hill Park. Developed through the 1980s and 90s, it offers spacious single-family homes, quiet crescents, and some of the best park access in the city.</p>
<h2>Moving in Edgemont</h2>
<p>Edgemont homes tend to be larger — three to five bedrooms with finished basements and double garages. Many sit on crescent streets or cul-de-sacs, which can require careful truck positioning. Our drivers are experienced with Edgemont\'s layout and know which streets have the best access points.</p>
<p>The neighbourhood connects easily to Shaganappi Trail and Sarcee Trail, giving our trucks efficient routes whether you\'re moving across the city or to a nearby community. Edgemont\'s generous lot sizes and wide driveways make loading and unloading comfortable.</p>',
                'latitude' => 51.1180,
                'longitude' => -114.1620,
                'population' => 14500,
                'faq_json' => [
                    ['question' => 'Can you navigate cul-de-sacs in Edgemont?', 'answer' => 'Absolutely. Our drivers are experienced with Edgemont\'s crescents and cul-de-sacs, and we choose the right truck size to manoeuvre comfortably.'],
                    ['question' => 'Do Edgemont moves cost more because of large homes?', 'answer' => 'Larger homes take more time, but our hourly rates stay the same. We\'ll provide an accurate estimate based on your home size and items.'],
                    ['question' => 'Is Edgemont a good neighbourhood for families?', 'answer' => 'Edgemont is one of Calgary\'s top family neighbourhoods, with excellent schools, parks, and pathway access to Nose Hill Park.'],
                ],
            ],
            [
                'slug' => 'tuscany',
                'name' => 'Tuscany',
                'meta_title' => 'Tuscany Movers Calgary | Unitas Movers',
                'meta_description' => 'Movers in Tuscany, NW Calgary. Family-friendly community near the mountains. Licensed, insured, affordable. Free moving quotes.',
                'h1' => 'Tuscany Calgary Moving Services',
                'body' => '<p>Tuscany is a master-planned community in Calgary\'s far northwest, bordering the Rocky Mountain foothills. Developed from the late 1990s onward, it\'s one of NW Calgary\'s largest and most popular family suburbs, with its own CTrain station, schools, shopping, and stunning mountain views.</p>
<h2>What Makes Tuscany Moves Unique</h2>
<p>Tuscany homes are generally newer — most built between 1998 and 2015 — with open floor plans, double garages, and well-maintained exteriors. The neighbourhood\'s wide streets and good infrastructure make it very moving-truck-friendly.</p>
<p>However, Tuscany\'s location on the city\'s western edge means that moves to or from the south or east side of Calgary involve longer drive times. We factor this into our estimates transparently so there are no surprises. The Tuscany CTrain station and easy access to Stoney Trail keep the area well-connected despite its edge-of-city location.</p>',
                'latitude' => 51.1280,
                'longitude' => -114.2240,
                'population' => 17000,
                'faq_json' => [
                    ['question' => 'Is Tuscany far from downtown Calgary?', 'answer' => 'Tuscany is about 25 minutes from downtown by car or CTrain. We account for drive distance in our estimates so you know the full cost upfront.'],
                    ['question' => 'Do you offer packing services for Tuscany moves?', 'answer' => 'Yes — we offer full packing, partial packing, and packing supply delivery for Tuscany residents planning their move.'],
                    ['question' => 'When is the best time to move in Tuscany?', 'answer' => 'Weekdays are typically quieter. Summer months (June-August) are busiest across Calgary, so booking 2-3 weeks ahead is wise.'],
                ],
            ],
            [
                'slug' => 'royal-oak',
                'name' => 'Royal Oak',
                'meta_title' => 'Royal Oak Movers Calgary | Unitas Movers',
                'meta_description' => 'Royal Oak Calgary movers you can trust. New homes, families, quick access to Stoney Trail. Insured crews. Get a free moving quote.',
                'h1' => 'Moving Company in Royal Oak, Calgary',
                'body' => '<p>Royal Oak is a newer NW Calgary community anchored by the Royal Oak shopping district and its own CTrain station. With a mix of single-family homes, townhouses, and condos, it attracts a diverse range of residents — from first-time buyers to established families.</p>
<h2>Moving in Royal Oak</h2>
<p>Royal Oak\'s modern streetscapes are designed with accessibility in mind. Wide roads, ample driveway space, and attached garages make moving day straightforward. The community sits right along Stoney Trail, giving our trucks fast access to any part of the city.</p>
<p>Many Royal Oak moves involve young families upgrading from condos to single-family homes within the same community, or new residents relocating from other parts of Calgary to take advantage of the area\'s amenities, transit access, and proximity to Crowfoot Crossing and the mountains.</p>',
                'latitude' => 51.1250,
                'longitude' => -114.2090,
                'population' => 11000,
                'faq_json' => [
                    ['question' => 'How much does a typical Royal Oak move cost?', 'answer' => 'A three-bedroom Royal Oak home typically costs $500 to $1,200 depending on distance and services. We provide free, no-obligation estimates.'],
                    ['question' => 'Can you move us from a condo to a house in Royal Oak?', 'answer' => 'Yes — condo-to-house moves within Royal Oak are very common for us. We handle elevator bookings and furniture assembly/disassembly.'],
                    ['question' => 'Do you provide moving supplies in Royal Oak?', 'answer' => 'We can deliver boxes, tape, bubble wrap, and wardrobe boxes to your Royal Oak home before moving day.'],
                ],
            ],
            [
                'slug' => 'scenic-acres',
                'name' => 'Scenic Acres',
                'meta_title' => 'Scenic Acres Movers Calgary | Unitas Movers',
                'meta_description' => 'Movers in Scenic Acres, NW Calgary. Quiet family neighbourhood, larger homes. Licensed, insured, affordable. Free estimates.',
                'h1' => 'Scenic Acres Moving Services — NW Calgary',
                'body' => '<p>Scenic Acres is a quiet, mature NW Calgary suburb tucked between Crowchild Trail and Stoney Trail. Built through the 1980s and 90s, it\'s prized for its tranquil residential streets, spacious lots, and proximity to both the mountains and the city core.</p>
<h2>Moving in Scenic Acres</h2>
<p>Homes here tend to be well-maintained three to five-bedroom properties with finished basements and large yards. Many residents have lived in Scenic Acres for decades, meaning moves often involve significant accumulations — full basements, workshops, and outdoor equipment.</p>
<p>We offer packing services, furniture disassembly, and careful handling of large items like pool tables, home gyms, and workshop equipment. Scenic Acres\' tree-lined streets and gentle curves are navigable with our right-sized trucks.</p>',
                'latitude' => 51.1090,
                'longitude' => -114.2070,
                'population' => 7800,
                'faq_json' => [
                    ['question' => 'Can you move heavy workshop equipment from a Scenic Acres home?', 'answer' => 'Yes — we regularly move heavy items like workshop tools, home gym equipment, and pool tables from Scenic Acres basements.'],
                    ['question' => 'Do you offer full packing for Scenic Acres moves?', 'answer' => 'Absolutely. We offer full packing services where our crew packs your entire home, or partial packing for just the items you need help with.'],
                    ['question' => 'How do I prepare for a large Scenic Acres move?', 'answer' => 'Start packing non-essentials two weeks before. Label all boxes by room. We\'ll handle the heavy lifting and logistics on move day.'],
                ],
            ],
            [
                'slug' => 'bowness',
                'name' => 'Bowness',
                'meta_title' => 'Bowness Movers Calgary | Unitas Movers',
                'meta_description' => 'Affordable movers in Bowness, Calgary. Charming riverside community. Licensed and insured crews. Call for your free moving estimate.',
                'h1' => 'Professional Movers in Bowness, Calgary',
                'body' => '<p>Bowness is one of Calgary\'s most distinctive neighbourhoods — a charming, established community along the Bow River with its own main street (Bowness Road), independent shops, and a strong sense of local identity. Originally a separate town before being annexed by Calgary in 1964, Bowness retains a small-town feel.</p>
<h2>Bowness Moving Considerations</h2>
<p>The neighbourhood features a wide range of housing, from modest bungalows and wartime-era homes to newer infills and riverside properties. Some Bowness streets are narrow with mature trees creating canopy coverage — our crews are skilled at navigating these conditions.</p>
<p>Bowness Park and the Bow River pathways make this area incredibly popular, and new residents are drawn by the affordable prices relative to other inner-city areas. Whether you\'re moving into a cozy bungalow or a modern infill, Unitas Movers handles your belongings with care.</p>',
                'latitude' => 51.0850,
                'longitude' => -114.1920,
                'population' => 9600,
                'faq_json' => [
                    ['question' => 'Is Bowness considered inner-city Calgary?', 'answer' => 'Yes — Bowness is an inner-city neighbourhood about 15 minutes from downtown, with its own main street and community character.'],
                    ['question' => 'Are Bowness homes hard to move because of narrow streets?', 'answer' => 'Some Bowness streets are narrow with mature trees. Our drivers select the appropriate truck size and route for your specific address.'],
                    ['question' => 'What is the average home price when moving to Bowness?', 'answer' => 'We\'re movers, not realtors — but Bowness offers some of the most affordable inner-city housing in Calgary, which keeps it a popular moving destination.'],
                ],
            ],
        ];

        foreach ($nwNeighborhoods as $n) {
            $n['area_type'] = 'neighborhood';
            $n['parent_id'] = $quadrants['nw-calgary']->id;
            $n['is_published'] = true;
            $n['sort_order'] = $sortOrder++;
            Area::create($n);
        }

        // ── NE Calgary Neighbourhoods ────────────────────────────
        $neNeighborhoods = [
            [
                'slug' => 'bridgeland',
                'name' => 'Bridgeland',
                'meta_title' => 'Bridgeland Movers Calgary | Unitas Movers',
                'meta_description' => 'Expert movers in Bridgeland, Calgary. Condos, townhomes, character homes near downtown. Licensed, insured. Get a free quote today.',
                'h1' => 'Movers in Bridgeland, Calgary',
                'body' => '<p>Bridgeland is one of Calgary\'s most sought-after inner-city neighbourhoods, sitting on a hill overlooking the Bow River just northeast of downtown. Once a quiet working-class community, Bridgeland has transformed into a trendy, walkable neighbourhood packed with restaurants, cafes, boutiques, and stunning river views.</p>
<h2>Moving in Bridgeland</h2>
<p>Bridgeland\'s housing mix includes older character homes, modern condo buildings, and new infill townhomes. The Bridgeland-Memorial CTrain station provides excellent transit access. Street parking can be competitive, especially near 1st Avenue NE, so we coordinate timing and permits for a stress-free move.</p>
<p>The neighbourhood\'s hilly terrain means some properties have significant elevation changes from street to front door. Our crews are equipped with dollies, ramps, and stair-climbing equipment to handle these conditions safely.</p>',
                'latitude' => 51.0550,
                'longitude' => -114.0430,
                'population' => 6200,
                'faq_json' => [
                    ['question' => 'Do you handle condo moves in Bridgeland?', 'answer' => 'Yes — we regularly move residents in Bridgeland\'s condo buildings. We coordinate elevator bookings and building access requirements.'],
                    ['question' => 'Is Bridgeland hilly for moving?', 'answer' => 'Some Bridgeland properties have steep driveways or stairs from the street. Our crews bring the right equipment to handle elevation changes safely.'],
                    ['question' => 'How close is Bridgeland to downtown?', 'answer' => 'Bridgeland is a five-minute drive or short CTrain ride from downtown Calgary — one of the closest NE communities to the core.'],
                ],
            ],
            [
                'slug' => 'renfrew',
                'name' => 'Renfrew',
                'meta_title' => 'Renfrew Movers Calgary | Unitas Movers',
                'meta_description' => 'Professional movers in Renfrew, NE Calgary. Infills and character homes near Edmonton Trail. Insured, affordable. Free quotes.',
                'h1' => 'Renfrew Calgary Moving Services',
                'body' => '<p>Renfrew is a rapidly evolving inner-city neighbourhood in NE Calgary, centred around Edmonton Trail. Once primarily older bungalows, Renfrew has seen a surge of modern infill development, creating a neighbourhood that blends heritage character with contemporary design. The 9th Avenue corridor provides commercial amenities, and the community is close to Bridgeland and downtown.</p>
<h2>Moving in Renfrew</h2>
<p>Renfrew moves often involve either clearing out an older bungalow or moving into a brand-new infill with multiple levels and a narrow footprint. Our crews are adept at both — carefully protecting vintage hardwood in older homes and navigating the tight staircases typical of modern infills.</p>
<p>Edmonton Trail and 4th Street NE provide good truck access, though some interior streets have permit parking that we arrange in advance.</p>',
                'latitude' => 51.0580,
                'longitude' => -114.0370,
                'population' => 4800,
                'faq_json' => [
                    ['question' => 'Do you handle moves in Renfrew infill homes?', 'answer' => 'Yes — Renfrew\'s narrow infills with multiple floors are something we handle regularly. We bring the right crew size and equipment for tight layouts.'],
                    ['question' => 'Is parking available for moving trucks in Renfrew?', 'answer' => 'Some Renfrew streets have permit parking. We arrange temporary permits in advance so our truck is guaranteed a spot near your home.'],
                    ['question' => 'What makes Renfrew a popular neighbourhood?', 'answer' => 'Renfrew offers inner-city convenience with easy access to downtown, Bridgeland restaurants, and transit — all at prices below the southwest.'],
                ],
            ],
            [
                'slug' => 'marlborough',
                'name' => 'Marlborough',
                'meta_title' => 'Marlborough Movers Calgary | Unitas Movers',
                'meta_description' => 'Affordable movers in Marlborough, NE Calgary. Houses and apartments near Marlborough Mall. Insured crews. Free moving quotes.',
                'h1' => 'Marlborough Moving Company — NE Calgary',
                'body' => '<p>Marlborough is a well-established NE Calgary neighbourhood centred around Marlborough Mall and the Marlborough CTrain station. Built in the 1960s and 70s, it offers affordable housing options including single-family homes, townhouses, and apartment complexes — making it one of the most accessible communities in the city.</p>
<h2>Moving in Marlborough</h2>
<p>Marlborough\'s straightforward street grid and ample parking make moving logistics simple. Most homes have single or double garages with back-lane access. The neighbourhood is close to major routes including Memorial Drive and 36 Street NE, giving our trucks efficient access to other parts of the city.</p>
<p>We see many first-time homebuyers and newcomers to Calgary choosing Marlborough for its affordability and transit access. Whatever brings you here, Unitas Movers provides professional, friendly service at competitive rates.</p>',
                'latitude' => 51.0520,
                'longitude' => -113.9800,
                'population' => 9100,
                'faq_json' => [
                    ['question' => 'Do you serve the apartment buildings in Marlborough?', 'answer' => 'Yes — we handle apartment moves throughout Marlborough, including buildings near Marlborough Mall and the CTrain station.'],
                    ['question' => 'Is Marlborough an affordable area to move to?', 'answer' => 'Marlborough offers some of the most affordable housing in Calgary with great transit access — making it popular with first-time buyers and renters.'],
                    ['question' => 'How long does a Marlborough move typically take?', 'answer' => 'A standard three-bedroom Marlborough home takes about 3-5 hours. Apartments are faster, typically 2-3 hours.'],
                ],
            ],
            [
                'slug' => 'falconridge',
                'name' => 'Falconridge',
                'meta_title' => 'Falconridge Movers Calgary | Unitas Movers',
                'meta_description' => 'Trusted movers in Falconridge, NE Calgary. Family homes near Prairie Winds Park. Licensed, insured. Get your free estimate today.',
                'h1' => 'Movers in Falconridge, NE Calgary',
                'body' => '<p>Falconridge is a vibrant, multicultural neighbourhood in NE Calgary, known for its strong community spirit and proximity to Prairie Winds Park. Built in the 1980s, it features primarily single-family homes and townhouses at prices that make it one of the most affordable family communities in the city.</p>
<h2>Moving in Falconridge</h2>
<p>Falconridge\'s residential streets are well-planned with good truck access. Most homes are split-levels or two-storeys with attached garages. The community\'s location near 52 Street NE and Falconridge Boulevard provides efficient access for our moving trucks.</p>
<p>We serve Falconridge residents with the same professionalism and care as any neighbourhood in Calgary. Our multicultural crews speak several languages and are committed to making your moving day stress-free.</p>',
                'latitude' => 51.0780,
                'longitude' => -113.9570,
                'population' => 11200,
                'faq_json' => [
                    ['question' => 'Do your movers speak languages other than English?', 'answer' => 'Our diverse crews include members who speak Punjabi, Hindi, Urdu, and other languages. Let us know your preference when booking.'],
                    ['question' => 'Is Falconridge far from downtown Calgary?', 'answer' => 'Falconridge is about 20 minutes from downtown via Memorial Drive or Deerfoot Trail. Transit access via the CTrain blue line is also nearby.'],
                    ['question' => 'What size trucks do you use for Falconridge moves?', 'answer' => 'We match truck size to your move. Most Falconridge homes work well with our 20-26 foot trucks, which navigate residential streets easily.'],
                ],
            ],
            [
                'slug' => 'saddleridge',
                'name' => 'Saddleridge',
                'meta_title' => 'Saddleridge Movers Calgary | Unitas Movers',
                'meta_description' => 'Reliable movers in Saddleridge, NE Calgary. New homes, growing community. Insured, affordable, professional. Book a free quote today.',
                'h1' => 'Saddleridge Calgary Moving Company',
                'body' => '<p>Saddleridge is one of NE Calgary\'s largest and fastest-growing communities, developed from the mid-2000s onward. With affordable new homes, shopping centres, and easy access to Stoney Trail and the airport, it\'s become a top destination for young families and newcomers to Calgary.</p>
<h2>Moving in Saddleridge</h2>
<p>Saddleridge\'s modern street layout makes moving straightforward. Homes are primarily two-storey with double attached garages and wide driveways — ideal for loading and unloading. The community is near the Saddletowne CTrain station and Genesis Centre recreation facility.</p>
<p>Many Saddleridge moves involve families relocating from apartments or townhouses elsewhere in NE Calgary into their first detached home. We handle these transitions every week and can provide full-service moving including packing, furniture assembly, and appliance connections.</p>',
                'latitude' => 51.1160,
                'longitude' => -113.9530,
                'population' => 18000,
                'faq_json' => [
                    ['question' => 'Do you offer full-service moves in Saddleridge?', 'answer' => 'Yes — we offer packing, loading, transport, unloading, unpacking, and furniture assembly. You can choose any combination of services.'],
                    ['question' => 'How far is Saddleridge from the Calgary airport?', 'answer' => 'Saddleridge is about 10-15 minutes from Calgary International Airport, making it popular with frequent travellers and airport workers.'],
                    ['question' => 'Are Saddleridge homes easy to move in and out of?', 'answer' => 'Yes — most Saddleridge homes have wide driveways, double garages, and open floor plans that make moving day efficient.'],
                ],
            ],
            [
                'slug' => 'skyview-ranch',
                'name' => 'Skyview Ranch',
                'meta_title' => 'Skyview Ranch Movers Calgary | Unitas Movers',
                'meta_description' => 'Moving to Skyview Ranch? Affordable NE Calgary movers. New homes, great value. Licensed, insured crews. Get a free quote.',
                'h1' => 'Movers in Skyview Ranch, Calgary',
                'body' => '<p>Skyview Ranch is one of Calgary\'s newest NE communities, located near the city\'s northern boundary along Stoney Trail. Since development began around 2007, it has grown rapidly with affordable single-family homes, townhomes, and condos attracting young families and first-time buyers.</p>
<h2>Moving in Skyview Ranch</h2>
<p>As a newer community, Skyview Ranch has wide streets, modern infrastructure, and easy truck access. Most homes have double garages and open layouts that simplify the moving process. The Skyview Ranch LRT station (on the Green Line, under development) will further boost connectivity.</p>
<p>Unitas Movers has helped hundreds of families settle into Skyview Ranch. We know the community\'s layout, common builders, and any access considerations for specific phases of development.</p>',
                'latitude' => 51.1320,
                'longitude' => -113.9670,
                'population' => 15000,
                'faq_json' => [
                    ['question' => 'Is Skyview Ranch a good area for first-time buyers?', 'answer' => 'Skyview Ranch offers some of Calgary\'s most affordable new homes with good transit access and growing amenities — very popular with first-time buyers.'],
                    ['question' => 'How long does a move to Skyview Ranch take from downtown?', 'answer' => 'The drive from downtown to Skyview Ranch is about 20-25 minutes. A full move typically takes 3-6 hours depending on home size.'],
                    ['question' => 'Do you move townhomes in Skyview Ranch?', 'answer' => 'Yes — we handle townhome moves regularly in Skyview Ranch, including stair carries and shared-wall considerations.'],
                ],
            ],
            [
                'slug' => 'cityscape',
                'name' => 'Cityscape',
                'meta_title' => 'Cityscape Movers Calgary | Unitas Movers',
                'meta_description' => 'Cityscape NE Calgary movers. Brand-new community, new homes. Licensed, insured, affordable moving crews. Book your free quote.',
                'h1' => 'Cityscape Calgary Moving Services',
                'body' => '<p>Cityscape is among Calgary\'s newest NE communities, located near Stoney Trail and Airport Trail. Still actively developing, it offers brand-new homes at entry-level prices, making it especially attractive to first-time buyers, young professionals, and growing families.</p>
<h2>Moving to Cityscape</h2>
<p>Moving into a brand-new home has unique considerations — coordinating with builders on possession dates, managing timelines for appliance delivery, and sometimes dealing with ongoing construction in nearby lots. Unitas Movers has experience with new-build moves and can work around these factors.</p>
<p>Cityscape\'s street design is modern and truck-friendly, with wide roads and generous driveways. As the community continues to build out, access to amenities grows each year, and the airport proximity makes it convenient for frequent travellers.</p>',
                'latitude' => 51.1350,
                'longitude' => -113.9450,
                'population' => 8000,
                'faq_json' => [
                    ['question' => 'Can you coordinate a move with a new home builder in Cityscape?', 'answer' => 'Yes — we regularly coordinate with builders on possession date moves. We can adjust our schedule to match your builder\'s handover timeline.'],
                    ['question' => 'Is Cityscape still under construction?', 'answer' => 'Cityscape is still growing, with new phases being developed. Some areas may have active construction nearby, which we plan around for your move.'],
                    ['question' => 'What makes Cityscape affordable?', 'answer' => 'As a newer community on the city\'s edge, Cityscape offers new homes at lower price points than established neighbourhoods — great for first-time buyers.'],
                ],
            ],
            [
                'slug' => 'martindale',
                'name' => 'Martindale',
                'meta_title' => 'Martindale Movers Calgary | Unitas Movers',
                'meta_description' => 'Professional movers in Martindale, NE Calgary. Family-friendly neighbourhood. Licensed, affordable, careful crews. Free estimates.',
                'h1' => 'Martindale Moving Company — NE Calgary',
                'body' => '<p>Martindale is a well-established NE Calgary community developed in the 1990s and 2000s, located near the Saddletowne CTrain station and Genesis Centre. It\'s a diverse, family-oriented neighbourhood with a good mix of single-family homes, townhouses, and condominiums.</p>
<h2>Moving in Martindale</h2>
<p>Martindale\'s streets are well-maintained with good width for moving trucks. Most single-family homes have double garages and front driveways, while townhouse complexes have designated parking and loading areas. The neighbourhood\'s central NE location provides easy access to Deerfoot Trail and Stoney Trail.</p>
<p>We frequently help Martindale families with local moves — whether upgrading to a larger home in a nearby community or moving within the neighbourhood itself. Our crews provide the same careful, professional service for a local move as they do for a cross-city relocation.</p>',
                'latitude' => 51.0950,
                'longitude' => -113.9600,
                'population' => 12000,
                'faq_json' => [
                    ['question' => 'Is Martindale close to transit?', 'answer' => 'Yes — Martindale is near the Saddletowne CTrain station, providing direct access to downtown and other parts of Calgary.'],
                    ['question' => 'Do you move condos in Martindale?', 'answer' => 'Yes — we handle condo and townhouse moves in Martindale regularly, including stair carries and elevator coordination.'],
                    ['question' => 'What is the best time to book a Martindale move?', 'answer' => 'Weekdays and mid-month dates tend to be less busy. For weekend or month-end moves, book at least one to two weeks in advance.'],
                ],
            ],
        ];

        foreach ($neNeighborhoods as $n) {
            $n['area_type'] = 'neighborhood';
            $n['parent_id'] = $quadrants['ne-calgary']->id;
            $n['is_published'] = true;
            $n['sort_order'] = $sortOrder++;
            Area::create($n);
        }

        // ── SW Calgary Neighbourhoods ────────────────────────────
        $swNeighborhoods = [
            [
                'slug' => 'beltline',
                'name' => 'Beltline',
                'meta_title' => 'Beltline Movers Calgary | Unitas Movers',
                'meta_description' => 'Expert Beltline movers in Calgary. High-rise condos, apartments, 17th Ave. Licensed, insured. Elevator moves our specialty. Free quotes.',
                'h1' => 'Beltline Calgary Moving Company',
                'body' => '<p>The Beltline is Calgary\'s most densely populated neighbourhood, stretching along 17th Avenue SW from the Elbow River to 14th Street. It\'s the heart of Calgary\'s urban lifestyle — packed with restaurants, nightlife, boutique shopping, and a booming condo market that ranges from studio apartments to luxury penthouses.</p>
<h2>Why Beltline Moves Require Specialists</h2>
<p>Moving in the Beltline is different from anywhere else in Calgary. Most residents live in high-rise or mid-rise buildings that require elevator reservations (often booked weeks in advance), loading dock scheduling, and strict building rules about moving hours and common-area protection. Street parking is metered or permit-based, so truck positioning must be planned carefully.</p>
<h2>Our Beltline Moving Expertise</h2>
<p>Unitas Movers has completed more Beltline moves than we can count. We know which buildings have freight elevators, which loading docks are tricky to access, and how to navigate the one-way streets and busy traffic of 17th Avenue. We handle elevator padding, floor protection, and common-area requirements so you don\'t get dinged by your condo board.</p>',
                'latitude' => 51.0380,
                'longitude' => -114.0700,
                'population' => 22000,
                'faq_json' => [
                    ['question' => 'How do I book a Beltline condo move?', 'answer' => 'Contact us and we\'ll help you coordinate with your building\'s management. We typically need the elevator reserved 1-2 weeks in advance.'],
                    ['question' => 'Do you handle high-rise moves on 17th Avenue?', 'answer' => 'Yes — high-rise moves are our specialty in the Beltline. We handle everything from studio apartments to large penthouses in towers along 17th Ave.'],
                    ['question' => 'What are the parking rules for movers on 17th Ave?', 'answer' => 'Street parking on 17th is metered and time-limited. We arrange loading zone access or use your building\'s designated loading area.'],
                ],
            ],
            [
                'slug' => 'mission',
                'name' => 'Mission',
                'meta_title' => 'Mission Movers Calgary | Unitas Movers',
                'meta_description' => 'Mission Calgary movers. Condos and character homes along the Elbow River. Licensed, insured crews. Get your free moving quote.',
                'h1' => 'Moving Services in Mission, Calgary',
                'body' => '<p>Mission is one of Calgary\'s most desirable inner-city neighbourhoods, situated between 4th Street SW and the Elbow River. With a mix of character homes, modern condos, and historic buildings, Mission offers walkable access to restaurants, shops, the river pathways, and downtown — all with a distinctly neighbourhood-y feel.</p>
<h2>Moving in Mission</h2>
<p>Mission\'s housing ranges from 1920s craftsman homes to brand-new condo towers. The older homes on tree-lined streets often have narrow staircases and limited parking, while newer condos require the same elevator and loading dock coordination as the Beltline. Our crews adapt their approach based on your specific property.</p>
<p>4th Street SW is the neighbourhood\'s commercial spine and can be busy, especially on weekends. We schedule Mission moves to minimize disruption and secure the best access to your building or home.</p>',
                'latitude' => 51.0380,
                'longitude' => -114.0570,
                'population' => 6800,
                'faq_json' => [
                    ['question' => 'Do you move character homes in Mission?', 'answer' => 'Yes — we\'re experienced with Mission\'s older homes, including narrow staircases, low ceilings, and tight doorways common in heritage properties.'],
                    ['question' => 'Can you handle a Mission condo move on a weekend?', 'answer' => 'Yes, though building rules may restrict moving hours on weekends. We\'ll coordinate with your condo board to ensure compliance.'],
                    ['question' => 'Is Mission walkable?', 'answer' => 'Mission is one of Calgary\'s most walkable neighbourhoods — close to downtown, river pathways, and 4th Street shops and restaurants.'],
                ],
            ],
            [
                'slug' => 'marda-loop',
                'name' => 'Marda Loop',
                'meta_title' => 'Marda Loop Movers Calgary | Unitas Movers',
                'meta_description' => 'Marda Loop movers you can trust. 33rd Avenue shops and family homes. Licensed, insured, affordable. Free moving estimates.',
                'h1' => 'Movers in Marda Loop, Calgary',
                'body' => '<p>Marda Loop is a beloved SW Calgary neighbourhood centred on the bustling 33rd Avenue and 34th Avenue commercial district. Known for its independent shops, craft breweries, restaurants, and strong community identity, Marda Loop attracts young professionals, couples, and families who want urban convenience without living downtown.</p>
<h2>Moving in Marda Loop</h2>
<p>The neighbourhood features a mix of character bungalows, modern infills, townhomes, and low-rise apartment buildings. Street parking on and near 33rd Avenue can be competitive, and many older homes are accessed via back lanes. Our crews plan routes and parking in advance for every Marda Loop move.</p>
<p>Marda Loop homes — both old and new — tend to be well-maintained and nicely furnished. We take extra care with hardwood floors, built-in features, and the steep stairs common in both older homes and tall modern infills.</p>',
                'latitude' => 51.0270,
                'longitude' => -114.0920,
                'population' => 5400,
                'faq_json' => [
                    ['question' => 'Is parking a challenge for Marda Loop moves?', 'answer' => 'Parking near 33rd Avenue can be tight. We secure back-lane access or arrange temporary parking to ensure smooth loading and unloading.'],
                    ['question' => 'What types of homes are in Marda Loop?', 'answer' => 'Marda Loop has everything from 1940s bungalows to modern infills, townhomes, and low-rise apartments. We handle all types.'],
                    ['question' => 'Do you serve both 33rd and 34th Avenue areas?', 'answer' => 'Yes — we serve all of Marda Loop and the surrounding South Calgary area, including both sides of the commercial district.'],
                ],
            ],
            [
                'slug' => 'killarney',
                'name' => 'Killarney',
                'meta_title' => 'Killarney Movers Calgary | Unitas Movers',
                'meta_description' => 'Professional movers in Killarney, SW Calgary. Bungalows and infills near 17th Avenue. Licensed, insured. Free moving estimates.',
                'h1' => 'Killarney Calgary Moving Services',
                'body' => '<p>Killarney is a desirable inner-city SW Calgary neighbourhood experiencing significant transformation as original 1950s bungalows are replaced by modern infill homes. Located south of 17th Avenue and west of Crowchild Trail, Killarney offers a fantastic urban location with quick access to downtown, the Beltline, and Marda Loop.</p>
<h2>Moving in Killarney</h2>
<p>Killarney moves often fall into two categories: clearing out an older bungalow (sometimes after decades of accumulation) or moving into a brand-new infill. Infills in Killarney tend to be tall and narrow with multiple levels, requiring crews who can handle tight staircases and limited interior space.</p>
<p>Back-lane access is common and preferred for loading, while front streets in Killarney can be busy during commute hours due to proximity to Crowchild Trail. We schedule moves to work around these traffic patterns.</p>',
                'latitude' => 51.0350,
                'longitude' => -114.1070,
                'population' => 5200,
                'faq_json' => [
                    ['question' => 'Can you move a full basement from a Killarney bungalow?', 'answer' => 'Absolutely. Many Killarney bungalows have decades of accumulated belongings. We offer packing and removal services for full-basement cleanouts.'],
                    ['question' => 'How do you handle Killarney infill moves?', 'answer' => 'Our crews are experienced with multi-level infills. We use floor protection, furniture blankets, and the right-sized dollies for tight spaces.'],
                    ['question' => 'Is Killarney close to downtown Calgary?', 'answer' => 'Killarney is about 10 minutes from downtown — one of the closest SW neighbourhoods to the city core.'],
                ],
            ],
            [
                'slug' => 'altadore',
                'name' => 'Altadore',
                'meta_title' => 'Altadore Movers Calgary | Unitas Movers',
                'meta_description' => 'Movers in Altadore, SW Calgary. Infills, bungalows, near River Park. Licensed, insured, affordable crews. Free moving quotes.',
                'h1' => 'Altadore Moving Company — SW Calgary',
                'body' => '<p>Altadore is one of SW Calgary\'s most popular inner-city neighbourhoods, known for its proximity to River Park and the Elbow River pathways. Like neighbouring Marda Loop, Altadore has seen extensive infill development, transforming the streetscape with modern homes alongside original bungalows.</p>
<h2>Moving in Altadore</h2>
<p>Altadore\'s mix of original bungalows and modern infills creates diverse moving scenarios. Older homes often have full basements with steep stairs, while infills have three or four levels with narrow hallways. Our crews bring appropriate equipment and crew sizes for both.</p>
<p>The neighbourhood\'s tree-lined streets and proximity to Sandy Beach and River Park make it a premium location. We handle moves here with extra care, protecting both your belongings and the property finishes that make Altadore homes so desirable.</p>',
                'latitude' => 51.0240,
                'longitude' => -114.0850,
                'population' => 5900,
                'faq_json' => [
                    ['question' => 'Do you protect hardwood floors during Altadore moves?', 'answer' => 'Yes — we use floor runners, furniture pads, and door frame protectors as standard practice, especially in Altadore\'s renovated and new homes.'],
                    ['question' => 'Is Altadore good for families?', 'answer' => 'Altadore is excellent for families — close to River Park, great schools, and Marda Loop\'s shops and restaurants, all within walking distance.'],
                    ['question' => 'How much does an Altadore infill move cost?', 'answer' => 'A three-bedroom Altadore infill typically costs $500 to $1,200, depending on the number of levels, items, and distance.'],
                ],
            ],
            [
                'slug' => 'south-calgary',
                'name' => 'South Calgary',
                'meta_title' => 'South Calgary Movers | Unitas Movers',
                'meta_description' => 'South Calgary movers near Marda Loop. Affordable inner-city moves. Licensed and insured. Call for your free moving estimate.',
                'h1' => 'Moving Services in South Calgary',
                'body' => '<p>South Calgary is a compact inner-city neighbourhood adjacent to Marda Loop, sharing the same 33rd Avenue commercial district. It\'s one of Calgary\'s most affordable inner-city communities, attracting first-time buyers and renters who want walkable urban living at lower price points.</p>
<h2>Moving in South Calgary</h2>
<p>The housing stock includes older bungalows, duplexes, walk-up apartments, and a growing number of infill homes and townhomes. The neighbourhood\'s grid street pattern and back-lane access make moving logistics straightforward.</p>
<p>South Calgary\'s central location — between 17th Avenue and Heritage Drive, minutes from Crowchild Trail and Macleod Trail — means moves to anywhere in the city are efficient. We serve this neighbourhood frequently and know its streets well.</p>',
                'latitude' => 51.0280,
                'longitude' => -114.0880,
                'population' => 4600,
                'faq_json' => [
                    ['question' => 'Is South Calgary the same as Marda Loop?', 'answer' => 'They\'re adjacent and share the 33rd Avenue commercial area, but they\'re technically separate neighbourhoods. We serve both equally.'],
                    ['question' => 'Are there affordable homes in South Calgary?', 'answer' => 'South Calgary has some of the most affordable inner-city housing in Calgary, which keeps it a busy area for movers.'],
                    ['question' => 'Do you move duplexes in South Calgary?', 'answer' => 'Yes — duplexes are common in South Calgary and we handle them regularly, including basement suite access and shared driveways.'],
                ],
            ],
            [
                'slug' => 'bankview',
                'name' => 'Bankview',
                'meta_title' => 'Bankview Movers Calgary | Unitas Movers',
                'meta_description' => 'Bankview Calgary movers. Apartments and condos with downtown views. Licensed, insured, affordable. Get a free moving quote.',
                'h1' => 'Professional Movers in Bankview, Calgary',
                'body' => '<p>Bankview sits on a hill overlooking downtown Calgary, offering some of the best city views from any inner-city neighbourhood. Its mix of apartment buildings, low-rise condos, and older homes makes it popular with young professionals and renters who want proximity to 17th Avenue and downtown without premium prices.</p>
<h2>Moving in Bankview</h2>
<p>Bankview\'s hilly terrain is its defining feature — and its biggest moving challenge. Steep streets, limited parking, and older apartment buildings without elevators require careful planning. Our crews are experienced with walk-up apartment moves in Bankview and bring dollies, straps, and stair-climbing equipment.</p>
<p>The neighbourhood\'s location between 14th Street and Crowchild Trail provides good truck access from major routes, even if the internal streets are narrow and steep.</p>',
                'latitude' => 51.0370,
                'longitude' => -114.0960,
                'population' => 6100,
                'faq_json' => [
                    ['question' => 'Are Bankview moves harder because of the hills?', 'answer' => 'Bankview\'s steep streets add some complexity, but our experienced crews handle it daily. We plan routes and parking to minimize challenges.'],
                    ['question' => 'Do you move walk-up apartments in Bankview?', 'answer' => 'Yes — many Bankview buildings are walk-ups without elevators. We price stair carries fairly and our crews are trained for these moves.'],
                    ['question' => 'Is Bankview a good area to live?', 'answer' => 'Bankview is one of Calgary\'s most affordable inner-city areas with stunning downtown views, 17th Avenue access, and a growing food scene.'],
                ],
            ],
            [
                'slug' => 'lakeview',
                'name' => 'Lakeview',
                'meta_title' => 'Lakeview Movers Calgary | Unitas Movers',
                'meta_description' => 'Movers in Lakeview, SW Calgary. Quiet family neighbourhood near Glenmore Reservoir. Licensed, insured. Free moving quotes.',
                'h1' => 'Lakeview Calgary Moving Company',
                'body' => '<p>Lakeview is a quiet, established SW Calgary neighbourhood nestled against the Glenmore Reservoir. With tree-lined streets, generous lot sizes, and proximity to North Glenmore Park, it\'s one of the city\'s most peaceful residential communities — yet only 15 minutes from downtown.</p>
<h2>Moving in Lakeview</h2>
<p>Lakeview homes are predominantly larger single-family residences — many with four or more bedrooms, finished basements, and extensive landscaping. Some properties back onto the reservoir, adding scenic value but sometimes complicating truck access.</p>
<p>The neighbourhood\'s proximity to Crowchild Trail and Glenmore Trail provides excellent truck routing. Lakeview\'s quiet residential streets rarely have traffic issues, making it one of the more pleasant neighbourhoods for moving day logistics.</p>',
                'latitude' => 51.0100,
                'longitude' => -114.1020,
                'population' => 4200,
                'faq_json' => [
                    ['question' => 'Are Lakeview homes large?', 'answer' => 'Yes — most Lakeview homes are larger single-family residences with finished basements, typically requiring a full moving crew.'],
                    ['question' => 'Is Lakeview close to downtown?', 'answer' => 'Lakeview is about 15 minutes from downtown via Crowchild Trail — close enough for commuting but quiet and residential.'],
                    ['question' => 'Do you handle moves near the Glenmore Reservoir?', 'answer' => 'Yes — we serve all of Lakeview including reservoir-adjacent properties. We plan truck access carefully for properties with unique access points.'],
                ],
            ],
            [
                'slug' => 'signal-hill',
                'name' => 'Signal Hill',
                'meta_title' => 'Signal Hill Movers Calgary | Unitas Movers',
                'meta_description' => 'Signal Hill Calgary movers. Family homes near Westhills. Licensed, insured, affordable. Get your free moving quote today.',
                'h1' => 'Movers in Signal Hill, SW Calgary',
                'body' => '<p>Signal Hill is a popular SW Calgary suburb developed in the 1980s and 90s, located near the Westhills Towne Centre and Aspen Landing shopping areas. It\'s a well-established family community with excellent schools, parks, and convenient access to Sarcee Trail and Stoney Trail.</p>
<h2>Moving in Signal Hill</h2>
<p>Signal Hill features a mix of two-storey family homes, bi-levels, and townhouses, with most properties having double attached garages. The neighbourhood\'s streets are wider than inner-city areas and well-suited for moving trucks.</p>
<p>Many Signal Hill moves involve families upgrading or downsizing within the SW quadrant. The community\'s central suburban location means moves to other SW neighbourhoods are quick and cost-effective. We provide efficient, professional service whether you\'re crossing the city or moving across the street.</p>',
                'latitude' => 51.0120,
                'longitude' => -114.1660,
                'population' => 12500,
                'faq_json' => [
                    ['question' => 'How much does a Signal Hill move cost?', 'answer' => 'A typical three-bedroom Signal Hill home costs $500 to $1,000 to move, depending on distance and services needed.'],
                    ['question' => 'Is Signal Hill convenient for families?', 'answer' => 'Very — Signal Hill has great schools, parks, shopping at Westhills, and easy access to major roads for commuting.'],
                    ['question' => 'Do you serve the townhouses in Signal Hill Centre?', 'answer' => 'Yes — we handle townhouse and condo moves in all Signal Hill complexes, including stair carries and limited-access buildings.'],
                ],
            ],
            [
                'slug' => 'aspen-woods',
                'name' => 'Aspen Woods',
                'meta_title' => 'Aspen Woods Movers Calgary | Unitas Movers',
                'meta_description' => 'Aspen Woods moving company. Luxury homes handled with care. Licensed, insured, experienced crews. Get a free estimate today.',
                'h1' => 'Aspen Woods Moving Services — SW Calgary',
                'body' => '<p>Aspen Woods is one of SW Calgary\'s most prestigious communities, featuring large executive homes, luxury townhomes, and estate properties. Located near Aspen Landing shopping and the Springbank Hill area, it offers a premium lifestyle with mountain views and quick access to both the city and the foothills.</p>
<h2>Moving Luxury Homes in Aspen Woods</h2>
<p>Aspen Woods homes are among the largest in Calgary — many exceeding 3,000 square feet with finished walkout basements, home theatres, wine cellars, and oversized garages. Moves here often require our largest crew sizes, specialty equipment for heavy items, and extra care for high-end finishes like marble floors, custom cabinetry, and designer fixtures.</p>
<p>We use premium-quality protective materials — thick floor runners, padded door jamb guards, and furniture blankets — to ensure your home and belongings remain pristine throughout the move.</p>',
                'latitude' => 51.0270,
                'longitude' => -114.1870,
                'population' => 7200,
                'faq_json' => [
                    ['question' => 'Can you handle large executive home moves in Aspen Woods?', 'answer' => 'Yes — we specialize in large home moves. We deploy bigger crews and use premium protective materials for high-end finishes.'],
                    ['question' => 'Do you move specialty items like wine cellars and pianos?', 'answer' => 'Absolutely. We have the equipment and expertise to move pianos, wine collections, home gyms, and other specialty items safely.'],
                    ['question' => 'How much does an Aspen Woods move cost?', 'answer' => 'Large Aspen Woods homes typically range from $1,500 to $4,000+ depending on size, items, and services. We provide detailed quotes after an assessment.'],
                ],
            ],
            [
                'slug' => 'discovery-ridge',
                'name' => 'Discovery Ridge',
                'meta_title' => 'Discovery Ridge Movers | Unitas Movers',
                'meta_description' => 'Movers in Discovery Ridge, SW Calgary. Estate homes near the foothills. Licensed, insured. Book your free moving estimate.',
                'h1' => 'Discovery Ridge Moving Company',
                'body' => '<p>Discovery Ridge is an exclusive residential community in Calgary\'s far southwest, nestled against the foothills and surrounded by natural parkland. It offers a rare combination of estate-calibre homes with direct access to hiking trails, Griffith Woods, and the Elbow River — all within 20 minutes of downtown.</p>
<h2>Moving in Discovery Ridge</h2>
<p>Homes in Discovery Ridge are predominantly large — four to six bedrooms with walkout basements, expansive decks, and luxury finishes. The community\'s hillside location means some driveways are steep and some properties have unique access requirements.</p>
<p>Our crews are experienced with Discovery Ridge\'s terrain and know how to position trucks on sloped driveways safely. We bring the right crew size for these large homes and use premium protective materials to match the quality of the properties we serve.</p>',
                'latitude' => 51.0080,
                'longitude' => -114.1940,
                'population' => 3500,
                'faq_json' => [
                    ['question' => 'Are Discovery Ridge driveways steep for moving trucks?', 'answer' => 'Some are — we assess your specific property before move day and position trucks safely on sloped driveways using proper techniques.'],
                    ['question' => 'How far is Discovery Ridge from downtown?', 'answer' => 'Discovery Ridge is about 20 minutes from downtown via Sarcee Trail — a quick commute considering the foothills setting.'],
                    ['question' => 'Do you handle large estate moves?', 'answer' => 'Yes — estate-size homes are well within our capability. We deploy larger crews and plan multi-room loading strategies for efficiency.'],
                ],
            ],
        ];

        foreach ($swNeighborhoods as $n) {
            $n['area_type'] = 'neighborhood';
            $n['parent_id'] = $quadrants['sw-calgary']->id;
            $n['is_published'] = true;
            $n['sort_order'] = $sortOrder++;
            Area::create($n);
        }

        // ── SE Calgary Neighbourhoods ────────────────────────────
        $seNeighborhoods = [
            [
                'slug' => 'douglasdale',
                'name' => 'Douglasdale',
                'meta_title' => 'Douglasdale Movers Calgary | Unitas Movers',
                'meta_description' => 'Movers in Douglasdale, SE Calgary. Established family neighbourhood. Licensed, insured, affordable. Get a free moving quote.',
                'h1' => 'Douglasdale Calgary Moving Services',
                'body' => '<p>Douglasdale is one of SE Calgary\'s most established suburban communities, developed in the 1990s along the banks of the Bow River. With mature trees, winding streets, and a strong family atmosphere, Douglasdale offers the feel of a well-settled neighbourhood with excellent access to Deerfoot Trail and Fish Creek Provincial Park.</p>
<h2>Moving in Douglasdale</h2>
<p>Douglasdale homes are predominantly three to five-bedroom two-storeys and bungalows with double garages. The neighbourhood\'s mature landscaping and winding streets create a pleasant but sometimes narrow driving environment. Our drivers know Douglasdale\'s layout and select the right truck size for your specific street.</p>
<p>Many Douglasdale moves involve families who\'ve lived there for years — meaning full basements, garages, and sheds. We offer comprehensive packing services and can coordinate donation pickups for items you\'re not taking with you.</p>',
                'latitude' => 50.9700,
                'longitude' => -114.0050,
                'population' => 11500,
                'faq_json' => [
                    ['question' => 'Do you serve all of Douglasdale?', 'answer' => 'Yes — we cover all areas of Douglasdale and Douglasdale Estates, including riverside properties and interior crescents.'],
                    ['question' => 'Can you help with a full-basement cleanout in Douglasdale?', 'answer' => 'Absolutely — many Douglasdale homes have full basements after years of living there. We offer packing, moving, and removal services.'],
                    ['question' => 'Is Douglasdale close to Fish Creek Park?', 'answer' => 'Yes — Douglasdale borders Fish Creek Provincial Park with pathway access, making it one of SE Calgary\'s most nature-connected communities.'],
                ],
            ],
            [
                'slug' => 'mahogany',
                'name' => 'Mahogany',
                'meta_title' => 'Mahogany Movers Calgary | Unitas Movers',
                'meta_description' => 'Movers in Mahogany, SE Calgary. Lake community, new homes. Licensed, insured, professional. Book your free moving estimate.',
                'h1' => 'Movers in Mahogany, SE Calgary',
                'body' => '<p>Mahogany is SE Calgary\'s premier lake community, featuring Calgary\'s largest freshwater lake exclusively for residents. Developed from 2008 onward by Hopewell Residential, Mahogany offers new homes, modern amenities, a vibrant village centre, and a lifestyle centred around its 63-acre lake and beach club.</p>
<h2>Moving to Mahogany</h2>
<p>Mahogany is a newer community with wide streets, modern infrastructure, and homes designed for contemporary living. Moves here are generally smooth — double garages, open floor plans, and good truck access. However, some areas near the lake have specific HOA rules about moving hours and access routes that we coordinate in advance.</p>
<p>The community is on 52 Street SE and Stoney Trail, providing good highway access. Many Mahogany moves involve families relocating from older Calgary neighbourhoods to enjoy the lake lifestyle.</p>',
                'latitude' => 50.9250,
                'longitude' => -113.9550,
                'population' => 14000,
                'faq_json' => [
                    ['question' => 'Are there HOA moving rules in Mahogany?', 'answer' => 'Some Mahogany areas have specific rules about moving hours and truck access near the lake. We coordinate with the HOA to ensure compliance.'],
                    ['question' => 'Is Mahogany far from downtown Calgary?', 'answer' => 'Mahogany is about 25-30 minutes from downtown via Deerfoot Trail. The community\'s amenities mean residents spend less time commuting for essentials.'],
                    ['question' => 'Do you move townhomes in Mahogany?', 'answer' => 'Yes — Mahogany has many townhome complexes and we handle them regularly, including stair carries and limited-access units.'],
                ],
            ],
            [
                'slug' => 'auburn-bay',
                'name' => 'Auburn Bay',
                'meta_title' => 'Auburn Bay Movers Calgary | Unitas Movers',
                'meta_description' => 'Auburn Bay SE Calgary movers. Lake community, family homes. Licensed, insured, affordable. Get your free moving estimate today.',
                'h1' => 'Auburn Bay Moving Company — SE Calgary',
                'body' => '<p>Auburn Bay is a popular SE Calgary lake community developed by Brookfield Residential, featuring a 43-acre freshwater lake and beach house exclusively for residents. The community offers a family-friendly lifestyle with excellent schools, parks, and the nearby South Health Campus hospital.</p>
<h2>Moving in Auburn Bay</h2>
<p>Auburn Bay homes range from starter townhomes and semi-detached houses to large single-family properties. The community is well-planned with wide streets and good infrastructure that makes moving day straightforward. Properties near the lake may have specific access requirements, which we handle as part of our pre-move planning.</p>
<p>Many Auburn Bay residents work at the nearby South Health Campus, making this community popular with healthcare professionals. Whether you\'re a young professional buying your first townhome or a family moving into a lakeside home, Unitas Movers provides reliable, careful service.</p>',
                'latitude' => 50.9350,
                'longitude' => -113.9630,
                'population' => 13000,
                'faq_json' => [
                    ['question' => 'Do you serve Auburn Bay\'s lake-area homes?', 'answer' => 'Yes — we serve all of Auburn Bay, including premium lots near the lake. We coordinate with the community association for access requirements.'],
                    ['question' => 'Is Auburn Bay near the South Health Campus?', 'answer' => 'Yes — Auburn Bay is adjacent to the South Health Campus, making it very popular with healthcare workers.'],
                    ['question' => 'What sizes of homes are in Auburn Bay?', 'answer' => 'Auburn Bay offers everything from townhomes to large single-family homes. We\'ll match our crew and truck size to your specific move.'],
                ],
            ],
            [
                'slug' => 'cranston',
                'name' => 'Cranston',
                'meta_title' => 'Cranston Movers Calgary | Unitas Movers',
                'meta_description' => 'Professional movers in Cranston, SE Calgary. Family suburb near Fish Creek Park. Licensed, insured. Free moving quotes.',
                'h1' => 'Cranston Calgary Moving Services',
                'body' => '<p>Cranston is a large, established SE Calgary community that borders Fish Creek Provincial Park to the north and offers a mix of family homes, townhomes, and estate properties in Cranston Ridge. Developed from the early 2000s, it\'s one of SE Calgary\'s most complete communities with mature trees, schools, and shopping.</p>
<h2>Moving in Cranston</h2>
<p>Cranston\'s range of housing means we handle everything from compact townhome moves to large estate relocations in Cranston Ridge. The community\'s layout includes some winding streets and crescents, but overall truck access is good throughout the neighbourhood.</p>
<p>Cranston\'s proximity to Fish Creek Park is a major draw — the pathway system connects directly to the neighbourhood. Whether you\'re moving into Cranston for the nature access, the schools, or the established community feel, our crews will make your transition smooth.</p>',
                'latitude' => 50.9470,
                'longitude' => -114.0010,
                'population' => 16000,
                'faq_json' => [
                    ['question' => 'Do you serve Cranston Ridge?', 'answer' => 'Yes — we serve all of Cranston including the Cranston Ridge estate area. We have the crew capacity for larger estate-style homes.'],
                    ['question' => 'Is Cranston close to Fish Creek Park?', 'answer' => 'Cranston borders Fish Creek Provincial Park with direct pathway access — one of its biggest attractions for nature-loving families.'],
                    ['question' => 'What does a typical Cranston move cost?', 'answer' => 'A standard three-bedroom Cranston home costs $500 to $1,200 depending on distance and services. Estate homes in Cranston Ridge may cost more.'],
                ],
            ],
            [
                'slug' => 'mckenzie-towne',
                'name' => 'McKenzie Towne',
                'meta_title' => 'McKenzie Towne Movers Calgary | Unitas Movers',
                'meta_description' => 'McKenzie Towne movers in SE Calgary. Charming community, family homes. Licensed, insured, affordable. Book a free estimate.',
                'h1' => 'Movers in McKenzie Towne, Calgary',
                'body' => '<p>McKenzie Towne is one of SE Calgary\'s most distinctive communities, designed as a new-urbanist neighbourhood with a traditional small-town feel. Its signature features include the High Street commercial strip, front porches, back lanes, and a community layout that encourages walkability and neighbourhood interaction.</p>
<h2>Moving in McKenzie Towne</h2>
<p>McKenzie Towne\'s back-lane design means most homes are loaded from the rear — our crews are very familiar with this layout and know how to position trucks in the back lanes efficiently. Front streets are narrower by design and not ideal for large trucks, so back-lane access is key.</p>
<p>The community features a mix of attached and detached homes, from compact starter homes in Prestwick to larger properties in McKenzie Lake. We adjust our crew size and approach based on your specific home style and location within the community.</p>',
                'latitude' => 50.9300,
                'longitude' => -113.9650,
                'population' => 18000,
                'faq_json' => [
                    ['question' => 'Do you know how to navigate McKenzie Towne back lanes?', 'answer' => 'Yes — McKenzie Towne\'s back-lane design is something we work with regularly. We load from the rear and know which lanes accommodate which truck sizes.'],
                    ['question' => 'Can you reach homes on McKenzie Towne\'s narrow front streets?', 'answer' => 'We use back-lane access for most McKenzie Towne moves. If front access is needed, we use smaller trucks that fit the narrow streets.'],
                    ['question' => 'Do you serve McKenzie Lake too?', 'answer' => 'Yes — we serve all of McKenzie Towne including McKenzie Lake, Prestwick, and Inverness areas.'],
                ],
            ],
            [
                'slug' => 'copperfield',
                'name' => 'Copperfield',
                'meta_title' => 'Copperfield Movers Calgary | Unitas Movers',
                'meta_description' => 'Movers in Copperfield, SE Calgary. Growing family community. Licensed, insured, affordable. Get your free moving quote today.',
                'h1' => 'Copperfield Moving Company — SE Calgary',
                'body' => '<p>Copperfield is a thriving SE Calgary community developed from the mid-2000s, offering a range of housing from affordable townhomes to spacious single-family homes. Located along 52 Street SE near Stoney Trail, it provides good highway access and a growing list of neighbourhood amenities.</p>
<h2>Moving in Copperfield</h2>
<p>Copperfield\'s modern street design and newer homes make for efficient moves. Wide roads, double garages, and open floor plans mean our crews can work quickly and safely. The community\'s proximity to Stoney Trail gives our trucks fast access to other parts of the city.</p>
<p>We see a lot of first-time buyers moving into Copperfield townhomes and young families upgrading to single-family homes within the community. Whatever your move looks like, Unitas Movers provides professional, careful service at fair prices.</p>',
                'latitude' => 50.9420,
                'longitude' => -113.9420,
                'population' => 10500,
                'faq_json' => [
                    ['question' => 'Do you handle townhome moves in Copperfield?', 'answer' => 'Yes — Copperfield has many townhome complexes and we move them regularly. We handle stair carries, tight parking, and unit-specific access.'],
                    ['question' => 'Is Copperfield a new community?', 'answer' => 'Copperfield has been developing since the mid-2000s, with many homes built between 2005 and 2015. It\'s well-established with growing amenities.'],
                    ['question' => 'How far is Copperfield from downtown?', 'answer' => 'Copperfield is about 25 minutes from downtown via Deerfoot Trail or Stoney Trail, depending on the route and traffic conditions.'],
                ],
            ],
            [
                'slug' => 'new-brighton',
                'name' => 'New Brighton',
                'meta_title' => 'New Brighton Movers Calgary | Unitas Movers',
                'meta_description' => 'New Brighton SE Calgary movers. Family community near McKenzie Towne. Licensed, insured. Free estimates. Call today.',
                'h1' => 'Movers in New Brighton, SE Calgary',
                'body' => '<p>New Brighton is a family-oriented SE Calgary community developed from 2003 onward, located adjacent to McKenzie Towne and near Stoney Trail. It features a central park, playgrounds, and pathways that give it a strong community feel — plus affordable housing that attracts first-time buyers and growing families.</p>
<h2>Moving in New Brighton</h2>
<p>New Brighton homes are a mix of single-family detached, semi-detached, and townhomes. The community is well-laid-out with good street access and modern infrastructure. Most homes have attached garages and driveways that make loading convenient.</p>
<p>The neighbourhood\'s location near 130th Avenue SE and 52 Street SE provides quick access to Stoney Trail and the rest of the city. We frequently serve New Brighton families and know the community layout well.</p>',
                'latitude' => 50.9370,
                'longitude' => -113.9550,
                'population' => 9000,
                'faq_json' => [
                    ['question' => 'Is New Brighton affordable for first-time buyers?', 'answer' => 'Yes — New Brighton is one of SE Calgary\'s more affordable communities, popular with first-time buyers and young families.'],
                    ['question' => 'Do you move semi-detached homes in New Brighton?', 'answer' => 'Yes — we handle all housing types in New Brighton, including semi-detached homes where we navigate shared driveways and walls.'],
                    ['question' => 'How close is New Brighton to McKenzie Towne?', 'answer' => 'New Brighton is directly adjacent to McKenzie Towne — they share amenities, schools, and pathway connections.'],
                ],
            ],
            [
                'slug' => 'walden',
                'name' => 'Walden',
                'meta_title' => 'Walden Movers Calgary | Unitas Movers',
                'meta_description' => 'Moving to Walden, SE Calgary? Professional movers for this growing community. Licensed, insured. Get your free moving quote.',
                'h1' => 'Walden Calgary Moving Services',
                'body' => '<p>Walden is one of SE Calgary\'s newest communities, developed from 2008 onward with a focus on parks, green spaces, and family living. Located south of Shawnessy along Macleod Trail, Walden offers new homes and a growing commercial area while maintaining easy access to Spruce Meadows and the Foothills.</p>
<h2>Moving to Walden</h2>
<p>As a newer community, Walden has the modern infrastructure that makes moving easier — wide streets, generous driveways, double garages, and open floor plans. Some areas of Walden are still under active development, which may mean dealing with construction traffic on certain routes. We plan around these conditions.</p>
<p>Walden appeals to families looking for new homes at accessible prices with the feeling of a small community. The neighbourhood\'s pathways, parks, and proximity to Fish Creek Park make it an excellent choice for active families.</p>',
                'latitude' => 50.9100,
                'longitude' => -114.0350,
                'population' => 8500,
                'faq_json' => [
                    ['question' => 'Is Walden still being developed?', 'answer' => 'Parts of Walden are still under construction, but the community is well-established with many completed phases and growing amenities.'],
                    ['question' => 'How far is Walden from downtown Calgary?', 'answer' => 'Walden is about 25-30 minutes from downtown via Macleod Trail or Deerfoot Trail. It\'s on the city\'s southern edge near Spruce Meadows.'],
                    ['question' => 'Do you coordinate with builders for new home moves?', 'answer' => 'Yes — we regularly coordinate possession-day moves with builders in Walden and other new SE communities.'],
                ],
            ],
        ];

        foreach ($seNeighborhoods as $n) {
            $n['area_type'] = 'neighborhood';
            $n['parent_id'] = $quadrants['se-calgary']->id;
            $n['is_published'] = true;
            $n['sort_order'] = $sortOrder++;
            Area::create($n);
        }
    }

    private function seedTowns(array $quadrants): void
    {
        $sortOrder = 100;

        $towns = [
            [
                'slug' => 'airdrie',
                'name' => 'Airdrie',
                'area_type' => 'town',
                'meta_title' => 'Airdrie Movers | Unitas Movers',
                'meta_description' => 'Moving to or from Airdrie? Calgary\'s trusted movers serve Airdrie daily. Licensed, insured, affordable. Free estimates for Airdrie moves.',
                'h1' => 'Airdrie Moving Company — Unitas Movers',
                'body' => '<p>Airdrie is a fast-growing city just 15 minutes north of Calgary on the Queen Elizabeth II Highway. With a population exceeding 75,000, it\'s Alberta\'s sixth-largest city and one of the most popular destinations for Calgarians looking for more affordable housing while staying close to the city.</p>
<h2>Calgary to Airdrie Moving Services</h2>
<p>The Calgary-Airdrie corridor is one of our busiest routes. Many families make this move to get more house for their money — larger lots, newer homes, and a small-city feel while still commuting to Calgary for work. The 20-30 minute drive via Highway 2 makes it practical for daily commuting.</p>
<h2>What to Know About Your Airdrie Move</h2>
<p>Airdrie has several distinct communities including Reunion, Ravenswood, Bayview, and the original town centre. Homes range from affordable starter properties to large estate homes. We charge a small trip fee for the highway portion but keep rates competitive for Airdrie moves because we serve the area so frequently.</p>',
                'latitude' => 51.2917,
                'longitude' => -114.0144,
                'population' => 75000,
                'faq_json' => [
                    ['question' => 'How much does it cost to move from Calgary to Airdrie?', 'answer' => 'A Calgary-to-Airdrie move typically costs $600 to $1,500 depending on home size. We include a small trip fee for the highway distance.'],
                    ['question' => 'Do you serve all Airdrie communities?', 'answer' => 'Yes — we serve Reunion, Ravenswood, Bayview, Willowbrook, Sagewood, Kings Heights, and all other Airdrie communities.'],
                    ['question' => 'How far is Airdrie from Calgary?', 'answer' => 'Airdrie is about 30 km north of Calgary — roughly a 20-minute drive via Highway 2, depending on traffic.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
            [
                'slug' => 'cochrane',
                'name' => 'Cochrane',
                'area_type' => 'town',
                'meta_title' => 'Cochrane Movers | Unitas Movers',
                'meta_description' => 'Moving to or from Cochrane? Trusted Calgary movers serving Cochrane weekly. Licensed, insured. Free moving quotes for Cochrane.',
                'h1' => 'Cochrane Moving Services — Unitas Movers',
                'body' => '<p>Cochrane is a picturesque town nestled in the foothills west of Calgary along Highway 1A. With stunning mountain views, a charming historic main street, and rapid residential growth, Cochrane has become one of the most desirable communities in the Calgary region for families and retirees alike.</p>
<h2>Calgary to Cochrane Moves</h2>
<p>The 30-minute drive from Calgary to Cochrane follows the Trans-Canada Highway or Highway 1A through the Bow River valley. We make this trip regularly and know the route well — including seasonal considerations like winter highway conditions that can affect scheduling.</p>
<h2>Cochrane Communities We Serve</h2>
<p>Cochrane\'s communities range from the established Riviera and West Terrace to newer developments like Fireside, Heartland, and Sunset Ridge. The town\'s rapid growth means many homes are new construction with modern layouts that make moving efficient.</p>',
                'latitude' => 51.1890,
                'longitude' => -114.4670,
                'population' => 32000,
                'faq_json' => [
                    ['question' => 'How much does a Calgary to Cochrane move cost?', 'answer' => 'Calgary-to-Cochrane moves typically range from $700 to $1,800 depending on home size. We include the highway distance in our competitive pricing.'],
                    ['question' => 'Do you move in winter between Calgary and Cochrane?', 'answer' => 'Yes — we operate year-round. In winter, we monitor highway conditions and adjust scheduling if needed for safety.'],
                    ['question' => 'How far is Cochrane from Calgary?', 'answer' => 'Cochrane is about 35 km west of Calgary — roughly 30 minutes via Highway 1A or the Trans-Canada.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
            [
                'slug' => 'okotoks',
                'name' => 'Okotoks',
                'area_type' => 'town',
                'meta_title' => 'Okotoks Movers | Unitas Movers',
                'meta_description' => 'Moving to Okotoks from Calgary? Professional, insured movers. Affordable rates for the Calgary-Okotoks corridor. Free quotes.',
                'h1' => 'Okotoks Moving Company — Unitas Movers',
                'body' => '<p>Okotoks is a thriving town south of Calgary along the Sheep River, known for its strong community values, excellent schools, and small-town charm. Located about 20 minutes south of Calgary\'s city limits via Highway 2A and Macleod Trail, Okotoks offers a quieter lifestyle while maintaining easy access to the city.</p>
<h2>Calgary to Okotoks Moves</h2>
<p>Many families choose Okotoks for its award-winning schools, community programs, and affordable housing relative to Calgary\'s inner suburbs. The move from Calgary is straightforward — Highway 2A and Highway 7 connect the two communities efficiently, and our trucks make the trip regularly.</p>
<p>Okotoks has maintained a careful approach to growth, with a mix of established neighbourhoods like Crystal Ridge and newer areas like D\'Arcy. We serve all communities within Okotoks and can help with moves in either direction.</p>',
                'latitude' => 50.7260,
                'longitude' => -113.9810,
                'population' => 30000,
                'faq_json' => [
                    ['question' => 'How far is Okotoks from Calgary?', 'answer' => 'Okotoks is about 35 km south of Calgary — roughly 25-30 minutes via Highway 2A, depending on traffic and your starting point.'],
                    ['question' => 'What does a Calgary to Okotoks move cost?', 'answer' => 'Typical Calgary-to-Okotoks moves cost $600 to $1,500 depending on home size. We provide transparent pricing with the distance factored in.'],
                    ['question' => 'Do you serve all Okotoks neighbourhoods?', 'answer' => 'Yes — we cover Crystal Ridge, Cimarron, D\'Arcy, Drake Landing, and all other Okotoks communities.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
            [
                'slug' => 'chestermere',
                'name' => 'Chestermere',
                'area_type' => 'town',
                'meta_title' => 'Chestermere Movers | Unitas Movers',
                'meta_description' => 'Chestermere movers you can trust. Lake city east of Calgary. Licensed, insured, affordable. Get your free moving estimate.',
                'h1' => 'Movers in Chestermere — Unitas Movers',
                'body' => '<p>Chestermere is a lake city immediately east of Calgary, centred around Chestermere Lake. The city offers a lakeside lifestyle just 15 minutes from Calgary\'s eastern edge, making it popular with families who want recreational water access without leaving the Calgary region.</p>
<h2>Calgary to Chestermere Moving</h2>
<p>The short distance between Calgary and Chestermere makes this one of our quickest inter-city moves. Chestermere Drive connects directly to Calgary\'s 17th Avenue SE, and Rainbow Road provides access from the TransCanada Highway. Our trucks can be there in 20 minutes from most Calgary locations.</p>
<p>Chestermere\'s housing ranges from lakefront estate properties to family homes in communities like The Cove, Kinniburgh, and Rainbow Falls. Lakefront homes may have specific access considerations that we plan for in advance.</p>',
                'latitude' => 51.0350,
                'longitude' => -113.8230,
                'population' => 22000,
                'faq_json' => [
                    ['question' => 'How far is Chestermere from Calgary?', 'answer' => 'Chestermere is right on Calgary\'s eastern border — about 15-20 minutes from most parts of the city.'],
                    ['question' => 'Do you move lakefront homes in Chestermere?', 'answer' => 'Yes — we handle lakefront properties with care, including planning for unique driveway access and protecting landscaping.'],
                    ['question' => 'Is Chestermere a good place for families?', 'answer' => 'Chestermere is excellent for families, offering lake recreation, parks, schools, and a strong community — all minutes from Calgary.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
            [
                'slug' => 'strathmore',
                'name' => 'Strathmore',
                'area_type' => 'town',
                'meta_title' => 'Strathmore Movers | Unitas Movers',
                'meta_description' => 'Moving to Strathmore from Calgary? Affordable, insured movers. 40 minutes east of Calgary on Highway 1. Free estimates.',
                'h1' => 'Strathmore Moving Services — Unitas Movers',
                'body' => '<p>Strathmore is a town east of Calgary along the Trans-Canada Highway, approximately 40 minutes from the city centre. Known for its Heritage Days festival and small-town Alberta charm, Strathmore offers affordable living with a genuine community atmosphere that\'s hard to find closer to Calgary.</p>
<h2>Calgary to Strathmore Moves</h2>
<p>The drive to Strathmore follows the Trans-Canada Highway eastbound — a straightforward, well-maintained route that our trucks travel regularly. While further from Calgary than some satellite towns, Strathmore\'s significantly lower housing costs make the commute worthwhile for many families.</p>
<p>Strathmore has a mix of older established homes near the town centre and newer subdivisions on the outskirts. We serve all areas and can help with both long-distance moves into Strathmore and local moves within the town.</p>',
                'latitude' => 51.0480,
                'longitude' => -113.4000,
                'population' => 14000,
                'faq_json' => [
                    ['question' => 'How far is Strathmore from Calgary?', 'answer' => 'Strathmore is about 55 km east of Calgary — roughly 40 minutes via the Trans-Canada Highway (Highway 1).'],
                    ['question' => 'Do you charge extra for moves to Strathmore?', 'answer' => 'We include a trip fee for the highway distance, but our rates remain competitive. We provide a full estimate upfront with no hidden costs.'],
                    ['question' => 'Is Strathmore affordable compared to Calgary?', 'answer' => 'Yes — Strathmore offers significantly lower housing costs than Calgary while maintaining good amenities, schools, and community services.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
            [
                'slug' => 'high-river',
                'name' => 'High River',
                'area_type' => 'town',
                'meta_title' => 'High River Movers | Unitas Movers',
                'meta_description' => 'Moving to High River? Calgary movers serving the Highway 2 south corridor. Licensed, insured. Free estimates for High River.',
                'h1' => 'High River Moving Company — Unitas Movers',
                'body' => '<p>High River is a historic town south of Calgary along the Highwood River, about 45 minutes from the city centre. Famous as the filming location of the TV show Heartland and for its resilient recovery from the 2013 flood, High River offers genuine small-town Alberta living with beautiful natural surroundings.</p>
<h2>Calgary to High River Moves</h2>
<p>The drive south on Highway 2 and Highway 2A to High River is scenic and straightforward. We serve the Calgary-High River corridor regularly, especially as more families discover the town\'s affordable housing, excellent recreation, and strong community spirit.</p>
<p>High River\'s downtown features historic buildings and established homes, while newer developments on the town\'s edges offer modern housing. We serve all areas and adjust our crew and equipment to match your home type.</p>',
                'latitude' => 50.5840,
                'longitude' => -113.8740,
                'population' => 14000,
                'faq_json' => [
                    ['question' => 'How far is High River from Calgary?', 'answer' => 'High River is about 65 km south of Calgary — roughly 45 minutes via Highway 2 and Highway 2A.'],
                    ['question' => 'Do you move frequently to High River?', 'answer' => 'Yes — the Calgary-High River corridor is a regular route for us. We know the area well and serve it competitively.'],
                    ['question' => 'Is High River prone to flooding?', 'answer' => 'High River experienced significant flooding in 2013 but has since invested heavily in flood mitigation. Our crews are experienced with homes in the area.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
            [
                'slug' => 'canmore',
                'name' => 'Canmore',
                'area_type' => 'town',
                'meta_title' => 'Canmore Movers | Unitas Movers',
                'meta_description' => 'Moving to Canmore from Calgary? Mountain town movers you can trust. Licensed, insured. Free quotes for Calgary-Canmore moves.',
                'h1' => 'Calgary to Canmore Moving Services',
                'body' => '<p>Canmore is a stunning mountain town in the Bow Valley, nestled between Banff National Park and Kananaskis Country. About 80 minutes west of Calgary via the Trans-Canada Highway, Canmore attracts outdoor enthusiasts, remote workers, and retirees who want to live surrounded by the Rocky Mountains.</p>
<h2>Calgary to Canmore Moving</h2>
<p>The drive to Canmore follows the Trans-Canada Highway through the foothills and into the mountains. It\'s a beautiful route but requires careful planning — mountain weather can affect conditions, and Canmore\'s mountain streets and steep driveways present unique challenges for moving trucks.</p>
<h2>Canmore Moving Considerations</h2>
<p>Canmore homes range from compact condos and townhomes to luxury chalets and estate homes. Many properties have steep driveways, limited parking, and multi-level layouts that require experienced crews. Our drivers are familiar with mountain driving and Canmore\'s specific conditions, including seasonal weight restrictions on some roads.</p>',
                'latitude' => 51.0884,
                'longitude' => -115.3480,
                'population' => 15000,
                'faq_json' => [
                    ['question' => 'How much does a Calgary to Canmore move cost?', 'answer' => 'Calgary-to-Canmore moves typically range from $1,200 to $3,000+ depending on home size. The mountain driving distance is factored into our pricing.'],
                    ['question' => 'Do you move in Canmore during winter?', 'answer' => 'Yes — we move year-round. In winter, we monitor Trans-Canada conditions and plan for mountain weather. We carry chains and winter equipment.'],
                    ['question' => 'Can you navigate Canmore\'s steep driveways?', 'answer' => 'Yes — our drivers are experienced with mountain terrain and steep driveways. We select appropriate truck sizes for Canmore\'s conditions.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
            [
                'slug' => 'banff',
                'name' => 'Banff',
                'area_type' => 'town',
                'meta_title' => 'Banff Movers | Unitas Movers',
                'meta_description' => 'Moving to or from Banff? Calgary-based movers serving Banff National Park. Licensed, insured. Free estimates for Banff moves.',
                'h1' => 'Banff Moving Services — Unitas Movers',
                'body' => '<p>Banff is Canada\'s most famous mountain town, situated within Banff National Park about 90 minutes west of Calgary. While primarily known as a tourist destination, Banff has a residential community of workers, entrepreneurs, and long-term residents who call this mountain paradise home.</p>
<h2>Calgary to Banff Moving</h2>
<p>Moving to or from Banff involves navigating the Trans-Canada Highway through the Rocky Mountains. Parks Canada regulations may apply to certain aspects of moving within the national park boundaries. Our team is familiar with these requirements and plans accordingly.</p>
<h2>Banff Moving Challenges</h2>
<p>Housing in Banff is limited and often compact — apartments, townhomes, and staff housing make up much of the housing stock. Space constraints, steep terrain, and seasonal tourism traffic all factor into move planning. We schedule Banff moves during optimal times and bring the right-sized equipment for the specific property.</p>',
                'latitude' => 51.1784,
                'longitude' => -115.5708,
                'population' => 8000,
                'faq_json' => [
                    ['question' => 'Can you move to Banff from Calgary?', 'answer' => 'Yes — we regularly serve the Calgary-Banff corridor. We\'re familiar with mountain driving, Parks Canada considerations, and Banff\'s unique housing.'],
                    ['question' => 'How far is Banff from Calgary?', 'answer' => 'Banff is about 130 km west of Calgary — roughly 90 minutes via the Trans-Canada Highway, depending on conditions.'],
                    ['question' => 'Is housing in Banff different from Calgary?', 'answer' => 'Yes — Banff housing tends to be more compact due to park regulations. Most moves are apartments, townhomes, or smaller homes.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
            [
                'slug' => 'langdon',
                'name' => 'Langdon',
                'area_type' => 'town',
                'meta_title' => 'Langdon Movers | Unitas Movers',
                'meta_description' => 'Moving to Langdon? Calgary movers serving the hamlet east of the city. Licensed, insured, affordable. Free estimates.',
                'h1' => 'Langdon Moving Services — Unitas Movers',
                'body' => '<p>Langdon is a growing hamlet just east of Calgary, offering a rural small-town atmosphere within easy commuting distance of the city. Located about 20 minutes east of Calgary\'s limits along Highway 560, Langdon attracts families who want larger lots, country living, and a tight-knit community.</p>
<h2>Calgary to Langdon Moves</h2>
<p>The commute from Langdon to Calgary is short and manageable — Highway 560 and Highway 22X connect the hamlet to Stoney Trail and the city\'s east side. Many Langdon residents commute to Calgary\'s industrial areas in the south and east.</p>
<p>Langdon\'s housing is a mix of newer subdivisions with modern family homes and acreage properties on the hamlet\'s outskirts. We handle both types and can accommodate larger loads for acreage moves that often include outbuildings, workshops, and outdoor equipment.</p>',
                'latitude' => 50.9960,
                'longitude' => -113.7360,
                'population' => 5500,
                'faq_json' => [
                    ['question' => 'How far is Langdon from Calgary?', 'answer' => 'Langdon is about 25 km east of Calgary — roughly 20-25 minutes via Highway 560 to Stoney Trail.'],
                    ['question' => 'Do you handle acreage moves near Langdon?', 'answer' => 'Yes — we can accommodate larger acreage moves including workshop equipment, outdoor items, and outbuilding contents.'],
                    ['question' => 'Is Langdon growing?', 'answer' => 'Yes — Langdon has been experiencing steady growth with new subdivisions and improved amenities while maintaining its small-town character.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
            [
                'slug' => 'crossfield',
                'name' => 'Crossfield',
                'area_type' => 'town',
                'meta_title' => 'Crossfield Movers | Unitas Movers',
                'meta_description' => 'Moving to Crossfield? Calgary movers serving the Highway 2 north corridor. Licensed, insured. Free moving estimates.',
                'h1' => 'Crossfield Moving Company — Unitas Movers',
                'body' => '<p>Crossfield is a small town on Highway 2 between Calgary and Airdrie, about 30 minutes north of Calgary. With a population of around 3,500, it offers a genuinely small-town Alberta experience with affordable housing, friendly neighbours, and easy highway access to both Calgary and Airdrie.</p>
<h2>Calgary to Crossfield Moves</h2>
<p>The Highway 2 corridor makes the drive to Crossfield straightforward, and we serve the town as part of our regular northern Alberta routes. Crossfield\'s compact size means moves within the town are quick, while moves from Calgary involve a short highway trip.</p>
<p>Housing in Crossfield is primarily single-family homes — both older properties in the town core and newer builds on the edges. Lot sizes tend to be generous, and many homes have large garages or shops. We can accommodate all sizes of Crossfield moves.</p>',
                'latitude' => 51.4340,
                'longitude' => -114.0340,
                'population' => 3500,
                'faq_json' => [
                    ['question' => 'How far is Crossfield from Calgary?', 'answer' => 'Crossfield is about 50 km north of Calgary on Highway 2 — roughly 30-35 minutes by car.'],
                    ['question' => 'Is Crossfield affordable?', 'answer' => 'Yes — Crossfield offers some of the most affordable housing in the Calgary region, with generous lot sizes and a small-town atmosphere.'],
                    ['question' => 'Do you pass through Airdrie on the way to Crossfield?', 'answer' => 'Yes — Crossfield is north of Airdrie on Highway 2. We serve both communities regularly on the same corridor.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
        ];

        foreach ($towns as $data) {
            Area::create($data);
        }
    }
}
