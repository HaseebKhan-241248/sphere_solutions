@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero" class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">

                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Projects
                </h1>

                <x-page-breadcrumb current="Projects" />
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="w-full bg-[#FFFFFF] py-16 md:pt-24 font-sans antialiased">
        <div class="w-[90%] md:w-[85%] mx-auto max-w-6xl">

            <div class="text-center mb-12">
                <span class="text-[#4870F8] font-semibold text-lg tracking-wide block mb-2">Our Projects</span>
                <h2 class="text-[#1C2035] font-bold text-3xl md:text-5xl leading-tight max-w-2xl mx-auto">
                    We've Done Lot's of Awesome Projects
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div data-aos="fade-up" data-aos-delay="100" class="group flex flex-col bg-transparent shadow-lg rounded-lg hover:-translate-y-2 transition duration-300">
                    <div class="relative overflow-hidden rounded-tl-lg rounded-tr-lg aspect-[4/3] w-full shadow-sm">

                        <img src="{{ asset('images/project-1.jpg') }}"
                             alt="E-commerce website build"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute inset-0 bg-[#1C2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">

                            <div class="flex gap-4 transform translate-y-12 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 ease-out">

                                <a href="{{ route('project-details') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    </svg>
                                </a>

                                <a href="{{ route('contact') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="pt-5 p-4">
                        <h3 class="text-[#1C2035] font-bold text-xl mb-2 transition-colors duration-300 group-hover:text-[#4870F8] cursor-pointer">
                            E-commerce Website Build
                        </h3>
                        <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                            Custom storefront with clear product pages and a checkout flow built for conversions.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div data-aos="fade-up" data-aos-delay="200" class="group flex flex-col bg-transparent shadow-lg rounded-lg hover:-translate-y-2 transition duration-300">
                    <div class="relative overflow-hidden rounded-tl-lg rounded-tr-lg aspect-[4/3] w-full shadow-sm">
                        <img src="{{ asset('images/project-2.jpg') }}"
                             alt="Social ads campaign"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute inset-0 bg-[#1C2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="flex gap-4 transform translate-y-12 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 ease-out">
                                <a href="{{ route('project-details') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    </svg>
                                </a>
                                <a href="{{ route('contact') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5 p-4">
                        <h3 class="text-[#1C2035] font-bold text-xl mb-2 transition-colors duration-300 group-hover:text-[#4870F8] cursor-pointer">
                            Social Ads Campaign
                        </h3>
                        <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                            Targeted Meta and Google ads that reached the right audience and grew qualified leads.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div data-aos="fade-up" data-aos-delay="300" class="group flex flex-col bg-transparent shadow-lg rounded-lg hover:-translate-y-2 transition duration-300">
                    <div class="relative overflow-hidden rounded-tl-lg rounded-tr-lg aspect-[4/3] w-full shadow-sm">
                        <img src="{{ asset('images/project-3.jpg') }}"
                             alt="Local SEO growth"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute inset-0 bg-[#1C2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="flex gap-4 transform translate-y-12 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 ease-out">
                                <a href="{{ route('project-details') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    </svg>
                                </a>
                                <a href="{{ route('contact') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5 p-4">
                        <h3 class="text-[#1C2035] font-bold text-xl mb-2 transition-colors duration-300 group-hover:text-[#4870F8] cursor-pointer">
                            Local SEO Growth
                        </h3>
                        <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                            On-page and content improvements that helped a service business rank for local searches.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div data-aos="fade-up" data-aos-delay="100" class="group flex flex-col bg-transparent shadow-lg rounded-lg hover:-translate-y-2 transition duration-300">
                    <div class="relative overflow-hidden rounded-tl-lg rounded-tr-lg aspect-[4/3] w-full shadow-sm">

                        <img src="{{ asset('images/project-4.jpg') }}"
                             alt="Shopify store setup"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute inset-0 bg-[#1C2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">

                            <div class="flex gap-4 transform translate-y-12 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 ease-out">

                                <a href="{{ route('project-details') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    </svg>
                                </a>

                                <a href="{{ route('contact') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="pt-5 p-4">
                        <h3 class="text-[#1C2035] font-bold text-xl mb-2 transition-colors duration-300 group-hover:text-[#4870F8] cursor-pointer">
                            Shopify Store Setup
                        </h3>
                        <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                            Theme customization, product structure, and store management ready for day-to-day sales.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div data-aos="fade-up" data-aos-delay="200" class="group flex flex-col bg-transparent shadow-lg rounded-lg hover:-translate-y-2 transition duration-300">
                    <div class="relative overflow-hidden rounded-tl-lg rounded-tr-lg aspect-[4/3] w-full shadow-sm">
                        <img src="{{ asset('images/project-1.jpg') }}"
                             alt="Video and brand creative"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute inset-0 bg-[#1C2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="flex gap-4 transform translate-y-12 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 ease-out">
                                <a href="{{ route('project-details') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    </svg>
                                </a>
                                <a href="{{ route('contact') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5 p-4">
                        <h3 class="text-[#1C2035] font-bold text-xl mb-2 transition-colors duration-300 group-hover:text-[#4870F8] cursor-pointer">
                            Video & Brand Creative
                        </h3>
                        <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                            Promotional video edits and graphic design that elevate brand image across channels.
                        </p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div data-aos="fade-up" data-aos-delay="300" class="group flex flex-col bg-transparent shadow-lg rounded-lg hover:-translate-y-2 transition duration-300">
                    <div class="relative overflow-hidden rounded-tl-lg rounded-tr-lg aspect-[4/3] w-full shadow-sm">
                        <img src="{{ asset('images/project-2.jpg') }}"
                             alt="Custom software solution"
                             class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute inset-0 bg-[#1C2035]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="flex gap-4 transform translate-y-12 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300 ease-out">
                                <a href="{{ route('project-details') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                    </svg>
                                </a>
                                <a href="{{ route('contact') }}"
                                   class="w-12 h-12 bg-white rounded-full flex items-center justify-center text-[#1C2035] transition-all duration-200 shadow-lg">
                                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="pt-5 p-4">
                        <h3 class="text-[#1C2035] font-bold text-xl mb-2 transition-colors duration-300 group-hover:text-[#4870F8] cursor-pointer">
                            Custom Software Solution
                        </h3>
                        <p class="text-slate-500 text-sm md:text-base leading-relaxed">
                            Tailored tools and integrations that streamline operations and improve team productivity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="flex justify-center items-center w-full py-8">

            <nav class="inline-flex rounded-lg border border-slate-300 overflow-hidden bg-white shadow-sm"
                 aria-label="Pagination">

                <a href="{{ route('projects') }}"
                   class="inline-flex items-center justify-center w-14 h-14 text-slate-500 hover:bg-slate-50 transition-colors duration-200 border-r border-slate-200">
                    <span class="sr-only">Previous</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/>
                    </svg>
                </a>

                <a href="{{ route('projects') }}" aria-current="page"
                   class="inline-flex items-center justify-center w-14 h-14 bg-[#4870F8] text-white font-medium text-lg border-r border-slate-200">
                    1
                </a>

                <a href="{{ route('projects-list') }}"
                   class="inline-flex items-center justify-center w-14 h-14 text-[#4870F8] hover:bg-slate-50 font-medium text-lg transition-colors duration-200 border-r border-slate-200">
                    2
                </a>

                <a href="{{ route('project-details') }}"
                   class="inline-flex items-center justify-center w-14 h-14 text-[#4870F8] hover:bg-slate-50 font-medium text-lg transition-colors duration-200 border-r border-slate-200">
                    3
                </a>

                <a href="{{ route('project-details') }}"
                   class="inline-flex items-center justify-center w-14 h-14 text-[#4870F8] hover:bg-slate-50 transition-colors duration-200">
                    <span class="sr-only">Next</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
                    </svg>
                </a>

            </nav>
        </div>
    </section>

@endsection
