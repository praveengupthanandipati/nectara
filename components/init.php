<?php
/**
 * Loads site data and shared helpers. Include this first on every page.
 *
 * A page sets $page before including this file, e.g.
 *   $page = [
 *       'id'          => 'about',              // matches an id in nav (marks it active)
 *       'title'       => 'About Us',           // " | Nectara Naturals, Hyderabad" is added
 *       'description' => '...',
 *       'keywords'    => ['...', '...'],       // added to the default keywords
 *       'og_image'    => 'img/banner02.jpg',
 *       'breadcrumb'  => 'About Us',           // inner pages only
 *   ];
 */

$data = require __DIR__ . '/../data/site-data.php';
$site = $data['site'];
$seo  = $data['seo'];

$page = array_merge([
    'id'                => '',
    'service'           => '',      // service slug on service pages (marks it in the Services menu)
    'title'             => '',      // SEO title (before the suffix)
    'full_title'        => '',
    'heading'           => '',      // visible banner heading (defaults to title)
    'description'       => $seo['description'],
    'keywords'          => [],
    'og_image'          => $seo['og_image'],
    'breadcrumb'        => '',
    'breadcrumb_parent' => null,    // ['label' => 'Services', 'url' => '...'] for a 3-level breadcrumb
    'schema'            => [],      // extra structured data blocks
    'robots'            => 'index, follow',
], $page ?? []);

// Final <title>: "Page | Suffix", or the full title if the page gives one
if ($page['full_title'] === '') {
    $page['full_title'] = $page['title'] !== ''
        ? $page['title'] . ' | ' . $seo['title_suffix']
        : $site['name'] . ' | ' . $site['tagline'] . ' in ' . $site['city'];
}

// Page keywords first, then the site-wide ones, without duplicates
$page['keywords'] = implode(', ', array_unique(array_merge($page['keywords'], $seo['keywords'])));

/* ── Helpers ─────────────────────────────────────────── */

/** Escape text for HTML output. */
function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** URL of a service page from its slug. */
function service_url(string $slug): string
{
    return $slug . '.php';
}

/** Link to a product card on the home page. */
function product_url(string $slug): string
{
    return 'index.php#product-' . $slug;
}

/** Find an item (service or product) by slug. */
function find_service(array $items, string $slug): ?array
{
    foreach ($items as $item) {
        if ($item['slug'] === $slug) {
            return $item;
        }
    }
    return null;
}

/** Absolute URL when site_url is set (for canonical / Open Graph), else relative. */
function absolute_url(string $path, array $site): string
{
    return $site['site_url'] !== '' ? rtrim($site['site_url'], '/') . '/' . ltrim($path, '/') : $path;
}

/** Social icon links. 'whatsapp' as url becomes the WhatsApp chat link (set by scripts.js). */
function social_links(array $socials, string $extraClass = ''): string
{
    $html = '<div class="social-links ' . e($extraClass) . '">';
    foreach ($socials as $social) {
        $isWhatsapp = $social['url'] === 'whatsapp';
        $isExternal = !$isWhatsapp && $social['url'] !== '#';
        $html .= sprintf(
            '<a href="%s"%s aria-label="%s"><i class="bi %s"></i></a>',
            $isWhatsapp ? '#' : e($social['url']),
            $isWhatsapp ? ' class="js-whatsapp-link"' : ($isExternal ? ' target="_blank" rel="noopener"' : ''),
            e($social['label']),
            e($social['icon'])
        );
    }
    return $html . '</div>';
}

/** <option> list of services for enquiry forms. */
function service_options(array $services, array $extra = []): string
{
    $html = '<option value="" selected disabled>Choose a service</option>';
    foreach (array_merge(array_column($services, 'title'), $extra) as $title) {
        $html .= '<option value="' . e($title) . '">' . e($title) . '</option>';
    }
    return $html;
}

/** Star rating icons. */
function stars(int $rating): string
{
    return str_repeat('<i class="bi bi-star-fill"></i>', max(0, min(5, $rating)));
}
