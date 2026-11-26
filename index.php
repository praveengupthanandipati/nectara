<?php
$page = [
    'id'          => 'home',
    'full_title'  => 'Nectara Naturals | Fresh Farm Milk Home Delivery in Hyderabad',
    'description' => 'Nectara Naturals – pure, fresh farm milk delivered to your door every morning in Hyderabad. Curd, ghee, paneer, butter and milk sweets on order, with easy WhatsApp subscriptions.',
    'keywords'    => [
        'fresh milk home delivery Hyderabad', 'farm fresh milk', 'pure cow milk', 'buffalo milk',
        'milk subscription', 'desi ghee', 'fresh paneer', 'fresh curd', 'milk sweets on order',
    ],
    'og_image'    => 'img/banner02.jpg',
];
require __DIR__ . '/components/init.php';
require __DIR__ . '/components/head.php';
require __DIR__ . '/components/header.php';
?>

    <!-- ================= MAIN ================= -->
    <main id="main">

        <!-- ── Hero carousel ── -->
        <section class="hero" id="home" aria-label="Featured">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">

                <div class="carousel-indicators">
<?php foreach ($data['hero_slides'] as $i => $slide): ?>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?= $i ?>"<?= $i === 0 ? ' class="active" aria-current="true"' : '' ?> aria-label="Slide <?= $i + 1 ?>"></button>
<?php endforeach; ?>
                </div>

                <div class="carousel-inner">
<?php foreach ($data['hero_slides'] as $i => $slide):
    $heading = $i === 0 ? 'h1' : 'h2';   // only one h1 per page ?>
                    <div class="carousel-item<?= $i === 0 ? ' active' : '' ?>">
                        <img src="<?= e($slide['image']) ?>" class="hero__img" alt="<?= e($slide['alt']) ?>"<?= $i === 0 ? ' fetchpriority="high"' : ' loading="lazy"' ?> style="object-position: <?= e($slide['position']) ?>;">
                        <div class="hero__caption">
                            <div class="container">
                                <div class="hero__content">
                                    <span class="hero__eyebrow"><?= e($slide['eyebrow']) ?></span>
                                    <<?= $heading ?> class="hero__title"><?= e($slide['title']) ?> <span><?= e($slide['highlight']) ?></span></<?= $heading ?>>
                                    <p class="hero__text"><?= e($slide['text']) ?></p>
                                    <div class="hero__actions">
                                        <button type="button" class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#enquiryModal"><?= e($slide['button']) ?></button>
                                        <a href="<?= e($slide['link_url']) ?>" class="btn btn-outline-light-brand"><?= e($slide['link_label']) ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?php endforeach; ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                    <span class="hero__arrow"><i class="bi bi-chevron-left"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                    <span class="hero__arrow"><i class="bi bi-chevron-right"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

        <!-- ── Feature highlights ── -->
        <section class="features" aria-label="Why <?= e($site['name']) ?>">
            <div class="container">
                <div class="features__card">
                    <div class="row g-4">
<?php foreach ($data['features'] as $i => $feature): ?>
                        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="<?= $i * 100 ?>">
                            <div class="feature">
                                <span class="feature__icon"><i class="bi <?= e($feature['icon']) ?>"></i></span>
                                <div>
                                    <h3><?= e($feature['title']) ?></h3>
                                    <p><?= e($feature['text']) ?></p>
                                </div>
                            </div>
                        </div>
<?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── About ── -->
        <section class="section about" id="about">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="about__media">
                            <img src="img/banner02.jpg" class="about__img about__img--main" alt="Farmers milking a cow at sunrise" loading="lazy" style="object-position: 60% center;">
                            <img src="img/banner01.jpg" class="about__img about__img--sub" alt="Fresh milk being checked for purity" loading="lazy" style="object-position: 62% center;">
                            <div class="about__badge">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Serving<br><?= e($site['city']) ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <span class="section-eyebrow">About Nectara Naturals</span>
                        <h2 class="section-title text-start">Pure Milk, <span>Pure Promise</span></h2>
                        <p class="lead-text">At <?= e($site['name']) ?>, we bring the goodness of pure, fresh milk straight from the farm to your doorstep every morning.</p>
                        <p>Our promise is simple: purity, nutrition and service you can trust. No adulteration and no compromise – just fresh milk in hygienic, eco-friendly bottles, along with pure curd, ghee, paneer and more. Need extra milk, less milk or a pause? Just message us on WhatsApp.</p>

                        <ul class="check-list">
<?php foreach ($data['about_checklist'] as $point): ?>
                            <li><i class="bi bi-check2-circle"></i> <?= e($point) ?></li>
<?php endforeach; ?>
                        </ul>

