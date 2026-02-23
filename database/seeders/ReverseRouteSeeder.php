<?php

namespace Database\Seeders;

use App\Models\Route;
use Illuminate\Database\Seeder;

class ReverseRouteSeeder extends Seeder
{
    public function run(): void
    {
        $routes = [
            // ── Alberta Cities → Calgary ──────────────────────────
            [
                'slug' => 'edmonton-to-calgary',
                'origin_city' => 'Edmonton',
                'dest_city' => 'Calgary',
                'distance_km' => 300,
                'drive_time_hours' => 3.0,
                'price_range_min' => 1800,
                'price_range_max' => 5500,
                'meta_title' => 'Edmonton to Calgary Movers | Unitas Movers',
                'meta_description' => 'Edmonton to Calgary moving services. 300 km on Highway 2, from $1,800. Licensed, insured, experienced long-distance crews. Free quotes.',
                'h1' => 'Edmonton to Calgary Moving Services',
                'route_overview' => '<p>Moving from Edmonton to Calgary? The 300 km drive south on the Queen Elizabeth II Highway (Highway 2) is Alberta\'s busiest moving corridor, and our trucks travel it multiple times per week.</p>
<p>Most Edmonton-to-Calgary moves take a single day. Our crew loads in the morning, drives the three-hour highway stretch, and unloads at your new home by evening. For larger homes, we may start earlier or use a two-day schedule to ensure everything is handled with care.</p>
<p>We also serve the communities along the Highway 2 corridor — Leduc, Wetaskiwin, Ponoka, Lacombe, Innisfail, and Red Deer — as stops on this route.</p>',
                'cost_breakdown' => '<h3>What Affects Your Edmonton-Calgary Moving Cost</h3>
<ul>
<li><strong>Home size:</strong> A one-bedroom apartment starts around $1,800, while a four-bedroom house can reach $4,500-$5,500</li>
<li><strong>Packing services:</strong> Full packing adds $300-$800 depending on volume</li>
<li><strong>Heavy or specialty items:</strong> Pianos, hot tubs, and safes require additional handling fees</li>
<li><strong>Time of year:</strong> Summer months (June-August) and month-end dates are busiest and may have premium pricing</li>
<li><strong>Floor access:</strong> Walk-up apartments or homes with many stairs may require additional crew members</li>
</ul>
<p>Our Edmonton-to-Calgary pricing includes the highway drive, fuel, and insurance. No hidden fees — your quote is your price.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary is Alberta\'s largest city with a metro population over 1.5 million. Known for the Calgary Stampede, a thriving energy sector, and proximity to the Rocky Mountains, it\'s one of Canada\'s most dynamic cities.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> Beltline, Kensington, Bridgeland, Marda Loop, Altadore, Tuscany, Cranston, Seton, and the rapidly growing northeast and southeast communities.</p>
<p><strong>Key differences from Edmonton:</strong> Calgary sits at a higher elevation with chinook winds that break up winter cold spells. The C-Train LRT connects north-south and east-west. Proximity to Banff and the Rockies (90 minutes) is a major lifestyle draw.</p>',
                'faq_json' => [
                    ['question' => 'How long does an Edmonton to Calgary move take?', 'answer' => 'The drive is about 3 hours. Most moves are completed in a single day — loading in the morning and unloading by evening. Larger homes may take two days.'],
                    ['question' => 'Do you stop in Red Deer on the way?', 'answer' => 'Yes — we can handle moves from Red Deer, Innisfail, Lacombe, and other Highway 2 corridor communities as part of this route.'],
                    ['question' => 'Is it cheaper to move on a weekday?', 'answer' => 'Yes — weekday and mid-month moves are typically less busy and may have better availability and pricing than weekends or month-end.'],
                    ['question' => 'Do you provide storage if I can\'t move in the same day?', 'answer' => 'We can arrange short-term storage in either Edmonton or Calgary if your possession dates don\'t align perfectly.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 18,
            ],
            [
                'slug' => 'red-deer-to-calgary',
                'origin_city' => 'Red Deer',
                'dest_city' => 'Calgary',
                'distance_km' => 150,
                'drive_time_hours' => 1.5,
                'price_range_min' => 1200,
                'price_range_max' => 4000,
                'meta_title' => 'Red Deer to Calgary Movers | Unitas Movers',
                'meta_description' => 'Red Deer to Calgary moving company. 150 km, from $1,200. Licensed, insured crews. Fast Highway 2 corridor service. Free quotes.',
                'h1' => 'Red Deer to Calgary Moving Company',
                'route_overview' => '<p>Moving from Red Deer to Calgary? At just 150 km south on Highway 2, it\'s one of our most efficient long-distance routes. The drive takes about 90 minutes under normal conditions, and our trucks make this trip frequently.</p>
<p>Most Red Deer-to-Calgary moves are completed comfortably in a single day. The short highway distance keeps costs lower while still qualifying as a long-distance move with flat-rate pricing options.</p>
<p>We also serve communities near Red Deer including Innisfail, Penhold, Blackfalds, Lacombe, and Sylvan Lake.</p>',
                'cost_breakdown' => '<h3>Red Deer to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,200 – $1,800</li>
<li><strong>2-bedroom:</strong> $1,600 – $2,500</li>
<li><strong>3-bedroom:</strong> $2,200 – $3,200</li>
<li><strong>4+ bedroom:</strong> $3,000 – $4,000+</li>
</ul>
<p>The shorter distance means real savings on fuel and drive time. Our pricing includes the highway portion, fuel surcharge, and full cargo insurance. Add packing services for an additional $200-$600 depending on home size.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary is Alberta\'s largest city with a metro population over 1.5 million. It offers diverse neighbourhoods, a strong job market, world-class amenities, and easy access to the Rocky Mountains.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> Beltline, Kensington, Marda Loop, Tuscany, Cranston, and the growing communities in the south and northeast.</p>
<p><strong>What to expect:</strong> Calgary has a faster pace than Red Deer with more employment options, dining, entertainment, and cultural offerings. Housing costs are higher but the range of neighbourhoods means options at many price points.</p>',
                'faq_json' => [
                    ['question' => 'How long is the drive from Red Deer to Calgary?', 'answer' => 'About 90 minutes via Highway 2. It\'s a straightforward, well-maintained highway drive.'],
                    ['question' => 'Can you pick up from Sylvan Lake or nearby towns?', 'answer' => 'Yes — we serve Sylvan Lake, Innisfail, Penhold, Blackfalds, and other communities near Red Deer at similar pricing.'],
                    ['question' => 'Is Calgary more expensive than Red Deer?', 'answer' => 'Generally yes — housing and daily costs tend to be higher in Calgary, though the wider job market and amenities offset the difference for many families.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 19,
            ],
            [
                'slug' => 'lethbridge-to-calgary',
                'origin_city' => 'Lethbridge',
                'dest_city' => 'Calgary',
                'distance_km' => 215,
                'drive_time_hours' => 2.5,
                'price_range_min' => 1500,
                'price_range_max' => 4500,
                'meta_title' => 'Lethbridge to Calgary Movers | Unitas Movers',
                'meta_description' => 'Lethbridge to Calgary movers. 215 km north on Highway 2, from $1,500. Licensed, insured. Professional long-distance moving. Free quotes.',
                'h1' => 'Lethbridge to Calgary Moving Services',
                'route_overview' => '<p>Moving from Lethbridge to Calgary? The route heads north on Highway 2 through the southern Alberta prairies and foothills. At 215 km, it\'s about a 2.5-hour drive — comfortably completed in a single moving day for most home sizes.</p>
<p>This is a popular route for graduates, young professionals, and families moving to Calgary for career opportunities. We run this route regularly and know the highway conditions well, including the windy stretches near Fort Macleod.</p>
<p>We also serve communities along the route including Fort Macleod, Claresholm, Nanton, High River, and Okotoks.</p>',
                'cost_breakdown' => '<h3>Lethbridge to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,500 – $2,200</li>
<li><strong>2-bedroom:</strong> $2,000 – $3,000</li>
<li><strong>3-bedroom:</strong> $2,800 – $3,800</li>
<li><strong>4+ bedroom:</strong> $3,500 – $4,500+</li>
</ul>
<p>Southern Alberta\'s Highway 2 is known for strong crosswinds, especially near Fort Macleod. We monitor weather conditions and may adjust timing for safety — this never affects your quoted price. All pricing includes fuel, insurance, and highway travel.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers a much larger job market, diverse neighbourhoods, and urban amenities that attract many southern Alberta residents. With over 1.5 million people, it\'s Alberta\'s economic hub.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> The Beltline for urban living, Marda Loop and Kensington for walkability, Cranston and Tuscany for families, and many new communities in the south.</p>
<p><strong>Key considerations:</strong> Calgary\'s chinook winds make winters milder than Lethbridge\'s persistent wind. Housing costs are higher but wages tend to be higher too, especially in energy, tech, and professional services.</p>',
                'faq_json' => [
                    ['question' => 'How long is the Lethbridge to Calgary drive?', 'answer' => 'About 2.5 hours via Highway 2 north. The road is well-maintained and our trucks travel it regularly.'],
                    ['question' => 'Is the highway between Lethbridge and Calgary safe in winter?', 'answer' => 'Highway 2 is well-maintained year-round. We monitor conditions and adjust scheduling if needed, but winter moves are very doable.'],
                    ['question' => 'Can you help university students move from Lethbridge?', 'answer' => 'Yes — we offer student-friendly rates for smaller moves. A dorm or one-bedroom apartment move from Lethbridge is one of our most affordable long-distance options.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 20,
            ],
            [
                'slug' => 'medicine-hat-to-calgary',
                'origin_city' => 'Medicine Hat',
                'dest_city' => 'Calgary',
                'distance_km' => 300,
                'drive_time_hours' => 3.0,
                'price_range_min' => 1800,
                'price_range_max' => 5000,
                'meta_title' => 'Medicine Hat to Calgary Movers | Unitas Movers',
                'meta_description' => 'Medicine Hat to Calgary movers. 300 km on the Trans-Canada, from $1,800. Insured long-distance crews. Free moving estimates.',
                'h1' => 'Medicine Hat to Calgary Moving Company',
                'route_overview' => '<p>Moving from Medicine Hat to Calgary? The route follows the Trans-Canada Highway (Highway 1) west across the southern Alberta prairies. At 300 km, it\'s about a 3-hour drive through Brooks, Bassano, and Strathmore before reaching Calgary.</p>
<p>Many Medicine Hat residents relocate to Calgary for expanded career opportunities while keeping their love for southern Alberta living. We serve this corridor regularly, including pickups in Brooks and Strathmore.</p>',
                'cost_breakdown' => '<h3>Medicine Hat to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,800 – $2,500</li>
<li><strong>2-bedroom:</strong> $2,300 – $3,200</li>
<li><strong>3-bedroom:</strong> $3,000 – $4,200</li>
<li><strong>4+ bedroom:</strong> $3,800 – $5,000+</li>
</ul>
<p>The Trans-Canada Highway is flat and straight, making it an efficient route for our trucks. Pricing includes the full highway distance, fuel, and comprehensive cargo insurance.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary\'s metro population of over 1.5 million offers a much wider range of career, education, and lifestyle options than Medicine Hat. The city\'s proximity to the Rockies and vibrant urban core make it a popular destination.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> Beltline, Inglewood, Bridgeland, Seton, Mahogany, and Tuscany offer options for every lifestyle and budget.</p>
<p><strong>What to expect:</strong> Higher housing costs than Medicine Hat, but more job opportunities and urban amenities. Calgary\'s chinook winds and proximity to mountain recreation are major lifestyle perks.</p>',
                'faq_json' => [
                    ['question' => 'How far is Calgary from Medicine Hat?', 'answer' => 'About 300 km west — roughly 3 hours on the Trans-Canada Highway. Our trucks make the trip regularly.'],
                    ['question' => 'Can you pick up in Brooks on the way?', 'answer' => 'Yes — we serve Brooks, Strathmore, Bassano, and other Trans-Canada communities as part of this route.'],
                    ['question' => 'Will my cost of living increase in Calgary?', 'answer' => 'Housing and some daily costs are higher in Calgary, but the wider job market often means higher wages to match.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 21,
            ],
            [
                'slug' => 'grande-prairie-to-calgary',
                'origin_city' => 'Grande Prairie',
                'dest_city' => 'Calgary',
                'distance_km' => 720,
                'drive_time_hours' => 7.5,
                'price_range_min' => 3500,
                'price_range_max' => 8000,
                'meta_title' => 'Grande Prairie to Calgary Movers | Unitas Movers',
                'meta_description' => 'Grande Prairie to Calgary movers. 720 km, professional long-haul crews. Licensed, insured. Competitive pricing. Free estimates.',
                'h1' => 'Grande Prairie to Calgary Moving Services',
                'route_overview' => '<p>Moving from Grande Prairie to Calgary? The 720 km route follows Highway 43 east through the Peace Country to Edmonton, then Highway 2 south to Calgary — about 7.5 hours of driving.</p>
<p>This is a full-day drive that requires careful planning. For larger moves, we often load one day and deliver the next, with overnight stops for our crew. The northern highways are well-maintained but can be affected by seasonal weather, especially between October and April.</p>
<p>We serve communities along the route including Beaverlodge, Valleyview, Fox Creek, and Whitecourt.</p>',
                'cost_breakdown' => '<h3>Grande Prairie to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $3,500 – $4,500</li>
<li><strong>2-bedroom:</strong> $4,200 – $5,500</li>
<li><strong>3-bedroom:</strong> $5,000 – $6,500</li>
<li><strong>4+ bedroom:</strong> $6,000 – $8,000+</li>
</ul>
<p>The longer distance means higher base costs, but we optimize routing and scheduling to keep pricing competitive. Pricing includes fuel, overnight crew accommodation, and full cargo insurance.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers a warmer climate, larger job market, and more urban amenities than Grande Prairie. Many Peace Country residents relocate south for career diversification, education, and proximity to the Rocky Mountains.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> The northwest for mountain access, the south for newer communities, and the inner city for urban living.</p>
<p><strong>What to expect:</strong> Shorter, milder winters with chinooks, more entertainment and dining options, and a significantly larger city to explore. Housing costs are higher but the variety of neighbourhoods provides options at many price points.</p>',
                'faq_json' => [
                    ['question' => 'How long does a Grande Prairie to Calgary move take?', 'answer' => 'The drive alone is about 7.5 hours. Most moves are loaded one day and delivered the next, with overnight accommodation for our crew included in the pricing.'],
                    ['question' => 'Do you move from Grande Prairie in winter?', 'answer' => 'Yes — we operate year-round. Northern highway conditions are monitored and we adjust schedules for safety. Winter moves may require flexible timing.'],
                    ['question' => 'Can you pick up in Whitecourt or Valleyview?', 'answer' => 'Yes — we serve all communities along the Highway 43 corridor between Grande Prairie and Edmonton.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 22,
            ],
            [
                'slug' => 'fort-mcmurray-to-calgary',
                'origin_city' => 'Fort McMurray',
                'dest_city' => 'Calgary',
                'distance_km' => 750,
                'drive_time_hours' => 7.0,
                'price_range_min' => 3500,
                'price_range_max' => 8500,
                'meta_title' => 'Fort McMurray to Calgary Movers | Unitas Movers',
                'meta_description' => 'Fort McMurray to Calgary movers. 750 km, experienced long-haul crews. Oil sands relocation specialists. Licensed, insured. Free quotes.',
                'h1' => 'Fort McMurray to Calgary Moving Company',
                'route_overview' => '<p>Moving from Fort McMurray to Calgary? The 750 km route heads south on Highway 63 to Athabasca, then connects to Highway 2 south through Edmonton to Calgary — about 7 hours of driving in good conditions.</p>
<p>Many Fort McMurray residents relocate to Calgary when transitioning careers, retiring, or seeking a different lifestyle. We understand the unique dynamics of oil sands moves — timing around shift schedules and coordinating with employer relocation programs.</p>
<p>Highway 63 has been fully twinned since 2016, significantly improving safety and travel times on this route.</p>',
                'cost_breakdown' => '<h3>Fort McMurray to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $3,500 – $4,800</li>
<li><strong>2-bedroom:</strong> $4,500 – $5,800</li>
<li><strong>3-bedroom:</strong> $5,500 – $7,000</li>
<li><strong>4+ bedroom:</strong> $6,500 – $8,500+</li>
</ul>
<p>Fort McMurray moves are long-haul operations that include overnight crew accommodation, highway fuel, and full insurance. We often coordinate with employers who offer relocation assistance — ask about corporate billing and direct invoicing.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers a milder climate, more diverse economy, and proximity to the Rocky Mountains. Many Fort McMurray families choose Calgary for its excellent schools, amenities, and quality of life while maintaining connections to northern Alberta.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> Cranston, Seton, and Mahogany in the south; Tuscany and Royal Oak in the northwest; and the inner city for urban living.</p>
<p><strong>What to expect:</strong> Significantly shorter, warmer winters with chinook relief. More career diversification options. Housing may cost less per square foot than Fort McMurray depending on the neighbourhood you choose.</p>',
                'faq_json' => [
                    ['question' => 'How long is the drive from Fort McMurray to Calgary?', 'answer' => 'About 7 hours via Highway 63 south and Highway 2. Our crew typically loads one day and delivers the next.'],
                    ['question' => 'Do you offer corporate relocation billing?', 'answer' => 'Yes — we work with employers and relocation companies. We can invoice your employer directly and handle corporate move documentation.'],
                    ['question' => 'Is Highway 63 safe for moving trucks?', 'answer' => 'Highway 63 has been fully twinned since 2016, significantly improving safety. Our experienced drivers know this route well.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 23,
            ],

            // ── Mountain Corridor → Calgary ──────────────────────
            [
                'slug' => 'canmore-to-calgary',
                'origin_city' => 'Canmore',
                'dest_city' => 'Calgary',
                'distance_km' => 100,
                'drive_time_hours' => 1.2,
                'price_range_min' => 1000,
                'price_range_max' => 3500,
                'meta_title' => 'Canmore to Calgary Movers | Unitas Movers',
                'meta_description' => 'Canmore to Calgary movers. Mountain moving specialists. 100 km via Trans-Canada, from $1,000. Licensed, insured. Free estimates.',
                'h1' => 'Canmore to Calgary Moving Services',
                'route_overview' => '<p>Moving from Canmore to Calgary? The route follows the Trans-Canada Highway east through the Rocky Mountain foothills — a scenic 100 km drive that takes just over an hour. It\'s one of our most popular short long-distance routes.</p>
<p>Mountain moves have unique considerations, especially when loading in Canmore where streets are narrower, driveways can be steep, and some condo buildings have tight parking. Our crews are experienced with all of these mountain-specific challenges.</p>
<p>We also serve Exshaw, Harvie Heights, and Dead Man\'s Flats along this corridor.</p>',
                'cost_breakdown' => '<h3>Canmore to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,000 – $1,600</li>
<li><strong>2-bedroom:</strong> $1,400 – $2,200</li>
<li><strong>3-bedroom:</strong> $2,000 – $2,800</li>
<li><strong>4+ bedroom:</strong> $2,500 – $3,500+</li>
</ul>
<p>The short distance keeps costs reasonable. Mountain-specific factors like steep driveways, multi-level chalets, and building access restrictions are factored into your individual quote.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers more affordable housing, a larger job market, and urban amenities while keeping the Rocky Mountains just 90 minutes away for weekend adventures.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> The northwest (Tuscany, Royal Oak) for easy mountain access, Kensington and Hillhurst for walkability, and the inner city for urban convenience.</p>
<p><strong>What to expect:</strong> More housing options and lower prices than Canmore. Calgary\'s chinook winds keep winters manageable. The trade-off is less daily mountain access, but weekend trips to Canmore and Banff are easy.</p>',
                'faq_json' => [
                    ['question' => 'How far is Calgary from Canmore?', 'answer' => 'About 100 km east — just over an hour on the Trans-Canada Highway. It\'s one of our shortest long-distance routes.'],
                    ['question' => 'Can you handle steep driveways in Canmore for loading?', 'answer' => 'Yes — our drivers are experienced with mountain terrain and we select the right truck size for steep Canmore driveways and narrow streets.'],
                    ['question' => 'Do you move condos in Canmore?', 'answer' => 'Yes — many Canmore moves involve condos and townhomes. We coordinate building access, elevator bookings, and underground parking logistics.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 24,
            ],
            [
                'slug' => 'banff-to-calgary',
                'origin_city' => 'Banff',
                'dest_city' => 'Calgary',
                'distance_km' => 130,
                'drive_time_hours' => 1.5,
                'price_range_min' => 1200,
                'price_range_max' => 3500,
                'meta_title' => 'Banff to Calgary Movers | Unitas Movers',
                'meta_description' => 'Banff to Calgary movers. National park relocation experts. 130 km, from $1,200. Licensed, insured. Free moving quotes.',
                'h1' => 'Banff to Calgary Moving Company',
                'route_overview' => '<p>Moving from Banff to Calgary? The 130 km drive follows the Trans-Canada Highway east out of Banff National Park through the Bow Valley, taking about 90 minutes to reach Calgary.</p>
<p>Many Banff residents relocate to Calgary when transitioning careers, starting families, or seeking more affordable housing. Most Banff housing is compact — apartments, staff accommodation, and smaller homes — so moves tend to be on the smaller side.</p>
<p>Our crews understand Banff\'s unique logistics: town parking restrictions, building access during tourist-heavy periods, and the narrower mountain roads.</p>',
                'cost_breakdown' => '<h3>Banff to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,200 – $1,800</li>
<li><strong>2-bedroom:</strong> $1,600 – $2,400</li>
<li><strong>3-bedroom:</strong> $2,200 – $3,000</li>
<li><strong>Larger home:</strong> $2,800 – $3,500+</li>
</ul>
<p>Banff moves tend to be smaller than typical suburban moves due to compact housing. Costs are driven mainly by the mountain drive and any building access complexities.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers significantly more housing options and affordability compared to Banff, with a diverse job market that extends well beyond tourism and hospitality.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> The northwest for easy mountain access on weekends, Kensington and Inglewood for walkable urban living, and new communities in the south and east for family homes.</p>
<p><strong>What to expect:</strong> More space, more affordability, and more career options. Banff remains just 90 minutes away for weekend skiing, hiking, and mountain culture. Calgary\'s urban amenities — restaurants, shopping, arts — are a significant upgrade.</p>',
                'faq_json' => [
                    ['question' => 'Is parking an issue for moving trucks in Banff?', 'answer' => 'Town parking can be limited, especially during tourist season. We coordinate timing and access to minimize disruption and secure truck parking.'],
                    ['question' => 'Do you move staff accommodation in Banff?', 'answer' => 'Yes — many Banff moves involve staff housing and shared accommodations. We offer small-load pricing for these compact moves.'],
                    ['question' => 'How far is Banff from Calgary?', 'answer' => 'About 130 km — roughly 90 minutes on the Trans-Canada Highway.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 25,
            ],

            // ── Satellite Towns → Calgary ────────────────────────
            [
                'slug' => 'airdrie-to-calgary',
                'origin_city' => 'Airdrie',
                'dest_city' => 'Calgary',
                'distance_km' => 30,
                'drive_time_hours' => 0.4,
                'price_range_min' => 500,
                'price_range_max' => 2000,
                'meta_title' => 'Airdrie to Calgary Movers | Unitas Movers',
                'meta_description' => 'Airdrie to Calgary movers. Just 30 km south, from $500. Fast, licensed, insured. Our most popular short-distance route. Free quotes.',
                'h1' => 'Airdrie to Calgary Moving Services',
                'route_overview' => '<p>Moving from Airdrie to Calgary? At just 30 km south on Highway 2, this is essentially a local move with a short highway hop. The drive takes about 20 minutes from Airdrie — less time than many cross-city moves within Calgary itself.</p>
<p>Airdrie-to-Calgary moves are popular with families and professionals taking on new opportunities in Calgary. Most moves are completed in 3-6 hours, and we often have crews available for short-notice bookings since we\'re in the Airdrie area frequently.</p>',
                'cost_breakdown' => '<h3>Airdrie to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $500 – $900</li>
<li><strong>2-bedroom:</strong> $700 – $1,200</li>
<li><strong>3-bedroom:</strong> $900 – $1,500</li>
<li><strong>4+ bedroom:</strong> $1,200 – $2,000+</li>
</ul>
<p>Because the distance is so short, Airdrie-to-Calgary moves are priced similarly to local moves. We charge hourly with a small trip fee for the highway portion. No long-distance premiums.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers a wider range of neighbourhoods, employment options, and urban amenities. Many Airdrie residents move south for shorter commutes, more dining and entertainment, and access to Calgary\'s inner-city lifestyle.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> The north (Evanston, Livingston, Cornerstone) for proximity to Airdrie friends, and inner city options for those seeking a different lifestyle.</p>
<p><strong>What to expect:</strong> More diverse housing options, shorter commutes to most Calgary workplaces, and access to the city\'s full range of amenities.</p>',
                'faq_json' => [
                    ['question' => 'Is moving from Airdrie to Calgary considered long-distance?', 'answer' => 'Not really — at 30 km, we price it similarly to a local move with a small trip fee. It\'s our most popular short-distance route.'],
                    ['question' => 'How long does an Airdrie to Calgary move take?', 'answer' => 'Most moves take 3-6 hours depending on home size. The drive itself is only about 20 minutes.'],
                    ['question' => 'Do you have same-day availability?', 'answer' => 'We often do, since our crews are in the Airdrie area frequently. Call us and we\'ll check — booking a few days ahead is still recommended.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 26,
            ],
            [
                'slug' => 'cochrane-to-calgary',
                'origin_city' => 'Cochrane',
                'dest_city' => 'Calgary',
                'distance_km' => 35,
                'drive_time_hours' => 0.5,
                'price_range_min' => 500,
                'price_range_max' => 2000,
                'meta_title' => 'Cochrane to Calgary Movers | Unitas Movers',
                'meta_description' => 'Cochrane to Calgary movers. 35 km east, from $500. Foothills town moving specialists. Licensed, insured. Free moving estimates.',
                'h1' => 'Cochrane to Calgary Moving Company',
                'route_overview' => '<p>Moving from Cochrane to Calgary? The drive is just 35 km east along Highway 1A, taking about 30 minutes from Cochrane to west Calgary. It\'s one of our quickest satellite town routes.</p>
<p>Cochrane-to-Calgary moves are popular with families and professionals seeking closer proximity to Calgary workplaces, or those downsizing to urban living. We travel this corridor frequently.</p>
<p>We also serve the Bearspaw area between Cochrane and Calgary, as well as communities west of Cochrane.</p>',
                'cost_breakdown' => '<h3>Cochrane to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $500 – $900</li>
<li><strong>2-bedroom:</strong> $700 – $1,300</li>
<li><strong>3-bedroom:</strong> $1,000 – $1,600</li>
<li><strong>4+ bedroom:</strong> $1,300 – $2,000+</li>
</ul>
<p>The short distance means Cochrane moves are priced close to local rates. Highway 1A can be busy during commute hours — we schedule to avoid peak traffic when possible.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary\'s west side offers many neighbourhoods that feel close to Cochrane\'s mountain views while providing full urban convenience. The move to Calgary means more employment options, dining, and entertainment within easy reach.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> Tuscany, Royal Oak, and Arbour Lake in the west for familiar mountain views; Kensington and Bowness for walkability; and the inner city for urban living.</p>
<p><strong>What to expect:</strong> More housing variety and amenities, shorter commutes to most Calgary workplaces, and easy access back to Cochrane for visits.</p>',
                'faq_json' => [
                    ['question' => 'How long does a Cochrane to Calgary move take?', 'answer' => 'Most moves take 3-6 hours. The drive is only about 30 minutes from Cochrane to west Calgary.'],
                    ['question' => 'Do you serve Bearspaw between Cochrane and Calgary?', 'answer' => 'Yes — we serve Bearspaw, including acreage properties with larger loads and outbuildings.'],
                    ['question' => 'Is the highway from Cochrane to Calgary busy?', 'answer' => 'Highway 1A can be busy during morning and evening commutes. We schedule to avoid peak hours when possible for a smoother move.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 27,
            ],
            [
                'slug' => 'okotoks-to-calgary',
                'origin_city' => 'Okotoks',
                'dest_city' => 'Calgary',
                'distance_km' => 35,
                'drive_time_hours' => 0.5,
                'price_range_min' => 500,
                'price_range_max' => 2000,
                'meta_title' => 'Okotoks to Calgary Movers | Unitas Movers',
                'meta_description' => 'Okotoks to Calgary movers. 35 km north, from $500. Growing foothills town. Licensed, insured. Get your free moving estimate.',
                'h1' => 'Movers from Okotoks to Calgary',
                'route_overview' => '<p>Moving from Okotoks to Calgary? The drive is just 35 km north along Highway 2A, a pleasant 25-30 minute drive through the foothills. It\'s one of our most-travelled routes.</p>
<p>Many Okotoks families move to Calgary for career changes, to be closer to work, or to access Calgary\'s wider range of urban amenities. We travel this corridor several times a week.</p>
<p>We also serve De Winton and Heritage Pointe between Okotoks and Calgary.</p>',
                'cost_breakdown' => '<h3>Okotoks to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $500 – $900</li>
<li><strong>2-bedroom:</strong> $700 – $1,200</li>
<li><strong>3-bedroom:</strong> $900 – $1,500</li>
<li><strong>4+ bedroom:</strong> $1,200 – $2,000+</li>
</ul>
<p>The short highway distance keeps costs comparable to local Calgary moves. Our pricing includes the trip fee, fuel, and full cargo protection.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary\'s south side offers many neighbourhoods close to Okotoks while providing full urban access. The move means more employment options, shorter commutes for Calgary-based jobs, and proximity to city amenities.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> Cranston, Seton, and Mahogany in the south for proximity to Okotoks friends; Marda Loop and the Beltline for walkable urban living.</p>
<p><strong>What to expect:</strong> More diverse housing options and a wider range of restaurants, shopping, and entertainment. Calgary\'s south is well-connected by Macleod Trail and Deerfoot Trail.</p>',
                'faq_json' => [
                    ['question' => 'How far is Calgary from Okotoks?', 'answer' => 'About 35 km north — roughly 25-30 minutes via Highway 2A and Macleod Trail.'],
                    ['question' => 'Can you pick up from De Winton between Okotoks and Calgary?', 'answer' => 'Yes — we serve De Winton, Heritage Pointe, and all communities along the Okotoks-Calgary corridor.'],
                    ['question' => 'Is Calgary more expensive than Okotoks?', 'answer' => 'It depends on the neighbourhood — Calgary\'s south side has competitive pricing, while inner-city areas tend to cost more. The wider range of options means you can find something at most price points.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 28,
            ],
            [
                'slug' => 'chestermere-to-calgary',
                'origin_city' => 'Chestermere',
                'dest_city' => 'Calgary',
                'distance_km' => 20,
                'drive_time_hours' => 0.3,
                'price_range_min' => 450,
                'price_range_max' => 1800,
                'meta_title' => 'Chestermere to Calgary Movers | Unitas Movers',
                'meta_description' => 'Chestermere to Calgary movers. Lake city just 20 km west. From $450. Licensed, insured. Fast, affordable. Free moving quotes.',
                'h1' => 'Chestermere to Calgary Moving Services',
                'route_overview' => '<p>Moving from Chestermere to Calgary? At just 20 km west along Chestermere Boulevard (connecting to 17th Avenue SE), the drive takes as little as 15 minutes — making this essentially a local move.</p>
<p>Chestermere-to-Calgary moves are popular with families seeking closer proximity to work, or those who want more urban amenities. The short distance means quick, affordable moves.</p>
<p>We also serve Conrich and rural properties along the Highway 1 corridor.</p>',
                'cost_breakdown' => '<h3>Chestermere to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $450 – $800</li>
<li><strong>2-bedroom:</strong> $650 – $1,100</li>
<li><strong>3-bedroom:</strong> $850 – $1,400</li>
<li><strong>4+ bedroom:</strong> $1,100 – $1,800+</li>
</ul>
<p>At just 20 km, Chestermere moves are priced as local moves. The short distance keeps overall costs very low.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary\'s east side is just minutes from Chestermere, offering more diverse housing, employment, and entertainment options. The move opens up access to Calgary\'s full range of amenities.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> East Calgary communities like Copperfield, McKenzie Towne, and New Brighton for proximity to Chestermere friends; the Beltline and inner city for urban living.</p>
<p><strong>What to expect:</strong> More neighbourhood variety, more dining and shopping options, and potentially shorter commutes depending on where you work in Calgary.</p>',
                'faq_json' => [
                    ['question' => 'Is Chestermere basically part of Calgary?', 'answer' => 'Chestermere is an independent city, but it\'s right on Calgary\'s eastern border — only 15-20 minutes from most east Calgary locations.'],
                    ['question' => 'Do lakefront Chestermere homes require special moving considerations?', 'answer' => 'Some lakefront properties have unique access or landscaping considerations. We do a pre-move assessment to plan for any specific needs.'],
                    ['question' => 'How short is this move really?', 'answer' => 'The drive is about 15 minutes — it\'s one of the shortest routes we offer. Most moves are complete in 3-5 hours.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 29,
            ],

            // ── BC → Calgary ─────────────────────────────────────
            [
                'slug' => 'vancouver-to-calgary',
                'origin_city' => 'Vancouver',
                'dest_city' => 'Calgary',
                'distance_km' => 1050,
                'drive_time_hours' => 10.5,
                'price_range_min' => 4500,
                'price_range_max' => 12000,
                'meta_title' => 'Vancouver to Calgary Movers | Unitas Movers',
                'meta_description' => 'Vancouver to Calgary movers. 1,050 km through the Rockies. Professional long-distance crews. Licensed, insured. Free estimates.',
                'h1' => 'Vancouver to Calgary Moving Services',
                'route_overview' => '<p>Moving from Vancouver to Calgary? The 1,050 km journey follows the Trans-Canada Highway east through the Fraser Canyon, Rogers Pass, and the Rocky Mountains before descending into the Alberta foothills and Calgary.</p>
<p>This route is popular with families seeking more affordable housing, career opportunities in Calgary\'s energy and tech sectors, and those wanting to trade rain for sunshine and chinooks. Our long-haul crews are trained for mountain driving and carry chains, emergency equipment, and the expertise to navigate safely through every season.</p>
<p>Most Vancouver-to-Calgary moves are two-day operations — loading in Vancouver, driving the mountain passes, and delivering in Calgary. Larger moves may require three days.</p>',
                'cost_breakdown' => '<h3>Vancouver to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $4,500 – $6,000</li>
<li><strong>2-bedroom:</strong> $5,500 – $7,500</li>
<li><strong>3-bedroom:</strong> $7,000 – $9,500</li>
<li><strong>4+ bedroom:</strong> $8,500 – $12,000+</li>
</ul>
<p>The mountain highway distance, fuel costs, and multi-day crew requirements drive the pricing. We include full cargo insurance, crew accommodations, and mountain driving expertise. No hidden fees.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers significantly more affordable housing than Vancouver, a strong job market especially in energy and tech, and the Rocky Mountains just 90 minutes west. Many Vancouver transplants are surprised by Calgary\'s sunny climate and the amount of home they can afford.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> The Beltline and Mission for urban living similar to Vancouver, Marda Loop for walkability, and family-friendly suburbs throughout the city.</p>
<p><strong>What to expect:</strong> Colder, drier winters (but with chinook relief), more affordable housing, no provincial sales tax, and a different but vibrant food and arts scene. Calgarians are famously friendly and the transition from Vancouver is smoother than many expect.</p>',
                'faq_json' => [
                    ['question' => 'How long does a Vancouver to Calgary move take?', 'answer' => 'Typically 2-3 days — loading in Vancouver, driving through the mountains, and delivering in Calgary.'],
                    ['question' => 'Is the mountain highway safe for moving trucks?', 'answer' => 'Yes — our drivers are experienced mountain highway drivers. We monitor conditions, carry chains, and adjust schedules for safety through Rogers Pass and the Fraser Canyon.'],
                    ['question' => 'Do you pick up from Vancouver suburbs like Surrey and Burnaby?', 'answer' => 'Yes — we pick up throughout Metro Vancouver including Vancouver, Burnaby, Surrey, Richmond, Langley, North Vancouver, and more.'],
                    ['question' => 'How much cheaper is Calgary than Vancouver?', 'answer' => 'Housing is typically 30-50% less expensive, and Alberta has no provincial sales tax. Many families find their dollar goes significantly further in Calgary.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 30,
            ],
            [
                'slug' => 'kelowna-to-calgary',
                'origin_city' => 'Kelowna',
                'dest_city' => 'Calgary',
                'distance_km' => 600,
                'drive_time_hours' => 6.0,
                'price_range_min' => 3000,
                'price_range_max' => 7500,
                'meta_title' => 'Kelowna to Calgary Movers | Unitas Movers',
                'meta_description' => 'Kelowna to Calgary movers. 600 km through the Rockies from the Okanagan. Licensed, insured. Professional crews. Free estimates.',
                'h1' => 'Kelowna to Calgary Moving Company',
                'route_overview' => '<p>Moving from Kelowna to Calgary? The 600 km route crosses the Rocky Mountains from British Columbia\'s Okanagan Valley through Vernon, Revelstoke, and Golden via Highway 1, taking about 6 hours.</p>
<p>This route is popular with professionals relocating for career opportunities in Calgary and families seeking more affordable housing. The mountain highway requires experienced drivers, and seasonal conditions (especially through Rogers Pass in winter) factor into scheduling.</p>
<p>We also pick up from West Kelowna, Vernon, Penticton, and other Okanagan communities along this corridor.</p>',
                'cost_breakdown' => '<h3>Kelowna to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $3,000 – $4,000</li>
<li><strong>2-bedroom:</strong> $3,800 – $5,000</li>
<li><strong>3-bedroom:</strong> $4,500 – $6,000</li>
<li><strong>4+ bedroom:</strong> $5,500 – $7,500+</li>
</ul>
<p>The mountain crossing adds complexity but we keep pricing competitive on this popular route. All costs include fuel, mountain driving, crew accommodation, and full cargo insurance.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers a larger job market, no provincial sales tax, and a diverse range of neighbourhoods. While you\'ll trade the lake lifestyle for mountain proximity, Banff and Canmore are just 90 minutes west for weekend recreation.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> The northwest for mountain access, the south for newer family communities, and the inner city for urban living.</p>
<p><strong>What to expect:</strong> Colder, drier winters than the Okanagan but more career opportunities and affordable housing. Calgary\'s food, arts, and outdoor recreation scenes are well-developed, and the city\'s energy is contagious.</p>',
                'faq_json' => [
                    ['question' => 'How long is the drive from Kelowna to Calgary?', 'answer' => 'About 6 hours via Highway 1 through the Rockies. Our crews make this trip regularly.'],
                    ['question' => 'Do you pick up from other Okanagan cities?', 'answer' => 'Yes — we serve Vernon, Penticton, West Kelowna, Lake Country, and other Okanagan communities along the same route.'],
                    ['question' => 'Is Rogers Pass safe for moving trucks in winter?', 'answer' => 'Our drivers are experienced mountain drivers. We monitor conditions, carry chains, and adjust timing around Rogers Pass closures when needed.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 31,
            ],

            // ── Saskatchewan → Calgary ───────────────────────────
            [
                'slug' => 'saskatoon-to-calgary',
                'origin_city' => 'Saskatoon',
                'dest_city' => 'Calgary',
                'distance_km' => 625,
                'drive_time_hours' => 6.0,
                'price_range_min' => 3000,
                'price_range_max' => 7000,
                'meta_title' => 'Saskatoon to Calgary Movers | Unitas Movers',
                'meta_description' => 'Saskatoon to Calgary movers. 625 km across the prairies, from $3,000. Licensed, insured, experienced. Free long-distance quotes.',
                'h1' => 'Saskatoon to Calgary Moving Services',
                'route_overview' => '<p>Moving from Saskatoon to Calgary? The 625 km route crosses the prairies through Swift Current and Medicine Hat via the Trans-Canada Highway, taking about 6 hours on flat, well-maintained highways.</p>
<p>This corridor sees steady traffic from Saskatchewan residents moving west for career opportunities in Calgary\'s energy, tech, and professional services sectors. The flat highway terrain makes it one of our most straightforward long-distance routes.</p>',
                'cost_breakdown' => '<h3>Saskatoon to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $3,000 – $4,000</li>
<li><strong>2-bedroom:</strong> $3,800 – $5,000</li>
<li><strong>3-bedroom:</strong> $4,500 – $6,000</li>
<li><strong>4+ bedroom:</strong> $5,500 – $7,000+</li>
</ul>
<p>Prairie highways are fuel-efficient for our trucks — flat terrain and straight roads keep costs reasonable for the distance. Pricing includes fuel, crew accommodation, and full cargo insurance.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers a larger, more diversified economy with no provincial sales tax — a significant advantage over Saskatchewan. The Rocky Mountains are just 90 minutes west, adding a recreation dimension that the prairies can\'t match.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> Diverse options from urban living in the Beltline to family communities in the south and northwest suburbs.</p>
<p><strong>What to expect:</strong> Milder winters thanks to chinook winds, a stronger job market, more dining and entertainment options, and proximity to world-class mountain recreation. Housing costs are higher but wages tend to be higher too.</p>',
                'faq_json' => [
                    ['question' => 'How long is the drive from Saskatoon to Calgary?', 'answer' => 'About 6 hours across the prairies. The route is flat and straightforward, and most moves can be completed in two days.'],
                    ['question' => 'Is Calgary more expensive than Saskatoon?', 'answer' => 'Housing costs are generally higher, but Alberta has no provincial sales tax and wages tend to be higher — many families find their net position improves.'],
                    ['question' => 'Do you move from Regina too?', 'answer' => 'We can arrange moves from Regina — it\'s about 750 km from Calgary. Contact us for a custom quote for the Regina-Calgary corridor.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 32,
            ],

            // ── Other Alberta → Calgary ──────────────────────────
            [
                'slug' => 'lloydminster-to-calgary',
                'origin_city' => 'Lloydminster',
                'dest_city' => 'Calgary',
                'distance_km' => 530,
                'drive_time_hours' => 5.0,
                'price_range_min' => 2800,
                'price_range_max' => 6500,
                'meta_title' => 'Lloydminster to Calgary Movers | Unitas Movers',
                'meta_description' => 'Lloydminster to Calgary movers. 530 km, border city moves. Licensed, insured, professional crews. Free long-distance estimates.',
                'h1' => 'Lloydminster to Calgary Moving Company',
                'route_overview' => '<p>Moving from Lloydminster to Calgary? The 530 km route follows Highway 16 west (the Yellowhead Highway) to Edmonton, then Highway 2 south to Calgary — approximately 5 hours of driving.</p>
<p>Many Lloydminster residents relocate to Calgary for career diversification, education, and urban lifestyle. Whether you\'re on the Alberta or Saskatchewan side of the border, our crew handles the move seamlessly.</p>
<p>We also serve communities along the route including Wainwright, Vermilion, and Vegreville.</p>',
                'cost_breakdown' => '<h3>Lloydminster to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $2,800 – $3,800</li>
<li><strong>2-bedroom:</strong> $3,500 – $4,800</li>
<li><strong>3-bedroom:</strong> $4,200 – $5,500</li>
<li><strong>4+ bedroom:</strong> $5,000 – $6,500+</li>
</ul>
<p>The Highway 16/Highway 2 route is well-maintained and efficient. Pricing includes the full distance, crew accommodation, fuel, and comprehensive cargo insurance.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers a much larger and more diversified economy, extensive urban amenities, and proximity to the Rocky Mountains — all while remaining in Alberta with no provincial sales tax.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> A wide range from inner-city urban living to family-friendly suburban communities in every quadrant.</p>
<p><strong>What to expect:</strong> Milder winters with chinooks, a vibrant food and arts scene, professional sports teams, and significantly more career and education options. The transition from small-city to big-city living comes with more amenities but also higher housing costs.</p>',
                'faq_json' => [
                    ['question' => 'How long is the Lloydminster to Calgary drive?', 'answer' => 'About 5 hours via the Yellowhead Highway to Edmonton, then Highway 2 south. Most moves load one day and deliver the next.'],
                    ['question' => 'Can you pick up from Vermilion or Wainwright?', 'answer' => 'Yes — we can pick up from communities along the Highway 16 corridor between Lloydminster and Edmonton.'],
                    ['question' => 'Does it matter which side of the Lloydminster border I live on?', 'answer' => 'Not for moving purposes — we pick up from both sides. You\'ll enjoy no provincial sales tax in Calgary either way.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 33,
            ],
            [
                'slug' => 'brooks-to-calgary',
                'origin_city' => 'Brooks',
                'dest_city' => 'Calgary',
                'distance_km' => 190,
                'drive_time_hours' => 2.0,
                'price_range_min' => 1400,
                'price_range_max' => 4000,
                'meta_title' => 'Brooks to Calgary Movers | Unitas Movers',
                'meta_description' => 'Brooks to Calgary movers. 190 km west on Highway 1, from $1,400. Licensed, insured, affordable. Free moving estimates.',
                'h1' => 'Brooks to Calgary Moving Services',
                'route_overview' => '<p>Moving from Brooks to Calgary? The 190 km drive west on the Trans-Canada Highway is flat, straight, and well-maintained — one of our most efficient routes. The drive takes about 2 hours.</p>
<p>Many Brooks residents relocate to Calgary for expanded career options, education, and urban amenities. The straightforward highway makes this a simple single-day move for most home sizes.</p>
<p>We also pick up from Bassano, Duchess, and surrounding rural communities along the Highway 1 corridor.</p>',
                'cost_breakdown' => '<h3>Brooks to Calgary Moving Costs</h3>
<ul>
<li><strong>Studio/1-bedroom:</strong> $1,400 – $2,000</li>
<li><strong>2-bedroom:</strong> $1,800 – $2,800</li>
<li><strong>3-bedroom:</strong> $2,400 – $3,400</li>
<li><strong>4+ bedroom:</strong> $3,000 – $4,000+</li>
</ul>
<p>The flat Trans-Canada Highway makes this route fuel-efficient. Pricing includes the highway distance, fuel, and full cargo insurance. Most Brooks moves are single-day operations.</p>',
                'destination_guide' => '<h3>Moving to Calgary</h3>
<p>Calgary offers a dramatically larger job market, more diverse entertainment and dining, and urban amenities that attract many eastern Alberta residents. The transition from Brooks\' small-city pace to Calgary\'s energy can be exciting.</p>
<p><strong>Popular Calgary neighbourhoods:</strong> The east side (Copperfield, McKenzie Towne) for proximity to Highway 1, and many options across the city for different lifestyles and budgets.</p>
<p><strong>What to expect:</strong> More career and education opportunities, higher housing costs but more variety, and a much wider range of restaurants, shopping, and cultural offerings.</p>',
                'faq_json' => [
                    ['question' => 'How far is Calgary from Brooks?', 'answer' => 'About 190 km west — roughly 2 hours on the Trans-Canada Highway. Most moves are completed in a single day.'],
                    ['question' => 'Can you pick up from Bassano?', 'answer' => 'Yes — we serve Bassano, Duchess, Rosemary, and other communities near Brooks along the Highway 1 corridor.'],
                    ['question' => 'Is Calgary a big adjustment from Brooks?', 'answer' => 'Calgary is significantly larger, but many Brooks transplants settle in quickly — especially in Calgary\'s east-side communities that maintain a friendly, neighbourhood feel.'],
                ],
                'is_bidirectional' => true,
                'is_published' => true,
                'sort_order' => 34,
            ],
        ];

        foreach ($routes as $data) {
            Route::updateOrCreate(
                ['slug' => $data['slug']],
                $data
            );
        }
    }
}
