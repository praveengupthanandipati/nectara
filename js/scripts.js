/**
 * Nectara Naturals – site scripts
 * Requires: Bootstrap 5.3 (+ Popper), AOS
 */
(function () {
    'use strict';

    /* -----------------------------------------------
       SETTINGS – the WhatsApp number comes from
       data/site-data.php (printed on <body data-whatsapp>)
    ----------------------------------------------- */
    var WHATSAPP_NUMBER = document.body.getAttribute('data-whatsapp') || '';
    var SITE_NAME = document.body.getAttribute('data-site-name') || 'Nectara Naturals';

    /* -----------------------------------------------
       PAGE LOADER – hide once everything has loaded
       (with a fallback so it never blocks the page)
    ----------------------------------------------- */
    var desktopMQ = window.matchMedia('(min-width: 1200px)');   // matches navbar-expand-xl
    var hoverMQ   = window.matchMedia('(min-width: 1200px) and (hover: hover) and (pointer: fine)');
    var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    var preloader = document.getElementById('preloader');
    var animationsStarted = false;

    /* AOS – animate on scroll. Started when the loader fades out,
       so the first animations are not hidden behind it. */
    function startAnimations() {
        if (animationsStarted || !window.AOS) return;
        animationsStarted = true;
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 60,
            disable: reducedMotion
        });
    }

    function hidePreloader() {
        if (preloader && !preloader.classList.contains('is-hidden')) {
            preloader.classList.add('is-hidden');
            setTimeout(function () {
                if (preloader && preloader.parentNode) preloader.parentNode.removeChild(preloader);
            }, 600);
        }
        startAnimations();
    }

    if (document.readyState === 'complete') {
        hidePreloader();
    } else {
        window.addEventListener('load', hidePreloader);
        setTimeout(hidePreloader, 6000);     // slow network fallback
    }

    function waLink(text) {
        return 'https://wa.me/' + WHATSAPP_NUMBER + (text ? '?text=' + encodeURIComponent(text) : '');
    }

    /* -----------------------------------------------
       HEADER – shadow / shrink on scroll
    ----------------------------------------------- */
    var header = document.getElementById('siteHeader');
    var backToTop = document.getElementById('backToTop');

    function onScroll() {
        var y = window.scrollY || window.pageYOffset;
        if (header) header.classList.toggle('is-scrolled', y > 40);
        if (backToTop) backToTop.classList.toggle('is-visible', y > 400);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    if (backToTop) {
        backToTop.addEventListener('click', function () {
            window.scrollTo({ top: 0, behavior: reducedMotion ? 'auto' : 'smooth' });
        });
    }

    /* -----------------------------------------------
       MENU – active link + off-canvas behaviour
    ----------------------------------------------- */
    // Each page marks its own menu item with class="active" in the HTML.
    var offcanvasEl = document.getElementById('mobileMenuOffcanvas');

    // "Services" and "Products" only open their menus – they never navigate.
    // With a mouse on desktop the menus open on hover (CSS), so the click
    // is ignored; on touch screens Bootstrap's tap-to-open still works.
    document.querySelectorAll('.js-menu-toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            if (hoverMQ.matches) {
                e.stopPropagation();            // stop Bootstrap's dropdown toggle
            }
        });
    });

    // Close the mobile menu when a link to a section on this page is chosen
    if (offcanvasEl) {
        offcanvasEl.querySelectorAll('a[href*="#"]:not(.js-menu-toggle)').forEach(function (link) {
            link.addEventListener('click', function () {
                if (offcanvasEl.classList.contains('show')) {
                    bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl).hide();
                }
            });
        });
    }

    if (offcanvasEl) {
        // Close the off-canvas automatically if the screen grows to desktop size
        desktopMQ.addEventListener
            ? desktopMQ.addEventListener('change', closeOnDesktop)
            : desktopMQ.addListener(closeOnDesktop);       // older Safari
    }

    function closeOnDesktop(e) {
        if (e.matches && offcanvasEl.classList.contains('show')) {
            bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl).hide();
        }
    }

    /* -----------------------------------------------
       ENQUIRY FORMS – pre-select service, validate
       and send via WhatsApp (options come from PHP)
    ----------------------------------------------- */
    var enquiryModal = document.getElementById('enquiryModal');
    if (enquiryModal) {
        enquiryModal.addEventListener('show.bs.modal', function (e) {
            var service = e.relatedTarget && e.relatedTarget.getAttribute('data-service');
            var select = enquiryModal.querySelector('.js-service-select');
            if (select) select.value = service || '';

            // Product cards pass the product name into the message box
            var product = e.relatedTarget && e.relatedTarget.getAttribute('data-product');
            var message = enquiryModal.querySelector('textarea');
            if (message) message.value = product ? 'Product: ' + product + '\nQuantity: ' : '';

            // Close the mobile menu if the modal was opened from it
            if (offcanvasEl && offcanvasEl.classList.contains('show')) {
                bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl).hide();
            }
        });

        // Don't allow past dates
        var dateInput = enquiryModal.querySelector('input[type="date"]');
        if (dateInput) dateInput.min = new Date().toISOString().split('T')[0];
    }

    document.querySelectorAll('.js-whatsapp-form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                var firstInvalid = form.querySelector(':invalid');
                if (firstInvalid) firstInvalid.focus();
                return;
            }

            var lines = ['Hello ' + SITE_NAME + ', I would like to order / enquire:'];
            new FormData(form).forEach(function (value, key) {
                if (String(value).trim()) lines.push(key + ': ' + String(value).trim());
            });

            window.open(waLink(lines.join('\n')), '_blank', 'noopener');
            form.reset();
            form.classList.remove('was-validated');

            var modal = form.closest('.modal');
            if (modal) bootstrap.Modal.getOrCreateInstance(modal).hide();
        });
    });

    // Plain WhatsApp links / buttons
    document.querySelectorAll('.js-whatsapp-link').forEach(function (a) {
        a.href = waLink('Hello ' + SITE_NAME + ', I would like to know more about your milk delivery and products.');
        a.target = '_blank';
        a.rel = 'noopener';
    });

    /* -----------------------------------------------
       GALLERY LIGHTBOX
    ----------------------------------------------- */
    var galleryModal = document.getElementById('galleryModal');
    if (galleryModal) {
        var gImg = document.getElementById('galleryModalImg');
        var gCap = document.getElementById('galleryModalCaption');

        galleryModal.addEventListener('show.bs.modal', function (e) {
            var trigger = e.relatedTarget;
            if (!trigger) return;
            gImg.src = trigger.getAttribute('data-img');
            gImg.alt = trigger.getAttribute('data-caption') || '';
            gCap.textContent = trigger.getAttribute('data-caption') || '';
        });
        galleryModal.addEventListener('hidden.bs.modal', function () {
            gImg.removeAttribute('src');
        });
    }

    /* -----------------------------------------------
       HERO CAROUSEL – no autoplay for reduced motion
    ----------------------------------------------- */
    var heroCarousel = document.getElementById('heroCarousel');
    if (heroCarousel && reducedMotion && window.bootstrap) {
        bootstrap.Carousel.getOrCreateInstance(heroCarousel, { ride: false, interval: false }).pause();
    }

    /* -----------------------------------------------
       FOOTER YEAR
    ----------------------------------------------- */
    var year = document.getElementById('year');
    if (year) year.textContent = new Date().getFullYear();
}());
