<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CompanyServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company_services')->insert([

            // 1. Bike Transportation
            [
                'name' => 'Bike Transportation',
                'slug' => Str::slug('Bike Transportation'),
                'meta_title' => 'Reliable Bike Transport Services | Safe, Fast & Affordable',
                'meta_description' => 'Need to transport your motorcycle safely? We offer secure, fast, and affordable motorcycle shipping services across the country. Get a free quote today!',
                'details' => '<h1 class="" data-start="188" data-end="218">Bike Transport Service</h1>
                                <p class="" data-start="220" data-end="523">Looking for a&nbsp;<strong data-start="234" data-end="301">safe, reliable, and affordable way to transport your motorcycle</strong>?<br data-start="302" data-end="305">Whether you\'re&nbsp;<strong data-start="320" data-end="334">relocating</strong>,&nbsp;<strong data-start="336" data-end="346">buying</strong>,&nbsp;<strong data-start="348" data-end="359">selling</strong>, or attending a&nbsp;<strong data-start="376" data-end="396">motorcycle event</strong>, our&nbsp;<strong data-start="402" data-end="446">professional motorcycle shipping service</strong>&nbsp;ensures your bike reaches its destination&nbsp;<strong data-start="489" data-end="522">safely, securely, and on time</strong>.</p>
                                <p class="" data-start="525" data-end="695">We specialize in&nbsp;<strong data-start="542" data-end="566">motorcycle transport</strong>,&nbsp;<strong data-start="568" data-end="591">motorcycle shipping</strong>, and&nbsp;<strong data-start="597" data-end="619">motorbike delivery</strong>&nbsp;across cities, states, and nationwide &mdash; with the utmost care and precision.</p>
                                <hr class="" data-start="697" data-end="700">
                                <h2 class="" data-start="702" data-end="750">Why Choose Our Motorcycle Transport Services?</h2>
                                <h3 class="" data-start="752" data-end="805">1. Enclosed and Open Motorcycle Transport Options</h3>
                                <p class="" data-start="806" data-end="872">We offer flexible transport choices to suit your needs and budget:</p>
                                <ul data-start="873" data-end="1145">
                                <li class="" data-start="873" data-end="1025">
                                <p class="" data-start="875" data-end="1025"><strong data-start="875" data-end="907">Enclosed Motorcycle Shipping</strong>: Provides maximum protection from weather, dust, and road debris. Perfect for luxury, vintage, or custom motorcycles.</p>
                                </li>
                                <li class="" data-start="1026" data-end="1145">
                                <p class="" data-start="1028" data-end="1145"><strong data-start="1028" data-end="1057">Open Motorcycle Transport</strong>: A secure and budget-friendly option for standard motorcycles and short-distance moves.</p>
                                </li>
                                </ul>
                                <p class="" data-start="1147" data-end="1249">Whether you need&nbsp;<strong data-start="1164" data-end="1197">enclosed motorcycle transport</strong>&nbsp;or a more economical solution, we have you covered.</p>
                                <h3 class="" data-start="1251" data-end="1297">2. Nationwide Motorcycle Shipping Coverage</h3>
                                <p class="" data-start="1298" data-end="1484">Our service extends across the&nbsp;<strong data-start="1329" data-end="1353">entire United States</strong>, offering&nbsp;<strong data-start="1364" data-end="1402">coast-to-coast motorcycle shipping</strong>&nbsp;and local deliveries.<br data-start="1424" data-end="1427">No matter the distance, your motorcycle is in good hands.</p>
                                <h3 class="" data-start="1486" data-end="1532">3. Expert Handling by Professional Drivers</h3>
                                <p class="" data-start="1533" data-end="1754">Our team of experienced drivers and handlers are experts in&nbsp;<strong data-start="1593" data-end="1622">motorcycle transportation</strong>.<br data-start="1623" data-end="1626">We use specialized loading ramps, soft straps, and secure tie-down systems to ensure your bike is transported without a scratch.</p>
                                <h3 class="" data-start="1756" data-end="1801">4. Real-Time Motorcycle Shipping Tracking</h3>
                                <p class="" data-start="1802" data-end="1985">Stay informed at every step with our&nbsp;<strong data-start="1839" data-end="1868">real-time tracking system</strong>.<br data-start="1869" data-end="1872">Monitor the status and exact location of your motorcycle throughout the shipping journey for total peace of mind.</p>
                                <h3 class="" data-start="1987" data-end="2046">5. Affordable and Transparent Motorcycle Shipping Rates</h3>
                                <p class="" data-start="2047" data-end="2186">We offer&nbsp;<strong data-start="2056" data-end="2079">competitive pricing</strong>&nbsp;without hidden costs.<br data-start="2101" data-end="2104">Get a&nbsp;<strong data-start="2110" data-end="2133">free, instant quote</strong>&nbsp;today and enjoy transparent rates with no surprises.</p>
                                <h3 class="" data-start="2188" data-end="2235">6. Insurance Protection for Your Motorcycle</h3>
                                <p class="" data-start="2236" data-end="2358">Every shipment is&nbsp;<strong data-start="2254" data-end="2271">fully insured</strong>, giving you complete protection and peace of mind while your motorcycle is in transit.</p>
                                <hr class="" data-start="2360" data-end="2363">
                                <h2 class="" data-start="2365" data-end="2401">Types of Motorcycles We Transport</h2>
                                <p class="" data-start="2403" data-end="2465">We specialize in shipping all types of motorcycles, including:</p>
                                <ul data-start="2467" data-end="2676">
                                <li class="" data-start="2467" data-end="2495">
                                <p class="" data-start="2469" data-end="2495"><strong data-start="2469" data-end="2493">Sport Bikes Shipping</strong></p>
                                </li>
                                <li class="" data-start="2496" data-end="2533">
                                <p class="" data-start="2498" data-end="2533"><strong data-start="2498" data-end="2531">Cruiser Motorcycles Transport</strong></p>
                                </li>
                                <li class="" data-start="2534" data-end="2564">
                                <p class="" data-start="2536" data-end="2564"><strong data-start="2536" data-end="2562">Touring Bikes Delivery</strong></p>
                                </li>
                                <li class="" data-start="2565" data-end="2593">
                                <p class="" data-start="2567" data-end="2593"><strong data-start="2567" data-end="2591">Dirt Bikes Transport</strong></p>
                                </li>
                                <li class="" data-start="2594" data-end="2641">
                                <p class="" data-start="2596" data-end="2641"><strong data-start="2596" data-end="2639">Vintage and Custom Motorcycles Shipping</strong></p>
                                </li>
                                <li class="" data-start="2642" data-end="2676">
                                <p class="" data-start="2644" data-end="2676"><strong data-start="2644" data-end="2676">Scooters and Mopeds Delivery</strong></p>
                                </li>
                                </ul>
                                <p class="" data-start="2678" data-end="2799">From brand-new superbikes to classic antiques, we have the equipment and experience to handle them all with extreme care.</p>
                                <hr class="" data-start="2801" data-end="2804">
                                <h2 class="" data-start="2806" data-end="2851">How Our Motorcycle Transport Service Works</h2>
                                <h3 class="" data-start="2853" data-end="2900">1. Request a Free Motorcycle Shipping Quote</h3>
                                <p class="" data-start="2901" data-end="3018">Fill out our simple online form or call us to receive a&nbsp;<strong data-start="2957" data-end="2986">free, no-obligation quote</strong>&nbsp;based on your shipping details.</p>
                                <h3 class="" data-start="3020" data-end="3053">2. Schedule Motorcycle Pickup</h3>
                                <p class="" data-start="3054" data-end="3205">Once you book, we\'ll schedule a&nbsp;<strong data-start="3086" data-end="3123">pickup at your preferred location</strong>.<br data-start="3124" data-end="3127">Our trained team will inspect and securely load your motorcycle for transport.</p>
                                <h3 class="" data-start="3207" data-end="3250">3. Safe and Secure Motorcycle Transport</h3>
                                <p class="" data-start="3251" data-end="3418">Your motorcycle is transported with&nbsp;<strong data-start="3287" data-end="3317">state-of-the-art equipment</strong>, whether you choose open or enclosed shipping.<br data-start="3364" data-end="3367">Enjoy&nbsp;<strong data-start="3373" data-end="3394">real-time updates</strong>&nbsp;throughout the journey.</p>
                                <h3 class="" data-start="3420" data-end="3453">4. Prompt Motorcycle Delivery</h3>
                                <p class="" data-start="3454" data-end="3620">We deliver your motorcycle&nbsp;<strong data-start="3481" data-end="3492">on time</strong>&nbsp;at the destination you choose.<br data-start="3523" data-end="3526">Final inspection ensures your bike arrives in&nbsp;<strong data-start="3572" data-end="3593">perfect condition</strong>, just as it was picked up.</p>
                                <hr class="" data-start="3622" data-end="3625">
                                <h2 class="" data-start="3627" data-end="3670">Trust the Experts in Motorcycle Shipping</h2>
                                <p class="" data-start="3672" data-end="3896">Choosing the right&nbsp;<strong data-start="3691" data-end="3723">motorcycle transport company</strong>&nbsp;is critical.<br data-start="3736" data-end="3739">With years of experience, top-rated customer service, and hundreds of satisfied riders, we are your trusted partner for&nbsp;<strong data-start="3859" data-end="3895">motorcycle shipping and delivery</strong>.</p>
                                <p class="" data-start="3898" data-end="4014"><strong data-start="3898" data-end="3927">Get your free quote today</strong> and experience the safest, most reliable motorcycle transport service in the industry!</p>',
                'meta_image' => 'uploads/company/services/bike-1.jpg',
                'main_image' => 'uploads/company/services/bike1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // 2. Vehicle Tracking
            [
                'name' => 'Vehicle Tracking',
                'slug' => Str::slug('Vehicle Tracking'),
                'meta_title' => 'Real-Time Vehicle Tracking | Monitor Your Shipment 24/7',
                'meta_description' => 'Stay in the loop with our advanced vehicle tracking system. Know exactly where your car is, anytime.',
                'details' => '<h1 class="" data-start="186" data-end="250">Real-Time Vehicle Tracking Services | Stay Informed Every Mile</h1>
                                <p class="" data-start="252" data-end="563">With our&nbsp;<strong data-start="261" data-end="297">advanced vehicle tracking system</strong>, you&rsquo;ll know exactly where your car is &mdash; from pickup to final delivery.<br data-start="369" data-end="372">We offer&nbsp;<strong data-start="381" data-end="402">live GPS tracking</strong>,&nbsp;<strong data-start="404" data-end="431">real-time notifications</strong>, and&nbsp;<strong data-start="437" data-end="467">dedicated customer support</strong>, so you can enjoy complete transparency and&nbsp;<strong data-start="512" data-end="529">peace of mind</strong>&nbsp;throughout the transport journey.</p>
                                <p class="" data-start="565" data-end="646">Because knowing your vehicle&rsquo;s location shouldn&rsquo;t be a mystery &mdash; it&rsquo;s your right.</p>
                                <hr class="" data-start="648" data-end="651">
                                <h2 class="" data-start="653" data-end="696">Why Choose Our Vehicle Tracking Service?</h2>
                                <h3 class="" data-start="698" data-end="737">1. Live GPS Tracking During Transit</h3>
                                <p class="" data-start="738" data-end="895">Stay connected with&nbsp;<strong data-start="758" data-end="783">real-time GPS updates</strong>.<br data-start="784" data-end="787">Monitor your vehicle\'s exact location at every stage of its journey through your phone, tablet, or computer.</p>
                                <h3 class="" data-start="897" data-end="938">2. ETA Notifications via SMS or Email</h3>
                                <p class="" data-start="939" data-end="1107">Receive&nbsp;<strong data-start="947" data-end="974">automated notifications</strong>&nbsp;with&nbsp;<strong data-start="980" data-end="1015">estimated time of arrival (ETA)</strong>&nbsp;updates.<br data-start="1024" data-end="1027">Choose to get alerts via&nbsp;<strong data-start="1052" data-end="1075">SMS, email, or both</strong>&nbsp;&mdash; whichever works best for you.</p>
                                <h3 class="" data-start="1109" data-end="1147">3. Dedicated Customer Support Team</h3>
                                <p class="" data-start="1148" data-end="1301">Have questions or need updates?<br data-start="1179" data-end="1182">Our&nbsp;<strong data-start="1186" data-end="1202">support team</strong>&nbsp;is always ready to assist you with personalized tracking updates and transport status information.</p>
                                <hr class="" data-start="1303" data-end="1306">
                                <h2 class="" data-start="1308" data-end="1358">Key Features of Our Vehicle Tracking Technology</h2>
                                <ul data-start="1360" data-end="1622">
                                <li class="" data-start="1360" data-end="1395">
                                <p class="" data-start="1362" data-end="1395">Real-time GPS location tracking</p>
                                </li>
                                <li class="" data-start="1396" data-end="1431">
                                <p class="" data-start="1398" data-end="1431">Detailed trip history available</p>
                                </li>
                                <li class="" data-start="1432" data-end="1471">
                                <p class="" data-start="1434" data-end="1471">Instant pickup and delivery updates</p>
                                </li>
                                <li class="" data-start="1472" data-end="1536">
                                <p class="" data-start="1474" data-end="1536">Customizable alert settings (text, email, app notifications)</p>
                                </li>
                                <li class="" data-start="1537" data-end="1575">
                                <p class="" data-start="1539" data-end="1575">Secure and private tracking system</p>
                                </li>
                                <li class="" data-start="1576" data-end="1622">
                                <p class="" data-start="1578" data-end="1622">Direct access to support for live assistance</p>
                                </li>
                                </ul>
                                <hr class="" data-start="1624" data-end="1627">
                                <h2 class="" data-start="1629" data-end="1672">Benefits of Our Vehicle Tracking Service</h2>
                                <ul data-start="1674" data-end="1923">
                                <li class="" data-start="1674" data-end="1716">
                                <p class="" data-start="1676" data-end="1716"><strong data-start="1676" data-end="1697">Full transparency</strong>&nbsp;during transport</p>
                                </li>
                                <li class="" data-start="1717" data-end="1755">
                                <p class="" data-start="1719" data-end="1755"><strong data-start="1719" data-end="1737">Reduced stress</strong>&nbsp;and uncertainty</p>
                                </li>
                                <li class="" data-start="1756" data-end="1804">
                                <p class="" data-start="1758" data-end="1804"><strong data-start="1758" data-end="1782">Timely communication</strong>&nbsp;for better planning</p>
                                </li>
                                <li class="" data-start="1805" data-end="1858">
                                <p class="" data-start="1807" data-end="1858"><strong data-start="1807" data-end="1841">Enhanced trust and reliability</strong>&nbsp;in our service</p>
                                </li>
                                <li class="" data-start="1859" data-end="1923">
                                <p class="" data-start="1861" data-end="1923"><strong data-start="1861" data-end="1878">Peace of mind</strong>&nbsp;knowing your vehicle is safe and on schedule</p>
                                </li>
                                </ul>
                                <hr class="" data-start="1925" data-end="1928">
                                <h2 class="" data-start="1930" data-end="1963">How Our Vehicle Tracking Works</h2>
                                <ol data-start="1965" data-end="2413">
                                <li class="" data-start="1965" data-end="2086">
                                <p class="" data-start="1968" data-end="2086"><strong data-start="1968" data-end="2013">Book Your Transport with Tracking Enabled</strong><br data-start="2013" data-end="2016">Vehicle tracking is included in your service at no additional cost.</p>
                                </li>
                                <li class="" data-start="2088" data-end="2202">
                                <p class="" data-start="2091" data-end="2202"><strong data-start="2091" data-end="2128">Receive Your Tracking Information</strong><br data-start="2128" data-end="2131">Get a tracking link and notification setup options via SMS or email.</p>
                                </li>
                                <li class="" data-start="2204" data-end="2322">
                                <p class="" data-start="2207" data-end="2322"><strong data-start="2207" data-end="2240">Monitor Progress in Real Time</strong><br data-start="2240" data-end="2243">Stay informed with live updates and ETAs until your car is safely delivered.</p>
                                </li>
                                <li class="" data-start="2324" data-end="2413">
                                <p class="" data-start="2327" data-end="2413"><strong data-start="2327" data-end="2350">Get Support Anytime</strong><br data-start="2350" data-end="2353">Need assistance? Our team is just a call or message away.</p>
                                </li>
                                </ol>
                                <hr class="" data-start="2415" data-end="2418">
                                <h2 class="" data-start="2420" data-end="2456">Always Know Where Your Vehicle Is</h2>
                                <p class="" data-start="2458" data-end="2664">Your vehicle is valuable &mdash; and so is your peace of mind.<br data-start="2514" data-end="2517">With our&nbsp;<strong data-start="2526" data-end="2564">real-time vehicle tracking service</strong>, you&rsquo;ll always be in control, always informed, and always confident that your car is in good hands.</p>
                                <p class="" data-start="2666" data-end="2771"><strong data-start="2666" data-end="2686">Contact us today</strong> to schedule your transport and experience stress-free shipping with full visibility!</p>',
                'meta_image' => 'uploads/company/services/service2.jpg',
                'main_image' => 'uploads/company/services/service-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // 3. Real Time GPS
            [
                'name' => 'Real Time GPS',
                'slug' => Str::slug('Real Time GPS'),
                'meta_title' => 'Real Time GPS Tracking | Accurate Location Updates Anytime',
                'meta_description' => 'Track your vehicle with precision using our real-time GPS tracking system. Stay updated with location, route, and ETA notifications.',
                'details' => '<h1 class="">Real Time GPS Vehicle Tracking | Precision at Your Fingertips</h1>
                                <p class="">Our&nbsp;<strong>Real Time GPS tracking</strong>&nbsp;lets you monitor your vehicle\'s exact location, speed, and movement history anytime, anywhere.<br>Whether you\'re shipping a car across states or managing a fleet, our GPS solution gives you unparalleled visibility and peace of mind.</p>
                                <hr class="">
                                <h2 class="">Top Features of Our Real Time GPS Solution</h2>
                                <h3 class="">1. Pinpoint Location Accuracy</h3>
                                <p class="">Our GPS system provides&nbsp;<strong>real-time updates</strong>&nbsp;with minimal delay. Know the exact position of your vehicle at every moment.</p>
                                <h3 class="">2. Route History & Playback</h3>
                                <p class="">Review detailed route history to understand past trips, driver behavior, and delivery performance.</p>
                                <h3 class="">3. Speed & Movement Alerts</h3>
                                <p class="">Get instant alerts for speed violations, sudden stops, or unauthorized movements &mdash; all via SMS or email.</p>
                                <hr class="">
                                <h2 class="">Benefits of Real Time GPS Tracking</h2>
                                <ul>
                                    <li><strong>Improve delivery timelines</strong> with proactive route monitoring</li>
                                    <li><strong>Reduce risks</strong> through theft prevention and vehicle misuse detection</li>
                                    <li><strong>Better planning</strong> thanks to live ETA and trip data</li>
                                    <li><strong>24/7 location access</strong> from any internet-connected device</li>
                                    <li><strong>Increased customer satisfaction</strong> with transparent updates</li>
                                </ul>
                                <hr class="">
                                <h2 class="">How It Works</h2>
                                <ol>
                                    <li><strong>Activate GPS Tracking</strong><br>Our system is enabled once your transport is confirmed.</li>
                                    <li><strong>Receive Your Tracking Link</strong><br>We send you a secure link with access to your live GPS dashboard.</li>
                                    <li><strong>Monitor & Receive Alerts</strong><br>Track every stop, turn, and update on your vehicle’s journey in real time.</li>
                                </ol>
                                <hr class="">
                                <h2 class="">Take Control of Every Mile</h2>
                                <p class="">Don’t leave your vehicle’s journey to guesswork.<br><strong>With our real-time GPS system</strong>, you\'re always in the know — informed, empowered, and confident in every shipment.</p>
                                <p class=""><strong>Contact us now</strong> to experience the future of vehicle tracking technology!</p>',
                'meta_image' => 'uploads/company/services/gps1.jpg',
                'main_image' => 'uploads/company/services/gps1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // // 1. Car Transportation
            // [
            //     'name' => 'Car Transportation',
            //     'slug' => Str::slug('Car Transportation'),
            //     'meta_title' => 'Car Transportation Services | Fast, Safe, and Reliable Auto Shipping',
            //     'meta_description' => 'Professional car transportation services tailored to your needs. Reliable, fast, and fully insured door-to-door vehicle shipping.',
            //     'details' => '
            //     <h2>Car Transportation Services</h2>
            //     <p>We provide expert <strong>car transportation services</strong> for individuals and businesses nationwide. Whether you\'re relocating or selling a vehicle, our network ensures safe, efficient, and affordable transport from pickup to delivery.</p>

            //     <h3>Why Choose Us?</h3>
            //     <ul>
            //         <li>Door-to-door pickup and delivery</li>
            //         <li>Experienced drivers and licensed carriers</li>
            //         <li>Full vehicle insurance coverage</li>
            //         <li>Transparent pricing with no hidden fees</li>
            //     </ul>

            //     <h3>How It Works</h3>
            //     <ol>
            //         <li>Request a free quote</li>
            //         <li>Schedule your transport</li>
            //         <li>Your car is picked up and shipped</li>
            //         <li>Delivered at your doorstep or preferred location</li>
            //     </ol>

            //     <p>Get your car where it needs to be, without the stress.</p>
            //     ',
            //     'meta_image' => 'uploads/company/services/service1.jpg',
            //     'main_image' => 'uploads/company/services/service-1.jpg',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

            // // 2. Vehicle Storage
            // [
            //     'name' => 'Vehicle Storage',
            //     'slug' => Str::slug('Vehicle Storage'),
            //     'meta_title' => 'Secure Vehicle Storage Solutions | Short & Long-Term',
            //     'meta_description' => 'Keep your vehicle safe with our climate-controlled, fully secure vehicle storage facilities.',
            //     'details' => '
            //     <h2>Vehicle Storage</h2>
            //     <p>Need a place to store your car while you relocate or travel? Our secure <strong>vehicle storage services</strong> are designed for short-term and long-term protection.</p>

            //     <h3>Storage Features</h3>
            //     <ul>
            //         <li>24/7 surveillance & gated access</li>
            //         <li>Climate-controlled indoor units</li>
            //         <li>Outdoor storage for larger vehicles</li>
            //         <li>Affordable monthly plans</li>
            //     </ul>

            //     <p>Trust us to safeguard your investment, whether it’s for a few days or several months.</p>
            //     ',
            //     'meta_image' => 'uploads/company/services/service2.jpg',
            //     'main_image' => 'uploads/company/services/service-2.jpg',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

            // // 3. Logistics
            // [
            //     'name' => 'Logistics',
            //     'slug' => Str::slug('Logistics'),
            //     'meta_title' => 'Automotive Logistics Services | End-to-End Vehicle Transport Solutions',
            //     'meta_description' => 'Streamline your vehicle shipping with our full-scale logistics solutions tailored for auto dealerships, auctions, and individuals.',
            //     'details' => '
            //     <h2>Logistics</h2>
            //     <p>Our <strong>logistics services</strong> provide complete end-to-end vehicle transportation and fleet management solutions. From pickup scheduling to final delivery and tracking, we take care of it all.</p>

            //     <h3>What We Handle</h3>
            //     <ul>
            //         <li>Nationwide & international shipping coordination</li>
            //         <li>Fleet transport for dealerships</li>
            //         <li>Specialized logistics for auctions & events</li>
            //         <li>Real-time tracking & updates</li>
            //     </ul>

            //     <p>Partner with us to simplify your logistics and focus on what matters most — your business.</p>
            //     ',
            //     'meta_image' => 'uploads/company/services/service3.jpg',
            //     'main_image' => 'uploads/company/services/service-3.jpg',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

            // // 4. Express Delivery
            // [
            //     'name' => 'Express Delivery',
            //     'slug' => Str::slug('Express Delivery'),
            //     'meta_title' => 'Express Car Delivery | Fast & Time-Sensitive Auto Transport',
            //     'meta_description' => 'Need your vehicle delivered ASAP? Choose our express auto delivery service for guaranteed fast shipping.',
            //     'details' => '
            //     <h2>Express Delivery</h2>
            //     <p>When time is critical, our <strong>express car delivery service</strong> ensures your vehicle is prioritized for the fastest possible transport. Ideal for emergency moves, short deadlines, and premium service needs.</p>

            //     <h3>Service Highlights</h3>
            //     <ul>
            //         <li>Expedited scheduling and pickup</li>
            //         <li>Guaranteed delivery windows</li>
            //         <li>Priority service with dedicated carriers</li>
            //     </ul>

            //     <p>We deliver when others can’t. Ask about availability and rush pricing.</p>
            //     ',
            //     'meta_image' => 'uploads/company/services/service4.jpg',
            //     'main_image' => 'uploads/company/services/service-4.jpg',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

            // // 5. Enclosed Transport
            // [
            //     'name' => 'Enclosed Transport',
            //     'slug' => Str::slug('Enclosed Transport'),
            //     'meta_title' => 'Enclosed Vehicle Transport | Ultimate Protection for Luxury Cars',
            //     'meta_description' => 'Protect your high-value vehicle from the elements with our fully enclosed auto transport trailers.',
            //     'details' => '
            //     <h2>Enclosed Transport</h2>
            //     <p>Our <strong>enclosed vehicle transport</strong> is the ideal choice for luxury, exotic, and collectible vehicles. Your car is transported in a covered trailer, protected from weather, dust, and road debris.</p>

            //     <h3>Recommended For:</h3>
            //     <ul>
            //         <li>Classic cars</li>
            //         <li>Luxury & supercars</li>
            //         <li>Show cars</li>
            //     </ul>

            //     <p>White-glove service, guaranteed peace of mind.</p>
            //     ',
            //     'meta_image' => 'uploads/company/services/service5.jpg',
            //     'main_image' => 'uploads/company/services/service-5.jpg',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

            // // 6. Vehicle Tracking
            // [
            //     'name' => 'Vehicle Tracking',
            //     'slug' => Str::slug('Vehicle Tracking'),
            //     'meta_title' => 'Real-Time Vehicle Tracking | Monitor Your Shipment 24/7',
            //     'meta_description' => 'Stay in the loop with our advanced vehicle tracking system. Know exactly where your car is, anytime.',
            //     'details' => '
            //     <h2>Vehicle Tracking</h2>
            //     <p>Track your car’s location in real-time using our advanced <strong>vehicle tracking technology</strong>. We offer full transparency so you never feel out of the loop.</p>

            //     <h3>Features</h3>
            //     <ul>
            //         <li>Live GPS tracking during transit</li>
            //         <li>ETA notifications via SMS or email</li>
            //         <li>Dedicated customer support team</li>
            //     </ul>

            //     <p>Because your peace of mind matters to us.</p>
            //     ',
            //     'meta_image' => 'uploads/company/services/service6.jpg',
            //     'main_image' => 'uploads/company/services/service-6.jpg',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],

        ]);
    }
}
