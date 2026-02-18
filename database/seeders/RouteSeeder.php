<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    public function run(): void
    {
        $routes = [
            // ── Calgary ↔ Alberta Cities ─────────────────────────
            [
                'slug' => 'calgary-to-edmonton',
                'origin_city' => 'Calgary',
                'dest_city' => 'Edmonton',
                'distance_km' => 300,
                'drive_time_hours' => 3.0,
                'price_range_min' => 1800,
                'price_range_max' => 5500,
                'meta_title' => 'Calgary to Edmonton Movers | Alpine Movers',
                'meta_description' => 'Calgary to Edmonton moving services. 300 km on Highway 2, from $1,800. Licensed, insured, experienced long-distance crews. Free quotes.',
                'h1' => 'Calgary to Edmonton Moving Services',
                'route_overview' => '<p>The Calgary-to-Edmonton corridor is Alberta\'s busiest moving route — a straight 300 km drive north on the Queen Elizabeth II Highway (Highway 2). It\'s a well-maintained, divided highway that our trucks travel multiple times per week.</p>
<p>Most Calgary-to-Edmonton moves take a single day. Our crew loads in the morning, drives the three-hour highway stretch, and unloads at your new home by evening. For larger homes, we may start earlier or use a two-day schedule to ensure everything is handled with care.</p>
<p>We also serve the communities along the Highway 2 corridor — Red Deer, Innisfail, Lacombe, Ponoka, Wetaskiwin, and Leduc — as stops on this route.</p>',
                'cost_breakdown' => '<h3>What Affects Your Calgary-Edmonton Moving Cost</h3>
<ul>
<li><strong>Home size:</strong> A one-bedroom apartment starts around $1,800, while a four-bedroom house can reach $4,500-$5,500</li>
<li><strong>Packing services:</strong> Full packing adds $300-$800 depending on volume</li>
<li><strong>Heavy or specialty items:</strong> Pianos, hot tubs, and safes require additional handling fees</li>
<li><strong>Time of year:</strong> Summer months (June-August) and month-end dates are busiest and may have premium pricing</li>
<li><strong>Floor access:</strong> Walk-up apartments or homes with many stairs may require additional crew members</li>
</ul>
<p>Our Calgary-to-Edmonton pricing includes the highway drive, fuel, and insurance. No hidden fees — your quote is your price.</p>',
                'destination_guide' => '<h3>Moving to Edmonton</h3>
<p>Edmonton is Alberta\'s capital city with a metro population over 1.4 million. As the gateway to northern Alberta, it anchors the province\'s government, education, and energy sectors.</p>
<p><strong>Popular Edmonton neighbourhoods:</strong> Oliver, Strathcona, Windermere, Summerside, Sherwood Park (Strathcona County), St. Albert, and the growing southwest suburbs.</p>
<p><strong>Key differences from Calgary:</strong> Edmonton has a more grid-based layout, the LRT system covers different corridors, and the river valley parkland system is one of North America\'s largest urban park networks. Winter can be noticeably colder than Calgary, so factor in heated storage if your move spans multiple days in winter.</p>',
                'faq_json' => [
                    ['question' => 'How long does a Calgary to Edmonton move take?', 'answer' => 'The drive is about 3 hours. Most moves are completed in a single day — loading in the morning and unloading by evening. Larger homes may take two days.'],
                    ['question' => 'Do you stop in Red Deer on the way?', 'answer' => 'Yes — we can handle moves to Red Deer, Innisfail, Lacombe, and other Highway 2 corridor communities as part of this route.'],
                    ['question' => 'Is it cheaper to move on a weekday?', 'answer' => 'Yes — weekday and mid-month moves are typically less busy and may have better availability and pricing than weekends or month-end.'],
                    ['question' => 'Do you provide storage if I can\'t move in the same day?', 'answer' => 'We can arrange short-term storage in either Calgary or Edmonton if your possession dates don\'t align perfectly.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 1,
            ],
            [
                'slug' => 'calgary-to-red-deer',
                'origin_city' => 'Calgary',
                'dest_city' => 'Red Deer',
                'distance_km' => 150,
                'drive_time_hours' => 1.5,
                'price_range_min' => 1200,
                'price_range_max' => 4000,
                'meta_title' => 'Calgary to Red Deer Movers | Alpine Movers',
                'meta_description' => 'Calgary to Red Deer moving company. 150 km, from $1,200. Licensed, insured crews. Fast Highway 2 corridor service. Free quotes.',
                'h1' => 'Calgary to Red Deer Moving Company',
                'route_overview' => '<p>Red Deer sits at the midpoint of the Calgary-Edmonton corridor on Highway 2, making it one of our most efficient long-distance routes at just 150 km. The drive takes about 90 minutes under normal conditions, and our trucks make this trip frequently.</p>
<p>Most Calgary-to-Red Deer moves are completed comfortably in a single day. The short highway distance keeps costs lower than a full Edmonton run while still qualifying as a long-distance move with flat-rate pricing options.</p>
<p>We also serve communities near Red Deer including Innisfail, Penhold, Blackfalds, Lacombe, and Sylvan Lake.</p>',
                'cost_breakdown' => '<h3>Calgary to Red Deer Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,200 – $1,800</li>
<li><strong>2-bedroom:</strong> $1,600 – $2,500</li>
<li><strong>3-bedroom:</strong> $2,200 – $3,200</li>
<li><strong>4+ bedroom:</strong> $3,000 – $4,000+</li>
</ul>
<p>The shorter distance compared to Edmonton means real savings on fuel and drive time. Our pricing includes the highway portion, fuel surcharge, and full cargo insurance. Add packing services for an additional $200-$600 depending on home size.</p>',
                'destination_guide' => '<h3>Moving to Red Deer</h3>
<p>Red Deer is central Alberta\'s largest city with a population of about 100,000. It offers affordable housing, strong recreation programs, and a central location between Calgary and Edmonton — ideal for families with connections to both cities.</p>
<p><strong>Popular Red Deer areas:</strong> Timberlands, Normandeau, Oriole Park, Johnstone Park, and newer developments in Clearview and Kentwood.</p>
<p><strong>What to expect:</strong> Red Deer has a smaller-city feel with excellent parks, the Red Deer River valley, and lower cost of living than Calgary. Many new residents commute to either Calgary or Edmonton for work while enjoying Red Deer\'s quality of life.</p>',
                'faq_json' => [
                    ['question' => 'How long is the drive from Calgary to Red Deer?', 'answer' => 'About 90 minutes via Highway 2. It\'s a straightforward, well-maintained highway drive.'],
                    ['question' => 'Can you move us to Sylvan Lake instead?', 'answer' => 'Yes — we serve Sylvan Lake, Innisfail, Penhold, Blackfalds, and other communities near Red Deer at similar pricing.'],
                    ['question' => 'Is Red Deer cheaper than Calgary?', 'answer' => 'Generally yes — housing, utilities, and daily costs tend to be lower in Red Deer compared to Calgary.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 2,
            ],
            [
                'slug' => 'calgary-to-lethbridge',
                'origin_city' => 'Calgary',
                'dest_city' => 'Lethbridge',
                'distance_km' => 215,
                'drive_time_hours' => 2.5,
                'price_range_min' => 1500,
                'price_range_max' => 4500,
                'meta_title' => 'Calgary to Lethbridge Movers | Alpine Movers',
                'meta_description' => 'Calgary to Lethbridge movers. 215 km south on Highway 2, from $1,500. Licensed, insured. Professional long-distance moving. Free quotes.',
                'h1' => 'Calgary to Lethbridge Moving Services',
                'route_overview' => '<p>The Calgary-to-Lethbridge route heads south on Highway 2 through the rolling foothills and southern Alberta prairies. At 215 km, it\'s about a 2.5-hour drive — comfortably completed in a single moving day for most home sizes.</p>
<p>This is a popular route for university students and families. The University of Lethbridge draws many Calgarians south, while southern Alberta\'s agricultural economy brings families in the opposite direction. We run this route regularly and know the highway conditions well, including the windy stretches near Fort Macleod.</p>
<p>We also serve communities along the route including Okotoks, High River, Nanton, Claresholm, and Fort Macleod.</p>',
                'cost_breakdown' => '<h3>Calgary to Lethbridge Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,500 – $2,200</li>
<li><strong>2-bedroom:</strong> $2,000 – $3,000</li>
<li><strong>3-bedroom:</strong> $2,800 – $3,800</li>
<li><strong>4+ bedroom:</strong> $3,500 – $4,500+</li>
</ul>
<p>Southern Alberta\'s Highway 2 is known for strong crosswinds, especially near Fort Macleod. We monitor weather conditions and may adjust timing for safety — this never affects your quoted price. All pricing includes fuel, insurance, and highway travel.</p>',
                'destination_guide' => '<h3>Moving to Lethbridge</h3>
<p>Lethbridge is southern Alberta\'s largest city with a population of about 100,000. Home to the University of Lethbridge and Lethbridge College, it has a strong education sector alongside agriculture and renewable energy.</p>
<p><strong>Popular Lethbridge areas:</strong> West Lethbridge (fastest growing), the University district, Heritage Heights, Indian Battle Heights, and the established Varsity Village area.</p>
<p><strong>Key considerations:</strong> Lethbridge is notably windy — the coulees channel wind through the city. Housing is significantly more affordable than Calgary, and the city offers excellent pathways, parks, and a surprisingly strong food and arts scene.</p>',
                'faq_json' => [
                    ['question' => 'How long is the Calgary to Lethbridge drive?', 'answer' => 'About 2.5 hours via Highway 2 south. The road is well-maintained and our trucks travel it regularly.'],
                    ['question' => 'Is the highway between Calgary and Lethbridge safe in winter?', 'answer' => 'Highway 2 south is well-maintained year-round. We monitor conditions and adjust scheduling if needed, but winter moves are very doable.'],
                    ['question' => 'Do you help university students move to Lethbridge?', 'answer' => 'Yes — we offer student-friendly rates for smaller moves. A dorm or one-bedroom apartment move to Lethbridge is one of our most affordable long-distance options.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 3,
            ],
            [
                'slug' => 'calgary-to-medicine-hat',
                'origin_city' => 'Calgary',
                'dest_city' => 'Medicine Hat',
                'distance_km' => 300,
                'drive_time_hours' => 3.0,
                'price_range_min' => 1800,
                'price_range_max' => 5000,
                'meta_title' => 'Calgary to Medicine Hat Movers | Alpine Movers',
                'meta_description' => 'Calgary to Medicine Hat movers. 300 km on the Trans-Canada, from $1,800. Insured long-distance crews. Free moving estimates.',
                'h1' => 'Calgary to Medicine Hat Moving Company',
                'route_overview' => '<p>The route from Calgary to Medicine Hat follows the Trans-Canada Highway (Highway 1) east across the southern Alberta prairies. At 300 km, it\'s about a 3-hour drive through Strathmore, Bassano, and Brooks before reaching "The Hat."</p>
<p>Medicine Hat is known as the sunniest city in Canada and offers some of the most affordable housing and lowest utility costs in Alberta thanks to the city\'s own natural gas reserves. We serve this corridor regularly, including stops in Strathmore, Brooks, and surrounding communities.</p>',
                'cost_breakdown' => '<h3>Calgary to Medicine Hat Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,800 – $2,500</li>
<li><strong>2-bedroom:</strong> $2,300 – $3,200</li>
<li><strong>3-bedroom:</strong> $3,000 – $4,200</li>
<li><strong>4+ bedroom:</strong> $3,800 – $5,000+</li>
</ul>
<p>The Trans-Canada Highway is flat and straight east of Calgary, making it an efficient route for our trucks. Pricing includes the full highway distance, fuel, and comprehensive cargo insurance.</p>',
                'destination_guide' => '<h3>Moving to Medicine Hat</h3>
<p>Medicine Hat is a city of about 63,000 in southeastern Alberta, known for its sunshine (the most hours in Canada), affordable living, and self-sufficiency in natural gas. The South Saskatchewan River valley provides beautiful coulees and parkland.</p>
<p><strong>Popular areas:</strong> Crescent Heights, Ross Glen, the South Flats, and newer developments in Southlands and Ranchlands.</p>
<p><strong>Why people move here:</strong> Incredibly low utility costs (the city owns its gas reserves), affordable housing, warm summers, and a relaxed pace of life. Medicine Hat has invested heavily in its downtown and parks in recent years.</p>',
                'faq_json' => [
                    ['question' => 'How far is Medicine Hat from Calgary?', 'answer' => 'About 300 km east — roughly 3 hours on the Trans-Canada Highway. Our trucks make the trip regularly.'],
                    ['question' => 'Can you stop in Brooks on the way?', 'answer' => 'Yes — we serve Brooks, Strathmore, Bassano, and other Trans-Canada communities as part of this route.'],
                    ['question' => 'Why is Medicine Hat so affordable?', 'answer' => 'Medicine Hat owns its natural gas reserves, keeping utility costs among the lowest in Canada. Housing prices are also well below Calgary averages.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 4,
            ],
            [
                'slug' => 'calgary-to-grande-prairie',
                'origin_city' => 'Calgary',
                'dest_city' => 'Grande Prairie',
                'distance_km' => 720,
                'drive_time_hours' => 7.5,
                'price_range_min' => 3500,
                'price_range_max' => 8000,
                'meta_title' => 'Calgary to Grande Prairie Movers | Alpine Movers',
                'meta_description' => 'Calgary to Grande Prairie movers. 720 km, professional long-haul crews. Licensed, insured. Competitive pricing. Free estimates.',
                'h1' => 'Calgary to Grande Prairie Moving Services',
                'route_overview' => '<p>Grande Prairie is one of northern Alberta\'s largest cities, located 720 km northwest of Calgary. The route follows Highway 2 north to Edmonton, then Highway 43 west through Whitecourt and the Peace Country — about 7.5 hours of driving.</p>
<p>This is a full-day drive that requires careful planning. For larger moves, we often load one day and deliver the next, with overnight stops for our crew. The northern highways are well-maintained but can be affected by seasonal weather, especially between October and April.</p>
<p>We serve communities along the route including Whitecourt, Fox Creek, Valleyview, and Beaverlodge.</p>',
                'cost_breakdown' => '<h3>Calgary to Grande Prairie Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $3,500 – $4,500</li>
<li><strong>2-bedroom:</strong> $4,200 – $5,500</li>
<li><strong>3-bedroom:</strong> $5,000 – $6,500</li>
<li><strong>4+ bedroom:</strong> $6,000 – $8,000+</li>
</ul>
<p>The longer distance means higher base costs, but we optimize routing and scheduling to keep pricing competitive. Multi-stop moves along the Highway 43 corridor may reduce per-stop costs. Pricing includes fuel, overnight crew accommodation, and full cargo insurance.</p>',
                'destination_guide' => '<h3>Moving to Grande Prairie</h3>
<p>Grande Prairie is the economic hub of northwestern Alberta\'s Peace Country, with a population of about 65,000. The energy sector drives the economy, but agriculture, forestry, and a growing service sector provide diversification.</p>
<p><strong>Popular areas:</strong> Countryside South, Crystal Ridge, Signature Falls, Mission Heights, and the established Mountview area.</p>
<p><strong>What to expect:</strong> Grande Prairie offers affordable housing with a small-city feel. The Muskoseepi Park system is extensive, the Eastlink Centre provides recreation, and the city has a surprisingly diverse food scene. Winters are long and cold, but summers feature almost 24 hours of daylight.</p>',
                'faq_json' => [
                    ['question' => 'How long does a Calgary to Grande Prairie move take?', 'answer' => 'The drive alone is about 7.5 hours. Most moves are loaded one day and delivered the next, with overnight accommodation for our crew included in the pricing.'],
                    ['question' => 'Do you move to Grande Prairie in winter?', 'answer' => 'Yes — we operate year-round. Northern highway conditions are monitored and we adjust schedules for safety. Winter moves may require flexible timing.'],
                    ['question' => 'Can you stop in Whitecourt or Valleyview?', 'answer' => 'Yes — we serve all communities along the Highway 43 corridor between Edmonton and Grande Prairie.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 5,
            ],
            [
                'slug' => 'calgary-to-fort-mcmurray',
                'origin_city' => 'Calgary',
                'dest_city' => 'Fort McMurray',
                'distance_km' => 750,
                'drive_time_hours' => 7.0,
                'price_range_min' => 3500,
                'price_range_max' => 8500,
                'meta_title' => 'Calgary to Fort McMurray Movers | Alpine Movers',
                'meta_description' => 'Calgary to Fort McMurray movers. 750 km, experienced long-haul crews. Oil sands relocation specialists. Licensed, insured. Free quotes.',
                'h1' => 'Calgary to Fort McMurray Moving Company',
                'route_overview' => '<p>Fort McMurray is the hub of Alberta\'s oil sands region, located 750 km northeast of Calgary. The route heads north on Highway 2 to Edmonton, then northeast on Highway 63 — about 7 hours of driving in good conditions.</p>
<p>The Calgary-Fort McMurray corridor is heavily travelled by energy sector workers and families relocating for work. We understand the unique dynamics of oil sands moves — shift schedules, camp accommodations, and the boom-and-bust cycle that affects housing availability and timing.</p>
<p>Highway 63 north of Athabasca was twinned in 2016, significantly improving safety and travel times on this route.</p>',
                'cost_breakdown' => '<h3>Calgary to Fort McMurray Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $3,500 – $4,800</li>
<li><strong>2-bedroom:</strong> $4,500 – $5,800</li>
<li><strong>3-bedroom:</strong> $5,500 – $7,000</li>
<li><strong>4+ bedroom:</strong> $6,500 – $8,500+</li>
</ul>
<p>Fort McMurray moves are long-haul operations that include overnight crew accommodation, highway fuel, and full insurance. We often coordinate with employers who offer relocation assistance — ask about corporate billing and direct invoicing.</p>',
                'destination_guide' => '<h3>Moving to Fort McMurray</h3>
<p>Fort McMurray is a community within the Regional Municipality of Wood Buffalo, with a population that fluctuates around 70,000. The oil sands industry is the primary economic driver, offering high-paying jobs that attract workers from across Canada.</p>
<p><strong>Popular areas:</strong> Timberlea, Thickwood, Eagle Ridge, Abasand (rebuilt after the 2016 wildfire), and Parsons Creek North.</p>
<p><strong>Key considerations:</strong> Housing costs can be high relative to the city\'s size due to oil sands demand. Winters are long and cold with short days. However, high wages, a strong community spirit (forged through the 2016 wildfire recovery), and excellent recreation facilities make Fort McMurray home for thousands of families.</p>',
                'faq_json' => [
                    ['question' => 'How long is the drive from Calgary to Fort McMurray?', 'answer' => 'About 7 hours via Highway 2 to Edmonton, then Highway 63 north. Our crew typically loads one day and delivers the next.'],
                    ['question' => 'Do you offer corporate relocation billing for oil sands moves?', 'answer' => 'Yes — we work with employers and relocation companies. We can invoice your employer directly and handle corporate move documentation.'],
                    ['question' => 'Is Highway 63 safe for moving trucks?', 'answer' => 'Highway 63 has been fully twinned since 2016, significantly improving safety. Our experienced drivers know this route well.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 6,
            ],

            // ── Calgary ↔ Mountain Corridor ──────────────────────
            [
                'slug' => 'calgary-to-canmore',
                'origin_city' => 'Calgary',
                'dest_city' => 'Canmore',
                'distance_km' => 100,
                'drive_time_hours' => 1.2,
                'price_range_min' => 1000,
                'price_range_max' => 3500,
                'meta_title' => 'Calgary to Canmore Movers | Alpine Movers',
                'meta_description' => 'Calgary to Canmore movers. Mountain moving specialists. 100 km via Trans-Canada, from $1,000. Licensed, insured. Free estimates.',
                'h1' => 'Calgary to Canmore Moving Services',
                'route_overview' => '<p>The Calgary-to-Canmore route follows the Trans-Canada Highway west through the foothills and into the Rocky Mountains — a scenic 100 km drive that takes just over an hour. It\'s one of our most popular short long-distance routes, driven by the steady stream of Calgarians relocating to mountain living.</p>
<p>Mountain moves have unique considerations. Weather can change quickly in the Bow Valley corridor, especially in winter. Canmore\'s streets are narrower than Calgary\'s suburbs, driveways can be steep, and some condo buildings have tight underground parking. Our crews are experienced with all of these mountain-specific challenges.</p>
<p>We also serve Exshaw, Harvie Heights, and Dead Man\'s Flats along this corridor.</p>',
                'cost_breakdown' => '<h3>Calgary to Canmore Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,000 – $1,600</li>
<li><strong>2-bedroom:</strong> $1,400 – $2,200</li>
<li><strong>3-bedroom:</strong> $2,000 – $2,800</li>
<li><strong>4+ bedroom:</strong> $2,500 – $3,500+</li>
</ul>
<p>The short distance keeps costs reasonable. Mountain-specific factors like steep driveways, multi-level chalets, and building access restrictions are factored into your individual quote. Winter moves may require additional planning time but don\'t cost more.</p>',
                'destination_guide' => '<h3>Moving to Canmore</h3>
<p>Canmore is a mountain town of about 15,000 in the Bow Valley, surrounded by the Canadian Rockies. Once a coal mining town, it\'s transformed into a world-class outdoor recreation destination and increasingly popular full-time residential community.</p>
<p><strong>Popular areas:</strong> Canmore town centre, Three Sisters, Silvertip, Spring Creek, and the established Cougar Creek and Benchlands neighbourhoods.</p>
<p><strong>What to expect:</strong> Canmore offers unmatched mountain access — hiking, skiing, mountain biking, and climbing are out your door. Housing is more expensive than Calgary due to limited supply in the Bow Valley. The town has a vibrant food, arts, and wellness scene, plus a strong sense of community.</p>',
                'faq_json' => [
                    ['question' => 'How far is Canmore from Calgary?', 'answer' => 'About 100 km west — just over an hour on the Trans-Canada Highway. It\'s one of our shortest long-distance routes.'],
                    ['question' => 'Can you handle steep driveways in Canmore?', 'answer' => 'Yes — our drivers are experienced with mountain terrain and we select the right truck size for steep Canmore driveways and narrow streets.'],
                    ['question' => 'Do you move condos in Canmore?', 'answer' => 'Yes — many Canmore moves involve condos and townhomes. We coordinate building access, elevator bookings, and underground parking logistics.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 7,
            ],
            [
                'slug' => 'calgary-to-banff',
                'origin_city' => 'Calgary',
                'dest_city' => 'Banff',
                'distance_km' => 130,
                'drive_time_hours' => 1.5,
                'price_range_min' => 1200,
                'price_range_max' => 3500,
                'meta_title' => 'Calgary to Banff Movers | Alpine Movers',
                'meta_description' => 'Calgary to Banff movers. National park relocation experts. 130 km, from $1,200. Licensed, insured. Free moving quotes.',
                'h1' => 'Calgary to Banff Moving Company',
                'route_overview' => '<p>Moving to Banff means relocating within a national park — and that comes with considerations unique to this route. The 130 km drive from Calgary follows the Trans-Canada Highway through the Bow Valley and into Banff National Park, taking about 90 minutes.</p>
<p>Banff has a controlled housing market with residency requirements tied to employment in the park or town. Most housing is compact — apartments, staff accommodation, and smaller homes — reflecting the town\'s limited land within park boundaries.</p>
<p>Our crews understand Banff\'s unique logistics: town parking restrictions, building access during tourist-heavy periods, and the narrower mountain roads that require appropriate truck sizing.</p>',
                'cost_breakdown' => '<h3>Calgary to Banff Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,200 – $1,800</li>
<li><strong>2-bedroom:</strong> $1,600 – $2,400</li>
<li><strong>3-bedroom:</strong> $2,200 – $3,000</li>
<li><strong>Larger home:</strong> $2,800 – $3,500+</li>
</ul>
<p>Banff moves tend to be smaller than Calgary suburban moves due to compact housing. Costs are driven mainly by the mountain drive and any building access complexities. We price transparently with no hidden fees.</p>',
                'destination_guide' => '<h3>Moving to Banff</h3>
<p>Banff is Canada\'s most iconic mountain town, nestled within Banff National Park. The town has about 8,000 permanent residents and a "need to reside" clause that ties residency to park-area employment.</p>
<p><strong>Housing types:</strong> Apartments, staff housing, condos, and a limited number of single-family homes. Rental competition is high, especially in the shoulder seasons when hospitality staff turnover peaks.</p>
<p><strong>Lifestyle:</strong> Unparalleled access to world-class skiing (Sunshine, Lake Louise, Norquay), hiking, hot springs, and mountain culture. The town is small but walkable, with excellent restaurants, shops, and a global community of outdoor enthusiasts.</p>',
                'faq_json' => [
                    ['question' => 'Can anyone move to Banff?', 'answer' => 'Banff has a "need to reside" clause — you generally need employment in the town or park to live there. Check with the Town of Banff for current residency requirements.'],
                    ['question' => 'Is parking an issue for moving trucks in Banff?', 'answer' => 'Town parking can be limited, especially during tourist season. We coordinate timing and access to minimize disruption and secure truck parking.'],
                    ['question' => 'Do you move staff accommodation in Banff?', 'answer' => 'Yes — many Banff moves involve staff housing and shared accommodations. We offer small-load pricing for these compact moves.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 8,
            ],

            // ── Calgary ↔ Satellite Towns ────────────────────────
            [
                'slug' => 'calgary-to-airdrie',
                'origin_city' => 'Calgary',
                'dest_city' => 'Airdrie',
                'distance_km' => 30,
                'drive_time_hours' => 0.4,
                'price_range_min' => 500,
                'price_range_max' => 2000,
                'meta_title' => 'Calgary to Airdrie Movers | Alpine Movers',
                'meta_description' => 'Calgary to Airdrie movers. Just 30 km north, from $500. Fast, licensed, insured. Our most popular short-distance route. Free quotes.',
                'h1' => 'Calgary to Airdrie Moving Services',
                'route_overview' => '<p>The Calgary-to-Airdrie corridor is our single busiest route. At just 30 km north on Highway 2, Airdrie is the closest major satellite community to Calgary and has been one of Canada\'s fastest-growing cities for over a decade.</p>
<p>Most Calgary-to-Airdrie moves are completed in 3-6 hours, making them essentially local moves with a short highway hop. We often have crews available for short-notice Airdrie moves since we\'re in the area so frequently.</p>
<p>The Highway 2 drive takes about 20 minutes from north Calgary — less time than many cross-city moves within Calgary itself.</p>',
                'cost_breakdown' => '<h3>Calgary to Airdrie Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $500 – $900</li>
<li><strong>2-bedroom:</strong> $700 – $1,200</li>
<li><strong>3-bedroom:</strong> $900 – $1,500</li>
<li><strong>4+ bedroom:</strong> $1,200 – $2,000+</li>
</ul>
<p>Because the distance is so short, Calgary-to-Airdrie moves are priced similarly to local Calgary moves. We charge hourly with a small trip fee for the highway portion. No long-distance premiums.</p>',
                'destination_guide' => '<h3>Moving to Airdrie</h3>
<p>Airdrie is Alberta\'s sixth-largest city with over 75,000 residents and continuing rapid growth. Just north of Calgary on Highway 2, it offers newer homes, lower prices, and a family-oriented community while keeping Calgary commutes manageable.</p>
<p><strong>Popular communities:</strong> Reunion, Ravenswood, Bayview, Sagewood, Kings Heights, Hillcrest, and Williamstown.</p>
<p><strong>Why Airdrie:</strong> More home for your money, newer schools, excellent sports and recreation facilities, a growing commercial base, and the CrossIron Mills shopping centre between Airdrie and Calgary. The tradeoff is a 20-40 minute commute to most Calgary workplaces.</p>',
                'faq_json' => [
                    ['question' => 'Is moving from Calgary to Airdrie considered long-distance?', 'answer' => 'Not really — at 30 km, we price it similarly to a local move with a small trip fee. It\'s our most popular short-distance route.'],
                    ['question' => 'How long does a Calgary to Airdrie move take?', 'answer' => 'Most moves take 3-6 hours depending on home size. The drive itself is only about 20 minutes.'],
                    ['question' => 'Do you have same-day availability for Airdrie?', 'answer' => 'We often do, since our crews are in the Airdrie area frequently. Call us and we\'ll check — booking a few days ahead is still recommended.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 9,
            ],
            [
                'slug' => 'calgary-to-cochrane',
                'origin_city' => 'Calgary',
                'dest_city' => 'Cochrane',
                'distance_km' => 35,
                'drive_time_hours' => 0.5,
                'price_range_min' => 500,
                'price_range_max' => 2000,
                'meta_title' => 'Calgary to Cochrane Movers | Alpine Movers',
                'meta_description' => 'Calgary to Cochrane movers. 35 km west, from $500. Foothills town moving specialists. Licensed, insured. Free moving estimates.',
                'h1' => 'Calgary to Cochrane Moving Company',
                'route_overview' => '<p>Cochrane sits just 35 km west of Calgary along Highway 1A, nestled in the Bow River valley with stunning Rocky Mountain views. The drive takes about 30 minutes from west Calgary, making it one of our quickest satellite town routes.</p>
<p>Like Airdrie to the north, Cochrane has experienced explosive growth as Calgarians seek more affordable housing and a small-town atmosphere while keeping commute times reasonable. The town has grown from 15,000 to over 32,000 in recent years.</p>
<p>We also serve the Bearspaw area between Calgary and Cochrane, as well as communities west of Cochrane including Ghost Lake and Jamieson Place.</p>',
                'cost_breakdown' => '<h3>Calgary to Cochrane Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $500 – $900</li>
<li><strong>2-bedroom:</strong> $700 – $1,300</li>
<li><strong>3-bedroom:</strong> $1,000 – $1,600</li>
<li><strong>4+ bedroom:</strong> $1,300 – $2,000+</li>
</ul>
<p>The short distance means Cochrane moves are priced close to local rates. Highway 1A is scenic but can be busy during commute hours — we schedule to avoid peak traffic when possible.</p>',
                'destination_guide' => '<h3>Moving to Cochrane</h3>
<p>Cochrane is a picturesque town with a historic main street, mountain views from almost every angle, and a growing range of amenities. Originally a ranching town, it now blends Western heritage with modern suburban living.</p>
<p><strong>Popular communities:</strong> Fireside, Heartland, Sunset Ridge, Heritage Hills, Riviera, West Terrace, and the expanding River Heights area.</p>
<p><strong>Why Cochrane:</strong> Mountain views, a genuine small-town main street, newer homes at lower prices than Calgary\'s west side, and a strong family community. The famous Mackay\'s Ice Cream is just the start of Cochrane\'s charm. The commute to west Calgary is typically 25-35 minutes.</p>',
                'faq_json' => [
                    ['question' => 'How long does a Calgary to Cochrane move take?', 'answer' => 'Most moves take 3-6 hours. The drive is only about 30 minutes from west Calgary.'],
                    ['question' => 'Do you serve Bearspaw between Calgary and Cochrane?', 'answer' => 'Yes — we serve Bearspaw, including acreage properties with larger loads and outbuildings.'],
                    ['question' => 'Is the highway to Cochrane busy?', 'answer' => 'Highway 1A can be busy during morning and evening commutes. We schedule to avoid peak hours when possible for a smoother move.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 10,
            ],
            [
                'slug' => 'calgary-to-okotoks',
                'origin_city' => 'Calgary',
                'dest_city' => 'Okotoks',
                'distance_km' => 35,
                'drive_time_hours' => 0.5,
                'price_range_min' => 500,
                'price_range_max' => 2000,
                'meta_title' => 'Calgary to Okotoks Movers | Alpine Movers',
                'meta_description' => 'Calgary to Okotoks movers. 35 km south, from $500. Growing foothills town. Licensed, insured. Get your free moving estimate.',
                'h1' => 'Movers from Calgary to Okotoks',
                'route_overview' => '<p>Okotoks is 35 km south of Calgary along Highway 2A, a pleasant 25-30 minute drive through the foothills. It\'s one of the fastest-growing towns in Alberta, known for its managed growth approach, excellent schools, and strong community values.</p>
<p>The Calgary-Okotoks route is one we travel several times a week. Families are drawn south by Okotoks\' lower housing costs, award-winning schools, and small-town atmosphere — while still being a manageable commute to Calgary\'s south side.</p>
<p>We also serve De Winton and Heritage Pointe between Calgary and Okotoks.</p>',
                'cost_breakdown' => '<h3>Calgary to Okotoks Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $500 – $900</li>
<li><strong>2-bedroom:</strong> $700 – $1,200</li>
<li><strong>3-bedroom:</strong> $900 – $1,500</li>
<li><strong>4+ bedroom:</strong> $1,200 – $2,000+</li>
</ul>
<p>The short highway distance keeps costs comparable to local Calgary moves. Our pricing includes the trip fee, fuel, and full cargo protection.</p>',
                'destination_guide' => '<h3>Moving to Okotoks</h3>
<p>Okotoks is a town of about 30,000 along the Sheep River in the foothills south of Calgary. It\'s earned a reputation as one of Alberta\'s best-managed communities, with controlled growth, excellent civic planning, and high resident satisfaction.</p>
<p><strong>Popular communities:</strong> D\'Arcy Ranch, Cimarron, Crystal Ridge, Drake Landing (Canada\'s first solar community), Mountainview, and the expanding Airlie area.</p>
<p><strong>Why Okotoks:</strong> Award-winning schools, a walkable historic downtown, extensive pathways, and a genuine small-town community. Drake Landing is internationally recognized for its solar district heating system — a draw for environmentally conscious families.</p>',
                'faq_json' => [
                    ['question' => 'How far is Okotoks from Calgary?', 'answer' => 'About 35 km south — roughly 25-30 minutes via Highway 2A and Macleod Trail.'],
                    ['question' => 'Can you serve De Winton between Calgary and Okotoks?', 'answer' => 'Yes — we serve De Winton, Heritage Pointe, and all communities along the Calgary-Okotoks corridor.'],
                    ['question' => 'Are Okotoks homes more affordable than Calgary?', 'answer' => 'Generally yes — Okotoks offers competitive pricing for newer homes compared to similar-quality properties in Calgary\'s suburbs.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 11,
            ],
            [
                'slug' => 'calgary-to-chestermere',
                'origin_city' => 'Calgary',
                'dest_city' => 'Chestermere',
                'distance_km' => 20,
                'drive_time_hours' => 0.3,
                'price_range_min' => 450,
                'price_range_max' => 1800,
                'meta_title' => 'Calgary to Chestermere Movers | Alpine Movers',
                'meta_description' => 'Calgary to Chestermere movers. Lake city just 20 km east. From $450. Licensed, insured. Fast, affordable. Free moving quotes.',
                'h1' => 'Calgary to Chestermere Moving Services',
                'route_overview' => '<p>Chestermere is the closest city to Calgary — just 20 km east along Chestermere Boulevard (which connects directly to 17th Avenue SE). The drive takes as little as 15 minutes, making this essentially a local move with lake-city benefits.</p>
<p>The Calgary-Chestermere route is popular with families upgrading from Calgary homes to lakefront or lake-access properties. Chestermere Lake is the centrepiece of the community, offering boating, swimming, and year-round recreation.</p>
<p>We also serve Conrich and rural properties along the Highway 1 corridor east of Calgary.</p>',
                'cost_breakdown' => '<h3>Calgary to Chestermere Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $450 – $800</li>
<li><strong>2-bedroom:</strong> $650 – $1,100</li>
<li><strong>3-bedroom:</strong> $850 – $1,400</li>
<li><strong>4+ bedroom:</strong> $1,100 – $1,800+</li>
</ul>
<p>At just 20 km, Chestermere moves are priced as local moves. Lakefront properties may have specific access considerations that we plan for, but the short distance keeps overall costs low.</p>',
                'destination_guide' => '<h3>Moving to Chestermere</h3>
<p>Chestermere is a city of about 22,000 built around Chestermere Lake, immediately east of Calgary. It offers a lakeside lifestyle that\'s unique in the Calgary region — boating, fishing, and beach access are a daily reality for residents.</p>
<p><strong>Popular communities:</strong> The Cove, Kinniburgh, Rainbow Falls, Westmere, Lakeshore, and Dawson\'s Landing.</p>
<p><strong>Why Chestermere:</strong> Lake access, newer homes, and extremely close proximity to Calgary for commuting. Lakefront properties command premium prices, but homes further from the lake are competitively priced with Calgary\'s east-side suburbs.</p>',
                'faq_json' => [
                    ['question' => 'Is Chestermere basically part of Calgary?', 'answer' => 'Chestermere is an independent city with its own government, but it\'s right on Calgary\'s eastern border — only 15-20 minutes from most east Calgary locations.'],
                    ['question' => 'Do lakefront Chestermere homes require special moving considerations?', 'answer' => 'Some lakefront properties have unique access or landscaping considerations. We do a pre-move assessment to plan for any specific needs.'],
                    ['question' => 'How much are Chestermere lakefront homes?', 'answer' => 'We\'re movers, not realtors — but lakefront properties are premium-priced. Our moving costs stay the same regardless of your home\'s value.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 12,
            ],

            // ── Calgary ↔ BC ─────────────────────────────────────
            [
                'slug' => 'calgary-to-vancouver',
                'origin_city' => 'Calgary',
                'dest_city' => 'Vancouver',
                'distance_km' => 1050,
                'drive_time_hours' => 10.5,
                'price_range_min' => 4500,
                'price_range_max' => 12000,
                'meta_title' => 'Calgary to Vancouver Movers | Alpine Movers',
                'meta_description' => 'Calgary to Vancouver movers. 1,050 km through the Rockies. Professional long-distance crews. Licensed, insured. Free estimates.',
                'h1' => 'Calgary to Vancouver Moving Services',
                'route_overview' => '<p>The Calgary-to-Vancouver route is one of Canada\'s most scenic — and most demanding — moving corridors. The 1,050 km journey follows the Trans-Canada Highway through the Rocky Mountains, Rogers Pass, the Columbia Valley, and the Fraser Canyon before descending into the Lower Mainland.</p>
<p>Mountain passes, variable weather, and seasonal road conditions make this route one that requires experienced drivers and careful planning. Our long-haul crews are trained for mountain driving and carry chains, emergency equipment, and the expertise to navigate safely through every season.</p>
<p>Most Calgary-to-Vancouver moves are two-day operations — loading day one, driving the mountain passes on day two, and delivering in Vancouver by evening. Larger moves may require three days.</p>',
                'cost_breakdown' => '<h3>Calgary to Vancouver Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $4,500 – $6,000</li>
<li><strong>2-bedroom:</strong> $5,500 – $7,500</li>
<li><strong>3-bedroom:</strong> $7,000 – $9,500</li>
<li><strong>4+ bedroom:</strong> $8,500 – $12,000+</li>
</ul>
<p>The mountain highway distance, fuel costs, and multi-day crew requirements drive the pricing for this route. We include full cargo insurance, crew accommodations, mountain driving expertise, and coordination at both ends. No hidden fees — your estimate covers everything.</p>',
                'destination_guide' => '<h3>Moving to Vancouver</h3>
<p>Vancouver is Canada\'s third-largest metro area with about 2.5 million residents. Set between the Pacific Ocean and the Coast Mountains, it\'s consistently ranked among the world\'s most livable cities — with housing prices to match.</p>
<p><strong>Popular areas:</strong> Downtown, Kitsilano, Mount Pleasant, East Vancouver, Burnaby, New Westminster, North Vancouver, Surrey, and Langley.</p>
<p><strong>What to expect:</strong> A milder, rainier climate than Calgary with virtually no chinooks. Vancouver\'s condo market dominates the housing stock in the city proper, while the suburbs offer more single-family options. The cost of living is significantly higher than Calgary across nearly every category.</p>',
                'faq_json' => [
                    ['question' => 'How long does a Calgary to Vancouver move take?', 'answer' => 'Typically 2-3 days — loading in Calgary, driving through the mountains, and delivering in Vancouver. We coordinate the schedule around your needs.'],
                    ['question' => 'Is the mountain highway safe for moving trucks?', 'answer' => 'Yes — our drivers are experienced mountain highway drivers. We monitor conditions, carry chains, and adjust schedules for safety through Rogers Pass and the Fraser Canyon.'],
                    ['question' => 'Do you move to Vancouver suburbs like Surrey and Burnaby?', 'answer' => 'Yes — we deliver throughout Metro Vancouver including Vancouver, Burnaby, Surrey, Richmond, Langley, North Vancouver, and more.'],
                    ['question' => 'Can you store my belongings between pickup and delivery?', 'answer' => 'Yes — if your possession dates don\'t align, we can arrange short-term storage in Calgary or Vancouver.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 13,
            ],
            [
                'slug' => 'calgary-to-kelowna',
                'origin_city' => 'Calgary',
                'dest_city' => 'Kelowna',
                'distance_km' => 600,
                'drive_time_hours' => 6.0,
                'price_range_min' => 3000,
                'price_range_max' => 7500,
                'meta_title' => 'Calgary to Kelowna Movers | Alpine Movers',
                'meta_description' => 'Calgary to Kelowna movers. 600 km through the Rockies to the Okanagan. Licensed, insured. Professional crews. Free estimates.',
                'h1' => 'Calgary to Kelowna Moving Company',
                'route_overview' => '<p>The Calgary-to-Kelowna route crosses the Rocky Mountains into British Columbia\'s Okanagan Valley — one of Canada\'s most popular lifestyle destinations. The 600 km drive takes about 6 hours via Highway 1 through Golden and Revelstoke, then south through Vernon.</p>
<p>This is a popular route for retirees, remote workers, and families drawn to the Okanagan\'s lake lifestyle, wine country, and milder winters. The mountain highway requires experienced drivers, and seasonal conditions (especially through Rogers Pass in winter) factor into scheduling.</p>
<p>We also serve West Kelowna, Vernon, Penticton, and other Okanagan communities along this corridor.</p>',
                'cost_breakdown' => '<h3>Calgary to Kelowna Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $3,000 – $4,000</li>
<li><strong>2-bedroom:</strong> $3,800 – $5,000</li>
<li><strong>3-bedroom:</strong> $4,500 – $6,000</li>
<li><strong>4+ bedroom:</strong> $5,500 – $7,500+</li>
</ul>
<p>The mountain crossing adds complexity but we keep pricing competitive on this popular route. All costs include fuel, mountain driving, crew accommodation, and full cargo insurance.</p>',
                'destination_guide' => '<h3>Moving to Kelowna</h3>
<p>Kelowna is the heart of BC\'s Okanagan Valley with a metro population of about 220,000. Okanagan Lake, world-class wineries, hot summers, and a rapidly growing tech sector have made it one of Canada\'s fastest-growing cities.</p>
<p><strong>Popular areas:</strong> Downtown Kelowna, Mission, Glenmore, Rutland, Lake Country, and West Kelowna across the bridge.</p>
<p><strong>What to expect:</strong> Significantly milder winters than Calgary with hot, dry summers. Housing prices have risen sharply but remain below Vancouver levels. The lake lifestyle is the major draw — boating, beaches, and wine country are daily realities. The city also has a growing tech hub and strong healthcare sector.</p>',
                'faq_json' => [
                    ['question' => 'How long is the drive from Calgary to Kelowna?', 'answer' => 'About 6 hours via Highway 1 through the Rockies and then south through the Okanagan. Our crews make this trip regularly.'],
                    ['question' => 'Do you serve other Okanagan cities?', 'answer' => 'Yes — we serve Vernon, Penticton, West Kelowna, Lake Country, and other Okanagan communities along the same route.'],
                    ['question' => 'Is the Rogers Pass safe for moving trucks in winter?', 'answer' => 'Our drivers are experienced mountain drivers. We monitor conditions, carry chains, and adjust timing around Rogers Pass closures when needed.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 14,
            ],

            // ── Calgary ↔ Saskatchewan ───────────────────────────
            [
                'slug' => 'calgary-to-saskatoon',
                'origin_city' => 'Calgary',
                'dest_city' => 'Saskatoon',
                'distance_km' => 625,
                'drive_time_hours' => 6.0,
                'price_range_min' => 3000,
                'price_range_max' => 7000,
                'meta_title' => 'Calgary to Saskatoon Movers | Alpine Movers',
                'meta_description' => 'Calgary to Saskatoon movers. 625 km across the prairies, from $3,000. Licensed, insured, experienced. Free long-distance quotes.',
                'h1' => 'Calgary to Saskatoon Moving Services',
                'route_overview' => '<p>The Calgary-to-Saskatoon route crosses the southern prairies via the Trans-Canada Highway to Medicine Hat, then north through Swift Current and into Saskatchewan. The 625 km drive takes about 6 hours on flat, well-maintained prairie highways.</p>
<p>This corridor sees steady moving traffic in both directions — families relocating between Alberta and Saskatchewan for work, education, or family reasons. The flat highway terrain makes it one of our most straightforward long-distance routes, though prairie weather (especially winter blizzards) requires monitoring.</p>',
                'cost_breakdown' => '<h3>Calgary to Saskatoon Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $3,000 – $4,000</li>
<li><strong>2-bedroom:</strong> $3,800 – $5,000</li>
<li><strong>3-bedroom:</strong> $4,500 – $6,000</li>
<li><strong>4+ bedroom:</strong> $5,500 – $7,000+</li>
</ul>
<p>Prairie highways are fuel-efficient for our trucks — flat terrain and straight roads keep costs reasonable for the distance. Pricing includes fuel, crew accommodation, and full cargo insurance.</p>',
                'destination_guide' => '<h3>Moving to Saskatoon</h3>
<p>Saskatoon is Saskatchewan\'s largest city with about 275,000 residents, known as the "City of Bridges" spanning the South Saskatchewan River. It has a strong university presence (U of S), a growing tech sector, and significantly lower housing costs than Calgary.</p>
<p><strong>Popular areas:</strong> Stonebridge, Brighton, Evergreen, College Park, Varsity View, and the trendy Broadway Avenue district.</p>
<p><strong>What to expect:</strong> Colder winters than Calgary without the chinook relief, but a strong arts and food scene, affordable housing, and friendly people. Saskatoon\'s riverbank pathway system is excellent and the city has invested heavily in its downtown.</p>',
                'faq_json' => [
                    ['question' => 'How long is the drive from Calgary to Saskatoon?', 'answer' => 'About 6 hours across the prairies. The route is flat and straightforward, and most moves can be completed in two days.'],
                    ['question' => 'Do you serve Regina too?', 'answer' => 'We can arrange moves to Regina — it\'s about 750 km from Calgary. Contact us for a custom quote for the Calgary-Regina corridor.'],
                    ['question' => 'Is Saskatoon cheaper than Calgary?', 'answer' => 'Generally yes — housing, utilities, and daily costs tend to be lower in Saskatoon. The cost savings can be significant for families.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 15,
            ],

            // ── Calgary ↔ Other Alberta Routes ───────────────────
            [
                'slug' => 'calgary-to-lloydminster',
                'origin_city' => 'Calgary',
                'dest_city' => 'Lloydminster',
                'distance_km' => 530,
                'drive_time_hours' => 5.0,
                'price_range_min' => 2800,
                'price_range_max' => 6500,
                'meta_title' => 'Calgary to Lloydminster Movers | Alpine Movers',
                'meta_description' => 'Calgary to Lloydminster movers. 530 km, border city moves. Licensed, insured, professional crews. Free long-distance estimates.',
                'h1' => 'Calgary to Lloydminster Moving Company',
                'route_overview' => '<p>Lloydminster straddles the Alberta-Saskatchewan border, about 530 km northeast of Calgary. The route follows Highway 2 north to Edmonton, then Highway 16 east (the Yellowhead Highway) — approximately 5 hours of driving.</p>
<p>The border-city location creates unique moving dynamics. Lloydminster residents on the Alberta side pay no provincial sales tax, while the Saskatchewan side does — a factor for some families choosing which side to live on. Our crew handles moves on both sides of the border seamlessly.</p>
<p>We also serve communities along the Highway 16 corridor including Vegreville, Vermilion, and Wainwright.</p>',
                'cost_breakdown' => '<h3>Calgary to Lloydminster Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $2,800 – $3,800</li>
<li><strong>2-bedroom:</strong> $3,500 – $4,800</li>
<li><strong>3-bedroom:</strong> $4,200 – $5,500</li>
<li><strong>4+ bedroom:</strong> $5,000 – $6,500+</li>
</ul>
<p>The Highway 2/Highway 16 route is well-maintained and efficient. Pricing includes the full distance, crew accommodation, fuel, and comprehensive cargo insurance.</p>',
                'destination_guide' => '<h3>Moving to Lloydminster</h3>
<p>Lloydminster is a unique border city of about 32,000 split between Alberta and Saskatchewan. The energy sector drives the economy, particularly heavy oil extraction in the surrounding area.</p>
<p><strong>Popular areas:</strong> College Park, Lakeside Estates, and neighbourhoods on both sides of the provincial boundary. The Alberta side is generally preferred for tax reasons.</p>
<p><strong>What to expect:</strong> Small-city living with affordable housing and a strong community. The city has good recreation facilities, a growing commercial sector, and the unique novelty of straddling two provinces. Winters are cold and long, typical of the central prairies.</p>',
                'faq_json' => [
                    ['question' => 'Does it matter which side of the border I live on in Lloydminster?', 'answer' => 'The Alberta side has no provincial sales tax, which can save money on daily purchases. Our movers serve both sides equally.'],
                    ['question' => 'How long is the Calgary to Lloydminster drive?', 'answer' => 'About 5 hours via Edmonton and the Yellowhead Highway. Most moves load one day and deliver the next.'],
                    ['question' => 'Do you serve Vermilion and Wainwright?', 'answer' => 'Yes — we can deliver to communities along the Highway 16 corridor between Edmonton and Lloydminster.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 16,
            ],
            [
                'slug' => 'calgary-to-brooks',
                'origin_city' => 'Calgary',
                'dest_city' => 'Brooks',
                'distance_km' => 190,
                'drive_time_hours' => 2.0,
                'price_range_min' => 1400,
                'price_range_max' => 4000,
                'meta_title' => 'Calgary to Brooks Movers | Alpine Movers',
                'meta_description' => 'Calgary to Brooks movers. 190 km east on Highway 1, from $1,400. Licensed, insured, affordable. Free moving estimates.',
                'h1' => 'Calgary to Brooks Moving Services',
                'route_overview' => '<p>Brooks is a diverse, growing city 190 km east of Calgary on the Trans-Canada Highway. The 2-hour drive is flat, straight, and well-maintained — one of our most efficient routes for the distance.</p>
<p>Brooks has become one of Alberta\'s most culturally diverse smaller cities, with a multicultural population drawn by employment at the JBS meat processing facility and surrounding agricultural operations. We serve the community regularly and appreciate its unique character.</p>
<p>We also serve Bassano, Duchess, and surrounding rural communities along the Highway 1 corridor.</p>',
                'cost_breakdown' => '<h3>Calgary to Brooks Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,400 – $2,000</li>
<li><strong>2-bedroom:</strong> $1,800 – $2,800</li>
<li><strong>3-bedroom:</strong> $2,400 – $3,400</li>
<li><strong>4+ bedroom:</strong> $3,000 – $4,000+</li>
</ul>
<p>The flat Trans-Canada Highway makes this route fuel-efficient. Pricing includes the highway distance, fuel, and full cargo insurance. Most Brooks moves are single-day operations.</p>',
                'destination_guide' => '<h3>Moving to Brooks</h3>
<p>Brooks is an eastern Alberta city of about 15,000 with one of the province\'s most diverse populations. The JBS food processing plant is the largest employer, drawing workers from around the world and creating a remarkably multicultural community for a small prairie city.</p>
<p><strong>Key features:</strong> Kinbrook Island Provincial Park and Lake Newell are nearby for recreation. Brooks has invested in community facilities including the JBS Canada Centre and upgraded parks. Housing is very affordable compared to Calgary.</p>
<p><strong>What to expect:</strong> Small-city prairie living with an international flavour. Brooks experiences hot, dry summers and cold winters typical of the southern Alberta prairies. The community is welcoming and the cost of living is significantly lower than Calgary.</p>',
                'faq_json' => [
                    ['question' => 'How far is Brooks from Calgary?', 'answer' => 'About 190 km east — roughly 2 hours on the Trans-Canada Highway. Most moves are completed in a single day.'],
                    ['question' => 'Is Brooks affordable?', 'answer' => 'Yes — Brooks offers very affordable housing and a low cost of living compared to Calgary and other Alberta cities.'],
                    ['question' => 'Do you serve Bassano and nearby communities?', 'answer' => 'Yes — we serve Bassano, Duchess, Rosemary, and other communities near Brooks along the Highway 1 corridor.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 17,
            ],
        ];

        foreach ($routes as $data) {
            Route::create($data);
        }
    }
}
