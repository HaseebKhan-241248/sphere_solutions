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
    <title>Features</title>
</head>
<body class="bg-white text-slate-700 font-['Montserrat',sans-serif]">


@include('partials.header')

<section>
    <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

        <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero" class="absolute inset-0 w-full h-full object-cover z-0">

        <div class="absolute inset-0 bg-black/10 z-10"></div>

        <div class="relative z-20">
            <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                Features
            </h1>

            <nav class="flex items-center justify-center space-x-2 text-white text-base font-medium">
                <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>
                <span class="text-slate-300">/</span>
                <a href="#" class="hover:underline transition text-slate-200">Pages</a>
                <span class="text-slate-300">/</span>
                <span class="text-[#4F46E5] font-semibold">Features</span>
            </nav>
        </div>
    </div>
</section>

<section>
    <!-- Why People Choose Us -->
    <div class="py-24 px-4 sm:px-6 lg:px-8">
        <div class="max-w-[85%] mx-auto">

            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-[#4761FF] text-lg tracking-wide block mb-3">
                    Features
                </span>
                <h2 class="text-[#0F172A] text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                    Why People Choose <br class="hidden sm:inline"> Us!
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">

                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-1.png') }}" class="w-16 mb-6">

                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">Award Winning</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-2.png') }}" class="w-16 mb-6">
                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">Professional Staff</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-3.png') }}" class="w-16 mb-6">
                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">Fair Prices</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-4.png') }}" class="w-16 mb-6">
                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">24/7 Support</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="px-4 sm:px-6 lg:px-8 mb-24">
        <div class="max-w-[85%] mx-auto">

            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-[#0F172A] text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
                    More Features
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-1.png') }}" class="w-16 mb-6">

                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">Award Winning</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-2.png') }}" class="w-16 mb-6">
                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">Professional Staff</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-3.png') }}" class="w-16 mb-6">
                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">Fair Prices</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-4.png') }}" class="w-16 mb-6">
                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">24/7 Support</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-1.png') }}" class="w-16 mb-6">

                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">Award Winning</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-2.png') }}" class="w-16 mb-6">
                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">Professional Staff</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

                <!-- Card 7 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-3.png') }}" class="w-16 mb-6">
                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">Fair Prices</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

                <!-- Card 8 -->
                <div class="bg-white rounded-xl shadow-lg border border-slate-100 p-8 hover:shadow-md transition duration-300">
                    <div class="text-[#4F46E5] text-5xl mb-6">
                        <img src="{{ asset('images/icon-4.png') }}" class="w-16 mb-6">
                    </div>
                    <h4 class="text-[#0F172A] text-xl font-bold mb-3">24/7 Support</h4>
                    <p class="text-slate-500 text-sm leading-relaxed">
                        Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam
                    </p>
                </div>

            </div>

        </div>
    </div>
</section>

@include('partials.footer')

</body>
</html>