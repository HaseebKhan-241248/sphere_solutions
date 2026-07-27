@extends('layout.app')

@section('content')

<section class="relative h-screen overflow-hidden">

  <div class="hero-slide active absolute inset-0 bg-cover bg-center"
       style="background-image: url({{ asset('images/about-hero.jpg') }});">

    <div class="relative max-w-7xl mx-auto h-full px-6 flex items-center">

      <div class="max-w-2xl text-white">

        <p class="text-xl md:text-2xl mb-5">
          We Are <span class="font-bold">Experts</span>
        </p>

        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-8">
          Transform Your <br>
          Digital Presence
        </h1>

        <a href="{{ route('contact') }}"
           class="inline-block bg-[#4761FF] hover:bg-blue-700 px-10 py-4 rounded-full text-lg font-semibold transition">
          Free Consultation
        </a>

      </div>

    </div>

  </div>

  <div class="hero-slide absolute inset-0 bg-cover bg-center hidden" style="background-image: url({{ asset('images/carousel-2.jpg') }});">

    <div class="relative max-w-7xl mx-auto h-full px-6 flex items-center justify-end">

      <div class="max-w-2xl text-white text-right">

        <p class="text-xl md:text-2xl mb-5">
          Sphere Marketing Solutions
        </p>

        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-8">
          Web, SEO &amp; <br>
          Digital Growth
        </h1>

        <a href="{{ route('services') }}"
           class="inline-block bg-[#4761FF] hover:bg-blue-700 px-10 py-4 rounded-full text-lg font-semibold transition">
          Our Services
        </a>

      </div>

    </div>

  </div>

  <button id="prevBtn" class="absolute left-6 top-1/2 -translate-y-1/2 w-16 h-16 rounded-full bg-[#4761FF]/90 hover:bg-[#4761FF] flex items-center justify-center text-white z-20">

    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round"
            d="M15 19l-7-7 7-7"/>
    </svg>

  </button>

  <button id="nextBtn"
          class="absolute right-6 top-1/2 -translate-y-1/2 w-16 h-16 rounded-full bg-[#4761FF]/90 hover:bg-[#4761FF] flex items-center justify-center text-white z-20">

    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none"
         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round"
            d="M9 5l7 7-7 7"/>
    </svg>

  </button>

</section>

<section class="py-16">
  <div class="max-w-[90%] mx-auto bg-[#F5F5F5]">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0.5 shadow-[0_0_15px_5px_rgba(0,0,0,0.1)] rounded-[5px]">

      <div class="p-10 bg-white">
        <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center mb-6">
          <img src="{{ asset('images/icon-1.png') }}">
        </div>

        <h3 class="text-2xl font-semibold text-gray-900 mb-4">
          Web Development
        </h3>

        <p class="text-[#555555] leading-8 text-[18px]">
          Visually appealing, functionally robust websites built for your business goals.
        </p>
      </div>

      <div class="p-10 bg-white">
        <div class="w-16 h-16 flex items-center justify-center mb-6 bg-[#F1F3FA] rounded-full">
          <img src="{{ asset('images/icon-2.png') }}">
        </div>

        <h3 class="text-2xl font-semibold text-gray-900 mb-4">
          Digital Marketing
        </h3>

        <p class="text-[#555555] leading-8 text-[18px]">
          Social ads, SEO, and campaigns that reach your audience and drive conversions.
        </p>
      </div>

      <div class="p-10 bg-white ">
        <div class="w-16 h-16 flex items-center justify-center mb-6 bg-[#F1F3FA] rounded-full">
          <img src="{{ asset('images/icon-3.png') }}">
        </div>

        <h3 class="text-2xl font-semibold text-gray-900 mb-4">
          Creative Content
        </h3>

        <p class="text-[#555555] leading-8 text-[18px]">
          Video editing and graphic design that elevate your brand image and content.
        </p>
      </div>

      <div class="p-10 bg-white">
        <div class="w-16 h-16 flex items-center justify-center mb-6 bg-[#F1F3FA] rounded-full">
          <img src="{{ asset('images/icon-4.png') }}">
        </div>

        <h3 class="text-2xl font-semibold text-gray-900 mb-4">
          Quick Support
        </h3>

        <p class="text-[#555555] leading-8 text-[18px]">
          Our team is available Monday to Saturday to help with services and pricing.
        </p>
      </div>

    </div>
  </div>
