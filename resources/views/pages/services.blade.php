@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">
            <img src="{{ asset('images/about-hero.jpg') }}" alt="Services Hero"
                 class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 bg-black/10 z-10"></div>
            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Service
                </h1>
                <x-page-breadcrumb current="Service" />
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

                <div class="service-learn-more-wrap">
                    <a href="{{ route('service-details') }}" class="service-learn-more">
                        Read More <i class="fas fa-arrow-right"></i>
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

                <div class="service-learn-more-wrap">
                    <a href="{{ route('service-details') }}" class="service-learn-more">
                        Read More <i class="fas fa-arrow-right"></i>
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
                <div class="service-learn-more-wrap">
                    <a href="{{ route('service-details') }}" class="service-learn-more">
                        Read More <i class="fas fa-arrow-right"></i>
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
                <div class="service-learn-more-wrap">
                    <a href="{{ route('service-details') }}" class="service-learn-more">
                        Read More <i class="fas fa-arrow-right"></i>
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
                <div class="service-learn-more-wrap">
                    <a href="{{ route('contact') }}" class="service-learn-more">
                        Read More <i class="fas fa-arrow-right"></i>
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
                <div class="service-learn-more-wrap">
                    <a href="{{ route('contact') }}" class="service-learn-more">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <x-testimonials.section-slider />

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

                   {{-- <h2 class="text-[36px] font-semibold text-[#20233F] mb-10">
                        Contact Us
                    </h2>--}}

                    <x-contact-form />

                </div>

            </div>

        </div>
    </section>

@endsection
