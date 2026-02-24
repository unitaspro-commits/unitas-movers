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
                'avg_home_price' => 620000,
                'dominant_housing_type' => 'Mixed — character homes to new suburban',
                'parking_restrictions' => 'Street parking on inner-city streets is metered. Outer suburbs have wide driveways and no restrictions.',
                'elevator_booking_required' => false,
                'access_notes' => 'Inner NW (Kensington, Hillhurst) has narrow streets and back lanes requiring smaller trucks. Outer NW (Tuscany, Royal Oak) has wide suburban access.',
                'nearby_landmarks' => 'University of Calgary, McMahon Stadium, Nose Hill Park, Market Mall, Bowness Park',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 450,
                'walkability_notes' => 'Inner NW neighborhoods like Kensington are highly walkable with transit access. Outer suburbs are car-dependent with CTrain access via Tuscany station.',
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
                'avg_home_price' => 420000,
                'dominant_housing_type' => 'Mix of townhouses, condos, and single-family',
                'parking_restrictions' => 'Most residential areas have unrestricted street parking. Condo complexes require loading dock coordination.',
                'elevator_booking_required' => false,
                'access_notes' => 'Newer NE communities have wide streets and easy truck access. Airport proximity means some areas have noise considerations during moves.',
                'nearby_landmarks' => 'Calgary International Airport, Peter Lougheed Centre, Prairie Winds Park, CrossIron Mills (nearby)',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 380,
                'walkability_notes' => 'Limited walkability — most NE communities are car-dependent. Bridgeland is the exception with excellent walkability and CTrain access. Bus routes serve major corridors.',
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
                'avg_home_price' => 720000,
                'dominant_housing_type' => 'Mixed — high-rise condos to luxury estates',
                'parking_restrictions' => 'Beltline and Mission have strict permit parking. 17th Ave has 2-hour meters. Outer SW has unrestricted residential parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Downtown-adjacent areas require elevator bookings and loading dock reservations. Beltline high-rises have specific move-in windows. Outer SW (Aspen Woods, Signal Hill) has easy driveway access.',
                'nearby_landmarks' => '17th Avenue, Marda Loop, South Centre Mall, Westhills, Glenmore Reservoir, Heritage Park',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 480,
                'walkability_notes' => 'Beltline and Mission are Calgary\'s most walkable areas. Marda Loop and Altadore score well. Outer SW suburbs are car-dependent with limited transit.',
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
                'avg_home_price' => 480000,
                'dominant_housing_type' => 'Single-family detached with growing multi-family',
                'parking_restrictions' => 'Most SE residential areas have unrestricted parking. Newer communities like Seton have some visitor parking restrictions.',
                'elevator_booking_required' => false,
                'access_notes' => 'SE Calgary has excellent truck access with wide streets and Deerfoot Trail/Stoney Trail connectivity. Newer communities may have construction traffic.',
                'nearby_landmarks' => 'South Health Campus, Southcentre Mall, Spruce Meadows, Fish Creek Park, Seton Urban District, YMCA Seton',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 400,
                'walkability_notes' => 'SE communities are generally car-dependent. Seton and Mahogany have emerging walkable town centres. CTrain access via Somerset-Bridlewood and Shawnessy stations.',
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
            $result[$data['slug']] = Area::updateOrCreate(['slug' => $data['slug']], $data);
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
                'avg_home_price' => 680000,
                'dominant_housing_type' => 'Character homes & condos',
                'parking_restrictions' => 'Metered street parking on Kensington Road and 10th Street. Residential permits required. Back lanes are tight for large trucks.',
                'elevator_booking_required' => true,
                'access_notes' => 'Narrow streets and mature trees limit access. Many homes accessed via back lanes only. Reserve curbside loading zone through 311 for large moves.',
                'nearby_landmarks' => 'Kensington Village shops, Bow River pathway, SAIT, Riley Park, Hillhurst Sunnyside Community',
                'move_complexity' => 'hard',
                'avg_move_cost_2bed' => 520,
                'walkability_notes' => 'One of Calgary\'s most walkable neighborhoods. Walk Score of 85+. Everything from groceries to restaurants within walking distance. Excellent CTrain access via Sunnyside station.',
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
                'avg_home_price' => 700000,
                'dominant_housing_type' => 'Character homes & modern infills',
                'parking_restrictions' => 'Residential permit parking on most blocks. Back-lane access common. Arrange temporary permits for moving trucks.',
                'elevator_booking_required' => false,
                'access_notes' => 'Older homes have narrow staircases and back-lane only access. Modern infills have front garages but tight interior layouts. Street widths vary.',
                'nearby_landmarks' => 'Kensington Village, Riley Park, SAIT, Bow River pathway, Hillhurst Sunnyside Community Association',
                'move_complexity' => 'hard',
                'avg_move_cost_2bed' => 510,
                'walkability_notes' => 'Highly walkable inner-city neighbourhood adjacent to Kensington. Walk Score 80+. Shops, cafes, and transit within walking distance. CTrain via Sunnyside station.',
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
                'avg_home_price' => 580000,
                'dominant_housing_type' => 'Single-family homes & low-rise apartments',
                'parking_restrictions' => 'University overflow parking fills streets during school year. Residential permits may apply on some blocks.',
                'elevator_booking_required' => false,
                'access_notes' => 'Proximity to Crowchild Trail provides easy truck access. Residential streets are generally wide. Expect higher traffic during university term.',
                'nearby_landmarks' => 'University of Calgary, Foothills Medical Centre, McMahon Stadium, Crowchild Trail',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 410,
                'walkability_notes' => 'Good walkability near campus. Walking distance to university amenities. Bus and CTrain access via University station. Local shops along Crowchild Trail.',
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
                'avg_home_price' => 620000,
                'dominant_housing_type' => 'Mix of bungalows and newer infills',
                'parking_restrictions' => 'Residential parking only. University event days can fill surrounding streets.',
                'elevator_booking_required' => false,
                'access_notes' => 'Standard suburban access. Some streets near the university have traffic calming measures. Good truck access via Shaganappi Trail.',
                'nearby_landmarks' => 'University of Calgary, Market Mall, Foothills Hospital, McMahon Stadium',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 430,
                'walkability_notes' => 'Good walkability for a suburban area. Market Mall and university within walking distance. CTrain at University station.',
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
                'avg_home_price' => 550000,
                'dominant_housing_type' => 'Bungalows & split-levels (1960s)',
                'parking_restrictions' => 'Unrestricted residential parking. University overflow parking can fill streets during school year.',
                'elevator_booking_required' => false,
                'access_notes' => 'Standard suburban streets with good truck access. Some homes have narrow driveways typical of 1960s builds. Garage access varies.',
                'nearby_landmarks' => 'University of Calgary, Brentwood Village Mall, Nose Hill Park, CTrain Brentwood station',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 400,
                'walkability_notes' => 'Moderate walkability. Close to University CTrain station. Local shops along Charleswood Drive. Good bus connections.',
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
                'avg_home_price' => 530000,
                'dominant_housing_type' => 'Bungalows & split-levels',
                'parking_restrictions' => 'Unrestricted residential. Dalhousie CTrain station area has timed parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Standard 1970s suburban layout with good access. Cul-de-sacs can require reversing trucks. Dalhousie Drive is the main artery.',
                'nearby_landmarks' => 'Dalhousie CTrain station, Nose Hill Park, Crowfoot Crossing, University of Calgary (nearby)',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 400,
                'walkability_notes' => 'Moderate walkability. Dalhousie CTrain station provides transit access. Crowfoot Crossing nearby for shopping. Good pathway network.',
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
                'avg_home_price' => 590000,
                'dominant_housing_type' => 'Single-family detached (1980s-90s)',
                'parking_restrictions' => 'No restrictions. Wide residential streets.',
                'elevator_booking_required' => false,
                'access_notes' => 'Elevated hilltop community with good access. Some steep driveways on north-facing lots. Wide streets throughout.',
                'nearby_landmarks' => 'Nose Hill Park, Edgemont Ravines, Country Hills Boulevard, Dalhousie CTrain (nearby)',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 420,
                'walkability_notes' => 'Car-dependent hilltop suburb. Local strip mall on Edgemont Boulevard. Nose Hill Park access for walking. Bus routes to CTrain.',
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
                'avg_home_price' => 560000,
                'dominant_housing_type' => 'Single-family detached (2000s builds)',
                'parking_restrictions' => 'No restrictions. Wide streets and double driveways throughout.',
                'elevator_booking_required' => false,
                'access_notes' => 'Easy access throughout. Wide suburban streets, double garages, and no back-lane issues. One of the easiest NW neighborhoods for movers.',
                'nearby_landmarks' => 'Tuscany Club, Tuscany CTrain station, 12 Mile Coulee Park, Rocky Ridge YMCA, Stoney Trail access',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 420,
                'walkability_notes' => 'Car-dependent suburb. Tuscany CTrain station provides downtown access. Local commercial area at Tuscany Market. Limited walking amenities.',
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
                'avg_home_price' => 520000,
                'dominant_housing_type' => 'Single-family detached & townhouses',
                'parking_restrictions' => 'No restrictions in residential areas. Royal Oak shopping centre has timed parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Easy suburban access. Wide streets. Stoney Trail provides quick highway connections. Newer builds have oversized garages.',
                'nearby_landmarks' => 'Royal Oak Shopping Centre, Twelve Mile Coulee, Tuscany CTrain station (nearby), Stoney Trail',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 400,
                'walkability_notes' => 'Car-dependent suburb with local shopping at Royal Oak centre. No direct CTrain — nearest station is Tuscany. Good Stoney Trail access.',
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
                'avg_home_price' => 600000,
                'dominant_housing_type' => 'Single-family detached (1980s-90s)',
                'parking_restrictions' => 'No restrictions. Quiet residential streets with ample parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Mature suburb with tree-lined streets and gentle curves. Good truck access via Crowchild Trail and Stoney Trail. Standard driveways and garages.',
                'nearby_landmarks' => 'Crowchild Trail, Stoney Trail, Tuscany CTrain station (nearby), Scenic Acres parks',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 420,
                'walkability_notes' => 'Car-dependent suburb. Limited local commercial. Good pathway network. Bus service available. Quiet residential setting.',
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
                'avg_home_price' => 480000,
                'dominant_housing_type' => 'Character bungalows & cottages',
                'parking_restrictions' => 'Unrestricted residential parking. Bowness Park area has seasonal restrictions.',
                'elevator_booking_required' => false,
                'access_notes' => 'Older neighborhood with some narrow streets and mature trees. Back lanes may be unpaved. Watch for low-hanging branches near older homes.',
                'nearby_landmarks' => 'Bowness Park, Bow River pathways, Bowness High School, Shouldice Athletic Park',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 420,
                'walkability_notes' => 'Charming walkable main street along Bowness Road. Access to Bow River pathways. Bus connections to CTrain. Growing cafe and shop scene.',
                'faq_json' => [
                    ['question' => 'Is Bowness considered inner-city Calgary?', 'answer' => 'Yes — Bowness is an inner-city neighbourhood about 15 minutes from downtown, with its own main street and community character.'],
                    ['question' => 'Are Bowness homes hard to move because of narrow streets?', 'answer' => 'Some Bowness streets are narrow with mature trees. Our drivers select the appropriate truck size and route for your specific address.'],
                    ['question' => 'What is the average home price when moving to Bowness?', 'answer' => 'We\'re movers, not realtors — but Bowness offers some of the most affordable inner-city housing in Calgary, which keeps it a popular moving destination.'],
                ],
            ],
            [
                'slug' => 'sage-hill',
                'name' => 'Sage Hill',
                'meta_title' => 'Sage Hill Movers Calgary | Unitas Movers',
                'meta_description' => 'Movers in Sage Hill, NW Calgary. New community, modern homes. Licensed, insured, affordable. Get your free moving quote today.',
                'h1' => 'Sage Hill Calgary Moving Services',
                'body' => '<p>Sage Hill is a newer NW Calgary community developed from the early 2010s, located near Stoney Trail and Symons Valley. With brand-new homes at accessible price points, it has become a popular destination for first-time buyers and young families moving to the northwest.</p>
<h2>Moving in Sage Hill</h2>
<p>As one of Calgary\'s newest NW communities, Sage Hill features wide streets, modern infrastructure, and homes with double garages and open floor plans — all of which make moving day efficient. Some sections may still have nearby construction activity, which our crews plan around.</p>
<p>Sage Hill\'s proximity to the Sage Hill and Creekside shopping centres gives residents convenient access to groceries, restaurants, and services. Whether you\'re relocating from another Calgary neighbourhood or moving within the NW, Unitas Movers provides professional, careful service.</p>',
                'latitude' => 51.1580,
                'longitude' => -114.1520,
                'population' => 9000,
                'avg_home_price' => 510000,
                'dominant_housing_type' => 'Single-family detached & townhouses (2010s)',
                'parking_restrictions' => 'No restrictions. New builds have ample driveway and garage space.',
                'elevator_booking_required' => false,
                'access_notes' => 'Brand-new community with wide streets and easy access. Some areas still under construction — watch for construction vehicles and unpaved sections.',
                'nearby_landmarks' => 'Sage Hill Shopping Centre, Creekside Shopping Centre, Stoney Trail, Symons Valley Ranch',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 400,
                'walkability_notes' => 'Car-dependent new suburb. Local shopping at Sage Hill centre. No nearby CTrain — bus connections to Tuscany station.',
                'faq_json' => [
                    ['question' => 'Is Sage Hill still under construction?', 'answer' => 'Some areas of Sage Hill are still developing, but the community is well-established with schools, shopping, and completed residential phases.'],
                    ['question' => 'How far is Sage Hill from downtown Calgary?', 'answer' => 'Sage Hill is about 25-30 minutes from downtown via Stoney Trail or Shaganappi Trail, depending on traffic.'],
                    ['question' => 'Do you serve the townhomes in Sage Hill?', 'answer' => 'Yes — we handle both single-family and townhome moves in Sage Hill, including stair carries and limited-space navigation.'],
                ],
            ],
            [
                'slug' => 'evanston',
                'name' => 'Evanston',
                'meta_title' => 'Evanston Movers Calgary | Unitas Movers',
                'meta_description' => 'Moving to Evanston, NW Calgary? Professional movers for this growing community. Licensed, insured. Free moving quotes.',
                'h1' => 'Evanston Calgary Moving Company',
                'body' => '<p>Evanston is a large, family-friendly NW Calgary community that has experienced rapid growth since development began in the late 2000s. Located along Symons Valley Parkway near Stoney Trail, Evanston offers new homes, a growing town centre, and a strong sense of community.</p>
<h2>Moving in Evanston</h2>
<p>Evanston\'s modern street layout is designed for easy navigation, with wide roads, double garages, and well-planned infrastructure. The community\'s range of housing — from townhomes to larger single-family detached homes — means we handle moves of all sizes here.</p>
<p>Many Evanston families are first-time homebuyers or young families upgrading from condos elsewhere in the city. We provide full-service moving including packing, furniture assembly, and appliance disconnection to make your transition seamless.</p>',
                'latitude' => 51.1620,
                'longitude' => -114.1050,
                'population' => 16000,
                'avg_home_price' => 490000,
                'dominant_housing_type' => 'Single-family & townhouses (2010s builds)',
                'parking_restrictions' => 'No restrictions. Wide streets with double garages.',
                'elevator_booking_required' => false,
                'access_notes' => 'New community with excellent truck access. Wide streets and well-planned road network. Symons Valley Parkway is the main access route.',
                'nearby_landmarks' => 'Evanston Towne Centre, Creekside Shopping, Stoney Trail, Symons Valley',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 390,
                'walkability_notes' => 'Car-dependent new suburb. Growing local commercial along Symons Valley Road. Bus service available. Planned future transit improvements.',
                'faq_json' => [
                    ['question' => 'Is Evanston a new community?', 'answer' => 'Evanston has been developing since the late 2000s and is now well-established with schools, shopping, parks, and a growing town centre.'],
                    ['question' => 'How far is Evanston from downtown?', 'answer' => 'Evanston is about 25-30 minutes from downtown Calgary. Stoney Trail and Symons Valley Parkway provide efficient highway connections.'],
                    ['question' => 'Do you offer full-service moves in Evanston?', 'answer' => 'Yes — we offer packing, loading, transport, unloading, unpacking, and furniture assembly for Evanston residents.'],
                ],
            ],
        ];

        foreach ($nwNeighborhoods as $n) {
            $n['area_type'] = 'neighborhood';
            $n['parent_id'] = $quadrants['nw-calgary']->id;
            $n['is_published'] = true;
            $n['sort_order'] = $sortOrder++;
            Area::updateOrCreate(['slug' => $n['slug']], $n);
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
                'avg_home_price' => 520000,
                'dominant_housing_type' => 'Condos, townhouses & heritage homes',
                'parking_restrictions' => 'Zone permit parking throughout. 1st Avenue has metered parking. Limited curbside loading options — may need to book through 311.',
                'elevator_booking_required' => true,
                'access_notes' => 'Hilly terrain with narrow streets. Many condo buildings require elevator booking and loading dock reservation 48 hours in advance. Heritage homes on Edmonton Trail have lane access only.',
                'nearby_landmarks' => 'Bridgeland-Memorial CTrain station, Bridgeland Market, Tom Campbell\'s Hill, Calgary Zoo, Bow River pathways',
                'move_complexity' => 'hard',
                'avg_move_cost_2bed' => 500,
                'walkability_notes' => 'Walk Score 90+. One of Calgary\'s most walkable neighborhoods. Groceries, restaurants, cafes all within walking distance. Direct CTrain access. River pathways for cycling.',
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
                'avg_home_price' => 560000,
                'dominant_housing_type' => 'Character bungalows & new infills',
                'parking_restrictions' => 'Unrestricted residential parking. Edmonton Trail frontage has metered spots.',
                'elevator_booking_required' => false,
                'access_notes' => 'Mixed street widths. Older blocks have narrow lanes. Newer infill builds usually have front-access garages. Good access from Edmonton Trail and 4th Street NE.',
                'nearby_landmarks' => 'Bridgeland (adjacent), Edmonton Trail shops, Renfrew Athletic Park, Nose Creek pathway',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 440,
                'walkability_notes' => 'Good walkability with shops along Edmonton Trail. Close to Bridgeland amenities. Bus routes along Edmonton Trail. CTrain accessible via Bridgeland station.',
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
                'avg_home_price' => 350000,
                'dominant_housing_type' => 'Single-family detached & townhouses',
                'parking_restrictions' => 'Unrestricted residential parking. Marlborough Mall area has timed parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Standard suburban grid layout. Easy truck access on wide 1960s-70s streets. Memorial Drive and 36 Street are main arteries.',
                'nearby_landmarks' => 'Marlborough Mall, Marlborough CTrain station, 17 Avenue NE shops, Bob Bahan Aquatic Centre',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 360,
                'walkability_notes' => 'Moderate walkability with Marlborough Mall nearby. CTrain access at Marlborough station. Strong ethnic food and shopping corridor on 36 Street NE.',
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
                'avg_home_price' => 380000,
                'dominant_housing_type' => 'Single-family detached (1980s)',
                'parking_restrictions' => 'No restrictions. Ample street and driveway parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Standard suburban layout with easy access. Wide crescents and cul-de-sacs. McKnight Boulevard and 68 Street are main access routes.',
                'nearby_landmarks' => 'Prairie Winds Park, Falconridge/Castleridge Community Centre, Village Square Leisure Centre, McKnight Boulevard',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 370,
                'walkability_notes' => 'Car-dependent suburb. Local strip malls along Falconridge Boulevard. Bus service along McKnight. No nearby CTrain station.',
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
                'avg_home_price' => 420000,
                'dominant_housing_type' => 'Single-family & townhouses (2000s)',
                'parking_restrictions' => 'No restrictions in residential areas. Some townhouse complexes have visitor parking limits.',
                'elevator_booking_required' => false,
                'access_notes' => 'Newer community with good access. Wide streets. Saddletowne Circle transit hub provides a useful landmark for navigation.',
                'nearby_landmarks' => 'Saddletowne Circle, Genesis Centre, Saddleridge Community Association, Country Hills Boulevard',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 380,
                'walkability_notes' => 'Limited walkability. Local commercial at Saddletowne Circle. Genesis Centre for recreation. Bus hub at Saddletowne. Green Line CTrain planned.',
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
                'avg_home_price' => 400000,
                'dominant_housing_type' => 'Single-family detached & townhouses (2010s)',
                'parking_restrictions' => 'No restrictions. New builds have double driveways.',
                'elevator_booking_required' => false,
                'access_notes' => 'Brand-new community with excellent wide-street access. Some areas still developing — watch for construction. Airport noise can be noticeable during outdoor loading.',
                'nearby_landmarks' => 'Calgary International Airport, Stoney Trail, Country Hills Boulevard, CrossIron Mills (nearby)',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 380,
                'walkability_notes' => 'Car-dependent new suburb. Limited local amenities — most shopping requires driving. Bus service available. Future Green Line CTrain planned.',
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
                'avg_home_price' => 410000,
                'dominant_housing_type' => 'Single-family & row houses (2015+ builds)',
                'parking_restrictions' => 'No restrictions. Wide streets designed for modern traffic.',
                'elevator_booking_required' => false,
                'access_notes' => 'One of Calgary\'s newest NE communities. Wide streets, new infrastructure, easy access. Airport Road and Stoney Trail connections.',
                'nearby_landmarks' => 'Airport Trail, Stoney Trail, Cross Iron Mills (nearby), planned NE commercial development',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 375,
                'walkability_notes' => 'Car-dependent new community. Very limited local amenities currently. Designed with future commercial development in mind. Bus routes planned.',
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
                'avg_home_price' => 370000,
                'dominant_housing_type' => 'Single-family & townhouses (1990s-2000s)',
                'parking_restrictions' => 'No restrictions. Some townhouse visitor parking restrictions.',
                'elevator_booking_required' => false,
                'access_notes' => 'Standard suburban access. Wide streets. 80 Avenue and Castleridge Boulevard are main arteries.',
                'nearby_landmarks' => 'Village Square Leisure Centre, Castleridge Plaza, 68 Street commercial corridor, Martindale Community Centre',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 370,
                'walkability_notes' => 'Limited walkability. Local strip mall amenities. Bus service on major roads. Car-dependent for most errands.',
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
            Area::updateOrCreate(['slug' => $n['slug']], $n);
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
                'avg_home_price' => 380000,
                'dominant_housing_type' => 'High-rise condos & apartments',
                'parking_restrictions' => 'Strict permit parking zone. 2-hour metered parking on most streets. Loading zones must be reserved through building management. No overnight truck parking.',
                'elevator_booking_required' => true,
                'access_notes' => 'High-rise buildings require elevator booking (48-72 hours advance), loading dock reservation, and certificate of insurance. Narrow one-way streets. Many buildings restrict moves to weekdays 9 AM-5 PM.',
                'nearby_landmarks' => '17th Avenue, Stampede Grounds, Central Memorial Park, Tomkins Park, Calgary Tower (nearby)',
                'move_complexity' => 'hard',
                'avg_move_cost_2bed' => 550,
                'walkability_notes' => 'Calgary\'s most walkable neighborhood. Walk Score 95+. Everything within walking distance — groceries, restaurants, nightlife, transit. CTrain access at Victoria Park and City Hall stations.',
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
                'avg_home_price' => 450000,
                'dominant_housing_type' => 'Character homes & condo towers',
                'parking_restrictions' => 'Permit parking on most residential streets. 4th Street has metered parking. Condo buildings have loading dock access.',
                'elevator_booking_required' => true,
                'access_notes' => 'Mix of older character homes and modern condo towers. Older homes accessed via narrow streets and back lanes. Condo buildings require elevator booking and loading dock reservation.',
                'nearby_landmarks' => '4th Street shops, Elbow River pathways, Stampede Park, Lindsay Park, Central Memorial Park',
                'move_complexity' => 'hard',
                'avg_move_cost_2bed' => 510,
                'walkability_notes' => 'One of Calgary\'s most walkable neighborhoods. Walk Score 85+. Close to downtown, Elbow River pathways, and 4th Street commercial district. CTrain access nearby.',
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
                'avg_home_price' => 700000,
                'dominant_housing_type' => 'Mix of bungalows, infills, and low-rise condos',
                'parking_restrictions' => '33rd Avenue has metered parking. Residential streets allow 2-hour parking for non-residents. Permit zones near commercial strip.',
                'elevator_booking_required' => false,
                'access_notes' => 'Mixed access — older bungalows have back-lane access, newer infills often have front garages. 33rd Avenue commercial strip can be congested. Side streets are quieter for loading.',
                'nearby_landmarks' => 'Marda Loop shopping district, River Park, Garrison Woods, Sandy Beach, Currie Barracks',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 480,
                'walkability_notes' => 'Excellent walkability along 33rd Avenue corridor. Local shops, restaurants, cafes. River pathways nearby. Bus routes to CTrain. Walk Score 75+.',
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
                'avg_home_price' => 650000,
                'dominant_housing_type' => 'Bungalows & new infills',
                'parking_restrictions' => 'Some permit parking near 17th Avenue. Mostly unrestricted residential parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Inner-city neighbourhood with back-lane access for older homes. New infills have front garages. 17th Avenue and 26th Avenue are busy — use side streets for loading.',
                'nearby_landmarks' => 'Westbrook Mall, 17th Avenue, 37th Street shops, Killarney Aquatic Centre, Crowchild Trail',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 460,
                'walkability_notes' => 'Good walkability with 17th Avenue and 37th Street commercial nearby. CTrain access at Westbrook station. Good bus network. Walk Score 70+.',
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
                'avg_home_price' => 750000,
                'dominant_housing_type' => 'Infills & renovated bungalows',
                'parking_restrictions' => 'Residential permit parking near Marda Loop commercial area. Most of Altadore has unrestricted street parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Mix of old and new homes. Original bungalows have back-lane access. New infills typically have front-attached garages on wider lots. River Park area can have narrow, tree-lined streets.',
                'nearby_landmarks' => 'River Park, Sandy Beach, Altadore shops on 14th Street, South Calgary, Marda Loop (adjacent)',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 470,
                'walkability_notes' => 'Good walkability with 14th Street shops and Marda Loop nearby. River pathways for cycling. Bus routes on 14th Street. Pleasant tree-lined streets.',
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
                'avg_home_price' => 550000,
                'dominant_housing_type' => 'Bungalows, duplexes & infills',
                'parking_restrictions' => 'Some permit parking near 33rd Avenue. Mostly unrestricted residential parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Grid street pattern with back-lane access. Good truck routing via Crowchild Trail and Macleod Trail. Standard inner-city access.',
                'nearby_landmarks' => 'Marda Loop commercial (adjacent), 33rd Avenue shops, Crowchild Trail, Macleod Trail',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 440,
                'walkability_notes' => 'Good inner-city walkability. Shared 33rd Avenue commercial with Marda Loop. Bus routes throughout. Walk Score 70+.',
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
                'avg_home_price' => 400000,
                'dominant_housing_type' => 'Apartments, low-rise condos & older homes',
                'parking_restrictions' => 'Permit parking on many streets. Limited street parking due to hilly terrain and narrow roads.',
                'elevator_booking_required' => false,
                'access_notes' => 'Hilly terrain with steep streets. Limited parking. Older apartment buildings without elevators require stair carries. Good truck access from 14th Street and Crowchild Trail.',
                'nearby_landmarks' => '17th Avenue, Crowchild Trail, 14th Street, downtown skyline views',
                'move_complexity' => 'hard',
                'avg_move_cost_2bed' => 490,
                'walkability_notes' => 'Good walkability with 17th Avenue nearby. Stunning downtown views. Walk-up apartments common. Bus routes along 14th Street. Walk Score 75+.',
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
                'avg_home_price' => 680000,
                'dominant_housing_type' => 'Larger single-family detached',
                'parking_restrictions' => 'Unrestricted residential parking. Quiet tree-lined streets.',
                'elevator_booking_required' => false,
                'access_notes' => 'Established neighbourhood with larger homes and lots. Some reservoir-adjacent properties have unique access. Good routing via Crowchild and Glenmore Trail.',
                'nearby_landmarks' => 'Glenmore Reservoir, North Glenmore Park, Crowchild Trail, Glenmore Trail',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 450,
                'walkability_notes' => 'Car-dependent but peaceful. Reservoir pathways for walking and cycling. Limited commercial within walking distance. Good highway access.',
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
                'avg_home_price' => 540000,
                'dominant_housing_type' => 'Single-family detached (1990s)',
                'parking_restrictions' => 'No restrictions. Wide streets and driveways.',
                'elevator_booking_required' => false,
                'access_notes' => 'Suburban layout with excellent truck access. Wide streets, double garages, easy navigation. Sarcee Trail provides highway access.',
                'nearby_landmarks' => 'Signal Hill Shopping Centre, Westhills Towne Centre, Canada Olympic Park (nearby), Stoney Trail',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 420,
                'walkability_notes' => 'Car-dependent suburb with local shopping at Signal Hill Centre. Westhills nearby. Bus service on major roads. No nearby CTrain station.',
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
                'avg_home_price' => 1100000,
                'dominant_housing_type' => 'Luxury single-family detached',
                'parking_restrictions' => 'No restrictions. Large lots with triple garages and circular driveways.',
                'elevator_booking_required' => false,
                'access_notes' => 'Premium community with large homes requiring full-service crews. Wide streets, large driveways, and spacious lots make truck access easy. Expect longer loading times due to home size.',
                'nearby_landmarks' => 'Aspen Landing Shopping Centre, Ernest Manning High School, Discovery Ridge, Stoney Trail, Westhills',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 550,
                'walkability_notes' => 'Car-dependent executive community. Aspen Landing provides local shopping. Limited transit. Designed around driving with excellent highway access via Stoney Trail.',
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
                'avg_home_price' => 850000,
                'dominant_housing_type' => 'Large single-family detached',
                'parking_restrictions' => 'No restrictions. Quiet residential streets with large lots.',
                'elevator_booking_required' => false,
                'access_notes' => 'Hillside community with some steep driveways. Wide streets but hilly terrain. Large homes with multiple levels require careful furniture handling on stairs.',
                'nearby_landmarks' => 'Griffith Woods Park, Discovery Ridge pathways, Stoney Trail, Aspen Woods (adjacent), Fish Creek Park (nearby)',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 520,
                'walkability_notes' => 'Very car-dependent. Beautiful natural setting with pathway network. No commercial amenities within walking distance. Stoney Trail access for commuting.',
                'faq_json' => [
                    ['question' => 'Are Discovery Ridge driveways steep for moving trucks?', 'answer' => 'Some are — we assess your specific property before move day and position trucks safely on sloped driveways using proper techniques.'],
                    ['question' => 'How far is Discovery Ridge from downtown?', 'answer' => 'Discovery Ridge is about 20 minutes from downtown via Sarcee Trail — a quick commute considering the foothills setting.'],
                    ['question' => 'Do you handle large estate moves?', 'answer' => 'Yes — estate-size homes are well within our capability. We deploy larger crews and plan multi-room loading strategies for efficiency.'],
                ],
            ],
            [
                'slug' => 'springbank-hill',
                'name' => 'Springbank Hill',
                'meta_title' => 'Springbank Hill Movers Calgary | Unitas Movers',
                'meta_description' => 'Moving in Springbank Hill, SW Calgary? Premium movers for large homes. Licensed, insured. Free moving estimates.',
                'h1' => 'Springbank Hill Moving Services — SW Calgary',
                'body' => '<p>Springbank Hill is a premium SW Calgary community featuring large executive homes with stunning Rocky Mountain views. Located along the city\'s western edge near Stoney Trail and Old Banff Coach Road, it offers a prestigious residential setting while maintaining easy access to both the city and the mountains.</p>
<h2>Moving in Springbank Hill</h2>
<p>Springbank Hill homes are among Calgary\'s largest, often exceeding 3,500 square feet with finished walkout basements and expansive lots. Our crews bring the right team size and equipment for these substantial moves, including careful handling of high-end finishes and specialty items.</p>
<p>The community\'s hillside location offers breathtaking views but can present steep driveways and unique access challenges. Our drivers assess each property in advance to ensure smooth truck positioning and efficient loading.</p>',
                'latitude' => 51.0150,
                'longitude' => -114.1780,
                'population' => 8500,
                'avg_home_price' => 900000,
                'dominant_housing_type' => 'Large single-family detached',
                'parking_restrictions' => 'No restrictions. Quiet suburban streets.',
                'elevator_booking_required' => false,
                'access_notes' => 'Premium west-side community with wide streets and large lots. Some homes on hillside lots have challenging access for larger trucks. 85th Street and Old Banff Coach Road are main access routes.',
                'nearby_landmarks' => 'Ambrose University, Springbank Hill Community Centre, 85th Street shops, Stoney Trail',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 530,
                'walkability_notes' => 'Car-dependent premium suburb. Limited local commercial. Beautiful views of the Rockies. Good highway access but minimal transit.',
                'faq_json' => [
                    ['question' => 'How large are Springbank Hill homes?', 'answer' => 'Most Springbank Hill homes are 3,000-5,000+ square feet with finished basements. Plan for a full-day move with a larger crew.'],
                    ['question' => 'Is Springbank Hill close to the mountains?', 'answer' => 'Springbank Hill is on Calgary\'s western edge with direct Rocky Mountain views. Kananaskis and Banff are about 45-60 minutes away.'],
                    ['question' => 'Do you offer premium moving services for Springbank Hill?', 'answer' => 'Yes — we use premium protective materials and larger crews for executive homes. We protect high-end finishes, hardwood, and specialty items.'],
                ],
            ],
        ];

        foreach ($swNeighborhoods as $n) {
            $n['area_type'] = 'neighborhood';
            $n['parent_id'] = $quadrants['sw-calgary']->id;
            $n['is_published'] = true;
            $n['sort_order'] = $sortOrder++;
            Area::updateOrCreate(['slug' => $n['slug']], $n);
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
                'avg_home_price' => 530000,
                'dominant_housing_type' => 'Single-family detached (1990s)',
                'parking_restrictions' => 'Unrestricted residential parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Established suburb with wide streets and standard access. Douglas Glen and Douglasdale share a road network. Well-connected to Deerfoot Trail and Bow Bottom Trail.',
                'nearby_landmarks' => 'Fish Creek Park, Bow River, Douglasdale Community Association, Quarry Park (nearby)',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 410,
                'walkability_notes' => 'Car-dependent suburb with good pathway network. Fish Creek Park access. Douglas Glen has local shops. Bus routes to Somerset-Bridlewood CTrain.',
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
                'avg_home_price' => 500000,
                'dominant_housing_type' => 'Single-family detached & townhouses (2010s)',
                'parking_restrictions' => 'No restrictions in residential areas. Beach club area has member-only parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Newer community with wide streets and easy access. Lake community with private beach — confirm moving truck route doesn\'t cross private roads. Seton nearby for services.',
                'nearby_landmarks' => 'Mahogany Lake & Beach Club, Seton Urban District, South Health Campus, Stoney Trail, Mahogany Village Market',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 410,
                'walkability_notes' => 'Car-dependent lakeside suburb. Mahogany Village Market has local shops. Seton\'s urban district is developing nearby. Bus service available.',
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
                'avg_home_price' => 490000,
                'dominant_housing_type' => 'Single-family detached & townhouses',
                'parking_restrictions' => 'No restrictions. Lake area has resident-only parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Lake community with easy suburban access. Wide streets and well-planned road network. Seton Boulevard is the main access point.',
                'nearby_landmarks' => 'Auburn Bay Lake & Beach, Seton Urban District, South Health Campus, Stoney Trail',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 400,
                'walkability_notes' => 'Car-dependent lakeside community. Seton\'s commercial district developing nearby. Bus service available. Private lake for recreation.',
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
                'avg_home_price' => 510000,
                'dominant_housing_type' => 'Single-family detached (2000s)',
                'parking_restrictions' => 'No restrictions. Wide residential streets.',
                'elevator_booking_required' => false,
                'access_notes' => 'Established suburb with easy truck access. Wide streets, standard garages. Cranston Ridge homes on the escarpment have steep driveways and stunning views but challenging access.',
                'nearby_landmarks' => 'Fish Creek Park (Bow Valley Ranch), Cranston Market, Cranston Ridge viewpoint, Deerfoot Trail',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 410,
                'walkability_notes' => 'Car-dependent suburb. Cranston Market has local shops. Excellent access to Fish Creek Park trails. Bus service to Somerset CTrain.',
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
                'avg_home_price' => 480000,
                'dominant_housing_type' => 'Single-family detached (new urbanist design)',
                'parking_restrictions' => 'Some streets have narrow parking by design (traffic calming). Town centre has timed parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'New urbanist community with intentionally narrow streets and rear lanes. Trucks may need to use back lanes for some homes. The High Street town centre area is pedestrian-focused — plan truck routing carefully.',
                'nearby_landmarks' => 'McKenzie Towne High Street, Inverness business park, Deerfoot Trail, 130 Avenue',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 420,
                'walkability_notes' => 'One of SE Calgary\'s most walkable communities. High Street has shops, restaurants, and services. Back-lane design encourages walking. Good bus service.',
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
                'avg_home_price' => 420000,
                'dominant_housing_type' => 'Single-family & townhouses (2000s)',
                'parking_restrictions' => 'No restrictions. Standard suburban parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Easy suburban access with wide streets. 130 Avenue and Copperfield Boulevard are main routes. Close to Stoney Trail for connections.',
                'nearby_landmarks' => 'Copperfield Park, 130 Avenue shopping, South Health Campus (nearby), Stoney Trail',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 390,
                'walkability_notes' => 'Car-dependent suburb. Local commercial along 130 Avenue. Bus service to Somerset-Bridlewood CTrain. Pathway connections to Fish Creek Park.',
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
                'avg_home_price' => 440000,
                'dominant_housing_type' => 'Single-family, semi-detached & townhouses',
                'parking_restrictions' => 'No restrictions. Standard suburban parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Well-laid-out community with good street access and modern infrastructure. Most homes have attached garages. 130 Avenue SE and 52 Street SE provide main access.',
                'nearby_landmarks' => 'New Brighton Central Park, McKenzie Towne (adjacent), 130 Avenue, Stoney Trail',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 390,
                'walkability_notes' => 'Car-dependent suburb. Local amenities shared with McKenzie Towne. Bus service available. Pathway network for walking and cycling.',
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
                'avg_home_price' => 470000,
                'dominant_housing_type' => 'Single-family detached & townhouses (2010s)',
                'parking_restrictions' => 'No restrictions. New suburb with wide streets.',
                'elevator_booking_required' => false,
                'access_notes' => 'Newer community with wide streets and easy access. Walden Gate and Walden Drive are main routes. Close to Macleod Trail and Stoney Trail.',
                'nearby_landmarks' => 'Walden community parks, Shawnessy Shopping Centre (nearby), Fish Creek Park, Stoney Trail',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 400,
                'walkability_notes' => 'Car-dependent new suburb. Shawnessy Shopping Centre nearby. Bus service to Shawnessy CTrain station. Good pathway connections.',
                'faq_json' => [
                    ['question' => 'Is Walden still being developed?', 'answer' => 'Parts of Walden are still under construction, but the community is well-established with many completed phases and growing amenities.'],
                    ['question' => 'How far is Walden from downtown Calgary?', 'answer' => 'Walden is about 25-30 minutes from downtown via Macleod Trail or Deerfoot Trail. It\'s on the city\'s southern edge near Spruce Meadows.'],
                    ['question' => 'Do you coordinate with builders for new home moves?', 'answer' => 'Yes — we regularly coordinate possession-day moves with builders in Walden and other new SE communities.'],
                ],
            ],
            [
                'slug' => 'seton',
                'name' => 'Seton',
                'meta_title' => 'Seton Movers Calgary | Unitas Movers',
                'meta_description' => 'Moving to Seton, SE Calgary? Urban village movers. Condos and mixed-use. Licensed, insured. Free moving quotes.',
                'h1' => 'Seton Calgary Moving Services',
                'body' => '<p>Seton is SE Calgary\'s emerging urban village, designed as a walkable mixed-use community centred around the South Health Campus and YMCA Seton. With condos, townhomes, and retail spaces all integrated into a compact, transit-oriented design, Seton represents the future of Calgary suburban living.</p>
<h2>Moving in Seton</h2>
<p>Seton\'s mixed-use design means many residents live in multi-storey buildings that require elevator booking and loading dock coordination. The urban district has specific parking and access rules that differ from typical suburban communities. Our crews are experienced with these requirements.</p>
<p>The community is on 52 Street SE near Stoney Trail, providing good highway access. As Seton continues to develop, it\'s becoming one of SE Calgary\'s most sought-after addresses for those who want an urban lifestyle outside the downtown core.</p>',
                'latitude' => 50.8870,
                'longitude' => -113.9510,
                'population' => 7000,
                'avg_home_price' => 440000,
                'dominant_housing_type' => 'Condos, townhouses & mixed-use',
                'parking_restrictions' => 'Urban district has timed parking. Residential areas have underground parkades for condos.',
                'elevator_booking_required' => true,
                'access_notes' => 'Urban village design with mixed-use buildings. Condo buildings require elevator booking and loading dock access. South Health Campus and YMCA are landmarks for navigation.',
                'nearby_landmarks' => 'South Health Campus, YMCA Seton, Seton Recreation Centre, Mahogany (adjacent), Stoney Trail',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 430,
                'walkability_notes' => 'Calgary\'s most walkable SE community. Urban village design with retail, dining, and services. Medical district nearby. Future Green Line CTrain terminus planned.',
                'faq_json' => [
                    ['question' => 'Do Seton condos require elevator booking?', 'answer' => 'Yes — most Seton condo buildings require elevator booking 48-72 hours in advance. We coordinate this as part of our moving service.'],
                    ['question' => 'Is Seton walkable?', 'answer' => 'Yes — Seton is designed as an urban village with shops, restaurants, medical services, and recreation all within walking distance.'],
                    ['question' => 'How far is Seton from downtown Calgary?', 'answer' => 'Seton is about 25-30 minutes from downtown via Deerfoot Trail. The future Green Line CTrain will provide direct transit access.'],
                ],
            ],
            [
                'slug' => 'lake-bonavista',
                'name' => 'Lake Bonavista',
                'meta_title' => 'Lake Bonavista Movers Calgary | Unitas Movers',
                'meta_description' => 'Movers in Lake Bonavista, SE Calgary. Established lakeside community. Licensed, insured, professional. Free moving quotes.',
                'h1' => 'Lake Bonavista Moving Company — SE Calgary',
                'body' => '<p>Lake Bonavista is one of Calgary\'s original lake communities, established in the 1960s and 70s with a private lake exclusively for residents. This mature SE Calgary neighbourhood features larger homes, generous lots, and tree-lined crescents that create a premium, established residential feel.</p>
<h2>Moving in Lake Bonavista</h2>
<p>Lake Bonavista homes are predominantly larger single-family residences with finished basements, many of which have been renovated and updated over the decades. The neighbourhood\'s crescents and cul-de-sacs require careful truck navigation, and some older driveways are narrower than modern builds.</p>
<p>Many Lake Bonavista moves involve families who have lived there for decades, meaning full basements, extensive collections, and sentimental items. We provide careful, respectful handling and offer comprehensive packing services for these significant transitions.</p>',
                'latitude' => 50.9580,
                'longitude' => -114.0350,
                'population' => 8000,
                'avg_home_price' => 650000,
                'dominant_housing_type' => 'Larger single-family detached (1970s-80s)',
                'parking_restrictions' => 'Unrestricted residential parking. Lake access is for residents only.',
                'elevator_booking_required' => false,
                'access_notes' => 'Established premium community with mature trees and larger lots. Crescents and cul-de-sacs require careful truck navigation. Some homes have narrow driveways.',
                'nearby_landmarks' => 'Lake Bonavista (private lake), Fish Creek Park, Southcentre Mall, Lake Bonavista Promenade shops',
                'move_complexity' => 'medium',
                'avg_move_cost_2bed' => 450,
                'walkability_notes' => 'Moderate walkability for a suburb. Lake Bonavista Promenade has local shops and restaurants. Fish Creek Park access. Bus service to Anderson CTrain.',
                'faq_json' => [
                    ['question' => 'Is Lake Bonavista a premium neighbourhood?', 'answer' => 'Yes — Lake Bonavista is one of Calgary\'s original and most desirable lake communities, with a private lake, mature trees, and larger homes.'],
                    ['question' => 'Are Lake Bonavista homes large?', 'answer' => 'Most are — four to five bedrooms with finished basements are common. Many have been renovated and expanded over the decades.'],
                    ['question' => 'Do you handle moves from long-time Lake Bonavista residents?', 'answer' => 'Yes — we frequently help long-time residents downsize or relocate. We handle decades of belongings with care and offer full packing services.'],
                ],
            ],
            [
                'slug' => 'sundance',
                'name' => 'Sundance',
                'meta_title' => 'Sundance Movers Calgary | Unitas Movers',
                'meta_description' => 'Professional movers in Sundance, SE Calgary. Lake community near Fish Creek Park. Licensed, insured. Free moving estimates.',
                'h1' => 'Movers in Sundance, SE Calgary',
                'body' => '<p>Sundance is an established lake community in SE Calgary, developed in the 1980s and 90s with a private lake for residents. Bordering Fish Creek Provincial Park, Sundance offers a family-friendly environment with mature trees, well-maintained homes, and excellent outdoor recreation access.</p>
<h2>Moving in Sundance</h2>
<p>Sundance homes are predominantly single-family detached with double garages and well-maintained yards. The neighbourhood\'s wide suburban streets and standard layouts make moving day straightforward. Sun Valley Boulevard is the main artery connecting the community to Macleod Trail and Fish Creek Boulevard.</p>
<p>The community\'s proximity to Fish Creek Park and the private lake make it a popular family destination. Whether you\'re moving into Sundance for the lake lifestyle or relocating within SE Calgary, our crews provide efficient, careful service.</p>',
                'latitude' => 50.9320,
                'longitude' => -114.0420,
                'population' => 9500,
                'avg_home_price' => 530000,
                'dominant_housing_type' => 'Single-family detached (1980s-90s)',
                'parking_restrictions' => 'No restrictions. Lake access area has resident-only parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Established lake community with wide suburban streets. Standard truck access. Sun Valley Boulevard is the main artery.',
                'nearby_landmarks' => 'Sundance Lake (private), Fish Creek Park, Midnapore Mall, Sun Valley Boulevard',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 410,
                'walkability_notes' => 'Car-dependent lake community. Midnapore Mall has local shopping. Fish Creek Park nearby. Bus service to Fish Creek-Lacombe CTrain.',
                'faq_json' => [
                    ['question' => 'Does Sundance have a private lake?', 'answer' => 'Yes — Sundance features a private lake exclusively for residents, along with a beach and community facility.'],
                    ['question' => 'Is Sundance close to Fish Creek Park?', 'answer' => 'Yes — Sundance borders Fish Creek Provincial Park with direct pathway access for walking, cycling, and nature enjoyment.'],
                    ['question' => 'How much does a Sundance move cost?', 'answer' => 'A typical three-bedroom Sundance home costs $500 to $1,000, depending on distance and services. We provide free, no-obligation estimates.'],
                ],
            ],
        ];

        foreach ($seNeighborhoods as $n) {
            $n['area_type'] = 'neighborhood';
            $n['parent_id'] = $quadrants['se-calgary']->id;
            $n['is_published'] = true;
            $n['sort_order'] = $sortOrder++;
            Area::updateOrCreate(['slug' => $n['slug']], $n);
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
                'avg_home_price' => 460000,
                'dominant_housing_type' => 'Single-family detached (new builds)',
                'parking_restrictions' => 'No restrictions. Wide suburban streets throughout.',
                'elevator_booking_required' => false,
                'access_notes' => 'Fast-growing city with wide modern streets. Excellent truck access. Highway 2 provides direct Calgary connection. New subdivisions may have construction traffic.',
                'nearby_landmarks' => 'Genesis Place, Nose Creek Valley Museum, CrossIron Mills, Highway 2, Balzac',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 400,
                'walkability_notes' => 'Car-dependent but improving. Genesis Place area has shops and services. Main Street has local businesses. Bus service within Airdrie.',
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
                'avg_home_price' => 520000,
                'dominant_housing_type' => 'Single-family detached',
                'parking_restrictions' => 'Historic downtown has timed parking. Residential areas unrestricted.',
                'elevator_booking_required' => false,
                'access_notes' => 'Small-town feel with wide residential streets. Downtown area has narrower heritage streets. Highway 1A and 22 provide access. Watch for horse trailers and agricultural traffic.',
                'nearby_landmarks' => 'Cochrane Ranche Historic Site, Big Hill Springs Park, Bow River, Historic downtown Cochrane, Spray Lake Sawmills Family Sports Centre',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 430,
                'walkability_notes' => 'Downtown Cochrane is walkable with shops and restaurants along 1st Street. Suburban areas are car-dependent. Beautiful Bow River pathways.',
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
                'avg_home_price' => 500000,
                'dominant_housing_type' => 'Single-family detached',
                'parking_restrictions' => 'Downtown has timed parking. Residential unrestricted.',
                'elevator_booking_required' => false,
                'access_notes' => 'Small-town layout with easy access. Downtown area has some narrow heritage streets. Newer communities on the edges have wide modern streets.',
                'nearby_landmarks' => 'Okotoks Erratic (Big Rock), Sheep River, Crystal Shores Beach, Downtown Okotoks shops',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 420,
                'walkability_notes' => 'Downtown Okotoks is walkable with shops and cafes along Elizabeth Street. Sheep River pathways. Suburbs are car-dependent. Limited transit to Calgary.',
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
                'avg_home_price' => 530000,
                'dominant_housing_type' => 'Single-family detached (lakeside)',
                'parking_restrictions' => 'No restrictions. Lake shore areas have seasonal restrictions.',
                'elevator_booking_required' => false,
                'access_notes' => 'Lakeside city with wide streets. Easy truck access throughout. Rainbow Road and Chestermere Boulevard are main arteries. New developments on east side may have construction.',
                'nearby_landmarks' => 'Chestermere Lake, Anniversary Park, John Chicken Memorial Park, Chestermere Regional Recreation Centre',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 410,
                'walkability_notes' => 'Car-dependent lakeside community. Some waterfront walkability. Chestermere has local commercial along Rainbow Road. Limited transit connections to Calgary.',
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
                'avg_home_price' => 370000,
                'dominant_housing_type' => 'Single-family detached',
                'parking_restrictions' => 'No restrictions. Small-town open parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Small prairie town with easy truck access. Wide streets and standard residential layouts. Trans-Canada Highway provides direct Calgary connection.',
                'nearby_landmarks' => 'Strathmore Family Centre, Eagle Lake Golf Course, Trans-Canada Highway, Kinsmen Park',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 380,
                'walkability_notes' => 'Small-town walkability. Downtown has local shops. Car needed for Calgary commuting. No public transit to Calgary.',
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
                'avg_home_price' => 400000,
                'dominant_housing_type' => 'Single-family detached',
                'parking_restrictions' => 'Downtown has timed parking. Residential unrestricted.',
                'elevator_booking_required' => false,
                'access_notes' => 'Small town with easy access. Wide residential streets. Historic downtown area has narrower streets with angled parking. Highway 2A provides Calgary connection.',
                'nearby_landmarks' => 'Historic downtown High River (Heartland filming location), Highwood River, Museum of the Highwood, George Lane Memorial Park',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 390,
                'walkability_notes' => 'Charming small-town walkability downtown. Known as filming location for Heartland TV series. Highwood River pathways. Car needed for Calgary commuting.',
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
                'avg_home_price' => 850000,
                'dominant_housing_type' => 'Condos & townhouses',
                'parking_restrictions' => 'Downtown has metered and timed parking. Residential areas have limited winter parking for snow clearing. Resort areas have private parking.',
                'elevator_booking_required' => true,
                'access_notes' => 'Mountain town with limited truck access in some areas. Spring Creek area has narrow roads. Condo buildings require elevator booking. Dead Man\'s Flats townhouses have single-lane access. Trans-Canada Highway provides the only east-west access.',
                'nearby_landmarks' => 'Three Sisters Mountain, Ha Ling Peak, Canmore Nordic Centre, Downtown Canmore shops, Bow River, Grassi Lakes',
                'move_complexity' => 'hard',
                'avg_move_cost_2bed' => 520,
                'walkability_notes' => 'Excellent walkability in downtown Canmore. Mountain trail access everywhere. Local shops, restaurants, and cafes on Main Street. Limited public transit — ROAM bus to Banff.',
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
                'avg_home_price' => 650000,
                'dominant_housing_type' => 'Apartments & staff housing',
                'parking_restrictions' => 'Very limited parking. Downtown is metered. Parks Canada controls all parking. Residential permits required. Moving truck parking must be coordinated in advance.',
                'elevator_booking_required' => true,
                'access_notes' => 'National park townsite with strict access rules. Parks Canada may require advance notice for moving trucks. Narrow streets with tourist traffic. Most housing is apartments or staff accommodation — elevator booking essential.',
                'nearby_landmarks' => 'Banff Avenue, Banff Springs Hotel, Cascade Mountain, Bow Falls, Sulphur Mountain Gondola, Tunnel Mountain',
                'move_complexity' => 'hard',
                'avg_move_cost_2bed' => 550,
                'walkability_notes' => 'Extremely walkable small town. Everything in Banff is within walking distance. No car needed for daily life. ROAM bus connects to Canmore. Surrounded by national park trails.',
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
                'avg_home_price' => 440000,
                'dominant_housing_type' => 'Single-family detached & acreages',
                'parking_restrictions' => 'No restrictions. Small-town open parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Small hamlet east of Calgary with easy truck access. Highway 560 and Highway 22X connect to Stoney Trail. Mix of newer subdivisions and acreage properties.',
                'nearby_landmarks' => 'Highway 560, Stoney Trail (nearby), Chestermere (nearby), rural acreages',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 400,
                'walkability_notes' => 'Small hamlet with basic local amenities. Car needed for everything. Short commute to Calgary via Highway 560 to Stoney Trail.',
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
                'avg_home_price' => 380000,
                'dominant_housing_type' => 'Single-family detached',
                'parking_restrictions' => 'No restrictions. Small-town open parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Small Highway 2 corridor town with very easy truck access. Wide streets, no traffic, quick loading and unloading. Highway 2 is minutes away.',
                'nearby_landmarks' => 'Highway 2, Crossfield Community Centre, Crossfield Rodeo Grounds, Airdrie (nearby)',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 370,
                'walkability_notes' => 'Very small town — everything is close but car-dependent for work and major shopping. Highway 2 provides quick Airdrie and Calgary access.',
                'faq_json' => [
                    ['question' => 'How far is Crossfield from Calgary?', 'answer' => 'Crossfield is about 50 km north of Calgary on Highway 2 — roughly 30-35 minutes by car.'],
                    ['question' => 'Is Crossfield affordable?', 'answer' => 'Yes — Crossfield offers some of the most affordable housing in the Calgary region, with generous lot sizes and a small-town atmosphere.'],
                    ['question' => 'Do you pass through Airdrie on the way to Crossfield?', 'answer' => 'Yes — Crossfield is north of Airdrie on Highway 2. We serve both communities regularly on the same corridor.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
            [
                'slug' => 'carstairs',
                'name' => 'Carstairs',
                'area_type' => 'town',
                'meta_title' => 'Carstairs Movers | Unitas Movers',
                'meta_description' => 'Moving to Carstairs? Calgary movers serving the Highway 2 north corridor. Licensed, insured. Free moving estimates.',
                'h1' => 'Carstairs Moving Services — Unitas Movers',
                'body' => '<p>Carstairs is a small town on Highway 2 between Calgary and Red Deer, about 60 km north of Calgary. With a population of around 4,500, it offers affordable small-town living with easy highway access to both Calgary and Red Deer for commuting and shopping.</p>
<h2>Calgary to Carstairs Moves</h2>
<p>The Highway 2 corridor makes the drive to Carstairs straightforward and efficient. We serve the town as part of our regular northern Alberta routes. Carstairs\' compact layout means local moves are quick, while moves from Calgary involve a scenic highway trip through the foothills.</p>
<p>Housing in Carstairs is primarily single-family homes — both older properties in the town core and newer builds on the edges. Generous lot sizes and affordable prices attract families looking for space and value outside the city.</p>',
                'latitude' => 51.5620,
                'longitude' => -114.1010,
                'population' => 4500,
                'avg_home_price' => 360000,
                'dominant_housing_type' => 'Single-family detached',
                'parking_restrictions' => 'No restrictions. Small-town open parking.',
                'elevator_booking_required' => false,
                'access_notes' => 'Small Highway 2 town with easy access. No traffic issues. Wide streets and standard residential lots. Quick highway connection.',
                'nearby_landmarks' => 'Highway 2, Carstairs Arena, Carstairs Community Centre, Didsbury (nearby)',
                'move_complexity' => 'easy',
                'avg_move_cost_2bed' => 360,
                'walkability_notes' => 'Small town with basic local amenities. Car essential for work and shopping. Highway 2 provides quick access to Calgary (45 min) and Red Deer (60 min).',
                'faq_json' => [
                    ['question' => 'How far is Carstairs from Calgary?', 'answer' => 'Carstairs is about 60 km north of Calgary on Highway 2 — roughly 45 minutes by car.'],
                    ['question' => 'Is Carstairs affordable?', 'answer' => 'Yes — Carstairs offers very affordable housing with generous lot sizes, making it attractive for families wanting space outside the city.'],
                    ['question' => 'Do you serve both Carstairs and Crossfield?', 'answer' => 'Yes — we serve both communities on the Highway 2 corridor and can handle moves between them or from Calgary to either town.'],
                ],
                'is_published' => true,
                'sort_order' => $sortOrder++,
            ],
        ];

        foreach ($towns as $data) {
            Area::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
