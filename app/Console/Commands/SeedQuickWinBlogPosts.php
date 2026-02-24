<?php

namespace App\Console\Commands;

use App\Models\Area;
use App\Models\BlogPost;
use App\Models\Service;
use Illuminate\Console\Command;

class SeedQuickWinBlogPosts extends Command
{
    protected $signature = 'blog:seed-quick-wins';
    protected $description = 'Insert 3 quick-win SEO blog posts (safe to re-run)';

    public function handle(): int
    {
        $services = Service::pluck('id', 'slug');
        $areas = Area::pluck('id', 'slug');

        $posts = [
            [
                'slug' => 'condo-moving-rules-calgary',
                'title' => 'Condo Moving Rules in Calgary: Building Regulations You Need to Know',
                'meta_title' => 'Condo Moving Rules Calgary | Unitas Movers',
                'meta_description' => 'Calgary condo moving rules explained. Elevator booking, move-in windows, damage deposits, parking permits, and building regulations.',
                'excerpt' => 'Moving into or out of a Calgary condo? Here are the building rules, elevator bookings, and regulations you need to know before moving day.',
                'category' => 'guides',
                'target_keyword' => 'condo moving rules Calgary',
                'related_service_id' => $services['condo-moving'] ?? null,
                'related_area_id' => $areas['beltline'] ?? null,
                'is_pillar' => false,
                'published_at' => '2026-02-23 09:00:00',
            ],
            [
                'slug' => 'evening-weekend-moving-calgary-guide',
                'title' => 'Evening & Weekend Moving in Calgary: Flexible Scheduling Guide',
                'meta_title' => 'Evening & Weekend Movers Calgary | Unitas Movers',
                'meta_description' => 'Need evening or weekend movers in Calgary? Flexible scheduling guide with pricing, noise bylaws, and tips for after-hours moves.',
                'excerpt' => 'Can\'t take a weekday off for your move? Here\'s everything you need to know about evening and weekend moving in Calgary.',
                'category' => 'guides',
                'target_keyword' => 'evening movers Calgary',
                'related_service_id' => $services['evening-weekend-moving'] ?? null,
                'is_pillar' => false,
                'published_at' => '2026-02-23 09:00:00',
            ],
            [
                'slug' => 'calgary-to-banff-moving-cost',
                'title' => 'How Much Does It Cost to Move from Calgary to Banff?',
                'meta_title' => 'Calgary to Banff Moving Cost | Unitas Movers',
                'meta_description' => 'Calgary to Banff moving costs broken down by home size. Price factors, mountain road considerations, and money-saving tips.',
                'excerpt' => 'Planning a move from Calgary to Banff? Here\'s a detailed cost breakdown, what affects pricing, and how to save on your mountain move.',
                'category' => 'guides',
                'target_keyword' => 'Calgary to Banff moving cost',
                'related_service_id' => $services['long-distance-moving'] ?? null,
                'related_area_id' => $areas['banff'] ?? null,
                'is_pillar' => false,
                'published_at' => '2026-02-23 09:00:00',
            ],
        ];

        $created = 0;
        $skipped = 0;

        foreach ($posts as $data) {
            $existing = BlogPost::where('slug', $data['slug'])->first();

            if ($existing) {
                $this->warn("Skipped: {$data['slug']} (already exists)");
                $skipped++;
                continue;
            }

            // Pull full body and FAQ from the seeder
            $fullData = $this->getFullPostData($data['slug']);
            BlogPost::create(array_merge($data, $fullData));
            $this->info("Created: {$data['slug']}");
            $created++;
        }

        $this->newLine();
        $this->info("Done. Created: {$created}, Skipped: {$skipped}");

        return self::SUCCESS;
    }

