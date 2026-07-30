@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero"
                 class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    About Us
                </h1>

                <nav class="flex items-center justify-center space-x-2 text-white text-base font-medium">
                    <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>
                    <span class="text-slate-300">/</span>
                    <a href="#" class="hover:underline transition text-slate-200">Pages</a>
                    <span class="text-slate-300">/</span>
                    <span class="text-[#4F46E5] font-semibold">About</span>
                </nav>
            </div>

        </div>
    </section>

    <section data-aos="fade-up">
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

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Card 1 -->
                    <div
                        class="bg-white rounded-xl shadow-xs border border-slate-100 p-8 hover:bg-[#4761FF] hover:shadow-md transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-1.png') }}"
                                 class="w-16 transition duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Web Development
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>

                    </div>

                    <!-- Card 2: Professional Staff -->
                    <div
                        class="bg-white rounded-xl shadow-xs border border-slate-100 p-8 hover:bg-[#4761FF] hover:shadow-md transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="w-16 transition duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Digital Marketing
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                    <!-- Card 3: Fair Prices -->
                    <div
                        class="bg-white rounded-xl shadow-xs border border-slate-100 p-8 hover:bg-[#4761FF] hover:shadow-md transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="w-16 transition duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Creative Content
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                    <!-- Card 4: 24/7 Support -->
                    <div
                        class="bg-white rounded-xl shadow-xs border border-slate-100 p-8 hover:bg-[#4761FF] hover:shadow-md transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="w-16 transition duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Quick Support
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                    <!-- Card 1 -->
                    <div
                        class="bg-white rounded-xl shadow-xs border border-slate-100 p-8 hover:bg-[#4761FF] hover:shadow-md transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-1.png') }}"
                                 class="w-16 transition duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Web Development
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>

                    </div>

                    <!-- Card 2: Professional Staff -->
                    <div
                        class="bg-white rounded-xl shadow-xs border border-slate-100 p-8 hover:bg-[#4761FF] hover:shadow-md transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="w-16 transition duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Digital Marketing
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                    <!-- Card 3: Fair Prices -->
                    <div
                        class="bg-white rounded-xl shadow-xs border border-slate-100 p-8 hover:bg-[#4761FF] hover:shadow-md transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="w-16 transition duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Creative Content
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                    <!-- Card 4: 24/7 Support -->
                    <div
                        class="bg-white rounded-xl shadow-xs border border-slate-100 p-8 hover:bg-[#4761FF] hover:shadow-md transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="w-16 transition duration-300 group-hover:brightness-0 group-hover:invert">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] group-hover:text-white text-xl font-bold mb-3 transition-colors duration-300">
                            Quick Support
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-slate-500 group-hover:text-white/90 text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>


    <section data-aos="fade-up" class="relative w-full bg-slate-50 overflow-hidden">
        <div class="relative min-h-[650px] lg:min-h-[700px] xl:min-h-[750px] w-full flex items-end lg:items-end overflow-hidden">

            <img src="{{ asset('images/about-play.jpg') }}" alt="About Background" class="absolute inset-0 w-full h-full object-cover z-0">

            <!-- Play Button Container -->
            <div class="absolute inset-0 z-20 flex items-center justify-center lg:justify-start lg:pl-62">
                <button class="w-20 h-20 lg:w-24 lg:h-24 bg-[#4761FF] text-white rounded-full flex items-center justify-center shadow-2xl relative group xl:translate-x-[150px]">
                    <span class="absolute inset-0 bg-[#4761FF] rounded-full animate-ping opacity-40 duration-600"></span>

                    <svg class="w-6 h-6 lg:w-8 lg:h-8 fill-current ml-1 relative z-10" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </button>
            </div>

            <div class="relative z-20 w-full lg:max-w-[45%] xl:max-w-[40%] 2xl:max-w-[42%] lg:ml-auto bg-white p-6 sm:p-10 shadow-2xl mt-50 mx-4 sm:mx-8 lg:mx-0 lg:mr-32 lg:rounded-t-xl lg:rounded-b-none overflow-y-auto xl:overflow-hidden bottom-0 self-end">

                <!-- About Us Subtitle -->
                <span class="text-[#4761FF] font-medium text-lg tracking-wide block mb-5">
                    About Us
                </span>

                <!-- Main Heading -->
                <h2 class="text-[#0F172A] text-3xl lg:text-4xl font-semibold tracking-tight leading-[45px] mb-5">
                    The Best Marketing Agency to Improve Your Businesses
                </h2>

                <!-- Paragraph text -->
                <p class="text-[#555555] font-sans text-sm leading-[25px] mb-7">
                    Welcome to Sphere Marketing Solutions. We specialize in web development, social media advertising,
                    SEO, video editing, graphic design, and YouTube channel management to enhance your online presence
                    and achieve your business goals.
                </p>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-8">
                    <!-- Feature 1 -->
                    <div class="flex flex-col items-start">
                        <div class="mb-3">
                            <img src="{{ asset('images/icon-5.png') }}" alt="Service Icon" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-[#0F172A] text-base font-semibold mb-1 text-lg font-sans">Client-First Ethics</h3>
                        <p class="text-[#555555] text-md leading-[25px] font-sans">
                            We prioritize client success, ethical services, and maximizing ROI.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="flex flex-col items-start">
                        <div class="mb-3">
                            <img src="{{ asset('images/icon-2.png') }}" alt="Expert Icon" class="w-16 h-16 object-contain">
                        </div>
                        <h3 class="text-[#0F172A] text-base font-semibold mb-1 text-lg font-sans">Dedicated Experts</h3>
                        <p class="text-[#555555] text-md leading-[25px] font-sans">
                            A tightly-knit team focused on innovation and results-driven delivery.
                        </p>
                    </div>
                </div>

                <div class="pb-2">
                    <a href="{{ route('contact') }}"
                       class="inline-block bg-[#4761FF] hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-full transition shadow-md hover:shadow-lg text-sm tracking-wide">
                        Explore More
                    </a>
                </div>
            </div>

        </div>
    </section>


    <section data-aos="fade-up">
        <div class="bg-white py-24 px-4 sm:px-6 lg:px-8">
            <div class="max-w-[85%] mx-auto">

                <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-[#4761FF] text-lg tracking-wide block mb-3">
                    Our Team
                </span>
                    <h2 class="text-[#0F172A] text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                        Our Expert People <br> Ready to Help You
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Card 1 -->
                    <div
                        class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 hover:bg-[#4761FF] transition duration-700 border border-slate-50 relative group">

                        <div class="relative overflow-hidden mb-5">
                            <img class="w-full h-[320px] object-cover" src="{{ asset('images/CEO.png') }}"
                                 alt="Alex Robin">

                            <ul class="absolute top-4 left-4 flex flex-col space-y-2 -translate-x-16 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>
                        <h5 class="text-[#0F172A] group-hover:text-white transition-colors duration-300 text-xl font-bold mb-1">
                            Alex Robin</h5>
                        <span
                            class="text-[#4761FF] group-hover:text-white transition-colors duration-300 text-sm font-medium">Founder & CEO</span>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 hover:bg-[#4761FF] transition duration-700 border border-slate-50 relative group">
                        <div class="relative overflow-hidden mb-5">
                            <img class="w-full h-[320px] object-cover" src="{{ asset('images/CoFounder.png') }}"
                                 alt="Adam Crew">

                            <ul class="absolute top-4 left-4 flex flex-col space-y-2 -translate-x-16 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>
                        <h5 class="text-[#0F172A] group-hover:text-white transition-colors duration-300 text-xl font-bold mb-1">
                            Adam Crew</h5>
                        <span
                            class="text-[#4761FF] group-hover:text-white transition-colors duration-300 text-sm font-medium">Co Founder</span>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 hover:bg-[#4761FF] transition duration-700 border border-slate-50 relative group">
                        <div class="relative overflow-hidden mb-5">
                            <img class="w-full h-[320px] object-cover" src="{{ asset('images/team-3.jpg') }}"
                                 alt="Boris Johnson">

                            <ul class="absolute top-4 left-4 flex flex-col space-y-2 -translate-x-16 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>
                        <h5 class="text-[#0F172A] group-hover:text-white transition-colors duration-300 text-xl font-bold mb-1">
                            Boris Johnson</h5>
                        <span
                            class="text-[#4761FF] group-hover:text-white transition-colors duration-300 text-sm font-medium">Executive Manager</span>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 hover:bg-[#4761FF] transition duration-700 border border-slate-50 relative group">
                        <div class="relative overflow-hidden mb-5">
                            <img class="w-full h-[320px] object-cover" src="{{ asset('images/team-4.jpg') }}"
                                 alt="Robert Jordan">

                            <ul class="absolute top-4 left-4 flex flex-col space-y-2 -translate-x-16 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                                        </svg>
                                    </a></li>
                                <li>
                                    <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                                       href="#">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                            <path
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                        </svg>
                                    </a></li>
                            </ul>
                        </div>
                        <h5 class="text-[#0F172A] group-hover:text-white transition-colors duration-300 text-xl font-bold mb-1">
                            Robert Jordan</h5>
                        <span
                            class="text-[#4761FF] group-hover:text-white transition-colors duration-300 text-sm font-medium">Digital Marketer</span>
                    </div>

                </div>

            </div>
        </div>
    </section>

@endsection

