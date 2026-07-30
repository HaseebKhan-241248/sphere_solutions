@extends('layout.app')

@section('content')

    <section class="relative">
        <div class="relative h-80 bg-cover bg-center flex items-center justify-center text-center bg-black/30"
             style="background-image: url({{ asset('images/about-hero.jpg') }});">
            <div class="text-white px-4">
                <h1 class="text-4xl md:text-7xl font-bold mb-4">Projects</h1>
                <p class="text-lg space-x-3">
                    <a href="{{ route('home') }}" class="hover:text-[#4761FF]">Home</a>
                    <span>/</span>
                    <a href="#" class="hover:text-[#4761FF]"> Pages</a>
                    <span>/</span>
                    <span class="text-[#4761FF]"> Projects </span>
                </p>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="md:max-w-[88%] mx-auto px-6">

            <div class="flex items-center justify-center text-center mb-16">
                <div>
                    <h1 class="mb-4 text-[#4761FF] text-xl">Our Project</h1>
                    <h2 class="text-2xl md:text-[45px] leading-[1.1] font-bold text-[#20233F] max-w-2xl">
                        We've Done Lot's of
                        Awesome Projects
                    </h2>
                </div>
            </div>

            <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">

                <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-1.jpg') }}" class="w-full h-75 object-cover " alt="project1">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>


                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center ">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center ">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer" style="font-weight: 600">
                            Data Analytics & Insights
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">

                            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        </p>

                    </div>

                </div>

                <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/project-2.jpg') }}" class="w-full h-75 object-cover ">
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center ">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                    </div>
                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer" style="font-weight: 600">
                            Marketing Content Strategy
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        </p>

                    </div>
                </div>

                <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-3.jpg') }}" class="w-full h-75 object-cover ">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer" style="font-weight: 600">
                            Social Marketing Strategy
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        </p>

                    </div>

                </div>

                <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-3.jpg') }}" class="w-full h-75 object-cover ">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer" style="font-weight: 600">
                            Social Marketing Strategy
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        </p>

                    </div>

                </div>

                <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-3.jpg') }}" class="w-full h-75 object-cover ">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer" style="font-weight: 600">
                            Social Marketing Strategy
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        </p>

                    </div>

                </div>

                <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

                    <div class="relative overflow-hidden">

                        <img src="{{ asset('images/project-3.jpg') }}" class="w-full h-75 object-cover ">

                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500"></div>

                        <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <a href="#" class="w-12 h-12 rounded-full bg-white flex items-center justify-center">
                                <i class="fa-solid fa-link"></i>
                            </a>

                        </div>

                    </div>

                    <div class="p-6">

                        <h3 class="text-[18px] text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer" style="font-weight: 600">
                            Social Marketing Strategy
                        </h3>

                        <p class="text-gray-500 text-md leading-6 font-sans">
                            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
                        </p>

                    </div>

                </div>


            </div>

            <div class="flex items-center justify-center bg-white py-4 gap-2">
                <button class="flex size-10 md:size-14 items-center rounded-lg justify-center border border-gray-200 text-[#4761FF] transition hover:bg-gray-200 focus:outline-none">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://w3.org">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </button>

                <button class="flex size-10 md:size-14 items-center cursor-pointer rounded-lg justify-center bg-[#4761FF] font-semibold text-white focus:outline-none">
                    1
                </button>

                <button class="flex size-10 md:size-14 items-center cursor-pointer rounded-lg justify-center border border-gray-200 text-[#4761FF] transition hover:bg-gray-200 focus:outline-none">
                    2
                </button>

                <button class="flex size-10 md:size-14 items-center cursor-pointer rounded-lg justify-center border border-gray-200 text-[#4761FF] transition hover:bg-gray-200 focus:outline-none">
                    3
                </button>

                <button class="flex size-10 md:size-14 items-center cursor-pointer rounded-lg justify-center border border-gray-200 text-[#4761FF] transition hover:bg-gray-200 focus:outline-none">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://w3.org">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </button>
            </div>

        </div>
    </section>

@endsection

