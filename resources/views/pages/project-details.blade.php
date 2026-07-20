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
    <title>Project Details</title>
</head>
<body class="bg-white">

<header class="bg-[#4761FF] text-white">
    <div class="max-w-[88%] mx-auto px-4 sm:px-6">
        <div class="flex flex-col lg:flex-row items-center justify-between py-4 gap-4">

            <div class="text-3xl font-bold">
                GrowMark
            </div>

            <div class="flex flex-wrap items-center justify-center lg:justify-end gap-6 text-sm">

                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/>
                    </svg>
                    <span style="font-weight: 500;">123 Street, New York, USA</span>
                </div>

                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M2 4h20v16H2V4zm10 8L4 6v12h16V6l-8 6z"/>
                    </svg>
                    <span style="font-weight: 500;">info@example.com</span>
                </div>

                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.09 15.09 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V21c0 .55-.45 1-1 1C10.07 22 2 13.93 2 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                    <span style="font-weight: 500;">+012 345 67890</span>
                </div>

                <div class="flex items-center gap-3">

                    <a style="font-weight: 500;" href="#" class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M22 12A10 10 0 1010.5 21.95v-7.04H8v-2.91h2.5V9.8c0-2.47 1.47-3.84 3.73-3.84 1.08 0 2.2.19 2.2.19v2.42h-1.24c-1.22 0-1.6.76-1.6 1.54v1.85h2.72l-.43 2.91h-2.29v7.04A10 10 0 0022 12z"/>
                        </svg>
                    </a>

                    <a style="font-weight: 500;" href="#" class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M22.46 6c-.77.35-1.6.58-2.46.69a4.28 4.28 0 001.88-2.37 8.52 8.52 0 01-2.71 1.04A4.25 4.25 0 0016.11 4c-2.35 0-4.25 1.9-4.25 4.25 0 .33.04.65.11.96-3.53-.18-6.66-1.87-8.75-4.44a4.25 4.25 0 001.31 5.67 4.2 4.2 0 01-1.92-.53v.05c0 2.06 1.47 3.77 3.42 4.16a4.28 4.28 0 01-1.92.07 4.26 4.26 0 003.97 2.95A8.53 8.53 0 012 19.54 12.03 12.03 0 008.5 21c7.8 0 12.07-6.46 12.07-12.07l-.01-.55A8.66 8.66 0 0022.46 6z"/>
                        </svg>
                    </a>

                    <a style="font-weight: 500;" href="#" class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
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
        <div class="flex flex-wrap items-center justify-between py-4">

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

                <li class="relative group">
                    <button class="nav-link flex items-center gap-1 hover:text-[#4761FF] transition-all duration-300 relative group">
                        Service
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current transition-transform duration-300 group-hover:rotate-180" viewBox="0 0 20 20">
                            <path d="M5.5 7.5L10 12l4.5-4.5z"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 top-full mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform translate-y-2 group-hover:translate-y-0">
                        <li><a href="{{ route('services') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Web Development</a></li>
                        <li><a href="{{ route('services') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">SEO Service</a></li>
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
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">Web Development</a>
                    <a href="#" class="block py-1 pl-3 hover:text-[#4761FF]">SEO Service</a>
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
                    <a href="{{ route('quote') }}" class="block text-center bg-[#4761FF] text-white font-medium px-4 py-2 rounded-full">Get A Quote</a>
                </li>
            </ul>
        </div>

    </div>
</nav>

<section class="relative">
    <div class="relative h-80 bg-cover bg-center flex items-center justify-center text-center bg-black/30"
         style="background-image: url({{ asset('images/about-hero.jpg') }});">
        <div class="text-white px-4">
            <h1 class="text-4xl md:text-7xl font-bold mb-4">Project Details</h1>
            <p class="text-lg space-x-3">
                <a href="{{ route('home') }}" class="hover:text-[#4761FF]">Home</a>
                <span>/</span>
                <a href="#" class="hover:text-[#4761FF]"> Pages</a>
                <span>/</span>
                <span class="text-[#4761FF]"> Project Details</span>
            </p>
        </div>
    </div>
</section>


