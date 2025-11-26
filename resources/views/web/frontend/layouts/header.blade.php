<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top border-bottom navbar-modern"
    role="navigation"
    aria-label="Main navigation">
    <div class="container">
        <!-- Logo -->
        <a href="{{ route('site.home') }}" class="navbar-brand d-flex align-items-center py-2">
            <img src="{{ public_storage(settings('site_logo')) }}"
                alt="{{ settings('site_name') ?? 'Website' }}"
                width="42"
                height="42"
                class="rounded-circle {{ app()->getLocale() === 'ar' ? 'ms-2' : 'me-2' }}"
                loading="lazy">
            <span class="fw-semibold text-body fs-5 d-none d-sm-inline">
                {{ settings('site_name') ?? 'Website' }}
            </span>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler"
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
                        class="nav-link nav-link-modern px-3 @if(request()->routeIs('site.home')) active fw-semibold @endif"
                        @if(request()->routeIs('site.home')) aria-current="page" @endif>
                        <i class="bi bi-house-door-fill {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.Home') ?? 'Home' }}
                    </a>
                </li>

                <!-- About -->
                <li class="nav-item">
                    <a href="{{ route('site.about') }}"
                        class="nav-link nav-link-modern px-3 @if(request()->routeIs('site.about')) active fw-semibold @endif"
                        @if(request()->routeIs('site.about')) aria-current="page" @endif>
                        <i class="bi bi-people-fill {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.About Us') }}
                    </a>
                </li>

                <!-- Services -->
                <li class="nav-item">
                    <a href="{{ route('site.services') }}"
                        class="nav-link nav-link-modern px-3 @if(request()->routeIs('site.services')) active fw-semibold @endif"
                        @if(request()->routeIs('site.services')) aria-current="page" @endif>
                        <i class="bi bi-briefcase-fill {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.Services') }}
                    </a>
                </li>

                <!-- Blog -->
                <li class="nav-item">
                    <a href="{{ route('site.blog') }}"
                        class="nav-link nav-link-modern px-3 @if(request()->routeIs('site.blog')) active fw-semibold @endif"
                        @if(request()->routeIs('site.blog')) aria-current="page" @endif>
                        <i class="bi bi-newspaper {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.Blogs') }}
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a href="{{ route('site.contact') }}"
                        class="nav-link nav-link-modern px-3 @if(request()->routeIs('site.contact')) active fw-semibold @endif"
                        @if(request()->routeIs('site.contact')) aria-current="page" @endif>
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
                        class="nav-link nav-link-modern px-3 d-flex align-items-center language-switcher"
                        title="{{ $alternateLocale === 'en' ? 'English' : 'العربية' }}"
                        aria-label="{{ $alternateLocale === 'en' ? 'Switch to English' : 'التبديل إلى العربية' }}">
                        <i class="bi bi-globe2 fs-5" aria-hidden="true"></i>
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
        --nav-text: rgba(15, 23, 42, 0.8);
        --nav-text-muted: rgba(15, 23, 42, 0.65);
        --nav-primary: #0d6efd;
        --nav-radius-pill: 999px;
    }

    /* Modern white navbar, no shadow */
    .navbar-modern {
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        background-color: rgba(255, 255, 255, 0.96) !important;
        border-bottom: 1px solid rgba(15, 23, 42, 0.06) !important;
        padding-top: 0.65rem;
        padding-bottom: 0.65rem;
        transition: padding 0.25s ease, background-color 0.25s ease, border-color 0.25s ease;
    }

    /* عند السكرول تخليه كأنها كومباكت شوية */
    .navbar-modern.navbar-compact {
        background-color: rgba(255, 255, 255, 0.98) !important;
        border-bottom-color: rgba(15, 23, 42, 0.1) !important;
        padding-top: 0.4rem;
        padding-bottom: 0.4rem;
    }

    /* Logo */
    .navbar-brand img {
        border: 1px solid rgba(15, 23, 42, 0.1);
    }

    /* Links */
    .nav-link-modern {
        position: relative;
        color: var(--nav-text-muted) !important;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 0.25rem;
        border-radius: var(--nav-radius-pill);
        padding-top: 0.45rem;
        padding-bottom: 0.45rem;
        transition: color 0.2s ease, background-color 0.2s ease, transform 0.2s ease;
    }

    .nav-link-modern i {
        font-size: 1.05rem;
        transition: transform 0.2s ease, color 0.2s ease;
        color: var(--nav-text-muted);
    }

    .nav-link-modern:hover,
    .nav-link-modern:focus-visible {
        color: var(--nav-primary) !important;
        background-color: rgba(13, 110, 253, 0.06);
        transform: translateY(-1px);
    }

    .nav-link-modern:hover i,
    .nav-link-modern:focus-visible i {
        color: var(--nav-primary);
        transform: translateY(-1px);
    }

    /* Underline effect */
    .nav-link-modern::after {
        content: "";
        position: absolute;
        left: 50%;
        bottom: 0.1rem;
        width: 0;
        height: 2px;
        background-color: var(--nav-primary);
        border-radius: 999px;
        transform: translateX(-50%);
        transition: width 0.2s ease;
    }

    .nav-link-modern:hover::after,
    .nav-link-modern:focus-visible::after {
        width: 60%;
    }

    /* Active State */
    .nav-link-modern.active {
        color: var(--nav-primary) !important;
        font-weight: 600;
        background-color: rgba(13, 110, 253, 0.06);
    }

    .nav-link-modern.active::after {
        width: 60%;
    }

    /* RTL tweak for icons margin already handled by classes, بس هنا لو حابب تغييرات إضافية */
    [dir="rtl"] .navbar-nav {
        text-align: right;
    }

    /* Language switcher button */
    .language-switcher {
        border-radius: var(--nav-radius-pill);
        border: 1px solid rgba(13, 110, 253, 0.4);
        color: var(--nav-primary) !important;
        background: rgba(13, 110, 253, 0.04);
        padding-inline: 0.85rem !important;
    }

    .language-switcher i {
        transition: transform 0.4s ease;
    }

    .language-switcher:hover,
    .language-switcher:focus-visible {
        background: rgba(13, 110, 253, 0.1);
    }

    .language-switcher:hover i,
    .language-switcher:focus-visible i {
        transform: rotate(180deg);
    }

    /* Desktop: show الأيقونة بس */
    @media (min-width: 992px) {
        .language-switcher {
            width: 42px;
            height: 42px;
            padding-inline: 0 !important;
            justify-content: center;
        }

        .language-switcher span {
            display: none;
        }
    }

    /* Mobile adjustments */
    @media (max-width: 991.98px) {
        .navbar-modern {
            background-color: #ffffff !important;
        }

        .navbar-collapse {
            margin-top: 0.75rem;
            padding: 0.75rem;
            border-radius: 0.75rem;
            border: 1px solid rgba(15, 23, 42, 0.06);
            background-color: #ffffff;
        }

        .nav-item {
            border-bottom: 1px solid rgba(15, 23, 42, 0.05);
            padding-bottom: 0.35rem;
            margin-bottom: 0.35rem;
        }

        .nav-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .nav-link-modern {
            width: 100%;
            border-radius: 0.75rem;
        }

        .nav-link-modern::after {
            display: none;
        }
    }

    /* Smooth scroll */
    html {
        scroll-behavior: smooth;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar-modern');
        const navbarCollapse = document.querySelector('.navbar-collapse');
        const toggler = document.querySelector('.navbar-toggler');

        // Compact mode on scroll (بدون شادو)
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 40) {
                    navbar.classList.add('navbar-compact');
                } else {
                    navbar.classList.remove('navbar-compact');
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

        // Smooth scroll for internal anchors + close menu on click
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

                if (navbarCollapse && navbarCollapse.classList.contains('show') && toggler) {
                    toggler.click();
                }
            });
        });
    });
</script>