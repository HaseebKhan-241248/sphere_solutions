@extends('layout.app')

@section('content')


    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero" class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Contact Us
                </h1>

                <nav class="flex items-center justify-center space-x-2 text-white text-base font-medium">
                    <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>
                    <span class="text-slate-300">/</span>
                    <a href="#" class="hover:underline transition text-slate-200">Pages</a>
                    <span class="text-slate-300">/</span>
                    <span class="text-[#4F46E5] font-semibold">Contact Us</span>
                </nav>
            </div>

        </div>
    </section>


    <section data-aos="fade-up" data-aos-delay="100" class="py-24 bg-white">
        <div class="max-w-[85%] mx-auto">

            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-[#4761FF] text-lg tracking-wide block mb-3">
                    Contact Us
                </span>
                <h2 class="text-[#0F172A] text-4xl md:text-[46px] font-extrabold tracking-tight leading-tight">
                    Want to Discuss a Project With Us?
                </h2>
            </div>


            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

                <div class="lg:col-span-6">
                    <h2 class="text-[#1C2035] text-2xl font-extrabold tracking-tight mb-8">
                        Talk to Our Sales & Marketing Team
                    </h2>

                    <form action="#" method="POST" class="space-y-5">
                        <div class="w-full">
                            <input type="text" name="name" placeholder="Your Name"
                                   class="w-full border border-slate-300 rounded-lg px-4 py-4 text-sm outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200 transition duration-200 placeholder-slate-500">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <input type="email" name="email" placeholder="Your Email"
                                   class="w-full border border-slate-300 rounded-lg px-4 py-4 text-sm outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200 transition duration-200 placeholder-slate-500">
                            <input type="text" name="mobile" placeholder="Mobile"
                                   class="w-full border border-slate-300 rounded-lg px-4 py-4 text-sm outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200 transition duration-200 placeholder-slate-500">
                        </div>

                        <div class="w-full">
                            <input type="text" name="subject" placeholder="Subject"
                                   class="w-full border border-slate-300 rounded-lg px-4 py-4 text-sm outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200 transition duration-200 placeholder-slate-500">
                        </div>

                        <div class="w-full">
                            <textarea name="message" rows="10" placeholder="Leave a message here"
                                      class="w-full border border-slate-300 rounded-lg px-4 py-4 text-sm outline-none transition-all focus:border-indigo-400 focus:ring-4 focus:ring-indigo-200 transition duration-200 placeholder-slate-500 resize-none"></textarea>
                        </div>

                        <div>
                            <button type="submit"
                                    class="bg-[#4761FF] hover:bg-blue-700 text-white font-semibold px-10 py-4 rounded-full transition shadow-md hover:shadow-lg text-base tracking-wide">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div class="lg:col-span-5 space-y-8">
                    <div>
                        <h2 class="text-[#1C2035] text-2xl font-extrabold tracking-tight mb-8">
                            Contact Details
                        </h2>

                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="size-10 rounded-full bg-[#4761FF] flex items-center justify-center text-white text-lg shrink-0">
                                    <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
                                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-black text-sm font-semibold tracking-wider">Our
                                        Office</h4>
                                    <p class="font-sans text-[#555555] text-sm">Vancouver, BC, Canada</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 border-t border-slate-300 pt-4">
                                <div class="size-10 rounded-full bg-[#4761FF] flex items-center justify-center text-white text-lg shrink-0">
                                    <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
                                        <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-black text-sm font-semibold tracking-wider">Call
                                        Us</h4>
                                    <p class="font-sans text-[#555555] text-sm">+1 (604) 313-7091</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 border-t border-slate-300 pt-4">
                                <div class="size-10 rounded-full bg-[#4761FF] flex items-center justify-center text-white text-lg shrink-0">
                                    <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
                                        <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-black text-sm font-semibold tracking-wider">Mail
                                        Us</h4>
                                    <p class="font-sans text-[#555555] text-sm">info@spheremarketingsolutions.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full h-[280px] rounded-xl overflow-hidden shadow-sm border border-slate-100 relative">
                        <iframe class="w-full h-full border-0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83327.34964792216!2d-123.1939432!3d49.2578263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673f143a94fb3%3A0x796063c1de3f8f35!2sVancouver%2C%20BC!5e0!3m2!1sen!2sca!4v1700000000000!5m2!1sen!2sca"
                                allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

