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

    <section data-aos="fade-up" data-aos-delay="100" class="w-full bg-[#F8F9FA] py-16 md:py-24 font-sans antialiased overflow-hidden">
        <div class="w-[90%] md:w-[85%] mx-auto max-w-6xl">

            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
                <div>
                    <span class="text-[#4870F8] font-semibold text-xl tracking-wide block mb-2">Testimonial</span>
                    <h2 class="text-[#1C2035] font-bold text-3xl md:text-5xl leading-tight max-w-lg">
                        What Clients Say About Our Services!
                    </h2>
                </div>

                <!-- Control Buttons -->
                <div class="flex items-center gap-4 shrink-0">
                    <button id="customPrevBtn" class="w-12 h-12 rounded-full cursor-pointer border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-[#4870F8] hover:text-white hover:border-[#4870F8] shadow-sm transition duration-300">
                        <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                        </svg>
                    </button>
                    <button id="customNextBtn" class="w-12 h-12 rounded-full cursor-pointer border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-[#4870F8] hover:text-white hover:border-[#4870F8] shadow-sm transition duration-300">
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
                <div data-aos="fade-up" data-aos-delay="100" class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm hover:-translate-y-1 transition duration-300">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="{{ asset('images/team-1.jpg') }}"
                             alt="Ayesha Khan" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        Sphere rebuilt our website and set up ads that finally brought consistent inquiries. Clear communication the whole way.
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Ayesha Khan</h4>
                    <span class="prof text-[#4870F8] font-medium text-sm mt-1">Marketing Head</span>
                </div>

                <!-- Card 2 -->
                <div data-aos="fade-up" data-aos-delay="200" class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm hover:-translate-y-1 transition duration-300">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="{{ asset('images/team-2.jpg') }}"
                             alt="Bilal Ahmed" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        They handled our social creatives and posting schedule. Our brand looks more professional and engagement is up.
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Bilal Ahmed</h4>
                    <span class="prof text-[#4870F8] font-medium text-sm mt-1">Product Designer</span>
                </div>

                <!-- Card 3 -->
                <div data-aos="fade-up" data-aos-delay="300" class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm hover:-translate-y-1 transition duration-300">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="{{ asset('images/team-3.jpg') }}"
                             alt="Sara Malik" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        Practical SEO work and honest timelines. We started ranking for the searches that matter to our local customers.
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Sara Malik</h4>
                    <span class="prof text-[#4870F8] font-medium text-sm mt-1">Founder, Studio X</span>
                </div>

                <!-- Card 4 -->
                <div data-aos="fade-up" data-aos-delay="400" class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm hover:-translate-y-1 transition duration-300">
                    <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                        <img src="{{ asset('images/team-4.jpg') }}"
                             alt="Usman Tariq" class="w-full h-full object-cover">
                    </div>
                    <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                        Fast turnaround on video edits and landing page updates. Easy team to work with when priorities change.
                    </p>
                    <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Usman Tariq</h4>
                    <span class="prof text-[#4870F8] font-medium text-sm mt-1">CTO, Nova Labs</span>
                </div>
            </div>
        </div>
    </section>

@endsection
