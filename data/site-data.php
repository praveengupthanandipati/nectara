<?php
/**
 * ============================================================
 *  SITE DATA – single source for all repeated content
 * ============================================================
 *  Edit text here and it updates on every page that uses it.
 *  Plain text only – special characters (&, ', <) are escaped
 *  automatically when printed, so write them normally.
 *
 *  Sections:
 *   1. Site / business details     8. Process steps
 *   2. Default SEO                 9. Stats
 *   3. Main navigation            10. Testimonials
 *   4. Services (dropdown,        11. FAQs
 *      cards, forms)              12. Blogs
 *   5. Products (mega menu,       13. Gallery
 *      cards, footer)             14. About checklist
 *   6. Hero slides
 *   7. Feature highlights
 * ============================================================
 */

return [

    /* ── 1. Site / business details ─────────────────────── */
    // Business contact details (hours are still placeholders – confirm before going live).
    'site' => [
        'name'        => 'Nectara Naturals',
        'tagline'     => 'Pure Milk, Pure Promise',
        'city'        => 'Hyderabad',
        'region'      => 'Telangana',
        'country'     => 'IN',
        'address'     => 'Mallampet, Hyderabad, Telangana',
        'phone'       => '+91 77999 71112',
        'phone_link'  => '+917799971112',
        'whatsapp'    => '917799971112',          // country code + number, no + or spaces
        'email'       => 'info@nectaranaturals.com',
        'logo'        => 'img/logo.svg',
        'favicon'     => 'img/fav.png',
        'site_url'    => 'https://www.nectaranaturals.com',   // enables canonical URLs
        'theme_color' => '#104F28',
        'map_embed'   => 'https://www.google.com/maps?q=Mallampet,Hyderabad,Telangana&output=embed',
        'hours'       => [
            ['days' => 'Delivery',        'time' => 'Every morning, 5:30 AM – 8:00 AM'],
            ['days' => 'WhatsApp support', 'time' => '7:00 AM – 9:00 PM'],
        ],
        'about_short' => 'Pure, fresh farm milk and milk products delivered to your doorstep every morning in Hyderabad. Purity, nutrition and service you can trust.',
        'socials'     => [
            ['label' => 'Instagram', 'icon' => 'bi-instagram', 'url' => '#'],
            ['label' => 'Facebook',  'icon' => 'bi-facebook',  'url' => '#'],
            ['label' => 'YouTube',   'icon' => 'bi-youtube',   'url' => '#'],
            ['label' => 'WhatsApp',  'icon' => 'bi-whatsapp',  'url' => 'whatsapp'],   // 'whatsapp' = auto link
        ],
    ],

    /* ── 2. Default SEO (pages add their own on top) ───── */
    'seo' => [
        'title_suffix' => 'Nectara Naturals, Hyderabad',
        'description'  => 'Nectara Naturals – pure, fresh farm milk delivered to your door every morning in Hyderabad. Curd, ghee, paneer, butter and sweets on order, with easy WhatsApp subscriptions.',
        'keywords'     => [
            'Nectara Naturals', 'fresh milk Hyderabad', 'farm fresh milk delivery',
            'milk home delivery Hyderabad', 'pure cow milk', 'milk subscription Hyderabad',
            'desi ghee Hyderabad', 'fresh paneer', 'milk products Hyderabad',
        ],
        'og_image'     => 'img/banner02.jpg',
        'locale'       => 'en_IN',
    ],

    /* ── 3. Main navigation ─────────────────────────────── */
    // 'menu' => 'services' shows the services dropdown,
    // 'menu' => 'products' shows the products mega menu.
    'nav' => [
        ['id' => 'home',     'label' => 'Home',     'url' => 'index.php'],
        ['id' => 'about',    'label' => 'About',    'url' => 'index.php#about'],
        ['id' => 'services', 'label' => 'Services', 'url' => 'index.php#services', 'menu' => 'services'],
        ['id' => 'products', 'label' => 'Products', 'url' => 'index.php#products', 'menu' => 'products'],
        ['id' => 'blogs',    'label' => 'Blogs',    'url' => 'index.php#blogs'],
        ['id' => 'faq',      'label' => "FAQ's",    'url' => 'index.php#faq'],
        ['id' => 'gallery',  'label' => 'Gallery',  'url' => 'index.php#gallery'],
        ['id' => 'contact',  'label' => 'Contact',  'url' => 'index.php#contact'],
    ],

    /* ── 4. Services ────────────────────────────────────── */
    // slug  → page file (slug.php) and data/services/slug.php
    // short → one line in the dropdown
    'services' => [
        [
            'slug'   => 'fresh-farm-milk-home-delivery',
            'title'  => 'Fresh Farm Milk Home Delivery',
            'icon'   => 'bi-truck',
            'image'  => 'img/banner05.jpg',
            'short'  => 'At your door every morning',
            'text'   => 'Pure farm milk delivered to your doorstep every morning in hygienic, eco-friendly bottles. Choose your quantity and schedule – change it any time on WhatsApp.',
            'points' => ['Daily morning delivery', 'Glass bottles, exchanged daily', 'Pause or change on WhatsApp', 'Flexible monthly subscription'],
        ],
        [
            'slug'   => 'sweets-on-order',
            'title'  => 'Sweets on the Order',
            'icon'   => 'bi-cake2',
            'image'  => 'img/banner03.jpg',
            'short'  => 'Pure milk sweets for every occasion',
            'text'   => 'Traditional milk sweets made fresh to order with our own milk, ghee and khova – for festivals, functions, gifting and celebrations.',
            'points' => ['Made fresh to order', 'Pure ghee & khova', 'Festival & function orders', 'Gift boxes available'],
        ],
    ],

    // Extra choices in enquiry form dropdowns (after the services)
    'enquiry_extra_options' => ['Milk Products Order', 'Bulk / Event Order', 'Other'],

    /* ── 5. Products ────────────────────────────────────── */
    // PLACEHOLDER range – change to the products you actually sell.
    // Each product card on the home page has id="product-{slug}".
    'products' => [
        ['slug' => 'a2-cow-milk',   'title' => 'A2 Cow Milk',        'icon' => 'bi-droplet',       'tag' => 'Daily',   'size' => '500 ml · 1 L',     'short' => 'Fresh every morning',       'text' => 'Fresh, creamy cow milk from healthy farm cows, delivered within hours of milking.'],
        ['slug' => 'buffalo-milk',  'title' => 'Buffalo Milk',       'icon' => 'bi-droplet-half',  'tag' => 'Daily',   'size' => '500 ml · 1 L',     'short' => 'Rich & thick',              'text' => 'Rich, thick buffalo milk – ideal for tea, coffee, curd and homemade sweets.'],
        ['slug' => 'fresh-curd',    'title' => 'Fresh Curd',         'icon' => 'bi-cup',           'tag' => '',        'size' => '400 g · 1 kg',     'short' => 'Thick, set the old way',    'text' => 'Thick, naturally set curd made from our own pure milk – no thickeners added.'],
        ['slug' => 'desi-ghee',     'title' => 'Pure Desi Ghee',     'icon' => 'bi-droplet-fill',  'tag' => 'Popular', 'size' => '250 ml · 500 ml',  'short' => 'Slow-cooked, golden',       'text' => 'Golden, aromatic ghee slow-cooked in small batches from fresh cream.'],
        ['slug' => 'fresh-paneer',  'title' => 'Fresh Paneer',       'icon' => 'bi-box2',          'tag' => '',        'size' => '200 g · 500 g',    'short' => 'Soft & made daily',         'text' => 'Soft, fresh paneer made daily from full-cream milk – perfect for curries and snacks.'],
        ['slug' => 'white-butter',  'title' => 'White Butter',       'icon' => 'bi-layers',        'tag' => '',        'size' => '200 g · 500 g',    'short' => 'Homestyle makkhan',         'text' => 'Unsalted homestyle white butter (makkhan), churned from fresh cream.'],
        ['slug' => 'buttermilk',    'title' => 'Buttermilk',         'icon' => 'bi-moisture',      'tag' => '',        'size' => '500 ml',           'short' => 'Cool, spiced majjiga',      'text' => 'Refreshing spiced buttermilk (majjiga) – light, cooling and great for digestion.'],
        ['slug' => 'sweet-lassi',   'title' => 'Sweet Lassi',        'icon' => 'bi-cup-straw',     'tag' => 'New',     'size' => '200 ml · 500 ml',  'short' => 'Thick & chilled',           'text' => 'Thick, chilled lassi made from fresh curd, lightly sweetened.'],
        ['slug' => 'fresh-cream',   'title' => 'Fresh Cream (Malai)', 'icon' => 'bi-cloud',        'tag' => '',        'size' => '200 g',            'short' => 'Rich malai',                'text' => 'Rich, thick malai collected from fresh milk – for desserts, gravies and sweets.'],
        ['slug' => 'khova',         'title' => 'Khova (Mawa)',       'icon' => 'bi-boxes',         'tag' => '',        'size' => '250 g · 500 g',    'short' => 'For sweets & desserts',     'text' => 'Pure milk khova, slow-reduced the traditional way – the base for perfect sweets.'],
    ],

    // Products shown in the footer list (by slug)
    'footer_products' => ['a2-cow-milk', 'buffalo-milk', 'fresh-curd', 'desi-ghee', 'fresh-paneer', 'white-butter'],

    /* ── 6. Home hero slides ────────────────────────────── */
    // position = which part of the photo stays visible on small screens
    'hero_slides' => [
        ['image' => 'img/banner02.jpg', 'alt' => 'Farmers milking a cow in a green field at sunrise',         'position' => '60% center', 'eyebrow' => 'Welcome to Nectara Naturals', 'title' => 'Pure Milk,',            'highlight' => 'Pure Promise',             'text' => 'The goodness of pure, fresh milk straight from the farm to your doorstep every morning.',                    'button' => 'Start My Subscription', 'link_label' => 'Our Products',     'link_url' => '#products'],
        ['image' => 'img/banner05.jpg', 'alt' => 'Fresh milk being poured into a glass for a child',          'position' => '65% center', 'eyebrow' => 'Fresh Every Morning',         'title' => 'Delivered Daily',       'highlight' => 'to Your Door',             'text' => 'Fresh milk in hygienic, eco-friendly bottles – exchanged daily and delivered before your day begins.',     'button' => 'Book Home Delivery',    'link_label' => 'How It Works',     'link_url' => 'fresh-farm-milk-home-delivery.php'],
        ['image' => 'img/banner01.jpg', 'alt' => 'Dairy expert checking a jug of fresh milk at the farm',     'position' => '70% center', 'eyebrow' => '100% Pure Milk',              'title' => 'No Adulteration,',      'highlight' => 'No Compromise',            'text' => 'Every batch is checked for purity and freshness, so your family gets only natural, nutritious milk.',       'button' => 'Book Daily Milk',             'link_label' => 'Why Nectara',      'link_url' => '#about'],
        ['image' => 'img/banner03.jpg', 'alt' => 'Milk sweets topped with pistachio and saffron in clay pots', 'position' => '40% center', 'eyebrow' => 'Sweets on the Order',         'title' => 'Pure Milk Sweets',      'highlight' => 'for Every Celebration',    'text' => 'Traditional sweets made fresh to order with our own milk, ghee and khova.',                                  'button' => 'Order Sweets',          'link_label' => 'Sweets on Order',  'link_url' => 'sweets-on-order.php'],
        ['image' => 'img/banner04.jpg', 'alt' => 'Farm vet checking on healthy cows in the shed',             'position' => '45% center', 'eyebrow' => 'Healthy Cows, Healthy Milk',  'title' => 'Cared for',             'highlight' => 'at Our Farm',              'text' => 'Well-fed, well-cared-for cows with regular health checks – the first step to better milk.',               'button' => 'Enquire Now',           'link_label' => 'About Us',         'link_url' => '#about'],
    ],

    /* ── 7. Feature highlights (strip under the hero) ───── */
    'features' => [
        ['icon' => 'bi-shield-check',   'title' => '100% Pure Milk',      'text' => 'No adulteration, no compromise'],
        ['icon' => 'bi-sunrise',        'title' => 'Fresh Every Morning', 'text' => 'Delivered daily to your door'],
        ['icon' => 'bi-recycle',        'title' => 'Eco-Friendly Bottles', 'text' => 'Hygienic bottles, exchanged daily'],
        ['icon' => 'bi-whatsapp',       'title' => 'Easy WhatsApp Service', 'text' => 'Extra, less or pause – just message'],
    ],

    /* ── 8. Process steps ───────────────────────────────── */
    'process' => [
        ['icon' => 'bi-whatsapp',      'title' => 'Message Us',         'text' => 'Send us a WhatsApp with your address and how much milk you need.'],
        ['icon' => 'bi-calendar-week', 'title' => 'Pick Your Plan',     'text' => 'Choose your quantity and schedule – daily, alternate days or custom.'],
        ['icon' => 'bi-truck',         'title' => 'Morning Delivery',   'text' => 'Fresh milk in clean glass bottles at your door every morning.'],
        ['icon' => 'bi-arrow-repeat',  'title' => 'Change Any Time',    'text' => 'Extra milk, less milk or a pause? Just message us – no hassle.'],
    ],

    /* ── 9. Stats ───────────────────────────────────────── */
    'stats' => [
        ['value' => '100%', 'label' => 'Pure Milk'],
        ['value' => '10+',  'label' => 'Milk Products'],
        ['value' => 'Daily', 'label' => 'Morning Delivery'],
    ],

    /* ── 10. Testimonials ───────────────────────────────── */
    // PLACEHOLDER: replace with real customer reviews before going live.
    'testimonials' => [
        ['name' => 'Sravani', 'service' => 'Daily Milk Subscriber', 'rating' => 5, 'text' => 'The milk tastes just like what we had at our grandparents\' village. It arrives before 7 every morning and the bottles are always spotless.'],
        ['name' => 'Ramesh',  'service' => 'Ghee & Paneer',         'rating' => 5, 'text' => 'Their ghee has that real homemade aroma, and the paneer is soft and fresh. We have stopped buying packet products completely.'],
        ['name' => 'Lakshmi', 'service' => 'Sweets on Order',       'rating' => 5, 'text' => 'Ordered sweets for my daughter\'s function – everyone loved them. Fresh, not too sweet, and delivered right on time.'],
    ],

    /* ── 11. FAQs ───────────────────────────────────────── */
    'faqs' => [
        ['q' => 'What time is the milk delivered?',                   'a' => 'We deliver every morning between 5:30 AM and 8:00 AM, so fresh milk is at your door before your day begins.'],
        ['q' => 'Which areas do you deliver to?',                     'a' => 'We currently serve Hyderabad. Message us on WhatsApp with your location and we will confirm if delivery is available in your area.'],
        ['q' => 'How do the eco-friendly bottles work?',              'a' => 'Milk is delivered in hygienic, reusable bottles. Simply keep the rinsed empty bottles outside and we exchange them with fresh ones during the next delivery.'],
        ['q' => 'Can I change my quantity or pause delivery?',        'a' => 'Yes. Need extra milk, less milk or going out of town? Just send us a WhatsApp message the evening before and we will update your delivery.'],
        ['q' => 'How do subscriptions and payments work?',            'a' => 'Choose your quantity and schedule and we deliver daily. Payment is simple – we share a monthly bill based on what was actually delivered.'],
        ['q' => 'Do you sell milk products other than milk?',         'a' => 'Yes – curd, ghee, paneer, butter, buttermilk, khova and more. You can add them to your daily delivery or order sweets for special occasions.'],
    ],

    /* ── 12. Blogs ──────────────────────────────────────── */
    'blogs' => [
        ['url' => '#', 'image' => 'img/banner05.jpg', 'alt' => 'Child drinking a glass of fresh milk',            'tag' => 'Nutrition', 'date' => '2026-11-10', 'title' => 'Why Fresh Farm Milk Is Better for Growing Kids',               'excerpt' => 'Protein, calcium and natural goodness – how a daily glass of fresh milk supports healthy growth.'],
        ['url' => '#', 'image' => 'img/banner01.jpg', 'alt' => 'Expert checking the purity of fresh milk',        'tag' => 'Purity',    'date' => '2026-10-28', 'title' => 'Simple Home Tests to Check If Your Milk Is Pure',              'excerpt' => 'Easy checks you can do in your kitchen to spot added water, starch and other adulterants.'],
        ['url' => '#', 'image' => 'img/banner03.jpg', 'alt' => 'Milk sweets with pistachio in clay pots',        'tag' => 'Recipes',   'date' => '2026-10-15', 'title' => 'Festive Milk Sweets You Can Make with Fresh Khova',           'excerpt' => 'From peda to kalakand – classic sweets that taste best with pure milk and homemade khova.'],
    ],

    /* ── 13. Gallery ────────────────────────────────────── */
    // The first image is shown large on the home page.
    'gallery' => [
        ['image' => 'img/banner02.jpg', 'caption' => 'Fresh milking at sunrise'],
        ['image' => 'img/banner01.jpg', 'caption' => 'Every batch checked for purity'],
        ['image' => 'img/banner04.jpg', 'caption' => 'Regular health checks for our cows'],
        ['image' => 'img/banner03.jpg', 'caption' => 'Milk sweets made to order'],
        ['image' => 'img/banner05.jpg', 'caption' => 'Goodness for the whole family'],
    ],

    /* ── 14. About checklist ────────────────────────────── */
    'about_checklist' => [
        '100% pure – no adulteration',
        'Fresh every morning',
        'Eco-friendly bottles, exchanged daily',
        'Curd, ghee, paneer & more',
        'Easy WhatsApp service',
        'Flexible subscriptions',
    ],
];
