<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom-0 modern-nav">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('site.home') }}">
            <img src="{{ public_storage(settings('site_logo')) }}" width="42" height="42" class="rounded-circle me-2" alt="Logo">
            <span class="fw-semibold brand-text">{{ settings('site_name') }}</span>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-center gap-lg-2 nav-links">

                <li class="nav-item"><a class="nav-link" href="{{ route('site.home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('site.about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('site.services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('site.blog') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('site.contact') }}">Contact</a></li>

                @php $alt = app()->getLocale()=='ar'?'en':'ar'; @endphp
                <li class="nav-item">
                    <a class="lang-switch" href="{{ LaravelLocalization::getLocalizedURL($alt) }}">
                        <i class="bi bi-globe"></i>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<style>
    .modern-nav {
        padding: 14px 0;
        --color-text: #111;
        --color-muted: #6c6c6c;
        --color-hover: #000;
        border-bottom: 1px solid rgba(0, 0, 0, 0.08) !important;
    }

    .brand-text {
        font-size: 19px;
        letter-spacing: .3px;
        color: var(--color-text);
    }

    /* nav links */
    .nav-link {
        color: var(--color-muted) !important;
        font-weight: 500;
        padding: 8px 14px !important;
        border-radius: 6px;
        transition: 0.2s ease;
    }

    .nav-link:hover {
        color: var(--color-hover) !important;
        background: #f4f4f4;
    }

    /* Active style */
    .nav-link.active {
        color: #000 !important;
        background: #e9e9e9;
        font-weight: 600;
    }

    /* Language switch */
    .lang-switch {
        font-size: 18px;
        padding: 8px 10px;
        border-radius: 50%;
        border: 1px solid rgba(0, 0, 0, 0.15);
        color: #000;
        transition: .2s;
    }

    .lang-switch:hover {
        background: #e9e9e9;
    }

    /* Mobile menu look */
    @media(max-width:992px) {
        .nav-links {
            padding-top: 10px;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
        }

        .nav-item {
            margin-bottom: 4px;
        }
    }
</style>