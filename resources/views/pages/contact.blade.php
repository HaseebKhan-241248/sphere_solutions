@extends('layout.app')

@section('content')


    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden bg-[#0B1520]">
            @if($contact_us->heroImageUrl())
                <img src="{{ $contact_us->heroImageUrl() }}" alt="{{ $contact_us->main_heading }}" class="absolute inset-0 w-full h-full object-cover z-0">
            @else
                <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
                    <source src="{{ asset('videos/hero-video-1.mp4') }}" type="video/mp4">
                </video>
            @endif

            <div class="absolute inset-0 bg-[#0B1520]/70 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    {{ $contact_us->main_heading }}
                </h1>

                <x-page-breadcrumb current="Contact Us" />
            </div>

        </div>
    </section>


    <section data-aos="fade-up" data-aos-delay="100" class="py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-[85%] mx-auto">

            <div class="text-center max-w-xl mx-auto mb-16">
                <span class="text-[#4870F8] text-[20px] tracking-wide block mb-3">
                   {{ $contact_us->main_heading }}
                </span>
                <h2 class="text-[#1C2035] text-4xl md:text-[46px] font-bold tracking-tight leading-tight">
                    {{ $contact_us->sub_heading }}
                </h2>
            </div>


            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

                <div class="lg:col-span-6">
                    <h2 class="text-[#1C2035] text-3xl font-semibold tracking-tight mb-8">
                        {{ $contact_us->contact_form }}
                    </h2>

                    <x-contact-form />
                </div>

                <div class="lg:col-span-5 space-y-8">
                    <div>
                        <h2 class="text-[#1C2035] text-2xl font-semibold tracking-tight mb-8">
                            {{ $contact_us->contact_detail }}
                        </h2>

                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="size-10 rounded-full bg-[#4870F8] flex items-center justify-center text-white text-lg shrink-0">
                                    <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-black text-sm font-semibold tracking-wider">{{ $contact_us->our_office }}</h4>
                                    <p class="font-sans text-[#555555] text-sm">{{ $site[\App\Support\SiteSettings::ADDRESS] ?? 'Vancouver, BC, Canada' }}</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 border-t border-slate-300 pt-4">
                                <div class="size-10 rounded-full bg-[#4870F8] flex items-center justify-center text-white text-lg shrink-0">
                                    <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
                                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-black text-sm font-semibold tracking-wider">{{ $contact_us->call_us }}</h4>
                                    <p class="font-sans text-[#555555] text-sm">
                                        <a href="tel:{{ $sitePhoneTel }}" class="hover:text-[#4870F8]">{{ $site[\App\Support\SiteSettings::PHONE] ?? '+1 (604) 313-7091' }}</a>
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 border-t border-slate-300 pt-4">
                                <div class="size-10 rounded-full bg-[#4870F8] flex items-center justify-center text-white text-lg shrink-0">
                                    <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
                                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-black text-sm font-semibold tracking-wider">{{ $contact_us->mail_us }}</h4>
                                    <p class="font-sans text-[#555555] text-sm">
                                        <a href="mailto:{{ $site[\App\Support\SiteSettings::EMAIL] ?? 'info@spheremarketingsolutions.com' }}" class="hover:text-[#4870F8]">{{ $site[\App\Support\SiteSettings::EMAIL] ?? 'info@spheremarketingsolutions.com' }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full h-[280px] rounded-xl overflow-hidden shadow-sm border border-slate-100 relative">
                        <iframe
                            class="w-full h-full border-0"
                            src="https://www.google.com/maps?q={{ urlencode($contact_us->location) }}&output=embed"
                            allowfullscreen
                            loading="lazy">
                        </iframe>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection

