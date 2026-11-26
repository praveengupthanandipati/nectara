<?php
/**
 * One product card (inside a Bootstrap row).
 * Set before including:
 *   $product         = one item from $data['products'];
 *   $i               = loop index (for the animation delay);
 *   $productIdPrefix = 'product-' to give the card an id the menu links to, '' for none.
 */
$cardId = ($productIdPrefix ?? '') !== '' ? ' id="' . e($productIdPrefix . $product['slug']) . '"' : '';
?>
                    <div class="col" data-aos="fade-up" data-aos-delay="<?= ($i % 5) * 80 ?>">
                        <article class="product-card"<?= $cardId ?>>
<?php if ($product['tag'] !== ''): ?>
                            <span class="product-card__tag"><?= e($product['tag']) ?></span>
<?php endif; ?>
                            <span class="product-card__icon"><i class="bi <?= e($product['icon']) ?>"></i></span>
                            <h3><?= e($product['title']) ?></h3>
                            <p><?= e($product['text']) ?></p>
                            <span class="product-card__size"><?= e($product['size']) ?></span>
                            <button type="button" class="product-card__link" data-bs-toggle="modal" data-bs-target="#enquiryModal" data-service="Milk Products Order" data-product="<?= e($product['title']) ?>">Book Daily Milk <i class="bi bi-arrow-right"></i></button>
                        </article>
                    </div>
