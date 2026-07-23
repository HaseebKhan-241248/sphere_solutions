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
    <title>Services</title>
</head>
<body>

@include('partials.header')

<section class="relative">
    <div class="relative h-80 bg-cover bg-center flex items-center justify-center text-center bg-black/30"
         style="background-image: url({{ asset('images/about-hero.jpg') }});">
        <div class="text-white px-4">
            <h1 class="text-4xl md:text-7xl font-bold mb-4">Service</h1>
            <p class="text-lg space-x-3">
                <a href="{{ route('home') }}" class="hover:text-[#4761FF]">Home</a>
                <span>/</span>
                <a href="#" class="hover:text-[#4761FF]"> Pages</a>
                <span>/</span>
                <span class="text-[#4761FF]"> Service </span>
            </p>
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

@include('partials.footer')

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
        const originals = Array.from(slider.children);
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
                void slider.offsetHeight;
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

    // (function(){
    //     const projectGrid = document.querySelector('.grid.lg\\:grid-cols-3.md\\:grid-cols-2');
    //     const projectPrevBtn = document.getElementById('projectPrevBtn');
    //     const projectNextBtn = document.getElementById('projectNextBtn');
    //
    //     if (!projectGrid || !projectPrevBtn || !projectNextBtn) return;
    //
    //     const projects = Array.from(projectGrid.children);
    //     const totalProjects = projects.length;
    //
    //     let currentProject = 0;
    //
    //     function visibleProjectCount(){
    //         return window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
    //     }
    //
    //     function updateProjectVisibility(){
    //         const visibleCount = visibleProjectCount();
    //         const maxIndex = totalProjects - visibleCount;
    //
    //         projects.forEach((project, index) => {
    //             if (index >= currentProject && index < currentProject + visibleCount) {
    //                 project.style.display = 'block';
    //             } else {
    //                 project.style.display = 'none';
    //             }
    //         });
    //     }
    //
    //     function nextProject(){
    //         const visibleCount = visibleProjectCount();
    //         const maxIndex = totalProjects - visibleCount;
    //
    //         if (currentProject < maxIndex) {
    //             currentProject++;
    //             updateProjectVisibility();
    //         }
    //     }
    //
    //     function prevProject(){
    //         if (currentProject > 0) {
    //             currentProject--;
    //             updateProjectVisibility();
    //         }
    //     }
    //
    //     projectNextBtn.addEventListener('click', nextProject);
    //     projectPrevBtn.addEventListener('click', prevProject);
    //
    //     window.addEventListener('resize', updateProjectVisibility);
    //
    //     updateProjectVisibility();
    // })();


</script>
</body>
</html>