<section class="py-16">
    <div class="max-w-[85%] mx-auto grid lg:grid-cols-3 gap-12">

        <div class="lg:col-span-2">

            <img src="{{ asset('images/about-hero.jpg') }}"
                 alt="Digital Marketing Service" class="w-full h-105 object-cover rounded-lg mb-8">

            <h2 class="text-3xl md:text-4xl font-bold text-[#20233F] mb-6">Digital Marketing Project</h2>

            <p class="font-sans text-[#555555] leading-6 text-[17px] mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis luctus augue vitae vulputate.
                Nulla vel venenatis nisi. Fusce convallis, nibh id interdum ullamcorper, libero metus lacinia sapien,
                accumsan auctor erat libero id nulla. Fusce cursus ante tellus, non tempor magna pellentesque eu.
                Quisque egestas ultrices libero, sed vulputate libero tincidunt id. Mauris eleifend nunc ac ligula
                mollis, a semper libero consequat. Vestibulum ac elit vel erat molestie malesuada.
            </p>

            <p class="font-sans text-[#555555] leading-6 text-[17px] mb-10">
                Integer sit amet efficitur massa. Vivamus elementum commodo commodo. Vivamus ac dapibus sem, vitae
                convallis nunc. Mauris nec eleifend mi. Pellentesque in neque ut nisl luctus suscipit non in lectus.
                Aliquam quam nibh, viverra ac turpis a, tristique faucibus lectus. Praesent nunc nunc, tristique at
                sapien sed, accumsan ullamcorper odio.
            </p>

            <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Project Gallery</h3>

            <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] mb-12 divide-y divide-gray-100 p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                    <img src="{{ asset('images/project-1.jpg') }}" class="rounded-lg">
                    <img src="{{ asset('images/project-2.jpg') }}" class="rounded-lg">
                    <img src="{{ asset('images/project-3.jpg') }}" class="rounded-lg">
                    <img src="{{ asset('images/project-4.jpg') }}" class="rounded-lg">
                    <img src="{{ asset('images/project-1.jpg') }}" class="rounded-lg">
                    <img src="{{ asset('images/project-2.jpg') }}" class="rounded-lg">
                    <img src="{{ asset('images/project-3.jpg') }}" class="rounded-lg">
                    <img src="{{ asset('images/project-4.jpg') }}" class="rounded-lg">
                </div>
            </div>

            <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Clients Review</h3>

            <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-8 max-w-md">

                <div class="flex items-center gap-4 mb-6">
                    <img src="https://i.pravatar.cc/150?img=6" alt="Jhon Doe"
                         class="size-17 rounded-full object-cover">
                    <div>
                        <h4 class="text-[20px] font-bold text-[#20233F]">Jhon Doe</h4>
                        <p class="text-[15px] text-[#777]">CEO & Founder</p>
                    </div>
                </div>

                <h3 class="text-2xl font-bold text-[#20233F] mb-4">Creative and effective work</h3>

                <p class="font-sans text-[#555555] leading-6 text-[16px]">
                    onumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                    consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren
                    dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores
                    diam nonumy, gubergren sit stet no diam kasd vero.
                </p>

            </div>

        </div>

        <aside class="space-y-8">

            <div>
                <h3 class="text-2xl md:text-3xl font-bold text-[#20233F] mb-4">Project Info</h3>
                <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-5 space-y-3">
                    <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                       <span class="text-[#4761FF]">Project Name:</span> Marketing
                    </a>
                    <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        <span class="text-[#4761FF]">Client Name:</span> John Doe
                    </a>
                    <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        <span class="text-[#4761FF]">Project Manager:</span> John Doe
                    </a>
                    <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        <span class="text-[#4761FF]">Project Link:</span> example.com
                    </a>
                    <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        <span class="text-[#4761FF]">Completed Date:</span> 01 Jan, 2026
                    </a>
                    <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        E-mail Marketing
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-2xl md:text-3xl font-bold text-[#20233F] mb-4">Recent Projects</h3>
                <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-5 space-y-3">
                    <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg  hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        Digital Marketing
                        <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        Internet Marketing
                        <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        Content Marketing
                        <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        Social Marketing
                        <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        B2B Marketing
                        <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                        E-mail Marketing
                        <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-4">Get A Free Quote</h3>
                <form class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-6 space-y-4">
                    <input type="text" placeholder="Your Name" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none">
                    <input type="email" placeholder="Your Email" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4761FF]">
                    <input type="text" placeholder="Your Mobile" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4761FF]">
                    <select class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4761FF]">
                        <option>Choose A Service</option>
                        <option selected>Digital Marketing</option>
                        <option>SEO</option>
                        <option>Content Marketing</option>
                        <option>Social Marketing</option>
                    </select>
                    <textarea rows="4" placeholder="Message" class="w-full rounded-xl border border-gray-300 px-5 py-3 text-[16px] outline-none focus:border-[#4761FF]"></textarea>
                    <button type="button" class="w-full h-14 rounded-xl text-white text-lg bg-linear-to-r from-[#4761FF] to-[#5C6CFF] hover:opacity-90 duration-300">
                        Submit Now
                    </button>
                </form>
            </div>

        </aside>

    </div>
