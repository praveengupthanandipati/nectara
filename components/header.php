<?php
/**
 * Page loader + site header (logo, main menu, enquiry button).
 * Menu items come from $data['nav']:
 *   'menu' => 'services' → dropdown with $data['services']
 *   'menu' => 'products' → mega menu with $data['products']
 */
?>
<body data-whatsapp="<?= e($site['whatsapp']) ?>" data-site-name="<?= e($site['name']) ?>" data-page="<?= e($page['id']) ?>">

    <!-- ── Page loader ── -->
    <div class="preloader" id="preloader" role="status" aria-label="Loading">
        <div class="preloader__inner">
            <span class="preloader__ring"></span>
            <img src="<?= e($site['logo']) ?>" alt="" class="preloader__logo" width="96" height="28">
        </div>
    </div>

    <a class="skip-link" href="#main">Skip to content</a>

    <!-- ================= HEADER ================= -->
    <header class="site-header" id="siteHeader">
        <nav class="navbar navbar-expand-xl" id="mainNav" aria-label="Main navigation">
            <div class="container">

                <!-- Logo (left) -->
                <a class="navbar-brand" href="index.php" aria-label="<?= e($site['name']) ?> – Home">
                    <img src="<?= e($site['logo']) ?>" alt="<?= e($site['name']) ?>" width="196" height="58">
                </a>

                <!-- Menu (middle) – becomes off-canvas below xl -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenuOffcanvas" aria-labelledby="mobileMenuLabel">
                    <div class="offcanvas-header">
                        <img src="<?= e($site['logo']) ?>" alt="<?= e($site['name']) ?>" class="offcanvas-logo" width="142" height="42">
                        <h2 class="visually-hidden" id="mobileMenuLabel">Menu</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close menu"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav mx-auto">
<?php foreach ($data['nav'] as $item):
    $isActive = $item['id'] === $page['id'];
    $menu     = $item['menu'] ?? '';
    $toggleId = $item['id'] . 'Toggle';

    if ($menu === 'services'): ?>
                            <!-- <?= e($item['label']) ?> – dropdown -->
                            <li class="nav-item dropdown hover-dropdown">
                                <a class="nav-link dropdown-toggle js-menu-toggle<?= $isActive ? ' active' : '' ?>" href="<?= e($item['url']) ?>" id="<?= e($toggleId) ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= e($item['label']) ?></a>

                                <div class="dropdown-menu nav-dropdown" aria-labelledby="<?= e($toggleId) ?>">
<?php foreach ($data['services'] as $menuService):
    $isCurrent = $menuService['slug'] === $page['service']; ?>
                                    <a class="dropdown-item mega-item<?= $isCurrent ? ' is-current' : '' ?>"<?= $isCurrent ? ' aria-current="page"' : '' ?> href="<?= e(service_url($menuService['slug'])) ?>">
                                        <span class="mega-item__icon"><i class="bi <?= e($menuService['icon']) ?>"></i></span>
                                        <span class="mega-item__text"><strong><?= e($menuService['title']) ?></strong><small><?= e($menuService['short']) ?></small></span>
                                    </a>
<?php endforeach; ?>
                                </div>
                            </li>
<?php elseif ($menu === 'products'): ?>
                            <!-- <?= e($item['label']) ?> – mega menu -->
                            <li class="nav-item dropdown mega-dropdown">
                                <a class="nav-link dropdown-toggle js-menu-toggle<?= $isActive ? ' active' : '' ?>" href="<?= e($item['url']) ?>" id="<?= e($toggleId) ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= e($item['label']) ?></a>

                                <div class="dropdown-menu mega-menu" aria-labelledby="<?= e($toggleId) ?>">
                                    <div class="mega-menu__inner">
                                        <div class="mega-menu__list">
<?php foreach ($data['products'] as $menuProduct): ?>
                                            <a class="dropdown-item mega-item" href="<?= e(product_url($menuProduct['slug'])) ?>">
                                                <span class="mega-item__icon"><i class="bi <?= e($menuProduct['icon']) ?>"></i></span>
                                                <span class="mega-item__text"><strong><?= e($menuProduct['title']) ?></strong><small><?= e($menuProduct['short']) ?></small></span>
                                            </a>
<?php endforeach; ?>
                                        </div>

                                        <div class="mega-menu__promo">
                                            <img src="img/banner05.jpg" alt="" loading="lazy">
                                            <div class="mega-menu__promo-content">
                                                <span class="mega-menu__promo-tag">Fresh Every Morning</span>
                                                <h3>Add products to your daily milk</h3>
                                                <p>Curd, ghee, paneer and more – delivered with your morning milk.</p>
                                                <button type="button" class="btn btn-brand btn-sm" data-bs-toggle="modal" data-bs-target="#enquiryModal" data-service="Milk Products Order">Book Daily Milk</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
<?php else: ?>
                            <li class="nav-item"><a class="nav-link<?= $isActive ? ' active' : '' ?>"<?= $isActive ? ' aria-current="page"' : '' ?> href="<?= e($item['url']) ?>"><?= e($item['label']) ?></a></li>
<?php endif; endforeach; ?>
                        </ul>

                        <!-- Mobile-only footer inside off-canvas -->
                        <div class="offcanvas-extra d-xl-none">
                            <button type="button" class="btn btn-brand w-100" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                                <i class="bi bi-cart-check"></i> Book Daily Milk
                            </button>
                            <a href="tel:<?= e($site['phone_link']) ?>" class="offcanvas-extra__phone"><i class="bi bi-telephone"></i> <?= e($site['phone']) ?></a>
                            <?= social_links($site['socials']) ?>
                        </div>
                    </div>
                </div>

                <!-- Order button (right) + mobile toggler -->
                <div class="header-actions">
                    <button type="button" class="btn btn-brand btn-enquiry" data-bs-toggle="modal" data-bs-target="#enquiryModal" aria-label="Book daily milk">
                        <i class="bi bi-cart-check"></i><span class="d-none d-sm-inline">Book Daily Milk</span>
                    </button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas" aria-controls="mobileMenuOffcanvas" aria-label="Open menu">
                        <span></span><span></span><span></span>
                    </button>
                </div>

            </div>
        </nav>
    </header>
    <!-- /HEADER -->
