<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digikala Studio — Premium Digital Agency | Website, Landing Page & UI/UX Design</title>
    <meta name="description" content="Digikala Studio adalah creative digital agency terkemuka. Ferdi merancang website strategis, landing page berkonversi tinggi, dan desain UI/UX berkarakter yang membuat brand Anda lebih bernilai.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#07080b] text-zinc-100 font-sans antialiased selection:bg-white selection:text-black min-h-screen overflow-x-hidden">

    <!-- Navigation Header -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-[#07080b]/80 backdrop-blur-xl border-b border-white/[0.08]" id="navbar">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 h-20 flex items-center justify-between">
            <a href="#beranda" class="flex items-center gap-3 group" aria-label="Digikala Studio Beranda">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-white to-zinc-200 flex items-center justify-center text-[#07080b] transition-all duration-300 group-hover:scale-105 shadow-md shadow-white/10">
                    <svg viewBox="0 0 32 32" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 4C6 2.89543 6.89543 2 8 2H17C23.6274 2 29 7.37258 29 14C29 20.6274 23.6274 26 17 26H13L6 31V4Z" />
                        <path d="M12 8H16.5C19.5376 8 22 10.4624 22 13.5C22 16.5376 19.5376 19 16.5 19H12V8Z" fill="#ffffff" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-lg font-extrabold tracking-tight text-white leading-none">digikala</span>
                    <span class="text-[9px] font-bold tracking-[0.26em] text-zinc-400 uppercase leading-tight mt-0.5">studio</span>
                </div>
            </a>

            <nav class="hidden md:flex items-center gap-8" aria-label="Main Navigation">
                <a href="#beranda" class="text-sm font-medium text-zinc-300 hover:text-white transition-colors duration-200">Beranda</a>
                <a href="#layanan" class="text-sm font-medium text-zinc-400 hover:text-white transition-colors duration-200">Layanan</a>
                <a href="#portofolio" class="text-sm font-medium text-zinc-400 hover:text-white transition-colors duration-200">Portofolio</a>
                <a href="#testimoni" class="text-sm font-medium text-zinc-400 hover:text-white transition-colors duration-200">Klien</a>
                <a href="#proses" class="text-sm font-medium text-zinc-400 hover:text-white transition-colors duration-200">Proses</a>
                <a href="#kontak" class="text-sm font-medium text-zinc-400 hover:text-white transition-colors duration-200">Kontak</a>
            </nav>

            <div class="hidden md:flex items-center gap-4">
                <button type="button" onclick="openContactModal()" class="inline-flex items-center gap-2.5 px-5 py-2.5 rounded-full border border-zinc-700/80 bg-zinc-900/60 text-sm font-medium text-zinc-200 hover:text-white hover:border-zinc-400 hover:bg-zinc-800 transition-all duration-200 group shadow-sm">
                    <span>Diskusikan Proyek</span>
                    <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </div>

            <button type="button" onclick="toggleMobileMenu()" class="md:hidden p-2 rounded-lg text-zinc-400 hover:text-white hover:bg-zinc-800/60 focus:outline-none" aria-label="Toggle navigation menu">
                <svg id="menuIcon" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobileMenu" class="hidden md:hidden px-6 pt-3 pb-6 bg-[#0a0b10] border-b border-zinc-800/80 space-y-4">
            <a href="#beranda" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-300 hover:text-white py-1.5">Beranda</a>
            <a href="#layanan" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-400 hover:text-white py-1.5">Layanan</a>
            <a href="#portofolio" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-400 hover:text-white py-1.5">Portofolio</a>
            <a href="#testimoni" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-400 hover:text-white py-1.5">Testimoni Klien</a>
            <a href="#proses" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-400 hover:text-white py-1.5">Proses Kerja</a>
            <a href="#kontak" onclick="toggleMobileMenu()" class="block text-base font-medium text-zinc-400 hover:text-white py-1.5">Kontak</a>
            <button type="button" onclick="toggleMobileMenu(); openContactModal()" class="w-full mt-3 inline-flex items-center justify-center gap-2 px-5 py-3 rounded-full bg-white text-black text-sm font-semibold hover:bg-zinc-200 transition-colors">
                <span>Diskusikan Proyek</span>
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
            </button>
        </div>
    </header>

    <!-- 1. HERO SECTION -->
    <section id="beranda" class="relative pt-32 pb-24 sm:pt-44 sm:pb-32 bg-[#07080b] overflow-hidden">
        <!-- Deep ambient gradient and glow effects -->
        <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-[900px] h-[550px] bg-gradient-to-b from-indigo-950/20 via-purple-900/10 to-transparent rounded-full blur-[160px] pointer-events-none"></div>
        <div class="absolute top-1/3 -left-40 w-96 h-96 bg-blue-900/10 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute bottom-10 -right-40 w-96 h-96 bg-violet-900/10 rounded-full blur-[140px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-10 items-center">
                <!-- Hero Left Column: Copy & Actions -->
                <div class="lg:col-span-6 space-y-8 text-left">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full border border-white/10 bg-white/[0.04] backdrop-blur-md">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                        <span class="text-xs font-medium text-zinc-300 tracking-wide">Studio Desain & Pengembangan Digital Premium</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-[3.5rem] font-bold text-white tracking-tight leading-[1.12]">
                        Kami Merancang Website yang Membuat Brand Anda Lebih Bernilai
                    </h1>

                    <p class="text-base sm:text-lg text-zinc-400 leading-relaxed max-w-xl font-normal">
                        Website strategis berkinerja tinggi, arsitektur UI/UX berkarakter, dan pengalaman digital terukur yang dirancang khusus untuk mengangkat valuasi dan kredibilitas brand Anda.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <button type="button" onclick="openContactModal()" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full bg-white text-black font-semibold text-sm hover:bg-zinc-200 transition-all duration-200 shadow-xl shadow-white/10 group">
                            <span>Mulai Proyek</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                        <a href="#portofolio" class="inline-flex items-center gap-2.5 px-8 py-4 rounded-full border border-zinc-700/80 bg-zinc-900/60 text-zinc-200 font-medium text-sm hover:text-white hover:border-zinc-500 hover:bg-zinc-800 transition-all duration-200 group">
                            <span>Lihat Portofolio</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Trust Stats Bar -->
                    <div class="grid grid-cols-3 gap-6 pt-6 border-t border-white/[0.08] max-w-lg">
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">120+</div>
                            <div class="text-xs text-zinc-400 mt-0.5">Proyek Sukses Diluncurkan</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">99.4%</div>
                            <div class="text-xs text-zinc-400 mt-0.5">Kepuasan Klien Korporat</div>
                        </div>
                        <div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">5+</div>
                            <div class="text-xs text-zinc-400 mt-0.5">Tahun Standar Keunggulan</div>
                        </div>
                    </div>
                </div>

                <!-- Hero Right Column: Luxurious Multi-Device Mockup Display (Laptop, Tablet, Smartphone) -->
                <div class="lg:col-span-6 relative">
                    <div class="relative mx-auto group">
                        <!-- Ambient halo behind the devices -->
                        <div class="absolute -inset-4 bg-gradient-to-r from-purple-600/20 via-indigo-600/20 to-blue-600/20 rounded-3xl blur-2xl opacity-60 group-hover:opacity-90 transition duration-700 pointer-events-none"></div>

                        <!-- Device Showcase Container -->
                        <div class="relative rounded-2xl overflow-hidden border border-white/10 bg-[#0c0d14] shadow-2xl shadow-black/80">
                            <img 
                                src="{{ asset('images/hero-trio-devices.jpg') }}" 
                                alt="Digikala Studio — Laptop, Tablet, dan Smartphone Mockup Display" 
                                class="w-full h-auto object-cover transform transition-transform duration-700 group-hover:scale-[1.015]"
                                loading="eager"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-[#07080b]/50 via-transparent to-transparent pointer-events-none"></div>

                            <!-- Floating Badge 1: Quality Standard -->
                            <div class="absolute top-4 left-4 hidden sm:inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/70 backdrop-blur-md border border-white/10 text-xs font-medium text-zinc-200 shadow-lg">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                                <span>Multi-Device Responsive Precision</span>
                            </div>

                            <!-- Floating Badge 2: High Performance Metric -->
                            <div class="absolute bottom-4 right-4 hidden sm:inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-black/70 backdrop-blur-md border border-white/10 text-xs font-medium text-zinc-200 shadow-lg">
                                <svg class="w-3.5 h-3.5 text-amber-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span>99/100 Core Web Vitals Score</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. CLIENT LOGOS BANNER (Clean, Light-Grey Background showcasing sleek greyscale logos like VELOCITI, AETHER, ORION, SYNERGY) -->
    <section class="py-12 bg-[#f4f5f7] border-y border-zinc-200/90 text-zinc-800">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="flex flex-col items-center justify-center space-y-6 text-center">
                <span class="text-xs font-semibold tracking-[0.22em] text-zinc-600 uppercase">
                    DIPERCAYA OLEH BRAND & PERUSAHAAN TERKEMUKA
                </span>

                <!-- Sleek Greyscale Client Logos Grid -->
                <div class="w-full grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-6 gap-8 sm:gap-10 items-center justify-items-center opacity-70 hover:opacity-100 transition-opacity duration-300">
                    
                    <!-- Logo 1: VELOCITI -->
                    <div class="flex items-center gap-2.5 text-zinc-700 hover:text-black transition-colors group">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2L2 22h20L12 2zm0 4.24L18.76 19.5H5.24L12 6.24z"/>
                        </svg>
                        <span class="text-base font-extrabold tracking-widest uppercase">VELOCITI</span>
                    </div>

                    <!-- Logo 2: AETHER -->
                    <div class="flex items-center gap-2.5 text-zinc-700 hover:text-black transition-colors group">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2.5" fill="none"/>
                            <path d="M12 7v10M7 12h10" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        <span class="text-base font-extrabold tracking-widest uppercase">AETHER</span>
                    </div>

                    <!-- Logo 3: ORION -->
                    <div class="flex items-center gap-2.5 text-zinc-700 hover:text-black transition-colors group">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <polygon points="12,2 15,9 22,9 17,14 19,21 12,17 5,21 7,14 2,9 9,9"/>
                        </svg>
                        <span class="text-base font-extrabold tracking-widest uppercase">ORION</span>
                    </div>

                    <!-- Logo 4: SYNERGY -->
                    <div class="flex items-center gap-2.5 text-zinc-700 hover:text-black transition-colors group">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                        </svg>
                        <span class="text-base font-extrabold tracking-widest uppercase">SYNERGY</span>
                    </div>

                    <!-- Logo 5: NEXUS -->
                    <div class="flex items-center gap-2.5 text-zinc-700 hover:text-black transition-colors group">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="8" height="8" rx="1.5"/>
                            <rect x="13" y="13" width="8" height="8" rx="1.5"/>
                            <rect x="13" y="3" width="8" height="8" rx="1.5" opacity="0.4"/>
                        </svg>
                        <span class="text-base font-extrabold tracking-widest uppercase">NEXUS</span>
                    </div>

                    <!-- Logo 6: LUMINA -->
                    <div class="flex items-center gap-2.5 text-zinc-700 hover:text-black transition-colors group">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                        <span class="text-base font-extrabold tracking-widest uppercase">LUMINA</span>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 3. SERVICES SECTION (White Background with 3 Refined Cards: Website Bisnis, Landing Page, UI/UX Design) -->
    <section id="layanan" class="py-24 sm:py-32 bg-white text-zinc-900 relative">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-10 items-start">
                
                <!-- Services Intro -->
                <div class="lg:col-span-4 space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-bold tracking-[0.2em] text-zinc-500 uppercase">LAYANAN KAMI</span>
                        <div class="w-10 h-[1.5px] bg-zinc-300"></div>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900 leading-[1.18]">
                        SANGGA.
                    </h2>
                    <p class="text-base text-zinc-600 leading-relaxed">
                        Kami tidak sekadar membuat tampilan yang menarik. Kami membangun ekosistem digital terstruktur yang memposisikan brand Anda sebagai pemimpin di industri Anda.
                    </p>

                    <div class="pt-2">
                        <button type="button" onclick="openContactModal()" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-full bg-zinc-900 text-white text-sm font-semibold hover:bg-black transition-all duration-200 group shadow-md shadow-zinc-900/10">
                            <span>Konsultasi Kebutuhan Anda</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>

                    <div class="p-6 rounded-2xl bg-zinc-50 border border-zinc-200/80 space-y-3 mt-4">
                        <span class="text-xs font-semibold text-zinc-700 uppercase tracking-wider">Jaminan Kualitas Digikala:</span>
                        <ul class="text-xs text-zinc-600 space-y-2">
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>100% Custom Design (Bukan template pasaran)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Optimasi Kecepatan & SEO Terintegrasi</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-emerald-600 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span>Garansi Pemeliharaan Purnajual Aktif</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- 3 Refined Cards -->
                <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                    
                    <!-- Card 1: Website Bisnis -->
                    <div class="bg-white border border-zinc-200/90 rounded-2xl p-7 flex flex-col justify-between hover:border-zinc-500 hover:shadow-2xl hover:shadow-zinc-900/5 transition-all duration-300 group">
                        <div class="space-y-5">
                            <div class="w-13 h-13 rounded-xl bg-zinc-100 border border-zinc-200/80 flex items-center justify-center text-zinc-900 group-hover:bg-zinc-900 group-hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Korporat & Perusahaan</span>
                                <h3 class="text-xl font-bold text-zinc-900 mt-1">Website Bisnis</h3>
                            </div>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Website profesional terstruktur untuk meningkatkan kredibilitas, memantapkan reputasi industri, dan memperluas relasi bisnis Anda secara global.
                            </p>

                            <div class="pt-2 border-t border-zinc-100 space-y-2 text-xs text-zinc-600">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-zinc-800"></span>
                                    <span>Arsitektur Informasi Skalabel</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-zinc-800"></span>
                                    <span>Optimasi Kecepatan & SEO Teknis</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-zinc-800"></span>
                                    <span>CMS Mudah Dikelola Mandiri</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <button type="button" onclick="openContactModal()" class="w-full inline-flex items-center justify-between text-xs font-semibold text-zinc-900 py-2 border-b border-zinc-200 group-hover:border-zinc-900 transition-colors">
                                <span>Pesan Website Bisnis</span>
                                <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Card 2: Landing Page -->
                    <div class="bg-white border border-zinc-200/90 rounded-2xl p-7 flex flex-col justify-between hover:border-zinc-500 hover:shadow-2xl hover:shadow-zinc-900/5 transition-all duration-300 group">
                        <div class="space-y-5">
                            <div class="w-13 h-13 rounded-xl bg-zinc-100 border border-zinc-200/80 flex items-center justify-center text-zinc-900 group-hover:bg-zinc-900 group-hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                                </svg>
                            </div>
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Kampanye & Penjualan</span>
                                <h3 class="text-xl font-bold text-zinc-900 mt-1">Landing Page</h3>
                            </div>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Halaman kampanye fokus tinggi dengan psikologi konversi teruji, copywriting persuasif, dan tata letak tajam untuk memaksimalkan ROI iklan digital Anda.
                            </p>

                            <div class="pt-2 border-t border-zinc-100 space-y-2 text-xs text-zinc-600">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-zinc-800"></span>
                                    <span>High-Converting UX Wireframe</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-zinc-800"></span>
                                    <span>Loading Sub-Detik (< 1 Detik)</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-zinc-800"></span>
                                    <span>Pelacakan Pixel & Event Analytics</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <button type="button" onclick="openContactModal()" class="w-full inline-flex items-center justify-between text-xs font-semibold text-zinc-900 py-2 border-b border-zinc-200 group-hover:border-zinc-900 transition-colors">
                                <span>Pesan Landing Page</span>
                                <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Card 3: UI/UX Design -->
                    <div class="bg-white border border-zinc-200/90 rounded-2xl p-7 flex flex-col justify-between hover:border-zinc-500 hover:shadow-2xl hover:shadow-zinc-900/5 transition-all duration-300 group">
                        <div class="space-y-5">
                            <div class="w-13 h-13 rounded-xl bg-zinc-100 border border-zinc-200/80 flex items-center justify-center text-zinc-900 group-hover:bg-zinc-900 group-hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="text-[11px] font-bold uppercase tracking-wider text-zinc-400">Aplikasi & Produk Digital</span>
                                <h3 class="text-xl font-bold text-zinc-900 mt-1">UI/UX Design</h3>
                            </div>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Desain antarmuka berstandar internasional yang intuitif, memukau, dan berpusat pada kepuasan pengguna. Mulai dari user journey hingga high-fidelity prototype.
                            </p>

                            <div class="pt-2 border-t border-zinc-100 space-y-2 text-xs text-zinc-600">
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-zinc-800"></span>
                                    <span>Comprehensive Design System</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-zinc-800"></span>
                                    <span>Prototipe Figma Interaktif</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-zinc-800"></span>
                                    <span>Handover Developer Siap Koding</span>
                                </div>
                            </div>
                        </div>

                        <div class="pt-6">
                            <button type="button" onclick="openContactModal()" class="w-full inline-flex items-center justify-between text-xs font-semibold text-zinc-900 py-2 border-b border-zinc-200 group-hover:border-zinc-900 transition-colors">
                                <span>Pesan UI/UX Design</span>
                                <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 4. PORTFOLIO SECTION (Large, Detailed Case Study Cards for: Recore Tech, Sarait Emeror, KepiTalia, Amore Studio with View Case Study buttons) -->
    <section id="portofolio" class="py-24 sm:py-32 bg-[#fafafa] border-t border-zinc-200/80 text-zinc-900 relative">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-12">
                <div class="space-y-3 max-w-xl">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-bold tracking-[0.2em] text-zinc-500 uppercase">STUDI KASUS & PORTOFOLIO</span>
                        <div class="w-10 h-[1.5px] bg-zinc-300"></div>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-zinc-900 leading-[1.18]">
                        Karya Terbaik Kami untuk Brand-Brand Visioner.
                    </h2>
                </div>
                <div class="flex flex-col sm:flex-row sm:items-center gap-6 lg:max-w-md justify-between">
                    <p class="text-sm text-zinc-600 leading-relaxed">
                        Setiap proyek adalah perpaduan riset pengguna mendalam, desain presisi tinggi, dan strategi pertumbuhan bisnis.
                    </p>
                </div>
            </div>

            <!-- Portfolio Filter Tabs -->
            <div class="flex items-center gap-2 pb-10 overflow-x-auto">
                <button type="button" onclick="filterPortfolio('all')" class="filter-btn active px-5 py-2 rounded-full text-xs font-semibold bg-zinc-900 text-white transition-all shadow-sm" data-filter="all">Semua Studi Kasus</button>
                <button type="button" onclick="filterPortfolio('website')" class="filter-btn px-5 py-2 rounded-full text-xs font-semibold bg-white border border-zinc-300 text-zinc-600 hover:text-zinc-900 hover:border-zinc-500 transition-all" data-filter="website">Website Bisnis</button>
                <button type="button" onclick="filterPortfolio('landing-page')" class="filter-btn px-5 py-2 rounded-full text-xs font-semibold bg-white border border-zinc-300 text-zinc-600 hover:text-zinc-900 hover:border-zinc-500 transition-all" data-filter="landing-page">Landing Page</button>
                <button type="button" onclick="filterPortfolio('ui-ux')" class="filter-btn px-5 py-2 rounded-full text-xs font-semibold bg-white border border-zinc-300 text-zinc-600 hover:text-zinc-900 hover:border-zinc-500 transition-all" data-filter="ui-ux">UI/UX Design</button>
            </div>

            <!-- Detailed Case Study Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10" id="portfolioContainer">
                
                <!-- Case Study 1: Recore Tech -->
                <article class="portfolio-item group bg-white border border-zinc-200 rounded-3xl overflow-hidden flex flex-col justify-between hover:shadow-2xl hover:border-zinc-400 transition-all duration-300" data-categories="website ui-ux">
                    <div>
                        <div class="relative aspect-[16/10] overflow-hidden bg-zinc-950">
                            <img 
                                src="{{ asset('images/portfolio-recore.jpg') }}" 
                                alt="Recore Tech Enterprise AI Platform Case Study" 
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                loading="lazy"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none"></div>
                            
                            <div class="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-black/70 backdrop-blur-md border border-white/20 text-[11px] font-semibold text-white">
                                <span>Enterprise Cloud & AI</span>
                            </div>

                            <div class="absolute bottom-4 right-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 backdrop-blur-md border border-emerald-500/30 text-[11px] font-semibold text-emerald-300">
                                <span>+240% User Engagement</span>
                            </div>
                        </div>

                        <div class="p-8 pb-4 space-y-3">
                            <div class="flex items-center justify-between text-xs text-zinc-500">
                                <span class="font-semibold uppercase tracking-wider text-zinc-400">Enterprise AI & Cloud Intelligence</span>
                                <span>2024</span>
                            </div>
                            <h3 class="text-2xl font-bold text-zinc-900 group-hover:text-black transition-colors">Recore Tech</h3>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Redesain platform enterprise cloud intelligence berskala global dengan visual dashboard waktu-nyata (real-time telemetry) dan arsitektur desain berskala enterprise.
                            </p>

                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">Web Architecture</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">UI/UX Design System</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">Performance Tuned</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 pt-4 border-t border-zinc-100 flex items-center justify-between">
                        <div class="text-xs text-zinc-500">
                            Kategori: <strong class="text-zinc-800">Website Bisnis & UI/UX</strong>
                        </div>
                        <button 
                            type="button" 
                            onclick="openProjectDetails(
                                'Recore Tech', 
                                'Enterprise AI & Cloud Intelligence Platform', 
                                'Recore Tech membutuhkan pembaruan platform web korporat untuk menyajikan telemetri cloud AI secara real-time bagi klien enterprise internasional. Kami merancang antarmuka dark-mode futuristik dengan performa sub-detik, menghasilkan peningkatan user engagement sebesar 240% dan kemudahan adopsi software.', 
                                '{{ asset('images/portfolio-recore.jpg') }}',
                                '+240% User Engagement',
                                'Enterprise Cloud & Data Platform'
                            )" 
                            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-zinc-900 text-white text-xs font-semibold hover:bg-black transition-all group/btn shadow-sm"
                        >
                            <span>View Case Study</span>
                            <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover/btn:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <!-- Case Study 2: Sarait Emeror -->
                <article class="portfolio-item group bg-white border border-zinc-200 rounded-3xl overflow-hidden flex flex-col justify-between hover:shadow-2xl hover:border-zinc-400 transition-all duration-300" data-categories="landing-page ui-ux">
                    <div>
                        <div class="relative aspect-[16/10] overflow-hidden bg-zinc-100">
                            <img 
                                src="{{ asset('images/portfolio-savoir.jpg') }}" 
                                alt="Sarait Emeror Luxury Atelier Case Study" 
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                loading="lazy"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none"></div>

                            <div class="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-black/70 backdrop-blur-md border border-white/20 text-[11px] font-semibold text-white">
                                <span>Luxury Architecture & Atelier</span>
                            </div>

                            <div class="absolute bottom-4 right-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 backdrop-blur-md border border-emerald-500/30 text-[11px] font-semibold text-emerald-300">
                                <span>3.2x High-Value Inquiries</span>
                            </div>
                        </div>

                        <div class="p-8 pb-4 space-y-3">
                            <div class="flex items-center justify-between text-xs text-zinc-500">
                                <span class="font-semibold uppercase tracking-wider text-zinc-400">Haute Architecture & Design</span>
                                <span>2024</span>
                            </div>
                            <h3 class="text-2xl font-bold text-zinc-900 group-hover:text-black transition-colors">Sarait Emeror</h3>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Pengalaman editorial digital interaktif untuk studio arsitektur dan interior mewah, memancarkan nilai eksklusivitas dan memikat klien properti premium internasional.
                            </p>

                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">Editorial Layout</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">High-Converting Landing Page</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">Micro-Interactions</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 pt-4 border-t border-zinc-100 flex items-center justify-between">
                        <div class="text-xs text-zinc-500">
                            Kategori: <strong class="text-zinc-800">Landing Page & UI/UX</strong>
                        </div>
                        <button 
                            type="button" 
                            onclick="openProjectDetails(
                                'Sarait Emeror', 
                                'Luxury Interior Architecture & Brand Atelier', 
                                'Sarait Emeror menghendaki kehadiran web yang mampu merefleksikan portofolio hunian mewah dan interior eksklusif. Kami merancang landing page dengan pendekatan editorial spasial, estetika tipografi bespoke, dan transisi fluid yang menghasilkan peningkatan prospek bernilai tinggi sebesar 3.2x.', 
                                '{{ asset('images/portfolio-savoir.jpg') }}',
                                '3.2x Peningkatan Inquiries',
                                'Architectural Atelier'
                            )" 
                            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-zinc-900 text-white text-xs font-semibold hover:bg-black transition-all group/btn shadow-sm"
                        >
                            <span>View Case Study</span>
                            <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover/btn:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <!-- Case Study 3: KepiTalia -->
                <article class="portfolio-item group bg-white border border-zinc-200 rounded-3xl overflow-hidden flex flex-col justify-between hover:shadow-2xl hover:border-zinc-400 transition-all duration-300" data-categories="website landing-page">
                    <div>
                        <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                            <img 
                                src="{{ asset('images/portfolio-kopi.jpg') }}" 
                                alt="KepiTalia Artisan Heritage Case Study" 
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                loading="lazy"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none"></div>

                            <div class="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-black/70 backdrop-blur-md border border-white/20 text-[11px] font-semibold text-white">
                                <span>Artisan Commerce & Heritage</span>
                            </div>

                            <div class="absolute bottom-4 right-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 backdrop-blur-md border border-emerald-500/30 text-[11px] font-semibold text-emerald-300">
                                <span>+180% Checkout Conversion</span>
                            </div>
                        </div>

                        <div class="p-8 pb-4 space-y-3">
                            <div class="flex items-center justify-between text-xs text-zinc-500">
                                <span class="font-semibold uppercase tracking-wider text-zinc-400">Direct-to-Consumer & Storytelling</span>
                                <span>2024</span>
                            </div>
                            <h3 class="text-2xl font-bold text-zinc-900 group-hover:text-black transition-colors">KepiTalia</h3>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Platform direct-to-consumer untuk brand kopi artisan Nusantara. Menggabungkan narasi storytelling visual yang kaya dengan pengalaman checkout kilat di perangkat ponsel.
                            </p>

                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">Mobile-First Commerce</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">Frictionless Checkout</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">Brand Storytelling</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 pt-4 border-t border-zinc-100 flex items-center justify-between">
                        <div class="text-xs text-zinc-500">
                            Kategori: <strong class="text-zinc-800">Website & Landing Page</strong>
                        </div>
                        <button 
                            type="button" 
                            onclick="openProjectDetails(
                                'KepiTalia', 
                                'Artisan Specialty Food & Heritage Digital Commerce', 
                                'KepiTalia menghubungkan kebun kopi pegunungan Nusantara dengan para penikmat kopi global. Kami membangun website berdaya pikat visual tinggi dengan alur transaksi instan, meningkatkan tingkat konversi transaksi sebesar 180% serta menurunkan cart abandonment hingga 42%.', 
                                '{{ asset('images/portfolio-kopi.jpg') }}',
                                '+180% Checkout Conversion',
                                'DTC Heritage Brand'
                            )" 
                            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-zinc-900 text-white text-xs font-semibold hover:bg-black transition-all group/btn shadow-sm"
                        >
                            <span>View Case Study</span>
                            <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover/btn:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </article>

                <!-- Case Study 4: Amore Studio -->
                <article class="portfolio-item group bg-white border border-zinc-200 rounded-3xl overflow-hidden flex flex-col justify-between hover:shadow-2xl hover:border-zinc-400 transition-all duration-300" data-categories="website ui-ux">
                    <div>
                        <div class="relative aspect-[16/10] overflow-hidden bg-zinc-900">
                            <img 
                                src="{{ asset('images/portfolio-amora.jpg') }}" 
                                alt="Amore Studio Contemporary Design Showcase Case Study" 
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                loading="lazy"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none"></div>

                            <div class="absolute top-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-black/70 backdrop-blur-md border border-white/20 text-[11px] font-semibold text-white">
                                <span>Urban Planning & Architecture</span>
                            </div>

                            <div class="absolute bottom-4 right-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-950/80 backdrop-blur-md border border-emerald-500/30 text-[11px] font-semibold text-emerald-300">
                                <span>-85% Bounce Rate</span>
                            </div>
                        </div>

                        <div class="p-8 pb-4 space-y-3">
                            <div class="flex items-center justify-between text-xs text-zinc-500">
                                <span class="font-semibold uppercase tracking-wider text-zinc-400">Contemporary Architecture Firm</span>
                                <span>2024</span>
                            </div>
                            <h3 class="text-2xl font-bold text-zinc-900 group-hover:text-black transition-colors">Amore Studio</h3>
                            <p class="text-sm text-zinc-600 leading-relaxed">
                                Website profil korporat interaktif berkelas arsitektur dunia dengan galeri multi-dimensi, transisi halaman halus, dan visualisasi proyek pencakar langit yang memukau.
                            </p>

                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">Spatial Interactive Grid</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">Corporate Showcase</span>
                                <span class="text-xs font-medium px-3 py-1 rounded-lg bg-zinc-100 text-zinc-700">Global Lead Engine</span>
                            </div>
                        </div>
                    </div>

                    <div class="p-8 pt-4 border-t border-zinc-100 flex items-center justify-between">
                        <div class="text-xs text-zinc-500">
                            Kategori: <strong class="text-zinc-800">Website Bisnis & UI/UX</strong>
                        </div>
                        <button 
                            type="button" 
                            onclick="openProjectDetails(
                                'Amore Studio', 
                                'Modern Architectural Masterpiece & Urban Planning Firm', 
                                'Amore Studio memerlukan identitas digital berskala internasional untuk mendemonstrasikan proyek tata kota dan arsitektur ikonik mereka. Kami mewujudkan platform web yang memadukan fluid typography, spatial layout dinamis, serta navigasi responsif yang menekan bounce rate hingga 85%.', 
                                '{{ asset('images/portfolio-amora.jpg') }}',
                                '-85% Bounce Rate',
                                'Architectural Masterpiece'
                            )" 
                            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-zinc-900 text-white text-xs font-semibold hover:bg-black transition-all group/btn shadow-sm"
                        >
                            <span>View Case Study</span>
                            <svg class="w-3.5 h-3.5 transition-transform duration-200 group-hover/btn:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- 5. CLIENT TESTIMONIALS SECTION (Modern Carousel Design with large, professional headshots of diverse clients & Indonesian quotes, elegant navigation arrows) -->
    <section id="testimoni" class="py-24 sm:py-32 bg-[#090a0f] text-white relative overflow-hidden border-t border-zinc-800/80">
        <!-- Ambient radial glow behind carousel -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[500px] bg-indigo-950/20 rounded-full blur-[160px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 relative z-10">
            <!-- Testimonials Header & Navigation Arrows -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-14">
                <div class="space-y-3 max-w-xl">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-bold tracking-[0.2em] text-zinc-400 uppercase">TESTIMONI KLIEN</span>
                        <div class="w-10 h-[1.5px] bg-zinc-700"></div>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white leading-[1.18]">
                        Apa Kata Pemimpin Bisnis Tentang Kami.
                    </h2>
                    <p class="text-sm text-zinc-400 leading-relaxed">
                        Kisah nyata dari para pendiri, direktur, dan eksekutif yang mempercayakan visi digital mereka kepada Digikala Studio.
                    </p>
                </div>

                <!-- Elegant Navigation Arrows & Pagination Tracker -->
                <div class="flex items-center gap-3">
                    <button 
                        type="button" 
                        onclick="prevTestimonial()" 
                        class="w-12 h-12 rounded-full border border-zinc-700/80 bg-zinc-900/60 flex items-center justify-center text-zinc-300 hover:text-white hover:border-zinc-400 hover:bg-zinc-800 transition-all duration-200 group focus:outline-none focus:ring-2 focus:ring-white/20 shadow-lg"
                        aria-label="Previous Testimonial"
                    >
                        <svg class="w-5 h-5 transition-transform duration-200 group-hover:-translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                    <button 
                        type="button" 
                        onclick="nextTestimonial()" 
                        class="w-12 h-12 rounded-full border border-zinc-700/80 bg-zinc-900/60 flex items-center justify-center text-zinc-300 hover:text-white hover:border-zinc-400 hover:bg-zinc-800 transition-all duration-200 group focus:outline-none focus:ring-2 focus:ring-white/20 shadow-lg"
                        aria-label="Next Testimonial"
                    >
                        <svg class="w-5 h-5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Modern Testimonial Carousel Container -->
            <div class="relative overflow-hidden" id="testimonialCarouselTrack">
                <div class="relative min-h-[460px] sm:min-h-[400px]">
                    
                    <!-- Slide 1: Andi Pratama (Recore Tech) -->
                    <div class="testimonial-slide transition-all duration-500 opacity-100 translate-x-0 block" data-index="0">
                        <div class="bg-gradient-to-br from-zinc-900/90 via-[#0e1017] to-zinc-900/80 border border-zinc-800/90 rounded-3xl p-8 sm:p-12 shadow-2xl">
                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                                <!-- Large Professional Headshot -->
                                <div class="lg:col-span-4 flex justify-center">
                                    <div class="relative">
                                        <div class="w-40 h-40 sm:w-52 sm:h-52 rounded-2xl overflow-hidden border-2 border-white/20 shadow-2xl bg-zinc-800">
                                            <img 
                                                src="{{ asset('images/client-andi.jpg') }}" 
                                                alt="Andi Pratama, CEO Recore Tech" 
                                                class="w-full h-full object-cover"
                                            >
                                        </div>
                                        <div class="absolute -bottom-3 -right-3 px-3 py-1 bg-white text-black font-extrabold text-[11px] rounded-full shadow-lg">
                                            VERIFIED CLIENT
                                        </div>
                                    </div>
                                </div>

                                <!-- Quote in Indonesian -->
                                <div class="lg:col-span-8 space-y-6">
                                    <!-- Stars Rating -->
                                    <div class="flex items-center gap-1.5 text-amber-400">
                                        @for($i=0; $i<5; $i++)
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        @endfor
                                    </div>

                                    <blockquote class="text-lg sm:text-xl md:text-2xl text-zinc-100 font-medium leading-relaxed italic">
                                        "Digikala Studio mentransformasi total identitas digital kami. Sejak peluncuran website baru, kepercayaan mitra internasional meningkat drastis dan konversi prospek enterprise naik lebih dari 200%. Hasil kerjanya jauh melampaui ekspektasi."
                                    </blockquote>

                                    <div class="pt-2 border-t border-zinc-800 flex items-center justify-between">
                                        <div>
                                            <h4 class="text-base sm:text-lg font-bold text-white">Andi Pratama</h4>
                                            <p class="text-xs sm:text-sm text-zinc-400">Chief Executive Officer — Recore Cloud Solutions</p>
                                        </div>
                                        <div class="text-right hidden sm:block">
                                            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700">Proyek: Website Bisnis & UI/UX</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Rina Kusuma (Sarait Emeror) -->
                    <div class="testimonial-slide transition-all duration-500 opacity-0 translate-x-12 hidden" data-index="1">
                        <div class="bg-gradient-to-br from-zinc-900/90 via-[#0e1017] to-zinc-900/80 border border-zinc-800/90 rounded-3xl p-8 sm:p-12 shadow-2xl">
                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                                <!-- Large Professional Headshot -->
                                <div class="lg:col-span-4 flex justify-center">
                                    <div class="relative">
                                        <div class="w-40 h-40 sm:w-52 sm:h-52 rounded-2xl overflow-hidden border-2 border-white/20 shadow-2xl bg-zinc-800">
                                            <img 
                                                src="{{ asset('images/client-rina.jpg') }}" 
                                                alt="Rina Kusuma, Managing Director Sarait Emeror" 
                                                class="w-full h-full object-cover"
                                            >
                                        </div>
                                        <div class="absolute -bottom-3 -right-3 px-3 py-1 bg-white text-black font-extrabold text-[11px] rounded-full shadow-lg">
                                            VERIFIED CLIENT
                                        </div>
                                    </div>
                                </div>

                                <!-- Quote in Indonesian -->
                                <div class="lg:col-span-8 space-y-6">
                                    <!-- Stars Rating -->
                                    <div class="flex items-center gap-1.5 text-amber-400">
                                        @for($i=0; $i<5; $i++)
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        @endfor
                                    </div>

                                    <blockquote class="text-lg sm:text-xl md:text-2xl text-zinc-100 font-medium leading-relaxed italic">
                                        "Detail visual dan kepekaan estetika tim Digikala luar biasa. Mereka berhasil menerjemahkan nilai kemewahan brand kami ke dalam pengalaman website yang begitu elegan dan fluid. Klien-klien high-end kami sangat terkesan."
                                    </blockquote>

                                    <div class="pt-2 border-t border-zinc-800 flex items-center justify-between">
                                        <div>
                                            <h4 class="text-base sm:text-lg font-bold text-white">Rina Kusuma</h4>
                                            <p class="text-xs sm:text-sm text-zinc-400">Managing Director — Emeror Architectural Atelier</p>
                                        </div>
                                        <div class="text-right hidden sm:block">
                                            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700">Proyek: Luxury Editorial Landing Page</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Budi Setiawan (KepiTalia) -->
                    <div class="testimonial-slide transition-all duration-500 opacity-0 translate-x-12 hidden" data-index="2">
                        <div class="bg-gradient-to-br from-zinc-900/90 via-[#0e1017] to-zinc-900/80 border border-zinc-800/90 rounded-3xl p-8 sm:p-12 shadow-2xl">
                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                                <!-- Large Professional Headshot -->
                                <div class="lg:col-span-4 flex justify-center">
                                    <div class="relative">
                                        <div class="w-40 h-40 sm:w-52 sm:h-52 rounded-2xl overflow-hidden border-2 border-white/20 shadow-2xl bg-zinc-800">
                                            <img 
                                                src="{{ asset('images/client-budi.jpg') }}" 
                                                alt="Budi Setiawan, Co-Founder KepiTalia" 
                                                class="w-full h-full object-cover"
                                            >
                                        </div>
                                        <div class="absolute -bottom-3 -right-3 px-3 py-1 bg-white text-black font-extrabold text-[11px] rounded-full shadow-lg">
                                            VERIFIED CLIENT
                                        </div>
                                    </div>
                                </div>

                                <!-- Quote in Indonesian -->
                                <div class="lg:col-span-8 space-y-6">
                                    <!-- Stars Rating -->
                                    <div class="flex items-center gap-1.5 text-amber-400">
                                        @for($i=0; $i<5; $i++)
                                        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        @endfor
                                    </div>

                                    <blockquote class="text-lg sm:text-xl md:text-2xl text-zinc-100 font-medium leading-relaxed italic">
                                        "Kecepatan dan performa website baru kami luar biasa cepat. Alur pemesanan jauh lebih seamless, dan tingkat konversi penjualan melonjak signifikan di bulan pertama peluncuran. Benar-benar investasi yang sangat berharga."
                                    </blockquote>

                                    <div class="pt-2 border-t border-zinc-800 flex items-center justify-between">
                                        <div>
                                            <h4 class="text-base sm:text-lg font-bold text-white">Budi Setiawan</h4>
                                            <p class="text-xs sm:text-sm text-zinc-400">Co-Founder & COO — KepiTalia Artisan Group</p>
                                        </div>
                                        <div class="text-right hidden sm:block">
                                            <span class="text-xs font-semibold px-3 py-1 rounded-full bg-zinc-800 text-zinc-300 border border-zinc-700">Proyek: D2C E-Commerce & Landing Page</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Carousel Dot Indicators -->
                <div class="flex items-center justify-center gap-2.5 pt-8">
                    <button type="button" onclick="goToTestimonial(0)" class="carousel-dot w-8 h-2 rounded-full bg-white transition-all duration-300" aria-label="Go to slide 1"></button>
                    <button type="button" onclick="goToTestimonial(1)" class="carousel-dot w-2 h-2 rounded-full bg-zinc-700 hover:bg-zinc-500 transition-all duration-300" aria-label="Go to slide 2"></button>
                    <button type="button" onclick="goToTestimonial(2)" class="carousel-dot w-2 h-2 rounded-full bg-zinc-700 hover:bg-zinc-500 transition-all duration-300" aria-label="Go to slide 3"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. FOUR-STEP PROCESS SECTION (Refined with subtle icons and detailed, well-structured steps) -->
    <section id="proses" class="py-24 sm:py-32 bg-[#0c0d12] border-t border-zinc-800/80 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-10 items-start">
                
                <!-- Process Intro -->
                <div class="lg:col-span-4 space-y-6">
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-bold tracking-[0.2em] text-zinc-400 uppercase">PROSES KERJA TERUJI</span>
                        <div class="w-10 h-[1.5px] bg-zinc-700"></div>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white leading-[1.18]">
                        Dari Ide Mentah Hingga Jadi Kenyataan.
                    </h2>
                    <p class="text-base text-zinc-400 leading-relaxed">
                        Kami menerapkan metodologi kerja yang transparan, terukur, dan disiplin agar setiap fase menghasilkan presisi terbaik tanpa keterlambatan.
                    </p>
                    <div class="pt-2">
                        <button type="button" onclick="openContactModal()" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-zinc-700 bg-zinc-900/60 text-white text-sm font-semibold hover:border-zinc-400 hover:bg-zinc-800 transition-all duration-200 group">
                            <span>Mulai Konsultasi Gratis</span>
                            <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- 4 Refined Structured Steps -->
                <div class="lg:col-span-8">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 relative">
                        
                        <!-- Step 01 -->
                        <div class="relative bg-zinc-900/40 border border-zinc-800/80 rounded-2xl p-7 flex flex-col justify-between hover:border-zinc-600 transition-all duration-300 group hover:bg-zinc-900/70">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="w-10 h-10 rounded-full bg-zinc-800 text-zinc-200 text-xs font-extrabold flex items-center justify-center border border-zinc-700 shadow-sm">01</span>
                                    <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-lg font-bold text-white">Discovery & Strategi</h3>
                                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                    Kami mendalami tujuan bisnis Anda, menganalisis kompetitor dan audiens sasaran, serta menyusun peta jalan solusi yang jelas.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-zinc-800/60 mt-4 text-[11px] text-zinc-500">
                                Output: Dokumen Project Brief, Arsitektur Konten & Sitemap
                            </div>
                        </div>

                        <!-- Step 02 -->
                        <div class="relative bg-zinc-900/40 border border-zinc-800/80 rounded-2xl p-7 flex flex-col justify-between hover:border-zinc-600 transition-all duration-300 group hover:bg-zinc-900/70">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="w-10 h-10 rounded-full bg-zinc-800 text-zinc-200 text-xs font-extrabold flex items-center justify-center border border-zinc-700 shadow-sm">02</span>
                                    <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-lg font-bold text-white">Desain Wireframe & Prototipe</h3>
                                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                    Eksplorasi visual UI/UX dalam Figma. Ferdi gacor alur interaksi intuitif yang selaras sempurna dengan identitas brand Anda.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-zinc-800/60 mt-4 text-[11px] text-zinc-500">
                                Output: Wireframe Interaktif, Desain UI High-Fidelity
                            </div>
                        </div>

                        <!-- Step 03 -->
                        <div class="relative bg-zinc-900/40 border border-zinc-800/80 rounded-2xl p-7 flex flex-col justify-between hover:border-zinc-600 transition-all duration-300 group hover:bg-zinc-900/70">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="w-10 h-10 rounded-full bg-zinc-800 text-zinc-200 text-xs font-extrabold flex items-center justify-center border border-zinc-700 shadow-sm">03</span>
                                    <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-lg font-bold text-white">Pengembangan Presisi</h3>
                                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                    Implementasi koding bersih dengan teknologi modern, keamanan ketat, responsif di seluruh layar, dan optimasi kecepatan ekstrem.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-zinc-800/60 mt-4 text-[11px] text-zinc-500">
                                Output: Clean Code Base, Integrasi CMS, Mobile Tuning
                            </div>
                        </div>

                        <!-- Step 04 -->
                        <div class="relative bg-zinc-900/40 border border-zinc-800/80 rounded-2xl p-7 flex flex-col justify-between hover:border-zinc-600 transition-all duration-300 group hover:bg-zinc-900/70">
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="w-10 h-10 rounded-full bg-zinc-800 text-zinc-200 text-xs font-extrabold flex items-center justify-center border border-zinc-700 shadow-sm">04</span>
                                    <div class="text-zinc-500 group-hover:text-zinc-200 transition-colors">
                                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                        </svg>
                                    </div>
                                </div>
                                <h3 class="text-lg font-bold text-white">Testing, Peluncuran & Support</h3>
                                <p class="text-xs sm:text-sm text-zinc-400 leading-relaxed">
                                    Pengujian fungsional lintas peramban, audit SEO teknis, deployment ke server langsung, serta pemantauan stabilitas berkelanjutan.
                                </p>
                            </div>
                            <div class="pt-4 border-t border-zinc-800/60 mt-4 text-[11px] text-zinc-500">
                                Output: Live Production Web, Dokumentasi, Garansi
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. FINAL CALL-TO-ACTION (CTA) BANNER (Dark, bold, with a large inviting CTA button and comprehensive contact info) -->
    <section id="kontak" class="py-24 sm:py-32 bg-[#06070a] border-t border-zinc-800 relative overflow-hidden">
        <!-- Deep ambient glow for CTA section -->
        <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-gradient-to-r from-blue-900/20 via-purple-900/20 to-indigo-900/20 rounded-full blur-[160px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 relative z-10">
            <div class="bg-gradient-to-b from-zinc-900/90 via-[#0e1017] to-zinc-950 border border-zinc-800/90 rounded-3xl p-8 sm:p-14 lg:p-16 shadow-2xl relative overflow-hidden">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Left: Bold Headline and Offer -->
                    <div class="lg:col-span-7 space-y-6">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-white text-xs font-semibold tracking-wider uppercase">
                            <span>KONSULTASI STRATEGIS BEBAS BIAYA</span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-[1.14]">
                            Wujudkan Website Impian yang Membawa Brand Anda ke Level Tertinggi.
                        </h2>

                        <p class="text-base sm:text-lg text-zinc-300 leading-relaxed max-w-xl">
                            Jangan biarkan calon pelanggan ragu karena website yang usang. Mulai konsultasi gratis dengan tim spesialis Digikala Studio hari ini.
                        </p>

                        <!-- Large Inviting CTA Button & WhatsApp Action -->
                        <div class="flex flex-wrap items-center gap-4 pt-3">
                            <button 
                                type="button" 
                                onclick="openContactModal()" 
                                class="inline-flex items-center justify-center gap-3 px-9 py-4 rounded-full bg-white text-black font-extrabold text-base hover:bg-zinc-200 transition-all duration-200 shadow-2xl shadow-white/10 group"
                            >
                                <span>Diskusikan Proyek Sekarang</span>
                                <svg class="w-5 h-5 transition-transform duration-200 group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </button>

                            <a 
                                href="https://wa.me/6281234567890?text=Halo%20Digikala%20Studio%2C%20saya%20ingin%20konsultasi%20mengenai%20proyek%20website%20kami." 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2.5 px-6 py-4 rounded-full border border-zinc-700 bg-zinc-900/70 text-zinc-200 font-semibold text-sm hover:text-white hover:border-zinc-500 hover:bg-zinc-800 transition-all"
                            >
                                <svg class="w-4 h-4 fill-[#25D366]" viewBox="0 0 32 32">
                                    <path d="M16.02 3a12.8 12.8 0 0 0-10.9 19.52L3.4 29l6.63-1.69A12.8 12.8 0 1 0 16.02 3Zm0 23.3c-1.9 0-3.76-.5-5.4-1.46l-.39-.23-3.94 1 .99-3.84-.25-.4a10.48 10.48 0 1 1 8.99 4.93Zm5.75-7.85c-.31-.16-1.84-.91-2.13-1.01-.29-.11-.5-.16-.72.16-.21.32-.82 1.01-1 1.22-.19.22-.37.24-.69.08-.32-.16-1.35-.5-2.57-1.59-.95-.84-1.59-1.88-1.78-2.2-.18-.32-.02-.49.14-.65.14-.14.32-.37.48-.56.16-.19.21-.32.32-.53.1-.21.05-.4-.03-.56-.08-.16-.72-1.73-.98-2.37-.26-.62-.52-.54-.72-.55l-.61-.01c-.21 0-.56.08-.85.4-.29.32-1.11 1.09-1.11 2.66 0 1.57 1.14 3.08 1.3 3.3.16.21 2.25 3.43 5.45 4.81.76.33 1.36.53 1.82.68.76.24 1.45.21 2 .13.61-.09 1.84-.75 2.1-1.48.26-.73.26-1.36.18-1.49-.08-.13-.29-.21-.61-.37Z"/>
                                </svg>
                                <span>Fast Chat via WhatsApp</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Comprehensive Studio Contact Details -->
                    <div class="lg:col-span-5 bg-black/50 border border-zinc-800 rounded-2xl p-7 space-y-6">
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider">Informasi Kontak Resmi</h4>
                        
                        <div class="space-y-4 text-xs sm:text-sm">
                            <div class="flex items-start gap-3.5">
                                <div class="w-8 h-8 rounded-lg bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-zinc-400 text-[11px] uppercase tracking-wider font-semibold">Studio & Kantor Operasional</span>
                                    <p class="text-zinc-200 leading-relaxed font-medium">
                                        Prosperity Tower Lt. 18, District 8 SCBD, Jl. Jend. Sudirman Kav. 52-53, Jakarta Selatan 12190
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3.5">
                                <div class="w-8 h-8 rounded-lg bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-zinc-400 text-[11px] uppercase tracking-wider font-semibold">Telepon & WhatsApp Bisnis</span>
                                    <a href="tel:+6281234567890" class="text-zinc-200 font-medium hover:text-white transition-colors block">+62 812 3456 7890</a>
                                    <span class="text-[11px] text-zinc-500">Senin – Sabtu, 09.00 – 18.00 WIB</span>
                                </div>
                            </div>

                            <div class="flex items-start gap-3.5">
                                <div class="w-8 h-8 rounded-lg bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 flex-shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <span class="block text-zinc-400 text-[11px] uppercase tracking-wider font-semibold">Email Korespondensi</span>
                                    <a href="mailto:hello@digikalastudio.com" class="text-zinc-200 font-medium hover:text-white transition-colors block">hello@digikalastudio.com</a>
                                    <a href="mailto:projects@digikalastudio.com" class="text-zinc-400 text-xs hover:text-white transition-colors block">projects@digikalastudio.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="pt-2 border-t border-zinc-800/80 flex items-center justify-between text-xs text-zinc-400">
                            <span>Waktu Respon Rata-rata:</span>
                            <span class="text-emerald-400 font-semibold">< 24 Jam Kerja</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. FOOTER (Dense, professional, multi-column sitemap, detailed contact info, social icons, and WhatsApp chat button) -->
    <footer class="bg-[#050608] border-t border-zinc-900 text-zinc-400 text-sm pt-20 pb-12">
        <div class="max-w-7xl mx-auto px-6 sm:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-16">
                
                <!-- Brand Column -->
                <div class="lg:col-span-4 space-y-5">
                    <a href="#beranda" class="flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-white flex items-center justify-center text-[#07080b] shadow-sm">
                            <svg viewBox="0 0 32 32" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 4C6 2.89543 6.89543 2 8 2H17C23.6274 2 29 7.37258 29 14C29 20.6274 23.6274 26 17 26H13L6 31V4Z" />
                                <path d="M12 8H16.5C19.5376 8 22 10.4624 22 13.5C22 16.5376 19.5376 19 16.5 19H12V8Z" fill="#ffffff" />
                            </svg>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-lg font-extrabold tracking-tight text-white leading-none">digikala</span>
                            <span class="text-[9px] font-bold tracking-[0.24em] text-zinc-400 uppercase leading-tight mt-0.5">studio</span>
                        </div>
                    </a>

                    <p class="text-xs sm:text-sm text-zinc-400 max-w-sm leading-relaxed">
                        Creative digital agency independen yang berdedikasi menciptakan website berdampak tinggi, landing page terukur, dan pengalaman UI/UX yang mengangkat reputasi brand ke panggung global.
                    </p>

                    <!-- Social Icons -->
                    <div class="flex items-center gap-3 pt-2 text-zinc-400">
                        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-zinc-800 bg-zinc-900/60 flex items-center justify-center hover:border-zinc-500 hover:text-white transition-colors" aria-label="LinkedIn">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-zinc-800 bg-zinc-900/60 flex items-center justify-center hover:border-zinc-500 hover:text-white transition-colors" aria-label="Instagram">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="https://dribbble.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-zinc-800 bg-zinc-900/60 flex items-center justify-center hover:border-zinc-500 hover:text-white transition-colors" aria-label="Dribbble">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm10.165 10.748c-.628-.157-2.394-.528-4.782-.236.425-1.127.817-2.28 1.168-3.447 1.76 1.01 3.036 2.502 3.614 4.093l-.001-.41zm-5.263-5.321c-.347 1.135-.733 2.259-1.149 3.354-2.731-.837-5.597-.936-6.427-.947.962-1.927 2.478-3.328 4.385-3.957 1.162.364 2.247.915 3.191 1.55zm-8.814 1.621c.884.015 3.528.114 6.136.903-.356.969-.739 1.954-1.144 2.946-3.864-1.282-7.533-.42-8.081-.275.409-1.396 1.472-2.585 3.089-3.574zm-6.088 6.952c.459-.118 3.633-.873 7.643.344-.199.55-.403 1.106-.612 1.666-4.521 1.341-6.735 4.375-6.938 4.673-.565-1.802-.459-4.793-.093-6.683zm2.501 8.243c.27-.373 2.164-2.915 6.44-4.274 1.258 3.393 1.831 6.55 1.986 7.472-3.418.172-6.529-1.149-8.426-3.198zm10.457 1.455c-.179-1.026-.749-3.985-1.96-7.251 2.213-.346 4.301-.019 4.908.103-.385 2.871-2.115 5.342-4.948 7.148z"/>
                            </svg>
                        </a>
                        <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-full border border-zinc-800 bg-zinc-900/60 flex items-center justify-center hover:border-zinc-500 hover:text-white transition-colors" aria-label="GitHub">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Sitemap: Solusi & Layanan -->
                <div class="lg:col-span-2 space-y-4">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Layanan</h4>
                    <ul class="space-y-2.5 text-xs sm:text-sm">
                        <li><a href="#layanan" class="hover:text-white transition-colors">Website Bisnis</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-colors">High-Converting Landing Page</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-colors">UI/UX Design System</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-colors">E-Commerce Platform</a></li>
                        <li><a href="#layanan" class="hover:text-white transition-colors">Web Maintenance SLA</a></li>
                    </ul>
                </div>

                <!-- Sitemap: Eksplorasi -->
                <div class="lg:col-span-2 space-y-4">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Navigasi</h4>
                    <ul class="space-y-2.5 text-xs sm:text-sm">
                        <li><a href="#beranda" class="hover:text-white transition-colors">Beranda Utama</a></li>
                        <li><a href="#portofolio" class="hover:text-white transition-colors">Studi Kasus Proyek</a></li>
                        <li><a href="#testimoni" class="hover:text-white transition-colors">Testimoni Klien</a></li>
                        <li><a href="#proses" class="hover:text-white transition-colors">Metodologi Kerja</a></li>
                        <li><a href="#kontak" class="hover:text-white transition-colors">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Sitemap: Newsletter & Info -->
                <div class="lg:col-span-4 space-y-4">
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Insight & Tren Digital</h4>
                    <p class="text-xs text-zinc-400 leading-relaxed">
                        Dapatkan wawasan seputar strategi desain website, psikologi konversi, dan tren teknologi langsung ke inbox Anda setiap bulan.
                    </p>
                    
                    <form onsubmit="handleNewsletter(event)" class="relative">
                        <input 
                            type="email" 
                            id="newsletterEmail" 
                            required 
                            placeholder="Alamat email bisnis Anda..." 
                            class="w-full bg-zinc-900/90 border border-zinc-800 text-xs rounded-xl pl-3.5 pr-10 py-3 text-zinc-200 placeholder-zinc-500 focus:outline-none focus:border-zinc-500 transition-colors"
                        >
                        <button type="submit" class="absolute right-1.5 top-1/2 -translate-y-1/2 w-7 h-7 rounded-lg bg-zinc-800 text-zinc-300 hover:text-white hover:bg-zinc-700 flex items-center justify-center transition-colors" aria-label="Berlangganan Newsletter">
                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </form>
                    <p id="newsletterSuccess" class="hidden text-[11px] text-emerald-400 font-medium">Terima kasih! Anda telah terdaftar dalam buletin eksklusif Digikala.</p>
                </div>
            </div>

            <!-- Bottom Legal Copyright Row -->
            <div class="pt-8 border-t border-zinc-900/90 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-zinc-500">
                <p>© {{ date('Y') }} Digikala Studio. Seluruh hak cipta dilindungi undang-undang.</p>
                <div class="flex items-center gap-6">
                    <a href="#beranda" class="hover:text-zinc-300 transition-colors">Kebijakan Privasi</a>
                    <span class="text-zinc-800">•</span>
                    <a href="#beranda" class="hover:text-zinc-300 transition-colors">Syarat & Ketentuan Layanan</a>
                    <span class="text-zinc-800">•</span>
                    <a href="#beranda" class="hover:text-zinc-300 transition-colors">Keamanan Data</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- INTERACTIVE CASE STUDY DETAIL MODAL (Opens when clicking View Case Study) -->
    <div id="projectModal" class="fixed inset-0 z-50 hidden bg-black/85 backdrop-blur-md flex items-center justify-center p-4 sm:p-6 overflow-y-auto">
        <div class="bg-zinc-950 border border-zinc-800/90 w-full max-w-3xl rounded-3xl overflow-hidden relative shadow-2xl animate-in fade-in zoom-in-95 duration-200 my-8">
            <button type="button" onclick="closeProjectModal()" class="absolute top-4 right-4 z-20 w-9 h-9 rounded-full bg-black/70 border border-white/20 text-white flex items-center justify-center hover:bg-black transition-colors" aria-label="Tutup Detail Studi Kasus">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Modal Showcase Banner -->
            <div class="aspect-[16/9] w-full overflow-hidden bg-black relative">
                <img id="modalProjectImage" src="" alt="" class="w-full h-full object-cover">
                <div class="absolute bottom-4 left-4 inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-black/80 backdrop-blur-md border border-white/20 text-xs font-semibold text-emerald-400" id="modalProjectMetric">
                </div>
            </div>

            <!-- Modal Content Body -->
            <div class="p-6 sm:p-10 space-y-6">
                <div>
                    <span id="modalProjectCategory" class="text-xs font-bold text-zinc-400 uppercase tracking-wider"></span>
                    <h3 id="modalProjectTitle" class="text-2xl sm:text-3xl font-extrabold text-white mt-1 mb-3"></h3>
                    <p id="modalProjectDesc" class="text-sm sm:text-base text-zinc-300 leading-relaxed"></p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 p-5 rounded-2xl bg-zinc-900/60 border border-zinc-800/80 text-xs">
                    <div>
                        <span class="text-zinc-500 block uppercase tracking-wider font-semibold">Tipe Klien</span>
                        <strong class="text-zinc-200 mt-1 block" id="modalProjectClient">Enterprise</strong>
                    </div>
                    <div>
                        <span class="text-zinc-500 block uppercase tracking-wider font-semibold">Ruang Lingkup</span>
                        <strong class="text-zinc-200 mt-1 block">Full Website & UX</strong>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <span class="text-zinc-500 block uppercase tracking-wider font-semibold">Hasil Terukur</span>
                        <strong class="text-emerald-400 mt-1 block" id="modalProjectResult">+200% Peningkatan</strong>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <button type="button" onclick="closeProjectModal(); openContactModal();" class="px-7 py-3 rounded-full bg-white text-black text-sm font-bold hover:bg-zinc-200 transition-colors shadow-lg">
                        Konsultasikan Proyek Serupa
                    </button>
                    <button type="button" onclick="closeProjectModal()" class="px-6 py-3 rounded-full border border-zinc-800 text-zinc-300 text-sm font-medium hover:bg-zinc-900 transition-colors">
                        Tutup Jendela
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT & CONSULTATION MODAL -->
    <div id="contactModal" class="fixed inset-0 z-50 hidden bg-black/85 backdrop-blur-md flex items-center justify-center p-4 overflow-y-auto">
        <div class="bg-zinc-950 border border-zinc-800/90 w-full max-w-lg rounded-3xl p-6 sm:p-9 relative shadow-2xl animate-in fade-in zoom-in-95 duration-200 my-8">
            <button type="button" onclick="closeContactModal()" class="absolute top-5 right-5 text-zinc-400 hover:text-white" aria-label="Tutup formulir kontak">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <div class="mb-6 space-y-1">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 text-white text-[11px] font-semibold tracking-wider uppercase">
                    KONSULTASI GRATIS
                </div>
                <h3 class="text-2xl font-bold text-white pt-2">Diskusikan Proyek Anda</h3>
                <p class="text-xs sm:text-sm text-zinc-400">Ceritakan kebutuhan bisnis Anda. Tim konsultan Digikala Studio akan merespons dalam 24 jam kerja.</p>
            </div>

            <form onsubmit="handleContactSubmit(event)" class="space-y-4">
                <div>
                    <label class="block text-xs font-semibold text-zinc-300 mb-1">Nama Lengkap</label>
                    <input type="text" required placeholder="Contoh: Budi Pratama" class="w-full bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-2.5 text-sm text-white placeholder-zinc-500 focus:outline-none focus:border-zinc-400 transition-colors">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-zinc-300 mb-1">Email Bisnis</label>
                        <input type="email" required placeholder="nama@perusahaan.com" class="w-full bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-2.5 text-sm text-white placeholder-zinc-500 focus:outline-none focus:border-zinc-400 transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-zinc-300 mb-1">No. WhatsApp</label>
                        <input type="tel" required placeholder="08123456789" class="w-full bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-2.5 text-sm text-white placeholder-zinc-500 focus:outline-none focus:border-zinc-400 transition-colors">
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-zinc-300 mb-1">Layanan yang Dibutuhkan</label>
                    <select class="w-full bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-zinc-400 transition-colors">
                        <option value="Website Bisnis">Website Bisnis / Company Profile</option>
                        <option value="Landing Page">High-Converting Landing Page</option>
                        <option value="UI/UX Design">UI/UX Design & Prototype Sistem</option>
                        <option value="E-Commerce">Website E-Commerce Skala Penuh</option>
                        <option value="Custom Proyek">Kebutuhan Digital Kustom</option>
                    </select>
                </div>
                <div>
                    <label class="block text-xs font-semibold text-zinc-300 mb-1">Ceritakan Gambaran Proyek Anda</label>
                    <textarea rows="3" required placeholder="Jelaskan tujuan, referensi, dan target waktu peluncuran..." class="w-full bg-zinc-900 border border-zinc-800 rounded-xl px-4 py-2.5 text-sm text-white placeholder-zinc-500 focus:outline-none focus:border-zinc-400 transition-colors resize-none"></textarea>
                </div>
                <button type="submit" id="submitBtn" class="w-full mt-2 inline-flex items-center justify-center gap-2 py-3.5 px-6 rounded-full bg-white text-black font-bold text-sm hover:bg-zinc-200 transition-all shadow-xl">
                    <span>Kirim Pesan Sekarang</span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>

    <!-- TOAST NOTIFICATION -->
    <div id="toastNotification" class="fixed bottom-6 right-6 z-50 hidden max-w-sm bg-zinc-900 border border-zinc-700 text-white p-4 rounded-2xl shadow-2xl flex items-center gap-3 animate-in fade-in slide-in-from-bottom-5">
        <div class="w-9 h-9 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center flex-shrink-0">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M5 13l4 4L19 7"/>
            </svg>
        </div>
        <div>
            <h5 class="text-xs font-bold text-white" id="toastTitle">Berhasil Terkirim</h5>
            <p class="text-xs text-zinc-400" id="toastMessage">Pesan Anda telah kami terima.</p>
        </div>
    </div>

    <!-- PROMINENT FLOATING WHATSAPP CHAT BUTTON IN CORNER -->
    <a 
        href="https://wa.me/6281234567890?text=Halo%20Digikala%20Studio%2C%20saya%20ingin%20konsultasi%20tentang%20proyek%20website." 
        target="_blank" 
        rel="noopener noreferrer" 
        aria-label="Chat Digikala Studio melalui WhatsApp" 
        class="whatsapp-float group inline-flex items-center gap-2.5 rounded-full bg-[#25D366] px-5 py-3.5 text-sm font-bold text-white shadow-2xl shadow-[#25D366]/30 transition-all duration-300 hover:scale-105 hover:bg-[#20bd5a] focus:outline-none focus:ring-4 focus:ring-[#25D366]/40"
    >
        <span class="relative flex h-3 w-3">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span>
        </span>
        <svg class="h-5 w-5 fill-current" viewBox="0 0 32 32" aria-hidden="true">
            <path d="M16.02 3a12.8 12.8 0 0 0-10.9 19.52L3.4 29l6.63-1.69A12.8 12.8 0 1 0 16.02 3Zm0 23.3c-1.9 0-3.76-.5-5.4-1.46l-.39-.23-3.94 1 .99-3.84-.25-.4a10.48 10.48 0 1 1 8.99 4.93Zm5.75-7.85c-.31-.16-1.84-.91-2.13-1.01-.29-.11-.5-.16-.72.16-.21.32-.82 1.01-1 1.22-.19.22-.37.24-.69.08-.32-.16-1.35-.5-2.57-1.59-.95-.84-1.59-1.88-1.78-2.2-.18-.32-.02-.49.14-.65.14-.14.32-.37.48-.56.16-.19.21-.32.32-.53.1-.21.05-.4-.03-.56-.08-.16-.72-1.73-.98-2.37-.26-.62-.52-.54-.72-.55l-.61-.01c-.21 0-.56.08-.85.4-.29.32-1.11 1.09-1.11 2.66 0 1.57 1.14 3.08 1.3 3.3.16.21 2.25 3.43 5.45 4.81.76.33 1.36.53 1.82.68.76.24 1.45.21 2 .13.61-.09 1.84-.75 2.1-1.48.26-.73.26-1.36.18-1.49-.08-.13-.29-.21-.61-.37Z"/>
        </svg>
        <span>Chat WhatsApp</span>
    </a>

    <!-- JAVASCRIPT CONTROLLERS -->
    <script>
        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        // Contact Modal Controls
        function openContactModal() {
            document.getElementById('contactModal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeContactModal() {
            document.getElementById('contactModal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        // Project Case Study Modal Controls
        function openProjectDetails(title, category, desc, imageSrc, metricText, clientType) {
            document.getElementById('modalProjectTitle').textContent = title;
            document.getElementById('modalProjectCategory').textContent = category;
            document.getElementById('modalProjectDesc').textContent = desc;
            document.getElementById('modalProjectImage').src = imageSrc;
            document.getElementById('modalProjectImage').alt = title;
            document.getElementById('modalProjectMetric').textContent = metricText || 'Case Study';
            document.getElementById('modalProjectClient').textContent = clientType || 'Corporate Client';
            document.getElementById('modalProjectResult').textContent = metricText || 'Optimal Outcome';
            document.getElementById('projectModal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeProjectModal() {
            document.getElementById('projectModal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        // Contact Form Submission Handler
        function handleContactSubmit(e) {
            e.preventDefault();
            const btn = document.getElementById('submitBtn');
            btn.innerHTML = '<span>Mengirim Formulir...</span>';
            btn.disabled = true;

            setTimeout(() => {
                btn.innerHTML = '<span>Terkirim!</span>';
                setTimeout(() => {
                    closeContactModal();
                    btn.innerHTML = '<span>Kirim Pesan Sekarang</span>';
                    btn.disabled = false;
                    e.target.reset();
                    showToast('Pesan Berhasil Dikirim!', 'Tim konsultan Digikala Studio akan segera menghubungi WhatsApp/Email Anda.');
                }, 700);
            }, 900);
        }

        // Newsletter Handler
        function handleNewsletter(e) {
            e.preventDefault();
            const emailInput = document.getElementById('newsletterEmail');
            const successText = document.getElementById('newsletterSuccess');
            successText.classList.remove('hidden');
            showToast('Berhasil Berlangganan!', 'Anda telah terdaftar untuk menerima analisis tren digital bulanan.');
            emailInput.value = '';
            setTimeout(() => {
                successText.classList.add('hidden');
            }, 5000);
        }

        // Toast Notification System
        function showToast(title, message) {
            const toast = document.getElementById('toastNotification');
            document.getElementById('toastTitle').textContent = title;
            document.getElementById('toastMessage').textContent = message;
            toast.classList.remove('hidden');
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 4500);
        }

        // Portfolio Category Filter
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
                if (filter === 'all' || (categories && categories.includes(filter))) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // Testimonials Carousel Logic
        let currentTestimonial = 0;
        const testimonialSlides = document.querySelectorAll('.testimonial-slide');
        const testimonialDots = document.querySelectorAll('.carousel-dot');
        let autoSlideTimer = null;

        function showTestimonial(index) {
            currentTestimonial = (index + testimonialSlides.length) % testimonialSlides.length;

            testimonialSlides.forEach((slide, i) => {
                if (i === currentTestimonial) {
                    slide.classList.remove('hidden');
                    setTimeout(() => {
                        slide.classList.remove('opacity-0', 'translate-x-12');
                        slide.classList.add('opacity-100', 'translate-x-0');
                    }, 20);
                } else {
                    slide.classList.add('opacity-0', 'translate-x-12');
                    slide.classList.remove('opacity-100', 'translate-x-0');
                    setTimeout(() => {
                        slide.classList.add('hidden');
                    }, 300);
                }
            });

            testimonialDots.forEach((dot, i) => {
                if (i === currentTestimonial) {
                    dot.classList.add('w-8', 'bg-white');
                    dot.classList.remove('w-2', 'bg-zinc-700');
                } else {
                    dot.classList.remove('w-8', 'bg-white');
                    dot.classList.add('w-2', 'bg-zinc-700');
                }
            });
        }

        function nextTestimonial() {
            showTestimonial(currentTestimonial + 1);
            resetAutoSlide();
        }

        function prevTestimonial() {
            showTestimonial(currentTestimonial - 1);
            resetAutoSlide();
        }

        function goToTestimonial(index) {
            showTestimonial(index);
            resetAutoSlide();
        }

        function startAutoSlide() {
            autoSlideTimer = setInterval(() => {
                showTestimonial(currentTestimonial + 1);
            }, 7000);
        }

        function resetAutoSlide() {
            if (autoSlideTimer) clearInterval(autoSlideTimer);
            startAutoSlide();
        }

        // Initialize Auto Slide & Pause on Hover
        startAutoSlide();
        const carouselTrack = document.getElementById('testimonialCarouselTrack');
        if (carouselTrack) {
            carouselTrack.addEventListener('mouseenter', () => {
                if (autoSlideTimer) clearInterval(autoSlideTimer);
            });
            carouselTrack.addEventListener('mouseleave', () => {
                startAutoSlide();
            });
        }

        // Global Modal Event Listeners
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
</body>
</html>