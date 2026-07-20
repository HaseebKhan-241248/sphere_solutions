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
    <title>404 Error</title>
</head>
<body class="bg-white text-slate-700 font-['Montserrat',sans-serif]">

<section>
    <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

        <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero" class="absolute inset-0 w-full h-full object-cover z-0">

        <div class="absolute inset-0 bg-black/10 z-10"></div>

        <div class="relative z-20">
            <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                404 Error
            </h1>

            <nav class="flex items-center justify-center space-x-2 text-white text-base font-medium">
                <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>
                <span class="text-slate-300">/</span>
                <a href="#" class="hover:underline transition text-slate-200">Pages</a>
                <span class="text-slate-300">/</span>
                <span class="text-[#4F46E5] font-semibold">404 Error</span>
            </nav>
        </div>
    </div>
</section>

<section class="min-h-[80vh] flex items-center justify-center px-4 py-12 md:py-24">
    <div class="max-w-xl w-full text-center flex flex-col items-center">

        <div class="text-[#4761FF] mb-6">
            <svg class="w-20 h-20 md:w-24 md:h-24 stroke-current fill-none" stroke-width="1.5" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"/>
            </svg>
        </div>

        <h1 class="text-[#1C2035] font-extrabold text-7xl md:text-8xl tracking-tight mb-4">
            404
        </h1>

        <h2 class="text-[#1C2035] font-bold text-3xl md:text-4xl mb-6">
            Page Not Found
        </h2>

        <p class="text-slate-500 text-sm md:text-base leading-relaxed max-w-md md:max-w-lg mb-8">
            We're sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to
            use a search?
        </p>

        <a href="#"
           class="inline-block bg-[#4761FF] hover:bg-blue-700 text-white font-semibold px-8 py-3.5 rounded-full transition duration-200 text-base tracking-wide shadow-md">
            Go Back To Home
        </a>

    </div>
</section>
</body>
</html>