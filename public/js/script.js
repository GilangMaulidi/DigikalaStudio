/**
 * Digikala Studio - Interactive Behaviors (JS)
 * Terpisah dari CSS dan PHP/Blade
 *
 * Perbaikan:
 * - Fix timer leak auto-play carousel (stopAutoPlay sebelum start)
 * - Pause saat tab hidden (visibilitychange)
 * - Reveal target TIDAK termasuk .testimonial-card (sudah punya animasi sendiri)
 * - Nav tracking dinamis (hanya section yang ada di nav)
 */

document.addEventListener('DOMContentLoaded', () => {
    // =====================================================================
    // 1. WISHLIST INTERACTIVE
    // =====================================================================
    const wishlistItems = document.querySelectorAll('.wishlist-card-item');
    const selectedCountEl = document.getElementById('wishlist-selected-count');
    const estTimeEl = document.getElementById('wishlist-est-time');
    const sendBtn = document.getElementById('send-wishlist-btn');

    if (wishlistItems.length > 0) {
        wishlistItems.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('selected');
                updateWishlistSummary();
            });
        });

        function updateWishlistSummary() {
            const selected = document.querySelectorAll('.wishlist-card-item.selected');
            const count = selected.length;

            if (selectedCountEl) selectedCountEl.textContent = count + ' Item';

            if (estTimeEl) {
                if (count === 0) estTimeEl.textContent = '-';
                else if (count <= 2) estTimeEl.textContent = '1 - 2 Minggu';
                else if (count <= 4) estTimeEl.textContent = '2 - 4 Minggu';
                else estTimeEl.textContent = '4 - 6 Minggu';
            }
        }

        if (sendBtn) {
            sendBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const selected = Array.from(document.querySelectorAll('.wishlist-card-item.selected'))
                    .map(el => el.querySelector('.wishlist-item-name')?.textContent.trim())
                    .filter(Boolean);

                const messageArea = document.getElementById('project-brief');
                if (messageArea && selected.length > 0) {
                    messageArea.value = `Halo Digikala Studio, saya tertarik untuk mendiskusikan modul terpilih:\n- ` + selected.join('\n- ');
                }

                const collabSection = document.getElementById('kolaborasi');
                if (collabSection) {
                    collabSection.scrollIntoView({ behavior: 'smooth' });
                }
            });
        }
    }

    // =====================================================================
    // 2. ACTIVE NAV HIGHLIGHTING
    // =====================================================================
    const navLinks = document.querySelectorAll('.nav-link');
    const trackedSections = [];

    navLinks.forEach(link => {
        const targetId = link.getAttribute('href');
        if (targetId && targetId.startsWith('#')) {
            const section = document.querySelector(targetId);
            if (section) trackedSections.push(section);
        }
    });

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navLinks.forEach(navLink => navLink.classList.remove('active'));
            link.classList.add('active');
        });
    });

    window.addEventListener('scroll', () => {
        let current = '';
        const activeLine = Math.min(window.innerHeight * 0.35, 240);

        trackedSections.forEach(section => {
            const sectionBounds = section.getBoundingClientRect();
            if (sectionBounds.top <= activeLine && sectionBounds.bottom > activeLine) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    }, { passive: true });

    // =====================================================================
    // 3. REVEAL ON SCROLL
    // PENTING: .testimonial-card TIDAK dimasukkan ke sini karena sudah
    // memiliki animasi fade-in-up sendiri dari .testimonial-slide.active.
    // Jika dimasukkan, akan konflik (opacity: 0 dari reveal).
    // =====================================================================
    const revealTargets = document.querySelectorAll(
        '.section-header-center, .portfolio-pinned-sidebar, .portfolio-card, ' +
        '.service-card, .timeline-step-item, .wishlist-header, .pricing-card, ' +
        '.about-box, .collab-form-card, .cta-banner'
    );

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let revealFrame = null;

    revealTargets.forEach((target, index) => {
        target.classList.add('reveal-on-scroll');
        target.style.transitionDelay = prefersReducedMotion
            ? '0ms'
            : `${Math.min(index % 5, 4) * 70}ms`;
    });

    const updateScrollReveals = () => {
        revealTargets.forEach(target => {
            const bounds = target.getBoundingClientRect();
            const isInViewport = bounds.top < window.innerHeight * 0.9
                && bounds.bottom > window.innerHeight * 0.1;
            target.classList.toggle('is-visible', isInViewport);
        });
    };

    const scheduleRevealCheck = () => {
        if (revealFrame !== null) return;
        revealFrame = window.requestAnimationFrame(() => {
            updateScrollReveals();
            revealFrame = null;
        });
    };

    window.addEventListener('scroll', scheduleRevealCheck, { passive: true });
    window.addEventListener('resize', scheduleRevealCheck, { passive: true });
    updateScrollReveals();

    // =====================================================================
    // 4. COLLAB FORM DEMO FEEDBACK
    // =====================================================================
    const collabForm = document.getElementById('collab-form');
    if (collabForm) {
        collabForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const submitBtn = collabForm.querySelector('.form-submit-btn');
            if (submitBtn) {
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Mengirim Pesan...';
                submitBtn.disabled = true;

                setTimeout(() => {
                    alert('Terima kasih! Pesan kolaborasi Anda telah kami terima. Tim Digikala Studio akan segera menghubungi Anda.');
                    collabForm.reset();
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }, 800);
            }
        });
    }

    // =====================================================================
    // 5. TESTIMONIAL CAROUSEL
    // =====================================================================
    const testimonialSlides = document.querySelectorAll('.testimonial-slide');
    const testimonialDots = document.querySelectorAll('.testimonial-dot');
    let currentTestimonial = 0;
    let autoPlayTimer = null;

    if (testimonialSlides.length > 0) {
        function showTestimonial(index) {
            if (index < 0) index = testimonialSlides.length - 1;
            if (index >= testimonialSlides.length) index = 0;
            currentTestimonial = index;

            testimonialSlides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
            testimonialDots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        }

        window.prevTestimonial = () => showTestimonial(currentTestimonial - 1);
        window.nextTestimonial = () => showTestimonial(currentTestimonial + 1);
        window.goToTestimonial = (index) => showTestimonial(index);

        function startAutoPlay() {
            stopAutoPlay();
            autoPlayTimer = setInterval(() => {
                if (!document.hidden) showTestimonial(currentTestimonial + 1);
            }, 8000);
        }

        function stopAutoPlay() {
            if (autoPlayTimer) {
                clearInterval(autoPlayTimer);
                autoPlayTimer = null;
            }
        }

        startAutoPlay();

        const carousel = document.getElementById('testimonialCarousel');
        if (carousel) {
            carousel.addEventListener('mouseenter', stopAutoPlay);
            carousel.addEventListener('mouseleave', startAutoPlay);
        }

        document.addEventListener('visibilitychange', () => {
            if (document.hidden) stopAutoPlay();
            else startAutoPlay();
        });
    }
});