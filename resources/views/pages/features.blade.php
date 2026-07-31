@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero"
                 class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Features
                </h1>

                <nav class="flex items-center justify-center space-x-2 text-white text-base font-medium">
                    <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>
                    <span class="text-slate-300">/</span>
                    <span class="text-[#4F46E5] font-semibold">Features</span>
                </nav>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100">
        <!-- Why People Choose Us -->
        <div class="py-24 px-4 sm:px-6 lg:px-8">
            <div class="max-w-[85%] mx-auto">

                <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-[#4761FF] text-lg tracking-wide block mb-3">
                    Features
                </span>
                    <h2 class="text-[#0F172A] text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                        Why People Choose <br class="hidden sm:inline"> Us!
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">

                    <!-- Card 1 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-1.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Award Winning
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Professional Staff
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Fair Prices
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            24/7 Support
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100">
        <div class="px-4 sm:px-6 lg:px-8 mb-24">
            <div class="max-w-[85%] mx-auto">

                <div class="text-center max-w-2xl mx-auto mb-16">
                    <h2 class="text-[#0F172A] text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                        More Features
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                    <!-- Card 1 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-1.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Award Winning
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Professional Staff
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Fair Prices
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            24/7 Support
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                    <!-- Card 5 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-1.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Award Winning
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                    <!-- Card 6 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Professional Staff
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                    <!-- Card 7 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Fair Prices
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                    <!-- Card 8 -->
                    <div
                        class="group bg-white hover:bg-[#4F46E5] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            24/7 Support
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
