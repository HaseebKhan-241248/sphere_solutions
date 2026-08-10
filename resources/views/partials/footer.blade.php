<footer class="bg-[#1C2035] text-white overflow-hidden" data-aos="fade-up" data-aos-offset="50">

    <div class="max-w-[85%] mx-auto py-20">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-14">

            <!-- Column 1: Our Office -->
            <div data-aos="fade-up" data-aos-delay="100">

                <h2 class="text-[22px] font-semibold mb-5">
                    Our Office
                </h2>

                <ul class="space-y-3">

                    @if (filled($site[\App\Support\SiteSettings::ADDRESS] ?? null))
                        <li class="flex items-center gap-4 text-[15px] text-[#B0B9AE]">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>{{ $site[\App\Support\SiteSettings::ADDRESS] }}</span>
                        </li>
                    @endif

                    @if (filled($site[\App\Support\SiteSettings::PHONE] ?? null))
                        <li class="flex items-center gap-4 text-[15px] text-[#B0B9AE]">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:{{ $sitePhoneTel }}" class="hover:text-white duration-300">{{ $site[\App\Support\SiteSettings::PHONE] }}</a>
                        </li>
                    @endif

                    @if (filled($site[\App\Support\SiteSettings::EMAIL] ?? null))
                        <li class="flex items-center gap-4 text-[15px] text-[#B0B9AE]">
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:{{ $site[\App\Support\SiteSettings::EMAIL] }}" class="flex-wrap hover:text-white duration-300 truncate">{{ $site[\App\Support\SiteSettings::EMAIL] }}</a>
                        </li>
                    @endif

                </ul>

                <div class="flex gap-2 mt-4">

                    @if (filled($site[\App\Support\SiteSettings::TWITTER_URL] ?? null))
                        <a href="{{ $site[\App\Support\SiteSettings::TWITTER_URL] }}" target="_blank" rel="noopener" class="size-9 rounded-full bg-white text-black flex items-center justify-center">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    @endif

                    @if (filled($site[\App\Support\SiteSettings::FACEBOOK_URL] ?? null))
                        <a href="{{ $site[\App\Support\SiteSettings::FACEBOOK_URL] }}" target="_blank" rel="noopener" class="size-9 rounded-full bg-white text-black flex items-center justify-center">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                    @endif

                    @if (filled($site[\App\Support\SiteSettings::INSTAGRAM_URL] ?? null))
                        <a href="{{ $site[\App\Support\SiteSettings::INSTAGRAM_URL] }}" target="_blank" rel="noopener" class="size-9 rounded-full bg-white text-black flex items-center justify-center">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    @endif

                    @if (filled($site[\App\Support\SiteSettings::LINKEDIN_URL] ?? null))
                        <a href="{{ $site[\App\Support\SiteSettings::LINKEDIN_URL] }}" target="_blank" rel="noopener" class="size-9 rounded-full bg-white text-black flex items-center justify-center">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    @endif

                </div>

            </div>

            <!-- Column 2: Quick Links -->
            <div data-aos="fade-up" data-aos-delay="200">

                <h2 class="text-[22px] font-semibold mb-5">
                    Quick Links
                </h2>

                <ul class="space-y-2 text-[15px] text-[#B0B9AE]">
                    <li>
                        <a href="{{ route('terms-conditions') }}" class="inline-block hover:text-white hover:scale-110 transform transition-all duration-300 ease-in-out">
                            <i class="fa-solid fa-angle-right mr-3"></i>Terms & Conditions
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" class="inline-block hover:text-white hover:scale-110 transform transition-all duration-300 ease-in-out">
                            <i class="fa-solid fa-angle-right mr-3"></i>Contact Us
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('privacy-policy') }}" class="inline-block hover:text-white hover:scale-110 transform transition-all duration-300 ease-in-out">
                            <i class="fa-solid fa-angle-right mr-3"></i>Privacy Policy
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('refund-policy') }}" class="inline-block hover:text-white hover:scale-110 transform transition-all duration-300 ease-in-out">
                            <i class="fa-solid fa-angle-right mr-3"></i>Refund Policy
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('faqs') }}" class="inline-block hover:text-white hover:scale-110 transform transition-all duration-300 ease-in-out">
                            <i class="fa-solid fa-angle-right mr-3"></i>FAQs
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('blog.index') }}" class="inline-block hover:text-white hover:scale-110 transform transition-all duration-300 ease-in-out">
                            <i class="fa-solid fa-angle-right mr-3"></i>Blog
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('entrepreneur-signup') }}" class="inline-block hover:text-white hover:scale-110 transform transition-all duration-300 ease-in-out">
                            <i class="fa-solid fa-angle-right mr-3"></i>Entrepreneur Network
                        </a>
                    </li>
                </ul>

            </div>

            <!-- Column 3: Business Hours -->
            <div data-aos="fade-up" data-aos-delay="300">

                <h2 class="text-[22px] font-semibold mb-5">
                    Business Hours
                </h2>

                <div class="space-y-2">

                    <div>
                        <p class="text-[15px] font-sans text-[#B0B9AE]">Monday - Friday</p>
                        <h4 class="text-[14px] font-semibold">09:00 am - 06:00 pm</h4>
                    </div>

                    <div>
                        <p class="text-[15px] font-sans text-[#B0B9AE]">Saturday</p>
                        <h4 class="text-[14px] font-semibold">09:00 am - 12:00 pm</h4>
                    </div>

                    <div>
                        <p class="text-[15px] font-sans text-[#B0B9AE]">Sunday</p>
                        <h4 class="text-[14px] font-semibold">Closed</h4>
                    </div>

                </div>

            </div>

            <!-- Column 4: Newsletter -->
            <div data-aos="fade-up" data-aos-delay="400">

                <h2 class="text-[22px] font-semibold mb-5">
                    Newsletter
                </h2>

                <p class="text-[15px] font-sans text-[#B0B9AE] mb-5">
                    Get updates on our digital marketing services and offers.
                </p>

                <form action="{{ route('newsletter.store') }}" method="POST" class="w-full max-w-md" data-newsletter-form>
                    @csrf

                    <div
                        data-newsletter-success
                        class="hidden mb-3 rounded-lg border border-emerald-400/40 bg-emerald-500/10 px-3 py-2 text-sm text-emerald-300"
                    ></div>
                    <div
                        data-newsletter-error
                        class="hidden mb-3 rounded-lg border border-red-400/40 bg-red-500/10 px-3 py-2 text-sm text-red-300"
                    ></div>

                    <div class="relative max-w-lg">
                        <input
                            type="email"
                            name="email"
                            data-field="email"
                            placeholder="Your email"
                            autocomplete="email"
                            class="w-full h-15 rounded-lg border border-white bg-transparent px-6 pr-28 text-[15px] placeholder:text-[#656E77] focus:outline-none"
                        >

                        <button
                            type="submit"
                            data-newsletter-submit
                            class="absolute right-2 top-1/2 -translate-y-1/2 bg-white text-[#1C2035] px-4 h-10 rounded-lg text-[15px] disabled:opacity-70"
                        >
                            <span data-submit-label>SignUp</span>
                            <span data-submit-loading class="hidden">...</span>
                        </button>
                    </div>

                    <p data-error-for="email" class="hidden mt-2 text-sm text-red-300"></p>
                </form>

            </div>

        </div>

    </div>

    <!-- Copyright Bottom Bar -->
    <div class="bg-black" data-aos="fade-up" data-aos-delay="500">

        <div class="max-w-[88%] mx-auto py-7 flex flex-col md:flex-row items-center justify-between gap-5">

            <p class="text-[17px] text-gray-300">
                © <span class="font-semibold text-white">Sphere Marketing Solutions</span>,<span class="text-[#B0B9AE]"> All Right Reserved.</span>
            </p>

            

        </div>

    </div>

</footer>

