@extends('web.frontend.layout')

@section('title', __('site.shared.Home'))

@section('content')

<!-- Hero Section Start -->
<section class="hero-premium">
    <div class="hero-background">
        <div class="hero-gradient"></div>
        <div class="hero-pattern"></div>
        <div class="hero-shapes">
            <div class="hero-shape hero-shape-1"></div>
            <div class="hero-shape hero-shape-2"></div>
            <div class="hero-shape hero-shape-3"></div>
        </div>
    </div>

    <div class="hero-content-wrapper">
        <div class="hero-grid">
            <div class="hero-left" data-aos="fade-right">
                <span class="hero-badge">
                    <span class="badge-dot"></span>
                    {{ 'Spark' }}
                </span>
                <h1 class="hero-title">
                    {{ $slider->title }}
                </h1>
                <p class="hero-subtitle">
                    {{ $slider->description }}
                </p>
                <div class="hero-cta">
                    <a href="{{ route('site.about') }}" class="btn-premium btn-premium-filled">
                        <span>{{ __('site.Read More') }}</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a href="{{ route('site.contact') }}" class="btn-premium btn-premium-glass">
                        <span>{{ __('site.Contact Us') }}</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M2.5 6.66669L9.0755 11.0504C9.63533 11.4236 10.3647 11.4236 10.9245 11.0504L17.5 6.66669M4.16667 15H15.8333C16.7538 15 17.5 14.2538 17.5 13.3334V6.66669C17.5 5.74621 16.7538 5.00002 15.8333 5.00002H4.16667C3.24619 5.00002 2.5 5.74621 2.5 6.66669V13.3334C2.5 14.2538 3.24619 15 4.16667 15Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
                @if(count($heroStats) > 0)
                <div class="hero-stats">
                    @foreach($heroStats as $index => $stat)
                    <div class="stat-item" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                        <div class="stat-number">{{ $stat->number }}</div>
                        <div class="stat-label">{{ $stat->title }}</div>
                    </div>
                    @if(!$loop->last)
                    <div class="stat-divider"></div>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>

            <div class="hero-right" data-aos="fade-left" data-aos-delay="200">
                <div class="hero-image-container">
                    <div class="hero-image-wrapper">
                        <img src="{{ public_storage($slider->image) }}"
                            alt="{{ $slider->title }}"
                            class="hero-image"
                            loading="eager">
                        <div class="hero-image-glow"></div>
                    </div>
                    <div class="floating-card floating-card-1" data-aos="fade-up" data-aos-delay="400">
                        <div class="floating-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="floating-card-content">
                            <div class="floating-card-title">AI-Powered</div>
                            <div class="floating-card-subtitle">Smart Solutions</div>
                        </div>
                    </div>
                    <div class="floating-card floating-card-2" data-aos="fade-up" data-aos-delay="500">
                        <div class="floating-card-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="floating-card-content">
                            <div class="floating-card-title">Fast & Reliable</div>
                            <div class="floating-card-subtitle">24/7 Support</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Section Start -->
<section class="section-premium section-about">
    <div class="container-premium">
        <div class="about-layout">
            <div class="about-visual" data-aos="fade-right">
                <div class="about-image-frame">
                    <img src="{{ public_storage($about->image) }}"
                        alt="{{ $about->title_1 }}"
                        class="about-image"
                        loading="lazy">
                    <div class="about-pattern-overlay"></div>
                </div>
                <div class="about-decoration about-decoration-1"></div>
                <div class="about-decoration about-decoration-2"></div>
            </div>

            <div class="about-content" data-aos="fade-left">
                <span class="section-tag">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M8 1L10.472 5.99L16 6.83L12 10.72L12.944 16L8 13.41L3.056 16L4 10.72L0 6.83L5.528 5.99L8 1Z" fill="currentColor" />
                    </svg>
                    {{ __('site.shared.About Us') }}
                </span>
                <h2 class="section-heading">{{ $about->title_1 }}</h2>
                <div class="section-description">
                    <p>{{ $about->description_1 }}</p>
                    <p>{{ $about->description_2 }}</p>
                </div>

                <div class="features-grid">
                    @foreach(collect($about->title_2) as $index => $point)
                    <div class="feature-pill" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M16.6667 5L7.50002 14.1667L3.33335 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>{{ $point }}</span>
                    </div>
                    @endforeach
                </div>

                <div class="about-actions">
                    <a href="{{ route('site.about') }}" class="btn-premium btn-premium-filled">
                        <span>{{ __('site.Read More') }}</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <div class="social-buttons">
                        @if(settings('facebook'))
                        <a href="{{ settings('facebook') }}" class="social-btn" target="_blank" rel="noopener">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        @endif
                        @if(settings('twitter'))
                        <a href="{{ settings('twitter') }}" class="social-btn" target="_blank" rel="noopener">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        @endif
                        @if(settings('instagram'))
                        <a href="{{ settings('instagram') }}" class="social-btn" target="_blank" rel="noopener">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        @endif
                        @if(settings('linkedin'))
                        <a href="{{ settings('linkedin') }}" class="social-btn" target="_blank" rel="noopener">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Services Section Start -->
