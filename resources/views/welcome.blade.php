{{-- 
    resources/views/welcome.blade.php
    DIGIKALA STUDIO - HALAMAN UTAMA
    
    Arsitektur Pemisahan:
    1. PHP / HTML / Blade (File ini & wishlist.blade.php):
       - Bertanggung jawab atas struktur semantik HTML5, template inheritance, modularitas (@include),
         asset helpers ({{ asset(...) }}), dan data dinamis backend.
       - Bebas dari inline styles, murni mengacu pada class CSS.
    2. CSS (public/css/style.css):
       - Bertanggung jawab penuh atas tampilan visual, palet monokrom (hitam & putih),
         animasi, layout responsif, dan teknik Sticky Scroll Pinning.
--}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Digikala Studio - Digital Agency & Software Development</title>
    <meta name="description" content="Digikala Studio merancang website eksklusif, sistem kustom, dan pendampingan riset teknologi dengan estetika monokrom modern dan performa tinggi.">

    {{-- Favicon Website (Logo Tab Browser saat aktif maupun ditinggal) --}}
    <link rel="icon" type="image/png" href="{{ asset('images/image.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/image.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/image.png') }}">

    {{-- Pemanggilan CSS Eksternal (Terpisah dari kode Blade) --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
</head>
<body>

    <!-- =======================================================================
         1. HEADER (Sticky Navigation)
         ======================================================================= -->
    <header class="site-header" id="header">
        <div class="container header-container">
            <a href="#beranda" class="header-logo" title="Digikala Studio">
                <img src="{{ asset('images/image.png') }}" alt="Digikala Studio">
                <div class="logo-text">
                    <span class="logo-text-top">Digikala</span>
                    <span class="logo-text-bottom">studio</span>
                </div>
            </a>
            <nav class="header-nav" aria-label="Navigasi Utama">
                <a href="#beranda" class="nav-link active">Beranda</a>
                <a href="#portofolio" class="nav-link">Portofolio</a>
                <a href="#layanan" class="nav-link">Layanan</a>
                <a href="#proses" class="nav-link">Proses Kerja</a>
                <a href="#wishlist" class="nav-link">Pilih Level Website</a>
                <a href="#faq" class="nav-link">FAQ</a>
                <a href="#testimoni" class="nav-link">Testimoni</a>
                <a href="#kontak" class="nav-link">Kontak</a>
                <a href="#tentang" class="nav-link">Tentang Kami</a>
            </nav>

            <div class="header-action">
                <a href="#kolaborasi" class="btn btn-outline btn-sm">Diskusikan Proyek </a>
            </div>

            <!-- Tombol Hamburger Mobile -->
            <button type="button" class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Buka Menu Navigasi" aria-expanded="false">
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
                <span class="hamburger-bar"></span>
            </button>
        </div>

        <!-- Mobile Navigation Drawer Overlay -->
        <div class="mobile-nav-drawer" id="mobileNavDrawer" aria-hidden="true">
            <div class="mobile-nav-backdrop" id="mobileNavBackdrop"></div>
            <div class="mobile-nav-panel">
                <div class="mobile-nav-header">
                    <div class="mobile-nav-brand">
                        <img src="{{ asset('images/image.png') }}" alt="Digikala Studio">
                        <div class="logo-text">
                            <span class="logo-text-top">Digikala</span>
                            <span class="logo-text-bottom">studio</span>
                        </div>
                    </div>
                    <button type="button" class="mobile-nav-close" id="mobileNavClose" aria-label="Tutup Menu">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>

                <nav class="mobile-nav-links" aria-label="Navigasi Menu Mobile">
                    <a href="#beranda" class="mobile-nav-link active">
                        <span class="nav-num">01</span>
                        <span class="nav-text">Beranda</span>
                    </a>
                    <a href="#portofolio" class="mobile-nav-link">
                        <span class="nav-num">02</span>
                        <span class="nav-text">Portofolio</span>
                    </a>
                    <a href="#layanan" class="mobile-nav-link">
                        <span class="nav-num">03</span>
                        <span class="nav-text">Layanan</span>
                    </a>
                    <a href="#proses" class="mobile-nav-link">
                        <span class="nav-num">04</span>
                        <span class="nav-text">Proses Kerja</span>
                    </a>
                    <a href="#wishlist" class="mobile-nav-link">
                        <span class="nav-num">05</span>
                        <span class="nav-text">Pilih Level Website</span>
                    </a>
                    <a href="#faq" class="mobile-nav-link">
                        <span class="nav-num">06</span>
                        <span class="nav-text">FAQ</span>
                    </a>
                    <a href="#testimoni" class="mobile-nav-link">
                        <span class="nav-num">07</span>
                        <span class="nav-text">Testimoni Klien</span>
                    </a>
                    <a href="#kontak" class="mobile-nav-link">
                        <span class="nav-num">08</span>
                        <span class="nav-text">Kontak Resmi</span>
                    </a>
                    <a href="#tentang" class="mobile-nav-link">
                        <span class="nav-num">09</span>
                        <span class="nav-text">Tentang Kami</span>
                    </a>
                </nav>

                <div class="mobile-nav-footer">
                    <a href="#kolaborasi" class="btn btn-primary btn-mobile-cta">Mulai Proyek Sekarang </a>
                    <a href="https://wa.me/6285252170250?text=Halo%20Digikala%20Studio" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-mobile-wa">
                        💬 WhatsApp Fast Chat
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
<!-- =======================================================================
     2. BERANDA (Hero Section - Minimal Copy & 3D Floating Portfolio Devices)
     ======================================================================= -->
<section class="hero-section" id="beranda">

    <!-- 1. Overlay Gelap, Grid & Sorotan Ambient -->
    <div class="hero-overlay"></div>
    <div class="hero-ambient-spotlight"></div>
    <div class="hero-dot-pattern"></div>
    <div class="hero-noise-texture"></div>

    <!-- 2. Konten Beranda (2 Kolom: Teks Ringkas di Kiri + 3D Laptop & HP Portofolio di Kanan) -->
    <div class="container hero-container">
        <div class="hero-grid-layout">

            <!-- SISI KIRI: Teks Utama yang Bersih & Tidak Penuh -->
            <div class="hero-content">
                <div class="hero-status-pill">
                    <span class="hero-status-dot"></span>
                    <span class="hero-status-code">DIGIKALA STUDIO</span>
                </div>

                <h1 class="hero-headline">
                    Kami merancang website yang membuat <span class="hero-headline-highlight">brand Anda lebih bernilai.</span>
                </h1>

                <p class="hero-subheadline">
                    Solusi pengembangan website bisnis, sistem informasi kustom, serta pendampingan riset &amp; skripsi IT secara terarah, transparan, dan berkualitas.
                </p>

                <div class="hero-cta">
                    <a href="#kolaborasi" class="btn btn-primary hero-btn-primary">
                        <span>Mulai Proyek</span>
                        <span class="hero-btn-arrow">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
                        </span>
                    </a>
                    <a href="#portofolio" class="btn btn-outline hero-btn-glass">
                        <span>Lihat Portofolio</span>
                    </a>
                </div>
            </div>

            <!-- SISI KANAN: Mockup 3D Timbul (Laptop & Handphone Berisi Gambar Portofolio Kita) -->
            <div class="hero-device-stage" id="heroDeviceStage">
                <!-- Cahaya Belakang (Backlight Glow agar Laptop & HP makin timbul) -->
                <div class="hero-device-glow"></div>

                <div class="hero-devices-3d-wrap" id="heroDevices3dWrap">

                    <!-- 1. MOCKUP LAPTOP (Utama - Timbul 3D) -->
                    <div class="hero-laptop-mockup">
                        <div class="hero-laptop-lid">
                            <div class="hero-laptop-camera"></div>
                            <!-- Browser Header di Dalam Layar Laptop -->
                            <div class="hero-laptop-browser">
                                <div class="hero-browser-dots">
                                    <span></span><span></span><span></span>
                                </div>
                                <div class="hero-browser-url">
                                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    <span id="heroLaptopUrl">sim-seragam.smpn3rajadesa.sch.id</span>
                                </div>
                                <span class="hero-browser-badge" id="heroLaptopBadge">LIVE PORTOFOLIO</span>
                            </div>

                            <!-- Layar Laptop (Berisi Slide Gambar Portofolio Asli) -->
                            <div class="hero-laptop-screen">
                                <img src="{{ asset('images/portofolio_Sangga.jpeg') }}" alt="Sistem Informasi Seragam SMPN 3 Rajadesa" class="hero-screen-img active" data-slide="0">
                                <img src="{{ asset('images/portfolio-kopi.jpg') }}" alt="Ken's Coffee House Roastery" class="hero-screen-img" data-slide="1">
                                <img src="{{ asset('images/portfolio-pesantren.png') }}" alt="Pondok Pesantren Hidayatul Muhajirin" class="hero-screen-img" data-slide="2">
                                <img src="{{ asset('images/portfolio-sekolah.png') }}" alt="SD Negeri 258/VI Rejo Sari" class="hero-screen-img" data-slide="3">
                            </div>
                        </div>
                        <!-- Bibir Bawah / Keyboard Base Laptop -->
                        <div class="hero-laptop-base">
                            <div class="hero-laptop-notch"></div>
                        </div>
                    </div>

                    <!-- 2. MOCKUP HANDPHONE / SMARTPHONE (Timbul di Depan Kanan Bawah) -->
                    <div class="hero-phone-mockup">
                        <div class="hero-phone-notch">
                            <span class="hero-phone-speaker"></span>
                            <span class="hero-phone-cam"></span>
                        </div>
                        <div class="hero-phone-screen">
                            <img src="{{ asset('images/portfolio-kopi.jpg') }}" alt="Mobile Preview Ken's Coffee" class="hero-phone-img active" data-phone-slide="0">
                            <img src="{{ asset('images/portfolio-pesantren.png') }}" alt="Mobile Preview Pondok Pesantren" class="hero-phone-img" data-phone-slide="1">
                            <img src="{{ asset('images/portfolio-sekolah.png') }}" alt="Mobile Preview Portal Sekolah" class="hero-phone-img" data-phone-slide="2">
                            <img src="{{ asset('images/portofolio_Sangga.jpeg') }}" alt="Mobile Preview SIM Seragam" class="hero-phone-img" data-phone-slide="3">
                        </div>
                        <div class="hero-phone-home-bar"></div>
                    </div>

                    <!-- Floating Label Proyek Aktif (Timbul di Kiri Bawah Laptop) -->
                    <a href="#portofolio" class="hero-floating-project-card" id="heroFloatingCard">
                        <span class="hero-floating-dot"></span>
                        <div class="hero-floating-info">
                            <span class="hero-floating-label">KARYA UNGGULAN</span>
                            <strong class="hero-floating-title" id="heroFloatingTitle">SIM Seragam &amp; WA Gateway</strong>
                        </div>
                        <span class="hero-floating-arrow">↗</span>
                    </a>
                </div>

                <!-- Navigasi Pemilih Proyek Portofolio di Mockup -->
                <div class="hero-mockup-switcher" role="tablist" aria-label="Pilih Tampilan Portofolio">
                    <button type="button" class="hero-switch-btn active" data-hero-slide="0" data-url="sim-seragam.smpn3rajadesa.sch.id" data-title="SIM Seragam &amp; WA Gateway">
                        <span class="switch-num">01</span>
                        <span class="switch-name">SIM Seragam</span>
                    </button>
                    <button type="button" class="hero-switch-btn" data-hero-slide="1" data-url="ferdianbimastya.ifree.page" data-title="Ken's Coffee House">
                        <span class="switch-num">02</span>
                        <span class="switch-name">Ken's Coffee</span>
                    </button>
                    <button type="button" class="hero-switch-btn" data-hero-slide="2" data-url="pondokmumodern.iblogger.org" data-title="Ponpes Modern PSB">
                        <span class="switch-num">03</span>
                        <span class="switch-name">Ponpes PSB</span>
                    </button>
                    <button type="button" class="hero-switch-btn" data-hero-slide="3" data-url="sekolahdasarnegeri.free.je" data-title="Portal Akademik SDN">
                        <span class="switch-num">04</span>
                        <span class="switch-name">Portal Sekolah</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>


        <!-- =======================================================================
             3. PORTOFOLIO (Sticky Scroll Pinning / Section Pinning)
             ======================================================================= -->
        <!-- =======================================================================
             3. PORTOFOLIO (Cascading Stacked Showcase & Category Filter)
             ======================================================================= -->
        <section class="portfolio-section" id="portofolio">
            <div class="container portfolio-container">
                
                <!-- Header Kontrol Showcase: Status Kategori & Jumlah Proyek di Posisi Atas (Membentang Penuh) -->
                <div class="showcase-nav-bar">
                    <div class="showcase-category-tag">
                        <span class="indicator-live-dot"></span>
                        <span id="activeCategoryName">Semua Proyek</span>
                    </div>
                    <div class="showcase-nav-controls">
                        <span class="showcase-counter" id="showcaseCounter">Menampilkan 6 Proyek Unggulan</span>
                    </div>
                </div>

                <div class="portfolio-layout">
                    
                    {{-- SISI KIRI: Sidebar Kategori & Filter Navigasi --}}
                    <aside class="portfolio-pinned-sidebar">
                        <span class="sidebar-badge">SHOWCASE</span>
                        <h2 class="sidebar-title">Portofolio</h2>
                        <p class="sidebar-desc">
                            Karya-karya terpilih yang dirancang dengan presisi kode dan visual berkelas tinggi untuk berbagai industri.
                        </p>

                        <div class="portfolio-categories-list" role="tablist" aria-label="Filter Portofolio">
                            <button type="button" class="cat-item active" data-category="all" role="tab" aria-selected="true">
                                <span class="cat-label">Semua Proyek</span>
                                <div class="cat-meta">
                                    <span class="cat-count">{{ $portfolios->count() }}</span>
                                    <span class="cat-dot"></span>
                                </div>
                            </button>
                            <button type="button" class="cat-item" data-category="saas" role="tab" aria-selected="false">
                                <span class="cat-label">Platform SaaS & Web App</span>
                                <div class="cat-meta">
                                    <span class="cat-count">{{ $portfolios->where('category', 'saas')->count() }}</span>
                                    <span class="cat-dot"></span>
                                </div>
                            </button>
                            <button type="button" class="cat-item" data-category="branding" role="tab" aria-selected="false">
                                <span class="cat-label">E-Commerce & Branding</span>
                                <div class="cat-meta">
                                    <span class="cat-count">{{ $portfolios->where('category', 'branding')->count() }}</span>
                                    <span class="cat-dot"></span>
                                </div>
                            </button>
                            <button type="button" class="cat-item" data-category="academic" role="tab" aria-selected="false">
                                <span class="cat-label">Sistem Riset & Edukasi</span>
                                <div class="cat-meta">
                                    <span class="cat-count">{{ $portfolios->where('category', 'academic')->count() }}</span>
                                    <span class="cat-dot"></span>
                                </div>
                            </button>
                        </div>

                        <div class="sidebar-cta-wrap">
                            <a href="#kolaborasi" class="btn btn-outline btn-sm">Konsultasi Desain Serupa </a>
                        </div>
                    </aside>

                    {{-- SISI KANAN: Kartu Proyek Sticky Scroll Pinning --}}
                    <div class="portfolio-showcase-stage">
                        
                        <!-- Wadah Aliran Kartu Sticky Scroll Pinning (Menumpuk Otomatis Saat Di-Scroll) -->
                        <div class="portfolio-cards-stream" id="portfolioCardsStream">
                            @forelse($portfolios as $index => $portfolio)
                            <article class="portfolio-card" data-category="{{ $portfolio->category }}" data-index="{{ $index }}">
                                <!-- Top Browser Chrome Mockup -->
                                <div class="mockup-browser-header">
                                    <div class="mockup-dots">
                                        <span class="mockup-dot red"></span>
                                        <span class="mockup-dot yellow"></span>
                                        <span class="mockup-dot green"></span>
                                    </div>
                                    <div class="mockup-address-bar">
                                        <span class="lock-icon">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                        </span>
                                        <span class="address-text">{{ $portfolio->browser_url ?: 'digikalastudio.com' }}</span>
                                    </div>
                                    <span class="mockup-window-tag">{{ $portfolio->window_tag ?: 'Live Project' }}</span>
                                </div>

                                <div class="portfolio-card-img-wrap">
                                    <img src="{{ $portfolio->image_url }}" alt="{{ $portfolio->title }}" loading="lazy">
                                </div>

                                <div class="portfolio-card-meta">
                                    @if(!empty($portfolio->tags))
                                    <div class="card-tags">
                                        @foreach($portfolio->tags as $tag)
                                            <span class="tag-pill">{{ $tag }}</span>
                                        @endforeach
                                    </div>
                                    @endif
                                    <h3>{{ $portfolio->title }}</h3>

                                    @php
                                        $paragraphs = array_values(array_filter(array_map('trim', explode("\n", str_replace("\r", "", $portfolio->description)))));
                                    @endphp

                                    @if(count($paragraphs) > 2)
                                        <div id="desc-card-{{ $index }}" class="card-desc-container collapsible-text">
                                            <p>{{ $paragraphs[0] }}</p>
                                            <p>{{ $paragraphs[1] }}</p>
                                            <p class="more-paragraphs">{{ implode(' ', array_slice($paragraphs, 2)) }}</p>
                                        </div>
                                        <span class="btn-read-more" onclick="toggleReadMore('desc-card-{{ $index }}', this)">Baca Selengkapnya ↓</span>
                                    @else
                                        <p>{{ $portfolio->description }}</p>
                                    @endif
                                </div>

                                <!-- Floating Bottom Action Bar -->
                                <div class="card-bottom-bar backdrop-blur-md">
                                    <div class="bottom-bar-info">
                                        <span class="badge-status {{ $portfolio->is_live ? 'live' : '' }}">
                                            <span class="status-dot {{ $portfolio->is_live ? 'live-pulse' : '' }}"></span>
                                            {{ $portfolio->badge_status ?? ($portfolio->is_live ? 'Live Website' : 'Tahun 2026') }}
                                        </span>
                                    </div>
                                    <div class="bottom-bar-action">
                                        <a href="{{ $portfolio->project_url ?? '#kolaborasi' }}" 
                                           @if(str_starts_with($portfolio->project_url ?? '', 'http')) target="_blank" rel="noopener noreferrer" @endif
                                           class="btn-card-action">
                                            <span>{{ $portfolio->action_label ?? 'Eksplorasi Proyek' }}</span>
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                            @empty
                            <div style="padding: 40px; text-align: center; color: #888;">
                                Belum ada portofolio yang dipublikasikan. Tambahkan melalui panel admin.
                            </div>
                            @endforelse
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- =======================================================================
             4. LAYANAN KAMI
             ======================================================================= -->
        <section class="services-section" id="layanan">
            <div class="services-ambient-glow"></div>
            <div class="container">
                <div class="section-header-center">
                    <div class="services-pill-badge">
                        <span class="services-pill-dot"></span>
                        <span>[ 04 // CAPABILITIES & ARCHITECTURE ]</span>
                    </div>
                    <h2 class="section-title">Solusi & Layanan Spesialis</h2>
                    <p class="section-desc">
                        Rekayasa digital end-to-end berstandar industri modern untuk akselerasi pertumbuhan bisnis dan penyelesaian riset teknologi Anda secara terukur.
                    </p>

                    <!-- Trust & Capability Highlights Strip -->
                    <div class="services-trust-strip">
                        <div class="services-trust-item">
                            <span class="services-trust-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                            </span>
                            <span>100% Custom Architecture</span>
                        </div>
                        <div class="services-trust-item">
                            <span class="services-trust-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                            </span>
                            <span>99+ Core Web Vitals</span>
                        </div>
                        <div class="services-trust-item">
                            <span class="services-trust-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                            </span>
                            <span>Clean & Documented Code</span>
                        </div>
                        <div class="services-trust-item">
                            <span class="services-trust-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            </span>
                            <span>Garansi & Support Teknis</span>
                        </div>
                    </div>
                </div>

                <div class="services-grid">
<<<<<<< HEAD
                    <!-- Service 1 -->
                    <div class="service-card" data-service-target="website-bisnis">
                        <div class="service-card-glow"></div>
                        <div class="service-card-topline"></div>

                        <div class="service-header">
                            <div class="service-header-left">
                                <div class="service-icon-box">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                                    </svg>
                                </div>
                                <span class="service-tier-badge">BRAND & CORPORATE</span>
                            </div>
                            <div class="service-index-wrap">
                                <span class="service-code">SRV // 01</span>
                                <span class="service-number">01</span>
                            </div>
                        </div>

                        <div class="service-body">
                            <span class="service-category">WEB ARCHITECTURE</span>
                            <h3 class="service-title">Website Bisnis & Korporat</h3>
                            <p class="service-desc">
                                Membangun landing page dan company profile berkecepatan tinggi yang mengonversi pengunjung menjadi klien setia, dengan reputasi brand yang kuat.
                            </p>
                        </div>

                        <!-- Key Deliverable Metrics -->
                        <div class="service-metrics-grid">
                            <div class="service-metric-box">
                                <span class="service-metric-label">ESTIMASI RILIS</span>
                                <span class="service-metric-value">1 – 3 Minggu</span>
                            </div>
                            <div class="service-metric-box">
                                <span class="service-metric-label">TARGET PERFORMA</span>
                                <span class="service-metric-value">99+ PageSpeed</span>
                            </div>
                        </div>

                        <!-- Tech Stack Pills -->
                        <div class="service-tech-stack">
                            <span class="service-tech-pill">Laravel</span>
                            <span class="service-tech-pill">Custom UI</span>
                            <span class="service-tech-pill">Technical SEO</span>
                            <span class="service-tech-pill">CMS Ready</span>
                        </div>

                        <ul class="service-features">
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Desain eksklusif tanpa template generik</span>
                            </li>
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Optimalisasi SEO On-Page & Core Web Vitals</span>
                            </li>
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Responsif sempurna di iOS, Android, & Desktop</span>
                            </li>
                        </ul>

                        <div class="service-card-footer">
                            <a href="#wishlist" class="service-link-action">
                                <div class="service-link-text">
                                    <span class="service-link-main">Jelajahi Paket Website</span>
                                    <span class="service-link-sub">Lihat rincian modul & investasi</span>
                                </div>
                                <span class="service-link-arrow">→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Service 2 (Featured / High Demand) -->
                    <div class="service-card service-card-featured" data-service-target="aplikasi-web">
                        <div class="service-card-glow"></div>
                        <div class="service-card-topline"></div>

                        <div class="service-header">
                            <div class="service-header-left">
                                <div class="service-icon-box">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                        <polyline points="2 17 12 22 22 17"></polyline>
                                        <polyline points="2 12 12 17 22 12"></polyline>
                                    </svg>
                                </div>
                                <span class="service-tier-badge service-tier-popular">
                                    <span class="tier-star">★</span> PALING DIMINATI
                                </span>
                            </div>
                            <div class="service-index-wrap">
                                <span class="service-code">SRV // 02</span>
                                <span class="service-number">02</span>
                            </div>
                        </div>

                        <div class="service-body">
                            <span class="service-category">FULL-STACK SYSTEM</span>
                            <h3 class="service-title">Aplikasi Web & Sistem Kustom</h3>
                            <p class="service-desc">
                                Pengembangan software berbasis web dengan logika backend kompleks, arsitektur database terukur, dan dashboard admin yang intuitif serta aman.
                            </p>
                        </div>

                        <!-- Key Deliverable Metrics -->
                        <div class="service-metrics-grid">
                            <div class="service-metric-box">
                                <span class="service-metric-label">ARSITEKTUR</span>
                                <span class="service-metric-value">Modular & Scalable</span>
                            </div>
                            <div class="service-metric-box">
                                <span class="service-metric-label">INTEGRASI</span>
                                <span class="service-metric-value">REST API & Gateway</span>
                            </div>
                        </div>

                        <!-- Tech Stack Pills -->
                        <div class="service-tech-stack">
                            <span class="service-tech-pill">Laravel 13</span>
                            <span class="service-tech-pill">MySQL / PostgreSQL</span>
                            <span class="service-tech-pill">WhatsApp API</span>
                            <span class="service-tech-pill">Payment Gateway</span>
                        </div>

                        <ul class="service-features">
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Laravel & Modern Stack dengan clean code</span>
                            </li>
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Integrasi Payment Gateway, WA API, & RESTful API</span>
                            </li>
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Proteksi keamanan data, multi-role & automated backup</span>
                            </li>
                        </ul>

                        <div class="service-card-footer">
                            <a href="#wishlist" class="service-link-action">
                                <div class="service-link-text">
                                    <span class="service-link-main">Jelajahi Paket Sistem</span>
                                    <span class="service-link-sub">Lihat skala sistem & spesifikasi</span>
                                </div>
                                <span class="service-link-arrow">→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="service-card" data-service-target="riset-skripsi">
                        <div class="service-card-glow"></div>
                        <div class="service-card-topline"></div>

                        <div class="service-header">
                            <div class="service-header-left">
                                <div class="service-icon-box">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                        <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                                    </svg>
                                </div>
                                <span class="service-tier-badge">ACADEMIC & R&D</span>
                            </div>
                            <div class="service-index-wrap">
                                <span class="service-code">SRV // 03</span>
                                <span class="service-number">03</span>
                            </div>
                        </div>

                        <div class="service-body">
                            <span class="service-category">ACADEMIC & R&D</span>
                            <h3 class="service-title">Pendampingan Riset & Skripsi IT</h3>
                            <p class="service-desc">
                                Bimbingan intensif dan implementasi algoritma pemrograman untuk mahasiswa tingkat akhir dalam menyelesaikan proyek perangkat lunak ilmiah.
                            </p>
                        </div>

                        <!-- Key Deliverable Metrics -->
                        <div class="service-metrics-grid">
                            <div class="service-metric-box">
                                <span class="service-metric-label">METODE BIMBINGAN</span>
                                <span class="service-metric-value">1-on-1 & Bedah Kode</span>
                            </div>
                            <div class="service-metric-box">
                                <span class="service-metric-label">KELENGKAPAN</span>
                                <span class="service-metric-value">App + UML & Pengujian</span>
                            </div>
                        </div>

                        <!-- Tech Stack Pills -->
                        <div class="service-tech-stack">
                            <span class="service-tech-pill">Machine Learning / AI</span>
                            <span class="service-tech-pill">SPK & Data Mining</span>
                            <span class="service-tech-pill">UML & ERD</span>
                            <span class="service-tech-pill">Black-Box Testing</span>
                        </div>

                        <ul class="service-features">
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Implementasi AI, SPK, GIS, Data Mining, Web/Mobile</span>
                            </li>
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Bimbingan arsitektur kode & persiapan sidang teknis</span>
                            </li>
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Dokumentasi flowchart, UML, ERD, & basis data</span>
                            </li>
                        </ul>

                        <div class="service-card-footer">
                            <a href="#kolaborasi" class="service-link-action" data-select-service="riset-skripsi">
                                <div class="service-link-text">
                                    <span class="service-link-main">Konsultasi Topik Skripsi</span>
                                    <span class="service-link-sub">Diskusikan judul, metode & alur</span>
                                </div>
                                <span class="service-link-arrow">→</span>
                            </a>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="service-card" data-service-target="ui-ux">
                        <div class="service-card-glow"></div>
                        <div class="service-card-topline"></div>

                        <div class="service-header">
                            <div class="service-header-left">
                                <div class="service-icon-box">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                        <line x1="8" y1="21" x2="16" y2="21"></line>
                                        <line x1="12" y1="17" x2="12" y2="21"></line>
                                    </svg>
                                </div>
                                <span class="service-tier-badge">INTERFACE STUDIO</span>
                            </div>
                            <div class="service-index-wrap">
                                <span class="service-code">SRV // 04</span>
                                <span class="service-number">04</span>
                            </div>
                        </div>

                        <div class="service-body">
                            <span class="service-category">PRODUCT DESIGN</span>
                            <h3 class="service-title">UI/UX Design & Prototyping</h3>
                            <p class="service-desc">
                                Riset antarmuka pengguna, perancangan user journey terarah, dan pembuatan interactive high-fidelity prototype menggunakan Figma berstandar enterprise.
                            </p>
                        </div>

                        <!-- Key Deliverable Metrics -->
                        <div class="service-metrics-grid">
                            <div class="service-metric-box">
                                <span class="service-metric-label">DELIVERABLE</span>
                                <span class="service-metric-value">Interactive Figma</span>
                            </div>
                            <div class="service-metric-box">
                                <span class="service-metric-label">STANDAR ASET</span>
                                <span class="service-metric-value">Design System Ready</span>
                            </div>
                        </div>

                        <!-- Tech Stack Pills -->
                        <div class="service-tech-stack">
                            <span class="service-tech-pill">Figma Auto-Layout</span>
                            <span class="service-tech-pill">Design Tokens</span>
                            <span class="service-tech-pill">Interactive Prototype</span>
                            <span class="service-tech-pill">Dev Handoff</span>
                        </div>

                        <ul class="service-features">
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Design system scalable & komponen reusable</span>
                            </li>
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Usability testing & visual hierarchy presisi</span>
                            </li>
                            <li>
                                <span class="service-check-badge">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                </span>
                                <span>Aset siap serah terima bagi developer (Handoff)</span>
                            </li>
                        </ul>

                        <div class="service-card-footer">
                            <a href="#kolaborasi" class="service-link-action" data-select-service="uiux-design">
                                <div class="service-link-text">
                                    <span class="service-link-main">Konsultasi Desain UI/UX</span>
                                    <span class="service-link-sub">Wujudkan produk digital ergonomis</span>
                                </div>
                                <span class="service-link-arrow">→</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Bottom Custom Consultation Strip -->
                <div class="services-bottom-banner">
                    <div class="services-banner-content">
                        <div class="services-banner-badge">
                            <span class="services-banner-dot"></span>
                            <span>CUSTOM ENGINEERING</span>
                        </div>
                        <div class="services-banner-text">
                            <h4>Butuh spesifikasi khusus atau kombinasi dari beberapa layanan di atas?</h4>
                            <p>Tim engineer kami siap membedah kebutuhan arsitektur sistem maupun riset Anda tanpa biaya konsultasi awal.</p>
                        </div>
                    </div>
                    <div class="services-banner-action">
                        <a href="#kolaborasi" class="services-banner-btn">
                            <span>Diskusikan Kebutuhan Kustom</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
                        </a>
=======
                    @forelse($services as $service)
                    <div class="service-card">
                        <div class="service-header">
                            <div class="service-icon">{{ $service->icon ?: '🌐' }}</div>
                            <span class="service-number">{{ $service->step_number }}</span>
                        </div>
                        <h3 class="service-title">{{ $service->title }}</h3>
                        <p class="service-desc">
                            {{ $service->description }}
                        </p>
                        @if(!empty($service->features))
                        <ul class="service-features">
                            @foreach($service->features as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    @empty
                    <div style="padding: 40px; text-align: center; color: #888; grid-column: 1 / -1;">
                        Belum ada layanan yang ditambahkan. Tambahkan melalui panel admin.
>>>>>>> 2e6662757065cd892b42972bb4e9b8b096323cfa
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- =======================================================================
             5. PROSES KERJA KAMI (Horizontal Timeline / Step-by-Step Timeline)
             ======================================================================= -->
<<<<<<< HEAD
        <section class="process-section" id="proses">
            <div class="container">
                <div class="section-header-center">
                    <h2 class="section-title">Proses Kerja</h2>
                    <p class="section-desc">
                        Alur pengembangan terstruktur dan transparan dengan tahapan terukur dari riset awal hingga peluncuran live dan garansi sistem.
                    </p>
                </div>
=======
        <div class="process-pin-wrapper">
            <section class="process-section" id="proses">
                <div class="container">
                    <div class="section-header-center">
                        <h2 class="section-title">Proses Kerja</h2>
                        <p class="section-desc">
                            Alur pengembangan terstruktur dan transparan dengan tahapan terukur dari riset awal hingga peluncuran live dan garansi sistem.
                        </p>
                    </div>
>>>>>>> 2e6662757065cd892b42972bb4e9b8b096323cfa

                    <div class="timeline-horizontal-wrapper">
                        {{-- Garis penanda horizontal yang membentang dari kiri ke kanan --}}
                        <div class="timeline-track-line"></div>

                        <div class="timeline-steps-grid">
                            @forelse($workProcesses as $process)
                            <div class="timeline-step-item">
                                <div class="step-marker-container">
                                    <div class="step-circle">{{ $process->step_number }}</div>
                                </div>
                                <div class="step-card">
                                    <span class="step-phase-tag">{{ $process->phase_tag }}</span>
                                    <h3 class="step-title">{{ $process->title }}</h3>
                                    <p class="step-desc">{{ $process->description }}</p>
                                </div>
                            </div>
                            @empty
                            <div style="padding: 40px; text-align: center; color: #888; grid-column: 1 / -1;">
                                Belum ada proses kerja yang ditambahkan.
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
            <!-- =======================================================================
                 7. WISH LIST (MENIMPA DARI BAWAH & STICKY SCROLL - FULL WIDTH SELAYAR)
                 ======================================================================= -->
            <div class="wishlist-wrapper-astro" id="wishlist">
                {{-- Memanggil file wishlist --}}
                @include('wishlist')
            </div>
<<<<<<< HEAD
        </section>
        <!-- =======================================================================
             7. WISH LIST (PAKET & STRUKTUR LAYANAN)
             ======================================================================= -->
        <div class="wishlist-wrapper-astro">
            <!-- LIGHT STREAK: Garis cahaya di atas Wishlist -->
            <div class="light-streak-container">
                <div class="light-streak"></div>
            </div>
            
            {{-- Memanggil file wishlist --}}
            @include('wishlist')
=======
>>>>>>> 2e6662757065cd892b42972bb4e9b8b096323cfa
        </div>

        <!-- =======================================================================
             8. FAQ (Menumpuk di atas Wishlist saat di-scroll)
             ======================================================================= -->        
        <section class="faq-section has-pattern faq-combo-left faq-combo-right" id="faq">
            <div class="container">
                <div class="section-header-center">
                    <h2 class="section-title">FAQ</h2>
                    <p class="section-desc">
                        Pertanyaan yang paling sering diajukan seputar alur kerja, spesifikasi teknis, dan jaminan layanan di Digikala Studio.
                    </p>
                </div>

                <div class="faq-accordion-list">
                    @forelse($faqs as $faq)
                    <details class="faq-card">
                        <summary class="faq-summary">
                            <span>{{ $faq->question }}</span>
                            <span class="faq-toggle-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            {!! $faq->answer !!}
                        </div>
                    </details>
                    @empty
                    <div style="padding: 30px; text-align: center; color: #888;">
                        Belum ada FAQ yang ditambahkan.
                    </div>
                    @endforelse
                </div>
            </div>
        </section>
                <!-- =======================================================================
             6. TESTIMONI KLIEN (Carousel + Social Proof)
             ======================================================================= -->
<section class="testimonial-section has-pattern pattern-triangles-br" id="testimoni">            <div class="container">
                <div class="section-header-center">
                    <h2 class="section-title">Apa Kata Klien Kami</h2>
                    <p class="section-desc">
                        Kisah nyata dari para pendiri, direktur, dan eksekutif yang mempercayakan visi digital mereka kepada Digikala Studio.
                    </p>
                </div>

                <div class="testimonial-carousel" id="testimonialCarousel">
                    @forelse($testimonials as $index => $testimonial)
                    <div class="testimonial-slide {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}">
                        <div class="testimonial-card">
                            <div class="testimonial-grid">
                                <div class="testimonial-photo-wrap">
                                    <div class="testimonial-photo">
                                        <img src="{{ $testimonial->avatar_url }}" alt="{{ $testimonial->client_name }}">
                                    </div>
                                    <span class="testimonial-badge">{{ $testimonial->verified_badge }}</span>
                                </div>
                                <div class="testimonial-body">
                                    <div class="testimonial-stars">{{ str_repeat('★', (int) $testimonial->rating) }}</div>
                                    <blockquote class="testimonial-quote">
                                        "{{ $testimonial->quote }}"
                                    </blockquote>
                                    <div class="testimonial-meta">
                                        <div>
                                            <h4>{{ $testimonial->client_name }}</h4>
                                            <p>{{ $testimonial->client_role }}</p>
                                        </div>
                                        @if($testimonial->project_tag)
                                            <span class="tag-pill">{{ $testimonial->project_tag }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div style="padding: 40px; text-align: center; color: #888;">
                        Belum ada testimoni yang ditambahkan.
                    </div>
                    @endforelse

                    @if(isset($testimonials) && $testimonials->count() > 0)
                    <!-- Navigation -->
                    <div class="testimonial-nav">
                        <button type="button" class="testimonial-arrow" onclick="prevTestimonial()" aria-label="Sebelumnya">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <div class="testimonial-dots">
                            @foreach($testimonials as $index => $testimonial)
                                <button type="button" class="testimonial-dot {{ $index === 0 ? 'active' : '' }}" onclick="goToTestimonial({{ $index }})" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                        <button type="button" class="testimonial-arrow" onclick="nextTestimonial()" aria-label="Berikutnya">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                    @endif
                </div>
            </div>
        </section>

        <!-- =======================================================================
             8. CTA KONTAK (Banner Ajakan Besar)
             ======================================================================= -->
<section class="cta-contact-section has-pattern pattern-mesh-tr" id="kontak">
               <div class="container">
                <div class="cta-banner">
                    <div class="cta-grid">
                        <div class="cta-content">
                            <span class="section-tag">Konsultasi Strategis Bebas Biaya</span>
                            <h2 class="cta-headline">
                                Wujudkan Website Impian yang Membawa Brand Anda ke Level Tertinggi.
                            </h2>
                            <p class="cta-desc">
                                Jangan biarkan calon pelanggan ragu karena website yang usang. Mulai konsultasi gratis dengan tim spesialis Digikala Studio hari ini.
                            </p>
                            <div class="cta-actions">
                                <a href="#kolaborasi" class="btn btn-primary">
                                    Diskusikan Proyek Sekarang 
                                </a>
                                <a href="https://wa.me/6285252170250?text=Halo%20Digikala%20Studio" 
                                   target="_blank" rel="noopener noreferrer" 
                                   class="btn btn-outline">
                                    💬 Fast Chat WhatsApp
                                </a>
                            </div>
                        </div>

                        <div class="cta-info-box">
                            <h4>Informasi Kontak Resmi</h4>
                            <div class="cta-info-item">
                                <span class="cta-info-label">Studio & Kantor</span>
                                <p>DI yogyakarta</p>
                            </div>
                            <div class="cta-info-item">
                                <span class="cta-info-label">Telepon & WhatsApp</span>
                                <a href="tel:+6285252170250">+62 852-5217-0250</a>
                            </div>
                            <div class="cta-info-item">
                                <span class="cta-info-label">Email</span>
                                <a href="mailto:digikalastudio2026@gmail.com">digikalastudio2026@gmail.com</a>
                            </div>
                            <div class="cta-info-footer">
                                <span>Waktu Respon Rata-rata:</span>
                                <strong>&lt; 24 Jam Kerja</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- =======================================================================
             10. TENTANG DIGIKALA & AJUKAN KOLABORASI
             ======================================================================= -->        
<section class="collab-section has-pattern pattern-grid-bl pattern-glow-center" id="tentang">                <div class="container">
                <div class="collab-grid">
                    
                    {{-- Kolom Kiri: Tentang Digikala --}}
                    <div class="about-box">
                        <h2 class="section-title">Tentang Kami</h2>
                        <p class="about-lead">Membangun Masa Depan Digital Anda</p>
                        <p class="section-desc">
                            Digikala Studio adalah laboratorium kreatif dan teknologi yang berdedikasi merancang ekosistem digital dengan estetika elegan dan performa tanpa kompromi.
                        </p>

                        <div class="about-features-list">
                            <div class="about-feature-item">
                                <div class="about-feature-bullet">✦</div>
                                <div class="about-feature-text">
                                    <h4>Desain Berkarakter Kuat</h4>
                                    <p>Pendekatan monokrom minimalis yang mengedepankan kejelasan konten dan prestise merek Anda.</p>
                                </div>
                            </div>

                            <div class="about-feature-item">
                                <div class="about-feature-bullet">✦</div>
                                <div class="about-feature-text">
                                    <h4>Teknologi Terkini & Clean Code</h4>
                                    <p>Dibangun di atas fondasi Laravel, modern JavaScript, dan arsitektur database yang siap diskalakan.</p>
                                </div>
                            </div>

                            <div class="about-feature-item">
                                <div class="about-feature-bullet">✦</div>
                                <div class="about-feature-text">
                                    <h4>Pendampingan Berkelanjutan</h4>
                                    <p>Dukungan teknis responsif dan garansi bug-fix untuk memastikan kelancaran operasional sistem Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Kolom Kanan: Formulir Ajukan Kolaborasi --}}
                    <div class="collab-form-card" id="kolaborasi">
                        <div class="form-header">
                            <h3>Ajukan Kolaborasi</h3>
                            <p>Ceritakan ide atau proyek Anda. Kami akan merespon dengan estimasi rencana dalam waktu 1x24 jam.</p>
                        </div>

                        <form id="collab-form" class="collab-form" action="https://formspree.io/f/xwllljgl" method="POST">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap / Instansi</label>
                                    <input type="text" id="name" name="name" class="form-input" placeholder="Contoh: Budi Santoso" required>
                                </div>
                                <div class="form-group">
                                    <label for="contact">Email / WhatsApp</label>
                                    <input type="text" id="contact" name="contact" class="form-input" placeholder="email@domain.com atau 0812..." required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="service-type">Kategori Layanan</label>
                                    <select id="service-type" name="service_type" class="form-select">
                                        <option value="website-bisnis">Website Bisnis & Korporat</option>
                                        <option value="sistem-kustom">Aplikasi Web / Sistem Kustom</option>
                                        <option value="riset-skripsi">Pendampingan Riset / Skripsi IT</option>
                                        <option value="uiux-design">UI/UX Design & Prototyping</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="budget">Estimasi Anggaran</label>
                                    <select id="budget" name="budget" class="form-select">
                                        <option value="tier-1">&lt; Rp 5.000.000</option>
                                        <option value="tier-2">Rp 5.000.000 - Rp 15.000.000</option>
                                        <option value="tier-3">Rp 15.000.000 - Rp 30.000.000</option>
                                        <option value="tier-4">&gt; Rp 30.000.000</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="project-brief">Ceritakan Kebutuhan Proyek Anda</label>
                                <textarea id="project-brief" name="project_brief" class="form-textarea" placeholder="Jelaskan gambaran umum, target audiens, atau modul yang Anda butuhkan..." rows="4" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary form-submit-btn">
                                Kirim Pengajuan Kolaborasi 
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- =======================================================================
         9. FOOTER
         ======================================================================= -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-top-grid">
                <div class="footer-brand">
                    <img src="{{ asset('images/image.png') }}" alt="Digikala Studio">
                    <p>
                        Studio pengembangan digital terdepan yang memadukan rekayasa perangkat lunak modern, visual monokrom presisi, dan pendampingan riset teknologi.
                    </p>
                </div>

                <div class="footer-col">
                    <h4>Navigasi</h4>
                    <ul class="footer-links">
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#portofolio">Portofolio</a></li>
                        <li><a href="#layanan">Layanan</a></li>
                        <li><a href="#proses">Proses Kerja</a></li>
                        <li><a href="#wishlist">Pilih Level Website</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Layanan</h4>
                    <ul class="footer-links">
                        <li><a href="#layanan">Website Bisnis</a></li>
                        <li><a href="#layanan">Web Application</a></li>
                        <li><a href="#layanan">Bimbingan Skripsi IT</a></li>
                        <li><a href="#layanan">UI/UX Prototyping</a></li>
                        <li><a href="#layanan">SEO & Cloud Hosting</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Kontak Kami</h4>
                    <ul class="footer-links">
                        <li><a href="mailto:digikalastudio2026@gmail.com">digikalastudio2026@gmail.com</a></li>
                        <li><a href="https://wa.me/6285252170250" target="_blank">+62 852-5217-0250</a></li>
                        <li><span class="footer-location">Sleman / Yogyakarta, Indonesia</span></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} DIGIKALA STUDIO. Seluruh hak cipta dilindungi undang-undang.</p>
                <div class="footer-bottom-socials">
                    <a href="https://www.instagram.com/digikala.studio/?utm_source=ig_web_button_share_sheet" target="_blank" rel="noopener noreferrer" aria-label="Instagram">Instagram</a>
                    <a href="mailto:digikalastudio2026@gmail.com" aria-label="Email">Email</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating Quick Action Button (Mobile WhatsApp / Konsultasi) -->
    <a href="https://wa.me/6285252170250?text=Halo%20Digikala%20Studio%2C%20saya%20ingin%20konsultasi%20pembuatan%20website" 
       class="floating-wa-btn" 
       target="_blank" 
       rel="noopener noreferrer" 
       aria-label="Konsultasi Cepat via WhatsApp">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.03 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.8 13.47 3.8 11.91C3.81 7.37 7.5 3.67 12.05 3.67M9.05 7.47C8.84 7.47 8.5 7.55 8.21 7.86C7.92 8.18 7.11 8.94 7.11 10.48C7.11 12.02 8.23 13.51 8.39 13.72C8.55 13.93 10.54 17.16 13.68 18.39C16.3 19.41 16.83 19.21 17.39 19.16C17.96 19.1 19.2 18.42 19.46 17.7C19.72 16.98 19.72 16.36 19.64 16.23C19.56 16.1 19.35 16.03 19.04 15.87C18.73 15.71 17.22 14.97 16.94 14.87C16.66 14.77 16.46 14.72 16.25 15.03C16.04 15.34 15.45 16.03 15.27 16.24C15.09 16.45 14.91 16.47 14.6 16.32C14.29 16.16 13.29 15.84 12.11 14.78C11.19 13.96 10.57 12.95 10.41 12.69C10.25 12.43 10.39 12.28 10.55 12.13C10.69 12 10.86 11.77 11.02 11.58C11.18 11.39 11.23 11.26 11.33 11.05C11.43 10.84 11.38 10.66 11.3 10.51C11.22 10.35 10.63 8.87 10.37 8.25C10.12 7.64 9.87 7.72 9.69 7.71C9.52 7.7 9.32 7.47 9.05 7.47Z"/>
        </svg>
    </a>

    {{-- Pemanggilan Script Interaktif (Terpisah) --}}
    <script src="{{ asset('js/script.js') }}?v={{ filemtime(public_path('js/script.js')) }}"></script>
</body>
</html>