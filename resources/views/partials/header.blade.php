
<marquee direction="left" data-aos="fade-down" data-aos-duration="600" data-aos-once="true" class="relative w-full overflow-hidden bg-gradient-to-r from-[#1A237E] via-[#2A3CBA] to-[#4761FF] py-2 text-white shadow-md z-50">

    <div class="flex w-[200%] animate-marquee font-semibold tracking-wider text-xs sm:text-sm uppercase whitespace-nowrap">

        <div class="flex w-1/2 justify-around items-center space-x-6 shrink-0">
            <span>WEB & MOBILE ENGINEERING</span>
            <span class="text-lg">•</span>
            <span>INTELLIGENT BUSINESS SYSTEMS</span>
            <span class="text-lg">•</span>
            <span>DESIGNING WHAT'S NEXT</span>
            <span class="text-lg">•</span>
            <span>AI-POWERED DIGITAL TRANSFORMATION</span>
            <span class="text-lg">•</span>
        </div>

        <div class="flex w-1/2 justify-around items-center space-x-6 shrink-0" aria-hidden="true">
            <span>WEB & MOBILE ENGINEERING</span>
            <span class="text-lg">•</span>
            <span>INTELLIGENT BUSINESS SYSTEMS</span>
            <span class="text-lg">•</span>
            <span>DESIGNING WHAT'S NEXT</span>
            <span class="text-lg">•</span>
            <span>AI-POWERED DIGITAL TRANSFORMATION</span>
            <span class="text-lg">•</span>
        </div>

    </div>
</marquee>


<!-- Top Header-->
<header class="bg-[#4761FF] text-white overflow-hidden" data-aos="fade-down" data-aos-duration="600">
    <div class="max-w-[88%] mx-auto px-4 sm:px-6">
        <div class="flex flex-col lg:flex-row items-center justify-between py-1 gap-4">

            <!-- Logo-->
            <a href="{{ route('home') }}" class="text-2xl md:text-3xl font-bold text-white hover:opacity-90 transition">
                <img src="{{ asset('images/h-logo.png') }}" alt="" class="w-24">
            </a>

            <!-- Contact Info & Socials -->
            <div class="flex flex-wrap items-center justify-center lg:justify-end gap-6 text-sm">

                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/>
                    </svg>
                    <span style="font-weight: 500;">Vancouver, BC, Canada</span>
                </div>

                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M2 4h20v16H2V4zm10 8L4 6v12h16V6l-8 6z"/>
                    </svg>
                    <a href="mailto:info@spheremarketingsolutions.com" class="hover:underline"
                       style="font-weight: 500;">info@spheremarketingsolutions.com</a>
                </div>

                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79a15.09 15.09 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V21c0 .55-.45 1-1 1C10.07 22 2 13.93 2 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                    </svg>
                    <a href="tel:+16043137091" class="hover:underline" style="font-weight: 500;">+1 (604) 313-7091</a>
                </div>

                <div class="flex items-center gap-3">
                    <a href="https://www.facebook.com/profile.php?id=61558581241296" target="_blank" rel="noopener" class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="https://x.com/SpMarkSolutions" target="_blank" rel="noopener" class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/sm-solutions/" target="_blank" rel="noopener" class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </div>

            </div>

        </div>
    </div>
</header>

