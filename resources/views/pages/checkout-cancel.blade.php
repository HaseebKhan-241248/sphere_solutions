@extends('layout.app')

@section('content')
    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">
            <img src="{{ asset('images/about-hero.jpg') }}" alt="Checkout Cancelled" class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 bg-black/10 z-10"></div>
            <div class="relative z-20 max-w-2xl mx-auto px-4">
                <h1 class="text-white text-4xl md:text-5xl font-bold tracking-wide mb-4">Checkout Cancelled</h1>
                <p class="text-slate-200 text-lg mb-8">No payment was taken. You can choose a package again whenever you are ready.</p>
                <a href="{{ route('prices') }}" class="inline-block bg-[#4870F8] hover:bg-[#3A5CE0] text-white font-semibold px-8 py-3 rounded-full transition">
                    View Packages
                </a>
            </div>
        </div>
    </section>
@endsection
