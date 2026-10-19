<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digikala Studio - Creative Digital Agency | Website & UI/UX Design</title>
    <meta name="description" content="Digikala Studio adalah creative digital agency yang merancang website strategis, desain UI/UX berkarakter, dan pengalaman digital untuk pertumbuhan bisnis Anda.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#090a0f] text-zinc-100 font-sans antialiased selection:bg-white selection:text-black min-h-screen overflow-x-hidden">

    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-[#090a0f]/80 backdrop-blur-md border-b border-white/5" id="navbar">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 h-20 flex items-center justify-between">
            <a href="#beranda" class="flex items-center gap-3 group">
                <div class="w-8 h-8 rounded-lg bg-white flex items-center justify-center text-[#090a0f] transition-transform duration-300 group-hover:scale-105 shadow-sm">
                    <svg viewBox="0 0 32 32" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 4C6 2.89543 6.89543 2 8 2H17C23.6274 2 29 7.37258 29 14C29 20.6274 23.6274 26 17 26H13L6 31V4Z" />
                        <path d="M12 8H16.5C19.5376 8 22 10.4624 22 13.5C22 16.5376 19.5376 19 16.5 19H12V8Z" fill="#ffffff" class="group-hover:fill-zinc-100" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-lg font-bold tracking-tight text-white leading-none">digikala</span>
                    <span class="text-[10px] font-medium tracking-[0.22em] text-zinc-400 uppercase leading-tight mt-0.5">studio</span>
                </div>
            </a>

            <nav class="hidden md:flex items-center gap-8">
                <a href="#beranda" class="text-sm font-medium text-zinc-300 hover:text-white transition-colors duration-200">Beranda</a>
                <a href="#layanan" class="text-sm font-medium text-zinc-400 hover:text-white transition-colors duration-200">Layanan</a>
                <a href="#portofolio" class="text-sm font-medium text-zinc-400 hover:text-white transition-colors duration-200">Portofolio</a>
                <a href="#proses" class="text-sm font-medium text-zinc-400 hover:text-white transition-colors duration-200">Tentang Kami</a>
                <a href="#kontak" class="text-sm font-medium text-zinc-400 hover:text-white transition-colors duration-200">Kontak</a>
            </nav>

            <div class="hidden md:flex items-center">
                <button type="button" onclick="openContactModal()" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-zinc-700/80 bg-zinc-900/40 text-sm font-medium text-zinc-200 hover:text-white hover:border-zinc-400 hover:bg-zinc-800 transition-all duration-200 group">
                    <span>Diskusikan Proyek</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </div>

            <button type="button" onclick="toggleMobileMenu()" class="md:hidden p-2 rounded-lg text-zinc-400 hover:text-white hover:bg-zinc-800/60 focus:outline-none" aria-label="Toggle navigation">
                <svg id="menuIcon" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <div id="mobileMenu" class="hidden md:hidden px-6 pt-2 pb-6 bg-[#0c0d13] border-b border-zinc-800 space-y-4">
            <a href="#beranda" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-300 hover:text-white py-1">Beranda</a>
            <a href="#layanan" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-400 hover:text-white py-1">Layanan</a>
            <a href="#portofolio" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-400 hover:text-white py-1">Portofolio</a>
            <a href="#proses" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-400 hover:text-white py-1">Tentang Kami</a>
            <a href="#kontak" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-400 hover:text-white py-1">Kontak</a>
            <button type="button" onclick="toggleMobileMenu(); openContactModal()" class="w-full mt-2 inline-flex items-center justify-center gap-2 px-5 py-3 rounded-full bg-white text-black text-sm font-semibold hover:bg-zinc-200 transition-colors">
                <span>Diskusikan Proyek</span>
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </div>
    </header>

    <section id="beranda" class="relative pt-32 pb-20 sm:pt-40 sm:pb-32 bg-[#090a0f] overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-zinc-800/10 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute bottom-10 right-1/4 w-[400px] h-[400px] bg-blue-900/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                <div class="lg:col-span-6 space-y-8">


                    <h1 class="text-4xl sm:text-5xl lg:text-[3.5rem] font-bold text-white tracking-tight leading-[1.12]">
                        Kami merancang website yang membuat brand Anda lebih bernilai.
                    </h1>

                    <p class="text-base sm:text-lg text-zinc-400 leading-relaxed max-w-xl">
                        Website strategis, desain yang berkarakter, dan pengalaman digital yang dirancang untuk membantu bisnis berkembang.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <button type="button" onclick="openContactModal()" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-white text-black font-semibold text-sm hover:bg-zinc-200 transition-all duration-200 shadow-lg shadow-white/5 group">
                            <span>Mulai Proyek</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                        <a href="#portofolio" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full border border-zinc-700/80 bg-zinc-900/60 text-zinc-300 font-medium text-sm hover:text-white hover:border-zinc-500 hover:bg-zinc-800 transition-all duration-200 group">
                            <span>Lihat Portofolio</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-6 relative">
                    <div class="relative rounded-2xl overflow-hidden border border-zinc-800/80 shadow-2xl bg-zinc-950/40 group">
                        <img 
                            src="{{ asset('images/hero-devices.jpg') }}" 
                            alt="Digikala Studio Devices Showcase Mockup" 
                            class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-[1.02]"
                            loading="eager"
                        >
                        <div class="absolute inset-0 bg-gradient-to-t from-[#090a0f]/40 via-transparent to-transparent pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan" class="py-24 sm:py-28 bg-white text-zinc-900">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-10 items-start">
                <div class="lg:col-span-4 space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-semibold tracking-[0.2em] text-zinc-500 uppercase">LAYANAN KAMI</span>
                        <div class="w-10 h-[1px] bg-zinc-300"></div>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-zinc-900 leading-[1.18]">
                        Digital yang dirancang dengan tujuan.
                    </h2>
                    <p class="text-sm sm:text-base text-zinc-600 leading-relaxed">
                        Kami membantu bisnis Anda membangun kehadiran digital yang kuat melalui solusi kreatif dan teknologi yang tepat guna.
                    </p>
                    <div class="pt-2">
                        <a href="#portofolio" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-zinc-900 text-white text-sm font-semibold hover:bg-black transition-all duration-200 group">
                            <span>Lihat Semua Layanan</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white border border-zinc-200 rounded-2xl p-7 flex flex-col justify-between hover:border-zinc-400 hover:shadow-xl transition-all duration-300 group">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-xl bg-zinc-50 border border-zinc-200/80 flex items-center justify-center text-zinc-800 group-hover:bg-zinc-900 group-hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-zinc-900">Website Bisnis</h3>
                            <p class="text-sm text-zinc-500 leading-relaxed">
                                Website profesional untuk meningkatkan kredibilitas dan memperluas jangkauan bisnis Anda.
                            </p>
                        </div>
                        <div class="pt-6">
                            <span class="inline-flex items-center text-zinc-900 font-semibold text-sm group-hover:translate-x-1.5 transition-transform duration-200">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="bg-white border border-zinc-200 rounded-2xl p-7 flex flex-col justify-between hover:border-zinc-400 hover:shadow-xl transition-all duration-300 group">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-xl bg-zinc-50 border border-zinc-200/80 flex items-center justify-center text-zinc-800 group-hover:bg-zinc-900 group-hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-zinc-900">Landing Page</h3>
                            <p class="text-sm text-zinc-500 leading-relaxed">
                                Halaman fokus dengan desain menarik untuk meningkatkan konversi dan hasil kampanye.
                            </p>
                        </div>
                        <div class="pt-6">
                            <span class="inline-flex items-center text-zinc-900 font-semibold text-sm group-hover:translate-x-1.5 transition-transform duration-200">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="bg-white border border-zinc-200 rounded-2xl p-7 flex flex-col justify-between hover:border-zinc-400 hover:shadow-xl transition-all duration-300 group">
                        <div class="space-y-4">
                            <div class="w-12 h-12 rounded-xl bg-zinc-50 border border-zinc-200/80 flex items-center justify-center text-zinc-800 group-hover:bg-zinc-900 group-hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-bold text-zinc-900">UI/UX Design</h3>
                            <p class="text-sm text-zinc-500 leading-relaxed">
                                Desain antarmuka yang intuitif, modern, dan berpusat pada pengalaman pengguna.
                            </p>
                        </div>
                        <div class="pt-6">
                            <span class="inline-flex items-center text-zinc-900 font-semibold text-sm group-hover:translate-x-1.5 transition-transform duration-200">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portofolio" class="py-24 sm:py-28 bg-[#fafafa] border-t border-zinc-200/70 text-zinc-900">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-12">
                <div class="space-y-3 max-w-xl">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-semibold tracking-[0.2em] text-zinc-500 uppercase">PORTOFOLIO</span>
                        <div class="w-10 h-[1px] bg-zinc-300"></div>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-zinc-900 leading-[1.18]">
                        Karya terbaik kami untuk klien terbaik.
                    </h2>
                </div>
                <div class="flex flex-col sm:flex-row sm:items-center gap-6 lg:max-w-md justify-between">
                    <p class="text-sm text-zinc-500 leading-relaxed">
                        Berikut adalah beberapa proyek yang telah kami kerjakan untuk berbagai bisnis dan industri.
                    </p>
                    <a href="#kontak" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-zinc-300 bg-white text-xs sm:text-sm font-semibold text-zinc-800 hover:border-zinc-900 hover:bg-zinc-100 transition-all duration-200 whitespace-nowrap group">
                        <span>Lihat Semua Portofolio</span>
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="flex items-center gap-2 pb-8 overflow-x-auto">
                <button type="button" onclick="filterPortfolio('all')" class="filter-btn active px-4 py-1.5 rounded-full text-xs font-semibold bg-zinc-900 text-white transition-all" data-filter="all">Semua</button>
                <button type="button" onclick="filterPortfolio('website')" class="filter-btn px-4 py-1.5 rounded-full text-xs font-semibold bg-white border border-zinc-200 text-zinc-600 hover:text-zinc-900 hover:border-zinc-400 transition-all" data-filter="website">Website</button>
                <button type="button" onclick="filterPortfolio('landing-page')" class="filter-btn px-4 py-1.5 rounded-full text-xs font-semibold bg-white border border-zinc-200 text-zinc-600 hover:text-zinc-900 hover:border-zinc-400 transition-all" data-filter="landing-page">Landing Page</button>
                <button type="button" onclick="filterPortfolio('ui-ux')" class="filter-btn px-4 py-1.5 rounded-full text-xs font-semibold bg-white border border-zinc-200 text-zinc-600 hover:text-zinc-900 hover:border-zinc-400 transition-all" data-filter="ui-ux">UI/UX Design</button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="portfolioContainer">
                <div class="portfolio-item group bg-white border border-zinc-200 rounded-2xl overflow-hidden flex flex-col justify-between hover:shadow-xl hover:border-zinc-400 transition-all duration-300" data-categories="website ui-ux">
                    <div>
                        <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                            <img 
                                src="{{ asset('images/portfolio-nexora.jpg') }}" 
                                alt="Nexora Tech Website Corporate" 
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            >
                        </div>
                        <div class="p-5 pb-3">
                            <span class="text-xs font-medium text-zinc-400 block mb-1">Website Corporate</span>
                            <h3 class="text-base font-bold text-zinc-900 group-hover:text-black transition-colors">Nexora Tech</h3>
                        </div>
                    </div>
                    <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-zinc-100">
                        <div class="flex items-center gap-1.5">
                            <span class="text-[11px] font-medium px-2.5 py-0.5 rounded-md bg-zinc-100 text-zinc-600">Website</span>
                            <span class="text-[11px] font-medium px-2.5 py-0.5 rounded-md bg-zinc-100 text-zinc-600">UI/UX</span>
                        </div>
                        <button type="button" onclick="openProjectDetails('Nexora Tech', 'Website Corporate', 'Platform website korporat berteknologi tinggi dengan fokus pada arsitektur perangkat lunak dan solusi komputasi awan skala global.', '{{ asset('images/portfolio-nexora.jpg') }}')" class="w-8 h-8 rounded-full flex items-center justify-center text-zinc-400 group-hover:text-zinc-900 group-hover:bg-zinc-100 transition-colors" aria-label="Lihat detail Nexora">
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="portfolio-item group bg-white border border-zinc-200 rounded-2xl overflow-hidden flex flex-col justify-between hover:shadow-xl hover:border-zinc-400 transition-all duration-300" data-categories="landing-page ui-ux">
                    <div>
                        <div class="relative aspect-[16/10] overflow-hidden bg-zinc-100">
                            <img 
                                src="{{ asset('images/portfolio-savoir.jpg') }}" 
                                alt="Savoir Interior Landing Page" 
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            >
                        </div>
                        <div class="p-5 pb-3">
                            <span class="text-xs font-medium text-zinc-400 block mb-1">Landing Page</span>
                            <h3 class="text-base font-bold text-zinc-900 group-hover:text-black transition-colors">Savoir Interior</h3>
                        </div>
                    </div>
                    <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-zinc-100">
                        <div class="flex items-center gap-1.5">
                            <span class="text-[11px] font-medium px-2.5 py-0.5 rounded-md bg-zinc-100 text-zinc-600">Landing Page</span>
                            <span class="text-[11px] font-medium px-2.5 py-0.5 rounded-md bg-zinc-100 text-zinc-600">UI/UX</span>
                        </div>
                        <button type="button" onclick="openProjectDetails('Savoir Interior', 'Landing Page', 'Landing page mewah dan berkarakter hangat untuk studio desain interior modern dengan tingkat konversi tinggi.', '{{ asset('images/portfolio-savoir.jpg') }}')" class="w-8 h-8 rounded-full flex items-center justify-center text-zinc-400 group-hover:text-zinc-900 group-hover:bg-zinc-100 transition-colors" aria-label="Lihat detail Savoir">
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="portfolio-item group bg-white border border-zinc-200 rounded-2xl overflow-hidden flex flex-col justify-between hover:shadow-xl hover:border-zinc-400 transition-all duration-300" data-categories="website ui-ux">
                    <div>
                        <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                            <img 
                                src="{{ asset('images/portfolio-kopi.jpg') }}" 
                                alt="Kopi Lola Website E-Commerce" 
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            >
                        </div>
                        <div class="p-5 pb-3">
                            <span class="text-xs font-medium text-zinc-400 block mb-1">Website E-Commerce</span>
                            <h3 class="text-base font-bold text-zinc-900 group-hover:text-black transition-colors">Kopi Lola</h3>
                        </div>
                    </div>
                    <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-zinc-100">
                        <div class="flex items-center gap-1.5">
                            <span class="text-[11px] font-medium px-2.5 py-0.5 rounded-md bg-zinc-100 text-zinc-600">Website</span>
                            <span class="text-[11px] font-medium px-2.5 py-0.5 rounded-md bg-zinc-100 text-zinc-600">UI/UX</span>
                        </div>
                        <button type="button" onclick="openProjectDetails('Kopi Lola', 'Website E-Commerce', 'Platform e-commerce kopi artisan lokal Indonesia dengan pengalaman belanja seamless dan visual berkelas.', '{{ asset('images/portfolio-kopi.jpg') }}')" class="w-8 h-8 rounded-full flex items-center justify-center text-zinc-400 group-hover:text-zinc-900 group-hover:bg-zinc-100 transition-colors" aria-label="Lihat detail Kopi Lola">
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="portfolio-item group bg-white border border-zinc-200 rounded-2xl overflow-hidden flex flex-col justify-between hover:shadow-xl hover:border-zinc-400 transition-all duration-300" data-categories="website ui-ux">
                    <div>
                        <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                            <img 
                                src="{{ asset('images/portfolio-amora.jpg') }}" 
                                alt="Amora Studio Website Company Profile" 
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                            >
                        </div>
                        <div class="p-5 pb-3">
                            <span class="text-xs font-medium text-zinc-400 block mb-1">Website Company Profile</span>
                            <h3 class="text-base font-bold text-zinc-900 group-hover:text-black transition-colors">Amora Studio</h3>
                        </div>
                    </div>
                    <div class="px-5 pb-5 pt-2 flex items-center justify-between border-t border-zinc-100">
                        <div class="flex items-center gap-1.5">
                            <span class="text-[11px] font-medium px-2.5 py-0.5 rounded-md bg-zinc-100 text-zinc-600">Website</span>
                            <span class="text-[11px] font-medium px-2.5 py-0.5 rounded-md bg-zinc-100 text-zinc-600">UI/UX</span>
                        </div>
                        <button type="button" onclick="openProjectDetails('Amora Studio', 'Website Company Profile', 'Profil perusahaan arsitektur modern berkelas dunia dengan showcase portofolio interaktif dan visual elegan.', '{{ asset('images/portfolio-amora.jpg') }}')" class="w-8 h-8 rounded-full flex items-center justify-center text-zinc-400 group-hover:text-zinc-900 group-hover:bg-zinc-100 transition-colors" aria-label="Lihat detail Amora">
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="proses" class="py-24 sm:py-32 bg-[#0c0d12] border-t border-zinc-800/80 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-10 items-start">
                <div class="lg:col-span-4 space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-semibold tracking-[0.2em] text-zinc-400 uppercase">PROSES KERJA</span>
                        <div class="w-10 h-[1px] bg-zinc-700"></div>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-white leading-[1.18]">
                        Dari ide hingga jadi nyata.
                    </h2>
                    <p class="text-sm sm:text-base text-zinc-400 leading-relaxed">
                        Kami memiliki alur kerja yang jelas dan terstruktur agar setiap proyek berjalan dengan efisien dan hasil yang maksimal.
                    </p>
                    <div class="pt-2">
                        <button type="button" onclick="openContactModal()" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-zinc-700 bg-zinc-900/60 text-white text-sm font-semibold hover:border-zinc-400 hover:bg-zinc-800 transition-all duration-200 group">
                            <span>Lihat Cara Kerja</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 relative">
                        <div class="relative bg-zinc-900/40 border border-zinc-800/80 rounded-2xl p-6 flex flex-col justify-between hover:border-zinc-600 transition-all duration-300 group">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <span class="w-9 h-9 rounded-full bg-zinc-800 text-zinc-300 text-xs font-bold flex items-center justify-center border border-zinc-700">01</span>
                                    <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-base font-bold text-white mb-2">Konsultasi & Analisa</h3>
                                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                    Kami memahami kebutuhan bisnis Anda dan memberikan solusi terbaik.
                                </p>
                            </div>
                        </div>

                        <div class="relative bg-zinc-900/40 border border-zinc-800/80 rounded-2xl p-6 flex flex-col justify-between hover:border-zinc-600 transition-all duration-300 group">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <span class="w-9 h-9 rounded-full bg-zinc-800 text-zinc-300 text-xs font-bold flex items-center justify-center border border-zinc-700">02</span>
                                    <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-base font-bold text-white mb-2">Desain & Prototipe</h3>
                                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                    Kami membuat desain yang sesuai dengan identitas brand Anda.
                                </p>
                            </div>
                        </div>

                        <div class="relative bg-zinc-900/40 border border-zinc-800/80 rounded-2xl p-6 flex flex-col justify-between hover:border-zinc-600 transition-all duration-300 group">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <span class="w-9 h-9 rounded-full bg-zinc-800 text-zinc-300 text-xs font-bold flex items-center justify-center border border-zinc-700">03</span>
                                    <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-base font-bold text-white mb-2">Pengembangan</h3>
                                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                    Tim kami mengerjakan dengan teknologi terbaru dan standar kualitas tinggi.
                                </p>
                            </div>
                        </div>

                        <div class="relative bg-zinc-900/40 border border-zinc-800/80 rounded-2xl p-6 flex flex-col justify-between hover:border-zinc-600 transition-all duration-300 group">
                            <div>
                                <div class="flex items-center justify-between mb-6">
                                    <span class="w-9 h-9 rounded-full bg-zinc-800 text-zinc-300 text-xs font-bold flex items-center justify-center border border-zinc-700">04</span>
                                    <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-base font-bold text-white mb-2">Testing & Launch</h3>
                                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                    Kami memastikan semua berjalan dengan baik sebelum website siap digunakan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="kontak" class="py-20 sm:py-24 bg-[#0a0b10] border-t border-zinc-800 relative overflow-hidden">
        <div class="absolute -top-24 right-1/3 w-96 h-96 bg-zinc-800/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 relative z-10">
            <div class="bg-gradient-to-r from-zinc-950 via-[#12131a] to-zinc-950 border border-zinc-800/90 rounded-3xl p-8 sm:p-12 lg:p-16 flex flex-col lg:flex-row lg:items-center justify-between gap-10 shadow-2xl">
                <div class="space-y-4 max-w-2xl">
                    <span class="text-xs font-bold tracking-[0.2em] text-zinc-400 uppercase">SIAP MEMULAI?</span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight leading-tight">
                        Wujudkan Website Impian Anda Bersama Digikala Studio.
                    </h2>
                    <p class="text-sm sm:text-base text-zinc-400 leading-relaxed pt-1">
                        Konsultasikan kebutuhan bisnis Anda sekarang dan dapatkan solusi website terbaik sesuai dengan tujuan Anda.
                    </p>
                </div>

                <div class="flex flex-col sm:items-start lg:items-end gap-6 flex-shrink-0">
                    <button type="button" onclick="openContactModal()" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-full bg-white text-black font-bold text-sm hover:bg-zinc-200 transition-all duration-200 shadow-xl group">
                        <span>Diskusikan Proyek</span>
                        <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                        </svg>
                    </button>

                    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 sm:gap-6 text-xs sm:text-sm text-zinc-400">
                        <a href="tel:+6281234567890" class="inline-flex items-center gap-2 hover:text-white transition-colors">
                            <svg class="w-4 h-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <span>+62 812 3456 7890</span>
                        </a>
                        <a href="mailto:hello@digikalastudio.com" class="inline-flex items-center gap-2 hover:text-white transition-colors">
                            <svg class="w-4 h-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <span>hello@digikalastudio.com</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-[#07080b] border-t border-zinc-900 text-zinc-400 text-sm pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-16">
                <div class="lg:col-span-4 space-y-4">
                    <a href="#beranda" class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-white flex items-center justify-center text-[#090a0f]">
                            <svg viewBox="0 0 32 32" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 4C6 2.89543 6.89543 2 8 2H17C23.6274 2 29 7.37258 29 14C29 20.6274 23.6274 26 17 26H13L6 31V4Z" />
                                <path d="M12 8H16.5C19.5376 8 22 10.4624 22 13.5C22 16.5376 19.5376 19 16.5 19H12V8Z" fill="#ffffff" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-lg font-bold tracking-tight text-white leading-none">digikala</span>
                            <span class="text-[10px] font-medium tracking-[0.22em] text-zinc-400 uppercase leading-tight mt-0.5">studio</span>
                        </div>
                    </a>
                    <p class="text-xs sm:text-sm text-zinc-500 max-w-sm leading-relaxed">
                        Digital agency yang fokus pada pembuatan website, desain UI/UX, dan solusi digital untuk bisnis Anda.
                    </p>
                </div>

                <div class="lg:col-span-2 space-y-3">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Navigasi</h4>
                    <ul class="space-y-2 text-xs sm:text-sm">
                        <li><a href="#beranda" class="hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-colors">Layanan</a></li>
                        <li><a href="#portofolio" class="hover:text-white transition-colors">Portofolio</a></li>
                        <li><a href="#proses" class="hover:text-white transition-colors">Tentang Kami</a></li>
                        <li><a href="#kontak" class="hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-2 space-y-3">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Layanan</h4>
                    <ul class="space-y-2 text-xs sm:text-sm">
                        <li><a href="#layanan" class="hover:text-white transition-colors">Website Bisnis</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-colors">Landing Page</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-colors">UI/UX Design</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-colors">Web Maintenance</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-2 space-y-3">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Ikuti Kami</h4>
                    <div class="flex items-center gap-3 text-zinc-400">
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-zinc-800 flex items-center justify-center hover:border-zinc-500 hover:text-white transition-colors" aria-label="Instagram">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-zinc-800 flex items-center justify-center hover:border-zinc-500 hover:text-white transition-colors" aria-label="LinkedIn">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-full border border-zinc-800 flex items-center justify-center hover:border-zinc-500 hover:text-white transition-colors" aria-label="YouTube">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-3">
                    <h4 class="text-xs font-semibold text-zinc-300">Dapatkan update terbaru seputar dunia digital.</h4>
                    <form onsubmit="handleNewsletter(event)" class="relative">
                        <input 
                            type="email" 
                            id="newsletterEmail" 
                            required 
                            placeholder="Masukkan email Anda" 
                            class="w-full bg-zinc-900 border border-zinc-800 text-xs rounded-lg pl-3 pr-9 py-2.5 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-zinc-500 transition-colors"
                        >
                        <button type="submit" class="absolute right-1.5 top-1/2 -translate-y-1/2 w-6 h-6 rounded flex items-center justify-center text-zinc-400 hover:text-white" aria-label="Submit newsletter">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </form>
                    <p id="newsletterSuccess" class="hidden text-[11px] text-emerald-400">Terima kasih telah berlangganan!</p>
                </div>
            </div>

            <div class="pt-8 border-t border-zinc-900/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-zinc-500">
                <p>© 2025 Digikala Studio. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="#" class="hover:text-zinc-300 transition-colors">Kebijakan Privasi</a>
                    <span class="text-zinc-800">|</span>
                    <a href="#" class="hover:text-zinc-300 transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <div id="contactModal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-zinc-950 border border-zinc-800 w-full max-w-lg rounded-2xl p-6 sm:p-8 relative shadow-2xl animate-in fade-in zoom-in-95 duration-200">
            <button type="button" onclick="closeContactModal()" class="absolute top-5 right-5 text-zinc-400 hover:text-white" aria-label="Close dialog">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div class="mb-6">
                <span class="text-xs font-semibold tracking-wider text-zinc-400 uppercase">KONSULTASI GRATIS</span>
                <h3 class="text-2xl font-bold text-white mt-1">Diskusikan Proyek Anda</h3>
                <p class="text-xs sm:text-sm text-zinc-400 mt-1">Ceritakan visi bisnis Anda dan tim kami akan segera menghubungi Anda dalam 24 jam.</p>
            </div>

            <form onsubmit="handleContactSubmit(event)" class="space-y-4">
                <div>
                    <label class="block text-xs font-medium text-zinc-300 mb-1">Nama Lengkap</label>
                    <input type="text" required placeholder="Contoh: Budi Pratama" class="w-full bg-zinc-900 border border-zinc-800 rounded-lg px-3.5 py-2.5 text-sm text-white placeholder-zinc-500 focus:outline-none focus:border-zinc-500 transition-colors">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-medium text-zinc-300 mb-1">Email Bisnis</label>
                        <input type="email" required placeholder="nama@perusahaan.com" class="w-full bg-zinc-900 border border-zinc-800 rounded-lg px-3.5 py-2.5 text-sm text-white placeholder-zinc-500 focus:outline-none focus:border-zinc-500 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-medium text-zinc-300 mb-1">No. WhatsApp</label>
                        <input type="tel" required placeholder="08123456789" class="w-full bg-zinc-900 border border-zinc-800 rounded-lg px-3.5 py-2.5 text-sm text-white placeholder-zinc-500 focus:outline-none focus:border-zinc-500 transition-colors">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-medium text-zinc-300 mb-1">Jenis Layanan</label>
                    <select class="w-full bg-zinc-900 border border-zinc-800 rounded-lg px-3.5 py-2.5 text-sm text-white focus:outline-none focus:border-zinc-500 transition-colors">
                        <option value="Website Bisnis">Website Bisnis / Company Profile</option>
                        <option value="Landing Page">High-Converting Landing Page</option>
                        <option value="UI/UX Design">UI/UX Design & Prototype</option>
                        <option value="E-Commerce">Website E-Commerce</option>
                        <option value="Custom Project">Kebutuhan Custom Lainnya</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-medium text-zinc-300 mb-1">Detail Kebutuhan Proyek</label>
                    <textarea rows="3" required placeholder="Jelaskan kebutuhan, tujuan, dan timeline yang Anda inginkan..." class="w-full bg-zinc-900 border border-zinc-800 rounded-lg px-3.5 py-2.5 text-sm text-white placeholder-zinc-500 focus:outline-none focus:border-zinc-500 transition-colors resize-none"></textarea>
                </div>
                <button type="submit" id="submitBtn" class="w-full mt-2 inline-flex items-center justify-center gap-2 py-3.5 px-6 rounded-full bg-white text-black font-semibold text-sm hover:bg-zinc-200 transition-all shadow-lg">
                    <span>Kirim Pesan Sekarang</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <div id="projectModal" class="fixed inset-0 z-50 hidden bg-black/80 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-zinc-950 border border-zinc-800 w-full max-w-2xl rounded-2xl overflow-hidden relative shadow-2xl">
            <button type="button" onclick="closeProjectModal()" class="absolute top-4 right-4 z-10 w-8 h-8 rounded-full bg-black/60 text-white flex items-center justify-center hover:bg-black" aria-label="Close project modal">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
            <div class="aspect-[16/9] w-full overflow-hidden bg-black">
                <img id="modalProjectImage" src="" alt="" class="w-full h-full object-cover">
            </div>
            <div class="p-6 sm:p-8">
                <span id="modalProjectCategory" class="text-xs font-semibold text-zinc-400 uppercase tracking-wider"></span>
                <h3 id="modalProjectTitle" class="text-2xl font-bold text-white mt-1 mb-3"></h3>
                <p id="modalProjectDesc" class="text-sm text-zinc-400 leading-relaxed mb-6"></p>
                <div class="flex items-center gap-4">
                    <button type="button" onclick="closeProjectModal(); openContactModal();" class="px-6 py-2.5 rounded-full bg-white text-black text-sm font-semibold hover:bg-zinc-200 transition-colors">
                        Buat Website Serupa
                    </button>
                    <button type="button" onclick="closeProjectModal()" class="px-6 py-2.5 rounded-full border border-zinc-800 text-zinc-300 text-sm font-medium hover:bg-zinc-900 transition-colors">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="toastNotification" class="fixed bottom-6 right-6 z-50 hidden max-w-sm bg-zinc-900 border border-zinc-700 text-white p-4 rounded-xl shadow-2xl flex items-center gap-3">
        <div class="w-8 h-8 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
            </svg>
        </div>
        <div>
            <h5 class="text-xs font-bold text-white" id="toastTitle">Berhasil Terkirim</h5>
            <p class="text-xs text-zinc-400" id="toastMessage">Pesan Anda telah kami terima.</p>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        function openContactModal() {
            document.getElementById('contactModal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeContactModal() {
            document.getElementById('contactModal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        function openProjectDetails(title, category, desc, imageSrc) {
            document.getElementById('modalProjectTitle').textContent = title;
            document.getElementById('modalProjectCategory').textContent = category;
            document.getElementById('modalProjectDesc').textContent = desc;
            document.getElementById('modalProjectImage').src = imageSrc;
            document.getElementById('modalProjectImage').alt = title;
            document.getElementById('projectModal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeProjectModal() {
            document.getElementById('projectModal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        function handleContactSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            btn.innerHTML = '<span>Mengirim...</span>';
            btn.disabled = true;

            setTimeout(() => {
                btn.innerHTML = '<span>Terkirim!</span>';
                setTimeout(() => {
                    closeContactModal();
                    btn.innerHTML = '<span>Kirim Pesan Sekarang</span>';
                    btn.disabled = false;
                    e.target.reset();
                    showToast('Pesan Berhasil Dikirim!', 'Tim Digikala Studio akan segera menghubungi WhatsApp/Email Anda.');
                }, 800);
            }, 1000);
        }

        function handleNewsletter(e) {
            e.preventDefault();
            const emailInput = document.getElementById('newsletterEmail');
            const successText = document.getElementById('newsletterSuccess');
            successText.classList.remove('hidden');
            showToast('Berhasil Berlangganan!', 'Anda akan menerima artikel dan tren digital terbaru.');
            emailInput.value = '';
            setTimeout(() => {
                successText.classList.add('hidden');
            }, 4000);
        }

        function showToast(title, message) {
            const toast = document.getElementById('toastNotification');
            document.getElementById('toastTitle').textContent = title;
            document.getElementById('toastMessage').textContent = message;
            toast.classList.remove('hidden');
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 4000);
        }

        function filterPortfolio(filter) {
            const items = document.querySelectorAll('.portfolio-item');
            const buttons = document.querySelectorAll('.filter-btn');

            buttons.forEach(btn => {
                if(btn.getAttribute('data-filter') === filter) {
                    btn.classList.add('bg-zinc-900', 'text-white');
                    btn.classList.remove('bg-white', 'text-zinc-600', 'border');
                } else {
                    btn.classList.remove('bg-zinc-900', 'text-white');
                    btn.classList.add('bg-white', 'text-zinc-600', 'border');
                }
            });

            items.forEach(item => {
                const categories = item.getAttribute('data-categories');
                if (filter === 'all' || categories.includes(filter)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        window.addEventListener('click', function(e) {
            const contactModal = document.getElementById('contactModal');
            const projectModal = document.getElementById('projectModal');
            if (e.target === contactModal) closeContactModal();
            if (e.target === projectModal) closeProjectModal();
        });

        window.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeContactModal();
                closeProjectModal();
            }
        });
    </script>

    <a href="https://wa.me/6281234567890?text=Halo%20Digikala%20Studio%2C%20saya%20ingin%20konsultasi%20tentang%20website."
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Chat Digikala Studio melalui WhatsApp"
       class="fixed bottom-6 right-6 z-40 inline-flex items-center gap-3 rounded-full bg-[#25D366] px-5 py-3.5 text-sm font-semibold text-white shadow-xl shadow-black/30 transition duration-200 hover:scale-105 hover:bg-[#20bd5a] focus:outline-none focus:ring-4 focus:ring-[#25D366]/40">
        <svg class="h-6 w-6 fill-current" viewBox="0 0 32 32" aria-hidden="true">
            <path d="M16.02 3a12.8 12.8 0 0 0-10.9 19.52L3.4 29l6.63-1.69A12.8 12.8 0 1 0 16.02 3Zm0 23.3c-1.9 0-3.76-.5-5.4-1.46l-.39-.23-3.94 1 .99-3.84-.25-.4a10.48 10.48 0 1 1 8.99 4.93Zm5.75-7.85c-.31-.16-1.84-.91-2.13-1.01-.29-.11-.5-.16-.72.16-.21.32-.82 1.01-1 1.22-.19.22-.37.24-.69.08-.32-.16-1.35-.5-2.57-1.59-.95-.84-1.59-1.88-1.78-2.2-.18-.32-.02-.49.14-.65.14-.14.32-.37.48-.56.16-.19.21-.32.32-.53.1-.21.05-.4-.03-.56-.08-.16-.72-1.73-.98-2.37-.26-.62-.52-.54-.72-.55l-.61-.01c-.21 0-.56.08-.85.4-.29.32-1.11 1.09-1.11 2.66 0 1.57 1.14 3.08 1.3 3.3.16.21 2.25 3.43 5.45 4.81.76.33 1.36.53 1.82.68.76.24 1.45.21 2 .13.61-.09 1.84-.75 2.1-1.48.26-.73.26-1.36.18-1.49-.08-.13-.29-.21-.61-.37Z"/>
        </svg>
        <span>Chat WhatsApp</span>
    </a>
</body>
</html>
