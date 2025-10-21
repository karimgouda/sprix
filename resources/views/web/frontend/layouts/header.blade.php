<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm">
    <div class="container">
        <!-- Logo -->
        <a href="{{ route('site.home') }}" class="navbar-brand d-flex align-items-center py-2">
            <img src="{{ public_storage(settings('site_logo')) }}"
                alt="{{ settings('site_name') ?? 'Website' }}"
                width="45"
                height="45"
                class="rounded-circle {{ app()->getLocale() === 'ar' ? 'ms-2' : 'me-2' }}"
                loading="lazy">
            <span class="fw-bold text-white fs-5 d-none d-sm-inline">
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
                        {{ request()->routeIs('site.home') ? 'aria-current="page"' : '' }}>
                        <i class="bi bi-house-fill {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        home
                    </a>
                </li>

                <!-- About -->
                <li class="nav-item">
                    <a href="{{ route('site.about') }}"
                        class="nav-link px-3 {{ request()->routeIs('site.about') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.about') ? 'aria-current="page"' : '' }}>
                        <i class="bi bi-people-fill {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.About Us') }}
                    </a>
                </li>

                <!-- Services -->
                <li class="nav-item">
                    <a href="{{ route('site.services') }}"
                        class="nav-link px-3 {{ request()->routeIs('site.services') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.services') ? 'aria-current="page"' : '' }}>
                        <i class="bi bi-briefcase-fill {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.Services') }}
                    </a>
                </li>

                <!-- Blog -->
                <li class="nav-item">
                    <a href="{{ route('site.blog') }}"
                        class="nav-link px-3 {{ request()->routeIs('site.blog') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.blog') ? 'aria-current="page"' : '' }}>
                        <i class="bi bi-newspaper {{ app()->getLocale() === 'ar' ? 'ms-1' : 'me-1' }}"></i>
                        {{ __('site.shared.Blogs') }}
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a href="{{ route('site.contact') }}"
                        class="nav-link px-3 {{ request()->routeIs('site.contact') ? 'active fw-semibold' : '' }}"
                        {{ request()->routeIs('site.contact') ? 'aria-current="page"' : '' }}>
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
                        title="{{ $alternateLocale === 'en' ? 'English' : 'العربية' }}">
                        <i class="bi bi-globe fs-5"></i>
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
    /* Navbar Base Styles */
    .navbar {
        background: linear-gradient(135deg, rgba(13, 110, 253, 0.95) 0%, rgba(10, 88, 202, 0.95) 100%);
        backdrop-filter: blur(10px);
        transition: all 0.4s ease;
        padding: 0.5rem 0;
    }

    .navbar.scrolled {
        background: linear-gradient(135deg, rgba(13, 110, 253, 0.98) 0%, rgba(10, 88, 202, 0.98) 100%);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    /* Logo Styles */
    .navbar-brand {
        transition: all 0.3s ease;
    }

    .navbar-brand:hover {
        opacity: 0.9;
        transform: scale(1.05);
    }

    .navbar-brand img {
        transition: all 0.3s ease;
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .navbar-brand:hover img {
        border-color: rgba(255, 255, 255, 0.5);
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.3);
    }

    /* Nav Links */
    .nav-link {
        position: relative;
        color: rgba(255, 255, 255, 0.9) !important;
        font-weight: 500;
        transition: all 0.3s ease;
        margin: 0 0.25rem;
    }

    .nav-link i {
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }



    /* Language Switcher */
    .language-switcher {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.15) 0%, rgba(255, 255, 255, 0.1) 100%);
        border-radius: 0.5rem;
        cursor: pointer;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .language-switcher:hover {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.25) 0%, rgba(255, 255, 255, 0.15) 100%);
        transform: scale(1.1);
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
        border-color: rgba(255, 255, 255, 0.4);
    }

    .language-switcher i {
        transition: transform 0.6s ease;
    }

    .language-switcher:hover i {
        transform: rotate(360deg);
    }

    /* Navbar Toggler */
    .navbar-toggler {
        border: 2px solid rgba(255, 255, 255, 0.3);
        padding: 0.5rem 0.75rem;
        transition: all 0.3s ease;
    }

    .navbar-toggler:hover {
        background-color: rgba(255, 255, 255, 0.1);
        border-color: rgba(255, 255, 255, 0.5);
    }

    .navbar-toggler:focus {
        box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
    }

    /* RTL Support */
    [dir="rtl"] .navbar-nav {
        text-align: right;
    }

    [dir="rtl"] .nav-link.active::after {
        right: 50%;
        left: auto;
    }

    /* Mobile Responsive */
    @media (max-width: 991.98px) {
        .navbar {
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.98) 0%, rgba(10, 88, 202, 0.98) 100%);
        }

        .nav-link.active::after {
            display: none;
        }

        .navbar-collapse {
            margin-top: 1rem;
            background: rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            padding: 1rem;
            backdrop-filter: blur(10px);
        }

        .nav-item {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            margin-bottom: 0.5rem;
            padding-bottom: 0.5rem;
        }

        .nav-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
        }

        .nav-link {
            padding: 0.75rem 1rem !important;
            margin: 0;
            border-radius: 0.375rem;
        }

        .language-switcher {
            justify-content: center;
            margin-top: 0.5rem;
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

    .navbar {
        animation: slideDown 0.5s ease-out;
    }

    /* Hover effect for all nav items */
    .nav-item {
        position: relative;
    }

    /* Active page indicator dot */
    .nav-link.active::before {
        content: '';
        position: absolute;
        top: 50%;

            {
                {
                app()->getLocale()==='ar' ? 'right': 'left'
            }
        }

        : 8px;
        transform: translateY(-50%);
        width: 4px;
        height: 4px;
        background-color: #fff;
        border-radius: 50%;
        opacity: 0.8;
    }
</style>

<script>
    // Add scrolled class to navbar on scroll
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');

        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const navbar = document.querySelector('.navbar-collapse');
            const toggler = document.querySelector('.navbar-toggler');

            if (navbar && navbar.classList.contains('show')) {
                if (!navbar.contains(event.target) && !toggler.contains(event.target)) {
                    toggler.click();
                }
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href !== '') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });
    });
</script>