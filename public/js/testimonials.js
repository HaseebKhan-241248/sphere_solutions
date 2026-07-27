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
