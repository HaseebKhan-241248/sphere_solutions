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
    <title>Prices</title>
</head>
<body class="bg-white text-slate-700 font-['Montserrat',sans-serif]">

<section>
    <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

        <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero" class="absolute inset-0 w-full h-full object-cover z-0">

        <div class="absolute inset-0 bg-black/10 z-10"></div>

        <div class="relative z-20">
            <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                FAQs
            </h1>

            <nav class="flex items-center justify-center space-x-2 text-white text-base font-medium">
                <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>
                <span class="text-slate-300">/</span>
                <a href="#" class="hover:underline transition text-slate-200">Pages</a>
                <span class="text-slate-300">/</span>
                <span class="text-[#4F46E5] font-semibold">Prices</span>
            </nav>
        </div>

    </div>
</section>

<section>
    <div class="w-full bg-slate-50/50 py-16 font-sans antialiased text-slate-800">
        <div class="w-[85%] mx-auto max-w-6xl">

            <div class="text-center mb-12">
                <span class="text-[#4761FF] text-lg font-semibold text-base tracking-wide block mb-2">
                    Pricing Plan
                </span>
                <h2 class="text-[#0F172A] text-5xl font-bold tracking-tight">
                    Pricing Plan for Our Services
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 items-stretch">

                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col justify-between overflow-hidden p-6 text-center transition duration-300 hover:shadow-xl">
                    <div>
                        <div class="bg-[#1E293B] rounded-xl p-6 text-left text-white mb-8 relative overflow-hidden">
                            <h3 class="text-lg font-bold tracking-wide mb-3 text-slate-200">Standard</h3>
                            <div class="flex items-baseline font-black">
                                <span class="text-xl text-[#4761FF] font-extrabold mr-1 -translate-y-3">$</span>
                                <span class="text-4xl tracking-tight">29.99</span>
                                <span class="text-sm text-[#4761FF] font-medium ml-2">/ Month</span>
                            </div>
                        </div>

                        <div class="space-y-4 px-2 mb-8">
                            <div class="flex items-center justify-between text-[14px] text-slate-600">
                                <span>HTML5 & CSS3</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>Bootstrap v5</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>Responsive Layout</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-sm text-slate-600 pt-3 border-t border-slate-100">
                                <span>Cross-browser Support</span>
                                <svg class="w-3 h-3 text-rose-500 stroke-current shrink-0" fill="none" stroke-width="3"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-sm text-slate-600 pt-3 border-t border-slate-100">
                                <span>Remove Author's Credit</span>
                                <svg class="w-3 h-3 text-rose-500 stroke-current shrink-0" fill="none" stroke-width="3"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-sm text-slate-600 pt-3 border-t border-slate-100">
                                <span>PHP & Ajax Contact Form</span>
                                <svg class="w-3 h-3 text-rose-500 stroke-current shrink-0" fill="none" stroke-width="3"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-sm text-slate-600 pt-3 border-t border-slate-100">
                                <span>6 Months Free Support</span>
                                <svg class="w-3 h-3 text-rose-500 stroke-current shrink-0" fill="none" stroke-width="3"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="px-2 pt-2 text-left">
                        <button class="w-fit bg-[#1E293B] hover:bg-slate-900 text-white font-bold px-7 py-3 rounded-full text-sm tracking-wider shadow-sm transition duration-200">
                            Get Started
                        </button>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col justify-between overflow-hidden p-6 text-center transition duration-300 hover:shadow-xl">
                    <div>

                        <div class="bg-[#4761FF] rounded-xl p-6 text-left text-white mb-8 relative overflow-hidden shadow-md">
                            <h3 class="text-lg font-bold tracking-wide mb-3 text-blue-100">Professional</h3>
                            <div class="flex items-baseline font-black">
                                <span class="text-2xl text-black font-extrabold mr-1 -translate-y-3">$</span>
                                <span class="text-4xl tracking-tight">49.99</span>
                                <span class="text-sm text-black font-medium ml-2">/ Month</span>
                            </div>
                        </div>

                        <div class="space-y-4 px-2 mb-8">
                            <div class="flex items-center justify-between text-[14px] text-slate-600">
                                <span>HTML5 & CSS3</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>Bootstrap v5</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>Responsive Layout</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>Cross-browser Support</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>Remove Author's Credit</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-sm text-slate-600 pt-3 border-t border-slate-100">
                                <span>PHP & Ajax Contact Form</span>
                                <svg class="w-3 h-3 text-rose-500 stroke-current shrink-0" fill="none" stroke-width="3"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-sm text-slate-600 pt-3 border-t border-slate-100">
                                <span>6 Months Free Support</span>
                                <svg class="w-3 h-3 text-rose-500 stroke-current shrink-0" fill="none" stroke-width="3"
                                     viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="px-2 pt-2 text-left">
                        <button class="w-fit bg-[#4761FF] hover:bg-blue-700 text-white font-bold px-7 py-3 rounded-full text-sm tracking-wider shadow-md transition duration-200">
                            Get Started
                        </button>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-slate-100 flex flex-col justify-between overflow-hidden p-6 text-center transition duration-300 hover:shadow-xl">
                    <div>
                        <div class="bg-[#1E293B] rounded-xl p-6 text-left text-white mb-8 relative overflow-hidden">
                            <h3 class="text-lg font-bold tracking-wide mb-3 text-slate-200">Ultimate</h3>
                            <div class="flex items-baseline font-black">
                                <span class="text-2xl text-[#4761FF] font-extrabold mr-1 -translate-y-3">$</span>
                                <span class="text-4xl tracking-tight">79.99</span>
                                <span class="text-sm text-[#4761FF] font-medium ml-2">/ Month</span>
                            </div>
                        </div>

                        <div class="space-y-4 px-2 mb-8">
                            <div class="flex items-center justify-between text-[14px] text-slate-600">
                                <span>HTML5 & CSS3</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>Bootstrap v5</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>Responsive Layout</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>Cross-browser Support</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>Remove Author's Credit</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>PHP & Ajax Contact Form</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                            <div class="flex items-center justify-between text-[14px] text-slate-600 pt-3 border-t border-slate-100">
                                <span>6 Months Free Support</span>
                                <svg class="w-4 h-4 text-emerald-500 stroke-current shrink-0" fill="none"
                                     stroke-width="3" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="px-2 pt-2 text-left">
                        <button class="w-fit bg-[#1E293B] hover:bg-slate-900 text-white font-semibold px-7 py-3 rounded-full text-sm tracking-wider shadow-sm transition duration-200">
                            Get Started
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


</body>
</html>