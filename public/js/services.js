const slides = document.querySelectorAll(".hero-slide");
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

