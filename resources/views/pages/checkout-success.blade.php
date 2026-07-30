@extends('layout.app')

@section('content')
    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">
            <img src="{{ asset('images/about-hero.jpg') }}" alt="Checkout Success" class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 bg-black/10 z-10"></div>
            <div class="relative z-20 max-w-2xl mx-auto px-4">
                <h1 class="text-white text-4xl md:text-5xl font-bold tracking-wide mb-4">Payment Successful</h1>
                <p class="text-slate-200 text-lg mb-8">Thank you! Your payment was successful. Our team will contact you soon.</p>
                <a href="{{ route('home') }}" class="inline-block bg-[#4761FF] hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-full transition">
                    Back to Home
                </a>
            </div>
        </div>
    </section>
@endsection
