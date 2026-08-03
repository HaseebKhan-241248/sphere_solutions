<marquee direction="left" data-aos="fade-down" data-aos-duration="600" data-aos-once="true"
         class="hidden md:block relative w-full overflow-hidden bg-gradient-to-r from-[#1A237E] via-[#2A3CBA] to-[#4761FF] py-2 text-white shadow-md z-50">

    <div
        class="flex w-[200%] animate-marquee animate-[marquee_30s_linear_infinite] font-semibold tracking-wider text-xs sm:text-sm uppercase whitespace-nowrap">

        <div class="flex w-1/2 items-center gap-6 shrink-0">
            <span class="text-lg">•</span>
            <span>WEB & MOBILE ENGINEERING</span>
            <span class="text-lg">•</span>
            <span>INTELLIGENT BUSINESS SYSTEMS</span>
            <span class="text-lg">•</span>
            <span>DESIGNING WHAT'S NEXT</span>
            <span class="text-lg">•</span>
            <span>AI-POWERED DIGITAL TRANSFORMATION</span>
        </div>

        <div class="flex w-1/2 items-center gap-6 shrink-0" aria-hidden="true">
            <span class="text-lg">•</span>
            <span>WEB & MOBILE ENGINEERING</span>
            <span class="text-lg">•</span>
            <span>INTELLIGENT BUSINESS SYSTEMS</span>
            <span class="text-lg">•</span>
            <span>DESIGNING WHAT'S NEXT</span>
            <span class="text-lg">•</span>
            <span>AI-POWERED DIGITAL TRANSFORMAT</span>
        </div>

    </div>
</marquee>


<!-- Top Header (desktop only) -->
<header class="hidden sm:block bg-[#4761FF] text-white overflow-hidden" data-aos="fade-down" data-aos-duration="600">
    <div class="max-w-[85%] mx-auto px-6 sm:px-0">
        <div class="flex flex-col lg:flex-row items-center justify-between py-2 gap-4">

            <!-- Logo-->
            <a href="{{ route('home') }}" class="shrink-0 hover:opacity-90 transition">
                <img src="{{ $siteLogoDesktop }}" alt="Sphere Marketing Solutions"
                     class="h-16 w-16 object-contain rounded-full bg-white/10 ring-2 ring-white/30">
            </a>

            <!-- Contact Info & Socials -->
            <div class="flex flex-wrap items-center justify-center lg:justify-end gap-6 text-sm">

                @if (filled($site[\App\Support\SiteSettings::ADDRESS] ?? null))
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5A2.5 2.5 0 1112 6a2.5 2.5 0 010 5.5z"/>
                        </svg>
                        <span class="font-sans">{{ $site[\App\Support\SiteSettings::ADDRESS] }}</span>
                    </div>
                @endif

                @if (filled($site[\App\Support\SiteSettings::EMAIL] ?? null))
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M2 4h20v16H2V4zm10 8L4 6v12h16V6l-8 6z"/>
                        </svg>
                        <a href="mailto:{{ $site[\App\Support\SiteSettings::EMAIL] }}"
                           class="hover:underline font-sans">{{ $site[\App\Support\SiteSettings::EMAIL] }}</a>
                    </div>
                @endif

                @if (filled($site[\App\Support\SiteSettings::PHONE] ?? null))
                    <div class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path
                                d="M6.62 10.79a15.09 15.09 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V21c0 .55-.45 1-1 1C10.07 22 2 13.93 2 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        <a href="tel:{{ $sitePhoneTel }}"
                           class="hover:underline font-sans">{{ $site[\App\Support\SiteSettings::PHONE] }}</a>
                    </div>
                @endif

                <div class="flex items-center gap-3">
                    @if (filled($site[\App\Support\SiteSettings::FACEBOOK_URL] ?? null))
                        <a href="{{ $site[\App\Support\SiteSettings::FACEBOOK_URL] }}" target="_blank" rel="noopener"
                           class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    @endif

                    @if (filled($site[\App\Support\SiteSettings::TWITTER_URL] ?? null))
                        <a href="{{ $site[\App\Support\SiteSettings::TWITTER_URL] }}" target="_blank" rel="noopener"
                           class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    @endif

                    @if (filled($site[\App\Support\SiteSettings::INSTAGRAM_URL] ?? null))
                        <a href="{{ $site[\App\Support\SiteSettings::INSTAGRAM_URL] }}" target="_blank" rel="noopener"
                           class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    @endif

                    @if (filled($site[\App\Support\SiteSettings::LINKEDIN_URL] ?? null))
                        <a href="{{ $site[\App\Support\SiteSettings::LINKEDIN_URL] }}" target="_blank" rel="noopener"
                           class="size-7.5 rounded-full bg-white text-[#4761FF] flex items-center justify-center hover:bg-gray-200 transition">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    @endif
                </div>

            </div>

        </div>
    </div>