</section>

<section class="relative bg-cover bg-center py-20" style="background-image: url({{ asset('images/about-play.jpg') }});">

  <div class="relative max-w-7xl mx-auto px-4">

    <div class="flex justify-end items-end">

      <div class="bg-white rounded-lg shadow-xl p-8 md:p-12 w-full lg:w-[50%]">

                <span class="text-[#4761FF] text-xl font-medium">
                    About Us
                </span>

        <h2 class="text-xl md:text-4xl font-bold text-gray-900 leading-tight mt-4">
          Empower Your Potential with Our Progressive Team
        </h2>

        <p class="text-gray-500 leading-8 mt-6">
          Welcome to Sphere Marketing Solutions, your premier destination for comprehensive
          digital marketing services. We specialize in web development, social media advertising,
          SEO, video editing, graphic design, and YouTube channel management to help you achieve
          your business goals.
        </p>

        <div class="grid sm:grid-cols-2 gap-8 mt-10">

          <div>
            <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center mb-6">
              <img src="{{ asset('images/icon-5.png') }}">
            </div>
            <h4 class="text-xl font-semibold mb-3">
              Client-First Ethics
            </h4>
            <p class="text-gray-500">
              We prioritize client success, ethical services, and maximizing ROI.
            </p>
          </div>

          <div>
            <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center mb-6">
              <img src="{{ asset('images/icon-2.png') }}">
            </div>
            <h4 class="text-xl font-semibold mb-3">
              Dedicated Experts
            </h4>
            <p class="text-gray-500">
              A tightly-knit team focused on innovation and results-driven delivery.
            </p>
          </div>

        </div>

        <a href="{{ route('about') }}"
           class="inline-block mt-10 bg-[#4761FF] hover:bg-indigo-700 text-white px-10 py-4 rounded-full transition">
          Read More
        </a>

      </div>

    </div>

  </div>

</section>

