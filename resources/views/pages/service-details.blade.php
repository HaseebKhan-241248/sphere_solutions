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
    <title>Services Details</title>
</head>
<body class="bg-white">

@include('partials.header')

<section class="relative">
  <div class="relative h-80 bg-cover bg-center flex items-center justify-center text-center bg-black/30"
       style="background-image: url({{ asset('images/about-hero.jpg') }});">
    <div class="text-white px-4">
      <h1 class="text-4xl md:text-7xl font-bold mb-4">Service Details</h1>
      <p class="text-lg space-x-3">
        <a href="{{ route('home') }}" class="hover:text-[#4761FF]">Home</a>
        <span>/</span>
        <a href="#" class="hover:text-[#4761FF]"> Pages</a>
        <span>/</span>
        <span class="text-[#4761FF]"> Service Details</span>
      </p>
    </div>
  </div>
</section>


<section class="py-16">
  <div class="max-w-[85%] mx-auto grid lg:grid-cols-3 gap-12">

    <div class="lg:col-span-2">

      <img src="{{ asset('images/about-hero.jpg') }}"
           alt="Digital Marketing Services" class="w-full h-105 object-cover rounded-lg mb-8">

      <h2 class="text-3xl md:text-4xl font-bold text-[#20233F] mb-6">Digital Marketing Services</h2>

      <p class="font-sans text-gray-600 leading-8 text-[17px] mb-5">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sagittis luctus augue vitae vulputate.
        Nulla vel venenatis nisi. Fusce convallis, nibh id interdum ullamcorper, libero metus lacinia sapien,
        accumsan auctor erat libero id nulla. Fusce cursus ante tellus, non tempor magna pellentesque eu.
        Quisque egestas ultrices libero, sed vulputate libero tincidunt id. Mauris eleifend nunc ac ligula
        mollis, a semper libero consequat. Vestibulum ac elit vel erat molestie malesuada.
      </p>

      <p class="font-sans text-gray-600 leading-8 text-[17px] mb-10">
        Integer sit amet efficitur massa. Vivamus elementum commodo commodo. Vivamus ac dapibus sem, vitae
        convallis nunc. Mauris nec eleifend mi. Pellentesque in neque ut nisl luctus suscipit non in lectus.
        Aliquam quam nibh, viverra ac turpis a, tristique faucibus lectus. Praesent nunc nunc, tristique at
        sapien sed, accumsan ullamcorper odio.
      </p>

      <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Our Work Process</h3>

      <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] mb-12 divide-y divide-gray-100">
        <div class="flex items-start gap-5 p-6">
          <div class="size-16 text-2xl shrink-0 rounded-full bg-[#F1F3FA] text-[#4761FF] flex items-center justify-center">1</div>
          <div>
            <h4 class="text-lg md:text-2xl font-semibold text-[#20233F] mb-1">Research</h4>
            <p class="text-[#777] text-[15px] md:text-[18px]">Pellentesque in neque ut nisl luctus suscipit non in lectus.</p>
          </div>
        </div>
        <div class="flex items-start gap-5 p-6">
          <div class="size-16 text-2xl shrink-0 rounded-full bg-[#F1F3FA] text-[#4761FF] flex items-center justify-center">2</div>
          <div>
            <h4 class="text-lg md:text-2xl font-semibold text-[#20233F] mb-1">Concept</h4>
            <p class="text-[#777] text-[15px] md:text-[18px]">Pellentesque in neque ut nisl luctus suscipit non in lectus.</p>
          </div>
        </div>
        <div class="flex items-start gap-5 p-6">
          <div class="size-16 text-2xl shrink-0 rounded-full bg-[#F1F3FA] text-[#4761FF] flex items-center justify-center">3</div>
          <div>
            <h4 class="text-lg md:text-2xl font-semibold text-[#20233F] mb-1">Development</h4>
            <p class="text-[#777] text-[15px] md:text-[18px]">Pellentesque in neque ut nisl luctus suscipit non in lectus.</p>
          </div>
        </div>
        <div class="flex items-start gap-5 p-6">
          <div class="size-16 text-2xl shrink-0 rounded-full bg-[#F1F3FA] text-[#4761FF] flex items-center justify-center">4</div>
          <div>
            <h4 class="text-lg md:text-2xl font-semibold text-[#20233F] mb-1">Finalization</h4>
            <p class="text-[#777] text-[15px] md:text-[18px]">Pellentesque in neque ut nisl luctus suscipit non in lectus.</p>
          </div>
        </div>
      </div>

      <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Some Important FAQ's</h3>

      <div class="rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] divide-y divide-gray-100 overflow-hidden">

        <div class="faq-item">
          <button class="faq-toggle w-full flex items-center justify-between p-5 text-left font-medium text-[#555555]">
            <span>Q: What services do you offer in digital marketing?</span>
            <i class="fa-solid fa-chevron-down faq-icon text-[#555555]"></i>
          </button>
          <div class="faq-answer px-5">
            <p class="text-[#777] text-[15px] pb-5">
              We offer SEO, social media management, content marketing, email campaigns, PPC
              advertising, and full-funnel digital strategy tailored to your business goals.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-toggle w-full flex items-center justify-between p-5 text-left font-medium text-[#555555]">
            <span>Q: How long does it take to see results from digital marketing?</span>
            <i class="fa-solid fa-chevron-down faq-icon text-[#555555]"></i>
          </button>
          <div class="faq-answer px-5">
            <p class="text-[#777] text-[15px] pb-5">
              Most clients begin to see measurable traction within 4-8 weeks, though timelines vary
              depending on the channel, competition, and campaign goals.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-toggle w-full flex items-center justify-between p-5 text-left font-medium text-[#555555]">
            <span>Q: What is SEO and why is it important?</span>
            <i class="fa-solid fa-chevron-down faq-icon text-[#555555]"></i>
          </button>
          <div class="faq-answer px-5">
            <p class="text-[#777] text-[15px] pb-5">
              SEO helps your site rank higher in search results, driving organic traffic without
              ongoing ad spend, and building long-term visibility for your brand.
            </p>
          </div>
        </div>

      </div>

    </div>

    <aside class="space-y-8">
      <div class="shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] p-5 rounded-lg">
          <div class="relative ">
            <input type="text" placeholder="Search..." class="w-full h-14 rounded-xl border border-gray-300 px-5 pr-14 text-[17px] outline-none focus:border-[#4761FF]">
            <button class="absolute right-1 top-1 h-12 w-12 rounded-lg text-[#4761FF] flex items-center justify-center">
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
          </div>
      </div>
      <div>
        <h3 class="text-2xl font-bold text-[#20233F] mb-4">Our Services</h3>
        <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-5 space-y-3">
          <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg  hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
            Digital Marketing
            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
          </a>
          <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
            Internet Marketing
            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
          </a>
          <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
            Content Marketing
            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
          </a>
          <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
            Social Marketing
            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
          </a>
          <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
            B2B Marketing
            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
          </a>
          <a href="#" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4761FF] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
            E-mail Marketing
            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
          </a>
        </div>
      </div>

      <div>
        <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-4">Get A Free Quote</h3>
        <form class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-6 space-y-4">
          <input type="text" placeholder="Your Name" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none">
          <input type="email" placeholder="Your Email" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4761FF]">
          <input type="text" placeholder="Your Mobile" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4761FF]">
          <select class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4761FF]">
            <option>Choose A Service</option>
            <option selected>Digital Marketing</option>
            <option>SEO</option>
            <option>Content Marketing</option>
            <option>Social Marketing</option>
          </select>
          <textarea rows="4" placeholder="Message" class="w-full rounded-xl border border-gray-300 px-5 py-3 text-[16px] outline-none focus:border-[#4761FF]"></textarea>
          <button type="button" class="w-full h-14 rounded-xl text-white text-lg bg-linear-to-r from-[#4761FF] to-[#5C6CFF] hover:opacity-90 duration-300">
            Submit Now
          </button>
        </form>
      </div>

      <div class="bg-white shadow-[0_0_15px_5px_rgba(0,0,0,0.1)]  rounded-lg p-8 text-center">
        <h3 class="text-xl md:text-3xl font-semibold text-[#20233F] mb-6">Interested with this service?</h3>
        <a href="#" class="inline-block bg-[#4761FF] hover:bg-indigo-700 text-white font-medium px-8 py-4 rounded-lg transition">
          Let's work together
        </a>
      </div>

    </aside>

  </div>
</section>

@include('partials.footer')

<button id="scrollTopBtn" class="hidden fixed bottom-6 right-6 w-12 h-12 rounded-full bg-[#4761FF] text-white items-center justify-center shadow-lg z-50">
  <i class="fa-solid fa-arrow-up"></i>
</button>

<script>document.querySelectorAll('.faq-item').forEach(item => {
    const toggle = item.querySelector('.faq-toggle');
    const answer = item.querySelector('.faq-answer');
    toggle.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item').forEach(i => {
        i.classList.remove('open');
        i.querySelector('.faq-answer').style.maxHeight = null;
      });
      if (!isOpen) {
        item.classList.add('open');
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    });
  });

  const scrollTopBtn = document.getElementById('scrollTopBtn');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 400) {
      scrollTopBtn.classList.remove('hidden');
    } else {
      scrollTopBtn.classList.add('hidden');
    }
  });
  scrollTopBtn.addEventListener('click', () => window.scrollTo({top: 0, behavior: 'smooth'}));
</script>

</body>
</html>

