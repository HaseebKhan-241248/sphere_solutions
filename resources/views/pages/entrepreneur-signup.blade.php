@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="Join Sphere Global Network"
                 class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20 px-4">
                <h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Join Us
                </h1>

                <x-page-breadcrumb current="Entrepreneur Network" />
            </div>

        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="py-20 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-[85%] mx-auto">

            <div class="text-center max-w-2xl mx-auto mb-12 md:mb-16">
                <span class="text-[#4870F8] text-[18px] md:text-[20px] tracking-wide block mb-3">
                    Entrepreneur Network
                </span>
                <h2 class="text-[#1C2035] text-3xl md:text-[46px] font-bold tracking-tight leading-tight mb-5">
                    Join Sphere’s Global Entrepreneur Network
                </h2>
                <p class="text-[#555555] text-base md:text-lg leading-relaxed">
                    We are building a global network of skilled, ambitious people who want to grow with Sphere Marketing Solutions. Share your details below and tell us what skills you bring.
                </p>
            </div>

            <div class="max-w-3xl mx-auto">
                <x-entrepreneur-signup-form />
            </div>

        </div>
    </section>

@endsection