</header>

<!-- Navigation Bar -->
<nav id="navBar" class="bg-white shadow-sm relative z-40" data-aos="fade-down" data-aos-delay="200"
     data-aos-duration="600">
    <div class="max-w-[85%] mx-auto px-6 sm:px-0">

        <!-- Mobile: logo + menu only -->
        <div class="flex sm:hidden items-center justify-between py-3">
            <a href="{{ route('home') }}" class="shrink-0">
                <img src="{{ $siteLogoMobile }}" alt="Sphere Marketing Solutions"
                     class="h-14 w-14 object-contain rounded-full shadow-sm ring-1 ring-slate-100">
            </a>
            <button id="mobileMenuBtn" type="button"
                    class="flex flex-col w-10 h-10 items-center justify-center gap-1.5 border border-gray-200 rounded-lg focus:outline-none"
                    aria-label="Toggle menu">
                <span class="w-5 h-[2px] bg-[#1C2035] transition-all duration-300"></span>
                <span class="w-5 h-[2px] bg-[#1C2035] transition-all duration-300"></span>
                <span class="w-5 h-[2px] bg-[#1C2035] transition-all duration-300"></span>
            </button>
        </div>

        <!-- Desktop Header Container -->
        <div class="hidden sm:flex flex-col lg:flex-row items-center justify-between py-4 gap-4 xl:gap-0">

            <!-- Nav Links List -->
            <ul id="navLinks"
                class="flex flex-wrap items-center justify-start mr-auto gap-4 md:gap-6 xl:gap-8 text-[16px] lg:text-[18px] text-black">

                <li>
                    <a href="{{ route('home') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('home') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Home
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('home') ? 'w-full' : '' }}"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('about') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('about') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        About
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('about') ? 'w-full' : '' }}"></span>
                    </a>
                </li>

                <li class="relative group">
                    <a href="{{ route('services') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('services') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative font-sans">
                        Service
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('services') ? 'w-full' : '' }}"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('prices') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('prices') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Packages
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('prices') ? 'w-full' : '' }}"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('blog.index') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('blog.*') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Blog
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('blog.*') ? 'w-full' : '' }}"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('faqs') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('faqs') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        FAQs
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('faqs') ? 'w-full' : '' }}"></span>
                    </a>
                </li>

                <li class="relative group">
                    <a href="{{ route('our-team') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('our-team') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative font-sans">
                        Our Team
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('our-team') ? 'w-full' : '' }}"></span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('contact') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('contact') ? 'text-[#4761FF]' : '' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Contact
                        <span
                            class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('contact') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
            </ul>

            <div class="shrink-0">
                <a href="tel:+923000000000"
                   class="whitespace-nowrap bg-[#4761FF] hover:bg-indigo-700 text-white text-md font-medium px-6 py-2 rounded-full transition-all duration-300 hover:scale-105 shadow-md">
                    Call Now
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
                <li><a href="{{ route('blog.index') }}"
                       class="block py-2 {{ request()->routeIs('blog.*') ? 'text-[#4761FF]' : 'hover:text-[#4761FF]' }}">Blog</a>
                </li>
                <li><a href="{{ route('faqs') }}" class="block py-2 hover:text-[#4761FF]">FAQs</a></li>
                <li><a href="{{ route('our-team') }}" class="block py-2 hover:text-[#4761FF]">Our Team</a></li>
                <li><a href="{{ route('testimonials') }}" class="block py-2 hover:text-[#4761FF]">Testimonials</a></li>
                <li><a href="{{ route('contact') }}" class="block py-2 hover:text-[#4761FF]">Contact</a></li>
                <li class="pt-3">
                    <a href="tel:+923000000000"
                       class="block text-center bg-[#4761FF] text-white font-medium py-3 rounded-full hover:bg-indigo-700 transition">
                        Call Now
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>
