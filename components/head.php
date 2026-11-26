<?php
/**
 * <head> – SEO, social tags, fonts, styles and structured data.
 * Uses $page, $site and $seo from components/init.php.
 */
$currentFile = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$canonical   = $site['site_url'] !== '' ? absolute_url($currentFile === 'index.php' ? '' : $currentFile, $site) : '';
$ogImage     = absolute_url($page['og_image'], $site);

// Structured data: business details on every page + breadcrumb on inner pages
$schema = [
    [
        '@context'    => 'https://schema.org',
        '@type'       => 'LocalBusiness',
        'name'        => $site['name'],
        'description' => $seo['description'],
        'image'       => absolute_url($seo['og_image'], $site),
        'logo'        => absolute_url($site['logo'], $site),
        'telephone'   => $site['phone_link'],
        'email'       => $site['email'],
        'address'     => [
            '@type'           => 'PostalAddress',
            'addressLocality' => $site['city'],
            'addressRegion'   => $site['region'],
            'addressCountry'  => $site['country'],
        ],
        'priceRange'  => '₹₹',
    ],
];
if ($page['breadcrumb'] !== '') {
    $crumbs = [['name' => 'Home', 'url' => 'index.php']];
    if ($page['breadcrumb_parent']) {
        $crumbs[] = ['name' => $page['breadcrumb_parent']['label'], 'url' => $page['breadcrumb_parent']['url']];
    }
    $crumbs[] = ['name' => $page['breadcrumb'], 'url' => $currentFile];

    $schema[] = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => array_map(fn ($crumb, $i) => [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $crumb['name'],
            'item'     => absolute_url($crumb['url'], $site),
        ], $crumbs, array_keys($crumbs)),
    ];
}
$schema = array_merge($schema, $page['schema']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- ── Primary SEO ── -->
    <title><?= e($page['full_title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>">
    <meta name="keywords" content="<?= e($page['keywords']) ?>">
    <meta name="author" content="<?= e($site['name']) ?>">
    <meta name="robots" content="<?= e($page['robots']) ?>">
    <meta name="theme-color" content="<?= e($site['theme_color']) ?>">
    <meta name="geo.region" content="IN-TG">
    <meta name="geo.placename" content="<?= e($site['city']) ?>">
<?php if ($canonical !== ''): ?>
    <link rel="canonical" href="<?= e($canonical) ?>">
<?php endif; ?>

    <!-- ── Open Graph / Social ── -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= e($site['name']) ?>">
    <meta property="og:title" content="<?= e($page['full_title']) ?>">
    <meta property="og:description" content="<?= e($page['description']) ?>">
    <meta property="og:image" content="<?= e($ogImage) ?>">
    <meta property="og:locale" content="<?= e($seo['locale']) ?>">
<?php if ($canonical !== ''): ?>
    <meta property="og:url" content="<?= e($canonical) ?>">
<?php endif; ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($page['full_title']) ?>">
    <meta name="twitter:description" content="<?= e($page['description']) ?>">
    <meta name="twitter:image" content="<?= e($ogImage) ?>">

    <link rel="icon" type="image/svg+xml" href="<?= e($site['logo']) ?>">

    <!-- ── Fonts ── -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <!-- ── Stylesheets ── -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- JavaScript off: hide the page loader and show scroll-animated content -->
    <noscript><style>.preloader { display: none !important; } [data-aos] { opacity: 1 !important; transform: none !important; }</style></noscript>

    <!-- ── Structured data ── -->
<?php foreach ($schema as $item): ?>
    <script type="application/ld+json"><?= json_encode($item, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
<?php endforeach; ?>
</head>