<section class="md:max-w-[88%] mx-auto px-4 py-16">

  <div class="text-center mb-12">
    <span class="text-[#4761FF] font-semibold text-sm tracking-widest uppercase">Our Services</span>
    <h2 class="text-2xl md:text-4xl font-bold text-gray-800 mt-2">Services That Help Your Business Grow</h2>
    <div class="w-16 h-1 bg-[#4761FF] mx-auto mt-4 rounded"></div>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- Card 1 -->
    <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
      <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
        <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
          <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
            <img src="{{ asset('images/icon-5.png') }}">
          </div>
        </div>
        <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
          Website Development</h3>
        <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
          Visually appealing, functionally robust websites tailored to your business.
        </p>
      </div>
      <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
        <button class="text-[#4761FF] font-semibold">
          Read More >>
        </button>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
      <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
        <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
          <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
            <img src="{{ asset('images/icon-6.png') }}">
          </div>
        </div>
        <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
          SEO Services</h3>
        <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
          Strategies designed to improve your search engine rankings and organic reach.
        </p>
      </div>
      <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
        <button class="text-[#4761FF] font-semibold">
          Read More >>
        </button>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
      <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
        <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
          <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
            <img src="{{ asset('images/icon-7.png') }}">
          </div>
        </div>
        <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
          Digital Marketing</h3>
        <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
          Campaigns that grow engagement, visibility, and conversions across channels.
        </p>
      </div>
      <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
        <button class="text-[#4761FF] font-semibold">
          Read More >>
        </button>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
      <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
        <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
          <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
            <img src="{{ asset('images/icon-8.png') }}">
          </div>
        </div>
        <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
          Social Media Advertising</h3>
        <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
          Reach your target audience effectively and drive measurable results.
        </p>
      </div>
      <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
        <button class="text-[#4761FF] font-semibold">
          Read More >>
        </button>
      </div>
    </div>

    <!-- Card 5 -->
    <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
      <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
        <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
          <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
            <img src="{{ asset('images/icon-9.png') }}">
          </div>
        </div>
        <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
          Video Editing & Graphics</h3>
        <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
          Elevate your content and brand image with professional creative services.
        </p>
      </div>
      <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
        <button class="text-[#4761FF] font-semibold">
          Read More >>
        </button>
      </div>
    </div>

    <!-- Card 6 -->
    <div class="group relative transition-all duration-300 hover:-translate-y-2 hover:z-20">
      <div class="bg-white p-9 rounded-lg group-hover:rounded-b-none shadow-[0_0_25px_rgba(0,0,0,0.1)] group-hover:shadow-[0_20px_25px_rgba(0,0,0,0.15)] transition-all duration-300 space-y-5">
        <div class="text-[#4761FF] text-6xl mb-4 flex justify-center">
          <div class="w-16 h-16 flex items-center bg-[#F1F3FA] rounded-full justify-center">
            <img src="{{ asset('images/icon-10.png') }}">
          </div>
        </div>
        <h3 class="text-center text-[19px] font-semibold text-gray-800 hover:text-[#4761FF] cursor-pointer">
          YouTube Management</h3>
        <p class="text-gray-500 text-center text-[17px] leading-relaxed px-6">
          Grow your channel so your videos reach their maximum potential.
        </p>
      </div>
      <div class="absolute left-0 right-0 top-full h-0 overflow-hidden opacity-0 group-hover:h-14 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center bg-white rounded-b-lg shadow-[0_20px_25px_rgba(0,0,0,0.15)] z-10">
        <button class="text-[#4761FF] font-semibold">
          Read More >>
        </button>
      </div>
    </div>

  </div>
</section>

