<?php
/**
 * Content for the "Sweets on the Order" service page (sweets-on-order.php).
 * Layout: components/service-page.php
 *
 * PLACEHOLDER: the sweets listed below are examples – change them to what you actually make.
 */
return [

    /* ── SEO ── */
    'seo' => [
        'title'       => 'Pure Milk Sweets on Order in Hyderabad | Nectara Naturals',
        'description' => 'Traditional milk sweets made fresh to order in Hyderabad with pure milk, ghee and khova – for festivals, functions, return gifts and celebrations.',
        'keywords'    => [
            'milk sweets Hyderabad', 'sweets on order Hyderabad', 'pure ghee sweets',
            'khova sweets', 'doodh peda', 'kalakand Hyderabad',
            'rasmalai order', 'festival sweets order', 'function sweets Hyderabad',
            'homemade sweets Hyderabad', 'sweet gift boxes', 'bulk sweets order',
        ],
        'og_image'    => 'img/banner03.jpg',
    ],

    /* ── Page banner ── */
    'banner' => [
        'text'  => 'Traditional milk sweets made fresh to order with our own pure milk, ghee and khova.',
        'image' => 'img/banner03.jpg',
    ],

    /* ── Intro ── */
    'intro' => [
        'eyebrow'        => 'Made Fresh, Made Pure',
        'title'          => 'Sweets Made with',
        'highlight'      => 'Pure Farm Milk',
        'lead'           => 'The best sweets start with the best milk – and ours comes straight from our farm.',
        'paragraphs'     => [
            'We make traditional milk sweets fresh to order, using the same pure milk, ghee and khova we deliver to homes every morning. No shortcuts, no artificial flavours – just the rich, homemade taste you remember.',
            'Whether it is a festival, a pooja, a family function or return gifts, tell us the sweets you want, the quantity and the date. We prepare them fresh and deliver them on time.',
        ],
        'points'         => [
            'Made fresh to order',
            'Pure ghee & homemade khova',
            'Festival & function orders',
            'Gift boxes available',
        ],
        'image'          => 'img/banner03.jpg',
        'image_alt'      => 'Milk sweets with pistachio and saffron in clay pots',
        'image_position' => '40% center',
        'sub_image'      => 'img/banner02.jpg',
        'sub_image_alt'  => 'Fresh milk from the farm',
        'badge_icon'     => 'bi-cake2',
        'badge'          => ['Made Fresh', 'to Order'],
    ],

    /* ── What we make ── */
    'offerings' => [
        'eyebrow'   => 'What We Make',
        'title'     => 'Classic Sweets,',
        'highlight' => 'Pure Ingredients',
        'text'      => 'A few of the sweets you can order – ask us about anything else you have in mind.',
        'items'     => [
            ['icon' => 'bi-circle',      'title' => 'Doodh Peda',        'text' => 'Soft, melt-in-the-mouth peda made from fresh khova and cardamom.'],
            ['icon' => 'bi-grid-3x3',    'title' => 'Kalakand',          'text' => 'Moist, grainy milk cake with a delicate sweetness.'],
            ['icon' => 'bi-moon-stars',  'title' => 'Rasmalai',          'text' => 'Soft chenna discs soaked in saffron-flavoured thickened milk.'],
            ['icon' => 'bi-cup-hot',     'title' => 'Basundi / Rabri',   'text' => 'Slow-reduced, creamy sweetened milk with dry fruits.'],
            ['icon' => 'bi-droplet-fill', 'title' => 'Ghee Sweets',      'text' => 'Laddus and mysore pak made with our pure desi ghee.'],
            ['icon' => 'bi-snow',        'title' => 'Kulfi',             'text' => 'Traditional kulfi from thickened milk – no artificial cream.'],
            ['icon' => 'bi-gift',        'title' => 'Gift Boxes',        'text' => 'Assorted sweet boxes for festivals, guests and return gifts.'],
            ['icon' => 'bi-people',      'title' => 'Bulk & Function Orders', 'text' => 'Large orders for weddings, poojas and corporate events.'],
        ],
    ],

    /* ── Why our sweets ── */
    'options' => [
        'eyebrow'   => 'Why Our Sweets',
        'title'     => 'Taste the',
        'highlight' => 'Difference',
        'image'     => 'img/banner03.jpg',
        'image_alt' => 'Fresh milk sweets served in clay pots',
        'card'      => ['Order on WhatsApp', 'Share sweets, quantity & date'],
        'card_icon' => 'bi-whatsapp',
        'items'     => [
            ['icon' => 'bi-droplet',        'title' => 'Our Own Milk',        'text' => 'Made with the same pure farm milk we deliver every morning.'],
            ['icon' => 'bi-droplet-fill',   'title' => 'Pure Desi Ghee',      'text' => 'Only pure ghee – no vanaspati or mixed oils.'],
            ['icon' => 'bi-flower1',        'title' => 'Natural Flavours',    'text' => 'Real cardamom, saffron and dry fruits – no artificial essence.'],
            ['icon' => 'bi-sliders',        'title' => 'Sweetness to Taste',  'text' => 'Ask for less sugar and we will make it your way.'],
            ['icon' => 'bi-clock-history',  'title' => 'Fresh, Not Stocked',  'text' => 'Prepared for your order, not taken from old stock.'],
            ['icon' => 'bi-truck',          'title' => 'On-Time Delivery',    'text' => 'Delivered on the date you need, ready to serve.'],
        ],
    ],

    /* ── Good to know ── */
    'bring' => [
        'title' => 'To Place Your Order',
        'text'  => 'Share these details on WhatsApp and we will confirm the price and delivery.',
        'items' => [
            'Sweets you want and the quantity',
            'Date and time you need them',
            'Delivery address',
            'Gift boxes or packing needed, if any',
        ],
    ],

    /* ── FAQs ── */
    'faqs' => [
        ['q' => 'How early should I place my order?',          'a' => 'For small orders, one or two days ahead is usually enough. For festivals and large function orders, please book a week in advance.'],
        ['q' => 'Is there a minimum order quantity?',          'a' => 'Small family orders are welcome. Message us with what you need and we will confirm.'],
        ['q' => 'Can you make sweets with less sugar?',        'a' => 'Yes. Let us know your preference when ordering and we will adjust the sweetness.'],
        ['q' => 'How long do the sweets stay fresh?',          'a' => 'Because they are made with fresh milk and no preservatives, most milk sweets are best eaten within 2–3 days and kept refrigerated.'],
        ['q' => 'Do you take bulk orders for functions?',      'a' => 'Yes – we take orders for weddings, poojas, festivals and corporate events. Share the date and quantity and we will send you a quote.'],
    ],

    /* ── Related products (by product slug) ── */
    'related' => ['desi-ghee', 'khova', 'fresh-paneer', 'fresh-cream'],

    /* ── Call to action ── */
    'cta' => [
        'title'     => 'Planning a festival or function?',
        'highlight' => 'Order pure milk sweets.',
        'text'      => 'Tell us the sweets, quantity and date – we will make them fresh for you.',
    ],
];