<?php require __DIR__ . '/components/sections/stats.php'; ?>

                        <button type="button" class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#enquiryModal">Start My Subscription <i class="bi bi-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Services ── -->
        <section class="section section--tint services" id="services">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Our Services</span>
                    <h2 class="section-title">Fresh from the Farm, <span>Straight to You</span></h2>
                    <p class="section-subtitle">Daily milk at your doorstep, and pure milk sweets made fresh for your celebrations.</p>
                </div>

                <div class="row g-4">
<?php foreach ($data['services'] as $i => $service): ?>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="<?= $i * 150 ?>">
                        <article class="service-feature">
                            <a href="<?= e(service_url($service['slug'])) ?>" class="service-feature__img" tabindex="-1" aria-hidden="true">
                                <img src="<?= e($service['image']) ?>" alt="" loading="lazy">
                            </a>
                            <div class="position-relative"><span class="service-feature__icon"><i class="bi <?= e($service['icon']) ?>"></i></span></div>
                            <div class="service-feature__body">
                                <h3><a href="<?= e(service_url($service['slug'])) ?>"><?= e($service['title']) ?></a></h3>
                                <p><?= e($service['text']) ?></p>
                                <ul class="check-list">
<?php foreach ($service['points'] as $point): ?>
                                    <li><i class="bi bi-check2-circle"></i> <?= e($point) ?></li>
<?php endforeach; ?>
                                </ul>
                                <div class="service-feature__actions">
                                    <button type="button" class="btn btn-brand" data-bs-toggle="modal" data-bs-target="#enquiryModal" data-service="<?= e($service['title']) ?>">Book Daily Milk</button>
                                    <a href="<?= e(service_url($service['slug'])) ?>" class="read-more">View Details <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ── Products (PLACEHOLDER range – edit in data/site-data.php) ── -->
        <section class="section products" id="products">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Our Products</span>
                    <h2 class="section-title">Pure Milk &amp; <span>Milk Products</span></h2>
                    <p class="section-subtitle">Add any of these to your morning milk delivery, or order them on their own.</p>
                </div>

                <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 g-3 g-md-4">
<?php foreach ($data['products'] as $i => $product):
    $productIdPrefix = 'product-';
    require __DIR__ . '/components/sections/product-card.php';
endforeach; ?>
                </div>
            </div>
        </section>

<?php $processTint = false; require __DIR__ . '/components/sections/process.php'; ?>

        <!-- ── Gallery ── -->
        <section class="section section--tint gallery" id="gallery">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Gallery</span>
                    <h2 class="section-title">Life at <span>Our Farm</span></h2>
                    <p class="section-subtitle">Healthy cows, careful milking and pure milk – a look at where your milk comes from.</p>
                </div>

                <div class="gallery__grid">
<?php foreach ($data['gallery'] as $i => $item): ?>
                    <button type="button" class="gallery__item<?= $i === 0 ? ' gallery__item--lg' : '' ?>" data-bs-toggle="modal" data-bs-target="#galleryModal" data-img="<?= e($item['image']) ?>" data-caption="<?= e($item['caption']) ?>" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 100 ?>">
                        <img src="<?= e($item['image']) ?>" alt="<?= e($item['caption']) ?>" loading="lazy">
                        <span class="gallery__overlay"><i class="bi bi-arrows-angle-expand"></i><span><?= e($item['caption']) ?></span></span>
                    </button>
<?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ── Testimonials (data: placeholder reviews – replace before going live) ── -->
        <section class="section testimonials">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Testimonials</span>
                    <h2 class="section-title">Loved by <span>Our Families</span></h2>
                </div>

                <div class="row g-4">
<?php foreach ($data['testimonials'] as $i => $review):
    $isLast = $i === count($data['testimonials']) - 1; ?>
                    <div class="<?= $isLast ? 'col-md-12' : 'col-md-6' ?> col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i * 150 ?>">
                        <figure class="testi-card">
                            <i class="bi bi-quote testi-card__quote"></i>
                            <div class="testi-card__stars" aria-label="<?= (int) $review['rating'] ?> out of 5 stars"><?= stars((int) $review['rating']) ?></div>
                            <blockquote><?= e($review['text']) ?></blockquote>
                            <figcaption><span class="testi-card__avatar"><?= e(mb_substr($review['name'], 0, 1)) ?></span><span><strong><?= e($review['name']) ?></strong><small><?= e($review['service']) ?></small></span></figcaption>
                        </figure>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ── FAQ ── -->
        <section class="section section--tint faq" id="faq">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5" data-aos="fade-right">
                        <span class="section-eyebrow">FAQ's</span>
                        <h2 class="section-title text-start">Frequently Asked <span>Questions</span></h2>
                        <p>Everything you need to know about delivery, bottles and subscriptions. Can't find your answer? Message us – we're happy to help.</p>
                        <div class="faq__help">
                            <span class="faq__help-icon"><i class="bi bi-headset"></i></span>
                            <div>
                                <strong>Still have questions?</strong>
                                <a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left">
