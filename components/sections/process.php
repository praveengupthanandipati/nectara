<?php
/**
 * "Fresh Milk at Your Door in 4 Simple Steps". Data: $data['process']
 * Optional: $processTint = true for the tinted background.
 */
$processClass = !empty($processTint) ? 'section section--tint process' : 'section process';
?>
        <section class="<?= $processClass ?>">
            <div class="container">
                <div class="section-heading" data-aos="fade-up">
                    <span class="section-eyebrow">How It Works</span>
                    <h2 class="section-title">Fresh Milk at Your Door in <span><?= count($data['process']) ?> Simple Steps</span></h2>
                </div>

                <div class="row g-4 process__row">
<?php foreach ($data['process'] as $i => $step): ?>
                    <div class="col-6 col-lg-3" data-aos="zoom-in" data-aos-delay="<?= $i * 150 ?>">
                        <div class="step">
                            <span class="step__num"><?= sprintf('%02d', $i + 1) ?></span>
                            <span class="step__icon"><i class="bi <?= e($step['icon']) ?>"></i></span>
                            <h3><?= e($step['title']) ?></h3>
                            <p><?= e($step['text']) ?></p>
                        </div>
                    </div>
<?php endforeach; ?>
                </div>
            </div>
        </section>
