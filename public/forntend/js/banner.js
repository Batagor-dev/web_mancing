/**
 * Hero Section JavaScript
 * Handles animations, parallax effects, and interactive features
 */

(function () {
    "use strict";

    // ========================================
    // Configuration
    // ========================================
    const CONFIG = {
        parallaxSpeed: 0.5,
        counterSpeed: 2000,
        particleCount: 50,
        particleMaxSpeed: 2,
        animationDelay: 0.1,
    };

    // ========================================
    // DOM Elements
    // ========================================
    const elements = {
        heroBg: null,
        statsNumbers: [],
        animatedElements: [],
        particlesContainer: null,
    };

    // ========================================
    // Initialize on DOM Ready
    // ========================================
    document.addEventListener("DOMContentLoaded", function () {
        initializeElements();
        initParallaxEffect();
        initAnimationDelays();
        initCounterAnimation();
        initParticles();
        initSmoothScroll();
    });

    // ========================================
    // Initialize DOM Elements
    // ========================================
    function initializeElements() {
        elements.heroBg = document.getElementById("hero-bg-image");
        elements.statsNumbers = document.querySelectorAll(".stat-number");
        elements.animatedElements = document.querySelectorAll(
            ".animate-slide-up, .animate-fade-in"
        );
        elements.particlesContainer = document.getElementById("particles-js");
    }

    // ========================================
    // Parallax Effect
    // ========================================
    function initParallaxEffect() {
        if (!elements.heroBg) return;

        let ticking = false;

        window.addEventListener("scroll", function () {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    updateParallax();
                    ticking = false;
                });
                ticking = true;
            }
        });
    }

    function updateParallax() {
        if (!elements.heroBg) return;

        const scrolled = window.pageYOffset;
        const rate = scrolled * -CONFIG.parallaxSpeed;
        elements.heroBg.style.transform = `translate3d(0px, ${rate}px, 0px)`;
    }

    // ========================================
    // Animation Delays
    // ========================================
    function initAnimationDelays() {
        elements.animatedElements.forEach((element, index) => {
            const delay =
                element.style.getPropertyValue("--delay") ||
                index * CONFIG.animationDelay + 0.1;
            element.style.animationDelay = `${delay}s`;
        });
    }

    // ========================================
    // Counter Animation
    // ========================================
    function initCounterAnimation() {
        const observerOptions = {
            threshold: 0.5,
            rootMargin: "0px",
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach((entry) => {
                if (
                    entry.isIntersecting &&
                    !entry.target.classList.contains("counted")
                ) {
                    entry.target.classList.add("counted");
                    animateCounter(entry.target);
                }
            });
        }, observerOptions);

        elements.statsNumbers.forEach((stat) => observer.observe(stat));
    }

    function animateCounter(element) {
        const target = parseInt(element.getAttribute("data-target"));
        const duration = CONFIG.counterSpeed;
        const increment = target / (duration / 16);
        let current = 0;

        const timer = setInterval(function () {
            current += increment;
            if (current >= target) {
                element.textContent = formatNumber(target);
                clearInterval(timer);
            } else {
                element.textContent = formatNumber(Math.floor(current));
            }
        }, 16);
    }

    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    // ========================================
    // Particles Effect
    // ========================================
    function initParticles() {
        if (!elements.particlesContainer) return;

        for (let i = 0; i < CONFIG.particleCount; i++) {
            createParticle();
        }
    }

    function createParticle() {
        const particle = document.createElement("div");
        particle.className = "particle";

        const size = Math.random() * 3 + 1;
        const posX = Math.random() * 100;
        const posY = Math.random() * 100;
        const duration = Math.random() * 20 + 10;
        const delay = Math.random() * 5;
        const opacity = Math.random() * 0.5 + 0.1;

        particle.style.cssText = `
            position: absolute;
            width: ${size}px;
            height: ${size}px;
            background: rgba(255, 255, 255, ${opacity});
            border-radius: 50%;
            left: ${posX}%;
            top: ${posY}%;
            animation: particle-float ${duration}s linear ${delay}s infinite;
            pointer-events: none;
        `;

        elements.particlesContainer.appendChild(particle);
    }

    // Add particle animation styles
    const style = document.createElement("style");
    style.textContent = `
        @keyframes particle-float {
            0% {
                transform: translateY(0) translateX(0);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) translateX(${
                    Math.random() * 100 - 50
                }px);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

    // ========================================
    // Smooth Scroll
    // ========================================
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener("click", function (e) {
                const href = this.getAttribute("href");
                if (href === "#") return;

                e.preventDefault();
                const target = document.querySelector(href);

                if (target) {
                    const offsetTop = target.offsetTop;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: "smooth",
                    });
                }
            });
        });
    }

    // ========================================
    // Mouse Move Effect (Optional Enhancement)
    // ========================================
    function initMouseMoveEffect() {
        const hero = document.querySelector(".hero-section");
        if (!hero) return;

        hero.addEventListener("mousemove", function (e) {
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;

            const floatingElements =
                document.querySelectorAll(".float-element");
            floatingElements.forEach((element, index) => {
                const speed = (index + 1) * 10;
                const x = (mouseX - 0.5) * speed;
                const y = (mouseY - 0.5) * speed;

                element.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    }

    // ========================================
    // Resize Handler
    // ========================================
    let resizeTimer;
    window.addEventListener("resize", function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function () {
            updateParallax();
        }, 250);
    });

    // ========================================
    // Performance Monitoring
    // ========================================
    function checkPerformance() {
        if ("requestIdleCallback" in window) {
            requestIdleCallback(function () {
                // Initialize non-critical features during idle time
                initMouseMoveEffect();
            });
        } else {
            // Fallback for browsers that don't support requestIdleCallback
            setTimeout(initMouseMoveEffect, 1000);
        }
    }

    // Call performance check after initial load
    window.addEventListener("load", checkPerformance);

    // ========================================
    // Prefers Reduced Motion
    // ========================================
    const prefersReducedMotion = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    );

    if (prefersReducedMotion.matches) {
        // Disable animations for users who prefer reduced motion
        document.documentElement.style.setProperty(
            "--animation-duration",
            "0.01ms"
        );
    }

    // ========================================
    // Export for debugging (optional)
    // ========================================
    window.HeroSection = {
        elements: elements,
        config: CONFIG,
        updateParallax: updateParallax,
    };
})();
