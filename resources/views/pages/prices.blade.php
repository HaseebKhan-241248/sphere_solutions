@extends('layout.app')

@section('content')
    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="Packages Hero" class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Packages
                </h1>

                <nav class="flex items-center justify-center space-x-2 text-white text-base font-medium">
                    <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>
                    <span class="text-slate-300">/</span>
                    <a href="#" class="hover:underline transition text-slate-200">Pages</a>
                    <span class="text-slate-300">/</span>
                    <span class="text-[#4F46E5] font-semibold">Packages</span>
                </nav>
            </div>

        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100">
        <div class="w-full py-24 px-4 sm:px-6 lg:px-8 font-sans antialiased text-slate-800">
            <div class="max-w-[85%] mx-auto max-w-6xl">

                <div class="text-center mb-12">
                    <span class="text-[#4761FF] text-lg tracking-wide block mb-2">
                        Pricing Plans
                    </span>
                    <h2 class="text-[#0F172A] text-4xl md:text-5xl font-semibold tracking-tight">
                        Pricing Plan for Our Services
                    </h2>
                </div>

                @if (session('checkout_error'))
                    <div class="mb-8 rounded-lg border border-red-300 bg-red-50 px-4 py-3 text-sm text-red-600 font-medium">
                        {{ session('checkout_error') }}
                    </div>
                @endif

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch">

                    @foreach ($plans as $key => $plan)
                        @php
                            $isFeatured = ! empty($plan['featured']);
                            $canCheckout = ! empty($plan['checkout']);
                            $amount = isset($plan['amount_cents']) ? (int) $plan['amount_cents'] / 100 : null;
                            $headerBg = $isFeatured ? 'bg-[#4761FF]' : 'bg-[#1E293B]';
                            $titleClass = $isFeatured ? 'text-blue-100' : 'text-slate-200';
                            $taglineClass = $isFeatured ? 'text-blue-100/80' : 'text-slate-400';
                            $priceAccent = $isFeatured ? 'text-black' : 'text-[#4761FF]';
                            $buttonClass = $isFeatured
                                ? 'bg-[#4761FF] hover:bg-blue-700 shadow-md'
                                : 'bg-[#1E293B] hover:bg-slate-900 shadow-sm';
                        @endphp

                        <div class="bg-white rounded-xl shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col justify-between overflow-hidden p-6 text-center transition duration-300 hover:shadow-xl {{ $key === 'enterprise' ? 'md:col-span-2 lg:col-span-3' : '' }}">
                            <div>
                                <div class="{{ $headerBg }} rounded-xl p-6 text-left text-white mb-8 relative overflow-hidden {{ $isFeatured ? 'shadow-md' : '' }}">
                                    <h3 class="text-lg font-bold tracking-wide mb-1 {{ $titleClass }}">{{ $plan['name'] }}</h3>
                                    <p class="text-sm {{ $taglineClass }} mb-3">{{ $plan['tagline'] }}</p>

                                    @if ($amount !== null)
                                        <div class="flex items-baseline font-black">
                                            <span class="text-xl {{ $priceAccent }} font-extrabold mr-1 -translate-y-3">$</span>
                                            <span class="text-4xl tracking-tight">{{ number_format($amount, 0) }}</span>
                                            <span class="text-sm {{ $priceAccent }} font-medium ml-2">/ Month</span>
                                        </div>
                                    @else
                                        <div class="text-lg font-semibold text-white">
                                            {{ $plan['price_label'] ?? 'Custom pricing' }}
                                        </div>
                                    @endif
                                </div>

                                <div class="space-y-4 px-2 mb-6 text-left">
                                    <p class="text-xs font-semibold uppercase tracking-wider text-slate-500">Services Included</p>
                                    @foreach ($plan['features'] as $index => $feature)
                                        <div class="flex items-center justify-between text-[14px] text-slate-600 {{ $index > 0 ? 'pt-3 border-t border-slate-100' : '' }}">
                                            <span>{{ $feature }}</span>
                                            <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0 ml-3" fill="none" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                                        </div>
                                    @endforeach
                                </div>

                                @if (! empty($plan['notes']))
                                    <div class="px-2 mb-6 text-left">
                                        <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-2">Note</p>
                                        <ul class="space-y-1 text-[13px] text-slate-500">
                                            @foreach ($plan['notes'] as $note)
                                                <li>- {{ $note }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div class="px-2 pt-2 text-left">
                                @if ($canCheckout)
                                    <form action="{{ route('checkout.store', $key) }}" method="POST">
                                        @csrf
                                        <button type="submit"
                                                class="inline-block w-fit {{ $buttonClass }} text-white font-bold px-7 py-3 rounded-full text-sm tracking-wider transition duration-200 cursor-pointer">
                                            Buy Now
                                        </button>
                                    </form>
                                @else
                                    <a href="{{ route('contact') }}"
                                       class="inline-block w-fit {{ $buttonClass }} text-white font-bold px-7 py-3 rounded-full text-sm tracking-wider transition duration-200">
                                        Request a Quote
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>
@endsection
