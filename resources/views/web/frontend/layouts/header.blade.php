<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark  sticky-top">
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
                        {{ __('site.shared.Home') }}
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
    /* Enhanced Navbar Styles */
    .navbar {
        transition: all 0.3s ease;
    }

    .navbar-brand:hover {
        opacity: 0.9;
        transform: scale(1.02);
        transition: all 0.3s ease;
    }

    .nav-link {
        position: relative;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .nav-link:hover {
        color: #fff !important;
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 0.375rem;
    }

    .nav-link.active {
        color: #fff !important;
        background-color: rgba(255, 255, 255, 0.15);
        border-radius: 0.375rem;
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: 0;

            {
                {
                app()->getLocale()==='ar' ? 'right': 'left'
            }
        }

        : 50%;

        transform: translateX({
                {
                app()->getLocale()==='ar' ? '50%' : '-50%'
            }
        });
    width: 30px;
    height: 2px;
    background-color: #fff;
    border-radius: 2px;
    }

    /* Language Switcher Styles */
    .language-switcher {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 0.375rem;
        cursor: pointer;
    }

    .language-switcher:hover {
        background-color: rgba(255, 255, 255, 0.2);
        transform: scale(1.05);
    }

    .language-switcher i {
        transition: transform 0.3s ease;
    }

    .language-switcher:hover i {
        transform: rotate(180deg);
    }

    /* RTL Support */
    [dir="rtl"] .navbar-nav {
        text-align: right;
    }

    /* Mobile Responsive */
    @media (max-width: 991.98px) {
        .nav-link.active::after {
            display: none;
        }

        .navbar-collapse {
            margin-top: 1rem;
        }

        .nav-item {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-item:last-child {
            border-bottom: none;
        }

        .language-switcher {
            justify-content: center;
        }
    }

    /* Desktop - Hide text, show only icon */
    @media (min-width: 992px) {
        .language-switcher span {
            display: none;
        }

        .language-switcher {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 !important;
        }
    }
</style>