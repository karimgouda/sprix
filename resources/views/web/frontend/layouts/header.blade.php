<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top " role="navigation" aria-label="Main navigation">
    <div class="container">
        <!-- Logo -->
        <a href="{{ route('site.home') }}" class="navbar-brand d-flex align-items-center py-2">
            <img src="{{ public_storage(settings('site_logo')) }}"
                alt="{{ settings('site_name') ?? 'Website' }}"
                width="45"
                height="45"
                class="rounded-circle {{ app()->getLocale() === 'ar' ? 'ms-2' : 'me-2' }}"
                loading="lazy">
            <span class="fw-bold text-dark fs-5 d-none d-sm-inline">
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
            <ul class="navbar-nav {{ app()->getLocale() === 'ar' ? 'me-auto' : 'ms-auto' }} align-items-lg-center mb-2 mb-lg-0">
                <!-- Home -->
                <li class="nav-item">
                    <a href="{{ route('site.home') }}"
                        class="nav-link px-3 {{ request()->routeIs('site.home') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.home') ? 'aria-current=page' : '' }}>
                        <i class="bi bi-house-fill {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.Home') ?? 'Home' }}
                    </a>
                </li>

                <!-- About -->
                <li class="nav-item">
                    <a href="{{ route('site.about') }}"
                        class="nav-link px-3 {{ request()->routeIs('site.about') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.about') ? 'aria-current=page' : '' }}>
                        <i class="bi bi-people-fill {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.About Us') }}
                    </a>
                </li>

                <!-- Services -->
                <li class="nav-item">
                    <a href="{{ route('site.services') }}"
                        class="nav-link px-3 {{ request()->routeIs('site.services') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.services') ? 'aria-current=page' : '' }}>
                        <i class="bi bi-briefcase-fill {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.Services') }}
                    </a>
                </li>

                <!-- Blog -->
                <li class="nav-item">
                    <a href="{{ route('site.blog') }}"
                        class="nav-link px-3 {{ request()->routeIs('site.blog') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.blog') ? 'aria-current=page' : '' }}>
                        <i class="bi bi-newspaper {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.Blogs') }}
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a href="{{ route('site.contact') }}"
                        class="nav-link px-3 {{ request()->routeIs('site.contact') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.contact') ? 'aria-current=page' : '' }}>
                        <i class="bi bi-telephone-fill {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.Contact') }}
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
                        class="nav-link px-3 d-flex align-items-center language-switcher"
                        title="{{ $alternateLocale === 'en' ? 'English' : 'العربية' }}"
                        aria-label="{{ $alternateLocale === 'en' ? 'Switch to English' : 'التبديل إلى العربية' }}">
                        <i class="bi bi-globe fs-5" aria-hidden="true"></i>
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
        --navbar-bg: rgba(255, 255, 255, 0.96);
        --navbar-border: rgba(0, 0, 0, 0.06);
        --navbar-shadow: 0 10px 30px rgba(15, 23, 42, 0.06);
        --navbar-text: rgba(15, 23, 42, 0.85);
        --navbar-text-muted: rgba(15, 23, 42, 0.65);
        --navbar-primary: #0d6efd;
    }

    /* White Glassy Navbar + Reflection */
    .navbar {
        background: var(--navbar-bg);
        backdrop-filter: blur(14px);
        -webkit-backdrop-filter: blur(14px);
        transition: all 0.4s ease;
        padding: 0.65rem 0;
        animation: slideDown 0.5s ease-out;
        z-index: 1030;
        border-bottom: 1px solid var(--navbar-border);
        box-shadow: var(--navbar-shadow);
        position: sticky;
        top: 0;
    }

    .navbar.scrolled {
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 16px 40px rgba(15, 23, 42, 0.08);
        border-bottom-color: rgba(15, 23, 42, 0.07);
    }

    /* Reflection under navbar */
    .navbar::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -26px;
        width: 100%;
        height: 26px;
        background: linear-gradient(to bottom,
                rgba(255, 255, 255, 0.5),
                rgba(255, 255, 255, 0));
        pointer-events: none;
        filter: blur(6px);
        opacity: 0.85;
    }

    /* Logo Styles */
    .navbar-brand {
        transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .navbar-brand:hover {
        opacity: 0.9;
        transform: translateY(-1px) scale(1.03);
    }

    .navbar-brand img {
        transition: all 0.3s ease;
        border: 2px solid rgba(15, 23, 42, 0.12);
        box-shadow: 0 6px 18px rgba(15, 23, 42, 0.08);
        background: #fff;
    }

    .navbar-brand:hover img {
        border-color: rgba(15, 23, 42, 0.3);
        box-shadow: 0 10px 26px rgba(15, 23, 42, 0.15);
    }

    .navbar-brand span {
        color: var(--navbar-text);
    }

    /* Nav Links */
    .nav-link {
        position: relative;
        color: var(--navbar-text-muted) !important;
        font-weight: 500;
        transition: all 0.25s ease;
        margin: 0 0.25rem;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        letter-spacing: 0.01em;
        border-radius: 999px;
        padding-top: 0.35rem;
        padding-bottom: 0.35rem;
    }

    .nav-link i {
        font-size: 1.1rem;
        transition: transform 0.25s ease, color 0.25s ease;
        color: var(--navbar-text-muted);
    }

    .nav-link:hover,
    .nav-link:focus-visible {
        color: var(--navbar-primary) !important;
        text-shadow: 0 0 6px rgba(13, 110, 253, 0.25);
        background: rgba(13, 110, 253, 0.05);
    }

    .nav-link:hover i,
    .nav-link:focus-visible i {
        transform: translateY(-1px);
        color: var(--navbar-primary);
    }

    /* Underline hover effect */
    .nav-link::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0.1rem;
        width: 0;
        height: 2px;
        background-color: var(--navbar-primary);
        border-radius: 999px;
        transform: translateX(-50%);
        transition: width 0.25s ease;
        opacity: 0.9;
    }

    .nav-link:hover::after,
    .nav-link:focus-visible::after {
        width: 60%;
    }

    .nav-link.active {
        color: var(--navbar-primary) !important;
        font-weight: 600;
    }

    /* Active page indicator dot */
    .nav-item {
        position: relative;
    }

    .nav-link.active::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 8px;
        transform: translateY(-50%);
        width: 6px;
        height: 6px;
        background-color: var(--navbar-primary);
        border-radius: 50%;
        opacity: 0.95;
        box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.16);
    }

    [dir="rtl"] .nav-link.active::before {
        left: auto;
        right: 8px;
    }

    /* RTL Support */
    [dir="rtl"] .navbar-nav {
        text-align: right;
    }

    [dir="rtl"] .nav-link::after {
        left: 50%;
        transform: translateX(-50%);
    }

    /* Language Switcher */
    .language-switcher {
        background: linear-gradient(135deg,
                rgba(13, 110, 253, 0.06),
                rgba(13, 110, 253, 0.02));
        border-radius: 999px;
        cursor: pointer;
        transition: all 0.25s ease;
        border: 1px solid rgba(13, 110, 253, 0.3);
        box-shadow: 0 6px 16px rgba(13, 110, 253, 0.16);
        color: var(--navbar-primary) !important;
    }

    .language-switcher i {
        transition: transform 0.6s ease;
        color: var(--navbar-primary);
    }

    .language-switcher:hover,
    .language-switcher:focus-visible {
        background: linear-gradient(135deg,
                rgba(13, 110, 253, 0.12),
                rgba(13, 110, 253, 0.05));
        transform: translateY(-1px);
        box-shadow: 0 12px 26px rgba(13, 110, 253, 0.25);
        border-color: rgba(13, 110, 253, 0.65);
    }

    .language-switcher:hover i,
    .language-switcher:focus-visible i {
        transform: rotate(360deg);
    }

    /* Navbar Toggler */
    .navbar-toggler {
        border: 1px solid rgba(15, 23, 42, 0.35);
        padding: 0.35rem 0.7rem;
        transition: all 0.25s ease;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.85);
    }

    .navbar-toggler:hover,
    .navbar-toggler:focus-visible {
        background-color: rgba(13, 110, 253, 0.06);
        border-color: rgba(13, 110, 253, 0.7);
        box-shadow: 0 0 0 0.15rem rgba(13, 110, 253, 0.25);
        outline: none;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(15, 23, 42, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* Mobile Responsive */
    @media (max-width: 991.98px) {
        .navbar {
            background: rgba(255, 255, 255, 0.98);
        }

        .navbar::after {
            height: 18px;
            bottom: -18px;
        }

        .nav-link::after {
            display: none;
        }

        .navbar-collapse {
            margin-top: 0.75rem;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 1rem;
            padding: 0.75rem 0.75rem 0.9rem;
            box-shadow: 0 18px 40px rgba(15, 23, 42, 0.15);
        }

        .nav-item {
            border-bottom: 1px solid rgba(15, 23, 42, 0.06);
            margin-bottom: 0.35rem;
            padding-bottom: 0.35rem;
        }

        .nav-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .nav-link {
            padding: 0.65rem 0.8rem !important;
            margin: 0;
            border-radius: 0.75rem;
        }

        .language-switcher {
            justify-content: center;
            margin-top: 0.5rem;
            width: 100%;
        }

        .nav-link.active::before {
            display: none;
        }
    }

    /* Desktop - Hide language text, show only icon */
    @media (min-width: 992px) {
        .language-switcher span {
            display: none;
        }

        .language-switcher {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 !important;
        }
    }

    /* Smooth Scroll */
    html {
        scroll-behavior: smooth;
    }

    /* Animation for navbar on page load */
    @keyframes slideDown {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const toggler = document.querySelector('.navbar-toggler');

        // Add scrolled class to navbar on scroll
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }, {
                passive: true
            });
        }

        // Close mobile menu when clicking outside
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

        // Smooth scroll for on-page anchor links
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

                // Close nav on mobile after clicking anchor
                if (navbarCollapse && navbarCollapse.classList.contains('show') && toggler) {
                    toggler.click();
                }
            });
        });
    });
</script>