</section>

<footer class="bg-[#1C2035] text-white">

    <div class="max-w-[88%] mx-auto py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-14">

            <div>
                <h2 class="text-[25px] font-semibold mb-5">Our Office</h2>
                <ul class="space-y-3">
                    <li class="flex items-center gap-4 text-[17px] text-[#B0B9AE]"><i class="fa-solid fa-location-dot"></i><span>123 Street, New York, USA</span></li>
                    <li class="flex items-center gap-4 text-[17px] text-[#B0B9AE]"><i class="fa-solid fa-phone"></i><span>+012 345 67890</span></li>
                    <li class="flex items-center gap-4 text-[17px] text-[#B0B9AE]"><i class="fa-solid fa-envelope"></i><span>info@example.com</span></li>
                </ul>
                <div class="flex gap-4 mt-4">
                    <a href="#" class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <div>
                <h2 class="text-[25px] font-semibold mb-5">Quick Links</h2>
                <ul class="space-y-2 text-[17px] text-[#B0B9AE]">
                    <li><a href="#" class="hover:text-white duration-300"><i class="fa-solid fa-angle-right mr-3"></i>About Us</a></li>
                    <li><a href="#" class="hover:text-white duration-300"><i class="fa-solid fa-angle-right mr-3"></i>Contact Us</a></li>
                    <li><a href="#" class="hover:text-white duration-300"><i class="fa-solid fa-angle-right mr-3"></i>Our Services</a></li>
                    <li><a href="#" class="hover:text-white duration-300"><i class="fa-solid fa-angle-right mr-3"></i>Terms & Condition</a></li>
                    <li><a href="#" class="hover:text-white duration-300"><i class="fa-solid fa-angle-right mr-3"></i>Support</a></li>
                </ul>
            </div>

            <div>
                <h2 class="text-[25px] font-semibold mb-5">Business Hours</h2>
                <div class="space-y-2">
                    <div><p class="text-[17px] text-[#B0B9AE]">Monday - Friday</p><h4 class="text-[18px] font-semibold">09:00 am - 07:00 pm</h4></div>
                    <div><p class="text-[17px] text-[#B0B9AE]">Saturday</p><h4 class="text-[18px] font-semibold">09:00 am - 12:00 pm</h4></div>
                    <div><p class="text-[17px] text-[#B0B9AE]">Sunday</p><h4 class="text-[18px] font-semibold">Closed</h4></div>
                </div>
            </div>

            <div>
                <h2 class="text-[25px] font-semibold mb-5">Newsletter</h2>
                <p class="text-[17px] text-[#B0B9AE] mb-5">Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="relative">
                    <input type="email" placeholder="Your email" class="w-full h-15 rounded-lg border border-gray-500 bg-transparent px-6 text-[20px] placeholder:text-gray-400 focus:outline-none">
                    <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-white text-black px-6 h-12 rounded-lg text-[20px] hover:bg-[#4761FF] hover:text-white duration-300">SignUp</button>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-black">
        <div class="max-w-[88%] mx-auto py-7 flex flex-col md:flex-row items-center justify-between gap-5">
            <p class="text-[17px] text-gray-300">© <span class="font-semibold text-white">Your Site Name</span>,<span class="text-[#B0B9AE]"> All Right Reserved.</span></p>
            <p class="text-[17px] text-gray-300"><span class="text-[#B0B9AE]">Designed By</span> <span class="font-semibold text-white">HTML Codex</span></p>
        </div>
    </div>

</footer>

<button id="scrollTopBtn" class="hidden fixed bottom-6 right-6 w-12 h-12 rounded-full bg-[#4761FF] text-white items-center justify-center shadow-lg z-50">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileNavPanel = document.getElementById('mobileNavPanel');
    mobileMenuBtn.addEventListener('click', () => {
        mobileNavPanel.classList.toggle('hidden');
    });

    document.querySelectorAll('.faq-item').forEach(item => {
        const toggle = item.querySelector('.faq-toggle');
        const answer = item.querySelector('.faq-answer');
        toggle.addEventListener('click', () => {
            const isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => {
                i.classList.remove('open');
                i.querySelector('.faq-answer').style.maxHeight = null;
            });
            if (!isOpen) {
                item.classList.add('open');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });

    const scrollTopBtn = document.getElementById('scrollTopBtn');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            scrollTopBtn.classList.remove('hidden');
        } else {
            scrollTopBtn.classList.add('hidden');
        }
    });
    scrollTopBtn.addEventListener('click', () => window.scrollTo({top: 0, behavior: 'smooth'}));
</script>

</body>
</html>

