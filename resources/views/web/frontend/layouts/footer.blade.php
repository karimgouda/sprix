<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <a href="index.html" class="d-inline-block mb-3">
                    <h1 class="text-white">AI<span class="text-primary">.</span>Tech</h1>
                </a>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                    amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                    clita duo justo et tempor</p>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <h5 class="text-white mb-4">Popular Link</h5>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">Career</a>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <h5 class="text-white mb-4">Our Services</h5>
                <a class="btn btn-link" href="">Robotic Automation</a>
                <a class="btn btn-link" href="">Machine learning</a>
                <a class="btn btn-link" href="">Predictive Analysis</a>
                <a class="btn btn-link" href="">Data Science</a>
                <a class="btn btn-link" href="">Robot Technology</a>
            </div>
        </div>
    </div>
    <div class="container wow fadeIn" data-wow-delay="0.1s">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                    <!--/*** This template is free as long as you keep the footer author's credit link/attribution link/backlink. If you'd like to use the template without the footer author's credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FAQs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- WhatsApp Float Button -->
<a href="https://wa.me/+01812129509"
    target="_blank"
    rel="noopener"
    class="whatsapp-float"
    aria-label="Contact us on WhatsApp">
    <i class="bi bi-whatsapp"></i>
</a>

<style>
    /* WhatsApp Float Button */
    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 30px;
        left: 20px;

            {
                {
                app()->getLocale()==='ar' ? 'left': 'right'
            }
        }

        : 30px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        animation: pulse 2s infinite;
    }

    .whatsapp-float:hover {
        background-color: #128c7e;
        color: #fff;
        transform: scale(1.1);
        box-shadow: 2px 2px 20px rgba(37, 211, 102, 0.5);
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
        }

        70% {
            box-shadow: 0 0 0 15px rgba(37, 211, 102, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
        }
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .whatsapp-float {
            width: 50px;
            height: 50px;
            font-size: 24px;
            bottom: 20px;

                {
                    {
                    app()->getLocale()==='ar' ? 'left': 'right'
                }
            }

            : 20px;
        }
    }
</style>

@include('web.frontend.layouts.footer.scrolltotop')

@include('web.frontend.layouts.footer.scripts')

@include('web.frontend.layouts.footer.js')