const slides = document.querySelectorAll(".hero-slide");
const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");

let current = 0;
let autoSlide;

function showSlide(index) {

    slides.forEach(slide => {
        slide.classList.add("hidden");
        slide.classList.remove("active");
    });

    slides[index].classList.remove("hidden");
    slides[index].classList.add("active");
}

function nextSlide() {

    current++;

    if (current >= slides.length) {
        current = 0;
    }

    showSlide(current);
}

function prevSlide() {

    current--;

    if (current < 0) {
        current = slides.length - 1;
    }

    showSlide(current);
}

function startAutoSlide() {
    autoSlide = setInterval(nextSlide, 5000);
}

function resetAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
}

nextBtn.addEventListener("click", function () {
    nextSlide();
    resetAutoSlide();
});

prevBtn.addEventListener("click", function () {
    prevSlide();
    resetAutoSlide();
});

showSlide(current);
startAutoSlide();


// Slider Variables
const slider = document.getElementById("slider");
const cards = [...slider.children];
const nextBtn = document.getElementById("next");
const prevBtn = document.getElementById("previous");

let current = cards.length;
let autoSlide;

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
    if (window.innerWidth >= 1024) return 3;
    if (window.innerWidth >= 768) return 2;
    return 1;
}


function cardWidth() {
    const gap = parseFloat(getComputedStyle(slider).gap) || 32;
    return slider.children[0].offsetWidth + gap;
}

function activeCard() {

    [...slider.children].forEach(card =>
        card.classList.remove("is-active")
    );

    let index = current;

    if (visibleCards() === 3) {
        index = current + 1;
    }

    slider.children[index].classList.add("is-active");
}

function render(animation = true) {

    if (!animation) {
        slider.classList.add("no-transition");
    }

    slider.style.transform =
        `translateX(-${current * cardWidth()}px)`;

    if (!animation) {
        slider.offsetHeight;
        slider.classList.remove("no-transition");
    }

    activeCard();
}

function nextSlide() {
    current++;
    render();
}

function prevSlide() {
    current--;
    render();
}

slider.addEventListener("transitionend", () => {

    if (current >= cards.length * 2) {

        current = cards.length;
        render(false);

    } else if (current <= 0) {

        current = cards.length;
        render(false);

    }

});

function startAuto() {

    clearInterval(autoSlide);

    autoSlide = setInterval(() => {
        nextSlide();
    }, 5000);

}

nextBtn.onclick = () => {
    nextSlide();
    startAuto();
};

prevBtn.onclick = () => {
    prevSlide();
    startAuto();
};

window.onresize = () => render(false);

cloneCards();
render(false);
startAuto();

(function () {
    const projectGrid = document.querySelector('.grid.lg\\:grid-cols-3.md\\:grid-cols-2');
    const projectPrevBtn = document.getElementById('projectPrevBtn');
    const projectNextBtn = document.getElementById('projectNextBtn');

    if (!projectGrid || !projectPrevBtn || !projectNextBtn) return;

    const projects = Array.from(projectGrid.children);
    const totalProjects = projects.length;

    let currentProject = 0;

    function visibleProjectCount() {
        return window.innerWidth >= 1024 ? 3 : window.innerWidth >= 768 ? 2 : 1;
    }

    function updateProjectVisibility() {
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

    function nextProject() {
        const visibleCount = visibleProjectCount();
        const maxIndex = totalProjects - visibleCount;

        if (currentProject < maxIndex) {
            currentProject++;
            updateProjectVisibility();
        }
    }

    function prevProject() {
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

document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.service-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    cards.forEach(card => observer.observe(card));
});


document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.project-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    cards.forEach(card => observer.observe(card));
});


document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.team-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    cards.forEach(card => observer.observe(card));
});


document.addEventListener('DOMContentLoaded', function () {
    const cards = document.querySelectorAll('.testi-card');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    cards.forEach(card => observer.observe(card));
}); ``
