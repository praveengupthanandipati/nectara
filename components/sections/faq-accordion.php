<?php
/**
 * FAQ accordion.
 * Set before including:
 *   $faqItems = [['q' => '...', 'a' => '...'], ...];
 *   $faqId    = 'faqAccordion';   // unique id if used more than once on a page
 */
$faqId = $faqId ?? 'faqAccordion';
?>
                        <div class="accordion" id="<?= e($faqId) ?>">
<?php foreach ($faqItems as $i => $faq):
    $open = $i === 0;
    $itemId = $faqId . '-' . ($i + 1); ?>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button<?= $open ? '' : ' collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= e($itemId) ?>" aria-expanded="<?= $open ? 'true' : 'false' ?>" aria-controls="<?= e($itemId) ?>"><?= e($faq['q']) ?></button>
                                </h3>
                                <div id="<?= e($itemId) ?>" class="accordion-collapse collapse<?= $open ? ' show' : '' ?>" data-bs-parent="#<?= e($faqId) ?>">
                                    <div class="accordion-body"><?= e($faq['a']) ?></div>
                                </div>
                            </div>
<?php endforeach; ?>
                        </div>
