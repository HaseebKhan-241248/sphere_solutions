@extends('layout.app')

@section('content')

    <section class="relative">
        <div class="relative h-80 bg-cover bg-center flex items-center justify-center text-center bg-black/30"
             style="background-image: url({{ asset('images/about-hero.jpg') }});">
            <div class="text-white px-4">
                <h1 class="text-4xl md:text-7xl font-bold mb-4">Service</h1>
                <p class="text-lg space-x-3">
                    <a href="{{ route('home') }}" class="hover:text-[#4870F8]">Home</a>
                    <span>/</span>
                    <span class="text-[#4870F8]"> Service </span>
                </p>
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
            <div data-aos="fade-up" data-aos-delay="100"
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">

                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
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
                    <a href="{{ route('service-details') }}" class="text-[#4870F8] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div data-aos="fade-up" data-aos-delay="200"
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
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
                    <a href="{{ route('service-details') }}" class="text-[#4870F8] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div data-aos="fade-up" data-aos-delay="300"
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
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
                    <a href="{{ route('service-details') }}" class="text-[#4870F8] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 4 -->
            <div data-aos="fade-up" data-aos-delay="100"
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4870F8] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#EEF2FF] rounded-full justify-center">
                            <img src="{{ asset('images/icon-8.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4870F8] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Social Media Advertising</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Reach your target audience effectively with Meta and Google Ads that drive measurable results.
                    </p>
                </div>
                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <a href="{{ route('service-details') }}" class="text-[#4870F8] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 5 -->
            <div data-aos="fade-up" data-aos-delay="200"
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
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
                    <a href="{{ route('contact') }}" class="text-[#4870F8] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

            <!-- Card 6 -->
            <div data-aos="fade-up" data-aos-delay="300"
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
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
                    <a href="{{ route('contact') }}" class="text-[#4870F8] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="w-full bg-[#F8F9FA] py-16 md:py-24 font-sans antialiased overflow-hidden">
        <div class="w-[90%] md:w-[85%] mx-auto max-w-6xl">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div>
                    <span class="text-[#4870F8] font-semibold text-xl tracking-wide block mb-2">Testimonial</span>
                    <h2 class="text-[#1C2035] font-bold text-3xl md:text-5xl leading-tight max-w-lg">
                        What Clients Say About Our Services!
                    </h2>
                </div>

                <div class="flex items-center gap-4 shrink-0">
                    <button id="customPrevBtn"
                            class="w-16 h-16 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-[#4870F8] hover:text-white hover:border-[#4870F8] shadow-sm transition duration-300">
                        <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                        </svg>
                    </button>
                    <button id="customNextBtn"
                            class="w-16 h-16 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-[#4870F8] hover:text-white hover:border-[#4870F8] shadow-sm transition duration-300">
                        <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div id="testimonialSlider"
                 class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-none py-4">
                <div data-aos="fade-up" data-aos-delay="100"
                    class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm hover:-translate-y-1 transition duration-300">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="{{ asset('images/team-1.jpg') }}"
                             alt="Ayesha Khan" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        Sphere rebuilt our website and set up ads that finally brought consistent inquiries. Clear communication the whole way.
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Ayesha Khan</h4>
                    <span class="prof text-[#4870F8] font-medium text-sm mt-1">Marketing Head</span>
                </div>

                <div data-aos="fade-up" data-aos-delay="200"
                    class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm hover:-translate-y-1 transition duration-300">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="{{ asset('images/team-2.jpg') }}"
                             alt="Bilal Ahmed" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        They handled our social creatives and posting schedule. Our brand looks more professional and engagement is up.
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Bilal Ahmed</h4>
                    <span class="prof text-[#4870F8] font-medium text-sm mt-1">Product Designer</span>
                </div>

                <div data-aos="fade-up" data-aos-delay="300"
                    class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm hover:-translate-y-1 transition duration-300">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="{{ asset('images/team-3.jpg') }}"
                             alt="Sara Malik" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        Practical SEO work and honest timelines. We started ranking for the searches that matter to our local customers.
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Sara Malik</h4>
                    <span class="prof text-[#4870F8] font-medium text-sm mt-1">Founder, Studio X</span>
                </div>

                <div data-aos="fade-up" data-aos-delay="400"
                    class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm hover:-translate-y-1 transition duration-300">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="{{ asset('images/team-4.jpg') }}"
                             alt="Hina Sheikh" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        From package selection to launch, everything was straightforward. Support after go-live has been reliable.
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Hina Sheikh</h4>
                    <span class="prof text-[#4870F8] font-medium text-sm mt-1">Operations Lead</span>
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
                        We'll review your goals and suggest a clear next step.
                    </p>

                    <p class="text-gray-500 text-[16px] leading-7 mb-4">
                        Most conversations start with a short call or message. You'll hear back within one business day.
                    </p>

                    <a href="tel:{{ $sitePhoneTel ?? '+16043137091' }}" class="inline-flex overflow-hidden rounded-xl border border-[#4870F8]">

                <span
                    class="size-14 bg-linear-to-r from-[#4870F8] to-[#6B8AFF] flex items-center justify-center text-white text-lg">
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

                    <x-contact-form />

                </div>

            </div>

        </div>
    </section>

@endsection