<?php $faqItems = $data['faqs']; $faqId = 'faqAccordion'; require __DIR__ . '/components/sections/faq-accordion.php'; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- ── Blogs ── -->
        <section class="section blogs" id="blogs">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Our Blog</span>
                    <h2 class="section-title">Health Tips &amp; <span>Dairy Stories</span></h2>
                    <p class="section-subtitle">Nutrition, purity checks and recipes from the Nectara kitchen.</p>
                </div>

                <div class="row g-4">
<?php foreach ($data['blogs'] as $i => $post):
    $isLast = $i === count($data['blogs']) - 1; ?>
                    <div class="<?= $isLast ? 'col-md-12' : 'col-md-6' ?> col-lg-4" data-aos="fade-up" data-aos-delay="<?= $i * 150 ?>">
                        <article class="blog-card">
                            <a href="<?= e($post['url']) ?>" class="blog-card__img">
                                <img src="<?= e($post['image']) ?>" alt="<?= e($post['alt']) ?>" loading="lazy">
                                <span class="blog-card__tag"><?= e($post['tag']) ?></span>
                            </a>
                            <div class="blog-card__body">
                                <span class="blog-card__meta"><i class="bi bi-calendar3"></i> <time datetime="<?= e($post['date']) ?>"><?= e(date('j M Y', strtotime($post['date']))) ?></time></span>
                                <h3><a href="<?= e($post['url']) ?>"><?= e($post['title']) ?></a></h3>
                                <p><?= e($post['excerpt']) ?></p>
                                <a href="<?= e($post['url']) ?>" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </article>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </section>

<?php $cta = []; require __DIR__ . '/components/sections/cta.php'; ?>

        <!-- ── Contact ── -->
        <section class="section contact" id="contact">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">Contact Us</span>
                    <h2 class="section-title">Get Fresh Milk <span>from Tomorrow</span></h2>
                    <p class="section-subtitle">Send us your address and quantity – we will confirm your delivery on WhatsApp.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-5" data-aos="fade-right">
                        <div class="contact__info">
                            <div class="info-item">
                                <span class="info-item__icon"><i class="bi bi-geo-alt"></i></span>
                                <div><strong>Address</strong><p><?= e($site['address']) ?></p></div>
                            </div>
                            <div class="info-item">
                                <span class="info-item__icon"><i class="bi bi-telephone"></i></span>
                                <div><strong>Phone</strong><p><a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a></p></div>
                            </div>
                            <div class="info-item">
                                <span class="info-item__icon"><i class="bi bi-envelope"></i></span>
                                <div><strong>Email</strong><p><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></p></div>
                            </div>
                            <div class="info-item">
                                <span class="info-item__icon"><i class="bi bi-clock"></i></span>
                                <div><strong>Delivery &amp; Support</strong><p><?php foreach ($site['hours'] as $j => $hours): ?><?= $j ? '<br>' : '' ?><?= e($hours['days']) ?>: <?= e($hours['time']) ?><?php endforeach; ?></p></div>
                            </div>
                            <div class="contact__map">
                                <iframe title="<?= e($site['name']) ?> location" src="<?= e($site['map_embed']) ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade-left">
                        <form class="form-card needs-validation js-whatsapp-form" novalidate>
                            <h3>Order / Subscribe</h3>
                            <p class="form-card__note">We'll reply on WhatsApp within working hours.</p>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="cName" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="cName" name="Name" placeholder="Enter your name" required>
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="cPhone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="cPhone" name="Phone" placeholder="10-digit mobile number" pattern="[0-9+\s-]{10,15}" required>
                                    <div class="invalid-feedback">Please enter a valid phone number.</div>
                                </div>
                                <div class="col-12">
                                    <label for="cService" class="form-label">Service</label>
                                    <select class="form-select js-service-select" id="cService" name="Service" required>
                                        <?= service_options($data['services'], $data['enquiry_extra_options']) ?>
                                    </select>
                                    <div class="invalid-feedback">Please choose a service.</div>
                                </div>
                                <div class="col-12">
                                    <label for="cMessage" class="form-label">Message</label>
                                    <textarea class="form-control" id="cMessage" name="Message" rows="4" placeholder="Area / address, milk type, quantity and products you need"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-brand w-100"><i class="bi bi-whatsapp"></i> Send on WhatsApp</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- /MAIN -->

<?php
require __DIR__ . '/components/gallery-modal.php';
require __DIR__ . '/components/footer.php';
