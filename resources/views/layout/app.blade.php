<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preload" as="font" type="font/woff2" crossorigin
          href="/build/assets/poppins-400-normal-cpxAROuN.woff2">
    <link rel="preload" as="font" type="font/woff2" crossorigin
          href="/build/assets/poppins-600-normal-zEkxB9Mr.woff2">
    <link rel="preload" as="font" type="font/woff2" crossorigin
          href="/build/assets/poppins-700-normal-Qrb0O0WB.woff2">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100,
            });
        }
    });
</script>
</body>
</html>
