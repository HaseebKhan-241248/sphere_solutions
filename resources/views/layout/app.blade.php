<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- 1. Preconnect Tags Top Par -->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- 2. FontAwesome Async/Non-Blocking -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
          media="print" onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
    </noscript>

    <!-- 3. AOS CSS Non-Blocking -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" media="print" onload="this.media='all'"/>
    <noscript>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    </noscript>

    <!-- 4. Google Fonts avec display=swap -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <title>@yield('title', 'Sphere Marketing Solutions – Digital Marketing')</title>
    @hasSection('meta_description')
        <meta name="description" content="{{ trim($__env->yieldContent('meta_description')) }}">
    @endif
    @stack('meta')
</head>

<body>
@include('partials.header')

@yield('content')

@include('partials.footer')

@include('partials.whatsapp-chat')

<button id="scrollTopBtn"
        class="cursor-pointer hidden fixed bottom-6 right-6 w-12 h-12 rounded-full bg-[#4870F8] text-white items-center justify-center shadow-lg z-50 {{ !empty($whatsappEnabled) ? 'scroll-top-with-whatsapp' : '' }}">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- 5. Sabhi Custom JS Files Mein `defer` Add Kiya Gaya Hai -->
<script src="{{ asset('js/home.js') }}" defer></script>
<script src="{{ asset('js/toast.js') }}" defer></script>
<script src="{{ asset('js/contact-form.js') }}" defer></script>
<script src="{{ asset('js/entrepreneur-signup-form.js') }}" defer></script>
<script src="{{ asset('js/newsletter-form.js') }}" defer></script>
<script src="{{ asset('js/faqs.js') }}" defer></script>
<script src="{{ asset('js/project-detail.js') }}" defer></script>
<script src="{{ asset('js/projects-details-alt.js') }}" defer></script>
<script src="{{ asset('js/service-details.js') }}" defer></script>
<script src="{{ asset('js/services.js') }}" defer></script>
<script src="{{ asset('js/testimonials.js') }}" defer></script>
<script src="{{ asset('js/header.js') }}" defer></script>

<script src="https://unpkg.com/aos@next/dist/aos.js" defer></script>
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
