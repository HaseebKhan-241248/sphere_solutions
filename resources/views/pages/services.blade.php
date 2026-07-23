<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Services</title>
</head>
<body>

<header class="bg-[#4761FF] text-white">
    <div class="max-w-[88%] mx-auto px-4 sm:px-6">
        <div class="flex flex-col lg:flex-row items-center justify-between py-4 gap-4">

            <div class="text-2xl md:text-3xl font-bold">
                Sphere Marketing Solutions
            </div>

            <div class="flex flex-wrap items-center justify-center lg:justify-end gap-6 text-sm">

                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/>
                    </svg>
                    <span style="font-weight: 500;">Vancouver, BC, Canada</span>
                </div>

                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M2 4h20v16H2V4zm10 8L4 6v12h16V6l-8 6z"/>
                    </svg>
                    <span style="font-weight: 500;">info@spheremarketingsolutions.com</span>
                </div>

                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.09 15.09 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V21c0 .55-.45 1-1 1C10.07 22 2 13.93 2 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                    <span style="font-weight: 500;">+1 (604) 313-7091</span>
                </div>

                <div class="flex items-center gap-3">

                    <a style="font-weight: 500;" href="https://www.facebook.com/profile.php?id=61558581241296 class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M22 12A10 10 0 1010.5 21.95v-7.04H8v-2.91h2.5V9.8c0-2.47 1.47-3.84 3.73-3.84 1.08 0 2.2.19 2.2.19v2.42h-1.24c-1.22 0-1.6.76-1.6 1.54v1.85h2.72l-.43 2.91h-2.29v7.04A10 10 0 0022 12z"/>
                        </svg>
                    </a>

                    <a style="font-weight: 500;" href="https://x.com/SpMarkSolutions class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.28 4.28 0 001.88-2.37 8.52 8.52 0 01-2.71 1.04A4.25 4.25 0 0016.11 4c-2.35 0-4.25 1.9-4.25 4.25 0 .33.04.65.11.96-3.53-.18-6.66-1.87-8.75-4.44a4.25 4.25 0 001.31 5.67 4.2 4.2 0 01-1.92-.53v.05c0 2.06 1.47 3.77 3.42 4.16a4.28 4.28 0 01-1.92.07 4.26 4.26 0 003.97 2.95A8.53 8.53 0 012 19.54 12.03 12.03 0 008.5 21c7.8 0 12.07-6.46 12.07-12.07l-.01-.55A8.66 8.66 0 0022.46 6z"/>
                        </svg>
                    </a>

                    <a style="font-weight: 500;" href="https://www.linkedin.com/in/sm-solutions/ class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M4.98 3.5C4.98 4.6 4.09 5.5 3 5.5S1.02 4.6 1.02 3.5 1.91 1.5 3 1.5s1.98.9 1.98 2zM1.5 8h3V22h-3V8zm7 0h2.88v1.91h.04c.4-.76 1.38-1.56 2.84-1.56 3.04 0 3.6 2 3.6 4.59V22h-3v-7.06c0-1.68-.03-3.84-2.34-3.84-2.34 0-2.7 1.83-2.7 3.72V22h-3V8z"/>
                        </svg>
                    </a>

                </div>

            </div>

        </div>
    </div>
</header>