<section class="py-24 bg-white">
  <div class="md:max-w-[88%] mx-auto px-6">

    <div class="flex items-center justify-between mb-16">
      <div>
        <h1 class="mb-4 text-[#4761FF] text-xl">Our Project</h1>
        <h2 class="text-2xl md:text-[45px] leading-[1.1] font-bold text-[#20233F] max-w-2xl">
          We've Done Lot's of
          Awesome Projects
        </h2>
      </div>
      <div class="hidden md:flex gap-4">

        <button id="projectPrevBtn" class="w-16 h-16 rounded-full bg-white shadow-[0_0_8px_rgba(0,0,0,0.1)] flex items-center justify-center hover:bg-blue-600 hover:text-white duration-300">
          <i class="fa-solid fa-angle-left"></i>
        </button>

        <button id="projectNextBtn" class="w-16 h-16 rounded-full bg-white shadow-[0_0_8px_rgba(0,0,0,0.1)] flex items-center justify-center hover:bg-blue-600 hover:text-white duration-300">
          <i class="fa-solid fa-angle-right"></i>
        </button>

      </div>

    </div>

    <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">

      <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

        <div class="relative overflow-hidden">

          <img src="{{ asset('images/project-1.jpg') }}" class="w-full h-75 object-cover transition duration-500 group-hover:scale-110">

          <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500">
          </div>

          <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

            <a href="#"
               class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-[#4761FF] hover:bg-[#4761FF] hover:text-white">
              <i class="fa-solid fa-eye"></i>
            </a>

            <a href="#"
               class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-[#4761FF] hover:bg-[#4761FF] hover:text-white">
              <i class="fa-solid fa-link"></i>
            </a>

          </div>

        </div>

        <div class="p-6">

          <h3 class="text-[22px] font-bold text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer">
            Data Analytics & Insights
          </h3>

          <p class="text-gray-500 text-lg leading-8">

            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
          </p>

        </div>

      </div>

      <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

        <div class="relative overflow-hidden">

          <img src="{{ asset('images/project-2.jpg') }}" class="w-full h-75 object-cover transition duration-500 group-hover:scale-110">

          <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500">
          </div>

          <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

            <a href="#"
               class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-[#4761FF] hover:bg-[#4761FF] hover:text-white">
              <i class="fa-solid fa-eye"></i>
            </a>

            <a href="#"
               class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-[#4761FF] hover:bg-[#4761FF] hover:text-white">
              <i class="fa-solid fa-link"></i>
            </a>

          </div>

        </div>

        <div class="p-6">

          <h3 class="text-[22px] font-bold text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer">
            Marketing Content Strategy
          </h3>

          <p class="text-gray-500 text-lg leading-8">
            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
          </p>

        </div>

      </div>

      <div class="group rounded-2xl overflow-hidden shadow-lg bg-white">

        <div class="relative overflow-hidden">

          <img src="{{ asset('images/project-3.jpg') }}" class="w-full h-75 object-cover transition duration-500 group-hover:scale-110">

          <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-500">
          </div>

          <div class="absolute inset-0 flex items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition duration-500">

            <a href="#"
               class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-[#4761FF] hover:bg-[#4761FF] hover:text-white">
              <i class="fa-solid fa-eye"></i>
            </a>

            <a href="#"
               class="w-12 h-12 rounded-full bg-white flex items-center justify-center text-[#4761FF] hover:bg-[#4761FF] hover:text-white">
              <i class="fa-solid fa-link"></i>
            </a>

          </div>

        </div>

        <div class="p-6">

          <h3 class="text-[22px] font-bold text-[#20233F] mb-1 hover:text-[#4761FF] cursor-pointer">
            Social Marketing Strategy
          </h3>

          <p class="text-gray-500 text-lg leading-8">
            Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem
          </p>

        </div>

      </div>

    </div>

  </div>
</section>

<section class="py-24 bg-white">
  <div class="max-w-[88%] mx-auto">

    <div class="grid lg:grid-cols-2 gap-20 items-start">

      <div>

                <span class="text-[#4761FF] text-xl font-medium">
                    Get A Quote
                </span>

        <h2 class="text-[30px] md:text-[45px] leading-[1.1] font-bold text-[#20233F] mt-5 mb-8">
          Need Our Expert Help?
          We're Here!
        </h2>

        <p class="text-gray-500 text-[17px] leading-7 mb-4">
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
          Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
          sed stet lorem sit clita duo justo.
        </p>

        <p class="text-gray-500 text-[17px] leading-7 mb-4">
          Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
          Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
          sed stet lorem sit clita duo justo.
        </p>

        <a href="#" class="inline-flex overflow-hidden rounded-xl border border-[#4761FF]">

                    <span class="size-14 bg-linear-to-r from-[#4761FF] to-[#5C6CFF] flex items-center justify-center text-white text-lg">
                        <i class="fa-solid fa-phone"></i>
                    </span>

          <span class="px-4 flex items-center text-[#4761FF] text-xl font-medium bg-white">
                        +1 (604) 313-7091
                    </span>

        </a>

      </div>

      <div>

        <h2 class="text-[36px] font-semibold text-[#20233F] mb-10">
          Get A Free Quote
        </h2>

        <form>

          <div class="grid md:grid-cols-2 gap-6">

            <label>
              <input type="text" placeholder="Your Name" class="h-14 rounded-xl border border-gray-300 px-6 text-xl outline-none focus:border-[#4761FF] ">
            </label>

            <label>
              <input type="email" placeholder="Your Email" class="h-14 rounded-xl border border-gray-300 px-6 text-xl outline-none focus:border-[#4761FF]">
            </label>

            <label>
              <input type="text" placeholder="Your Mobile" class="h-14 rounded-xl border border-gray-300 px-6 text-xl outline-none focus:border-[#4761FF]">
            </label>

            <label>
              <select class="h-14 rounded-xl border border-gray-300 px-6 text-xl outline-none focus:border-[#4761FF]">

                <option>Choose A Service</option>
                <option>Digital Marketing</option>
                <option>SEO</option>
                <option>Content Marketing</option>
                <option>Social Marketing</option>

              </select>
            </label>

          </div>

          <label>
            <textarea rows="6" placeholder="Message" class="w-full mt-6 rounded-xl border border-gray-300 px-6 p-2 text-xl outline-none focus:border-[#4761FF]"></textarea>
          </label>

          <button class="w-full mt-4 h-14 rounded-xl text-white text-lg bg-linear-to-r from-[#4761FF] to-[#5C6CFF] hover:opacity-90 duration-300">
            Submit Now
          </button>

        </form>

      </div>

    </div>

  </div>
</section>

<section>
  <div class="bg-white px-4 sm:px-6 lg:px-8">
    <div class="max-w-[88%] mx-auto">

      <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-[#4761FF] text-lg tracking-wide block mb-3">
                    Our Team
                </span>
        <h2 class="text-[#0F172A] text-4xl md:text-5xl font-extrabold tracking-tight leading-tight">
          Our Expert People <br> Ready to Help You
        </h2>
      </div>

      <!-- Team Members Grid (4 Columns Layout) -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 border border-slate-50 relative group">

          <div class="relative overflow-hidden mb-5">
            <img class="w-full h-[320px] object-cover" src="{{ asset('images/team-1.jpg') }}" alt="Alex Robin">

            <!-- Floating Right Side Social Icons -->
            <ul class="absolute top-4 left-4 flex flex-col space-y-2 -translate-x-16 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                  </svg>
                </a></li>
            </ul>
          </div>
          <h5 class="text-[#0F172A] text-xl font-bold mb-1">Alex Robin</h5>
          <span class="text-[#4761FF] text-sm font-medium">Founder & CEO</span>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 border border-slate-50 relative group">
          <div class="relative overflow-hidden mb-5">
            <img class="w-full h-[320px] object-cover" src="{{ asset('images/team-2.jpg') }}" alt="Adam Crew">

            <ul class="absolute top-4 left-4 flex flex-col space-y-2 -translate-x-16 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                  </svg>
                </a></li>
            </ul>
          </div>
          <h5 class="text-[#0F172A] text-xl font-bold mb-1">Adam Crew</h5>
          <span class="text-[#4761FF] text-sm font-medium">Co Founder</span>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 border border-slate-50 relative group">
          <div class="relative overflow-hidden mb-5">
            <img class="w-full h-[320px] object-cover" src="{{ asset('images/team-3.jpg') }}" alt="Boris Johnson">

            <ul class="absolute top-4 left-4 flex flex-col space-y-2 -translate-x-16 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                  </svg>
                </a></li>
            </ul>
          </div>
          <h5 class="text-[#0F172A] text-xl font-bold mb-1">Boris Johnson</h5>
          <span class="text-[#4761FF] text-sm font-medium">Executive Manager</span>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-xl shadow-[0_10px_40px_rgba(0,0,0,0.08)] overflow-hidden text-center pb-6 border border-slate-50 relative group">
          <div class="relative overflow-hidden mb-5">
            <img class="w-full h-[320px] object-cover" src="{{ asset('images/team-4.jpg') }}" alt="Robert Jordan">

            <ul class="absolute top-4 left-4 flex flex-col space-y-2 -translate-x-16 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M24 4.56a9.83 9.83 0 0 1-2.83.77 4.93 4.93 0 0 0 2.16-2.72 9.86 9.86 0 0 1-3.13 1.2 4.92 4.92 0 0 0-8.38 4.48A13.98 13.98 0 0 1 1.67 3.15 4.93 4.93 0 0 0 3.2 9.72a4.91 4.91 0 0 1-2.23-.61v.06a4.92 4.92 0 0 0 3.95 4.82 4.9 4.9 0 0 1-2.22.08 4.92 4.92 0 0 0 4.6 3.42A9.87 9.87 0 0 1 0 19.54a13.94 13.94 0 0 0 7.55 2.21c9.05 0 14-7.5 14-14 0-.21 0-.43-.02-.64A10 10 0 0 0 24 4.56z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/>
                  </svg>
                </a></li>
              <li>
                <a class="w-9 h-9 flex items-center justify-center bg-white text-[#4761FF] rounded-full shadow hover:bg-[#4761FF] hover:text-white transition duration-200"
                   href="#">
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.779-1.75-1.75s.784-1.75 1.75-1.75 1.75.779 1.75 1.75-.784 1.75-1.75 1.75zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                  </svg>
                </a></li>
            </ul>
          </div>
          <h5 class="text-[#0F172A] text-xl font-bold mb-1">Robert Jordan</h5>
          <span class="text-[#4761FF] text-sm font-medium">Digital Marketer</span>
        </div>

      </div>

    </div>
  </div>
</section>

<section class="py-24 bg-white">
  <div class="md:max-w-[88%] mx-auto px-6">

    <div class="flex items-center justify-between mb-16">

      <div>
        <h1 class="mb-4 text-[#4761FF] text-xl">Testimonial</h1>

        <h2 class="text-[30px] md:text-[45px] lg:text-[55px] leading-[1.1] font-bold text-[#20233F] md:max-w-2xl">
          What Clients Say
          <br>
          About Our Services!
        </h2>
      </div>

      <div class="hidden md:flex gap-4">

        <button id="previous" class="w-16 h-16 rounded-full bg-white shadow-lg flex items-center justify-center">
          <i class="fa-solid fa-angle-left"></i>
        </button>

        <button id="next" class="w-16 h-16 rounded-full bg-white shadow-lg flex items-center justify-center">
          <i class="fa-solid fa-angle-right"></i>
        </button>

      </div>

    </div>

    <div class="overflow-hidden">
      <div id="slider" class="flex gap-8">

        <div class="testi-card">
          <img src="https://i.pravatar.cc/150?img=1">
          <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
          <h3>Ayesha Khan</h3>
          <span>Marketing Head</span>
        </div>

        <div class="testi-card">
          <img src="https://i.pravatar.cc/150?img=2">
          <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
          <h3>Bilal Ahmed</h3>
          <span>Product Designer</span>
        </div>

        <div class="testi-card">
          <img src="https://i.pravatar.cc/150?img=3">
          <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
          <h3>Sara Malik</h3>
          <span>Founder, Studio X</span>
        </div>

        <div class="testi-card">
          <img src="https://i.pravatar.cc/150?img=4">
          <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
          <h3>Usman Tariq</h3>
          <span>CTO, Nova Labs</span>
        </div>

        <div class="testi-card">
          <img src="https://i.pravatar.cc/150?img=5">
          <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
          <h3>Hina Sheikh</h3>
          <span>Operations Lead</span>
        </div>

        <div class="testi-card">
          <img src="https://i.pravatar.cc/150?img=6">
          <p>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
          <h3>Faisal Raza</h3>
          <span>Client Success Manager</span>
        </div>

      </div>
    </div>

  </div>
</section>


<script>const slides = document.querySelectorAll(".hero-slide");
  const nextBtn = document.getElementById("nextBtn");
  const prevBtn = document.getElementById("prevBtn");

  let current = 0;
  let autoSlide;

  function showSlide(index){

    slides.forEach(slide=>{
      slide.classList.add("hidden");
      slide.classList.remove("active");
    });

    slides[index].classList.remove("hidden");
    slides[index].classList.add("active");
  }

  function nextSlide(){

    current++;

    if(current >= slides.length){
      current = 0;
    }

    showSlide(current);
  }

  function prevSlide(){

    current--;

    if(current < 0){
      current = slides.length - 1;
    }

    showSlide(current);
  }

  function startAutoSlide(){
    autoSlide = setInterval(nextSlide,5000);
  }

  function resetAutoSlide(){
    clearInterval(autoSlide);
    startAutoSlide();
  }

  nextBtn.addEventListener("click",function(){
    nextSlide();
    resetAutoSlide();
  });

  prevBtn.addEventListener("click",function(){
    prevSlide();
    resetAutoSlide();
  });

  showSlide(current);
  startAutoSlide();


  (function(){
    const slider = document.getElementById('slider');
    const originals = Array.from(slider.children); // 6 real cards
    const total = originals.length;

    const beforeFrag = document.createDocumentFragment();
    originals.forEach(c => beforeFrag.appendChild(c.cloneNode(true)));
    slider.insertBefore(beforeFrag, slider.firstChild);

    const afterFrag = document.createDocumentFragment();
    originals.forEach(c => afterFrag.appendChild(c.cloneNode(true)));
    slider.appendChild(afterFrag);

    const cards = Array.from(slider.children);

    let current = total;
    let autoTimer = null;

    function visibleCount(){
      return window.innerWidth >= 768 ? 3 : 1;
    }

    function step(){
      const gap = parseFloat(getComputedStyle(slider).columnGap || 32);
      return cards[0].getBoundingClientRect().width + gap;
    }

    function updateActive(){
      const vCount = visibleCount();
      const centerIndex = current + Math.floor(vCount / 2);
      cards.forEach((card, i) => card.classList.toggle('is-active', i === centerIndex));
    }

    function render(withTransition){
      if (!withTransition) slider.classList.add('no-transition');
      slider.style.transform = `translateX(-${current * step()}px)`;
      if (!withTransition){
        void slider.offsetHeight; // force reflow before re-enabling transition
        slider.classList.remove('no-transition');
      }
      updateActive();
    }

    slider.addEventListener('transitionend', () => {
      if (current === total * 2) {
        current = total;
        render(false);
      } else if (current === 0) {
        current = total;
        render(false);
      }
    });

    function goNext(){ current++; render(true); }
    function goPrev(){ current--; render(true); }

    function startAuto(){
      stopAuto();
      autoTimer = setInterval(goNext, 5000);
    }
    function stopAuto(){
      if (autoTimer) clearInterval(autoTimer);
    }

    document.getElementById('next').addEventListener('click', () => { goNext(); startAuto(); });
    document.getElementById('previous').addEventListener('click', () => { goPrev(); startAuto(); });

    window.addEventListener('resize', () => render(false));

    render(false);
    startAuto();
  })();

  (function(){
    const projectGrid = document.querySelector('.grid.lg\\:grid-cols-3.md\\:grid-cols-2');
    const projectPrevBtn = document.getElementById('projectPrevBtn');
    const projectNextBtn = document.getElementById('projectNextBtn');

    if (!projectGrid || !projectPrevBtn || !projectNextBtn) return;

    const projects = Array.from(projectGrid.children);
    const totalProjects = projects.length;

    let currentProject = 0;

    function visibleProjectCount(){
      return window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
    }

    function updateProjectVisibility(){
      const visibleCount = visibleProjectCount();
      const maxIndex = totalProjects - visibleCount;

      projects.forEach((project, index) => {
        if (index >= currentProject && index < currentProject + visibleCount) {
          project.style.display = 'block';
        } else {
          project.style.display = 'none';
        }
      });
    }

    function nextProject(){
      const visibleCount = visibleProjectCount();
      const maxIndex = totalProjects - visibleCount;

      if (currentProject < maxIndex) {
        currentProject++;
        updateProjectVisibility();
      }
    }

    function prevProject(){
      if (currentProject > 0) {
        currentProject--;
        updateProjectVisibility();
      }
    }

    projectNextBtn.addEventListener('click', nextProject);
    projectPrevBtn.addEventListener('click', prevProject);

    window.addEventListener('resize', updateProjectVisibility);

    updateProjectVisibility();
  })();


</script>
@endsection