<section class="section-premium section-services">
    <div class="container-premium">
        <div class="section-intro" data-aos="fade-up">
            <span class="section-tag section-tag-center">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 1L10.472 5.99L16 6.83L12 10.72L12.944 16L8 13.41L3.056 16L4 10.72L0 6.83L5.528 5.99L8 1Z" fill="currentColor" />
                </svg>
                {{ __('site.Our Services') }}
            </span>
            <h2 class="section-heading section-heading-center">{{ __('site.service_title') }}</h2>
            <p class="section-lead">{{ __('site.service_description') }}</p>
        </div>

        <div class="services-showcase">
            @foreach($services as $index => $service)
            <div class="service-premium-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="service-card-inner">
                    <div class="service-icon-wrapper">
                        <div class="service-icon-bg"></div>
                        <svg class="service-icon" width="32" height="32" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="service-card-title">{{ $service->title ?? 'Service Title' }}</h3>
                    <p class="service-card-text">{{ $service->description ?? 'Service description' }}</p>
                    <a href="{{ route('site.services.details', $service->slug) }}" class="service-card-link">
                        <span>{{ __('site.Learn More') ?? 'Learn More' }}</span>
                        <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Blog Section Start -->
<section class="section-premium section-blog">
    <div class="container-premium">
        <div class="section-intro" data-aos="fade-up">
            <span class="section-tag section-tag-center">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 1L10.472 5.99L16 6.83L12 10.72L12.944 16L8 13.41L3.056 16L4 10.72L0 6.83L5.528 5.99L8 1Z" fill="currentColor" />
                </svg>
                {{ __('site.Sprix') }}
            </span>
            <h2 class="section-heading section-heading-center">{{ __('site.blog_title') }}</h2>
        </div>

        <div class="blog-masonry">
            @foreach($blogs as $index => $blog)
            <article class="blog-premium-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="blog-card-image">
                    <img src="{{ public_storage($blog->image) }}"
                        alt="{{ $blog->title }}"
                        loading="lazy">
                    <div class="blog-card-overlay"></div>
                </div>
                <div class="blog-card-body">
                    <h3 class="blog-card-title">{{ $blog->title }}</h3>
                    <p class="blog-card-excerpt">{{ Str::limit($blog->description, 120) }}</p>
                    <a href="{{ route('site.blog.details', $blog->slug) }}" class="blog-card-cta">
                        <span>{{ __('site.Read Article') ?? 'Read Article' }}</span>
                        <svg width="18" height="18" viewBox="0 0 20 20" fill="none">
                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- FAQ Section Start -->
<section class="section-premium section-faq">
    <div class="container-premium">
        <div class="section-intro" data-aos="fade-up">
            <span class="section-tag section-tag-center">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 1L10.472 5.99L16 6.83L12 10.72L12.944 16L8 13.41L3.056 16L4 10.72L0 6.83L5.528 5.99L8 1Z" fill="currentColor" />
                </svg>
                {{ __('site.Popular FAQs') }}
            </span>
            <h2 class="section-heading section-heading-center">{{ __('site.Frequently Asked Questions') }}</h2>
        </div>

        <div class="faq-premium-grid">
            @foreach($faqs as $index => $faq)
            <div class="faq-premium-item" data-aos="fade-up" data-aos-delay="{{ $index * 50 }}">
                <button class="faq-premium-trigger"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#faq-premium-{{ $faq->id }}">
                    <span class="faq-premium-question">{{ $faq->title }}</span>
                    <span class="faq-premium-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
                <div id="faq-premium-{{ $faq->id }}" class="faq-premium-answer collapse">
                    <div class="faq-premium-text">{{ $faq->description }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- FAQ Section End -->

<!-- Team Section Start -->
<section class="section-premium section-team">
    <div class="container-premium">
        <div class="section-intro" data-aos="fade-up">
            <span class="section-tag section-tag-center">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M8 1L10.472 5.99L16 6.83L12 10.72L12.944 16L8 13.41L3.056 16L4 10.72L0 6.83L5.528 5.99L8 1Z" fill="currentColor" />
                </svg>
                {{ __('site.Our Team') }}
            </span>
            <h2 class="section-heading section-heading-center">{{ __('site.Meet Our Experienced Team Members') }}</h2>
            <p class="section-lead">{{ __('site.team_description') }}</p>
        </div>

        <div class="team-premium-grid">
            @foreach($teams as $index => $member)
            <div class="team-premium-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="team-card-avatar">
                    <img src="{{ public_storage($member->image) }}"
                        alt="{{ $member->title }}"
                        loading="lazy">
                    <div class="team-card-status"></div>
                </div>
                <h3 class="team-card-name">{{ $member->title }}</h3>
                <p class="team-card-position">{{ $member->description }}</p>
                <div class="team-card-socials">
                    @if($member->video)
                    <a href="{{ $member->video }}" class="team-social-icon" target="_blank" rel="noopener">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    @endif
                    @if($member->progresses_titles)
                    <a href="{{ $member->progresses_titles }}" class="team-social-icon" target="_blank" rel="noopener">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    @endif
                    @if($member->progresses_percentages)
                    <a href="{{ $member->progresses_percentages }}" class="team-social-icon" target="_blank" rel="noopener">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                        </svg>
                    </a>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Testimonial Section End -->

@endsection

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50
        });

        // Initialize Owl Carousel for testimonials
        if (typeof $.fn.owlCarousel !== 'undefined') {
            $('.testimonials-slider').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                dots: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    1200: {
                        items: 3
                    }
                }
            });
        }

        // Smooth scroll for hero indicator
        document.querySelector('.scroll-indicator')?.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: window.innerHeight,
                behavior: 'smooth'
            });
        });

        // FAQ accordion animation
        document.querySelectorAll('.faq-premium-trigger').forEach(trigger => {
            trigger.addEventListener('click', function() {
                this.classList.toggle('active');
            });
        });
    });
