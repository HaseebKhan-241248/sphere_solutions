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
    <title>FAQs</title>
</head>
<body class="bg-white text-slate-700 font-['Montserrat',sans-serif]">


@include('partials.header')

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
                <span class="text-[#4F46E5] font-semibold">FAQs</span>
            </nav>
        </div>

    </div>
</section>


<section class="py-20">
    <div class="w-[85%] mx-auto max-w-4xl">

        <div class="text-center mb-12">
                <span class="text-[#4761FF] font-semibold text-base tracking-wide block mb-2">
                    General FAQs
                </span>
            <h2 class="text-[#0F172A] text-4xl font-extrabold tracking-tight">
                Frequently Asked Questions
            </h2>
        </div>

        <div class="bg-white rounded-xl shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-slate-100 p-6 mb-10 w-full max-w-4xl mx-auto">

            <div class="border border-slate-200 rounded-lg flex items-center overflow-hidden h-14 bg-white focus-within:border-[#4761FF]/50 transition duration-200">

                <input type="text" placeholder="Search..."
                       class="w-full bg-transparent px-5 text-slate-700 focus:outline-none placeholder-slate-400 text-sm h-full">

                <button class="bg-[#4761FF] hover:bg-blue-700 text-white w-16 h-full flex items-center justify-center transition duration-200 shrink-0 focus:outline-none">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                    </svg>
                </button>

            </div>
        </div>

        <div class="w-full faq-wrapper">

            <div class="faq-item bg-white border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                <button class="faq-btn w-full flex items-center justify-between p-5 text-left text-slate-800 font-bold text-sm sm:text-base focus:outline-none">
                    <span>1. What sort of services do we offer?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-all duration-300 shrink-0"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 pb-5 pt-1 text-slate-500 text-sm leading-relaxed border-t border-slate-100/30">
                        We are a software development and digital marketing agency providing all related solutions. We can develop new software, modify existing systems, or resolve problems in products you already have.
                    </div>
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                <button class="faq-btn w-full flex items-center justify-between p-5 text-left text-slate-800 font-bold text-sm sm:text-base focus:outline-none">
                    <span>2. Which industries do we offer work for?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-all duration-300 shrink-0"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 pb-5 pt-1 text-slate-500 text-sm leading-relaxed border-t border-slate-100/30">
                        We serve companies and individuals across hospitality, communications, mobile technologies, real estate, ecommerce, mobile apps, HR software, web portals, enterprise applications, and more.
                    </div>
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                <button class="faq-btn w-full flex items-center justify-between p-5 text-left text-slate-800 font-bold text-sm sm:text-base focus:outline-none">
                    <span>3. What technologies do we work on?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-all duration-300 shrink-0"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 pb-5 pt-1 text-slate-500 text-sm leading-relaxed border-t border-slate-100/30">
                        We use frontend, backend, and mobile technologies based on customer needs — including Laravel, JavaScript, Node.js, Vue.js, React, WordPress, Shopify, and more.
                    </div>
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                <button class="faq-btn w-full flex items-center justify-between p-5 text-left text-slate-800 font-bold text-sm sm:text-base focus:outline-none">
                    <span>4. What details do I need to provide?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-all duration-300 shrink-0"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 pb-5 pt-1 text-slate-500 text-sm leading-relaxed border-t border-slate-100/30">
                        Share the project scope, any deadlines, and the challenges you want to solve with the product or campaign you want to develop.
                    </div>
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                <button class="faq-btn w-full flex items-center justify-between p-5 text-left text-slate-800 font-bold text-sm sm:text-base focus:outline-none">
                    <span>5. Do we sign an NDA to ensure your data privacy?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-all duration-300 shrink-0"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 pb-5 pt-1 text-slate-500 text-sm leading-relaxed border-t border-slate-100/30">
                        Yes. Keeping your data private is a priority. Our NDA and confidentiality agreements protect your intellectual property before and after project completion.
                    </div>
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                <button class="faq-btn w-full flex items-center justify-between p-5 text-left text-slate-800 font-bold text-sm sm:text-base focus:outline-none">
                    <span>6. What is our stance regarding intellectual property?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-all duration-300 shrink-0"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 pb-5 pt-1 text-slate-500 text-sm leading-relaxed border-t border-slate-100/30">
                        Customers are the ultimate owners of the products we develop. Intellectual rights for the product and idea remain with you, clearly stated in our contract.
                    </div>
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                <button class="faq-btn w-full flex items-center justify-between p-5 text-left text-slate-800 font-bold text-sm sm:text-base focus:outline-none">
                    <span>7. Do I get any support for the product developed?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-all duration-300 shrink-0"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 pb-5 pt-1 text-slate-500 text-sm leading-relaxed border-t border-slate-100/30">
                        Yes. You can stay in touch with our representative about the product we developed. We support efficiency, new features, and ongoing changes.
                    </div>
                </div>
            </div>

            <div class="faq-item bg-white border border-slate-200 rounded-lg overflow-hidden transition-all duration-300">
                <button class="faq-btn w-full flex items-center justify-between p-5 text-left text-slate-800 font-bold text-sm sm:text-base focus:outline-none">
                    <span>8. How much time will it take for the completion of my project?</span>
                    <svg class="faq-icon w-5 h-5 text-slate-400 transform transition-all duration-300 shrink-0"
                         fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                    <div class="px-5 pb-5 pt-1 text-slate-500 text-sm leading-relaxed border-t border-slate-100/30">
                        Timelines depend on project type and complexity — from weeks to months. We provide an estimate after reviewing your project details.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="w-[85%] mx-auto max-w-4xl bg-white rounded-xl shadow-[0_25px_60px_rgba(0,0,0,0.1)] border border-slate-100/80 p-8 sm:p-10 text-center mb-24">
    <h3 class="text-[#0F172A] text-2xl sm:text-3xl font-extrabold tracking-tight mb-6">Have More Questions?</h3>
    <a href="{{ route('contact') }}"
       class="inline-block bg-[#4761FF] hover:bg-blue-700 text-white px-8 py-3.5 rounded-full shadow-md hover:shadow-lg transition duration-200 text-sm sm:text-base">
            </a>
</div>


<script>
    document.querySelectorAll('.faq-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.parentElement;
            const content = item.querySelector('.faq-content');
            const icon = btn.querySelector('.faq-icon');

            // Close others loop if matching active status pattern //
            document.querySelectorAll('.faq-item').forEach(el => {
                if (el !== item) {
                    el.classList.remove('bg-[#EEF2FF]', 'border-[#4761FF]/30');
                    el.querySelector('.faq-btn').classList.remove('text-[#4761FF]');
                    el.querySelector('.faq-content').style.maxHeight = '0px';
                    el.querySelector('.faq-icon').classList.remove('rotate-180', 'text-[#4761FF]');
                }
            });

            // Toggle Active State Element //
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0px';
                item.classList.remove('bg-[#EEF2FF]', 'border-[#4761FF]/30');
                btn.classList.remove('text-[#4761FF]');

                icon.style.transform = 'rotate(0deg)';
                icon.classList.remove('text-[#4761FF]');
            } else {
                content.style.maxHeight = content.scrollHeight + 'px';
                item.classList.add('bg-[#EEF2FF]', 'border-[#4761FF]/30');
                btn.classList.add('text-[#4761FF]');

                icon.style.transform = 'rotate(180deg)';
                icon.classList.add('text-[#4761FF]');
            }
        });
    });
</script>

@include('partials.footer')

</body>
</html>