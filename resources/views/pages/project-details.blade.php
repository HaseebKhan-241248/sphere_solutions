@extends('layout.app')

@section('content')

    <section class="relative">
        <div class="relative h-80 bg-cover bg-center flex items-center justify-center text-center bg-black/30"
             style="background-image: url({{ asset('images/about-hero.jpg') }});">
            <div class="text-white px-4">
                <h1 class="text-4xl md:text-7xl font-bold mb-4">Project Details</h1>
                <p class="text-lg space-x-3">
                    <a href="{{ route('home') }}" class="hover:text-[#4761FF]">Home</a>
                    <span>/</span>
                    <a href="#" class="hover:text-[#4761FF]"> Pages</a>
                    <span>/</span>
                    <span class="text-[#4761FF]"> Project Details</span>
                </p>
            </div>
        </div>
    </section>


    <section class="py-16">
        <div class="max-w-[85%] mx-auto grid lg:grid-cols-3 gap-12">

            <div class="lg:col-span-2">

                <img src="{{ asset('images/about-hero.jpg') }}"
                     alt="Digital Marketing Service" class="w-full h-105 object-cover rounded-lg mb-8">

                <h2 class="text-3xl md:text-4xl font-bold text-[#20233F] mb-6">Digital Marketing Project</h2>

                <p class="font-sans text-[#555555] leading-6 text-[17px] mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis luctus augue vitae vulputate.
                    Nulla vel venenatis nisi. Fusce convallis, nibh id interdum ullamcorper, libero metus lacinia sapien,
                    accumsan auctor erat libero id nulla. Fusce cursus ante tellus, non tempor magna pellentesque eu.
                    Quisque egestas ultrices libero, sed vulputate libero tincidunt id. Mauris eleifend nunc ac ligula
                    mollis, a semper libero consequat. Vestibulum ac elit vel erat molestie malesuada.
                </p>

                <p class="font-sans text-[#555555] leading-6 text-[17px] mb-10">
                    Integer sit amet efficitur massa. Vivamus elementum commodo commodo. Vivamus ac dapibus sem, vitae
                    convallis nunc. Mauris nec eleifend mi. Pellentesque in neque ut nisl luctus suscipit non in lectus.
                    Aliquam quam nibh, viverra ac turpis a, tristique faucibus lectus. Praesent nunc nunc, tristique at
                    sapien sed, accumsan ullamcorper odio.
                </p>

                <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Project Gallery</h3>

                <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] mb-12 divide-y divide-gray-100 p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                        <img src="{{ asset('images/project-1.jpg') }}" class="rounded-lg">
                        <img src="{{ asset('images/project-2.jpg') }}" class="rounded-lg">
                        <img src="{{ asset('images/project-3.jpg') }}" class="rounded-lg">
                        <img src="{{ asset('images/project-4.jpg') }}" class="rounded-lg">
                        <img src="{{ asset('images/project-1.jpg') }}" class="rounded-lg">
                        <img src="{{ asset('images/project-2.jpg') }}" class="rounded-lg">
                        <img src="{{ asset('images/project-3.jpg') }}" class="rounded-lg">
                        <img src="{{ asset('images/project-4.jpg') }}" class="rounded-lg">
                    </div>
                </div>

                <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Clients Review</h3>

                <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-8 max-w-md">

                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=6" alt="Jhon Doe"
                             class="size-17 rounded-full object-cover">
                        <div>
                            <h4 class="text-[20px] font-bold text-[#20233F]">Jhon Doe</h4>
                            <p class="text-[15px] text-[#777]">CEO & Founder</p>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-[#20233F] mb-4">Creative and effective work</h3>

                    <p class="font-sans text-[#555555] leading-6 text-[16px]">
                        onumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam
                        consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren
                        dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores
                        diam nonumy, gubergren sit stet no diam kasd vero.
                    </p>

                </div>

            </div>

            <aside class="space-y-8">

                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-[#20233F] mb-4">Project Info</h3>
                    <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-5 space-y-3">
                        <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4761FF]">Project Name:</span> Marketing
                        </a>
                        <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4761FF]">Client Name:</span> John Doe
                        </a>
                        <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4761FF]">Project Manager:</span> John Doe
                        </a>
                        <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4761FF]">Project Link:</span> example.com
                        </a>
                        <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4761FF]">Completed Date:</span> 01 Jan, 2026
                        </a>
                        <a href="#" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            E-mail Marketing
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-[#20233F] mb-4">Recent Projects</h3>
                    <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-5 space-y-3">
                        <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg  hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Digital Marketing
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Internet Marketing
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Content Marketing
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Social Marketing
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            B2B Marketing
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            E-mail Marketing
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-4">Get A Free Quote</h3>
                    <form class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-6 space-y-4">
                        <input type="text" placeholder="Your Name" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none">
                        <input type="email" placeholder="Your Email" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4761FF]">
                        <input type="text" placeholder="Your Mobile" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4761FF]">
                        <select class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4761FF]">
                            <option>Choose A Service</option>
                            <option selected>Digital Marketing</option>
                            <option>SEO</option>
                            <option>Content Marketing</option>
                            <option>Social Marketing</option>
                        </select>
                        <textarea rows="4" placeholder="Message" class="w-full rounded-xl border border-gray-300 px-5 py-3 text-[16px] outline-none focus:border-[#4761FF]"></textarea>
                        <button type="button" class="w-full h-14 rounded-xl text-white text-lg bg-linear-to-r from-[#4761FF] to-[#5C6CFF] hover:opacity-90 duration-300">
                            Submit Now
                        </button>
                    </form>
                </div>

            </aside>

        </div>
    </section>

    <button id="scrollTopBtn" class="hidden fixed bottom-6 right-6 w-12 h-12 rounded-full bg-[#4761FF] text-white items-center justify-center shadow-lg z-50">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
@endsection





