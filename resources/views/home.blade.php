@extends('layout.app')
@section('content')

    @if ($home)
    <section class="relative min-h-[85vh] md:min-h-screen overflow-hidden bg-[#0B1520]">
        @if ($home->heroVideoUrl())
            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ $home->heroVideoUrl() }}" type="video/mp4">
            </video>
        @endif
        <div class="absolute inset-0 bg-[#0B1520]/70"></div>

        <div class="relative max-w-7xl 2xl:max-w-[85%] mx-auto h-full min-h-[85vh] md:min-h-screen px-6 sm:px-0 flex items-center z-10">
            <div class="max-w-2xl text-white py-24 px-0 md:px-10">
                @if (filled($home->hero_tagline))
                    <p class="text-lg md:text-xl mb-4 text-white/85">
                        <span class="font-semibold text-[#4870F8]">{{ $home->hero_tagline }}</span>
                    </p>
                @endif
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6 tracking-tight">
                    {{ $home->hero_heading }}
                </h1>
                @if (filled($home->hero_subheading))
                    <p class="text-base md:text-lg text-white/80 leading-relaxed mb-10 max-w-xl">
                        {{ $home->hero_subheading }}
                    </p>
                @endif
                <div class="flex flex-wrap gap-4">
                    @if (filled($home->hero_primary_cta_text))
                        <a href="{{ $home->ctaUrl($home->hero_primary_cta_url, '/contact-us') }}"
                           class="inline-block bg-[#4870F8] hover:bg-[#3A5CE0] px-8 py-3.5 rounded-full text-base font-semibold transition">
                           {{ $home->hero_primary_cta_text }}
                        </a>
                    @endif
                    @if (filled($home->hero_secondary_cta_text))
                        <a href="{{ $home->ctaUrl($home->hero_secondary_cta_url, '/services') }}"
                           class="inline-block border-2 border-[#4870F8] text-white hover:bg-[#4870F8]/15 px-8 py-3.5 rounded-full text-base font-semibold transition">
                            {{ $home->hero_secondary_cta_text }}
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @if (filled($home->benefits_heading) || ! empty($home->benefits))
        <section class="py-16">

            <div class="max-w-[85%] mx-auto bg-[#F7FAFC]">
                @if (filled($home->benefits_heading))
                    <div class="text-center mb-12">
                        <h1 class="text-2xl md:text-4xl font-bold text-gray-800 mt-2">
                            {{ $home->benefits_heading }}
                        </h1>
                    </div>
                @endif
                @if (! empty($home->benefits))
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0.5 border border-slate-200 rounded-[5px]">
                        @foreach ($home->benefits as $index => $card)
                            <div data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}"
                                 class="p-10 lg:p-4 xl:p-8 bg-white relative group cursor-pointer overflow-hidden">

                                <div class="transition-transform duration-500 ease-out transform group-hover:-translate-y-2">
                                    <div
                                        class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center mb-6 transition-all duration-500 group-hover:bg-[#4870F8]/10">
                                        <img src="{{ $home->mediaUrl($card['icon'] ?? null) }}"
                                             alt="{{ $card['title'] ?? 'Benefit' }}"
                                             class="transition-transform duration-500 ease-out group-hover:scale-110">
                                    </div>

                                    <h3 class="text-lg mb-4 transition-colors duration-500 group-hover:text-[#4870F8]"
                                        style="font-weight: 600;">
                                        {{ $card['title'] ?? '' }}
                                    </h3>

                                    <p class="text-[#555555] leading-8 text-[16px] font-sans transition-colors duration-500">
                                        {{ $card['description'] ?? '' }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
    @endif

    <section data-aos="fade-up" class="relative w-full bg-slate-50 overflow-hidden">
        <div
            class="relative min-h-[650px] lg:min-h-[700px] xl:min-h-[750px] w-full flex items-end lg:items-end overflow-hidden">

            @if ($home->aboutImageUrl())
                <img src="{{ $home->aboutImageUrl() }}" alt="About Background"
                     class="absolute inset-0 w-full h-full object-cover z-0">
            @endif

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

                @if (filled($home->about_tagline))
                    <span class="text-[#4870F8] font-medium text-lg tracking-wide block mb-5">
                        {{ $home->about_tagline }}
                    </span>
                @endif

                @if (filled($home->about_heading))
                    <h2 class="text-[#0F172A] text-3xl lg:text-4xl font-semibold tracking-tight leading-[45px] mb-5">
                        {{ $home->about_heading }}
                    </h2>
                @endif

                @if (filled($home->about_description))
                    <p class="text-[#555555] font-sans text-sm leading-[25px] mb-7">
                        {{ $home->about_description }}
                    </p>
                @endif

                @if (! empty($home->about_features))
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                        @foreach ($home->about_features as $feature)
                            <div class="flex flex-col items-start">
                                <div class="mb-3">
                                    <img src="{{ $home->mediaUrl($feature['icon'] ?? null) }}"
                                         alt="{{ $feature['title'] ?? 'Feature' }}"
                                         class="w-16 h-16 object-contain">
                                </div>
                                <h3 class="text-[#0F172A] text-base font-semibold mb-1 text-lg font-sans">{{ $feature['title'] ?? '' }}</h3>
                                <p class="text-[#555555] text-md leading-[25px] font-sans">
                                    {{ $feature['description'] ?? '' }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if (filled($home->about_cta_text))
                    <div class="pb-2">
                        <a href="{{ $home->ctaUrl($home->about_cta_url, '/contact-us') }}"
                           class="inline-block bg-[#4870F8] hover:bg-[#3A5CE0] text-white font-semibold px-8 py-3 rounded-full transition text-sm tracking-wide">
                            {{ $home->about_cta_text }}
                        </a>
                    </div>
                @endif
            </div>

        </div>
    </section>
    @endif

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
                    class="bg-white p-8 md:p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 min-h-[280px] h-full flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-5.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center mb-2">
                        Website Development</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-2 sm:px-4">
                        Visually appealing, functionally robust websites tailored to your business.
                    </p>
                </div>

                <div class="service-learn-more-wrap">
                    <a href="{{ route('services') }}" class="service-learn-more">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-8 md:p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 min-h-[280px] h-full flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-6.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center mb-2">
                        SEO Services</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-2 sm:px-4">
                        Strategies designed to improve your search engine rankings and organic reach.
                    </p>
                </div>

                <div class="service-learn-more-wrap">
                    <a href="{{ route('services') }}" class="service-learn-more">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-8 md:p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 min-h-[280px] h-full flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-7.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center mb-2">
                        Digital Marketing</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-2 sm:px-4">
                        Campaigns that grow engagement, visibility, and conversions across channels.
                    </p>
                </div>
                <div class="service-learn-more-wrap">
                    <a href="{{ route('services') }}" class="service-learn-more">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-8 md:p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 min-h-[280px] h-full flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-8.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center mb-2">
                        Social Media Advertising</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-2 sm:px-4">
                        Reach your target audience effectively and drive measurable results.
                    </p>
                </div>
                <div class="service-learn-more-wrap">
                    <a href="{{ route('services') }}" class="service-learn-more">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 5 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-8 md:p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 min-h-[280px] h-full flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-9.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center mb-2">
                        Video Editing & Graphics
                    </h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-2 sm:px-4">
                        Elevate your content and brand image with professional creative services.
                    </p>
                </div>
                <div class="service-learn-more-wrap">
                    <a href="{{ route('services') }}" class="service-learn-more">
                        Learn more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 6 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-8 md:p-9 rounded-lg group-hover:rounded-b-none border border-slate-200 group-hover:border-[#4870F8]/30 transition-all duration-300 min-h-[280px] h-full flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-10.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center mb-2">
                        YouTube Management</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-2 sm:px-4">
                        Grow your channel so your videos reach their maximum potential through smarter promotion.
                    </p>
                </div>
                <div class="service-learn-more-wrap">
                    <a href="{{ route('services') }}" class="service-learn-more">
                        Learn more <i class="fas fa-arrow-right"></i>
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
                    <p class="text-gray-500 text-sm leading-relaxed">We learn about your business, goals, audience, and challenges.</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-6">
                    <span class="text-[#4870F8] font-semibold text-sm">02</span>
                    <h3 class="text-lg font-semibold text-[#0F172A] mt-2 mb-2">Plan</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We create a clear strategy tailored to your goals and priorities.</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-6">
                    <span class="text-[#4870F8] font-semibold text-sm">03</span>
                    <h3 class="text-lg font-semibold text-[#0F172A] mt-2 mb-2">Build</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We design and deliver in focused steps with progress you can review along the way.</p>
                </div>
                <div class="bg-white border border-slate-200 rounded-xl p-6">
                    <span class="text-[#4870F8] font-semibold text-sm">04</span>
                    <h3 class="text-lg font-semibold text-[#0F172A] mt-2 mb-2">Grow</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">We monitor performance, optimize results, and help your business keep growing.</p>
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

                @if ($home && filled($home->contact_tagline))
                    <span class="text-[#4870F8] text-xl font-medium">
                        {{ $home->contact_tagline }}
                    </span>
                @endif

                    @if ($home && filled($home->contact_heading))
                        <h2 class="text-[30px] md:text-[45px] leading-[1.1] font-semibold text-[#20233F] mt-5 mb-8">
                            {{ $home->contact_heading }}
                        </h2>
                    @endif

                    @if ($home && filled($home->contact_paragraph_1))
                        <p class="text-gray-500 text-[16px] leading-7 mb-4">
                            {{ $home->contact_paragraph_1 }}
                        </p>
                    @endif

                    @if ($home && filled($home->contact_paragraph_2))
                        <p class="text-gray-500 text-[16px] leading-7 mb-4">
                            {{ $home->contact_paragraph_2 }}
                        </p>
                    @endif

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

                   {{-- <h2 class="text-[36px] font-semibold text-[#20233F] mb-10">
                        Contact Us
                    </h2>--}}

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

    <x-testimonials.section-home />
@endsection
