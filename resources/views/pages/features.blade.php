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

                <x-page-breadcrumb current="Features" />
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100">
        <!-- Why People Choose Us -->
        <div class="py-24 px-4 sm:px-6 lg:px-8">
            <div class="max-w-[85%] mx-auto">

                <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-[#4870F8] text-lg tracking-wide block mb-3">
                    Features
                </span>
                    <h2 class="text-[#0F172A] text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                        Why People Choose <br class="hidden sm:inline"> Us!
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">

                    <!-- Card 1 -->
                    <div data-aos="fade-up" data-aos-delay="100"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-1.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Custom Software
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Tailored solutions that prioritize productivity, reliability, and your unique workflows.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            ERP & CMS Development
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Streamline operations and strengthen your digital presence with systems built around you.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div data-aos="fade-up" data-aos-delay="300"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            API Integrations
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Connect your apps with secure data flow so teams work faster with fewer manual handoffs.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div data-aos="fade-up" data-aos-delay="400"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Application Support
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Ongoing maintenance, optimization, and security so your business apps stay reliable.
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
                    <div data-aos="fade-up" data-aos-delay="100"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-1.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Module Development
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Custom modules that extend your existing systems with better functionality and efficiency.
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            E-commerce Solutions
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Online stores and Shopify setups built to showcase products and convert browsers into buyers.
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div data-aos="fade-up" data-aos-delay="300"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Cloud Solutions
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Scalable cloud approaches that keep your tools accessible, secure, and ready to grow.
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div data-aos="fade-up" data-aos-delay="400"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Website Development
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Visually appealing, functionally robust websites tailored to your brand and business goals.
                        </p>
                    </div>

                    <!-- Card 5 -->
                    <div data-aos="fade-up" data-aos-delay="100"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-1.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            SEO & Digital Marketing
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Search and campaign strategies that improve rankings, visibility, and qualified lead flow.
                        </p>
                    </div>

                    <!-- Card 6 -->
                    <div data-aos="fade-up" data-aos-delay="200"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Social & Paid Ads
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Meta and Google Ads campaigns designed to reach the right audience and drive conversions.
                        </p>
                    </div>

                    <!-- Card 7 -->
                    <div data-aos="fade-up" data-aos-delay="300"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Video & Graphic Design
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Professional edits and visuals that elevate content quality and strengthen brand image.
                        </p>
                    </div>

                    <!-- Card 8 -->
                    <div data-aos="fade-up" data-aos-delay="400"
                        class="group bg-white hover:bg-[#4870F8] rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all duration-300 cursor-pointer">
                        <div class="text-5xl mb-6">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="w-16 mb-6 transition-all duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            YouTube Management
                        </h4>
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Channel support and promotion so your videos reach more viewers and grow sustainably.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
