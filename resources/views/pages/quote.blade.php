@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero" class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Quote
                </h1>

                <nav class="flex items-center justify-center space-x-2 text-white text-base font-medium">
                    <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>
                    <span class="text-slate-300">/</span>
                    <a href="#" class="hover:underline transition text-slate-200">Pages</a>
                    <span class="text-slate-300">/</span>
                    <span class="text-[#4F46E5] font-semibold">Quote</span>
                </nav>
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
                                <input type="text" placeholder="Your Name" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-base md:text-md outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200">
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
                                <select class="w-full h-14 rounded-xl border border-gray-300 px-5 text-base md:text-md placeholder:text-gray-400 md:text-md text-gray-700 outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200 bg-white">
                                    <option disabled selected>Choose A Service</option>
                                    <option>Digital Marketing</option>
                                    <option>SEO</option>
                                    <option>Content Marketing</option>
                                    <option>Social Marketing</option>
                                </select>
                            </div>

                        </div>

                        <label>
                            <textarea rows="6" placeholder="Message" class="w-full mt-6 rounded-xl border border-gray-300 px-6 p-2 text-md outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200"></textarea>
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
