// Navbar Scroll Effect
window.addEventListener("scroll", function () {
    const navbar = document.querySelector(".navbar");
    if (window.scrollY > 100) {
        navbar.classList.add("navbar-scrolled");
    } else {
        navbar.classList.remove("navbar-scrolled");
    }
});

// Preloader
window.addEventListener("load", function () {
    const loader = document.getElementById("page-loader");
    if (loader) {
        setTimeout(() => {
            loader.style.opacity = "0";
            setTimeout(() => {
                loader.style.display = "none";
            }, 300);
        }, 500); // Sesuaikan delay sesuai kebutuhan
    }
});

// Animasi khusus untuk Hero Section dengan GSAP (opsional)
document.addEventListener("DOMContentLoaded", function () {
    // Animasi teks di Hero
    gsap.from("#hero h1", { duration: 1, y: 50, opacity: 0, delay: 0.5 });
    gsap.from("#hero .lead", { duration: 1, y: 30, opacity: 0, delay: 0.8 });
    gsap.from("#hero .btn", {
        duration: 1,
        y: 20,
        opacity: 0,
        delay: 1,
        stagger: 0.2,
    });
});