    private function getFullPostData(string $slug): array
    {
        $bodies = [
            'condo-moving-rules-calgary' => [
                'faq_json' => [
                    ['question' => 'How far in advance do I need to book the elevator for a condo move in Calgary?', 'answer' => 'Most Calgary condo buildings require 1-2 weeks\' advance notice to book the freight or service elevator. Some newer buildings in the Beltline and East Village have online booking systems, while older buildings may require a written request to the property manager.'],
                    ['question' => 'Do I need to pay a damage deposit for a condo move?', 'answer' => 'Yes — most Calgary condo buildings require a refundable damage deposit of $250-$500 before your move. This is returned after the property manager inspects the common areas and confirms no damage occurred during the move.'],
                    ['question' => 'What hours can I move in a Calgary condo?', 'answer' => 'Most condo buildings restrict moves to weekdays between 8 AM and 5 PM or 9 AM and 6 PM. Some buildings allow Saturday morning moves. Evening and Sunday moves are rarely permitted due to noise concerns and elevator availability.'],
                ],
                'body' => '<p>Calgary\'s condo market spans hundreds of buildings — from downtown high-rises in the Beltline to mid-rise complexes in Kensington and suburban condos in the deep south. Every one of them has moving rules, and breaking them can cost you time, money, and a strained relationship with your condo board before you even move in.</p>

<h2>Elevator Booking: The Most Important Step</h2>
<p>In most Calgary condo buildings, the freight or service elevator is the only way to move furniture in or out. Booking it is non-negotiable.</p>
<ul>
<li><strong>Advance notice:</strong> Most buildings require 1-2 weeks\' notice. During peak moving season (June-August, month-end dates), popular time slots fill up fast</li>
<li><strong>Time windows:</strong> Buildings typically offer 4-hour blocks. A one-bedroom move fits comfortably in one block; larger units may need two</li>
<li><strong>Padding and protection:</strong> Many buildings require elevator padding during moves. Some provide it; others require the moving company to install their own. Ask your property manager</li>
<li><strong>Consequences of not booking:</strong> Show up without a reservation and you\'ll likely be turned away. Your movers will be standing idle — at your expense — while you scramble to sort it out</li>
</ul>

<h2>Move-In and Move-Out Windows</h2>
<p>Calgary condo buildings restrict moving to specific days and hours to minimize disruption to other residents:</p>
<ul>
<li><strong>Typical allowed hours:</strong> Monday to Friday, 8 AM to 5 PM (some buildings extend to 6 PM)</li>
<li><strong>Saturday:</strong> Many buildings allow morning moves (8 AM to 12 PM or 1 PM). Afternoon availability varies</li>
<li><strong>Sunday and holidays:</strong> Almost universally prohibited for moving</li>
<li><strong>Calgary noise bylaw:</strong> The City of Calgary\'s Community Standards Bylaw restricts construction-level noise before 7 AM and after 10 PM. While moving isn\'t construction, condo boards use this as a guideline</li>
</ul>

<h2>Damage Deposits and Insurance</h2>
<p>Your condo board wants to protect the building\'s common areas — lobbies, hallways, elevators, and parking garages. Here\'s what they\'ll typically require:</p>
<ul>
<li><strong>Damage deposit:</strong> $250-$500, refundable after inspection confirms no damage. Some buildings accept a certified cheque or bank draft only</li>
<li><strong>Proof of insurance:</strong> Many buildings require your moving company to provide a Certificate of Insurance naming the condo corporation as an additional insured. At Unitas Movers, we provide this document as part of our <a href="/services/condo-moving">condo moving service</a></li>
<li><strong>Inspection:</strong> The property manager or concierge typically inspects the common areas before and after your move. Be present for both inspections</li>
</ul>

<h2>Parking and Loading Dock Rules</h2>
<p>Getting the truck close to your building is essential for an efficient move:</p>
<ul>
<li><strong>Loading docks:</strong> If your building has one, it usually needs to be reserved along with the elevator. Some buildings assign specific bays</li>
<li><strong>Street parking:</strong> For buildings without loading docks, your movers may need to park on the street. In busy areas like the <a href="/areas/beltline">Beltline</a> or 17th Avenue, this means feeding meters or obtaining a temporary parking permit from the City of Calgary</li>
<li><strong>Size restrictions:</strong> Some underground parkades and loading docks have height and length restrictions. Confirm clearance with your property manager and communicate it to your movers</li>
</ul>

<h2>What Your Condo Board Needs From You</h2>
<p>Before moving day, contact your property manager or condo board and prepare:</p>
<ul>
<li>Your preferred move date and time window</li>
<li>The moving company\'s name and contact information</li>
<li>Proof of the mover\'s insurance coverage</li>
<li>The damage deposit (ask about accepted payment methods)</li>
<li>Any special requirements — piano, hot tub, oversized furniture that may need a crane</li>
</ul>

<h2>Tips for a Smooth Condo Move</h2>
<ul>
<li><strong>Book early:</strong> Reserve the elevator as soon as you have your possession date. Month-end weekends in summer book up weeks in advance</li>
<li><strong>Communicate with your movers:</strong> Share all building rules, access codes, loading dock instructions, and parking details before moving day. This prevents delays</li>
<li><strong>Protect common areas:</strong> Even if the building doesn\'t require it, floor runners and door frame protectors show respect to your new neighbours and protect your deposit</li>
<li><strong>Meet your concierge:</strong> If your building has a concierge, introduce yourself and get their direct contact number. They\'re your best resource for building-specific rules</li>
<li><strong>Use professional condo movers:</strong> Experienced <a href="/services/condo-moving">condo movers</a> know the drill — they bring elevator padding, floor protection, and work within the building\'s time windows efficiently</li>
</ul>',
            ],
            'evening-weekend-moving-calgary-guide' => [
                'faq_json' => [
                    ['question' => 'Do evening movers in Calgary cost more?', 'answer' => 'Some companies charge a premium of 10-20% for evening and weekend moves. At Unitas Movers, our evening and weekend rates are competitive — we believe flexibility shouldn\'t come with a penalty. Contact us for a free quote.'],
                    ['question' => 'How late can movers work in Calgary?', 'answer' => 'Calgary\'s Community Standards Bylaw restricts excessive noise after 10 PM. Most evening moves start between 5-6 PM and wrap up by 9-10 PM. For larger homes, we may recommend starting earlier to ensure completion before noise restrictions.'],
                    ['question' => 'Can I move on a Sunday in Calgary?', 'answer' => 'Yes — Sunday moves are available in most residential areas. However, condo and apartment buildings often restrict moves to weekdays and Saturday mornings. Check your building\'s rules before booking a Sunday move.'],
                ],
                'body' => '<p>Not everyone can take a Tuesday off work to move. Between jobs, childcare, and the reality that most lease changeovers happen on the 1st or 15th, many Calgarians need movers who work outside traditional business hours. Here\'s your guide to evening and weekend moving in Calgary.</p>

<h2>Why Choose an Evening or Weekend Move?</h2>
<p>The most common reasons our customers choose <a href="/services/evening-weekend-moving">evening and weekend moving</a>:</p>
<ul>
<li><strong>Work schedules:</strong> You can\'t take time off, or your employer doesn\'t offer moving days</li>
<li><strong>Overlap moves:</strong> Your current lease ends and new one starts on the same day — an evening move lets you clean the old place during the day and move into the new one that evening</li>
<li><strong>Less traffic:</strong> Evening moves after 6 PM and weekend moves avoid Calgary\'s busiest commute times, especially on Deerfoot Trail and Crowchild Trail</li>
<li><strong>Temperature:</strong> During Calgary\'s hot summer months, evening moves mean cooler working conditions for everyone</li>
<li><strong>Availability:</strong> Weekday evenings and Sundays are often less booked than peak Saturday morning slots, meaning more scheduling flexibility</li>
</ul>

<h2>Evening Moves: What to Know</h2>

<h3>Timing</h3>
<p>Evening moves in Calgary typically start between 5 PM and 6 PM. Depending on the size of your move:</p>
<ul>
<li><strong>Studio or 1-bedroom:</strong> 2-3 hours — comfortably done by 8-9 PM</li>
<li><strong>2-bedroom:</strong> 3-4 hours — finished by 9-10 PM</li>
<li><strong>3+ bedroom:</strong> May push past 10 PM. For larger homes, consider a split move (load in the evening, unload the next morning) or a Saturday start instead</li>
</ul>

<h3>Lighting</h3>
<p>Calgary\'s daylight varies dramatically by season. In summer, you\'ll have light until 9:30 PM. In winter, it\'s dark by 5 PM. For winter evening moves:</p>
<ul>
<li>Ensure both properties have working exterior lights</li>
<li>Clear walkways of snow and ice before the crew arrives</li>
<li>Professional movers bring headlamps and work lights when needed</li>
</ul>

<h3>Noise Considerations</h3>
<p>Calgary\'s Community Standards Bylaw doesn\'t set a hard noise curfew for residential moving, but it does prohibit "excessive noise" that disturbs neighbours. Practical guidelines:</p>
<ul>
<li>Keep voice levels down after 9 PM</li>
<li>Avoid slamming truck doors and tailgates</li>
<li>Let immediate neighbours know about your evening move — a quick heads-up goes a long way</li>
<li>Wrap up loading and unloading by 10 PM if possible</li>
</ul>

<h2>Weekend Moves: Saturday vs. Sunday</h2>

<h3>Saturday</h3>
<p>Saturday is the most popular moving day in Calgary. Month-end Saturdays in summer are the busiest days of the year for moving companies. Book early — 3-4 weeks ahead for peak dates.</p>
<ul>
<li><strong>Pros:</strong> Full day available, most buildings allow Saturday moves, you have Sunday to unpack</li>
<li><strong>Cons:</strong> Highest demand means less availability, some condo buildings restrict to morning only</li>
</ul>

<h3>Sunday</h3>
<p>Sunday moves are less common, which works in your favour:</p>
<ul>
<li><strong>Pros:</strong> More availability, less traffic, quieter streets for parking</li>
<li><strong>Cons:</strong> Many condo buildings prohibit Sunday moves, some moving companies don\'t operate Sundays</li>
</ul>

<h2>Building Restrictions for After-Hours Moves</h2>
<p>If you\'re moving into or out of a condo or managed apartment, check these rules before booking an evening or weekend move:</p>
<ul>
<li><strong>Elevator availability:</strong> Service elevators may only be bookable during business hours</li>
<li><strong>Concierge hours:</strong> If building access requires a concierge, confirm they\'re available during your move window</li>
<li><strong>Loading dock hours:</strong> Some buildings lock loading docks after 6 PM</li>
<li><strong>Noise policies:</strong> Buildings may have stricter noise rules than the city bylaw</li>
</ul>
<p>For houses and townhomes without building management, you have much more flexibility — evenings and weekends are usually fine as long as you\'re respectful of neighbours.</p>

<h2>Tips for a Smooth Evening or Weekend Move</h2>
<ul>
<li><strong>Pre-pack everything:</strong> Have all boxes sealed, furniture disassembled, and items staged near the door before the crew arrives. Every minute counts with a shorter window</li>
<li><strong>Label boxes by room:</strong> In lower light or when you\'re tired, clear labels prevent boxes ending up in the wrong room</li>
<li><strong>Prepare both homes:</strong> Unlock doors, turn on lights, clear pathways, and ensure parking is available at both locations</li>
<li><strong>Have food ready:</strong> You won\'t want to cook after an evening move. Order delivery to your new place or prep meals in advance</li>
<li><strong>Book your <a href="/get-a-quote">free quote</a> early:</strong> Evening and weekend slots fill up, especially on month-end dates</li>
</ul>',
            ],
            'calgary-to-banff-moving-cost' => [
                'faq_json' => [
                    ['question' => 'How much does it cost to move from Calgary to Banff?', 'answer' => 'A Calgary to Banff move typically costs $800-$3,500 depending on home size. A studio or one-bedroom averages $800-$1,200, a two-bedroom runs $1,200-$1,800, and a three-bedroom or larger ranges from $2,000-$3,500+.'],
                    ['question' => 'How long does a Calgary to Banff move take?', 'answer' => 'The drive is about 1.5 hours via the Trans-Canada Highway (130 km). Total move time including loading and unloading is typically 4-8 hours depending on home size and access conditions at both locations.'],
                    ['question' => 'Are there extra charges for moving to Banff?', 'answer' => 'Some factors can add to the base cost: difficult access at the Banff property (stairs, no elevator, long carry distances), winter road conditions requiring extra time, seasonal peak pricing during summer tourist season, and oversize items like hot tubs or pianos.'],
                ],
                'body' => '<p>Moving from Calgary to Banff is one of the most popular mountain relocations in Alberta. Whether you\'re taking a job at one of Banff\'s resorts, starting a business in town, or making the mountain lifestyle permanent, understanding the costs helps you budget properly. Here\'s what a <a href="/routes/calgary-to-banff">Calgary to Banff move</a> actually costs.</p>

<h2>Calgary to Banff Moving Cost Breakdown</h2>
<p>The Calgary to Banff route is approximately 130 km via the Trans-Canada Highway (Highway 1). Most moving companies price this as a flat-rate move rather than hourly. Here are typical costs by home size:</p>

<h3>Cost by Home Size (2026 Estimates)</h3>
<table>
<thead><tr><th>Home Size</th><th>Estimated Cost</th><th>Typical Time</th></tr></thead>
<tbody>
<tr><td>Studio / 1-bedroom</td><td>$800 – $1,200</td><td>4-5 hours</td></tr>
<tr><td>2-bedroom apartment</td><td>$1,200 – $1,800</td><td>5-6 hours</td></tr>
<tr><td>2-bedroom house</td><td>$1,500 – $2,200</td><td>5-7 hours</td></tr>
<tr><td>3-bedroom house</td><td>$2,000 – $3,000</td><td>6-8 hours</td></tr>
<tr><td>4+ bedroom house</td><td>$2,800 – $3,500+</td><td>7-10 hours</td></tr>
</tbody>
</table>
<p>These estimates include a two or three-person crew, moving truck, fuel, furniture blankets, dollies, and basic insurance coverage.</p>

<h2>Factors That Affect Your Calgary to Banff Moving Cost</h2>

<h3>Mountain Road Conditions</h3>
<p>The Trans-Canada between Calgary and Banff is well-maintained, but it\'s a mountain highway. Conditions that can affect your move:</p>
<ul>
<li><strong>Winter weather:</strong> Snow, ice, and reduced visibility can slow travel time. Professional movers carry chains and adjust schedules for road conditions</li>
<li><strong>Construction season:</strong> Summer highway construction between Canmore and Banff can add delays</li>
<li><strong>Park gate:</strong> Entering Banff National Park requires a Parks Canada pass. Your movers should have a commercial access arrangement — confirm this when booking</li>
</ul>

<h3>Access at Your Banff Property</h3>
<p>Banff properties present unique access challenges compared to Calgary:</p>
<ul>
<li><strong>Older buildings:</strong> Many Banff apartments and staff housing lack elevators and have narrow stairwells</li>
<li><strong>Parking limitations:</strong> Downtown Banff has limited truck parking. Your movers may need to carry items further from the truck to your door</li>
<li><strong>Staff housing:</strong> Resort staff accommodations often have tight hallways and small rooms, requiring more careful furniture maneuvering</li>
<li><strong>Heritage properties:</strong> Some Banff buildings have heritage restrictions on what can be moved through certain entrances</li>
</ul>

<h3>Seasonal Pricing</h3>
<p>Moving demand in Banff follows a different pattern than Calgary:</p>
<ul>
<li><strong>Highest demand:</strong> September-October (seasonal staff changeover for ski season) and April-May (summer season staffing)</li>
<li><strong>Most affordable:</strong> Mid-winter (January-February) and mid-summer (July) when staff are settled</li>
<li><strong>Holiday premium:</strong> Moves during the Christmas/New Year period may carry a surcharge due to highway traffic and limited availability</li>
</ul>

<h2>What\'s Included in a Calgary to Banff Move</h2>
<ul>
<li>Professional moving crew (2-3 movers depending on home size)</li>
<li>Moving truck with all fuel costs</li>
<li>Furniture blankets, dollies, and straps</li>
<li>Disassembly and reassembly of standard furniture (beds, tables)</li>
<li>Basic liability coverage</li>
<li>Floor and door frame protection</li>
</ul>

<h2>How to Save on Your Calgary to Banff Move</h2>
<ul>
<li><strong>Declutter before you move:</strong> Banff housing is smaller than Calgary homes. Moving fewer items means a smaller truck and faster move. Sell or donate what you won\'t need</li>
<li><strong>Move mid-week:</strong> Tuesday through Thursday rates are often lower than weekend moves</li>
<li><strong>Avoid month-end:</strong> The first and last few days of each month are the busiest for movers. Mid-month moves have more availability and often better pricing</li>
<li><strong>Pack yourself:</strong> Self-packing saves the cost of professional packing services. Use free boxes from Calgary liquor stores and grocery stores</li>
<li><strong>Combine with others:</strong> If you know someone else moving to Banff around the same time, a shared truck can reduce costs for both parties</li>
</ul>

<h2>DIY vs. Professional Movers: Is It Worth It?</h2>
<p>Renting a truck and doing it yourself might seem cheaper, but consider the full picture:</p>
<ul>
<li><strong>Truck rental:</strong> $100-$200 for the truck, plus $40-$60 in fuel, plus insurance ($30-$50), plus kilometres — total often $250-$400</li>
<li><strong>Your time:</strong> Loading, driving a mountain highway in a large truck, and unloading takes a full day minimum</li>
<li><strong>Risk:</strong> Mountain highway driving in a loaded rental truck — especially in winter — adds genuine risk. No damage protection for your belongings</li>
<li><strong>Help:</strong> You\'ll still need friends to help load and unload. Pizza and beer for four friends isn\'t free</li>
</ul>
<p>For studio and small one-bedroom moves, DIY can save money. For anything larger, professional <a href="/services/long-distance-moving">long-distance movers</a> offer better value when you account for time, risk, and effort.</p>

<h2>Ready to Get a Quote?</h2>
<p>Every Calgary to Banff move is different. <a href="/get-a-quote">Request a free quote</a> and we\'ll provide an accurate flat-rate price based on your specific move details — home size, access conditions, moving date, and any specialty items.</p>',
            ],
        ];

        return $bodies[$slug] ?? [];
    }
}
