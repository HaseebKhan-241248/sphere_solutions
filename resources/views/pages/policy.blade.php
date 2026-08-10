@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="{{ $title }}" class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    {{ $title }}
                </h1>

                <x-page-breadcrumb :current="$title" />
            </div>

        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-4xl mx-auto">
            @if (filled($content))
                <div class="policy-content">
                    {!! $content !!}
                </div>
            @else
                <div class="text-center py-16">
                    <h2 class="text-[#0F172A] text-3xl font-bold mb-3">Coming soon</h2>
                    <p class="text-slate-500 text-lg">
                        This page is being updated. Please check back shortly.
                    </p>
                </div>
            @endif
        </div>
    </section>

@endsection
