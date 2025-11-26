<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top modern-nav" role="navigation" aria-label="Main navigation">
    <div class="container">
        <!-- Logo -->
        <a href="{{ route('site.home') }}" class="navbar-brand d-flex align-items-center">
            <img src="{{ public_storage(settings('site_logo')) }}"
                alt="{{ settings('site_name') ?? 'Website' }}"
                width="42"
                height="42"
                class="rounded-circle {{ app()->getLocale() === 'ar' ? 'ms-2' : 'me-2' }}"
                loading="lazy">
            <span class="fw-semibold brand-text d-none d-sm-inline">
                {{ settings('site_name') ?? 'Website' }}
            </span>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler border-0"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#mainNavbar"
            aria-controls="mainNavbar"
            aria-expanded="false"
            aria-label="{{ __('site.shared.Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav {{ app()->getLocale() === 'ar' ? 'me-auto' : 'ms-auto' }} align-items-lg-center mb-2 mb-lg-0 nav-links">

                <!-- Home -->
                <li class="nav-item">
                    <a href="{{ route('site.home') }}"
                        class="nav-link nav-link-modern px-3 {{ request()->routeIs('site.home') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.home') ? 'aria-current=page' : '' }}>
                        {{ __('site.shared.Home') ?? 'Home' }}
                    </a>
                </li>

                <!-- About -->
                <li class="nav-item">
                    <a href="{{ route('site.about') }}"
                        class="nav-link nav-link-modern px-3 {{ request()->routeIs('site.about') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.about') ? 'aria-current=page' : '' }}>
                        {{ __('site.shared.About Us') }}
                    </a>
                </li>

                <!-- Services -->
                <li class="nav-item">
                    <a href="{{ route('site.services') }}"
                        class="nav-link nav-link-modern px-3 {{ request()->routeIs('site.services') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.services') ? 'aria-current=page' : '' }}>
                        {{ __('site.shared.Services') }}
                    </a>
                </li>

                <!-- Blog -->
                <li class="nav-item">
                    <a href="{{ route('site.blog') }}"
                        class="nav-link nav-link-modern px-3 {{ request()->routeIs('site.blog') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.blog') ? 'aria-current=page' : '' }}>
                        {{ __('site.shared.Blogs') }}
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a href="{{ route('site.contact') }}"
                        class="nav-link nav-link-modern px-3 {{ request()->routeIs('site.contact') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.contact') ? 'aria-current=page' : '' }}>
                        {{ __('site.shared.Contact Us') }}
                    </a>
                </li>

                <!-- Language Switcher -->
                <li class="nav-item {{ app()->getLocale() === 'ar' ? 'me-lg-2' : 'ms-lg-2' }}">
                    @php
                    $currentLocale = app()->getLocale();
                    $alternateLocale = $currentLocale === 'ar' ? 'en' : 'ar';
                    $alternateUrl = LaravelLocalization::getLocalizedURL($alternateLocale, null, [], true);
                    @endphp
                    <a href="{{ $alternateUrl }}"
                        rel="alternate"
                        hreflang="{{ $alternateLocale }}"
                        class="lang-switch d-flex align-items-center justify-content-center"
                        title="{{ $alternateLocale === 'en' ? 'English' : 'العربية' }}"
                        aria-label="{{ $alternateLocale === 'en' ? 'Switch to English' : 'التبديل إلى العربية' }}">
                        <i class="bi bi-globe2" aria-hidden="true"></i>
                        <span class="d-lg-none {{ app()->getLocale() === 'ar' ? 'me-2' : 'ms-2' }}">
                            {{ $alternateLocale === 'en' ? 'English' : 'العربية' }}
                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<style>
    :root {
        --nav-text: #111827;
        --nav-muted: #6b7280;
        --nav-hover-bg: #f3f4f6;
        --nav-active-bg: #e5e7eb;
        --nav-primary: #0d6efd;
    }

    /* Base modern navbar (فوق) */
    .modern-nav {
        transition: padding 0.35s ease,
            background-color 0.35s ease,
            transform 0.4s ease;
        /* الحركة الأساسية */
        will-change: transform;
    }

    .modern-nav.modern-nav--compact {
        padding: 6px 0;
        transform: translateY(-6px);
        /* يطلع لفوق بسيط */
    }

    /* ممكن نزودها فخامة أكتر */
    .modern-nav:not(.modern-nav--compact) {
        transform: translateY(0);
    }

    .brand-text {
        font-size: 18px;
        letter-spacing: 0.02em;
        color: var(--nav-text);
        transition: font-size 0.25s ease, opacity 0.25s ease;
    }

    .modern-nav.modern-nav--compact .brand-text {
        font-size: 16px;
        opacity: 0.9;
    }

    .navbar-brand img {
        border: 1px solid rgba(0, 0, 0, 0.08);
        transition: transform 0.25s ease, border-color 0.25s ease;
    }

    .navbar-brand:hover img {
        transform: translateY(-1px);
        border-color: rgba(0, 0, 0, 0.18);
    }

    /* Links */
    .nav-link-modern {
        color: var(--nav-muted) !important;
        font-weight: 500;
        padding: 8px 14px !important;
        border-radius: 999px;
        transition: color 0.2s ease, background-color 0.2s ease, transform 0.2s ease;
    }

    .nav-link-modern:hover,
    .nav-link-modern:focus-visible {
        color: var(--nav-text) !important;
        background-color: var(--nav-hover-bg);
        transform: translateY(-1px);
    }

    .nav-link-modern.active {
        color: var(--nav-primary) !important;
        background-color: var(--nav-active-bg);
        font-weight: 600;
    }

    /* Language switch */
    .lang-switch {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid rgba(0, 0, 0, 0.14);
        background-color: #ffffff;
        color: var(--nav-text);
        font-size: 18px;
        transition: background-color 0.2s ease, transform 0.2s ease, border-color 0.2s ease;
        text-decoration: none;
    }

    .lang-switch:hover,
    .lang-switch:focus-visible {
        background-color: var(--nav-hover-bg);
        border-color: rgba(0, 0, 0, 0.2);
        transform: translateY(-1px);
    }

    @media (max-width: 991.98px) {
        .nav-links {
            padding-top: 10px;
            border-top: 1px solid rgba(0, 0, 0, 0.06);
        }

        .nav-item {
            margin-bottom: 4px;
        }

        .nav-link-modern {
            width: 100%;
            border-radius: 0.75rem;
        }

        .lang-switch {
            width: 100%;
            border-radius: 0.75rem;
        }
    }

    @media (min-width: 992px) {
        .lang-switch span {
            display: none;
        }
    }

    html {
        scroll-behavior: smooth;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.modern-nav');
        const navbarCollapse = document.querySelector('#mainNavbar');
        const toggler = document.querySelector('.navbar-toggler');

        // تغيير شكل النافبار مع السكروول
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 40) {
                    navbar.classList.add('modern-nav--compact');
                } else {
                    navbar.classList.remove('modern-nav--compact');
                }
            }, {
                passive: true
            });
        }

        // يقفل المينيو لو ضغطت براها على الموبايل
        document.addEventListener('click', function(event) {
            if (!navbarCollapse || !toggler) return;

            const isOpen = navbarCollapse.classList.contains('show');
            if (!isOpen) return;

            const clickInsideMenu = navbarCollapse.contains(event.target);
            const clickOnToggler = toggler.contains(event.target);

            if (!clickInsideMenu && !clickOnToggler) {
                toggler.click();
            }
        });

        // سموث سكرول لللينكات اللي جوّا الصفحة
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (!href || href === '#') return;

                const target = document.querySelector(href);
                if (!target) return;

                e.preventDefault();
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });

                // يقفل المينيو بعد الكليك على الموبايل
                if (navbarCollapse && navbarCollapse.classList.contains('show') && toggler) {
                    toggler.click();
                }
            });
        });
    });
</script>