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
