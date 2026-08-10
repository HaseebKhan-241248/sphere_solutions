
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


<!-- Desktop Header: logo + nav + Call Now -->
<header class="hidden sm:block bg-white text-[#1C2035] border-b border-slate-100 overflow-hidden relative z-40"
        data-aos="fade-down" data-aos-duration="600">
    <div class="max-w-[85%] mx-auto px-6 sm:px-0">
        <div class="flex items-center justify-between py-3 gap-4">

            <a href="{{ route('home') }}" class="shrink-0 hover:opacity-90 transition">
                <img src="{{ $siteLogoDesktop }}" alt="Sphere Marketing Solutions"
                     class="h-16 w-16 object-contain rounded-full shadow-sm ring-1 ring-slate-200">
            </a>

            <ul id="navLinks"
                class="flex flex-wrap items-center justify-center gap-6 md:gap-8 xl:gap-10 text-[15px] lg:text-[17px] text-[#1C2035]">
                <li>
                    <a href="{{ route('home') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('home') ? 'text-[#4761FF] font-semibold' : 'font-medium' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('home') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('about') ? 'text-[#4761FF] font-semibold' : 'font-medium' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        About
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('about') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('services') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('services') ? 'text-[#4761FF] font-semibold' : 'font-medium' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Service
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('services') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('prices') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('prices') ? 'text-[#4761FF] font-semibold' : 'font-medium' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Packages
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('prices') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog.index') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('blog.*') ? 'text-[#4761FF] font-semibold' : 'font-medium' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Blog
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('blog.*') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('faqs') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('faqs') ? 'text-[#4761FF] font-semibold' : 'font-medium' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        FAQs
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('faqs') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('our-team') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('our-team') ? 'text-[#4761FF] font-semibold' : 'font-medium' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Our Team
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('our-team') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('contact') ? 'text-[#4761FF] font-semibold' : 'font-medium' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('contact') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('entrepreneur-signup') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('entrepreneur-signup') ? 'text-[#4761FF] font-semibold' : 'font-medium' }} hover:text-[#4761FF] cursor-pointer transition-all duration-300 relative group font-sans">
                        Join Us
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4761FF] transition-all duration-300 group-hover:w-full {{ request()->routeIs('entrepreneur-signup') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
            </ul>

            <div class="shrink-0">
                <a href="tel:{{ $sitePhoneTel }}"
                   class="whitespace-nowrap bg-[#4761FF] text-white text-md font-semibold px-6 py-2.5 rounded-full shadow-md transition-all duration-300 hover:bg-[#3548d4] hover:scale-105 hover:shadow-[0_10px_25px_rgba(71,97,255,0.45)] active:scale-100">
                    Call Now
                </a>
            </div>

        </div>
    </div>
</header>

<!-- Mobile Navigation -->
<nav id="navBar" class="sm:hidden relative z-40 bg-white shadow-sm border-b border-slate-100">
    <div class="flex items-center justify-between py-3 px-6">
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

    <div id="mobileNavPanel"
         class="hidden absolute left-0 top-full w-full bg-white border-t border-gray-100 shadow-xl z-50 px-6 py-6">
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
            <li><a href="{{ route('contact') }}" class="block py-2 hover:text-[#4761FF]">Contact</a></li>
            <li><a href="{{ route('entrepreneur-signup') }}"
                   class="block py-2 {{ request()->routeIs('entrepreneur-signup') ? 'text-[#4761FF]' : 'hover:text-[#4761FF]' }}">Join Us</a>
            </li>
            <li class="pt-3">
                <a href="tel:{{ $sitePhoneTel }}"
                   class="block text-center bg-[#4761FF] text-white font-medium py-3 rounded-full transition-all duration-300 hover:bg-[#3548d4] hover:shadow-[0_10px_25px_rgba(71,97,255,0.35)]">
                    Call Now
                </a>
            </li>
        </ul>
    </div>
</nav>
