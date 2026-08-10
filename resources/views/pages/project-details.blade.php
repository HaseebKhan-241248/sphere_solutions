@extends('layout.app')

@section('content')

    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">
            <img src="{{ asset('images/about-hero.jpg') }}" alt="Project Details Hero"
                 class="absolute inset-0 w-full h-full object-cover z-0">
            <div class="absolute inset-0 bg-black/10 z-10"></div>
            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Project Details
                </h1>
                <x-page-breadcrumb current="Project Details" />
            </div>
        </div>
    </section>


    <section data-aos="fade-up" data-aos-delay="100" class="py-16">
        <div class="max-w-[85%] mx-auto grid lg:grid-cols-3 gap-12">

            <div class="lg:col-span-2">

                <img src="{{ asset('images/about-hero.jpg') }}"
                     alt="Digital Marketing Project" class="w-full h-105 object-cover rounded-lg mb-8">

                <h2 class="text-3xl md:text-4xl font-bold text-[#20233F] mb-6">Digital Marketing Growth Campaign</h2>

                <p class="font-sans text-[#555555] leading-6 text-[17px] mb-5">
                    Sphere Marketing Solutions partnered with a Vancouver service business to rebuild their digital
                    presence from the ground up. We launched a clear website structure, improved SEO foundations, and
                    ran targeted Meta and Google Ads to reach the right audience with measurable lead goals.
                </p>

                <p class="font-sans text-[#555555] leading-6 text-[17px] mb-10">
                    The campaign combined landing page updates, creative assets, and weekly performance reviews so the
                    client could see what was working. Within the first months, organic visibility improved and paid
                    channels delivered a steadier flow of qualified inquiries without wasting budget on broad targeting.
                </p>

                <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Project Gallery</h3>

                <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] mb-12 divide-y divide-gray-100 p-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-8">
                        <img src="{{ asset('images/project-1.jpg') }}" class="rounded-lg" alt="Project gallery 1">
                        <img src="{{ asset('images/project-2.jpg') }}" class="rounded-lg" alt="Project gallery 2">
                        <img src="{{ asset('images/project-3.jpg') }}" class="rounded-lg" alt="Project gallery 3">
                        <img src="{{ asset('images/project-4.jpg') }}" class="rounded-lg" alt="Project gallery 4">
                        <img src="{{ asset('images/project-1.jpg') }}" class="rounded-lg" alt="Project gallery 5">
                        <img src="{{ asset('images/project-2.jpg') }}" class="rounded-lg" alt="Project gallery 6">
                        <img src="{{ asset('images/project-3.jpg') }}" class="rounded-lg" alt="Project gallery 7">
                        <img src="{{ asset('images/project-4.jpg') }}" class="rounded-lg" alt="Project gallery 8">
                    </div>
                </div>

                <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-6">Clients Review</h3>

                <div data-aos="fade-up" data-aos-delay="200" class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-8 max-w-md hover:-translate-y-1 transition duration-300">

                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://i.pravatar.cc/150?img=6" alt="Faisal Raza"
                             class="size-17 rounded-full object-cover">
                        <div>
                            <h4 class="text-[20px] font-bold text-[#20233F]">Faisal Raza</h4>
                            <p class="text-[15px] text-[#777]">Client Success Manager</p>
                        </div>
                    </div>

                    <h3 class="text-2xl font-bold text-[#20233F] mb-4">Clear plan, measurable results</h3>

                    <p class="font-sans text-[#555555] leading-6 text-[16px]">
                        We needed one partner for web and ads. Sphere kept the plan simple and focused on results we
                        could measure. Communication was consistent, and the team adjusted creatives quickly when
                        priorities shifted.
                    </p>

                </div>

            </div>

            <aside class="space-y-8">

                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-[#20233F] mb-4">Project Info</h3>
                    <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-5 space-y-3">
                        <div class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4870F8]">Project Name:</span> Digital Marketing
                        </div>
                        <div class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4870F8]">Client:</span> Local Service Brand
                        </div>
                        <div class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4870F8]">Focus:</span> SEO & Paid Ads
                        </div>
                        <a href="https://spheremarketingsolutions.com/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F] hover:text-[#4870F8]">
                            <span class="text-[#4870F8]">Project Link:</span> Sphere Site
                        </a>
                        <div class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            <span class="text-[#4870F8]">Completed:</span> 2025
                        </div>
                        <div class="flex items-center gap-1 border-l-4 border-gray-300 py-3 px-7 rounded-lg transition font-semibold text-[18px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Website Development
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl md:text-3xl font-bold text-[#20233F] mb-4">Recent Projects</h3>
                    <div class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-5 space-y-3">
                        <a href="{{ route('project-details') }}" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg  hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Digital Marketing
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('project-details-alt') }}" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            SEO & Content
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('projects') }}" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Social Advertising
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('projects') }}" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Shopify Stores
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('projects') }}" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Video Editing
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                        <a href="{{ route('contact') }}" class="flex items-center justify-between border-l-4 border-gray-300 py-3 px-7 rounded-lg hover:text-[#4870F8] transition font-bold text-[17px] shadow-[0_0_4px_rgba(0,0,0,0.15)] text-[#20233F]">
                            Custom Software
                            <span class="size-3 p-3 rounded-sm border border-black flex items-center justify-center"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl md:text-3xl font-semibold text-[#20233F] mb-4">Get A Free Quote</h3>
                    <form action="{{ route('contact') }}" method="get" class="bg-white rounded-lg shadow-[0_0_15px_5px_rgba(0,0,0,0.06)] p-6 space-y-4">
                        <input type="text" placeholder="Your Name" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none">
                        <input type="email" placeholder="Your Email" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4870F8]">
                        <input type="text" placeholder="Your Mobile" class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4870F8]">
                        <select class="w-full h-14 rounded-xl border border-gray-300 px-5 text-[16px] outline-none focus:border-[#4870F8]">
                            <option>Choose A Service</option>
                            <option selected>Digital Marketing</option>
                            <option>SEO</option>
                            <option>Website Development</option>
                            <option>Social Media Advertising</option>
                        </select>
                        <textarea rows="4" placeholder="Message" class="w-full rounded-xl border border-gray-300 px-5 py-3 text-[16px] outline-none focus:border-[#4870F8]"></textarea>
                        <a href="{{ route('contact') }}" class="w-full h-14 rounded-xl text-white text-lg bg-linear-to-r from-[#4870F8] to-[#6B8AFF] hover:opacity-90 duration-300 flex items-center justify-center">
                            Submit Now
                        </a>
                    </form>
                </div>

            </aside>

        </div>
    </section>

    <button id="scrollTopBtn" class="hidden fixed bottom-6 right-6 w-12 h-12 rounded-full bg-[#4870F8] text-white items-center justify-center shadow-lg z-50">
        <i class="fa-solid fa-arrow-up"></i>
    </button>
@endsection
