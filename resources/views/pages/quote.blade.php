@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero" class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Quote
                </h1>

                <x-page-breadcrumb current="Quote" />
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

                  {{--  <h2 class="text-[36px] font-semibold text-[#20233F] mb-10">
                        Contact Us
                    </h2>--}}

                    <x-contact-form />

                </div>

            </div>

        </div>
    </section>



@endsection
