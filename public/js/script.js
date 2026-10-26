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
    // 2. ACTIVE NAV HIGHLIGHTING & MOBILE DRAWER
    // =====================================================================
    const siteHeader = document.getElementById('header');
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileNavDrawer = document.getElementById('mobileNavDrawer');
    const mobileNavClose = document.getElementById('mobileNavClose');
    const mobileNavBackdrop = document.getElementById('mobileNavBackdrop');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link, .btn-mobile-cta');
    const navLinks = document.querySelectorAll('.nav-link');
    const trackedSections = [];

    // Mobile Drawer Controls
    function openMobileNav() {
        if (!mobileNavDrawer) return;
        mobileNavDrawer.classList.add('active');
        if (mobileMenuBtn) {
            mobileMenuBtn.classList.add('active');
            mobileMenuBtn.setAttribute('aria-expanded', 'true');
        }
        mobileNavDrawer.setAttribute('aria-hidden', 'false');
        document.body.classList.add('is-nav-open');
    }

    function closeMobileNav() {
        if (!mobileNavDrawer) return;
        mobileNavDrawer.classList.remove('active');
        if (mobileMenuBtn) {
            mobileMenuBtn.classList.remove('active');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
        }
        mobileNavDrawer.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('is-nav-open');
    }

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            if (mobileNavDrawer && mobileNavDrawer.classList.contains('active')) {
                closeMobileNav();
            } else {
                openMobileNav();
            }
        });
    }

    if (mobileNavClose) {
        mobileNavClose.addEventListener('click', closeMobileNav);
    }

    if (mobileNavBackdrop) {
        mobileNavBackdrop.addEventListener('click', closeMobileNav);
    }

    // Close on ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileNavDrawer && mobileNavDrawer.classList.contains('active')) {
            closeMobileNav();
        }
    });

    // Close on link click & smooth scroll
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (href && href.startsWith('#')) {
                closeMobileNav();
            }
        });
    });

    // Swipe to close mobile drawer (Geser ke kanan untuk menutup)
    const mobileNavPanel = document.querySelector('.mobile-nav-panel');
    if (mobileNavPanel) {
        let drawerTouchStartX = 0;
        let drawerTouchEndX = 0;

        mobileNavPanel.addEventListener('touchstart', (e) => {
            drawerTouchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        mobileNavPanel.addEventListener('touchend', (e) => {
            drawerTouchEndX = e.changedTouches[0].screenX;
            // Jika digeser ke kanan lebih dari 50px, tutup drawer
            if (drawerTouchEndX - drawerTouchStartX > 50) {
                closeMobileNav();
            }
        }, { passive: true });
    }

    // Active link tracking
    navLinks.forEach(link => {
        const targetId = link.getAttribute('href');
        if (targetId && targetId.startsWith('#')) {
            const section = document.querySelector(targetId);
            if (section && !trackedSections.includes(section)) trackedSections.push(section);
        }
    });

    const updateActiveNav = () => {
        // Toggle header scrolled styling
        if (siteHeader) {
            siteHeader.classList.toggle('is-scrolled', window.scrollY > 20);
        }

        let current = '';
        const activeLine = Math.min(window.innerHeight * 0.35, 240);

        trackedSections.forEach(section => {
            const sectionBounds = section.getBoundingClientRect();
            if (sectionBounds.top <= activeLine && sectionBounds.bottom > activeLine) {
                current = section.getAttribute('id');
            }
        });

        // Sync Desktop Nav
        navLinks.forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === `#${current}`);
        });

        // Sync Mobile Nav
        document.querySelectorAll('.mobile-nav-link').forEach(link => {
            link.classList.toggle('active', link.getAttribute('href') === `#${current}`);
        });
    };

    window.addEventListener('scroll', updateActiveNav, { passive: true });
    updateActiveNav();

    // =====================================================================
    // 3. REVEAL ON SCROLL
    // PENTING: .testimonial-card TIDAK dimasukkan ke sini karena sudah
    // memiliki animasi fade-in-up sendiri dari .testimonial-slide.active.
    // Jika dimasukkan, akan konflik (opacity: 0 dari reveal).
    // =====================================================================
    const revealTargets = document.querySelectorAll(
        '.section-header-center, .portfolio-card, ' +
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

            // Touch Swipe for Mobile
            let touchStartX = 0;
            let touchStartY = 0;
            let touchEndX = 0;
            let touchEndY = 0;

            carousel.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
                touchStartY = e.changedTouches[0].screenY;
                stopAutoPlay();
            }, { passive: true });

            carousel.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                touchEndY = e.changedTouches[0].screenY;
                const diffX = touchEndX - touchStartX;
                const diffY = touchEndY - touchStartY;

                // Only horizontal swipes with sufficient movement and not primarily a vertical scroll
                if (Math.abs(diffX) > 45 && Math.abs(diffX) > Math.abs(diffY)) {
                    if (diffX < 0) {
                        nextTestimonial();
                    } else {
                        prevTestimonial();
                    }
                }
                startAutoPlay();
            }, { passive: true });
        }

        document.addEventListener('visibilitychange', () => {
            if (document.hidden) stopAutoPlay();
            else startAutoPlay();
        });
    }

    // =====================================================================
    // 6. PORTFOLIO STICKY SCROLL PINNING & CATEGORY FILTER
    // =====================================================================
    const catItems = document.querySelectorAll('.portfolio-categories-list .cat-item');
    const allPortfolioCards = Array.from(document.querySelectorAll('.portfolio-cards-stream .portfolio-card'));
    const activeCategoryLabel = document.getElementById('activeCategoryName');
    const counterDisplay = document.getElementById('showcaseCounter');

    if (allPortfolioCards.length > 0) {
        function filterPortfolio(category) {
            let visibleCount = 0;

            allPortfolioCards.forEach(card => {
                const cardCategory = card.getAttribute('data-category');
                const isMatch = !category || category === 'all' || cardCategory === category;

                if (isMatch) {
                    card.style.display = 'block';
                    card.style.opacity = '1';
                    // Hitung urutan bertumpuk dinamis untuk kartu yang tampil (berada di bawah showcase-nav-bar)
                    card.style.top = `calc(var(--header-height, 80px) + ${84 + visibleCount * 18}px)`;
                    card.style.zIndex = 11 + visibleCount;
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                    card.style.opacity = '0';
                }
            });

            if (counterDisplay) {
                counterDisplay.textContent = `Menampilkan ${visibleCount} Proyek Unggulan`;
            }
        }

        catItems.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                catItems.forEach(i => {
                    i.classList.remove('active');
                    i.setAttribute('aria-selected', 'false');
                });
                item.classList.add('active');
                item.setAttribute('aria-selected', 'true');

                const category = item.getAttribute('data-category') || 'all';
                const labelSpan = item.querySelector('.cat-label');
                if (labelSpan && activeCategoryLabel) {
                    activeCategoryLabel.textContent = labelSpan.textContent.trim();
                }

                filterPortfolio(category);

                // Smooth scroll ke awal portofolio jika posisi saat ini melewati bagian atas portofolio
                const portSection = document.getElementById('portofolio');
                if (portSection) {
                    const rect = portSection.getBoundingClientRect();
                    if (rect.top < 0) {
                        portSection.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            });
        });

        // Inisialisasi awal
        filterPortfolio('all');

        // =====================================================================
        // SINKRONISASI SCROLL KELUAR SERENTAK (EXIT LOCKSTEP PORTOFOLIO)
        // Saat semua kartu telah bertumpuk (Card terakhir aktif):
        // Jika di-scroll lebih lanjut, SELURUH elemen (showcase-nav-bar,
        // sidebar portofolio sebelah kiri, dan seluruh kartu bertumpuk)
        // NAIK BERSAMAAN secara serentak, rapi, dan presisi ke atas.
        // =====================================================================
        const showcaseNavBar = document.querySelector('.showcase-nav-bar');
        const portfolioSidebar = document.querySelector('.portfolio-pinned-sidebar');
        const siteHeader = document.querySelector('.site-header') || document.getElementById('header');

        function updatePortfolioExitLockstep() {
            if (window.innerWidth <= 768) {
                if (showcaseNavBar && showcaseNavBar.style.transform !== '') showcaseNavBar.style.transform = '';
                if (portfolioSidebar && portfolioSidebar.style.transform !== '') portfolioSidebar.style.transform = '';
                allPortfolioCards.forEach(card => {
                    if (card.style.transform !== '') card.style.transform = '';
                });
                return;
            }

            const visibleCards = allPortfolioCards.filter(c => c.style.display !== 'none');
            if (visibleCards.length === 0) return;

            const lastCard = visibleCards[visibleCards.length - 1];
            const otherCards = visibleCards.slice(0, -1);
            const headerH = siteHeader ? siteHeader.offsetHeight : 80;
            // Posisi sticky akhir kartu terakhir
            const expectedStickyTop = headerH + 84 + (visibleCards.length - 1) * 18;
            const actualTop = lastCard.getBoundingClientRect().top;
            const delta = expectedStickyTop - actualTop;

            if (delta > 0) {
                // Semua elemen naik bersamaan dengan rasio 1:1 mengikuti pergerakan scroll kartu terakhir
                const exitTransform = `translateY(-${delta}px)`;
                if (showcaseNavBar) showcaseNavBar.style.transform = exitTransform;
                if (portfolioSidebar) portfolioSidebar.style.transform = exitTransform;
                otherCards.forEach(card => {
                    card.style.transform = exitTransform;
                });
            } else {
                // Kondisi normal saat kartu belum terdorong keluar
                if (showcaseNavBar && showcaseNavBar.style.transform !== '') {
                    showcaseNavBar.style.transform = '';
                }
                if (portfolioSidebar && portfolioSidebar.style.transform !== '') {
                    portfolioSidebar.style.transform = '';
                }
                otherCards.forEach(card => {
                    if (card.style.transform !== '') {
                        card.style.transform = '';
                    }
                });
            }
        }

        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    updatePortfolioExitLockstep();
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });

        window.addEventListener('resize', () => {
            updatePortfolioExitLockstep();
        }, { passive: true });
    }

    // Global toggleReadMore function
    window.toggleReadMore = function(elementId, btnElement) {
        const textEl = document.getElementById(elementId);
        if (!textEl) return;

        textEl.classList.toggle('expanded');
        if (textEl.classList.contains('expanded')) {
            btnElement.textContent = 'Tutup Sebagian ↑';
        } else {
            btnElement.textContent = 'Baca Selengkapnya ↓';
        }
    };
});