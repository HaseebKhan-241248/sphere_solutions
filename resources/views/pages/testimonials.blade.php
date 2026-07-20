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
    <title>Testimonial</title>
</head>
<body class="bg-white text-slate-700 font-['Montserrat',sans-serif]">

<section>
    <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

        <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero" class="absolute inset-0 w-full h-full object-cover z-0">

        <div class="absolute inset-0 bg-black/10 z-10"></div>

        <div class="relative z-20">
            <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                Testimonial
            </h1>

            <nav class="flex items-center justify-center space-x-2 text-white text-base font-medium">
                <a href="{{ route('home') }}" class="hover:underline transition text-slate-200">Home</a>
                <span class="text-slate-300">/</span>
                <a href="#" class="hover:underline transition text-slate-200">Pages</a>
                <span class="text-slate-300">/</span>
                <span class="text-[#4F46E5] font-semibold">Testimonial</span>
            </nav>
        </div>
    </div>
</section>


<section class="w-full bg-[#F8F9FA] py-16 md:py-24 font-sans antialiased overflow-hidden">
    <div class="w-[90%] md:w-[85%] mx-auto max-w-6xl">

        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-6">
            <div>
                <span class="text-[#4761FF] font-semibold text-xl tracking-wide block mb-2">Testimonial</span>
                <h2 class="text-[#1C2035] font-bold text-3xl md:text-5xl leading-tight max-w-lg">
                    What Clients Say About Our Services!
                </h2>
            </div>

            <!-- Control Buttons -->
            <div class="flex items-center gap-4 shrink-0">
                <button id="customPrevBtn"
                        class="w-12 h-12 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-[#4761FF] hover:text-white hover:border-[#4761FF] shadow-sm transition duration-300">
                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                    </svg>
                </button>
                <button id="customNextBtn"
                        class="w-12 h-12 rounded-full border border-slate-200 bg-white flex items-center justify-center text-slate-600 hover:bg-[#4761FF] hover:text-white hover:border-[#4761FF] shadow-sm transition duration-300">
                    <svg class="w-5 h-5 stroke-current fill-none" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Scrollable Slider Container -->
        <div id="testimonialSlider"
             class="flex gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-none py-4">
            <!-- Card 1 -->
            <div class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm">
                <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                    <img src="{{ asset('images/team-1.jpg') }}"
                         alt="Client 1" class="w-full h-full object-cover">
                </div>
                <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                    Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                    lorem sit clita duo justo
                </p>
                <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Client Name</h4>
                <span class="prof text-[#4761FF] font-medium text-sm mt-1">Profession</span>
            </div>

            <!-- Card 2 -->
            <div class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm">
                <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                    <img src="{{ asset('images/team-2.jpg') }}"
                         alt="Client 2" class="w-full h-full object-cover">
                </div>
                <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                    Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                    lorem sit clita duo justo
                </p>
                <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Client Name</h4>
                <span class="prof text-[#4761FF] font-medium text-sm mt-1">Profession</span>
            </div>

            <!-- Card 3 -->
            <div class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm">
                <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                    <img src="{{ asset('images/team-3.jpg') }}"
                         alt="Client 3" class="w-full h-full object-cover">
                </div>
                <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                    Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                    lorem sit clita duo justo
                </p>
                <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Client Name</h4>
                <span class="prof text-[#4761FF] font-medium text-sm mt-1">Profession</span>
            </div>

            <!-- Card 4 -->
            <div class="testimonial-card min-w-full md:min-w-[calc(50%-12px)] lg:min-w-[calc(33.333%-16px)] snap-center bg-white border border-slate-100 rounded-2xl p-8 md:p-10 flex flex-col items-start text-start shadow-sm">
                <div class="w-24 h-24 rounded-full overflow-hidden mb-6 shadow-md">
                    <img src="{{ asset('images/team-4.jpg') }}"
                         alt="Client 4" class="w-full h-full object-cover">
                </div>
                <p class="desc text-slate-500 text-sm md:text-base leading-relaxed mb-6">
                    Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                    lorem sit clita duo justo
                </p>
                <h4 class="name text-[#1C2035] font-bold text-lg md:text-xl">Client Name</h4>
                <span class="prof text-[#4761FF] font-medium text-sm mt-1">Profession</span>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const slider = document.getElementById("testimonialSlider");
        const originalCards = Array.from(slider.children);
        const gap = 24;

        let autoPlayInterval;
        let isTransitioning = false;
        let updateTicker = null;

        originalCards.forEach(card => {
            const cloneBefore = card.cloneNode(true);
            const cloneAfter = card.cloneNode(true);
            cloneBefore.classList.add("is-clone");
            cloneAfter.classList.add("is-clone");
            slider.appendChild(cloneAfter);
            slider.insertBefore(cloneBefore, slider.firstChild);
        });

        const totalCardsElements = Array.from(slider.children);
        const cloneOffsetCount = originalCards.length;

        const getCardWidth = () => originalCards[0].offsetWidth + gap;

        const setInitialPosition = () => {
            slider.style.scrollBehavior = "auto";
            slider.scrollLeft = getCardWidth() * cloneOffsetCount;
            slider.style.scrollBehavior = "smooth";
            updateActiveCard();
        };

        setTimeout(setInitialPosition, 100);

        const handleInfiniteLoop = () => {
            const cardWidth = getCardWidth();
            const currentScroll = slider.scrollLeft;
            const totalOriginalWidth = cardWidth * cloneOffsetCount;

            slider.style.scrollBehavior = "auto";
            if (currentScroll < totalOriginalWidth - 10) {
                slider.scrollLeft = currentScroll + totalOriginalWidth;
            } else if (currentScroll >= totalOriginalWidth * 2 - 10) {
                slider.scrollLeft = currentScroll - totalOriginalWidth;
            }
            slider.style.scrollBehavior = "smooth";
            isTransitioning = false;
            updateActiveCard();
        };

        const scrollSlider = (direction) => {
            if (isTransitioning) return;
            isTransitioning = true;
            const cardWidth = getCardWidth();

            if (direction === "next") {
                slider.scrollBy({ left: cardWidth, behavior: 'smooth' });
            } else {
                slider.scrollBy({ left: -cardWidth, behavior: 'smooth' });
            }

            setTimeout(handleInfiniteLoop, 500);
        };

        const updateActiveCard = () => {
            const sliderRect = slider.getBoundingClientRect();
            const sliderCenter = sliderRect.left + sliderRect.width / 2;
            let closestCard = null;
            let closestDistance = Infinity;

            totalCardsElements.forEach(card => {
                const cardRect = card.getBoundingClientRect();
                const cardCenter = cardRect.left + cardRect.width / 2;
                const distance = Math.abs(sliderCenter - cardCenter);

                if (distance < closestDistance) {
                    closestDistance = distance;
                    closestCard = card;
                }
            });

            if (closestCard && window.innerWidth >= 768) {
                if (!closestCard.classList.contains("active-center-card")) {
                    totalCardsElements.forEach(card => {
                        if (card !== closestCard) {
                            card.classList.remove("active-center-card");
                        }
                    });
                    closestCard.classList.add("active-center-card");
                }
            } else if (window.innerWidth < 768) {
                totalCardsElements.forEach(card => card.classList.remove("active-center-card"));
            }
        };

        slider.addEventListener("scroll", () => {
            if (updateTicker) cancelAnimationFrame(updateTicker);
            updateTicker = requestAnimationFrame(updateActiveCard);
        });

        document.getElementById("customNextBtn").addEventListener("click", () => {
            scrollSlider("next");
            resetAutoPlay();
        });

        document.getElementById("customPrevBtn").addEventListener("click", () => {
            scrollSlider("prev");
            resetAutoPlay();
        });

        const startAutoPlay = () => {
            autoPlayInterval = setInterval(() => {
                scrollSlider("next");
            }, 3000);
        };

        const resetAutoPlay = () => {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        };

        slider.addEventListener("mouseenter", () => clearInterval(autoPlayInterval));
        slider.addEventListener("mouseleave", startAutoPlay);

        window.addEventListener("resize", setInitialPosition);

        startAutoPlay();
    });
</script>
</body>
</html>