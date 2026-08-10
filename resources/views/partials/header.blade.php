<!-- Desktop Header: logo + nav + Contact Us -->
<header class="hidden sm:block bg-white text-[#0F172A] border-b border-slate-100 overflow-hidden relative z-40"
        data-aos="fade-down" data-aos-duration="600">
    <div class="max-w-[85%] mx-auto px-6 sm:px-0">
        <div class="flex items-center justify-between py-3 gap-4">

            <a href="{{ route('home') }}" class="shrink-0 hover:opacity-90 transition">
                <img src="{{ $siteLogoDesktop }}" alt="Sphere Marketing Solutions"
                     class="h-16 w-16 object-contain rounded-full ring-1 ring-slate-200">
            </a>

            <ul id="navLinks"
                class="flex flex-wrap items-center justify-center gap-6 md:gap-8 xl:gap-10 text-[15px] lg:text-[17px] text-[#0F172A]">
                <li>
                    <a href="{{ route('home') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('home') ? 'text-[#4870F8] font-semibold' : 'font-medium' }} hover:text-[#4870F8] cursor-pointer transition-all duration-300 relative group font-sans">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4870F8] transition-all duration-300 group-hover:w-full {{ request()->routeIs('home') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('about') ? 'text-[#4870F8] font-semibold' : 'font-medium' }} hover:text-[#4870F8] cursor-pointer transition-all duration-300 relative group font-sans">
                        About
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4870F8] transition-all duration-300 group-hover:w-full {{ request()->routeIs('about') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('services') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('services') ? 'text-[#4870F8] font-semibold' : 'font-medium' }} hover:text-[#4870F8] cursor-pointer transition-all duration-300 relative group font-sans">
                        Services
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4870F8] transition-all duration-300 group-hover:w-full {{ request()->routeIs('services') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('prices') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('prices') ? 'text-[#4870F8] font-semibold' : 'font-medium' }} hover:text-[#4870F8] cursor-pointer transition-all duration-300 relative group font-sans">
                        Packages
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4870F8] transition-all duration-300 group-hover:w-full {{ request()->routeIs('prices') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('blog.index') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('blog.*') ? 'text-[#4870F8] font-semibold' : 'font-medium' }} hover:text-[#4870F8] cursor-pointer transition-all duration-300 relative group font-sans">
                        Blog
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4870F8] transition-all duration-300 group-hover:w-full {{ request()->routeIs('blog.*') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('our-team') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('our-team') ? 'text-[#4870F8] font-semibold' : 'font-medium' }} hover:text-[#4870F8] cursor-pointer transition-all duration-300 relative group font-sans">
                        Team Members
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4870F8] transition-all duration-300 group-hover:w-full {{ request()->routeIs('our-team') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('contact') ? 'text-[#4870F8] font-semibold' : 'font-medium' }} hover:text-[#4870F8] cursor-pointer transition-all duration-300 relative group font-sans">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4870F8] transition-all duration-300 group-hover:w-full {{ request()->routeIs('contact') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('entrepreneur-signup') }}"
                       class="nav-link flex items-center gap-1 {{ request()->routeIs('entrepreneur-signup') ? 'text-[#4870F8] font-semibold' : 'font-medium' }} hover:text-[#4870F8] cursor-pointer transition-all duration-300 relative group font-sans">
                        Join Us
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-[#4870F8] transition-all duration-300 group-hover:w-full {{ request()->routeIs('entrepreneur-signup') ? 'w-full' : '' }}"></span>
                    </a>
                </li>
            </ul>

            <div class="shrink-0">
                <a href="{{ route('contact') }}"
                   class="whitespace-nowrap bg-[#4870F8] text-white text-md font-semibold px-6 py-2.5 rounded-full transition-all duration-300 hover:bg-[#3A5CE0] active:scale-100">
                    Contact Us
                </a>
            </div>

        </div>
    </div>
</header>

<!-- Mobile Navigation -->
<nav id="navBar" class="sm:hidden relative z-40 bg-white border-b border-slate-100">
    <div class="flex items-center justify-between py-3 px-6">
        <a href="{{ route('home') }}" class="shrink-0">
            <img src="{{ $siteLogoMobile }}" alt="Sphere Marketing Solutions"
                 class="h-14 w-14 object-contain rounded-full ring-1 ring-slate-100">
        </a>
        <button id="mobileMenuBtn" type="button"
                class="flex flex-col w-10 h-10 items-center justify-center gap-1.5 border border-gray-200 rounded-lg focus:outline-none"
                aria-label="Toggle menu">
            <span class="w-5 h-[2px] bg-[#0F172A] transition-all duration-300"></span>
            <span class="w-5 h-[2px] bg-[#0F172A] transition-all duration-300"></span>
            <span class="w-5 h-[2px] bg-[#0F172A] transition-all duration-300"></span>
        </button>
    </div>

    <div id="mobileNavPanel"
         class="hidden absolute left-0 top-full w-full bg-white border-t border-gray-100 z-50 px-6 py-6">
        <ul class="flex flex-col gap-3 text-[17px] text-black font-medium">
            <li><a href="{{ route('home') }}"
                   class="block py-2 {{ request()->routeIs('home') ? 'text-[#4870F8]' : 'hover:text-[#4870F8]' }}">Home</a>
            </li>
            <li><a href="{{ route('about') }}" class="block py-2 hover:text-[#4870F8]">About</a></li>
            <li><a href="{{ route('services') }}" class="block py-2 hover:text-[#4870F8]">Services</a></li>
            <li><a href="{{ route('prices') }}" class="block py-2 hover:text-[#4870F8]">Packages</a></li>
            <li><a href="{{ route('blog.index') }}"
                   class="block py-2 {{ request()->routeIs('blog.*') ? 'text-[#4870F8]' : 'hover:text-[#4870F8]' }}">Blog</a>
            </li>
            <li><a href="{{ route('our-team') }}"
                   class="block py-2 {{ request()->routeIs('our-team') ? 'text-[#4870F8]' : 'hover:text-[#4870F8]' }}">Team Members</a>
            </li>
            <li><a href="{{ route('faqs') }}" class="block py-2 hover:text-[#4870F8]">FAQs</a></li>
            <li><a href="{{ route('contact') }}" class="block py-2 hover:text-[#4870F8]">Contact</a></li>
            <li><a href="{{ route('entrepreneur-signup') }}"
                   class="block py-2 {{ request()->routeIs('entrepreneur-signup') ? 'text-[#4870F8]' : 'hover:text-[#4870F8]' }}">Join Us</a>
            </li>
            <li class="pt-3">
                <a href="{{ route('contact') }}"
                   class="block text-center bg-[#4870F8] text-white font-medium py-3 rounded-full transition-all duration-300 hover:bg-[#3A5CE0]">
                    Contact Us
                </a>
            </li>
        </ul>
    </div>
</nav>
