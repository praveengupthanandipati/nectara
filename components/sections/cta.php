<?php
/**
 * Call-to-action band.
 * Optional before including:
 *   $cta = ['title' => '...', 'highlight' => '...', 'text' => '...', 'spaced' => true];
 */
$cta = array_merge([
    'title'     => 'Start your mornings with pure milk.',
    'highlight' => 'Subscribe today.',
    'text'      => 'Tell us your quantity and schedule – fresh farm milk at your door from tomorrow morning.',
    'spaced'    => false,   // true when it follows a section without bottom padding
], $cta ?? []);
?>
        <section class="cta<?= $cta['spaced'] ? ' cta--spaced' : '' ?>">
            <div class="container">
                <div class="cta__box" data-aos="zoom-in">
                    <div>
                        <h2><?= e($cta['title']) ?> <span><?= e($cta['highlight']) ?></span></h2>
                        <p><?= e($cta['text']) ?></p>
                    </div>
                    <div class="cta__actions">
                        <button type="button" class="btn btn-light-brand" data-bs-toggle="modal" data-bs-target="#enquiryModal">Subscribe Now</button>
                        <a href="#" class="btn btn-whatsapp js-whatsapp-link"><i class="bi bi-whatsapp"></i> WhatsApp Us</a>
                    </div>
                </div>
            </div>
        </section>
