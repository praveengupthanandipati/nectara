<?php
/**
 * Shared layout for every service page.
 *
 * A service page only needs:
 *   <?php
 *   $serviceSlug = 'fresh-farm-milk-home-delivery';
 *   require __DIR__ . '/components/service-page.php';
 *
 * Content comes from data/services/{slug}.php, the service's name, icon
 * and short text from the services list in data/site-data.php.
 * 'related' in the content file lists product slugs shown at the bottom.
 */

$content = require __DIR__ . '/../data/services/' . $serviceSlug . '.php';

$page = [
    'id'                => 'services',          // highlights "Services" in the menu
    'service'           => $serviceSlug,        // highlights this item in the Services dropdown
    'full_title'        => $content['seo']['title'],
    'description'       => $content['seo']['description'],
    'keywords'          => $content['seo']['keywords'],
    'og_image'          => $content['seo']['og_image'],
    'banner_text'       => $content['banner']['text'],
    'banner_image'      => $content['banner']['image'],
    'breadcrumb_parent' => ['label' => 'Services', 'url' => 'index.php#services'],
];

require __DIR__ . '/init.php';

$service = find_service($data['services'], $serviceSlug);
$page['heading']    = $service['title'];          // banner <h1>
$page['breadcrumb'] = $service['title'];

// Extra structured data: the service itself + its FAQs
$page['schema'] = [
    [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        'name'        => $service['title'],
        'serviceType' => $service['title'],
        'description' => $content['seo']['description'],
        'areaServed'  => ['@type' => 'City', 'name' => $site['city']],
        'provider'    => ['@type' => 'LocalBusiness', 'name' => $site['name']],
    ],
    [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => array_map(fn ($faq) => [
            '@type'          => 'Question',
            'name'           => $faq['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq['a']],
        ], $content['faqs']),
    ],
];

require __DIR__ . '/head.php';
require __DIR__ . '/header.php';

$intro    = $content['intro'];
$offer    = $content['offerings'];
$options  = $content['options'];
$bring    = $content['bring'];
?>

    <!-- ================= MAIN ================= -->
    <main id="main">

<?php require __DIR__ . '/sections/page-banner.php'; ?>

        <!-- ── Intro ── -->
        <section class="section about">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="about__media">
                            <img src="<?= e($intro['image']) ?>" class="about__img about__img--main" alt="<?= e($intro['image_alt']) ?>" loading="lazy" style="object-position: <?= e($intro['image_position']) ?>;">
                            <img src="<?= e($intro['sub_image']) ?>" class="about__img about__img--sub" alt="<?= e($intro['sub_image_alt']) ?>" loading="lazy">
                            <div class="about__badge">
                                <i class="bi <?= e($intro['badge_icon']) ?>"></i>
                                <span><?= e($intro['badge'][0]) ?><br><?= e($intro['badge'][1]) ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <span class="section-eyebrow"><?= e($intro['eyebrow']) ?></span>
                        <h2 class="section-title text-start"><?= e($intro['title']) ?> <span><?= e($intro['highlight']) ?></span></h2>
                        <p class="lead-text"><?= e($intro['lead']) ?></p>
<?php foreach ($intro['paragraphs'] as $paragraph): ?>
                        <p><?= e($paragraph) ?></p>
<?php endforeach; ?>

                        <ul class="check-list">
<?php foreach ($intro['points'] as $point): ?>
                            <li><i class="bi bi-check2-circle"></i> <?= e($point) ?></li>
<?php endforeach; ?>
                        </ul>

                        <div class="d-flex flex-wrap gap-3">
                            <button type="button" class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#enquiryModal" data-service="<?= e($service['title']) ?>">Book Daily Milk <i class="bi bi-arrow-right"></i></button>
                            <a href="#" class="btn btn-whatsapp js-whatsapp-link"><i class="bi bi-whatsapp"></i> WhatsApp Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── What we offer ── -->
        <section class="section section--tint">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow"><?= e($offer['eyebrow']) ?></span>
                    <h2 class="section-title"><?= e($offer['title']) ?> <span><?= e($offer['highlight']) ?></span></h2>
                    <p class="section-subtitle"><?= e($offer['text']) ?></p>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
<?php foreach ($offer['items'] as $i => $item): ?>
                    <div class="col" data-aos="fade-up" data-aos-delay="<?= ($i % 4) * 100 ?>">
                        <article class="service-card service-card--compact">
                            <span class="service-card__icon"><i class="bi <?= e($item['icon']) ?>"></i></span>
                            <h3><?= e($item['title']) ?></h3>
                            <p><?= e($item['text']) ?></p>
                        </article>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ── Why choose / options ── -->
        <section class="section why">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-7 order-2 order-lg-1">
                        <div data-aos="fade-up">
                            <span class="section-eyebrow"><?= e($options['eyebrow']) ?></span>
                            <h2 class="section-title text-start"><?= e($options['title']) ?> <span><?= e($options['highlight']) ?></span></h2>
                        </div>

                        <div class="row g-4 mt-1">
<?php foreach ($options['items'] as $i => $item): ?>
                            <div class="col-sm-6" data-aos="fade-up" data-aos-delay="<?= ($i % 2) * 100 ?>">
                                <div class="why-item">
                                    <span class="why-item__icon"><i class="bi <?= e($item['icon']) ?>"></i></span>
                                    <div>
                                        <h3><?= e($item['title']) ?></h3>
                                        <p><?= e($item['text']) ?></p>
                                    </div>
                                </div>
                            </div>
<?php endforeach; ?>
                        </div>
                    </div>

                    <div class="col-lg-5 order-1 order-lg-2" data-aos="fade-left">
                        <div class="why__media">
                            <img src="<?= e($options['image']) ?>" alt="<?= e($options['image_alt']) ?>" loading="lazy">
                            <div class="why__media-card">
                                <i class="bi <?= e($options['card_icon'] ?? 'bi-whatsapp') ?>"></i>
                                <div>
                                    <strong><?= e($options['card'][0]) ?></strong>
                                    <span><?= e($options['card'][1]) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php $processTint = true; require __DIR__ . '/sections/process.php'; ?>

        <!-- ── FAQs + good to know ── -->
        <section class="section faq">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5" data-aos="fade-right">
                        <span class="section-eyebrow">Good to Know</span>
                        <h2 class="section-title text-start"><?= e($service['title']) ?> <span>FAQs</span></h2>

                        <div class="bring-box">
                            <h3><i class="bi bi-bag-check"></i> <?= e($bring['title']) ?></h3>
                            <p><?= e($bring['text']) ?></p>
                            <ul>
<?php foreach ($bring['items'] as $item): ?>
                                <li><i class="bi bi-check2-circle"></i> <?= e($item) ?></li>
<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left">
<?php $faqItems = $content['faqs']; $faqId = 'serviceFaq'; require __DIR__ . '/sections/faq-accordion.php'; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Related products ── -->
        <section class="section section--tint">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Explore More</span>
                    <h2 class="section-title">Popular <span>Milk Products</span></h2>
                </div>

                <div class="row row-cols-2 row-cols-lg-4 g-3 g-md-4">
<?php foreach ($content['related'] as $i => $slug):
    $product = find_service($data['products'], $slug);
    if (!$product) continue;
    $productIdPrefix = '';   // no ids here – the cards with ids live on the home page
    require __DIR__ . '/sections/product-card.php';
endforeach; ?>
                </div>
            </div>
        </section>

<?php $cta = $content['cta'] + ['spaced' => true]; require __DIR__ . '/sections/cta.php'; ?>

    </main>
    <!-- /MAIN -->

<?php require __DIR__ . '/footer.php';
