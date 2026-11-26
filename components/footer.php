<?php
/**
 * Site footer, floating buttons, enquiry modal and scripts. Closes </body></html>.
 */
?>
    <!-- ================= FOOTER ================= -->
    <footer class="site-footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4" data-aos="fade-up">
                    <img src="<?= e($site['logo']) ?>" alt="<?= e($site['name']) ?>" class="site-footer__logo" width="196" height="58" loading="lazy">
                    <p><?= e($site['about_short']) ?></p>
                    <?= social_links($site['socials'], 'social-links--light') ?>
                </div>

                <div class="col-6 col-md-4 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <h4>Quick Links</h4>
                    <ul class="footer-links">
<?php foreach ($data['nav'] as $item): ?>
                        <li><a href="<?= e($item['url']) ?>"><?= e($item['label']) ?></a></li>
<?php endforeach; ?>
                    </ul>
                </div>

                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <h4>Services &amp; Products</h4>
                    <ul class="footer-links">
<?php foreach ($data['services'] as $footerService): ?>
                        <li><a href="<?= e(service_url($footerService['slug'])) ?>"><?= e($footerService['title']) ?></a></li>
<?php endforeach;
foreach ($data['footer_products'] as $slug):
    $footerProduct = find_service($data['products'], $slug);
    if (!$footerProduct) continue; ?>
                        <li><a href="<?= e(product_url($footerProduct['slug'])) ?>"><?= e($footerProduct['title']) ?></a></li>
<?php endforeach; ?>
                    </ul>
                </div>

                <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <h4>Get in Touch</h4>
                    <ul class="footer-contact">
                        <li><i class="bi bi-geo-alt"></i> <?= e($site['address']) ?></li>
                        <li><i class="bi bi-telephone"></i> <a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a></li>
                        <li><i class="bi bi-envelope"></i> <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></li>
                        <li><i class="bi bi-globe"></i> <a href="<?= e($site['site_url']) ?>"><?= e(preg_replace('#^https?://#', '', $site['site_url'])) ?></a></li>
<?php foreach ($site['hours'] as $hours): ?>
                        <li><i class="bi bi-clock"></i> <?= e($hours['days']) ?>: <?= e($hours['time']) ?></li>
<?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="site-footer__bottom">
                <p>&copy; <?= date('Y') ?> <?= e($site['name']) ?>. All rights reserved.</p>
                <p><?= e($site['tagline']) ?>, <?= e($site['city']) ?></p>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <!-- ── Floating buttons ── -->
    <a href="#" class="float-whatsapp js-whatsapp-link" aria-label="Chat on WhatsApp"><i class="bi bi-whatsapp"></i></a>
    <button type="button" class="back-to-top" id="backToTop" aria-label="Back to top"><i class="bi bi-arrow-up"></i></button>

    <!-- ── Enquiry modal ── -->
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="row g-0">
                    <div class="col-md-5 d-none d-md-block enquiry-modal__side">
                        <img src="img/banner05.jpg" alt="" loading="lazy">
                        <div class="enquiry-modal__side-text">
                            <h3>Fresh milk, every morning</h3>
                            <p>Choose your quantity and schedule – change it any time on WhatsApp.</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="modal-header">
                            <h2 class="modal-title" id="enquiryModalLabel">Order / Subscribe</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation js-whatsapp-form" novalidate>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="mName" class="form-label">Your Name</label>
                                        <input type="text" class="form-control" id="mName" name="Name" placeholder="Enter your name" required>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="mPhone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="mPhone" name="Phone" placeholder="Mobile number" pattern="[0-9+\s-]{10,15}" required>
                                        <div class="invalid-feedback">Please enter a valid phone number.</div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="mDate" class="form-label">Start Date</label>
                                        <input type="date" class="form-control" id="mDate" name="Start date">
                                    </div>
                                    <div class="col-12">
                                        <label for="mService" class="form-label">Service</label>
                                        <select class="form-select js-service-select" id="mService" name="Service" required>
                                            <?= service_options($data['services'], $data['enquiry_extra_options']) ?>
                                        </select>
                                        <div class="invalid-feedback">Please choose a service.</div>
                                    </div>
                                    <div class="col-12">
                                        <label for="mMessage" class="form-label">Message</label>
                                        <textarea class="form-control" id="mMessage" name="Message" rows="3" placeholder="Area / address, quantity (e.g. 1 L daily), products…"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand w-100"><i class="bi bi-whatsapp"></i> Send Enquiry</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── Scripts ── -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
