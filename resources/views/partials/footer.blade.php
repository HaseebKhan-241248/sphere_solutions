<footer class="bg-[#1C2035] text-white overflow-hidden" data-aos="fade-up" data-aos-offset="50">

    <div class="max-w-[88%] mx-auto py-20">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-14">

            <!-- Column 1: Our Office -->
            <div data-aos="fade-up" data-aos-delay="100">

                <h2 class="text-[25px] font-semibold mb-5">
                    Our Office
                </h2>

                <ul class="space-y-3">

                    <li class="flex items-center gap-4 text-[17px] text-[#B0B9AE]">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Vancouver, BC, Canada</span>
                    </li>

                    <li class="flex items-center gap-4 text-[17px] text-[#B0B9AE]">
                        <i class="fa-solid fa-phone"></i>
                        <a href="tel:+16043137091" class="hover:text-white duration-300">+1 (604) 313-7091</a>
                    </li>

                    <li class="flex items-center gap-4 text-[17px] text-[#B0B9AE]">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:info@spheremarketingsolutions.com" class="hover:text-white duration-300">info@spheremarketingsolutions.com</a>
                    </li>

                </ul>

                <div class="flex gap-4 mt-4">

                    <a href="https://x.com/SpMarkSolutions" target="_blank" rel="noopener"
                       class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300">
                        <i class="fa-brands fa-twitter"></i>
                    </a>

                    <a href="https://www.facebook.com/profile.php?id=61558581241296" target="_blank" rel="noopener"
                       class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="https://www.youtube.com/channel/UCPRpwmlmC9DqVHz1PB6mn1w" target="_blank" rel="noopener"
                       class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300">
                        <i class="fa-brands fa-youtube"></i>
                    </a>

                    <a href="https://www.linkedin.com/in/sm-solutions/" target="_blank" rel="noopener"
                       class="size-9 rounded-full bg-white text-black flex items-center justify-center hover:bg-[#4761FF] hover:text-white duration-300">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>

                </div>

            </div>

            <!-- Column 2: Quick Links -->
            <div data-aos="fade-up" data-aos-delay="200">

                <h2 class="text-[25px] font-semibold mb-5">
                    Quick Links
                </h2>

                <ul class="space-y-2 text-[17px] text-[#B0B9AE]">

                    <li><a href="{{ route('about') }}" class="hover:text-white duration-300"><i class="fa-solid fa-angle-right mr-3"></i>About Us</a></li>

                    <li><a href="{{ route('contact') }}" class="hover:text-white duration-300"><i class="fa-solid fa-angle-right mr-3"></i>Contact Us</a></li>

                    <li><a href="{{ route('services') }}" class="hover:text-white duration-300"><i class="fa-solid fa-angle-right mr-3"></i>Our Services</a></li>

                    <li><a href="{{ route('prices') }}" class="hover:text-white duration-300"><i class="fa-solid fa-angle-right mr-3"></i>Packages</a></li>

                    <li><a href="{{ route('faqs') }}" class="hover:text-white duration-300"><i class="fa-solid fa-angle-right mr-3"></i>FAQs</a></li>

                </ul>

            </div>

            <!-- Column 3: Business Hours -->
            <div data-aos="fade-up" data-aos-delay="300">

                <h2 class="text-[25px] font-semibold mb-5">
                    Business Hours
                </h2>

                <div class="space-y-2">

                    <div>
                        <p class="text-[17px] text-[#B0B9AE]">Monday - Friday</p>
                        <h4 class="text-[18px] font-semibold">09:00 am - 06:00 pm</h4>
                    </div>

                    <div>
                        <p class="text-[17px] text-[#B0B9AE]">Saturday</p>
                        <h4 class="text-[18px] font-semibold">09:00 am - 12:00 pm</h4>
                    </div>

                    <div>
                        <p class="text-[17px] text-[#B0B9AE]">Sunday</p>
                        <h4 class="text-[18px] font-semibold">Closed</h4>
                    </div>

                </div>

            </div>

            <!-- Column 4: Newsletter -->
            <div data-aos="fade-up" data-aos-delay="400">

                <h2 class="text-[25px] font-semibold mb-5">
                    Newsletter
                </h2>

                <p class="text-[17px] text-[#B0B9AE] mb-5">
                    Get updates on our digital marketing services and offers.
                </p>

                <form action="#" method="POST" class="relative">
                    @csrf
                    <input type="email"
                           name="email"
                           placeholder="Your email"
                           class="w-full h-15 rounded-lg border border-gray-500 bg-transparent px-6 text-[20px] placeholder:text-gray-400 focus:outline-none">

                    <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2 bg-white text-black px-6 h-12 rounded-lg cursor-pointer text-[20px] hover:bg-[#4761FF] hover:text-white duration-300">
                        SignUp
                    </button>
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

            <p class="text-[17px] text-gray-300">
                <span class="text-[#B0B9AE]">Sphere Digital Marketing Solutions</span>
            </p>

        </div>

    </div>

</footer>

<script>
    (function () {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileNavPanel = document.getElementById('mobileNavPanel');
        if (mobileMenuBtn && mobileNavPanel) {
            mobileMenuBtn.addEventListener('click', function () {
                mobileNavPanel.classList.toggle('hidden');
                mobileMenuBtn.classList.toggle('active');
            });
        }
    })();
</script>
