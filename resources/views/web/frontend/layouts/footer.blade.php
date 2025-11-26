<!-- Footer Start -->
<footer class="footer-modern">
    <div class="footer-main">
        <div class="footer-container">
            <div class="footer-grid">

                <!-- Company Info -->
                <div class="footer-col footer-about">
                    <a href="{{ route('site.home') }}" class="footer-logo">
                        <img src="{{ public_storage(settings('site_logo')) }}"
                            alt="{{ settings('site_name') ?? 'Website' }}"
                            width="48"
                            height="48"
                            class="footer-logo-img"
                            loading="lazy">
                        <span class="footer-logo-text">{{ settings('site_name') ?? 'AI.Tech' }}</span>
                    </a>
                    <p class="footer-description">
                        {{ settings('site_description') ?? 'Empowering businesses with cutting-edge AI solutions and innovative technology for a smarter future.' }}
                    </p>
                    <div class="footer-social">
                        @if(settings('social_twitter'))
                        <a href="{{ settings('social_twitter') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="social-link"
                            aria-label="Twitter">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        @endif
                        @if(settings('social_facebook'))
                        <a href="{{ settings('social_facebook') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="social-link"
                            aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        @endif
                        @if(settings('social_youtube'))
                        <a href="{{ settings('social_youtube') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="social-link"
                            aria-label="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                        @endif
                        @if(settings('social_instagram'))
                        <a href="{{ settings('social_instagram') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="social-link"
                            aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        @endif
                        @if(settings('social_linkedin'))
                        <a href="{{ settings('social_linkedin') }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="social-link"
                            aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        @endif
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-col">
                    <h3 class="footer-title">{{ __('site.shared.Quick Links') ?? 'Quick Links' }}</h3>
                    <ul class="footer-links">
                        <li><a href="{{ route('site.home') }}">{{ __('site.shared.Home') ?? 'Home' }}</a></li>
                        <li><a href="{{ route('site.about') }}">{{ __('site.shared.About Us') }}</a></li>
                        <li><a href="{{ route('site.services') }}">{{ __('site.shared.Services') }}</a></li>
                        <li><a href="{{ route('site.blog') }}">{{ __('site.shared.Blogs') }}</a></li>
                        <li><a href="{{ route('site.contact') }}">{{ __('site.shared.Contact Us') }}</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div class="footer-col">
                    <h3 class="footer-title">{{ __('site.shared.Our Services') ?? 'Our Services' }}</h3>
                    <ul class="footer-links">
                        @foreach($footerServices as $service)
                        <li><a href="{{ route('site.services.details', $service->slug) }}">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="footer-col">
                    <h3 class="footer-title">{{ __('site.shared.Get In Touch') ?? 'Get In Touch' }}</h3>
                    <ul class="footer-contact">
                        @if(settings('address_'.app()->getLocale()))
                        <li>
                            <i class="bi bi-geo-alt-fill"></i>
                            <span>{{ settings('address_'.app()->getLocale()) }}</span>
                        </li>
                        @endif
                        @if(settings('phones'))
                        @foreach(settings('phones') as $phone)
                        <li>
                            <i class="bi bi-telephone-fill"></i>
                            <a href="tel:{{ $phone }}">{{ $phone }}</a>
                        </li>
                        @endforeach
                        @endif
                        @if(settings('emails'))
                        @foreach(settings('emails') as $email)
                        <li>
                            <i class="bi bi-envelope-fill"></i>
                            <a href="mailto:{{ $email }}">{{ $email }}</a>
                        </li>
                        @endforeach
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="footer-container">
            <div class="footer-bottom-content">
                <p class="footer-copyright">
                    &copy; {{ date('Y') }}
                    <a href="{{ route('site.home') }}">{{ settings('site_name') ?? 'AI.Tech' }}</a>.
                    {{ __('site.shared.All rights reserved') ?? 'All rights reserved' }}.
                </p>
                <ul class="footer-bottom-links">
                    <li><a href="{{ route('site.privacy-policy') }}">{{ __('site.shared.Privacy Policy') ?? 'Privacy Policy' }}</a></li>
                    <li><a href="#">{{ __('site.shared.Terms of Service') ?? 'Terms of Service' }}</a></li>
                    <li><a href="#">{{ __('site.shared.Cookies') ?? 'Cookies' }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- WhatsApp Float Button -->
@if(settings('whatsapp_number'))
<a href="https://wa.me/{{ settings('whatsapp_number') }}"
    target="_blank"
    rel="noopener noreferrer"
    class="whatsapp-float"
    aria-label="{{ __('site.shared.Contact us on WhatsApp') ?? 'Contact us on WhatsApp' }}">
    <i class="bi bi-whatsapp"></i>
    <span class="whatsapp-tooltip">{{ __('site.shared.Chat with us') ?? 'Chat with us' }}</span>
</a>
@endif

<!-- Scroll to Top Button -->
<button class="scroll-to-top"
    id="scrollToTop"
    aria-label="{{ __('site.shared.Scroll to top') ?? 'Scroll to top' }}">
    <i class="bi bi-arrow-up"></i>
</button>

<style>
    :root {
        --footer-bg: #0f172a;
        --footer-text: #94a3b8;
        --footer-heading: #f1f5f9;
        --footer-link-hover: #ffffff;
        --footer-border: #1e293b;
        --footer-primary: #004AAC;
        --footer-primary-light: #3b82f6;
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* ========== Footer Main ========== */
    .footer-modern {
        background: var(--footer-bg);
        color: var(--footer-text);
        margin-top: 80px;
    }

    .footer-main {
        padding: 60px 0 40px;
    }

    .footer-container {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 24px;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
    }

    @media (min-width: 640px) {
        .footer-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .footer-grid {
            grid-template-columns: 1.5fr 1fr 1fr 1fr;
            gap: 48px;
        }
    }

    /* ========== Footer Column ========== */
    .footer-col {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .footer-about {
        gap: 24px;
    }

    /* ========== Footer Logo ========== */
    .footer-logo {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        color: var(--footer-heading);
        font-weight: 700;
        font-size: 24px;
        transition: var(--transition);
    }

    .footer-logo:hover {
        opacity: 0.9;
    }

    .footer-logo-img {
        border-radius: 50%;
        border: 2px solid var(--footer-border);
        transition: var(--transition);
    }

    .footer-logo:hover .footer-logo-img {
        transform: scale(1.05);
        border-color: var(--footer-primary);
    }

    .footer-logo-text {
        background: linear-gradient(135deg, var(--footer-heading) 0%, var(--footer-primary-light) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .footer-description {
        font-size: 15px;
        line-height: 1.7;
        color: var(--footer-text);
        margin: 0;
    }

    /* ========== Footer Titles ========== */
    .footer-title {
        font-size: 16px;
        font-weight: 600;
        color: var(--footer-heading);
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        position: relative;
        padding-bottom: 12px;
    }

    .footer-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 2px;
        background: linear-gradient(90deg, var(--footer-primary), transparent);
        border-radius: 2px;
    }

    [dir="rtl"] .footer-title::after {
        left: auto;
        right: 0;
    }

    /* ========== Footer Links ========== */
    .footer-links {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .footer-links li a {
        color: var(--footer-text);
        text-decoration: none;
        font-size: 15px;
        transition: var(--transition);
        display: inline-flex;
        align-items: center;
        gap: 8px;
        position: relative;
    }

    .footer-links li a::before {
        content: "";
        width: 0;
        height: 2px;
        background: var(--footer-primary);
        position: absolute;
        bottom: -2px;
        left: 0;
        transition: var(--transition);
    }

    .footer-links li a:hover {
        color: var(--footer-link-hover);
        transform: translateX(4px);
    }

    [dir="rtl"] .footer-links li a:hover {
        transform: translateX(-4px);
    }

    .footer-links li a:hover::before {
        width: 100%;
    }

    /* ========== Footer Contact ========== */
    .footer-contact {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .footer-contact li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        font-size: 15px;
        line-height: 1.6;
    }

    .footer-contact li i {
        color: var(--footer-primary-light);
        font-size: 18px;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .footer-contact li a {
        color: var(--footer-text);
        text-decoration: none;
        transition: var(--transition);
    }

    .footer-contact li a:hover {
        color: var(--footer-link-hover);
    }

    /* ========== Social Links ========== */
    .footer-social {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        border-radius: 10px;
        background: var(--footer-border);
        color: var(--footer-text);
        text-decoration: none;
        font-size: 18px;
        transition: var(--transition);
    }

    .social-link:hover {
        background: var(--footer-primary);
        color: white;
        transform: translateY(-3px);
        box-shadow: 0 8px 16px rgba(59, 130, 246, 0.3);
    }

    /* ========== Footer Bottom ========== */
    .footer-bottom {
        border-top: 1px solid var(--footer-border);
        padding: 24px 0;
    }

    .footer-bottom-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 16px;
        text-align: center;
    }

    @media (min-width: 768px) {
        .footer-bottom-content {
            flex-direction: row;
            justify-content: space-between;
            text-align: left;
        }
    }

    .footer-copyright {
        margin: 0;
        font-size: 14px;
        color: var(--footer-text);
    }

    .footer-copyright a {
        color: var(--footer-heading);
        text-decoration: none;
        font-weight: 600;
        transition: var(--transition);
    }

    .footer-copyright a:hover {
        color: var(--footer-primary-light);
    }

    .footer-bottom-links {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 24px;
        flex-wrap: wrap;
        justify-content: center;
    }

    @media (min-width: 768px) {
        .footer-bottom-links {
            justify-content: flex-end;
        }
    }

    .footer-bottom-links li a {
        color: var(--footer-text);
        text-decoration: none;
        font-size: 14px;
        transition: var(--transition);
    }

    .footer-bottom-links li a:hover {
        color: var(--footer-link-hover);
    }

    /* ========== WhatsApp Float Button ========== */
    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, #25d366 0%, #128c7e 100%);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
        text-decoration: none;
        box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4);
        z-index: 999;
        transition: var(--transition);
        animation: whatsappPulse 2s infinite;
    }

    [dir="rtl"] .whatsapp-float {
        right: auto;
        left: 30px;
    }

    .whatsapp-float:hover {
        background: linear-gradient(135deg, #128c7e 0%, #25d366 100%);
        transform: scale(1.1);
        box-shadow: 0 12px 32px rgba(37, 211, 102, 0.5);
    }

    .whatsapp-float:hover .whatsapp-tooltip {
        opacity: 1;
        visibility: visible;
        transform: translateX(-8px);
    }

    [dir="rtl"] .whatsapp-float:hover .whatsapp-tooltip {
        transform: translateX(8px);
    }

    .whatsapp-tooltip {
        position: absolute;
        right: 70px;
        background: #1f2937;
        color: white;
        padding: 8px 16px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        white-space: nowrap;
        opacity: 0;
        visibility: hidden;
        transition: var(--transition);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    [dir="rtl"] .whatsapp-tooltip {
        right: auto;
        left: 70px;
    }

    .whatsapp-tooltip::after {
        content: "";
        position: absolute;
        right: -6px;
        top: 50%;
        transform: translateY(-50%);
        width: 0;
        height: 0;
        border-left: 6px solid #1f2937;
        border-top: 6px solid transparent;
        border-bottom: 6px solid transparent;
    }

    [dir="rtl"] .whatsapp-tooltip::after {
        right: auto;
        left: -6px;
        border-left: none;
        border-right: 6px solid #1f2937;
    }

    @keyframes whatsappPulse {

        0%,
        100% {
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4);
        }

        50% {
            box-shadow: 0 8px 24px rgba(37, 211, 102, 0.4),
                0 0 0 12px rgba(37, 211, 102, 0.1),
                0 0 0 24px rgba(37, 211, 102, 0.05);
        }
    }

    @media (max-width: 768px) {
        .whatsapp-float {
            width: 56px;
            height: 56px;
            font-size: 28px;
            bottom: 20px;
            right: 20px;
        }

        [dir="rtl"] .whatsapp-float {
            right: auto;
            left: 20px;
        }

        .whatsapp-tooltip {
            display: none;
        }
    }

    /* ========== Scroll to Top Button ========== */
    .scroll-to-top {
        position: fixed;
        bottom: 110px;
        right: 30px;
        width: 48px;
        height: 48px;
        background: var(--footer-primary);
        color: white;
        border: none;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        visibility: hidden;
        transform: translateY(20px);
        transition: var(--transition);
        box-shadow: 0 4px 16px rgba(0, 74, 172, 0.3);
        z-index: 998;
    }

    [dir="rtl"] .scroll-to-top {
        right: auto;
        left: 30px;
    }

    .scroll-to-top.visible {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .scroll-to-top:hover {
        background: var(--footer-primary-light);
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0, 74, 172, 0.4);
    }

    @media (max-width: 768px) {
        .scroll-to-top {
            width: 44px;
            height: 44px;
            font-size: 18px;
            bottom: 90px;
            right: 20px;
        }

        [dir="rtl"] .scroll-to-top {
            right: auto;
            left: 20px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .whatsapp-float,
        .scroll-to-top,
        .footer-links li a,
        .social-link {
            animation: none !important;
            transition: none !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const scrollToTopBtn = document.getElementById('scrollToTop');

        // Show/hide scroll to top button
        function toggleScrollButton() {
            if (window.scrollY > 400) {
                scrollToTopBtn?.classList.add('visible');
            } else {
                scrollToTopBtn?.classList.remove('visible');
            }
        }

        window.addEventListener('scroll', toggleScrollButton, {
            passive: true
        });
        toggleScrollButton();

        // Scroll to top functionality
        scrollToTopBtn?.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Animate footer items on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '0';
                    entry.target.style.transform = 'translateY(20px)';

                    setTimeout(() => {
                        entry.target.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);

                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe footer columns
        const footerCols = document.querySelectorAll('.footer-col');
        footerCols.forEach(col => observer.observe(col));
    });
</script>

@include('web.frontend.layouts.footer.scripts')
@include('web.frontend.layouts.footer.js')
