@extends('layout.app')

@section('content')


    <section class="relative">
        <div class="relative h-80 bg-cover bg-center flex items-center justify-center text-center bg-black/30"
             style="background-image: url({{ asset('images/about-hero.jpg') }});">
            <div class="text-white px-4">
                <h1 class="text-4xl md:text-7xl font-bold mb-4">Project Details</h1>
                <p class="text-lg space-x-3">
                    <a href="{{ route('home') }}" class="hover:text-[#4870F8]">Home</a>
                    <span>/</span>
                    <span class="text-[#4870F8]"> Project Details</span>
                </p>
            </div>
        </div>
    </section>


    <section data-aos="fade-up" data-aos-delay="100" class="py-16">
        <div class="max-w-[85%] mx-auto grid lg:grid-cols-3 gap-12">

            <div class="lg:col-span-2">

                <img src="{{ asset('images/about-hero.jpg') }}"
                     alt="SEO and content project" class="w-full h-105 object-cover rounded-lg mb-8">

                <h2 class="text-3xl md:text-4xl font-bold text-[#20233F] mb-6">Local SEO & Content Strategy</h2>

                <p class="font-sans text-[#555555] leading-6 text-[17px] mb-5">
                    This project focused on helping a growing business rank for the searches that drive real customers.
                    Sphere Marketing Solutions audited the site, tightened keyword targeting, and rebuilt key pages with
                    clearer messaging, faster load times, and stronger local signals.
                </p>

                <p class="font-sans text-[#555555] leading-6 text-[17px] mb-10">
                    Alongside technical SEO, we produced supporting content and landing pages aligned to service
                    offerings. Monthly reporting kept priorities transparent so the client could see ranking movement,
                    traffic trends, and next steps without marketing jargon.
                </p>

                <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Project Gallery</h3>

                <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] mb-12 divide-y divide-gray-100 p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                        <img src="{{ asset('images/project-1.jpg') }}" class="rounded-lg" alt="Project gallery 1">
                        <img src="{{ asset('images/project-2.jpg') }}" class="rounded-lg" alt="Project gallery 2">
                        <img src="{{ asset('images/project-3.jpg') }}" class="rounded-lg" alt="Project gallery 3">
                        <img src="{{ asset('images/project-4.jpg') }}" class="rounded-lg" alt="Project gallery 4">
                        <img src="{{ asset('images/project-1.jpg') }}" class="rounded-lg" alt="Project gallery 5">
                        <img src="{{ asset('images/project-2.jpg') }}" class="rounded-lg" alt="Project gallery 6">
                        <img src="{{ asset('images/project-3.jpg') }}" class="rounded-lg" alt="Project gallery 7">
                        <img src="{{ asset('images/project-4.jpg') }}" class="rounded-lg" alt="Project gallery 8">
                    </div>
                </div>

                <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Project FAQs</h3>

                <div class="rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] divide-y divide-gray-100 overflow-hidden">

                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-5 text-left font-medium text-[#555555]">
                            <span>Q: What services do you offer in digital marketing?</span>
                            <i class="fa-solid fa-chevron-down faq-icon text-[#555555]"></i>
                        </button>
                        <div class="faq-answer px-5">
                            <p class="text-[#777] text-[15px] pb-5">
                                We offer website development, SEO, social media advertising, Google and Facebook Ads,
                                Shopify support, video editing, graphic design, YouTube management, and custom software.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-5 text-left font-medium text-[#555555]">
                            <span>Q: How long does it take to see results from digital marketing?</span>
                            <i class="fa-solid fa-chevron-down faq-icon text-[#555555]"></i>
                        </button>
                        <div class="faq-answer px-5">
                            <p class="text-[#777] text-[15px] pb-5">
                                Most clients begin to see measurable traction within 4-8 weeks, though timelines vary
                                depending on the channel, competition, and campaign goals.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-toggle w-full flex items-center justify-between p-5 text-left font-medium text-[#555555]">
                            <span>Q: What is SEO and why is it important?</span>
                            <i class="fa-solid fa-chevron-down faq-icon text-[#555555]"></i>
                        </button>
                        <div class="faq-answer px-5">
                            <p class="text-[#777] text-[15px] pb-5">
                                SEO helps your site rank higher in search results, driving organic traffic without
                                ongoing ad spend, and building long-term visibility for your brand.
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <aside class="space-y-8">
                <div class="shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] p-5 rounded-lg">
                    <div class="relative ">
                        <input type="text" placeholder="Search..."
                               class="w-full h-14 rounded-xl border border-gray-300 px-5 pr-14 text-[17px] outline-none focus:border-[#4870F8]">
                        <button class="absolute right-1 top-1 h-12 w-12 rounded-lg text-[#4870F8] flex items-center justify-center">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-[#20233F] mb-4">Project Info</h3>
                    <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-5 space-y-3">
                        <div
                           class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4870F8]">Project Name:</span> Local SEO
                        </div>
                        <div
                           class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4870F8]">Client:</span> Studio Growth Brand
                        </div>
                        <div
                           class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4870F8]">Focus:</span> SEO & Content
                        </div>
                        <a href="https://spheremarketingsolutions.com/" target="_blank" rel="noopener noreferrer"
                           class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F] hover:text-[#4870F8]">
                            <span class="text-[#4870F8]">Project Link:</span> Sphere Site
                        </a>
                        <div
                           class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4870F8]">Completed:</span> 2025
                        </div>
                        <div
                           class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Website Development
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-[#20233F] mb-4">Recent Projects</h3>
                    <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-5 space-y-3">
                        <a href="{{ route('project-details') }}"
                           class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg  hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Digital Marketing
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i
                                    class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('project-details-alt') }}"
                           class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            SEO & Content
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i
                                    class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('projects') }}"
                           class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Social Advertising
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i
                                    class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('projects') }}"
                           class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Shopify Stores
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i
                                    class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('projects') }}"
                           class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Video Editing
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i
                                    class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('contact') }}"
                           class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Custom Software
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i
                                    class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-4">Get A Free Quote</h3>
                    <form class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-6 space-y-4">
                        <input type="text" placeholder="Your Name"
                               class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none">
                        <input type="email" placeholder="Your Email"
                               class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4870F8]">
                        <input type="text" placeholder="Your Mobile"
                               class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4870F8]">
                        <select class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4870F8]">
                            <option>Choose A Service</option>
                            <option selected>SEO</option>
                            <option>Digital Marketing</option>
                            <option>Website Development</option>
                            <option>Social Media Advertising</option>
                        </select>
                        <textarea rows="4" placeholder="Message"
                                  class="w-full rounded-xl border border-gray-300 px-5 py-3 text-[16px] outline-none focus:border-[#4870F8]"></textarea>
                        <a href="{{ route('contact') }}"
                                class="w-full h-14 rounded-xl text-white text-lg bg-linear-to-r from-[#4870F8] to-[#6B8AFF] hover:opacity-90 duration-300 flex items-center justify-center">
                            Submit Now
                        </a>
                    </form>
                </div>

                <div class="bg-white shadow-[0_0_15px_5px_rgba(0,0,0,0.1)]  rounded-lg p-8 text-center">
                    <h3 class="text-xl md:text-3xl font-semibold text-[#20233F] mb-6">Interested in a similar project?</h3>
                    <a href="{{ route('contact') }}"
                       class="inline-block bg-[#4870F8] hover:bg-[#3A5CE0] text-white font-medium px-8 py-4 rounded-lg transition">
                        Let's work together
                    </a>
                </div>

            </aside>

        </div>
    </section>
@endsection
