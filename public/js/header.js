document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuBtn = document.getElementById("mobileMenuBtn");
    const mobileNavPanel = document.getElementById("mobileNavPanel");

    if (mobileMenuBtn && mobileNavPanel) {
        mobileMenuBtn.addEventListener("click", function () {
            mobileNavPanel.classList.toggle("hidden");
        });
    }
});
