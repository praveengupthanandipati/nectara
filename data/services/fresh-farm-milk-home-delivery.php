<?php
/**
 * Content for the "Fresh Farm Milk Home Delivery" service page (fresh-farm-milk-home-delivery.php).
 * Layout: components/service-page.php – copy this file to create another service page.
 */
return [

    /* ── SEO ── */
    'seo' => [
        'title'       => 'Fresh Farm Milk Home Delivery in Hyderabad | Nectara Naturals',
        'description' => 'Pure, fresh farm milk delivered to your door every morning in Hyderabad – eco-friendly bottles, flexible subscriptions and easy changes on WhatsApp.',
        'keywords'    => [
            'milk home delivery Hyderabad', 'fresh milk delivery Hyderabad', 'farm fresh milk Hyderabad',
            'daily milk delivery', 'milk subscription Hyderabad', 'pure cow milk delivery',
            'A2 milk Hyderabad', 'buffalo milk delivery', 'milk in glass bottles',
            'organic milk Hyderabad', 'doorstep milk delivery', 'morning milk delivery',
        ],
        'og_image'    => 'img/banner05.jpg',
    ],

    /* ── Page banner ── */
    'banner' => [
        'text'  => 'Pure, fresh milk straight from the farm to your doorstep – every single morning.',
        'image' => 'img/banner02.jpg',
    ],

    /* ── Intro ── */
    'intro' => [
        'eyebrow'        => 'From Our Farm to Your Home',
        'title'          => 'Fresh Milk,',
        'highlight'      => 'Every Morning',
        'lead'           => 'Start every day with milk you can trust – pure, fresh and delivered before your day begins.',
        'paragraphs'     => [
            'Our milk goes from the farm to your door within hours. There is no adulteration and no compromise – just natural, nutritious milk for your family, checked for purity and freshness before it leaves us.',
            'Choose how much you need and how often. Your milk arrives every morning in hygienic, eco-friendly bottles that we exchange daily. Need extra milk for guests, less milk this week or a pause while you travel? Just send us a WhatsApp message.',
        ],
        'points'         => [
            '100% pure – no adulteration',
            'Delivered 5:30 AM – 8:00 AM',
            'Eco-friendly bottles, exchanged daily',
            'Change or pause on WhatsApp',
        ],
        'image'          => 'img/banner02.jpg',
        'image_alt'      => 'Farmers milking a cow in the field at sunrise',
        'image_position' => '60% center',
        'sub_image'      => 'img/banner05.jpg',
        'sub_image_alt'  => 'Fresh milk being poured into a glass for a child',
        'badge_icon'     => 'bi-sunrise',
        'badge'          => ['Fresh Every', 'Morning'],
    ],

    /* ── What you get ── */
    'offerings' => [
        'eyebrow'   => 'What You Get',
        'title'     => 'Milk Delivery',
        'highlight' => 'Made Simple',
        'text'      => 'Everything you need for fresh milk every day – without the queue or the guesswork.',
        'items'     => [
            ['icon' => 'bi-droplet',        'title' => 'Cow & Buffalo Milk',    'text' => 'Choose fresh cow milk or rich buffalo milk – or a mix of both.'],
            ['icon' => 'bi-sunrise',        'title' => 'Early Morning Delivery', 'text' => 'Delivered between 5:30 and 8:00 AM, in time for your morning tea.'],
            ['icon' => 'bi-recycle',        'title' => 'Eco-Friendly Bottles',  'text' => 'Hygienic, reusable bottles – sterilised and exchanged daily.'],
            ['icon' => 'bi-whatsapp',       'title' => 'WhatsApp Changes',      'text' => 'Extra milk, less milk or a pause – just send us a message.'],
            ['icon' => 'bi-calendar-week',  'title' => 'Flexible Schedules',    'text' => 'Daily, alternate days or weekends only – you decide.'],
            ['icon' => 'bi-basket2',        'title' => 'Add Milk Products',     'text' => 'Add curd, ghee, paneer or butter to your morning delivery.'],
            ['icon' => 'bi-receipt',        'title' => 'Simple Monthly Bill',   'text' => 'Pay only for what was delivered, with a clear monthly bill.'],
            ['icon' => 'bi-shield-check',   'title' => 'Purity Checked',        'text' => 'Every batch is checked for freshness and purity before dispatch.'],
        ],
    ],

    /* ── Plans / options ── */
    'options' => [
        'eyebrow'   => 'Flexible Subscriptions',
        'title'     => 'Your Milk,',
        'highlight' => 'Your Way',
        'image'     => 'img/banner01.jpg',
        'image_alt' => 'Dairy expert checking fresh milk for purity',
        'card'      => ['Changes on WhatsApp', 'Message us by the evening before'],
        'card_icon' => 'bi-whatsapp',
        'items'     => [
            ['icon' => 'bi-cup',             'title' => 'Choose Your Quantity', 'text' => 'From 500 ml to as much as your family needs.'],
            ['icon' => 'bi-calendar-check',  'title' => 'Pick a Schedule',      'text' => 'Daily, alternate days or a custom weekly plan.'],
            ['icon' => 'bi-plus-circle',     'title' => 'Extra for Guests',     'text' => 'Need more for a function or visitors? Just let us know.'],
            ['icon' => 'bi-pause-circle',    'title' => 'Pause Any Time',       'text' => 'Travelling? Pause delivery and restart when you are back.'],
            ['icon' => 'bi-arrow-left-right', 'title' => 'Switch Milk Type',    'text' => 'Move between cow and buffalo milk whenever you like.'],
            ['icon' => 'bi-house-heart',      'title' => 'Gift to Family',       'text' => 'Set up a delivery for your parents or relatives in the city.'],
        ],
    ],

    /* ── Good to know ── */
    'bring' => [
        'title' => 'To Start Your Subscription',
        'text'  => 'Send us these details on WhatsApp and we will start from the next morning.',
        'items' => [
            'Your name and full delivery address',
            'Milk type – cow or buffalo',
            'Daily quantity and schedule',
            'Start date and any products to add',
        ],
    ],

    /* ── FAQs (also added to search results as FAQ data) ── */
    'faqs' => [
        ['q' => 'What time will my milk be delivered?',            'a' => 'We deliver every morning between 5:30 AM and 8:00 AM. Your delivery person will follow the same route daily, so the time stays consistent.'],
        ['q' => 'How do I return the bottles?',                    'a' => 'Rinse the empty bottles and keep them outside your door. We collect them during the next delivery and replace them with fresh, sterilised bottles.'],
        ['q' => 'How do I change my order or pause delivery?',     'a' => 'Send us a WhatsApp message by the evening before. We will add extra milk, reduce the quantity or pause delivery as you need.'],
        ['q' => 'Is the milk boiled or packaged?',                 'a' => 'The milk is delivered fresh and raw in sealed bottles. We recommend boiling it before use, as is usual in Indian homes.'],
        ['q' => 'How do I pay?',                                   'a' => 'We share a monthly bill based on the milk actually delivered. You can pay by UPI or bank transfer.'],
    ],

    /* ── Related products (by product slug) ── */
    'related' => ['a2-cow-milk', 'buffalo-milk', 'fresh-curd', 'desi-ghee'],

    /* ── Call to action ── */
    'cta' => [
        'title'     => 'Ready for fresh milk every morning?',
        'highlight' => 'Start your subscription today.',
        'text'      => 'Tell us your quantity and schedule on WhatsApp – we will deliver from tomorrow morning.',
    ],
];
