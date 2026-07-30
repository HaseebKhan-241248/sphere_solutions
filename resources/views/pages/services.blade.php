@extends('layout.app')

@section('content')

    <section class="relative">
        <div class="relative h-80 bg-cover bg-center flex items-center justify-center text-center bg-black/30"
             style="background-image: url({{ asset('images/about-hero.jpg') }});">
            <div class="text-white px-4">
                <h1 class="text-4xl md:text-7xl font-bold mb-4">Service</h1>
                <p class="text-lg space-x-3">
                    <a href="{{ route('home') }}" class="hover:text-[#4761FF]">Home</a>
                    <span>/</span>
                    <a href="#" class="hover:text-[#4761FF]"> Pages</a>
                    <span>/</span>
                    <span class="text-[#4761FF]"> Service </span>
                </p>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="max-w-[85%] mx-auto py-16">

        <div class="text-center mb-12">
            <span class="text-[#4761FF] font-semibold text-sm tracking-widest uppercase">Our Services</span>
            <h2 class="text-2xl md:text-4xl font-bold text-gray-800 mt-2"> Services That Help Your Business Grow</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

            <!-- Card 1 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">

                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-5.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Website Development</h3>
                    <p class="lines text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Visually appealing, functionally robust websites tailored to your business.
                    </p>
                </div>

                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-6.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        SEO Services</h3>
                    <p class="lines text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Strategies designed to improve your search engine rankings and organic reach.
                    </p>
                </div>

                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-7.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Digital Marketing</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Campaigns that grow engagement, visibility, and conversions across channels.
                    </p>
                </div>
                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-8.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Social Media Advertising</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Reach your target audience effectively and drive measurable results.
                    </p>
                </div>
                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

            <!-- Card 5 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-9.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        Video Editing & Graphics</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Elevate your content and brand image with professional creative services.
                    </p>
                </div>
                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

            <!-- Card 6 -->
            <div
                class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-50 mb-6 hover:mb-0 mx-3">
                <div
                    class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 h-[300px] flex flex-col items-center">
                    <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
                        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
                            <img src="{{ asset('images/icon-10.png') }}">
                        </div>
                    </div>
                    <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer min-h-[52px] flex items-center justify-center">
                        YouTube Management</h3>
                    <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6 flex-1 flex items-center justify-center overflow-hidden line-clamp-3">
                        Grow your channel so your videos reach their maximum potential through smarter promotion.
                    </p>
                </div>
                <div
                    class="mx-auto h-0 border border-gray-200 overflow-hidden opacity-0 group-hover:h-10  group-hover:opacity-100 transition-all duration-300 cursor-pointer flex items-center justify-center bg-white/60 rounded-b-lg w-[70%] z-[999]">
                    <button class="text-[#4761FF] text-sm font-medium cursor-pointer">
                        Read More <i class="fas fa-angle-double-right"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <section class="w-full bg-[#F8F9FA] py-16 md:py-24 font-sans antialiased overflow-hidden">
        <div class="w-[90%] md:w-[85%] mx-auto max-w-6xl">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div>
                    <span class="text-[#4761FF] text-xl tracking-wide block mb-2">Testimonial</span>
                    <h2 class="text-[#1C2035] font-bold text-3xl md:text-5xl leading-tight max-w-lg">
                        What Clients Say About Our Services!
                    </h2>
                </div>

                <!-- Control Buttons -->
                <div class="flex items-center gap-4 shrink-0">
                    <button id="customPrevBtn"
                            class="w-12 h-12 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-[#4761FF] hover:text-white hover:border-[#4761FF] shadow-sm transition duration-300">
                        <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                        </svg>
                    </button>
                    <button id="customNextBtn"
                            class="w-12 h-12 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-[#4761FF] hover:text-white hover:border-[#4761FF] shadow-sm transition duration-300">
                        <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Scrollable Slider Container -->
            <div id="testimonialSlider"
                 class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-none py-4">
                <!-- Card 1 -->
                <div
                    class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="images/team-1.jpg"
                             alt="Client 1" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                        stet
                        lorem sit clita duo justo
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Client Name</h4>
                    <span class="prof text-[#4761FF] font-medium text-sm mt-1">Profession</span>
                </div>

                <!-- Card 2 -->
                <div
                    class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="images/team-2.jpg"
                             alt="Client 2" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                        stet
                        lorem sit clita duo justo
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Client Name</h4>
                    <span class="prof text-[#4761FF] font-medium text-sm mt-1">Profession</span>
                </div>

                <!-- Card 3 -->
                <div
                    class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="images/team-3.jpg"
                             alt="Client 3" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                        stet
                        lorem sit clita duo justo
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Client Name</h4>
                    <span class="prof text-[#4761FF] font-medium text-sm mt-1">Profession</span>
                </div>

                <!-- Card 4 -->
                <div
                    class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="images/team-4.jpg"
                             alt="Client 4" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
                        stet
                        lorem sit clita duo justo
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Client Name</h4>
                    <span class="prof text-[#4761FF] font-medium text-sm mt-1">Profession</span>
                </div>
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="py-24 bg-white">
        <div class="max-w-[85%] mx-auto">

            <div class="grid lg:grid-cols-2 gap-20 items-start">

                <div>

            <span class="text-[#4761FF] text-xl font-medium">
                Get A Quote
            </span>

                    <h2 class="text-[30px] md:text-[45px] leading-[1.1] font-semibold text-[#20233F] mt-5 mb-8">
                        Need Our Expert Help?
                        We're Here!
                    </h2>

                    <p class="text-gray-500 text-[16px] leading-7 mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                        sed stet lorem sit clita duo justo.
                    </p>

                    <p class="text-gray-500 text-[16px] leading-7 mb-4">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                        Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                        sed stet lorem sit clita duo justo.
                    </p>

                    <a href="#" class="inline-flex overflow-hidden rounded-xl border border-[#4761FF]">

                <span
                    class="size-14 bg-linear-to-r from-[#4761FF] to-[#5C6CFF] flex items-center justify-center text-white text-lg">
                    <i class="fa-solid fa-phone"></i>
                </span>

                        <span class="px-4 flex items-center text-[#4761FF] text-xl font-medium bg-white">
                    +1 (604) 313-7091
                </span>

                    </a>

                </div>

                <div>

                    <h2 class="text-[36px] font-semibold text-[#20233F] mb-10">
                        Get A Free Quote
                    </h2>

                    <form action="#" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                            <div class="w-full">
                                <input type="text" placeholder="Your Name"
                                       class="w-full h-14 rounded-xl border border-gray-300 px-5 text-base md:text-md outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200">
                            </div>

                            <div class="w-full">
                                <input type="email" placeholder="Yur Email"
                                       class="w-full h-14 rounded-xl border border-gray-300 px-5 text-base md:text-md outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200">
                            </div>

                            <div class="w-full">
                                <input type="text" placeholder="Your Mobile"
                                       class="w-full h-14 rounded-xl border border-gray-300 px-5 text-base md:text-md outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200">
                            </div>

                            <div class="w-full">
                                <select
                                    class="w-full h-14 rounded-xl border border-gray-300 px-5 text-base md:text-md placeholder:text-gray-400 md:text-md text-gray-700 outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200 bg-white">
                                    <option disabled selected>Choose A Service</option>
                                    <option>Digital Marketing</option>
                                    <option>SEO</option>
                                    <option>Content Marketing</option>
                                    <option>Social Marketing</option>
                                </select>
                            </div>

                        </div>

                        <label>
                            <textarea rows="6" placeholder="Message"
                                      class="w-full mt-6 rounded-xl border border-gray-300 px-6 p-2 text-md outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200"></textarea>
                        </label>

                        <button
                            class="w-full mt-4 h-14 rounded-xl text-white text-lg bg-linear-to-r from-[#4761FF] to-[#5C6CFF] hover:opacity-90 duration-300 cursor-pointer">
                            Submit Now
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </section>

@endsection

