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
                    <span class="text-[#4F46E5] font-semibold">About</span>
                </nav>
            </div>

        </div>
    </section>

    <section data-aos="fade-up">
        <!-- Why People Choose Us -->
        <div class="py-24 px-4 sm:px-6 lg:px-8">

            <div class="max-w-[88%] mx-auto">


                <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-[#4761FF] text-lg tracking-wide block mb-3">
                    Features
                </span>
                    <h2 class="text-[#0F172A] text-4xl md:text-5xl font-semibold tracking-tight leading-tight">
                        Why People Choose <br class="hidden sm:inline"> Us!
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">

                    <!-- Card 1 -->
                    <div class="bg-white rounded-xl shadow-[0_0_20px_rgba(0,0,0,0.1)] border border-slate-100 p-6 transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-1.png') }}" class="bg-[#F1F3FA] rounded-full w-16 transition duration-300">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] text-xl font-medium mb-3 transition-colors duration-300">
                            Web Development
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-[#555555] font-sans text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>

                    </div>

                    <!-- Card 2: Professional Staff -->
                    <div
                        class="bg-white rounded-xl shadow-[0_0_20px_rgba(0,0,0,0.1)] p-6 transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="bg-[#F1F3FA] rounded-full w-16 transition duration-300">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] text-xl font-medium mb-3 transition-colors duration-300">
                            Digital Marketing
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-[#555555] font-sans text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                    <!-- Card 3: Fair Prices -->
                    <div
                        class="bg-white rounded-xl shadow-[0_0_20px_rgba(0,0,0,0.1)] p-6 transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="bg-[#F1F3FA] rounded-full w-16 transition duration-300">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] text-xl font-medium mb-3 transition-colors duration-300">
                            Creative Content
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-[#555555] font-sans text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                    <!-- Card 4: 24/7 Support -->
                    <div
                        class="bg-white rounded-xl shadow-[0_0_20px_rgba(0,0,0,0.1)] p-6 transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="bg-[#F1F3FA] rounded-full w-16 transition duration-300">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] text-xl font-medium mb-3 transition-colors duration-300">
                            Quick Support
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-[#555555] font-sans text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                    <!-- Card 1 -->
                    <div
                        class="bg-white rounded-xl shadow-[0_0_20px_rgba(0,0,0,0.1)] p-6 transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-1.png') }}"
                                 class="bg-[#F1F3FA] rounded-full w-16 transition duration-300">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] text-xl font-medium mb-3 transition-colors duration-300">
                            Web Development
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-[#555555] font-sans text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>

                    </div>

                    <!-- Card 2: Professional Staff -->
                    <div
                        class="bg-white rounded-xl shadow-[0_0_20px_rgba(0,0,0,0.1)] p-6 transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-2.png') }}"
                                 class="bg-[#F1F3FA] rounded-full w-16 transition duration-300">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] text-xl font-medium mb-3 transition-colors duration-300">
                            Digital Marketing
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-[#555555] font-sans text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                    <!-- Card 3: Fair Prices -->
                    <div
                        class="bg-white rounded-xl shadow-[0_0_20px_rgba(0,0,0,0.1)] p-6 transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-3.png') }}"
                                 class="bg-[#F1F3FA] rounded-full w-16 transition duration-300">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] text-xl font-medium mb-3 transition-colors duration-300">
                            Creative Content
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-[#555555] font-sans text-sm leading-relaxed transition-colors duration-300">
                            Results-driven digital solutions tailored to your business goals.
                        </p>
                    </div>

                    <!-- Card 4: 24/7 Support -->
                    <div
                        class="bg-white rounded-xl shadow-[0_0_20px_rgba(0,0,0,0.1)] p-6 transition duration-300 group">

                        <!-- Icon Wrapper -->
                        <div class="mb-6">
                            <img src="{{ asset('images/icon-4.png') }}"
                                 class="bg-[#F1F3FA] rounded-full w-16 transition duration-300">
                        </div>

                        <!-- Title Text -->
                        <h4 class="text-[#0F172A] text-xl font-medium mb-3 transition-colors duration-300">
                            Quick Support
                        </h4>

                        <!-- Paragraph Text -->
                        <p class="text-[#555555] font-sans text-sm leading-relaxed transition-colors duration-300">
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
            {{-- <div class="absolute inset-0 z-20 flex items-center justify-center lg:justify-start lg:pl-62">
                <button class="w-20 h-20 lg:w-24 lg:h-24 bg-[#4761FF] text-white rounded-full flex items-center justify-center shadow-2xl relative group xl:translate-x-[150px]">
                    <span class="absolute inset-0 bg-[#4761FF] rounded-full animate-ping opacity-40 duration-600"></span>

                    <svg class="w-6 h-6 lg:w-8 lg:h-8 fill-current ml-1 relative z-10" viewBox="0 0 24 24">
                        <path d="M8 5v14l11-7z"/>
                    </svg>
                </button>
            </div> --}}

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


    <x-team.section
        wrapper-class="bg-white py-24"
        inner-class="max-w-[85%] mx-auto"
        grid-class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"
    />

@endsection

