@extends('layout.app')
@section('content')

    <section class="relative min-h-[85vh] md:min-h-screen overflow-hidden bg-[#0B1520]">
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('videos/hero-video-1.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-[#0B1520]/70"></div>

        <div class="relative max-w-7xl mx-auto h-full min-h-[85vh] md:min-h-screen px-6 flex items-center z-10">
            <div class="max-w-2xl text-white py-24">
                <p class="text-lg md:text-xl mb-4 text-white/85">
                    Welcome to <span class="font-semibold text-[#4870F8]">Sphere Marketing Solutions</span>
                </p>
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6 tracking-tight">
                    Modern marketing that helps your business grow
                </h1>
                <p class="text-base md:text-lg text-white/80 leading-relaxed mb-10 max-w-xl">
                    Websites, SEO, social ads, and creative content — delivered with a clear plan and practical results.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('contact') }}"
                       class="inline-block bg-[#4870F8] hover:bg-[#3A5CE0] px-8 py-3.5 rounded-full text-base font-semibold transition">
                        Contact Us
                    </a>
                    <a href="{{ route('services') }}"
                       class="inline-block border-2 border-[#4870F8] text-white hover:bg-[#4870F8]/15 px-8 py-3.5 rounded-full text-base font-semibold transition">
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16">

        <div class="max-w-[85%] mx-auto bg-[#F7FAFC]">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0.5 border border-slate-200 rounded-[5px]">

                <!-- Card 1 -->
                <div data-aos="fade-up" data-aos-delay="100"
                     class="p-10 lg:p-4 xl:p-8 bg-white relative group cursor-pointer overflow-hidden">

                    <!-- Inner Wrapper for Ultra-Smooth Lift -->
                    <div class="transition-transform duration-500 ease-out transform group-hover:-translate-y-2">
                        <div
                            class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center mb-6 transition-all duration-500 group-hover:bg-[#4870F8]/10">
                            <img src="{{ asset('images/icon-1.png') }}"
                                 class="transition-transform duration-500 ease-out group-hover:scale-110">
                        </div>

                        <h3 class="text-lg mb-4 transition-colors duration-500 group-hover:text-[#4870F8]"
                            style="font-weight: 600;">
                            Web Development
                        </h3>

                        <p class="text-[#555555] leading-8 text-[16px] font-sans transition-colors duration-500">
                            Visually appealing, functionally robust websites built for your business goals.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div data-aos="fade-up" data-aos-delay="200"
                     class="p-10 lg:p-4 xl:p-8 bg-white relative group cursor-pointer overflow-hidden">

                    <div class="transition-transform duration-500 ease-out transform group-hover:-translate-y-2">
                        <div
                            class="w-16 h-16 flex items-center justify-center mb-6 rounded-full bg-[#EEF2FF] transition-all duration-500 group-hover:bg-[#4870F8]/10">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="transition-transform duration-500 ease-out group-hover:scale-110">
                        </div>

                        <h3 class="text-lg mb-4 transition-colors duration-500 group-hover:text-[#4870F8]"
                            style="font-weight: 600;">
                            Digital Marketing
                        </h3>

                        <p class="text-[#555555] leading-8 text-[16px] font-sans transition-colors duration-500">
                            Social ads, SEO, and campaigns that reach your audience and drive conversions.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div data-aos="fade-up" data-aos-delay="300"
                     class="p-10 lg:p-4 xl:p-8 bg-white relative group cursor-pointer overflow-hidden">

                    <div class="transition-transform duration-500 ease-out transform group-hover:-translate-y-2">
                        <div
                            class="w-16 h-16 flex items-center justify-center mb-6 rounded-full bg-[#EEF2FF] transition-all duration-500 group-hover:bg-[#4870F8]/10">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="transition-transform duration-500 ease-out group-hover:scale-110">
                        </div>

                        <h3 class="text-lg mb-4 transition-colors duration-500 group-hover:text-[#4870F8]"
                            style="font-weight: 600;">
                            Creative Content
                        </h3>

                        <p class="text-[#555555] leading-8 text-[16px] font-sans transition-colors duration-500">
                            Video editing and graphic design that elevate your brand image and content.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div data-aos="fade-up" data-aos-delay="400"
                     class="p-10 lg:p-4 xl:p-8 bg-white relative group cursor-pointer overflow-hidden">

                    <div class="transition-transform duration-500 ease-out transform group-hover:-translate-y-2">
                        <div
                            class="w-16 h-16 flex items-center justify-center mb-6 rounded-full bg-[#EEF2FF] transition-all duration-500 group-hover:bg-[#4870F8]/10">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="transition-transform duration-500 ease-out group-hover:scale-110">
                        </div>

                        <h3 class="text-lg mb-4 transition-colors duration-500 group-hover:text-[#4870F8]"
                            style="font-weight: 600;">
                            Quick Support
                        </h3>

                        <p class="text-[#555555] leading-8 text-[16px] font-sans transition-colors duration-500">
                            Our team is available Monday to Saturday to help with services and pricing.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section data-aos="fade-up" class="relative w-full bg-slate-50 overflow-hidden">
        <div
            class="relative min-h-[650px] lg:min-h-[700px] xl:min-h-[750px] w-full flex items-end lg:items-end overflow-hidden">

            <img src="{{ asset('images/about-play.jpg') }}" alt="About Background"
                 class="absolute inset-0 w-full h-full object-cover z-0">

            <!-- Play Button Container -->
            {{-- <div class="absolute inset-0 z-20 flex items-center justify-center lg:justify-start lg:pl-62">
                <button class="w-20 h-20 lg:w-24 lg:h-24 bg-[#4870F8] text-white rounded-full flex items-center justify-center shadow-2xl relative group xl:translate-x-[150px]">
                    <span class="absolute inset-0 bg-[#4870F8] rounded-full animate-ping opacity-40 duration-600"></span>

                    <svg class="w-6 h-6 lg:w-8 lg:h-8 fill-current ml-1 relative z-10" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </button>
            </div> --}}

            <div
                class="relative z-20 w-full lg:max-w-[45%] xl:max-w-[40%] 2xl:max-w-[42%] lg:ml-auto bg-white p-6 sm:p-10 shadow-2xl mt-50 mx-4 sm:mx-8 lg:mx-0 lg:mr-32 lg:rounded-t-xl lg:rounded-b-none overflow-y-auto xl:overflow-hidden bottom-0 self-end">

                <!-- About Us Subtitle -->
                <span class="text-[#4870F8] font-medium text-lg tracking-wide block mb-5">
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
                            <img src="{{ asset('images/icon-5.png') }}" alt="Service Icon"
                                 class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-[#0F172A] text-base font-semibold mb-1 text-lg font-sans">Client-First
                            Ethics</h3>
                        <p class="text-[#555555] text-md leading-[25px] font-sans">
                            We prioritize client success, ethical services, and maximizing ROI.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex flex-col items-start">
                        <div class="mb-3">
                            <img src="{{ asset('images/icon-2.png') }}" alt="Expert Icon"
                                 class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-[#0F172A] text-base font-semibold mb-1 text-lg font-sans">Dedicated Experts</h3>
                        <p class="text-[#555555] text-md leading-[25px] font-sans">
                            A tightly-knit team focused on innovation and results-driven delivery.
                        </p>
                    </div>
                </div>

                <div class="pb-2">
                    <a href="{{ route('contact') }}"
                       class="inline-block bg-[#4870F8] hover:bg-[#3A5CE0] text-white font-semibold px-8 py-3 rounded-full transition text-sm tracking-wide">
                        Contact Us
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="max-w-[85%] mx-auto py-16">

        <div class="text-center mb-12">
            <span class="text-[#4870F8] font-semibold text-sm tracking-widest uppercase">Our Services</span>
            <h2 class="text-2xl md:text-4xl font-bold text-gray-800 mt-2"> Services That Help Your Business Grow</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Card 1 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">

                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-5.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Website Development</h3>
                    <p class="lines text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Visually appealing, functionally robust websites tailored to your business.
                    </p>
                </div>

                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <a href="{{ route('services') }}" class="text-[#4870F8] text-sm font-medium">
                        Learn more <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-6.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center">
                        SEO Services</h3>
                    <p class="lines text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Strategies designed to improve your search engine rankings and organic reach.
                    </p>
                </div>

                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <a href="{{ route('services') }}" class="text-[#4870F8] text-sm font-medium">
                        Learn more <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-7.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Digital Marketing</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Campaigns that grow engagement, visibility, and conversions across channels.
                    </p>
                </div>
                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <a href="{{ route('services') }}" class="text-[#4870F8] text-sm font-medium">
                        Learn more <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-8.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Social Media Advertising</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Reach your target audience effectively and drive measurable results.
                    </p>
                </div>
                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <a href="{{ route('services') }}" class="text-[#4870F8] text-sm font-medium">
                        Learn more <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 5 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-9.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Video Editing & Graphics
                    </h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Elevate your content and brand image with professional creative services.
                    </p>
                </div>
                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <a href="{{ route('services') }}" class="text-[#4870F8] text-sm font-medium">
                        Learn more <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 6 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-10.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center">
                        YouTube Management</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Grow your channel so your videos reach their maximum potential through smarter promotion.
                    </p>
                </div>
                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <a href="{{ route('services') }}" class="text-[#4870F8] text-sm font-medium">
                        Learn more <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section data-aos="fade-up" class="py-20 bg-[#F7FAFC]">
        <div class="max-w-[85%] mx-auto">
            <div class="text-center mb-12">
                <span class="text-[#4870F8] font-semibold text-sm tracking-widest uppercase">Our Process</span>
                <h2 class="text-2xl md:text-4xl font-bold text-[#0F172A] mt-2">A simple path from idea to launch</h2>
                <p class="text-gray-500 mt-3 max-w-2xl mx-auto">
                    Clear steps, regular updates, and no surprises — so you always know what happens next.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white border border-slate-200 rounded-xl p-6">
                    <span class="text-[#4870F8] font-semibold text-sm">01</span>
                    <h3 class="text-lg font-semibold text-[#0F172A] mt-2 mb-2">Understand</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We learn your goals, audience, and what success looks like for your business.</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-6">
                    <span class="text-[#4870F8] font-semibold text-sm">02</span>
                    <h3 class="text-lg font-semibold text-[#0F172A] mt-2 mb-2">Plan</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">You get a clear scope, timeline, and package so expectations are aligned early.</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-6">
                    <span class="text-[#4870F8] font-semibold text-sm">03</span>
                    <h3 class="text-lg font-semibold text-[#0F172A] mt-2 mb-2">Build</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We design and deliver in focused steps with progress you can review along the way.</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-6">
                    <span class="text-[#4870F8] font-semibold text-sm">04</span>
                    <h3 class="text-lg font-semibold text-[#0F172A] mt-2 mb-2">Grow</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">After launch we support improvements, campaigns, and ongoing marketing needs.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-[85%] mx-auto">

            <!-- Heading -->
            <div class="flex items-center justify-between mb-16">
                <div>
                    <h1 class="mb-4 text-[#4870F8] text-xl">
                        Our Project
                    </h1>

                    <h2 class="text-xl md:text-[45px] leading-[1.3] font-bold text-[#20233F] max-w-2xl">
                        Recent work that helped clients grow
                    </h2>
                </div>

                <div class="flex gap-4">
                    <button id="projectPrevBtn"
                            class="size-10 md:w-16 md:h-16 rounded-full shadow-lg flex items-center justify-center hover:bg-[#4870F8] hover:text-white duration-300">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>

                    <button id="projectNextBtn"
                            class="size-10 md:w-16 md:h-16 rounded-full shadow-lg flex items-center justify-center hover:bg-[#4870F8] hover:text-white duration-300">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>

            <!-- Slider -->
            <div class="overflow-hidden">

                <div id="projectSlider"
                     class="flex transition-transform duration-500 ease-in-out pb-2">

                    <!-- Card -->
                    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 flex-shrink-0 px-4">

                        <div class="group rounded-2xl overflow-hidden border border-slate-200 bg-white">

                            <div class="relative overflow-hidden">

                                <img src="{{ asset('images/project-1.jpg') }}"
                                     alt="E-commerce website project"
                                     class="w-full h-75 object-cover">

                                <div
                                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

                                <div
                                    class="absolute inset-0 flex justify-center items-center gap-4 opacity-0 group-hover:opacity-100 transition">

                                    <a href="{{ route('project-details') }}" class="size-12 rounded-full bg-white flex justify-center items-center">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="{{ route('contact') }}" class="size-12 rounded-full bg-white flex justify-center items-center">
                                        <i class="fa-solid fa-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6">

                                <h3 class="text-lg font-semibold hover:text-[#4870F8]">
                                    E-commerce Website Build
                                </h3>

                                <p class="text-gray-500 mt-2">
                                    Custom storefront with clear product pages and a checkout flow built for conversions.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 flex-shrink-0 px-4">

                        <div class="group rounded-2xl overflow-hidden border border-slate-200 bg-white">

                            <div class="relative overflow-hidden">

                                <img src="{{ asset('images/project-2.jpg') }}"
                                     alt="Social media advertising project"
                                     class="w-full h-75 object-cover">

                                <div
                                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

                                <div
                                    class="absolute inset-0 flex justify-center items-center gap-4 opacity-0 group-hover:opacity-100 transition">

                                    <a href="{{ route('project-details') }}" class="size-12 rounded-full bg-white flex justify-center items-center">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="{{ route('contact') }}" class="size-12 rounded-full bg-white flex justify-center items-center">
                                        <i class="fa-solid fa-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6">

                                <h3 class="text-lg font-semibold hover:text-[#4870F8]">
                                    Social Ads Campaign
                                </h3>

                                <p class="text-gray-500 mt-2">
                                    Targeted Meta and Google ads that reached the right audience and grew qualified leads.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 flex-shrink-0 px-4">

                        <div class="group rounded-2xl overflow-hidden border border-slate-200 bg-white">

                            <div class="relative overflow-hidden">

                                <img src="{{ asset('images/project-3.jpg') }}"
                                     alt="SEO growth project"
                                     class="w-full h-75 object-cover">

                                <div
                                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

                                <div
                                    class="absolute inset-0 flex justify-center items-center gap-4 opacity-0 group-hover:opacity-100 transition">

                                    <a href="{{ route('project-details') }}" class="size-12 rounded-full bg-white flex justify-center items-center">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="{{ route('contact') }}" class="size-12 rounded-full bg-white flex justify-center items-center">
                                        <i class="fa-solid fa-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6">

                                <h3 class="text-lg font-semibold hover:text-[#4870F8]">
                                    Local SEO Growth
                                </h3>

                                <p class="text-gray-500 mt-2">
                                    On-page and content improvements that helped a service business rank for local searches.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!-- Card 4 -->
                    <div class="w-full md:w-1/2 lg:w-1/3 xl:w-1/4 flex-shrink-0 px-4">

                        <div class="group rounded-2xl overflow-hidden border border-slate-200 bg-white">

                            <div class="relative overflow-hidden">

                                <img src="{{ asset('images/project-4.jpg') }}"
                                     alt="Video and brand creative project"
                                     class="w-full h-75 object-cover">

                                <div
                                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition"></div>

                                <div
                                    class="absolute inset-0 flex justify-center items-center gap-4 opacity-0 group-hover:opacity-100 transition">

                                    <a href="{{ route('project-details') }}" class="size-12 rounded-full bg-white flex justify-center items-center">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a href="{{ route('contact') }}" class="size-12 rounded-full bg-white flex justify-center items-center">
                                        <i class="fa-solid fa-link"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6">

                                <h3 class="text-lg font-semibold hover:text-[#4870F8]">
                                    Brand Video & Creative
                                </h3>

                                <p class="text-gray-500 mt-2">
                                    Short-form video and graphics that gave the brand a consistent look across channels.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="py-24 bg-white">
        <div class="max-w-[85%] mx-auto">

            <div class="grid lg:grid-cols-2 gap-20 items-start">

                <div>

                <span class="text-[#4870F8] text-xl font-medium">
                    Contact Us
                </span>

                    <h2 class="text-[30px] md:text-[45px] leading-[1.1] font-semibold text-[#20233F] mt-5 mb-8">
                        Need Our Expert Help?
                        We're Here!
                    </h2>

                    <p class="text-gray-500 text-[16px] leading-7 mb-4">
                        Tell us what you need — a new website, more leads, better SEO, or ongoing creative support.
                        We’ll review your goals and suggest a clear next step.
                    </p>

                    <p class="text-gray-500 text-[16px] leading-7 mb-4">
                        Most conversations start with a short call or message. You’ll hear back within one business day.
                    </p>

                    <a href="tel:{{ $sitePhoneTel }}" class="inline-flex overflow-hidden rounded-xl border border-[#4870F8]">

                    <span
                        class="size-14 bg-[#4870F8] flex items-center justify-center text-white text-lg">
                        <i class="fa-solid fa-phone"></i>
                    </span>

                        <span class="px-4 flex items-center text-[#4870F8] text-xl font-medium bg-white">
                        {{ $site[\App\Support\SiteSettings::PHONE] ?? '+1 (604) 313-7091' }}
                    </span>

                    </a>

                </div>

                <div>

                    <h2 class="text-[36px] font-semibold text-[#20233F] mb-10">
                        Contact Us
                    </h2>

                    <x-contact-form/>

                </div>

            </div>

        </div>
    </section>

    <x-team.section
        wrapper-class="bg-white py-24"
        inner-class="max-w-[85%] mx-auto"
        grid-class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"
    />

    <section data-aos="fade-up" data-aos-delay="100" class="py-24 bg-white">
        <div class="md:max-w-[88%] mx-auto px-6">

            <div class="flex items-center justify-between mb-16">

                <div>
                    <h1 class="mb-4 text-[#4870F8] text-xl">Testimonial</h1>

                    <h2 class="text-[20px] md:text-[45px] font-semibold leading-[1.1] text-[#20233F] md:max-w-2xl">
                        What Clients Say
                        <br>
                        About Our Services!
                    </h2>
                </div>

                <div class="flex gap-2 md:gap-4">

                    <button id="previous"
                            class="size-10 md:w-16 md:h-16 rounded-full bg-white shadow-[0_0_8px_rgba(0,0,0,0.1)] cursor-pointer flex items-center justify-center hover:bg-[#4870F8] hover:text-white duration-300">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>

                    <button id="next"
                            class="size-10 md:w-16 md:h-16 rounded-full bg-white shadow-[0_0_8px_rgba(0,0,0,0.1)] cursor-pointer flex items-center justify-center hover:bg-[#4870F8] hover:text-white duration-300">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>


                </div>

            </div>

            <div class="overflow-hidden">
                <div id="slider" class="flex gap-8">

                    <div class="testi-card animate">
                        <img src="https://i.pravatar.cc/150?img=1" alt="Ayesha Khan">
                        <p class="text-[#20233F] font-sans text-20px">Sphere rebuilt our website and set up ads that finally brought consistent inquiries. Clear communication the whole way.</p>
                        <h3>Ayesha Khan</h3>
                        <span>Marketing Head</span>
                    </div>

                    <div class="testi-card">
                        <img src="https://i.pravatar.cc/150?img=2" alt="Bilal Ahmed">
                        <p class="text-[#20233F] font-sans text-20px">They handled our social creatives and posting schedule. Our brand looks more professional and engagement is up.</p>
                        <h3>Bilal Ahmed</h3>
                        <span>Product Designer</span>
                    </div>

                    <div class="testi-card">
                        <img src="https://i.pravatar.cc/150?img=3" alt="Sara Malik">
                        <p class="text-[#20233F] font-sans text-20px">Practical SEO work and honest timelines. We started ranking for the searches that matter to our local customers.</p>
                        <h3>Sara Malik</h3>
                        <span>Founder, Studio X</span>
                    </div>

                    <div class="testi-card">
                        <img src="https://i.pravatar.cc/150?img=4" alt="Usman Tariq">
                        <p class="text-[#20233F] font-sans text-20px">Fast turnaround on video edits and landing page updates. Easy team to work with when priorities change.</p>
                        <h3>Usman Tariq</h3>
                        <span>CTO, Nova Labs</span>
                    </div>

                    <div class="testi-card">
                        <img src="https://i.pravatar.cc/150?img=5" alt="Hina Sheikh">
                        <p class="text-[#20233F] font-sans text-20px">From package selection to launch, everything was straightforward. Support after go-live has been reliable.</p>
                        <h3>Hina Sheikh</h3>
                        <span>Operations Lead</span>
                    </div>

                    <div class="testi-card">
                        <img src="https://i.pravatar.cc/150?img=6" alt="Faisal Raza">
                        <p class="text-[#20233F] font-sans text-20px">We needed one partner for web and ads. Sphere kept the plan simple and focused on results we could measure.</p>
                        <h3>Faisal Raza</h3>
                        <span>Client Success Manager</span>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
