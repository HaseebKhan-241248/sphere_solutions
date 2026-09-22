@extends('layout.app')

@section('title', 'Projects – Sphere Marketing Solutions')
@section('meta_description', 'Explore digital marketing and creative projects delivered by Sphere Marketing Solutions.')

@push('meta')
    <link rel="canonical" href="{{ route('projects') }}">
@endpush

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">
            <img src="{{ asset('images/about-hero.jpg') }}" alt="Projects Hero"
                 class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 bg-black/50 z-10"></div>
            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Projects
                </h1>
                <x-page-breadcrumb current="Projects" />
            </div>
        </div>
    </section>

    <section data-aos="fade-up" data-aos-delay="100" class="py-24 bg-white">
        <div class="md:max-w-[88%] mx-auto px-6">

            <div class="flex items-center justify-center text-center mb-16">
                <div>
                    <h1 class="mb-4 text-[#4870F8] text-xl">Our Project</h1>
                    <h2 class="text-2xl md:text-[45px] leading-[1.1] font-semibold text-[#20233F] max-w-xl">
                        We've Done Lot's of
                        Awesome Projects
                    </h2>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-6">

                <div data-aos="fade-up" data-aos-delay="100" class="group rounded-2xl overflow-hidden shadow-lg bg-white hover:-translate-y-2 transition duration-300">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-1.jpg') }}" class="w-full h-75 object-cover " alt="E-commerce website project">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>


                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="{{ route('project-details') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center ">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="{{ route('contact') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center ">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4870F8] cursor-pointer" style="font-weight: 600">
                            E-commerce Website Build
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Custom storefront with clear product pages and a checkout flow built for conversions.
                        </p>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="group rounded-2xl overflow-hidden shadow-lg bg-white hover:-translate-y-2 transition duration-300">

                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/project-2.jpg') }}" class="w-full h-75 object-cover " alt="Social ads campaign">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="{{ route('project-details') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center ">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="{{ route('contact') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4870F8] cursor-pointer" style="font-weight: 600">
                            Social Ads Campaign
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Targeted Meta and Google ads that reached the right audience and grew qualified leads.
                        </p>

                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="group rounded-2xl overflow-hidden shadow-lg bg-white hover:-translate-y-2 transition duration-300">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-3.jpg') }}" class="w-full h-75 object-cover " alt="Local SEO growth">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="{{ route('project-details') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="{{ route('contact') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4870F8] cursor-pointer" style="font-weight: 600">
                            Local SEO Growth
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            On-page and content improvements that helped a service business rank for local searches.
                        </p>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="group rounded-2xl overflow-hidden shadow-lg bg-white hover:-translate-y-2 transition duration-300">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-4.jpg') }}" class="w-full h-75 object-cover " alt="Shopify store setup">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="{{ route('project-details') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="{{ route('contact') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4870F8] cursor-pointer" style="font-weight: 600">
                            Shopify Store Setup
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Theme customization, product structure, and store management ready for day-to-day sales.
                        </p>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="group rounded-2xl overflow-hidden shadow-lg bg-white hover:-translate-y-2 transition duration-300">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-1.jpg') }}" class="w-full h-75 object-cover " alt="Video and brand creative">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="{{ route('project-details') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="{{ route('contact') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4870F8] cursor-pointer" style="font-weight: 600">
                            Video & Brand Creative
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Promotional video edits and graphic design that elevate brand image across channels.
                        </p>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="group rounded-2xl overflow-hidden shadow-lg bg-white hover:-translate-y-2 transition duration-300">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-2.jpg') }}" class="w-full h-75 object-cover " alt="Custom software solution">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="{{ route('project-details') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="{{ route('contact') }}" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4870F8] cursor-pointer" style="font-weight: 600">
                            Custom Software Solution
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Tailored tools and integrations that streamline operations and improve team productivity.
                        </p>

                    </div>

                </div>


            </div>

        </div>
    </section>

@endsection
