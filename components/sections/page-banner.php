<?php
/**
 * Inner page banner with title and breadcrumb.
 * Uses: $page['title'], $page['breadcrumb'], $page['banner_text'], $page['banner_image']
 */
$bannerImage = $page['banner_image'] ?? 'img/banner02.jpg';
$bannerText  = $page['banner_text'] ?? '';
?>
        <section class="page-banner">
            <img src="<?= e($bannerImage) ?>" class="page-banner__img" alt="" fetchpriority="high">
            <div class="container">
                <div class="page-banner__content" data-aos="fade-up">
                    <h1 class="page-banner__title"><?= e($page['heading'] ?: $page['title']) ?></h1>
<?php if ($bannerText !== ''): ?>
                    <p class="page-banner__text"><?= e($bannerText) ?></p>
<?php endif; ?>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house-door"></i> Home</a></li>
<?php if (!empty($page['breadcrumb_parent'])): ?>
                            <li class="breadcrumb-item"><a href="<?= e($page['breadcrumb_parent']['url']) ?>"><?= e($page['breadcrumb_parent']['label']) ?></a></li>
<?php endif; ?>
                            <li class="breadcrumb-item active" aria-current="page"><?= e($page['breadcrumb'] ?: $page['title']) ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