<!-- Navigation Bar -->
<nav id="navBar" class="bg-white shadow-sm relative z-40" data-aos="fade-down" data-aos-delay="200"
     data-aos-duration="600">
    <div class="max-w-[92%] xl:max-w-[88%] mx-auto px-4 sm:px-6">

        <!-- Mobile Menu Toggle Button (sm and below) -->
        <div class="w-full sm:w-auto flex items-center justify-between sm:justify-start">
            <button id="mobileMenuBtn" type="button" class="sm:hidden flex flex-col w-10 h-10 items-center justify-center gap-1.5 bg-[#4761FF] rounded-lg focus:outline-none" aria-label="Toggle menu">
                <span class="w-5 h-[2px] bg-white transition-all duration-300"></span>
                <span class="w-5 h-[2px] bg-white transition-all duration-300"></span>
                <span class="w-5 h-[2px] bg-white transition-all duration-300"></span>
            </button>
        </div>
        <!-- Main Header Container -->
        <div class="flex flex-col lg:flex-row items-center justify-between py-4 gap-4 xl:gap-0 max-w-[90%] mx-auto">

            <!-- Nav Links List -->
            <ul id="navLinks" class="hidden sm:flex flex-wrap items-center justify-start mr-auto gap-4 md:gap-6 xl:gap-8 text-[16px] lg:text-[18px] xl:text-[20px] text-black">

                <li data-aos="fade-down" data-aos-delay="250">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>

                <li data-aos="fade-down" data-aos-delay="300">
                    <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group">
                        About
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>

                <li class="relative group" data-aos="fade-down" data-aos-delay="350">
                    <button type="button" class="nav-link flex items-center gap-1 {{ request()->routeIs('services', 'service-details') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative">
                        Service
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                        {{--<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current transition-transform duration-300 group-hover:rotate-180"
                             viewBox="0 0 20 20">
                            <path d="M5.5 7.5L10 12l4.5-4.5z"/>
                        </svg>--}}
                    </button>
                   {{-- <ul class="absolute left-0 top-full mt-2 w-48 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform translate-y-2 group-hover:translate-y-0">
                        <li><a href="{{ route('services') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">All
                                Services</a></li>
                        <li><a href="{{ route('services') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Website
                                Development</a></li>
                        <li><a href="{{ route('services') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">SEO
                                Services</a></li>
                        <li><a href="{{ route('services') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Digital
                                Marketing</a></li>
                    </ul>--}}
                </li>

                <li data-aos="fade-down" data-aos-delay="400">
                    <a href="{{ route('prices') }}" class="nav-link {{ request()->routeIs('prices') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group">
                        Packages
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>

                <li data-aos="fade-down" data-aos-delay="450">
                    <a href="{{ route('faqs') }}" class="nav-link {{ request()->routeIs('faqs') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group">
                        FAQs
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>

                <li class="relative group" data-aos="fade-down" data-aos-delay="500">
                    <button type="button" class="nav-link flex items-center gap-1 {{ request()->routeIs('projects', 'project-details', 'projects-list', 'project-details-alt') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative">
                        Project
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                       {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current transition-transform duration-300 group-hover:rotate-180"
                             viewBox="0 0 20 20">
                            <path d="M5.5 7.5L10 12l4.5-4.5z"/>
                        </svg>--}}
                    </button>
{{--
                    <ul class="absolute left-0 top-full mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform translate-y-2 group-hover:translate-y-0">
                        <li><a href="{{ route('projects') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Projects</a>
                        </li>
                        <li><a href="{{ route('project-details') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">Project
                                Details</a></li>
                    </ul>
--}}
                </li>

                <li class="relative group" data-aos="fade-down" data-aos-delay="550">
                    <button type="button" class="nav-link flex items-center gap-1 {{ request()->routeIs('our-team', 'testimonials', 'features', 'quote') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative">
                        Pages
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 fill-current transition-transform duration-300 group-hover:rotate-180"
                             viewBox="0 0 20 20">
                            <path d="M5.5 7.5L10 12l4.5-4.5z"/>
                        </svg>
                    </button>
                    <ul class="absolute left-0 top-full mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50 transform translate-y-2 group-hover:translate-y-0">
                        <li>
                            <a href="{{ route('our-team') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">
                                Our Team
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('testimonials') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">
                                Testimonials
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('features') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">
                                Features
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('quote') }}" class="block p-2 text-[15px] hover:text-[#4761FF] hover:bg-gray-50 transition-all duration-300">
                                Get a Quote
                            </a>
                        </li>
                    </ul>
                </li>

                <li data-aos="fade-down" data-aos-delay="600">

                    <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
            </ul>

            <div data-aos="fade-down" data-aos-delay="650" class="hidden sm:flex shrink-0">
                <a href="{{ route('quote') }}"
                   class="whitespace-nowrap bg-[#4761FF] hover:bg-indigo-700 text-white text-md font-medium px-6 py-2.5 rounded-full transition-all duration-300 hover:scale-105 shadow-md">
                    Hire Us
                </a>
            </div>

        </div>

        <!-- Mobile Panel -->
        <div id="mobileNavPanel"
             class="hidden sm:hidden absolute left-0 top-full w-full bg-white border-t border-gray-100 shadow-xl z-50 px-6 py-6">
            <ul class="flex flex-col gap-3 text-[17px] text-black font-medium">
                <li><a href="{{ route('home') }}"
                       class="block py-2 {{ request()->routeIs('home') ? 'text-[#4761FF]' : 'hover:text-[#4761FF]' }}">Home</a>
                </li>
                <li><a href="{{ route('about') }}" class="block py-2 hover:text-[#4761FF]">About</a></li>
                <li><a href="{{ route('services') }}" class="block py-2 hover:text-[#4761FF]">Services</a></li>
                <li><a href="{{ route('prices') }}" class="block py-2 hover:text-[#4761FF]">Packages</a></li>
                <li><a href="{{ route('faqs') }}" class="block py-2 hover:text-[#4761FF]">FAQs</a></li>
                <li><a href="{{ route('projects') }}" class="block py-2 hover:text-[#4761FF]">Projects</a></li>
                <li><a href="{{ route('our-team') }}" class="block py-2 hover:text-[#4761FF]">Our Team</a></li>
                <li><a href="{{ route('testimonials') }}" class="block py-2 hover:text-[#4761FF]">Testimonials</a></li>
                <li><a href="{{ route('contact') }}" class="block py-2 hover:text-[#4761FF]">Contact</a></li>
                <li class="pt-3">
                    <a href="{{ route('quote') }}"
                       class="block text-center bg-[#4761FF] text-white font-medium py-3 rounded-full hover:bg-indigo-700 transition">Hire
                        Us</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
