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
     2. BERANDA (Hero Section)
     ======================================================================= -->
<section class="hero-section" id="beranda" style="background-image: url('{{ asset('images/bg_branda.png') }}');">
    
    <!-- 1. Overlay Gelap Bawaan -->
    <div class="hero-overlay"></div>
    
    <!-- 2. Pola & Tekstur Tambahan -->
    <div class="hero-dot-pattern"></div>
    <div class="hero-noise-texture"></div>
    
    <!-- 3. Gradien pemudar ke Portofolio (Putih) -->

    <!-- 4. Konten Teks (Tetap sama seperti aslinya) -->
    <div class="container hero-container">
        <div class="hero-content">
            <h1 class="hero-headline">
                Kami merancang website yang membuat brand Anda lebih bernilai.
            </h1>

            <p class="hero-subheadline">
                Kami membantu bisnis membangun kehadiran digital yang profesional dan mendampingi mahasiswa dalam menyelesaikan proses penelitian dan penulisan skripsi dengan layanan yang terarah, transparan, dan berkualitas.
            </p>

            <div class="hero-cta">
                <a href="#kolaborasi" class="btn btn-primary">Mulai Proyek </a>
                <a href="#portofolio" class="btn btn-outline">Lihat Portofolio </a>
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
            <div class="container">
                <div class="section-header-center">
                    <h2 class="section-title">Layanan Kami</h2>
                    <p class="section-desc">
                        Solusi rekayasa digital end-to-end yang disesuaikan dengan kebutuhan spesifik pertumbuhan bisnis dan akselerasi riset Anda.
                    </p>
                </div>

                <div class="services-grid">
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
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- =======================================================================
             5. PROSES KERJA KAMI (Horizontal Timeline / Step-by-Step Timeline)
             ======================================================================= -->
        <div class="process-pin-wrapper">
            <section class="process-section" id="proses">
                <div class="container">
                    <div class="section-header-center">
                        <h2 class="section-title">Proses Kerja</h2>
                        <p class="section-desc">
                            Alur pengembangan terstruktur dan transparan dengan tahapan terukur dari riset awal hingga peluncuran live dan garansi sistem.
                        </p>
                    </div>

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