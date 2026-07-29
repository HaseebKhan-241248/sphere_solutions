@extends('layout.app')
@section('content')

    <section class="relative h-screen overflow-hidden">

        <!-- Slide 1 (Active by default, no hidden class) -->
        <div class="hero-slide active absolute inset-0">
            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('videos/hero-video-1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-black/40"></div>

            <div class="relative max-w-7xl mx-auto h-full px-6 flex items-center z-10">
                <div class="max-w-2xl text-white">
                    <p class="animate-shift-left delay-1 text-xl md:text-2xl mb-5 opacity-0">
                        Welcome to <span class="font-bold">GrowMark</span>
                    </p>
                    <h1 class="animate-shift-left delay-2 text-5xl md:text-7xl font-bold leading-tight mb-8 opacity-0">
                        Unlock Your <br> Business Growth
                    </h1>
                    <div class="animate-shift-left delay-3 opacity-0">
                        <a href="#"
                           class="inline-block bg-[#4761FF] hover:bg-blue-700 px-10 py-4 rounded-full text-lg font-semibold transition">
                            Explore More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 (No hidden class, managed via opacity) -->
        <div class="hero-slide absolute inset-0">
            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('videos/hero-video-2.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="absolute inset-0 bg-black/40"></div>

            <div class="relative max-w-7xl mx-auto h-full px-6 flex items-center justify-end z-10">
                <div class="max-w-2xl text-white text-right">
                    <p class="animate-shift-right delay-1 text-xl md:text-2xl mb-5 opacity-0">
                        Creative Digital Agency
                    </p>
                    <h1 class="animate-shift-right delay-2 text-5xl md:text-7xl font-bold leading-tight mb-8 opacity-0">
                        We Build <br> Amazing Brands
                    </h1>
                    <div class="animate-shift-right delay-3 opacity-0">
                        <a href="#"
                           class="inline-block bg-[#4761FF] hover:bg-blue-700 px-10 py-4 rounded-full text-lg font-semibold transition">
                            Explore More
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <button id="prevBtn"
                class="absolute left-6 top-1/2 -translate-y-1/2 w-16 h-16 rounded-full bg-[#4761FF]/90 hover:bg-[#4761FF] flex items-center justify-center text-white z-20 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>

        <button id="nextBtn"
                class="absolute right-6 top-1/2 -translate-y-1/2 w-16 h-16 rounded-full bg-[#4761FF]/90 hover:bg-[#4761FF] flex items-center justify-center text-white z-20 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
    </section>

    <section class="py-16 overflow-hidden">

        <div class="max-w-[85%] mx-auto bg-[#F5F5F5]">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0.5 shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] rounded-[5px]">

                <!-- Card 1 -->
                <div data-aos="fade-up" data-aos-delay="100" class="p-10 bg-white transition-all duration-300 group cursor-pointer">
                    <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center mb-6 transition-colors duration-300">
                        <img src="{{ asset('images/icon-1.png') }}" class="transition duration-300">
                    </div>

                    <h3 class="text-lg mb-4 transition-colors duration-300" style="font-weight: 500;">
                        Web Development
                    </h3>

                    <p class="text-[#555555] leading-8 text-[16px] font-sans transition-colors duration-300">
                        Visually appealing, functionally robust websites built for your business goals.
                    </p>
                </div>

                <!-- Card 2 -->
                <div data-aos="fade-up" data-aos-delay="200" class="p-10 bg-white transition-all duration-300 group cursor-pointer">
                    <div class="w-16 h-16 flex items-center justify-center mb-6 rounded-full bg-[#F1F3FA] transition-colors duration-300">
                        <img src="{{ asset('images/icon-2.png') }}" class="transition duration-300 ">
                    </div>

                    <h3 class="text-lg mb-4 transition-colors duration-300" style="font-weight: 500;">
                        Digital Marketing
                    </h3>

                    <p class="text-[#555555] leading-8 text-[16px] font-sans transition-colors duration-300">
                        Social ads, SEO, and campaigns that reach your audience and drive conversions.
                    </p>
                </div>

                <!-- Card 3 -->

                <div data-aos="fade-up" data-aos-delay="300" class="p-10 bg-white transition-all duration-300 group cursor-pointer">
                    <div class="w-16 h-16 flex items-center justify-center mb-6 rounded-full bg-[#F1F3FA] transition-colors duration-300">
                        <img src="{{ asset('images/icon-3.png') }}" class="transition duration-300 ">
                    </div>

                    <h3 class="text-lg mb-4 transition-colors duration-300" style="font-weight: 500;">
                        Creative Content
                    </h3>

                    <p class="text-[#555555] leading-8 text-[16px] font-sans transition-colors duration-300">
                        Video editing and graphic design that elevate your brand image and content.
                    </p>
                </div>

                <!-- Card 4 -->

                <div data-aos="fade-up" data-aos-delay="400" class="p-10 bg-white transition-all duration-300 group cursor-pointer">
                    <div class="w-16 h-16 flex items-center justify-center mb-6 rounded-full bg-[#F1F3FA] transition-colors duration-300">
                        <img src="{{ asset('images/icon-4.png') }}" class="transition duration-300 ">
                    </div>

                    <h3 class="text-lg mb-4 transition-colors duration-300" style="font-weight: 500;">
                        Quick Support
                    </h3>

                    <p class="text-[#555555] leading-8 text-[16px] font-sans transition-colors duration-300">
                        Our team is available Monday to Saturday to help with services and pricing.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section data-aos="fade-up" class="relative w-full bg-slate-50 overflow-hidden">
        <div class="relative min-h-[650px] lg:min-h-[700px] xl:min-h-[750px] w-full flex items-end lg:items-end overflow-hidden">

            <img src="{{ asset('images/about-play.jpg') }}" alt="About Background" class="absolute inset-0 w-full h-full object-cover z-0">

            <!-- Play Button Container -->
            <div class="absolute inset-0 z-20 flex items-center justify-center lg:justify-start lg:pl-62">
                <button class="w-20 h-20 lg:w-24 lg:h-24 bg-[#4761FF] text-white rounded-full flex items-center justify-center shadow-2xl relative group xl:translate-x-[150px]">
                    <span class="absolute inset-0 bg-[#4761FF] rounded-full animate-ping opacity-40 duration-600"></span>

                    <svg class="w-6 h-6 lg:w-8 lg:h-8 fill-current ml-1 relative z-10" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </button>
            </div>

            <div class="relative z-20 w-full lg:max-w-[45%] xl:max-w-[40%] 2xl:max-w-[42%] lg:ml-auto bg-white p-6 sm:p-10 shadow-2xl mt-50 mx-4 sm:mx-8 lg:mx-0 lg:mr-32 lg:rounded-t-xl lg:rounded-b-none overflow-y-auto xl:overflow-hidden bottom-0 self-end">

                <!-- About Us Subtitle -->
                <span class="text-[#4761FF] font-medium text-lg tracking-wide block mb-5">
                    About Us
                </span>

                <!-- Main Heading -->
                <h2 class="text-[#0F172A] text-3xl lg:text-4xl font-semibold tracking-tight leading-[45px] mb-5">
                    The Best Marketing Agency to Improve Your Businesses
                </h2>

                <!-- Paragraph text -->
                <p class="text-[#555555] font-sans text-sm leading-[25px] mb-7">
                    Welcome to Sphere Marketing Solutions. We specialize in web development, social media advertising,
                    SEO, video editing, graphic design, and YouTube channel management to enhance your online presence
                    and achieve your business goals.
                </p>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                    <!-- Feature 1 -->
                    <div class="flex flex-col items-start">
                        <div class="mb-3">
                            <img src="{{ asset('images/icon-5.png') }}" alt="Service Icon" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-[#0F172A] text-base font-semibold mb-1 text-lg font-sans">Client-First Ethics</h3>
                        <p class="text-[#555555] text-md leading-[25px] font-sans">
                            We prioritize client success, ethical services, and maximizing ROI.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex flex-col items-start">
                        <div class="mb-3">
                            <img src="{{ asset('images/icon-2.png') }}" alt="Expert Icon" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-[#0F172A] text-base font-semibold mb-1 text-lg font-sans">Dedicated Experts</h3>
                        <p class="text-[#555555] text-md leading-[25px] font-sans">
                            A tightly-knit team focused on innovation and results-driven delivery.
                        </p>
                    </div>
                </div>

                <div class="pb-2">
                    <a href="{{ route('contact') }}"
                       class="inline-block bg-[#4761FF] hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-full transition shadow-md hover:shadow-lg text-sm tracking-wide">
                        Explore More
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="max-w-[85%] mx-auto py-16">

        <div class="text-center mb-12">
            <span class="text-[#4761FF] font-semibold text-sm tracking-widest uppercase">Our Services</span>
            <h2 class="text-2xl md:text-4xl font-bold text-gray-800 mt-2">  Services That Help Your Business Grow</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Card 1 -->
            <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">

                <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-5.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Website Development</h3>
                    <p class="lines text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Visually appealing, functionally robust websites tailored to your business.
                    </p>
                </div>

                <div class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-6.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        SEO Services</h3>
                    <p class="lines text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Strategies designed to improve your search engine rankings and organic reach.
                    </p>
                </div>

                 <div class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-7.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Digital Marketing</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Campaigns that grow engagement, visibility, and conversions across channels.
                    </p>
                </div>
                 <div class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-8.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Social Media Advertising</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Reach your target audience effectively and drive measurable results.
                    </p>
                </div>
                <div class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-9.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Video Editing & Graphics
                    </h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Elevate your content and brand image with professional creative services.
                    </p>
                </div>
                 <div class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-10.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        YouTube Management</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Grow your channel so your videos reach their maximum potential through smarter promotion.
                    </p>
                </div>
                 <div class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="py-24 bg-white">
        <div class="max-w-[85%] mx-auto">
            <div class="flex items-center justify-between mb-16">
                <div>
                    <h1 class="mb-4 text-[#4761FF] text-xl">Our Project</h1>
                    <h2 class="text-xl md:text-[45px] leading-[1.3] font-bold text-[#20233F] max-w-2xl">
                        We've Done Lot's of
                        Awesome Projects
                    </h2>
                </div>
                <div class="flex gap-2 md:gap-4">
                    <button id="projectPrevBtn" class="size-10 md:w-16 md:h-16 rounded-full bg-white shadow-[0_0_8px_rgba(0,0,0,0.1)] cursor-pointer flex items-center justify-center hover:bg-blue-600 hover:text-white duration-300">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>

                    <button id="projectNextBtn" class="size-10 md:w-16 md:h-16 rounded-full bg-white shadow-[0_0_8px_rgba(0,0,0,0.1)] cursor-pointer flex items-center justify-center hover:bg-blue-600 hover:text-white duration-300">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>

                </div>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">

                <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-1.jpg') }}" class="w-full h-75 object-cover " alt="project1">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>


                        <div
                            class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center ">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center ">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer" style="font-weight: 600">
                            Data Analytics & Insights
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">

                            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        </p>

                    </div>

                </div>

                <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/project-2.jpg') }}" class="w-full h-75 object-cover ">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div
                            class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center ">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer" style="font-weight: 600">
                            Marketing Content Strategy
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        </p>

                    </div>
                </div>

                <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-3.jpg') }}" class="w-full h-75 object-cover ">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div
                            class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer" style="font-weight: 600">
                            Social Marketing Strategy
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="py-24 bg-white">
        <div class="max-w-[85%] mx-auto">

            <div class="grid lg:grid-cols-2 gap-20 items-start">

                <div>

                <span class="text-[#4761FF] text-xl font-medium">
                    Get A Quote
                </span>

                    <h2 class="text-[30px] md:text-[45px] leading-[1.1] font-semibold text-[#20233F] mt-5 mb-8">
                        Need Our Expert Help?
                        We're Here!
                    </h2>

                    <p class="text-gray-500 text-[16px] leading-7 mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                        sed stet lorem sit clita duo justo.
                    </p>

                    <p class="text-gray-500 text-[16px] leading-7 mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                        sed stet lorem sit clita duo justo.
                    </p>

                    <a href="#" class="inline-flex overflow-hidden rounded-xl border border-[#4761FF]">

                    <span
                        class="size-14 bg-linear-to-r from-[#4761FF] to-[#5C6CFF] flex items-center justify-center text-white text-lg">
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

                    <form action="#" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div class="w-full">
                                <input type="text" placeholder="Your Name" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-base md:text-md outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200">
                            </div>

                            <div class="w-full">
                                <input type="email" placeholder="Yur Email"
                                       class="w-full h-14 rounded-xl border border-gray-300 px-5 text-base md:text-md outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200">
                            </div>

                            <div class="w-full">
                                <input type="text" placeholder="Your Mobile"
                                       class="w-full h-14 rounded-xl border border-gray-300 px-5 text-base md:text-md outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200">
                            </div>

                            <div class="w-full">
                                <select class="w-full h-14 rounded-xl border border-gray-300 px-5 text-base md:text-md placeholder:text-gray-400 md:text-md text-gray-700 outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200 bg-white">
                                    <option disabled selected>Choose A Service</option>
                                    <option>Digital Marketing</option>
                                    <option>SEO</option>
                                    <option>Content Marketing</option>
                                    <option>Social Marketing</option>
                                </select>
                            </div>

                        </div>

                        <label>
                            <textarea rows="6" placeholder="Message" class="w-full mt-6 rounded-xl border border-gray-300 px-6 p-2 text-md outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200"></textarea>
                        </label>

                        <button
                            class="w-full mt-4 h-14 rounded-xl text-white text-lg bg-linear-to-r from-[#4761FF] to-[#5C6CFF] hover:opacity-90 duration-300 cursor-pointer">
                            Submit Now
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </section>

    <section data-aos="fade-up">
        <div class="bg-white py-24 max-w-[85%] mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-[#4761FF] text-lg tracking-wide block mb-3">
                    Our Team
                </span>
                <h2 class="text-[#0F172A] text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                    Our Expert People <br> Ready to Help You
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Card 1 -->

                    <div class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 transition duration-700 border border-slate-50 relative group">

                        <div class="relative overflow-hidden mb-5">
                            <img class="w-full h-[320px] object-cover" src="{{ asset('images/CEO.png') }}" alt="Alex Robin">

                            <ul class="absolute top-4 left-4 flex flex-col space-y-2">

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-0 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-100 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-200 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-300 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <h5 class="text-[#0F172A] transition-colors duration-300 text-lg font-semibold mb-1">
                            Alex Robin</h5>

                        <span class="text-[#4761FF] transition-colors duration-300 text-sm">Founder & CEO</span>
                    </div>

                <!-- Card 2 -->
                    <div class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 transition duration-700 border border-slate-50 relative group">

                        <div class="relative overflow-hidden mb-5">
                            <img class="w-full h-[320px] object-cover" src="{{ asset('images/CoFounder.png') }}"
                                 alt="Adam Crew">

                            <ul class="absolute top-4 left-4 flex flex-col space-y-2">

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-0 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-100 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-200 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-300 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <h5 class="text-[#0F172A] transition-colors duration-300 text-lg font-semibold mb-1">
                            Adam Crew</h5>
                        <span class="text-[#4761FF] transition-colors duration-300 text-sm">Co Founder</span>
                    </div>


                    <!-- Card 3 -->
                    <div class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 transition duration-700 border border-slate-50 relative group">
                        <div class="relative overflow-hidden mb-5">
                            <img class="w-full h-[320px] object-cover" src="{{ asset('images/team-3.jpg') }}" alt="Boris Johnson">

                            <ul class="absolute top-4 left-4 flex flex-col space-y-2">

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-0 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-100 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-200 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-300 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <h5 class="text-[#0F172A] transition-colors duration-300 text-lg font-semibold mb-1">
                            Boris Johnson</h5>
                        <span class="text-[#4761FF] transition-colors duration-300 text-sm">Executive Manager</span>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 transition duration-700 border border-slate-50 relative group">
                        <div class="relative overflow-hidden mb-5">
                            <img class="w-full h-[320px] object-cover" src="{{ asset('images/team-4.jpg') }}" alt="Robert Jordan">

                            <ul class="absolute top-4 left-4 flex flex-col space-y-2">

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-0 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-100 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-200 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                                        </svg>
                                    </a>
                                </li>

                                <li class="opacity-0 -translate-x-8 transition-all duration-500 delay-300 group-hover:opacity-100 group-hover:translate-x-0">
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <h5 class="text-[#0F172A] transition-colors duration-300 text-lg font-semibold mb-1">
                            Robert Jordan</h5>
                        <span class="text-[#4761FF] transition-colors duration-300 text-sm">Digital Marketer</span>
                    </div>

                </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="py-24 bg-white">
        <div class="md:max-w-[88%] mx-auto px-6">

            <div class="flex items-center justify-between mb-16">

                <div>
                    <h1 class="mb-4 text-[#4761FF] text-xl">Testimonial</h1>

                    <h2 class="text-[20px] md:text-[45px] font-semibold leading-[1.1] text-[#20233F] md:max-w-2xl">
                        What Clients Say
                        <br>
                        About Our Services!
                    </h2>
                </div>

                <div class="flex gap-2 md:gap-4">

                    <button id="previous" class="size-10 md:w-16 md:h-16 rounded-full bg-white shadow-[0_0_8px_rgba(0,0,0,0.1)] cursor-pointer flex items-center justify-center hover:bg-blue-600 hover:text-white duration-300">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>

                    <button id="next" class="size-10 md:w-16 md:h-16 rounded-full bg-white shadow-[0_0_8px_rgba(0,0,0,0.1)] cursor-pointer flex items-center justify-center hover:bg-blue-600 hover:text-white duration-300">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>



                </div>

            </div>

            <div class="overflow-hidden">
                <div id="slider" class="flex gap-8">

                    <div class="testi-card animate">
                        <img src="https://i.pravatar.cc/150?img=1">
                        <p class="text-[#20233F] font-sans text-20px">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                            stet lorem sit clita duo justo</p>
                        <h3>Ayesha Khan</h3>
                        <span>Marketing Head</span>
                    </div>

                    <div class="testi-card">
                        <img src="https://i.pravatar.cc/150?img=2">
                        <p class="text-[#20233F] font-sans text-20px">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                            stet lorem sit clita duo justo</p>
                        <h3>Bilal Ahmed</h3>
                        <span>Product Designer</span>
                    </div>

                    <div class="testi-card">
                        <img src="https://i.pravatar.cc/150?img=3">
                        <p class="text-[#20233F] font-sans text-20px">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                            stet lorem sit clita duo justo</p>
                        <h3>Sara Malik</h3>
                        <span>Founder, Studio X</span>
                    </div>

                    <div class="testi-card">
                        <img src="https://i.pravatar.cc/150?img=4">
                        <p class="text-[#20233F] font-sans text-20px">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                            stet lorem sit clita duo justo</p>
                        <h3>Usman Tariq</h3>
                        <span>CTO, Nova Labs</span>
                    </div>

                    <div class="testi-card">
                        <img src="https://i.pravatar.cc/150?img=5">
                        <p class="text-[#20233F] font-sans text-20px">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                            stet lorem sit clita duo justo</p>
                        <h3>Hina Sheikh</h3>
                        <span>Operations Lead</span>
                    </div>

                    <div class="testi-card">
                        <img src="https://i.pravatar.cc/150?img=6">
                        <p class="text-[#20233F] font-sans text-20px">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                            stet lorem sit clita duo justo</p>
                        <h3>Faisal Raza</h3>
                        <span>Client Success Manager</span>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
