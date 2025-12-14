document.addEventListener("DOMContentLoaded", function () {
    // Inisialisasi Swiper
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // Mobile: 2 cards
            576: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            // Tablet: 3 cards
            768: {
                slidesPerView: 3,
                spaceBetween: 25,
            },
            // Desktop: 4 cards
            992: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
        },
    });

    // Hover pause autoplay
    const swiperContainer = document.querySelector(".mySwiper");
    swiperContainer.addEventListener("mouseenter", function () {
        swiper.autoplay.stop();
    });

    swiperContainer.addEventListener("mouseleave", function () {
        swiper.autoplay.start();
    });

    // Update ukuran swiper setelah semua gambar dimuat
    window.addEventListener("load", function () {
        swiper.update();
    });
});
