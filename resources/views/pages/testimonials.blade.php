@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero" class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Testimonial
                </h1>

                <x-page-breadcrumb current="Testimonial" />
            </div>
        </div>
    </section>

    <x-testimonials.section-slider button-class="w-12 h-12 cursor-pointer" />

@endsection
