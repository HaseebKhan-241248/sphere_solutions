// --- HERO SLIDER ---
const heroSlides = document.querySelectorAll(".hero-slide");
const heroNextBtn = document.getElementById("nextBtn");
const heroPrevBtn = document.getElementById("prevBtn");

let heroCurrent = 0;
let heroAutoSlide;

function showHeroSlide(index) {
    heroSlides.forEach((slide, i) => {
        if (i === index) {
            slide.classList.remove("hidden");
            slide.classList.add("active");
        } else {
            slide.classList.add("hidden");
            slide.classList.remove("active");
        }
    });
}

function nextHeroSlide() {
    heroCurrent = (heroCurrent + 1) % heroSlides.length;
    showHeroSlide(heroCurrent);
}

function prevHeroSlide() {
    heroCurrent = (heroCurrent - 1 + heroSlides.length) % heroSlides.length;
    showHeroSlide(heroCurrent);
}

function startHeroAutoSlide() {
    heroAutoSlide = setInterval(nextHeroSlide, 5000);
}

function resetHeroAutoSlide() {
    clearInterval(heroAutoSlide);
    startHeroAutoSlide();
}

if (heroNextBtn && heroPrevBtn && heroSlides.length > 0) {
    heroNextBtn.addEventListener("click", function () {
        nextHeroSlide();
        resetHeroAutoSlide();
    });

    heroPrevBtn.addEventListener("click", function () {
        prevHeroSlide();
        resetHeroAutoSlide();
    });

    showHeroSlide(heroCurrent);
    startHeroAutoSlide();
}


// --- SECONDARY CAROUSEL SLIDER ---
const slider = document.getElementById("slider");

if (slider) {
    const cards = [...slider.children];
    const cardNextBtn = document.getElementById("next");
    const cardPrevBtn = document.getElementById("previous");

    let cardCurrent = cards.length;
    let cardAutoSlide;

    function cloneCards() {
        const first = document.createDocumentFragment();
        const last = document.createDocumentFragment();

        cards.forEach(card => {
            first.appendChild(card.cloneNode(true));
            last.appendChild(card.cloneNode(true));
        });

        slider.prepend(first);
        slider.append(last);
    }

    function visibleCards() {
        // Keep in sync with .testi-card flex widths in app.css (3 until mobile, then 1).
        if (window.innerWidth >= 768) return 3;
        return 1;
    }

    function cardWidth() {
        const gap = parseFloat(getComputedStyle(slider).gap) || 32;
        return slider.children[0].offsetWidth + gap;
    }

    function activeCard() {
        [...slider.children].forEach(card => card.classList.remove("is-active"));

        // Always highlight the middle card among the ones currently in view.
        const index = cardCurrent + Math.floor((visibleCards() - 1) / 2);

        if (slider.children[index]) {
            slider.children[index].classList.add("is-active");
        }
    }

    function render(animation = true) {
        if (!animation) {
            slider.classList.add("no-transition");
        }

        slider.style.transform = `translateX(-${cardCurrent * cardWidth()}px)`;

        if (!animation) {
            slider.offsetHeight;
            slider.classList.remove("no-transition");
        }

        activeCard();
    }

    function nextSlide() {
        cardCurrent++;
        render();
    }

    function prevSlide() {
        cardCurrent--;
        render();
    }

    slider.addEventListener("transitionend", () => {
        if (cardCurrent >= cards.length * 2) {
            cardCurrent = cards.length;
            render(false);
        } else if (cardCurrent <= 0) {
            cardCurrent = cards.length;
            render(false);
        }
    });

    function startAuto() {
        clearInterval(cardAutoSlide);
        cardAutoSlide = setInterval(() => {
            nextSlide();
        }, 5000);
    }

    if (cardNextBtn) cardNextBtn.onclick = () => {
        nextSlide();
        startAuto();
    };
    if (cardPrevBtn) cardPrevBtn.onclick = () => {
        prevSlide();
        startAuto();
    };

    window.addEventListener('resize', () => render(false));

    cloneCards();
    render(false);
    startAuto();
}


// PROJECT SLIDER //

(() => {
    const slider = document.getElementById("projectSlider");
    const nextBtn = document.getElementById("projectNextBtn");
    const prevBtn = document.getElementById("projectPrevBtn");

    if (!slider || !nextBtn || !prevBtn) return;

    let isAnimating = false;

    function getVisibleCards() {
        if (window.innerWidth >= 1280) return 4;
        if (window.innerWidth >= 1024) return 3;
        if (window.innerWidth >= 768) return 2;
        return 1;
    }

    function getSlideWidth() {
        return slider.children[0].offsetWidth;
    }

// next //
    nextBtn.addEventListener("click", () => {

        if (isAnimating) return;
        isAnimating = true;

        const width = getSlideWidth();

        slider.style.transition = "transform .5s ease";
        slider.style.transform = `translateX(-${width}px)`;

        slider.addEventListener("transitionend", function handler() {

            slider.removeEventListener("transitionend", handler);

            slider.appendChild(slider.firstElementChild);

            slider.style.transition = "none";
            slider.style.transform = "translateX(0)";

            requestAnimationFrame(() => {
                requestAnimationFrame(() => {
                    slider.style.transition = "";
                    isAnimating = false;
                });
            });

        });

    });

// prev //
    prevBtn.addEventListener("click", () => {

        if (isAnimating) return;
        isAnimating = true;

        const width = getSlideWidth();

        slider.insertBefore(
            slider.lastElementChild,
            slider.firstElementChild
        );

        slider.style.transition = "none";
        slider.style.transform = `translateX(-${width}px)`;

        requestAnimationFrame(() => {

            requestAnimationFrame(() => {

                slider.style.transition = "transform .5s ease";
                slider.style.transform = "translateX(0)";

            });

        });

        slider.addEventListener("transitionend", function handler() {

            slider.removeEventListener("transitionend", handler);

            slider.style.transition = "";
            isAnimating = false;

        });

    });


    window.addEventListener("resize", () => {
        slider.style.transition = "none";
        slider.style.transform = "translateX(0)";
    });

})();


// --- INTERSECTION OBSERVERS ---
document.addEventListener('DOMContentLoaded', function () {
    const selectors = ['.service-card', '.project-card', '.team-card', '.testi-card'];

    selectors.forEach(selector => {
        const cards = document.querySelectorAll(selector);
        if (cards.length > 0) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {threshold: 0.15});

            cards.forEach(card => observer.observe(card));
        }
    });
});