</script>
@endpush

<style>
    :root {
        --color-primary: #004AAC;
        --color-primary-light: #3b82f6;
        --color-primary-dark: #002a6b;
        --color-secondary: #10b981;
        --color-text: #0f172a;
        --color-text-light: #64748b;
        --color-text-lighter: #94a3b8;
        --color-bg: #ffffff;
        --color-bg-alt: #f8fafc;
        --color-border: #e2e8f0;
        --color-glass: rgba(255, 255, 255, 0.7);

        --shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.05);
        --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.06);
        --shadow-md: 0 4px 16px rgba(0, 0, 0, 0.08);
        --shadow-lg: 0 8px 32px rgba(0, 0, 0, 0.12);
        --shadow-xl: 0 16px 48px rgba(0, 0, 0, 0.16);
        --shadow-2xl: 0 24px 64px rgba(0, 0, 0, 0.2);

        --radius-sm: 8px;
        --radius-md: 12px;
        --radius-lg: 16px;
        --radius-xl: 20px;
        --radius-2xl: 24px;
        --radius-full: 9999px;

        --transition-base: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        --transition-smooth: 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        color: var(--color-text);
        background: var(--color-bg);
        line-height: 1.6;
        overflow-x: hidden;
    }

    /* =============================================
   HERO SECTION - PREMIUM
============================================= */
    .hero-premium {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .hero-background {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .hero-gradient {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, #004AAC 0%, #002a6b 50%, #001a42 100%);
    }

    .hero-pattern {
        position: absolute;
        inset: 0;
        background-image:
            radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
            url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.5;
    }

    .hero-shapes {
        position: absolute;
        inset: 0;
        overflow: hidden;
    }

    .hero-shape {
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        animation: float 20s infinite ease-in-out;
    }

    .hero-shape-1 {
        top: 10%;
        left: 5%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.3) 0%, transparent 70%);
        animation-delay: 0s;
    }

    .hero-shape-2 {
        bottom: 15%;
        right: 10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(16, 185, 129, 0.2) 0%, transparent 70%);
        animation-delay: -7s;
    }

    .hero-shape-3 {
        top: 50%;
        left: 50%;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(168, 85, 247, 0.2) 0%, transparent 70%);
        animation-delay: -14s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        33% {
            transform: translate(30px, -30px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
    }

    .hero-content-wrapper {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 120px 24px 80px;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 60px;
        align-items: center;
    }

    @media (min-width: 1024px) {
        .hero-grid {
            grid-template-columns: 1.1fr 0.9fr;
            gap: 80px;
        }
    }

    .hero-left {
        text-align: center;
    }

    @media (min-width: 1024px) {
        .hero-left {
            text-align: left;
        }
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 24px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-radius: var(--radius-full);
        color: white;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 32px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .badge-dot {
        width: 8px;
        height: 8px;
        background: var(--color-secondary);
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.5;
            transform: scale(1.2);
        }
    }

    .hero-title {
        font-size: clamp(40px, 6vw, 72px);
        font-weight: 900;
        color: white;
        line-height: 1.1;
        margin-bottom: 24px;
        letter-spacing: -0.02em;
    }

    .hero-subtitle {
        font-size: clamp(17px, 2vw, 20px);
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.7;
        margin-bottom: 40px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    @media (min-width: 1024px) {
        .hero-subtitle {
            margin-left: 0;
            margin-right: 0;
        }
    }

    .hero-cta {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        justify-content: center;
        margin-bottom: 48px;
    }

    @media (min-width: 1024px) {
        .hero-cta {
            justify-content: flex-start;
        }
    }

    .btn-premium {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 16px 32px;
        border-radius: var(--radius-full);
        font-weight: 700;
        font-size: 16px;
        text-decoration: none;
        transition: all var(--transition-smooth);
        white-space: nowrap;
        border: 2px solid transparent;
    }

    .btn-premium-filled {
        background: white;
        color: var(--color-primary);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
    }

    .btn-premium-filled:hover {
        background: var(--color-bg-alt);
        transform: translateY(-4px);
        box-shadow: 0 20px 48px rgba(0, 0, 0, 0.3);
    }

    .btn-premium-glass {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(16px);
        color: white;
        border-color: rgba(255, 255, 255, 0.3);
    }

    .btn-premium-glass:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.5);
        transform: translateY(-4px);
    }

    .hero-stats {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 32px;
        padding: 32px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(16px);
        border-radius: var(--radius-xl);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    @media (min-width: 1024px) {
        .hero-stats {
            justify-content: flex-start;
            display: inline-flex;
        }
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 32px;
        font-weight: 800;
        color: white;
        line-height: 1;
        margin-bottom: 8px;
    }

    .stat-label {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        font-weight: 500;
    }

    .stat-divider {
        width: 1px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
    }

    .hero-right {
        position: relative;
    }

    .hero-image-container {
        position: relative;
    }

    .hero-image-wrapper {
        position: relative;
        border-radius: var(--radius-2xl);
        overflow: hidden;
        box-shadow: var(--shadow-2xl);
    }

    .hero-image {
        width: 100%;
        height: auto;
        display: block;
    }

    .hero-image-glow {
        position: absolute;
        inset: -40px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.4) 0%, transparent 70%);
        filter: blur(40px);
        z-index: -1;
    }

    .floating-card {
        position: absolute;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px 20px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(16px);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-xl);
        animation: floatCard 6s infinite ease-in-out;
    }

    .floating-card-1 {
        bottom: 20%;
        left: -10%;
        animation-delay: 0s;
    }

    .floating-card-2 {
        top: 20%;
        right: -10%;
        animation-delay: -3s;
    }

    @media (max-width: 768px) {
        .floating-card {
            display: none;
        }
    }

    @keyframes floatCard {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .floating-card-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
        border-radius: var(--radius-md);
        color: white;
    }

    .floating-card-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--color-text);
        line-height: 1.2;
    }

    .floating-card-subtitle {
        font-size: 13px;
        color: var(--color-text-light);
    }

    .hero-scroll {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
    }

    .scroll-indicator {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: var(--transition-base);
    }

    .scroll-indicator:hover {
        color: white;
    }

    .scroll-icon {
        width: 24px;
        height: 36px;
        border: 2px solid rgba(255, 255, 255, 0.5);
        border-radius: var(--radius-full);
        display: flex;
        justify-content: center;
        padding-top: 8px;
    }

    .scroll-dot {
        width: 4px;
        height: 8px;
        background: white;
        border-radius: var(--radius-full);
        animation: scrollDot 2s infinite;
    }

    @keyframes scrollDot {

        0%,
        100% {
            transform: translateY(0);
            opacity: 1;
        }

        50% {
            transform: translateY(12px);
            opacity: 0.3;
        }
    }

    /* =============================================
   COMMON SECTION STYLES
============================================= */
    .section-premium {
        padding: 100px 0;
        position: relative;
    }

    .container-premium {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 24px;
    }

    .section-intro {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 64px;
    }

    .section-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 20px;
        background: rgba(0, 74, 172, 0.08);
        border: 1px solid rgba(0, 74, 172, 0.15);
        border-radius: var(--radius-full);
        color: var(--color-primary);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .section-tag-center {
        display: inline-flex;
    }

    .section-heading {
        font-size: clamp(32px, 5vw, 56px);
        font-weight: 900;
        color: var(--color-text);
        line-height: 1.2;
        letter-spacing: -0.02em;
        margin-bottom: 20px;
    }

    .section-heading-center {
        text-align: center;
    }

    .section-lead {
        font-size: 18px;
        color: var(--color-text-light);
        line-height: 1.8;
        max-width: 700px;
        margin: 0 auto;
    }

    .section-description p {
        font-size: 17px;
        color: var(--color-text-light);
        line-height: 1.8;
        margin-bottom: 16px;
    }

    .section-description p:last-child {
        margin-bottom: 0;
    }

    /* =============================================
   ABOUT SECTION
============================================= */
    .section-about {
        background: var(--color-bg-alt);
    }

    .about-layout {
        display: grid;
        grid-template-columns: 1fr;
        gap: 64px;
        align-items: center;
    }

    @media (min-width: 1024px) {
        .about-layout {
            grid-template-columns: 1fr 1fr;
            gap: 80px;
        }
    }

    .about-visual {
        position: relative;
    }

    .about-image-frame {
        position: relative;
        border-radius: var(--radius-2xl);
        overflow: hidden;
        box-shadow: var(--shadow-2xl);
    }

    .about-image {
        width: 100%;
        height: auto;
        display: block;
    }

    .about-pattern-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, rgba(0, 74, 172, 0.1) 0%, transparent 100%);
        pointer-events: none;
    }

    .about-decoration {
        position: absolute;
        border-radius: 50%;
        z-index: -1;
    }

    .about-decoration-1 {
        top: -30px;
        left: -30px;
        width: 150px;
        height: 150px;
        background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
        opacity: 0.2;
        filter: blur(40px);
    }

    .about-decoration-2 {
        bottom: -30px;
        right: -30px;
        width: 200px;
        height: 200px;
        background: linear-gradient(135deg, var(--color-secondary), var(--color-primary-light));
        opacity: 0.2;
        filter: blur(50px);
    }

    .about-content {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .features-grid {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin: 16px 0;
    }

    .feature-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 18px;
        background: white;
        border: 1px solid var(--color-border);
        border-radius: var(--radius-full);
        font-size: 15px;
        font-weight: 600;
        color: var(--color-text);
        transition: var(--transition-base);
    }

    .feature-pill:hover {
        background: var(--color-primary);
        border-color: var(--color-primary);
        color: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    .feature-pill svg {
        flex-shrink: 0;
    }

    .about-actions {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 20px;
        margin-top: 16px;
    }

    .social-buttons {
        display: flex;
        gap: 12px;
    }

    .social-btn {
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: white;
        border: 2px solid var(--color-border);
        border-radius: var(--radius-md);
        color: var(--color-text-light);
        text-decoration: none;
        transition: var(--transition-base);
    }

    .social-btn:hover {
        background: var(--color-primary);
        border-color: var(--color-primary);
        color: white;
        transform: translateY(-2px);
        box-shadow: var(--shadow-md);
    }

    /* =============================================
   SERVICES SECTION
============================================= */
    .section-services {
        background: var(--color-bg);
    }

    .services-showcase {
        display: grid;
        grid-template-columns: 1fr;
        gap: 24px;
    }

    @media (min-width: 640px) {
        .services-showcase {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .services-showcase {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .service-premium-card {
        position: relative;
        background: white;
        border: 1px solid var(--color-border);
        border-radius: var(--radius-xl);
        overflow: hidden;
        transition: var(--transition-smooth);
    }

    .service-premium-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, transparent 0%, rgba(0, 74, 172, 0.03) 100%);
        opacity: 0;
        transition: var(--transition-smooth);
    }

    .service-premium-card:hover {
        border-color: var(--color-primary);
        box-shadow: var(--shadow-xl);
        transform: translateY(-8px);
    }

    .service-premium-card:hover::before {
        opacity: 1;
    }

    .service-card-inner {
        padding: 32px;
        position: relative;
        z-index: 1;
    }

    .service-icon-wrapper {
        position: relative;
        width: 72px;
        height: 72px;
        margin-bottom: 24px;
    }

    .service-icon-bg {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
        border-radius: var(--radius-lg);
        opacity: 0.1;
        transition: var(--transition-smooth);
    }

    .service-premium-card:hover .service-icon-bg {
        opacity: 1;
    }

    .service-icon {
        position: relative;
        z-index: 1;
        width: 100%;
        height: 100%;
        padding: 20px;
        color: var(--color-primary);
        transition: var(--transition-smooth);
    }

    .service-premium-card:hover .service-icon {
        color: white;
    }

    .service-card-title {
        font-size: 22px;
        font-weight: 800;
        color: var(--color-text);
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .service-card-text {
        font-size: 16px;
        color: var(--color-text-light);
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .service-card-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--color-primary);
        font-weight: 700;
        font-size: 15px;
        text-decoration: none;
        transition: var(--transition-base);
    }

    .service-card-link:hover {
        gap: 12px;
    }

    /* =============================================
   BLOG SECTION
============================================= */
    .section-blog {
        background: var(--color-bg-alt);
    }

    .blog-masonry {
        display: grid;
        grid-template-columns: 1fr;
        gap: 32px;
    }

    @media (min-width: 768px) {
        .blog-masonry {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1200px) {
        .blog-masonry {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .blog-premium-card {
        background: white;
        border-radius: var(--radius-xl);
        overflow: hidden;
        box-shadow: var(--shadow-sm);
        transition: var(--transition-smooth);
    }

    .blog-premium-card:hover {
        box-shadow: var(--shadow-xl);
        transform: translateY(-8px);
    }

    .blog-card-image {
        position: relative;
        padding-top: 66%;
        overflow: hidden;
    }

    .blog-card-image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition-smooth);
    }

    .blog-premium-card:hover .blog-card-image img {
        transform: scale(1.05);
    }

    .blog-card-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.4) 0%, transparent 50%);
    }

    .blog-card-body {
        padding: 28px;
    }

    .blog-card-title {
        font-size: 22px;
        font-weight: 800;
        color: var(--color-text);
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .blog-card-excerpt {
        font-size: 16px;
        color: var(--color-text-light);
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .blog-card-cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--color-primary);
        font-weight: 700;
        font-size: 15px;
        text-decoration: none;
        transition: var(--transition-base);
    }

    .blog-card-cta:hover {
        gap: 12px;
    }

    /* =============================================
   FAQ SECTION
============================================= */
    .section-faq {
        background: var(--color-bg);
    }

    .faq-premium-grid {
        max-width: 900px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .faq-premium-item {
        background: white;
        border: 1px solid var(--color-border);
        border-radius: var(--radius-lg);
        overflow: hidden;
        transition: var(--transition-base);
    }

    .faq-premium-item:hover {
        border-color: var(--color-primary);
        box-shadow: var(--shadow-md);
    }

    .faq-premium-trigger {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding: 24px 28px;
        background: transparent;
        border: none;
        cursor: pointer;
        transition: var(--transition-base);
    }

    .faq-premium-trigger:hover {
        background: var(--color-bg-alt);
    }

    .faq-premium-trigger.active .faq-premium-icon {
        transform: rotate(180deg);
    }

    .faq-premium-question {
        font-size: 18px;
        font-weight: 700;
        color: var(--color-text);
        text-align: left;
        line-height: 1.4;
    }

    .faq-premium-icon {
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        color: var(--color-primary);
        transition: var(--transition-base);
    }

    .faq-premium-answer {
        overflow: hidden;
    }

    .faq-premium-text {
        padding: 0 28px 24px;
        font-size: 16px;
        color: var(--color-text-light);
        line-height: 1.8;
    }

    /* =============================================
   TEAM SECTION
============================================= */
    .section-team {
        background: var(--color-bg-alt);
    }

    .team-premium-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 32px;
    }

    @media (min-width: 640px) {
        .team-premium-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .team-premium-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (min-width: 1400px) {
        .team-premium-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .team-premium-card {
        background: white;
        border: 1px solid var(--color-border);
        border-radius: var(--radius-xl);
        padding: 32px;
        text-align: center;
        transition: var(--transition-smooth);
    }

    .team-premium-card:hover {
        border-color: var(--color-primary);
        box-shadow: var(--shadow-xl);
        transform: translateY(-8px);
    }

    .team-card-avatar {
        position: relative;
        width: 120px;
        height: 120px;
        margin: 0 auto 20px;
    }

    .team-card-avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid var(--color-bg-alt);
        box-shadow: var(--shadow-md);
    }

    .team-card-status {
        position: absolute;
        bottom: 8px;
        right: 8px;
        width: 20px;
        height: 20px;
        background: var(--color-secondary);
        border: 3px solid white;
        border-radius: 50%;
    }

    .team-card-name {
        font-size: 20px;
        font-weight: 800;
        color: var(--color-text);
        margin-bottom: 8px;
    }

    .team-card-position {
        font-size: 14px;
        color: var(--color-text-light);
        margin-bottom: 20px;
    }

    .team-card-socials {
        display: flex;
        gap: 8px;
        justify-content: center;
    }

    .team-social-icon {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--color-bg-alt);
        border-radius: var(--radius-sm);
        color: var(--color-text-light);
        text-decoration: none;
        transition: var(--transition-base);
    }

    .team-social-icon:hover {
        background: var(--color-primary);
        color: white;
        transform: translateY(-2px);
    }

    /* =============================================
   TESTIMONIALS SECTION
============================================= */
    .section-testimonials {
        background: var(--color-bg);
    }

    .testimonials-slider {
        margin-top: 48px;
    }

    .testimonial-premium-card {
        background: white;
        border: 1px solid var(--color-border);
        border-radius: var(--radius-xl);
        padding: 36px;
        box-shadow: var(--shadow-sm);
        transition: var(--transition-base);
        margin: 16px;
    }

    .testimonial-premium-card:hover {
        box-shadow: var(--shadow-lg);
        border-color: var(--color-primary);
    }

    .testimonial-card-header {
        margin-bottom: 20px;
    }

    .testimonial-quote-icon {
        color: var(--color-primary);
        opacity: 0.15;
    }

    .testimonial-card-text {
        font-size: 17px;
        color: var(--color-text);
        line-height: 1.8;
        margin-bottom: 24px;
        font-style: italic;
    }

    .testimonial-card-author {
        display: flex;
        align-items: center;
        gap: 16px;
        margin-bottom: 16px;
    }

    .testimonial-author-avatar {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid var(--color-bg-alt);
    }

    .testimonial-author-name {
        font-size: 17px;
        font-weight: 800;
        color: var(--color-text);
        margin-bottom: 4px;
    }

    .testimonial-author-role {
        font-size: 14px;
        color: var(--color-text-light);
    }

    .testimonial-card-rating {
        display: flex;
        gap: 4px;
    }

    .testimonial-card-rating svg {
        color: #fbbf24;
    }

    /* =============================================
   OWL CAROUSEL CUSTOMIZATION
============================================= */
    .owl-carousel .owl-dots {
        margin-top: 40px;
        text-align: center;
    }

    .owl-carousel .owl-dot {
        display: inline-block;
        width: 12px;
        height: 12px;
        margin: 0 6px;
        background: var(--color-border);
        border-radius: 50%;
        transition: var(--transition-base);
    }

    .owl-carousel .owl-dot.active {
        background: var(--color-primary);
        width: 32px;
        border-radius: var(--radius-full);
    }

    .owl-carousel .owl-dot:hover {
        background: var(--color-primary-light);
    }

    /* =============================================
   RESPONSIVE & ANIMATIONS
============================================= */
    @media (prefers-reduced-motion: reduce) {

        *,
        *::before,
        *::after {
            animation: none !important;
            transition: none !important;
        }
    }

    @media (max-width: 768px) {
        .section-premium {
            padding: 60px 0;
        }

        .section-intro {
            margin-bottom: 48px;
        }

        .hero-content-wrapper {
            padding: 100px 20px 60px;
        }
    }

    /* =============================================
   HERO SECTION - PREMIUM (base)
============================================= */
    .hero-premium {
        position: relative;
        min-height: 100vh;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .hero-background {
        position: absolute;
        inset: 0;
        z-index: 0;
    }

    .hero-gradient {
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, #004AAC 0%, #002a6b 50%, #001a42 100%);
    }

    .hero-pattern {
        position: absolute;
        inset: 0;
        background-image:
            radial-gradient(circle at 25% 25%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 75% 75%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
            url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.5;
    }

    .hero-shapes {
        position: absolute;
        inset: 0;
        overflow: hidden;
        pointer-events: none;
    }

    .hero-shape {
        position: absolute;
        border-radius: 50%;
        filter: blur(60px);
        animation: float 20s infinite ease-in-out;
    }

    .hero-shape-1 {
        top: 10%;
        left: 5%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.3) 0%, transparent 70%);
        animation-delay: 0s;
    }

    .hero-shape-2 {
        bottom: 15%;
        right: 10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(16, 185, 129, 0.2) 0%, transparent 70%);
        animation-delay: -7s;
    }

    .hero-shape-3 {
        top: 50%;
        left: 50%;
        width: 300px;
        height: 300px;
        background: radial-gradient(circle, rgba(168, 85, 247, 0.2) 0%, transparent 70%);
        animation-delay: -14s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translate(0, 0) scale(1);
        }

        33% {
            transform: translate(30px, -30px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
    }

    .hero-content-wrapper {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 120px 24px 80px;
    }

    .hero-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 60px;
        align-items: center;
    }

    @media (min-width: 1024px) {
        .hero-grid {
            grid-template-columns: 1.1fr 0.9fr;
            gap: 80px;
        }
    }

    .hero-left {
        text-align: center;
    }

    @media (min-width: 1024px) {
        .hero-left {
            text-align: left;
        }
    }

    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 24px;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-radius: var(--radius-full);
        color: white;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 32px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .badge-dot {
        width: 8px;
        height: 8px;
        background: var(--color-secondary);
        border-radius: 50%;
        animation: pulse 2s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1);
        }

        50% {
            opacity: 0.5;
            transform: scale(1.2);
        }
    }

    .hero-title {
        font-size: clamp(40px, 6vw, 72px);
        font-weight: 900;
        color: white;
        line-height: 1.1;
        margin-bottom: 24px;
        letter-spacing: -0.02em;
    }

    .hero-subtitle {
        font-size: clamp(17px, 2vw, 20px);
        color: rgba(255, 255, 255, 0.9);
        line-height: 1.7;
        margin-bottom: 40px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    @media (min-width: 1024px) {
        .hero-subtitle {
            margin-left: 0;
            margin-right: 0;
        }
    }

    .hero-cta {
        display: flex;
        flex-wrap: wrap;
        gap: 16px;
        justify-content: center;
        margin-bottom: 48px;
    }

    @media (min-width: 1024px) {
        .hero-cta {
            justify-content: flex-start;
        }
    }

    .btn-premium {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 16px 32px;
        border-radius: var(--radius-full);
        font-weight: 700;
        font-size: 16px;
        text-decoration: none;
        transition: all var(--transition-smooth);
        white-space: nowrap;
        border: 2px solid transparent;
    }

    .btn-premium-filled {
        background: white;
        color: var(--color-primary);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
    }

    .btn-premium-filled:hover {
        background: var(--color-bg-alt);
        transform: translateY(-4px);
        box-shadow: 0 20px 48px rgba(0, 0, 0, 0.3);
    }

    .btn-premium-glass {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(16px);
        color: white;
        border-color: rgba(255, 255, 255, 0.3);
    }

    .btn-premium-glass:hover {
        background: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 255, 255, 0.5);
        transform: translateY(-4px);
    }

    .hero-stats {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 32px;
        padding: 32px;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(16px);
        border-radius: var(--radius-xl);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    @media (min-width: 1024px) {
        .hero-stats {
            justify-content: flex-start;
            display: inline-flex;
        }
    }

    .stat-item {
        text-align: center;
    }

    .stat-number {
        font-size: 32px;
        font-weight: 800;
        color: white;
        line-height: 1;
        margin-bottom: 8px;
    }

    .stat-label {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
        font-weight: 500;
    }

    .stat-divider {
        width: 1px;
        height: 40px;
        background: rgba(255, 255, 255, 0.2);
    }

    .hero-right {
        position: relative;
    }

    .hero-image-container {
        position: relative;
    }

    .hero-image-wrapper {
        position: relative;
        border-radius: var(--radius-2xl);
        overflow: hidden;
        box-shadow: var(--shadow-2xl);
    }

    .hero-image {
        width: 100%;
        height: auto;
        display: block;
    }

    .hero-image-glow {
        position: absolute;
        inset: -40px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.4) 0%, transparent 70%);
        filter: blur(40px);
        z-index: -1;
    }

    .floating-card {
        position: absolute;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 16px 20px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(16px);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-xl);
        animation: floatCard 6s infinite ease-in-out;
    }

    .floating-card-1 {
        bottom: 20%;
        left: -10%;
        animation-delay: 0s;
    }

    .floating-card-2 {
        top: 20%;
        right: -10%;
        animation-delay: -3s;
    }

    @keyframes floatCard {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    .floating-card-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, var(--color-primary-light), var(--color-primary));
        border-radius: var(--radius-md);
        color: white;
    }

    .floating-card-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--color-text);
        line-height: 1.2;
    }

    .floating-card-subtitle {
        font-size: 13px;
        color: var(--color-text-light);
    }

    .hero-scroll {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1;
    }

    .scroll-indicator {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        color: rgba(255, 255, 255, 0.8);
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: var(--transition-base);
    }

    .scroll-indicator:hover {
        color: white;
    }

    .scroll-icon {
        width: 24px;
        height: 36px;
        border: 2px solid rgba(255, 255, 255, 0.5);
        border-radius: var(--radius-full);
        display: flex;
        justify-content: center;
        padding-top: 8px;
    }

    .scroll-dot {
        width: 4px;
        height: 8px;
        background: white;
        border-radius: var(--radius-full);
        animation: scrollDot 2s infinite;
    }

    @keyframes scrollDot {

        0%,
        100% {
            transform: translateY(0);
            opacity: 1;
        }

        50% {
            transform: translateY(12px);
            opacity: 0.3;
        }
    }

    /* =============================================
   HERO RESPONSIVE TWEAKS ONLY
============================================= */

    /* Tablet & below (layout + spacing) */
    @media (max-width: 1023px) {
        .hero-premium {
            min-height: auto;
            align-items: flex-start;
            padding-top: 70px;
            padding-bottom: 40px;
        }

        .hero-content-wrapper {
            padding: 90px 16px 40px;
        }

        .hero-grid {
            gap: 40px;
        }

        .hero-left {
            order: 1;
        }

        .hero-right {
            order: 2;
            max-width: 520px;
            margin: 0 auto;
        }

        .hero-stats {
            flex-direction: column;
            align-items: stretch;
            padding: 20px 18px;
            gap: 16px;
            margin-top: 8px;
        }

        .stat-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            text-align: left;
        }

        .stat-number {
            font-size: 26px;
        }

        .stat-divider {
            display: none;
        }

        .hero-shape-1,
        .hero-shape-2,
        .hero-shape-3 {
            filter: blur(40px);
            opacity: 0.6;
        }

        .hero-shape-1 {
            width: 260px;
            height: 260px;
        }

        .hero-shape-2 {
            width: 300px;
            height: 300px;
        }

        .hero-shape-3 {
            width: 220px;
            height: 220px;
        }
    }

    /* Mobile: typography, buttons, stacking, hide extras */
    @media (max-width: 640px) {
        .hero-content-wrapper {
            padding: 80px 16px 32px;
        }

        .hero-title {
            font-size: 30px;
        }

        .hero-subtitle {
            font-size: 15px;
            margin-bottom: 28px;
        }

        .hero-badge {
            padding: 8px 18px;
            font-size: 12px;
            margin-bottom: 20px;
        }

        .hero-cta {
            flex-direction: column;
            align-items: stretch;
            margin-bottom: 30px;
        }

        .btn-premium {
            width: 100%;
            justify-content: center;
            padding: 14px 18px;
            font-size: 15px;
        }

        .hero-stats {
            padding: 16px 14px;
            border-radius: 18px;
        }

        .stat-number {
            font-size: 22px;
        }

        .stat-label {
            font-size: 13px;
        }

        .hero-image-wrapper {
            max-width: 420px;
            margin: 0 auto;
            border-radius: 20px;
        }

        /* Hide floating cards on small screens to avoid overlap */
        .floating-card {
            display: none;
        }

        /* Hide scroll hint so it doesn't cover content */
        .hero-scroll {
            display: none;
        }

        .hero-premium {
            overflow: hidden;
        }
    }

    /* Very small devices: calm down background effects */
    @media (max-width: 420px) {

        .hero-shape-1,
        .hero-shape-2,
        .hero-shape-3 {
            opacity: 0.35;
            filter: blur(30px);
        }

        .hero-title {
            font-size: 26px;
        }
    }
</style>
