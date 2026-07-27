<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Sphere Marketing Solutions – Digital Marketing</title>
</head>
<body>
@include('partials.header')
@yield('content')
@include('partials.footer')
<button id="scrollTopBtn" class="hidden fixed bottom-6 right-6 w-12 h-12 rounded-full bg-[#4761FF] text-white items-center justify-center shadow-lg z-50">
    <i class="fa-solid fa-arrow-up"></i>
</button>
</body>
</html>
