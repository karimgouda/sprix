@if(settings('whatsapp'))
    <a href="https://wa.me/{{ settings('whatsapp') }}" target="_blank" class="whatsapp-widget" title="Chat with us on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <style>
        .whatsapp-widget {
            position: fixed;
            bottom: 20px;
            left: 20px; /* Default to Left (EN) */
            right: auto;
            background-color: #25D366;
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        /* RTL Override (AR) */
        html[dir="rtl"] .whatsapp-widget {
            left: auto;
            right: 20px;
        }

        .whatsapp-widget:hover {
            background-color: #128C7E;
            transform: scale(1.1);
            color: white;
            text-decoration: none;
        }
    </style>
@endif
