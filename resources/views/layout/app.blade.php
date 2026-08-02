<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script>
        module.exports = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                },
            },
        }

    </script>

    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <title>Sphere Marketing Solutions – Digital Marketing</title>
</head>

<body>
@include('partials.header')

@yield('content')

@include('partials.footer')

@include('partials.whatsapp-chat')

<button id="scrollTopBtn" class="cursor-pointer hidden fixed bottom-6 right-6 w-12 h-12 rounded-full bg-[#4761FF] text-white items-center justify-center shadow-lg z-50 {{ !empty($whatsappEnabled) ? 'scroll-top-with-whatsapp' : '' }}">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/contact-form.js') }}"></script>
<script src="{{ asset('js/newsletter-form.js') }}"></script>
<script src="{{ asset('js/faqs.js') }}"></script>
<script src="{{ asset('js/project-detail.js') }}"></script>
<script src="{{ asset('js/projects-details-alt.js') }}"></script>
<script src="{{ asset('js/service-details.js') }}"></script>
<script src="{{ asset('js/services.js') }}"></script>
<script src="{{ asset('js/testimonials.js') }}"></script>
<script src="{{ asset('js/header.js') }}"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100,
        });
    });
</script>
</body>
</html>
