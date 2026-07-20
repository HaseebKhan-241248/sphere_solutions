<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Quote</title>
</head>
<body class="bg-white text-slate-700 font-['Montserrat',sans-serif]">

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

<section>
    <div class="w-full px-4 bg-white py-12 md:py-20 font-sans antialiased text-slate-800">
        <div class="w-[90%] md:w-[85%] mx-auto max-w-6xl">

            <div class="flex flex-col lg:flex-row items-stretch justify-between gap-12 lg:gap-16">

                <!-- LEFT COLUMN -->
                <div class="w-full lg:w-[50%] flex flex-col justify-between py-2 gap-8 lg:gap-0">
                    <div class="space-y-6">
                        <div>
                            <span class="text-[#4761FF] font-semibold text-xl tracking-wide block mb-2">Get A Quote</span>
                            <h2 class="text-[#1C2035] font-bold text-3xl md:text-5xl leading-[1.15]">
                                Need Our Expert Help?<br>We're Here!
                            </h2>
                        </div>

                        <div class="space-y-6 text-slate-500 text-[16px]">
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                                Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                                Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                        </div>
                    </div>

                    <div class="flex items-center justify-start mt-auto">
                        <div class="inline-flex items-center border border-[#4761FF] rounded-lg overflow-hidden h-14 bg-white shrink-0">
                            <div class="bg-[#4761FF] h-full w-14 flex items-center justify-center text-white shrink-0">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                            </div>

                            <span class="px-6 text-[#4761FF] font-semibold text-base sm:text-lg tracking-wide bg-white h-full flex items-center whitespace-nowrap">
                                +012 345 6789
                            </span>
                        </div>
                    </div>
                </div>

                <!-- RIGHT COLUMN (FORM) -->
                <div class="w-full lg:w-[50%] bg-white flex flex-col justify-between">
                    <div>
                        <h3 class="text-[#0F172A] text-3xl font-bold tracking-tight mb-8">Get A Free Quote</h3>

                        <form action="#" method="POST" class="space-y-5">
                            <div class="flex flex-col lg:flex-row gap-5">
                                <div class="w-full lg:w-1/2">
                                    <input type="text" name="name" placeholder="Your Name"
                                           class="w-full border border-slate-300 rounded-lg px-4 py-4 placeholder-slate-600 text-sm focus:outline-none focus:border-[#4761FF] transition duration-200">
                                </div>
                                <div class="w-full lg:w-1/2">
                                    <input type="email" name="email" placeholder="Your Email"
                                           class="w-full border border-slate-300 rounded-lg px-4 py-4 placeholder-slate-600 text-sm focus:outline-none focus:border-[#4761FF] transition duration-200">
                                </div>
                            </div>

                            <div class="flex flex-col lg:flex-row gap-5">
                                <div class="w-full lg:w-1/2">
                                    <input type="text" name="mobile" placeholder="Your Mobile"
                                           class="w-full border border-slate-300 rounded-lg px-4 py-4 placeholder-slate-600 text-sm focus:outline-none focus:border-[#4761FF] transition duration-200">
                                </div>
                                <div class="w-full lg:w-1/2 relative">
                                    <select name="service"
                                            class="w-full border border-slate-300 rounded-lg px-4 py-4 text-sm focus:outline-none focus:border-[#4761FF] transition duration-200 text-slate-600 appearance-none cursor-pointer pr-10">
                                        <option value="digital">Digital Marketing</option>
                                        <option value="seo">SEO Optimization</option>
                                        <option value="web">Web Development</option>
                                    </select>
                                </div>
                            </div>

                            <div class="w-full">
                                <textarea name="message" rows="5" placeholder="Message"
                                          class="w-full border border-slate-300 rounded-lg px-4 py-4 placeholder-slate-600 text-sm focus:outline-none focus:border-[#4761FF] transition duration-200 resize-none"></textarea>
                            </div>

                            <div class="pt-2">
                                <button type="submit"
                                        class="w-full bg-[#4761FF] hover:bg-blue-700 text-white font-bold py-4 rounded-lg transition duration-200 text-base tracking-wide shadow-md">
                                    Submit Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
</body>
</html>