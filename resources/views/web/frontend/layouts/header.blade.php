<!-- Navbar Start -->
<nav class="navbar-modern" role="navigation" aria-label="Main navigation">
    <div class="navbar-container">
        <!-- Logo -->
        <a href="{{ route('site.home') }}" class="navbar-logo " aria-label="{{ __('site.shared.Home') ?? 'Home' }}">
            <img src="{{ public_storage(settings('site_logo')) }}"
                alt="{{ settings('site_name') ?? 'Website' }}"
                width="50"
                height="50"
                class="logo-img shadow-sm"
                loading="lazy">
            <span class="logo-text">
                {{ settings('site_name') ?? 'Website' }}
            </span>
        </a>

        <!-- Desktop Navigation -->
        <ul class="navbar-menu-desktop">
            <li>
                <a href="{{ route('site.home') }}"
                    class="nav-link {{ request()->routeIs('site.home') ? 'active' : '' }}"
                    @if(request()->routeIs('site.home')) aria-current="page" @endif>
                    {{ __('site.shared.Home') ?? 'Home' }}
                </a>
            </li>
            <li>
                <a href="{{ route('site.about') }}"
                    class="nav-link {{ request()->routeIs('site.about') ? 'active' : '' }}"
                    @if(request()->routeIs('site.about')) aria-current="page" @endif>
                    {{ __('site.shared.About Us') }}
                </a>
            </li>
            <li>
                <a href="{{ route('site.services') }}"
                    class="nav-link {{ request()->routeIs('site.services') ? 'active' : '' }}"
                    @if(request()->routeIs('site.services')) aria-current="page" @endif>
                    {{ __('site.shared.Services') }}
                </a>
            </li>
            <li>
                <a href="{{ route('site.blog') }}"
                    class="nav-link {{ request()->routeIs('site.blog') ? 'active' : '' }}"
                    @if(request()->routeIs('site.blog')) aria-current="page" @endif>
                    {{ __('site.shared.Blogs') }}
                </a>
            </li>
            <li>
                <a href="{{ route('site.contact') }}"
                    class="nav-link {{ request()->routeIs('site.contact') ? 'active' : '' }}"
                    @if(request()->routeIs('site.contact')) aria-current="page" @endif>
                    {{ __('site.shared.Contact Us') }}
                </a>
            </li>
        </ul>

        <!-- Right Side Actions -->
        <div class="navbar-actions">
            <!-- Language Switcher -->
            @php
            $currentLocale = app()->getLocale();
            $alternateLocale = $currentLocale === 'ar' ? 'en' : 'ar';
            $alternateUrl = LaravelLocalization::getLocalizedURL($alternateLocale, null, [], true);
            @endphp
            <a href="{{ $alternateUrl }}"
                rel="alternate"
                hreflang="{{ $alternateLocale }}"
                class="lang-btn"
                title="{{ $alternateLocale === 'en' ? 'English' : 'العربية' }}"
                aria-label="{{ $alternateLocale === 'en' ? 'Switch to English' : 'التبديل إلى العربية' }}">
                <i class="bi bi-globe2"></i>
                <span class="lang-text">{{ $alternateLocale === 'en' ? 'EN' : 'ع' }}</span>
            </a>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle"
                type="button"
                aria-label="{{ __('site.shared.Toggle navigation') }}"
                aria-expanded="false"
                aria-controls="mobileMenu">
                <span class="hamburger">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </span>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-overlay" id="mobileOverlay"></div>

    <!-- Mobile Menu Sidebar -->
    <div class="mobile-menu" id="mobileMenu">
        <div class="mobile-menu-header">
            <a href="{{ route('site.home') }}" class="mobile-logo">
                <img src="{{ public_storage(settings('site_logo')) }}"
                    alt="{{ settings('site_name') ?? 'Website' }}"
                    width="36"
                    height="36"
                    class="logo-img"
                    loading="lazy">
                <span class="logo-text">{{ settings('site_name') ?? 'Website' }}</span>
            </a>
            <button class="menu-close" type="button" aria-label="Close menu">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <nav class="mobile-menu-nav">
            <a href="{{ route('site.home') }}"
                class="mobile-link {{ request()->routeIs('site.home') ? 'active' : '' }}">
                <i class="bi bi-house-door"></i>
                <span>{{ __('site.shared.Home') ?? 'Home' }}</span>
            </a>
            <a href="{{ route('site.about') }}"
                class="mobile-link {{ request()->routeIs('site.about') ? 'active' : '' }}">
                <i class="bi bi-info-circle"></i>
                <span>{{ __('site.shared.About Us') }}</span>
            </a>
            <a href="{{ route('site.services') }}"
                class="mobile-link {{ request()->routeIs('site.services') ? 'active' : '' }}">
                <i class="bi bi-grid"></i>
                <span>{{ __('site.shared.Services') }}</span>
            </a>
            <a href="{{ route('site.blog') }}"
                class="mobile-link {{ request()->routeIs('site.blog') ? 'active' : '' }}">
                <i class="bi bi-journal-text"></i>
                <span>{{ __('site.shared.Blogs') }}</span>
            </a>
            <a href="{{ route('site.contact') }}"
                class="mobile-link {{ request()->routeIs('site.contact') ? 'active' : '' }}">
                <i class="bi bi-envelope"></i>
                <span>{{ __('site.shared.Contact Us') }}</span>
            </a>
        </nav>

        <div class="mobile-menu-footer">
            <a href="{{ $alternateUrl }}" class="mobile-lang-switch">
                <i class="bi bi-globe2"></i>
                <span>{{ $alternateLocale === 'en' ? 'English' : 'العربية' }}</span>
            </a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<style>
    :root {
        --nav-primary: #004AAC;
        --nav-text: #0f172a;
        --nav-muted: #64748b;
        --nav-border: #e2e8f0;
        --nav-hover: #f1f5f9;
        --nav-active: #e0f2fe;
        --nav-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        --nav-shadow-lg: 0 10px 40px rgba(0, 0, 0, 0.1);
        --mobile-menu-width: 320px;
        --transition-speed: 0.3s;
        --transition-ease: cubic-bezier(0.4, 0, 0.2, 1);
    }

    * {
        -webkit-tap-highlight-color: transparent;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        padding-top: 70px;
    }

    @media (prefers-reduced-motion: reduce) {
        html {
            scroll-behavior: auto;
        }

        * {
            transition: none !important;
            animation: none !important;
        }
    }

    /* ========== Main Navbar ========== */
    .navbar-modern {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border-bottom: 1px solid var(--nav-border);
        z-index: 1000;
        transition: all var(--transition-speed) var(--transition-ease);
    }

    .navbar-modern.scrolled {
        background: rgba(255, 255, 255, 0.95);
        box-shadow: var(--nav-shadow-lg);
    }

    .navbar-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 32px;
    }

    /* ========== Logo ========== */
    .navbar-logo {
        display: flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        color: var(--nav-text);
        font-weight: 600;
        font-size: 18px;
        transition: opacity var(--transition-speed) var(--transition-ease);
        flex-shrink: 0;
    }

    .navbar-logo:hover {
        opacity: 0.8;
    }

    .logo-img {
        border-radius: 50%;
        object-fit: cover;
        transition: transform var(--transition-speed) var(--transition-ease);
    }

    .navbar-logo:hover .logo-img {
        transform: scale(1.05);
    }

    .logo-text {
        white-space: nowrap;
    }

    /* ========== Desktop Menu ========== */
    .navbar-menu-desktop {
        display: none;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 8px;
        flex: 1;
        justify-content: center;
    }

    .navbar-menu-desktop .nav-link {
        position: relative;
        display: block;
        padding: 8px 16px;
        color: var(--nav-muted);
        text-decoration: none;
        font-weight: 500;
        font-size: 15px;
        border-radius: 8px;
        transition: all 0.2s var(--transition-ease);
        white-space: nowrap;
    }

    .navbar-menu-desktop .nav-link:hover {
        color: var(--nav-text);
        background: var(--nav-hover);
    }

    .navbar-menu-desktop .nav-link.active::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 16px;
        right: 16px;
        height: 2px;
        background: var(--nav-primary);
        border-radius: 2px;
    }

    .menu-toggle.active .hamburger {
        display: none !important;
    }

    @media (min-width: 1024px) {
        .navbar-menu-desktop {
            display: flex;
        }
    }

    /* ========== Navbar Actions ========== */
    .navbar-actions {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .lang-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        width: 44px;
        height: 44px;
        border: 1px solid var(--nav-border);
        border-radius: 10px;
        background: white;
        color: var(--nav-text);
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        transition: all 0.2s var(--transition-ease);
        overflow: hidden;
    }

    .lang-btn:hover {
        background: var(--nav-hover);
        border-color: var(--nav-muted);
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .lang-text {
        display: none;
    }

    @media (min-width: 1024px) {
        .lang-btn {
            width: auto;
            padding: 0 14px;
        }

        .lang-text {
            display: inline;
            font-size: 14px;
        }
    }

    /* ========== Hamburger Menu ========== */
    .menu-toggle {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 44px;
        height: 44px;
        border: none;
        background: none;
        cursor: pointer;
        padding: 0;
        z-index: 1002;
    }

    @media (min-width: 1024px) {
        .menu-toggle {
            display: none;
        }
    }

    .hamburger {
        position: relative;
        width: 24px;
        height: 18px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .hamburger-line {
        width: 100%;
        height: 2px;
        background: var(--nav-text);
        border-radius: 2px;
        transition: all var(--transition-speed) var(--transition-ease);
    }

    .menu-toggle.active .hamburger-line:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .menu-toggle.active .hamburger-line:nth-child(2) {
        opacity: 0;
    }

    .menu-toggle.active .hamburger-line:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }

    /* ========== Mobile Menu Overlay ========== */
    .mobile-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        opacity: 0;
        visibility: hidden;
        transition: all var(--transition-speed) var(--transition-ease);
        z-index: 999;
    }

    .mobile-overlay.active {
        opacity: 1;
        visibility: visible;
    }

    @media (min-width: 1024px) {
        .mobile-overlay {
            display: none;
        }
    }

    /* ========== Mobile Menu Sidebar ========== */
    .mobile-menu {
        position: fixed;
        top: 0;
        right: 0;
        width: var(--mobile-menu-width);
        max-width: 85vw;
        height: 100vh;
        background: white;
        box-shadow: -4px 0 24px rgba(0, 0, 0, 0.15);
        transform: translateX(100%);
        transition: transform var(--transition-speed) var(--transition-ease);
        z-index: 1001;
        display: flex;
        flex-direction: column;
        overflow-y: auto;
    }

    .mobile-menu.active {
        transform: translateX(0);
    }

    @media (min-width: 1024px) {
        .mobile-menu {
            display: none;
        }
    }

    /* RTL Support */
    [dir="rtl"] .mobile-menu {
        right: auto;
        left: 0;
        transform: translateX(-100%);
        box-shadow: 4px 0 24px rgba(0, 0, 0, 0.15);
    }

    [dir="rtl"] .mobile-menu.active {
        transform: translateX(0);
    }

    /* ========== Mobile Menu Header ========== */
    .mobile-menu-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 24px;
        border-bottom: 1px solid var(--nav-border);
    }

    .mobile-logo {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        color: var(--nav-text);
        font-weight: 600;
        font-size: 16px;
    }

    .menu-close {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border: none;
        background: var(--nav-hover);
        border-radius: 8px;
        cursor: pointer;
        font-size: 18px;
        color: var(--nav-text);
        transition: all 0.2s var(--transition-ease);
    }

    .menu-close:hover {
        background: var(--nav-border);
    }

    /* ========== Mobile Navigation ========== */
    .mobile-menu-nav {
        flex: 1;
        padding: 24px 16px;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .mobile-link {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 14px 16px;
        color: var(--nav-muted);
        text-decoration: none;
        font-weight: 500;
        font-size: 16px;
        border-radius: 10px;
        transition: all 0.2s var(--transition-ease);
    }

    .mobile-link i {
        font-size: 20px;
        width: 24px;
        text-align: center;
    }

    .mobile-link:hover {
        background: var(--nav-hover);
        color: var(--nav-text);
        transform: translateX(-2px);
    }

    [dir="rtl"] .mobile-link:hover {
        transform: translateX(2px);
    }

    .mobile-link.active {
        background: var(--nav-active);
        color: var(--nav-primary);
        font-weight: 600;
    }

    /* ========== Mobile Menu Footer ========== */
    .mobile-menu-footer {
        padding: 20px 24px;
        border-top: 1px solid var(--nav-border);
    }

    .mobile-lang-switch {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        padding: 12px;
        border: 1px solid var(--nav-border);
        border-radius: 10px;
        background: var(--nav-hover);
        color: var(--nav-text);
        text-decoration: none;
        font-weight: 500;
        font-size: 15px;
        transition: all 0.2s var(--transition-ease);
    }

    .mobile-lang-switch:hover {
        background: var(--nav-border);
        border-color: var(--nav-muted);
    }

    /* ========== Body Lock (prevent scroll when menu open) ========== */
    body.menu-open {
        overflow: hidden;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar-modern');
        const menuToggle = document.querySelector('.menu-toggle');
        const mobileMenu = document.querySelector('.mobile-menu');
        const mobileOverlay = document.querySelector('.mobile-overlay');
        const menuClose = document.querySelector('.menu-close');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        // Navbar scroll effect
        function handleScroll() {
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        }

        window.addEventListener('scroll', handleScroll, {
            passive: true
        });
        handleScroll();

        // Toggle mobile menu
        function toggleMenu(open) {
            const isOpen = open ?? !mobileMenu.classList.contains('active');

            if (isOpen) {
                mobileMenu.classList.add('active');
                mobileOverlay.classList.add('active');
                menuToggle.classList.add('active');
                document.body.classList.add('menu-open');
                menuToggle.setAttribute('aria-expanded', 'true');
            } else {
                mobileMenu.classList.remove('active');
                mobileOverlay.classList.remove('active');
                menuToggle.classList.remove('active');
                document.body.classList.remove('menu-open');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        }

        menuToggle?.addEventListener('click', () => toggleMenu());
        menuClose?.addEventListener('click', () => toggleMenu(false));
        mobileOverlay?.addEventListener('click', () => toggleMenu(false));

        // Close menu when clicking on a link
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                toggleMenu(false);
            });
        });

        // Close menu on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                toggleMenu(false);
            }
        });

        // Smooth scroll with offset
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (!href || href === '#') return;

                const target = document.querySelector(href);
                if (!target) return;

                e.preventDefault();

                const navbarHeight = navbar.offsetHeight;
                const targetPosition = target.getBoundingClientRect().top + window.scrollY - navbarHeight - 16;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });

                toggleMenu(false);
            });
        });
    });
</script>