<nav id="navBar" class="bg-white shadow-sm relative">
    <div class="max-w-[88%] mx-auto px-6">
        <div class="flex items-center justify-between py-4">

            <button id="mobileMenuBtn" class="sm:hidden flex flex-col w-10 h-10 items-center justify-center gap-2 bg-[#4761FF] rounded-lg order-2">
                <span class="w-6 h-1 bg-white transition-all duration-300"></span>
                <span class="w-6 h-1 bg-white transition-all duration-300"></span>
                <span class="w-6 h-1 bg-white transition-all duration-300"></span>
            </button>

            <ul id="navLinks" class="hidden sm:flex flex-row items-center gap-8 text-[20px] text-black order-1">
                <li>
                    <a href="{{ route('home') }}" class="nav-link text-[#4761FF] hover:text-[#4761FF] transition-all duration-300 relative group">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}" class="nav-link hover:text-[#4761FF] transition-all duration-300 relative group">
                        About
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('prices') }}" class="nav-link hover:text-[#4761FF] transition-all duration-300 relative group">
                        Packages
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('faqs') }}" class="nav-link hover:text-[#4761FF] transition-all duration-300 relative group">
                        FAQs
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>


                <li class="relative group">
                    <button class="nav-link flex items-center gap-1 hover:text-[#4761FF] transition-all duration-300 relative group">
                        Service
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 20 20">
                            <path d="M5.5 7.5L10 12l4.5-4.5z"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 top-full mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform translate-y-2 group-hover:translate-y-0">
                        <li><a href="{{ route('services') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Website Development</a></li>
                        <li><a href="{{ route('services') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">SEO Services</a></li>
                        <li><a href="{{ route('services') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Digital Marketing</a></li>
                    </ul>
                </li>

                <li class="relative group">
                    <button class="nav-link flex items-center gap-1 hover:text-[#4761FF] transition-all duration-300 relative group">
                        Project
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 20 20">
                            <path d="M5.5 7.5L10 12l4.5-4.5z"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 top-full mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform translate-y-2 group-hover:translate-y-0">
                        <li><a href="{{ route('project-details') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Project One</a></li>
                        <li><a href="{{ route('project-details') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Project Two</a></li>
                        <li><a href="{{ route('project-details') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Project Three</a></li>
                    </ul>
                </li>

                <li class="relative group">
                    <button class="nav-link flex items-center gap-1 hover:text-[#4761FF] transition-all duration-300 relative group">
                        Pages
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 20 20">
                            <path d="M5.5 7.5L10 12l4.5-4.5z"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 top-full mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform translate-y-2 group-hover:translate-y-0">
                        <li><a href="{{ route('our-team') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Our Team</a></li>
                        <li><a href="{{ route('testimonials') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Testimonials</a></li>
                        <li><a href="{{ route('errors.404') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">404 Page</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('contact') }}" class="nav-link hover:text-[#4761FF] transition-all duration-300 relative group">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
            </ul>

            <a href="{{ route('quote') }}" class="hidden sm:inline-block bg-[#4761FF] hover:bg-indigo-700 text-white text-md font-medium px-4 py-2 rounded-full transition-all duration-300 hover:scale-105 order-3">
                Get A Quote
            </a>

        </div>

        <div id="mobileNavPanel" class="hidden sm:hidden absolute left-0 top-full w-full bg-white shadow-lg z-50 px-6 py-4">
            <ul class="flex flex-col gap-3 text-[18px] text-black">
                <li><a href="{{ route('home') }}" class="block py-2 text-[#4761FF]">Home</a></li>
                <li><a href="#" class="block py-2 hover:text-[#4761FF]">About</a></li>

                <li class="border-t pt-2">
                    <span class="block text-gray-500 text-sm mb-1">Service</span>
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">Website Development</a>
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">SEO Services</a>
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">Digital Marketing</a>
                </li>

                <li class="border-t pt-2">
                    <span class="block text-gray-500 text-sm mb-1">Project</span>
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">Project One</a>
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">Project Two</a>
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">Project Three</a>
                </li>

                <li class="border-t pt-2">
                    <span class="block text-gray-500 text-sm mb-1">Pages</span>
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">Our Team</a>
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">Testimonials</a>
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">404 Page</a>
                </li>

                <li class="border-t pt-2">
                    <a href="#" class="block py-2 hover:text-[#4761FF]">Contact</a>
                </li>

                <li class="pt-2">
                    <a href="{{ route('quote') }}" class="block text-center bg-[#4761FF] text-white font-medium px-4 py-2 rounded-full">Hire Us</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<section class="relative">
    <div class="relative h-80 bg-cover bg-center flex items-center justify-center text-center bg-black/30"
         style="background-image: url({{ asset('images/about-hero.jpg') }});">
        <div class="text-white px-4">
            <h1 class="text-4xl md:text-7xl font-bold mb-4">Service</h1>
            <p class="text-lg space-x-3">
                <a href="{{ route('home') }}" class="hover:text-[#4761FF]">Home</a>
                <span>/</span>
                <a href="#" class="hover:text-[#4761FF]"> Pages</a>
                <span>/</span>
                <span class="text-[#4761FF]"> Service </span>
            </p>
        </div>
    </div>
</section>

<section class="md:max-w-[88%] mx-auto px-4 py-16">

    <div class="text-center mb-12">
        <span class="text-[#4761FF] font-semibold text-sm tracking-widest uppercase">Our Services</span>
        <h2 class="text-2xl md:text-4xl font-bold text-gray-800 mt-2">Services That Help Your Business Grow</h2>
        <div class="w-16 h-1 bg-[#4761FF] mx-auto mt-4 rounded"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Card 1 -->
        <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
            <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
                <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                    <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                        <img src="{{ asset('images/icon-5.png') }}">
                    </div>
                </div>
                <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
                    Website Development</h3>
                <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
                    Visually appealing, functionally robust websites tailored to your business.
                </p>
            </div>
            <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
                <button class="text-[#4761FF] font-semibold">
                    Read More >>
                </button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
            <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
                <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                    <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                        <img src="{{ asset('images/icon-6.png') }}">
                    </div>
                </div>
                <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
                    SEO Services</h3>
                <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
                    Strategies designed to improve your search engine rankings and organic reach.
                </p>
            </div>
            <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
                <button class="text-[#4761FF] font-semibold">
                    Read More >>
                </button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
            <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
                <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                    <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                        <img src="{{ asset('images/icon-7.png') }}">
                    </div>
                </div>
                <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
                    Digital Marketing</h3>
                <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
                    Campaigns that grow engagement, visibility, and conversions across channels.
                </p>
            </div>
            <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
                <button class="text-[#4761FF] font-semibold">
                    Read More >>
                </button>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
            <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
                <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                    <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                        <img src="{{ asset('images/icon-8.png') }}">
                    </div>
                </div>
                <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
                    Social Media Advertising</h3>
                <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
                    Reach your target audience effectively and drive measurable results.
                </p>
            </div>
            <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
                <button class="text-[#4761FF] font-semibold">
                    Read More >>
                </button>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
            <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
                <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                    <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                        <img src="{{ asset('images/icon-9.png') }}">
                    </div>
                </div>
                <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
                    Video Editing & Graphics</h3>
                <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
                    Elevate your content and brand image with professional creative services.
                </p>
            </div>
            <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
                <button class="text-[#4761FF] font-semibold">
                    Read More >>
                </button>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
            <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
                <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                    <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                        <img src="{{ asset('images/icon-10.png') }}">
                    </div>
                </div>
                <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
                    YouTube Management</h3>
                <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
                    Grow your channel so your videos reach their maximum potential.
                </p>
            </div>
            <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
                <button class="text-[#4761FF] font-semibold">
                    Read More >>
                </button>
            </div>
        </div>

    </div>
</section>

<section class="py-24 bg-white">
    <div class="md:max-w-[88%] mx-auto px-6">

        <div class="flex items-center justify-between mb-16">

            <div>
                <h1 class="mb-4 text-[#4761FF] text-xl">Testimonial</h1>

                <h2 class="text-[30px] md:text-[45px] lg:text-[55px] leading-[1.1] font-bold text-[#20233F] md:max-w-2xl">
                    What Clients Say
                    <br>
                    About Our Services!
                </h2>
            </div>

            <div class="hidden md:flex gap-4">

                <button id="previous" class="w-16 h-16 rounded-full bg-white shadow-lg flex items-center justify-center">
                    <i class="fa-solid fa-angle-left"></i>
                </button>

                <button id="next" class="w-16 h-16 rounded-full bg-white shadow-lg flex items-center justify-center">
                    <i class="fa-solid fa-angle-right"></i>
                </button>

            </div>

        </div>

        <div class="overflow-hidden">
            <div id="slider" class="flex gap-8">

                <div class="testi-card">
                    <img src="https://i.pravatar.cc/150?img=1">
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <h3>Ayesha Khan</h3>
                    <span>Marketing Head</span>
                </div>

                <div class="testi-card">
                    <img src="https://i.pravatar.cc/150?img=2">
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <h3>Bilal Ahmed</h3>
                    <span>Product Designer</span>
                </div>

                <div class="testi-card">
                    <img src="https://i.pravatar.cc/150?img=3">
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <h3>Sara Malik</h3>
                    <span>Founder, Studio X</span>
                </div>

                <div class="testi-card">
                    <img src="https://i.pravatar.cc/150?img=4">
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <h3>Usman Tariq</h3>
                    <span>CTO, Nova Labs</span>
                </div>

                <div class="testi-card">
                    <img src="https://i.pravatar.cc/150?img=5">
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <h3>Hina Sheikh</h3>
                    <span>Operations Lead</span>
                </div>

                <div class="testi-card">
                    <img src="https://i.pravatar.cc/150?img=6">
                    <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <h3>Faisal Raza</h3>
                    <span>Client Success Manager</span>
                </div>

            </div>
        </div>

    </div>
</section>

<section class="py-24 bg-white">
    <div class="max-w-[88%] mx-auto">

        <div class="grid lg:grid-cols-2 gap-20 items-start">

            <div>

                <span class="text-[#4761FF] text-xl font-medium">
                    Get A Quote
                </span>

                <h2 class="text-[30px] md:text-[45px] leading-[1.1] font-bold text-[#20233F] mt-5 mb-8">
                    Need Our Expert Help?
                    We're Here!
                </h2>

                <p class="text-gray-500 text-[17px] leading-7 mb-4">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                    sed stet lorem sit clita duo justo.
                </p>

                <p class="text-gray-500 text-[17px] leading-7 mb-4">
                    Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                    Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                    sed stet lorem sit clita duo justo.
                </p>

                <a href="#" class="inline-flex overflow-hidden rounded-xl border border-[#4761FF]">

                    <span class="size-14 bg-linear-to-r from-[#4761FF] to-[#5C6CFF] flex items-center justify-center text-white text-lg">
                        <i class="fa-solid fa-phone"></i>
                    </span>

                    <span class="px-4 flex items-center text-[#4761FF] text-xl font-medium bg-white">
                        +1 (604) 313-7091
                    </span>

                </a>

            </div>

            <div>

                <h2 class="text-[36px] font-semibold text-[#20233F] mb-10">
                    Get A Free Quote
                </h2>

                <form>

                    <div class="grid md:grid-cols-2 gap-6">

                        <label>
                            <input type="text" placeholder="Your Name" class="h-14 rounded-xl border border-gray-300 px-6 text-xl outline-none focus:border-[#4761FF] ">
                        </label>

                        <label>
                            <input type="email" placeholder="Your Email" class="h-14 rounded-xl border border-gray-300 px-6 text-xl outline-none focus:border-[#4761FF]">
                        </label>

                        <label>
                            <input type="text" placeholder="Your Mobile" class="h-14 rounded-xl border border-gray-300 px-6 text-xl outline-none focus:border-[#4761FF]">
                        </label>

                        <label>
                            <select class="h-14 rounded-xl border border-gray-300 px-6 text-xl outline-none focus:border-[#4761FF]">

                                <option>Choose A Service</option>
                                <option>Digital Marketing</option>
                                <option>SEO</option>
                                <option>Content Marketing</option>
                                <option>Social Marketing</option>

                            </select>
                        </label>

                    </div>

                    <label>
                        <textarea rows="6" placeholder="Message" class="w-full mt-6 rounded-xl border border-gray-300 px-6 p-2 text-xl outline-none focus:border-[#4761FF]"></textarea>
                    </label>

                    <button class="w-full mt-4 h-14 rounded-xl text-white text-lg bg-linear-to-r from-[#4761FF] to-[#5C6CFF] hover:opacity-90 duration-300">
                        Submit Now
                    </button>

                </form>

            </div>

        </div>

    </div>
</section>

<footer class="bg-[#1C2035] text-white">

    <div class="max-w-[88%] mx-auto py-20">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-14">

            <div>

                <h2 class="text-[25px] font-semibold mb-5">
                    Our Office
                </h2>

                <ul class="space-y-3">

                    <li class="flex items-center gap-4 text-[17px] text-[#B0B9AE]">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Vancouver, BC, Canada</span>
                    </li>

                    <li class="flex items-center gap-4 text-[17px] text-[#B0B9AE]">
                        <i class="fa-solid fa-phone"></i>
                        <span>+1 (604) 313-7091</span>
                    </li>

                    <li class="flex items-center gap-4 text-[17px] text-[#B0B9AE]">
                        <i class="fa-solid fa-envelope"></i>
                        <span>info@spheremarketingsolutions.com</span>
                    </li>

                </ul>

                <div class="flex gap-4 mt-4">

                    <a href="#" class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="#"
                       class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#"
                       class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300">
                        <i class="fa-brands fa-youtube"></i>
                    </a>

                    <a href="#"
                       class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                </div>

            </div>

            <div>

                <h2 class="text-[25px] font-semibold mb-5">
                    Quick Links
                </h2>

                <ul class="space-y-2 text-[17px] text-[#B0B9AE]">

                    <li><a href="#" class="hover:text-white duration-300 hover:text-[18px]"><i class="fa-solid fa-angle-right mr-3"></i>About Us</a></li>

                    <li><a href="#" class="hover:text-white duration-300 hover:text-[18px]"><i class="fa-solid fa-angle-right mr-3"></i>Contact Us</a></li>

                    <li><a href="#" class="hover:text-white duration-300 hover:text-[18px]"><i class="fa-solid fa-angle-right mr-3"></i>Our Services</a></li>

                    <li><a href="#" class="hover:text-white duration-300 hover:text-[18px]"><i class="fa-solid fa-angle-right mr-3"></i>Terms & Condition</a></li>

                    <li><a href="#" class="hover:text-white duration-300 hover:text-[18px]"><i class="fa-solid fa-angle-right mr-3"></i>Support</a></li>

                </ul>

            </div>

            <div>

                <h2 class="text-[25px] font-semibold mb-5">
                    Business Hours
                </h2>

                <div class="space-y-2">

                    <div>
                        <p class="text-[17px] text-[#B0B9AE]">Monday - Friday</p>
                        <h4 class="text-[18px] font-semibold">09:00 am - 06:00 pm</h4>
                    </div>

                    <div>
                        <p class="text-[17px] text-[#B0B9AE]">Saturday</p>
                        <h4 class="text-[18px] font-semibold">09:00 am - 12:00 pm</h4>
                    </div>

                    <div>
                        <p class="text-[17px] text-[#B0B9AE]">Sunday</p>
                        <h4 class="text-[18px] font-semibold">Closed</h4>
                    </div>

                </div>

            </div>

            <div>

                <h2 class="text-[25px] font-semibold mb-5">
                    Newsletter
                </h2>

                <p class="text-[17px] text-[#B0B9AE] mb-5">
                    Dolor amet sit justo amet elitr clita ipsum elitr est.
                </p>

                <div class="relative">

                    <input type="email"
                           placeholder="Your email"
                           class="w-full h-15 rounded-lg border border-gray-500 bg-transparent px-6 text-[20px] placeholder:text-gray-400 focus:outline-none">

                    <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-white text-black px-6 h-12 rounded-lg text-[20px] hover:bg-[#4761FF] hover:text-white duration-300">
                        SignUp
                    </button>

                </div>

            </div>

        </div>

    </div>

    <div class="bg-black">

        <div class="max-w-[88%] mx-auto py-7 flex flex-col md:flex-row items-center justify-between gap-5">

            <p class="text-[17px] text-gray-300">
                © <span class="font-semibold text-white">Sphere Marketing Solutions</span>,<span class="text-[#B0B9AE]"> All Right Reserved.</span>
            </p>

            <p class="text-[17px] text-gray-300">
                <span class="text-[#B0B9AE]">Sphere Digital Marketing Solutions</span>
            </p>

        </div>

    </div>

</footer>

<script>


    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileNavPanel = document.getElementById('mobileNavPanel');

    mobileMenuBtn.addEventListener('click', () => {
        mobileNavPanel.classList.toggle('hidden');
        mobileMenuBtn.classList.toggle('active');
    });


    const slides = document.querySelectorAll(".hero-slide");
    const nextBtn = document.getElementById("nextBtn");
    const prevBtn = document.getElementById("prevBtn");

    let current = 0;
    let autoSlide;

    function showSlide(index){

        slides.forEach(slide=>{
            slide.classList.add("hidden");
            slide.classList.remove("active");
        });

        slides[index].classList.remove("hidden");
        slides[index].classList.add("active");
    }

    function nextSlide(){

        current++;

        if(current >= slides.length){
            current = 0;
        }

        showSlide(current);
    }

    function prevSlide(){

        current--;

        if(current < 0){
            current = slides.length - 1;
        }

        showSlide(current);
    }

    function startAutoSlide(){
        autoSlide = setInterval(nextSlide,5000);
    }

    function resetAutoSlide(){
        clearInterval(autoSlide);
        startAutoSlide();
    }

    nextBtn.addEventListener("click",function(){
        nextSlide();
        resetAutoSlide();
    });

    prevBtn.addEventListener("click",function(){
        prevSlide();
        resetAutoSlide();
    });

    showSlide(current);
    startAutoSlide();


    (function(){
        const slider = document.getElementById('slider');
        const originals = Array.from(slider.children);
        const total = originals.length;

        const beforeFrag = document.createDocumentFragment();
        originals.forEach(c => beforeFrag.appendChild(c.cloneNode(true)));
        slider.insertBefore(beforeFrag, slider.firstChild);

        const afterFrag = document.createDocumentFragment();
        originals.forEach(c => afterFrag.appendChild(c.cloneNode(true)));
        slider.appendChild(afterFrag);

        const cards = Array.from(slider.children);

        let current = total;
        let autoTimer = null;

        function visibleCount(){
            return window.innerWidth >= 768 ? 3 : 1;
        }

        function step(){
            const gap = parseFloat(getComputedStyle(slider).columnGap || 32);
            return cards[0].getBoundingClientRect().width + gap;
        }

        function updateActive(){
            const vCount = visibleCount();
            const centerIndex = current + Math.floor(vCount / 2);
            cards.forEach((card, i) => card.classList.toggle('is-active', i === centerIndex));
        }

        function render(withTransition){
            if (!withTransition) slider.classList.add('no-transition');
            slider.style.transform = `translateX(-${current * step()}px)`;
            if (!withTransition){
                void slider.offsetHeight;
                slider.classList.remove('no-transition');
            }
            updateActive();
        }

        slider.addEventListener('transitionend', () => {
            if (current === total * 2) {
                current = total;
                render(false);
            } else if (current === 0) {
                current = total;
                render(false);
            }
        });

        function goNext(){ current++; render(true); }
        function goPrev(){ current--; render(true); }

        function startAuto(){
            stopAuto();
            autoTimer = setInterval(goNext, 5000);
        }
        function stopAuto(){
            if (autoTimer) clearInterval(autoTimer);
        }

        document.getElementById('next').addEventListener('click', () => { goNext(); startAuto(); });
        document.getElementById('previous').addEventListener('click', () => { goPrev(); startAuto(); });

        window.addEventListener('resize', () => render(false));

        render(false);
        startAuto();
    })();

    // (function(){
    //     const projectGrid = document.querySelector('.grid.lg\\:grid-cols-3.md\\:grid-cols-2');
    //     const projectPrevBtn = document.getElementById('projectPrevBtn');
    //     const projectNextBtn = document.getElementById('projectNextBtn');
    //
    //     if (!projectGrid || !projectPrevBtn || !projectNextBtn) return;
    //
    //     const projects = Array.from(projectGrid.children);
    //     const totalProjects = projects.length;
    //
    //     let currentProject = 0;
    //
    //     function visibleProjectCount(){
    //         return window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
    //     }
    //
    //     function updateProjectVisibility(){
    //         const visibleCount = visibleProjectCount();
    //         const maxIndex = totalProjects - visibleCount;
    //
    //         projects.forEach((project, index) => {
    //             if (index >= currentProject && index < currentProject + visibleCount) {
    //                 project.style.display = 'block';
    //             } else {
    //                 project.style.display = 'none';
    //             }
    //         });
    //     }
    //
    //     function nextProject(){
    //         const visibleCount = visibleProjectCount();
    //         const maxIndex = totalProjects - visibleCount;
    //
    //         if (currentProject < maxIndex) {
    //             currentProject++;
    //             updateProjectVisibility();
    //         }
    //     }
    //
    //     function prevProject(){
    //         if (currentProject > 0) {
    //             currentProject--;
    //             updateProjectVisibility();
    //         }
    //     }
    //
    //     projectNextBtn.addEventListener('click', nextProject);
    //     projectPrevBtn.addEventListener('click', prevProject);
    //
    //     window.addEventListener('resize', updateProjectVisibility);
    //
    //     updateProjectVisibility();
    // })();


</script>
</body>
</html>