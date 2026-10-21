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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Digikala Studio - Digital Agency & Software Development</title>
    <meta name="description" content="Digikala Studio merancang website eksklusif, sistem kustom, dan pendampingan riset teknologi dengan estetika monokrom modern dan performa tinggi.">

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
                <a href="#kolaborasi" class="btn btn-outline btn-sm">Diskusikan Proyek →</a>
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
                <a href="#kolaborasi" class="btn btn-primary">Mulai Proyek →</a>
                <a href="#portofolio" class="btn btn-outline">Lihat Portofolio →</a>
            </div>
        </div>
    </div>
</section>


        <!-- =======================================================================
             3. PORTOFOLIO (Sticky Scroll Pinning / Section Pinning)
             ======================================================================= -->
        <section class="portfolio-section" id="portofolio">
            <div class="container">
                <div class="portfolio-layout">
                    
                    {{-- Area Kiri: Terkunci / Diam (Sticky Pinning) saat pengguna scroll --}}
                    <div class="portfolio-pinned-sidebar">
                        <h2 class="sidebar-title">Portofolio</h2>
                        <p class="sidebar-desc">
                            Karya-karya terpilih yang dirancang dengan presisi kode dan visual berkelas tinggi untuk berbagai industri.
                        </p>

                        <div class="portfolio-categories-list">
                            <div class="cat-item active">
                                <span>Semua Proyek</span>
                                <span class="cat-dot"></span>
                            </div>
                            <div class="cat-item">
                                <span>Platform SaaS & Web App</span>
                                <span class="cat-dot"></span>
                            </div>
                            <div class="cat-item">
                                <span>E-Commerce & Branding</span>
                                <span class="cat-dot"></span>
                            </div>
                            <div class="cat-item">
                                <span>Sistem Riset & Akademik</span>
                                <span class="cat-dot"></span>
                            </div>
                        </div>

                        <div style="margin-top: 10px;">
                            <a href="#kolaborasi" class="btn btn-outline btn-sm">Konsultasi Desain Serupa →</a>
                        </div>
                    </div>

                    {{-- Area Kanan: Kartu Proyek yang Bergerak & Menumpuk (Sticky Cards Stream) --}}
                    <div class="portfolio-cards-stream">
                        
                        <!-- Card 1 -->
                        <article class="portfolio-card">
                            <div class="portfolio-card-img-wrap">
                                <img src="{{ asset('images/portfolio1.jpg') }}" alt="Lunar Analytics Platform SaaS">
                            </div>
                            <div class="portfolio-card-meta">
                                <div class="card-tags">
                                    <span class="tag-pill">SaaS Platform</span>
                                    <span class="tag-pill">Laravel & React</span>
                                    <span class="tag-pill">Dark Mode UI</span>
                                </div>
                                <h3>Lunar Analytics — High Scale Intelligence Dashboard</h3>
                                <p>Platform analitik data enterprise dengan visualisasi real-time, arsitektur microservices, dan antarmuka gelap yang ergonomis untuk pengguna intensif.</p>
                                <div class="card-footer">
                                    <span class="tag-pill">Tahun 2026</span>
                                    <span class="card-link">Eksplorasi Proyek ↗</span>
                                </div>
                            </div>
                        </article>

                        <!-- Card 2 -->
                        <article class="portfolio-card">
                            <div class="portfolio-card-img-wrap">
                                <img src="{{ asset('images/portfolio2.jpg') }}" alt="Aura Architecture Studio">
                            </div>
                            <div class="portfolio-card-meta">
                                <div class="card-tags">
                                    <span class="tag-pill">Architecture & E-Commerce</span>
                                    <span class="tag-pill">Monochrome Design</span>
                                    <span class="tag-pill">SEO Optimized</span>
                                </div>
                                <h3>Aura Studio — Minimalist Architectural Showcase</h3>
                                <p>Website portofolio arsitektur bertaraf internasional dengan tipografi editorial tajam, transisi halaman halus, dan sistem kurasi proyek interaktif.</p>
                                <div class="card-footer">
                                    <span class="tag-pill">Tahun 2026</span>
                                    <span class="card-link">Eksplorasi Proyek ↗</span>
                                </div>
                            </div>
                        </article>

                        <!-- Card 3 -->
                        <article class="portfolio-card">
                            <div class="portfolio-card-img-wrap">
                                <img src="{{ asset('images/portfolio3.jpg') }}" alt="ScholarSphere Academic Repository">
                            </div>
                            <div class="portfolio-card-meta">
                                <div class="card-tags">
                                    <span class="tag-pill">Sistem Skripsi / Riset</span>
                                    <span class="tag-pill">Machine Learning</span>
                                    <span class="tag-pill">RESTful API</span>
                                </div>
                                <h3>ScholarSphere — Sistem Informasi & Manajemen Tesis</h3>
                                <p>Sistem bimbingan dan pelacakan riset akademik yang dilengkapi algoritma pencocokan topik cerdas, validasi dokumen instan, dan antarmuka ramah mahasiswa/dosen.</p>
                                <div class="card-footer">
                                    <span class="tag-pill">Tahun 2026</span>
                                    <span class="card-link">Eksplorasi Proyek ↗</span>
                                </div>
                            </div>
                        </article>

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
                    <!-- Service 1 -->
                    <div class="service-card">
                        <div class="service-header">
                            <div class="service-icon">🌐</div>
                            <span class="service-number">01</span>
                        </div>
                        <h3 class="service-title">Website Bisnis & Korporat</h3>
                        <p class="service-desc">
                            Membangun landing page dan company profile berkecepatan tinggi yang mengonversi pengunjung menjadi klien setia, dengan reputasi brand yang kuat.
                        </p>
                        <ul class="service-features">
                            <li>Desain eksklusif tanpa template generik</li>
                            <li>Optimalisasi SEO On-Page dan Core Web Vitals</li>
                            <li>Responsif sempurna di iOS, Android, dan Desktop</li>
                        </ul>
                    </div>

                    <!-- Service 2 -->
                    <div class="service-card">
                        <div class="service-header">
                            <div class="service-icon">⚙️</div>
                            <span class="service-number">02</span>
                        </div>
                        <h3 class="service-title">Aplikasi Web & Sistem Kustom</h3>
                        <p class="service-desc">
                            Pengembangan software berbasis web dengan logika backend kompleks, arsitektur database terukur, dan dashboard admin yang aman.
                        </p>
                        <ul class="service-features">
                            <li>Laravel framework dengan struktur clean code</li>
                            <li>Integrasi Payment Gateway, WhatsApp API, dan CRM</li>
                            <li>Proteksi keamanan data dan backup otomatis</li>
                        </ul>
                    </div>

                    <!-- Service 3 -->
                    <div class="service-card">
                        <div class="service-header">
                            <div class="service-icon">🎓</div>
                            <span class="service-number">03</span>
                        </div>
                        <h3 class="service-title">Pendampingan Riset & Skripsi IT</h3>
                        <p class="service-desc">
                            Bimbingan intensif dan implementasi algoritma pemrograman untuk mahasiswa tingkat akhir dalam menyelesaikan proyek perangkat lunak ilmiah.
                        </p>
                        <ul class="service-features">
                            <li>Implementasi AI, SPK, GIS, Data Mining, atau Web System</li>
                            <li>Bimbingan arsitektur kode dan persiapan sidang teknis</li>
                            <li>Dokumentasi flowchart, ERD, dan struktur database</li>
                        </ul>
                    </div>

                    <!-- Service 4 -->
                    <div class="service-card">
                        <div class="service-header">
                            <div class="service-icon">🚀</div>
                            <span class="service-number">04</span>
                        </div>
                        <h3 class="service-title">UI/UX Design & Prototyping</h3>
                        <p class="service-desc">
                            Riset antarmuka pengguna, perancangan user journey terarah, dan pembuatan interactive high-fidelity prototype menggunakan Figma.
                        </p>
                        <ul class="service-features">
                            <li>Design system terstandarisasi dan komponen reusable</li>
                            <li>Usability testing dan visual hierarchy yang presisi</li>
                            <li>Aset siap serah terima bagi tim developer internal</li>
                        </ul>
                    </div>
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
                        Urutan proses dari kiri ke kanan yang dirancang transparan dengan penanda garis horizontal dan lingkaran bernomor.
                    </p>
                </div>

                <div class="timeline-horizontal-wrapper">
                    {{-- Garis penanda horizontal yang membentang dari kiri ke kanan --}}
                    <div class="timeline-track-line"></div>

                    <div class="timeline-steps-grid">
                        
                        <!-- Step 1 -->
                        <div class="timeline-step-item">
                            <div class="step-marker-container">
                                <div class="step-circle">01</div>
                            </div>
                            <div class="step-card">
                                <span class="step-phase-tag">Fase 1</span>
                                <h3 class="step-title">Discovery & Brief</h3>
                                <p class="step-desc">Membedah tujuan bisnis atau skripsi, memahami profil audiens, serta memetakan batasan proyek.</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="timeline-step-item">
                            <div class="step-marker-container">
                                <div class="step-circle">02</div>
                            </div>
                            <div class="step-card">
                                <span class="step-phase-tag">Fase 2</span>
                                <h3 class="step-title">Wireframe & Alur</h3>
                                <p class="step-desc">Menyusun struktur informasi, skema database (ERD), dan tata letak dasar sebelum mendesain visual.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="timeline-step-item">
                            <div class="step-marker-container">
                                <div class="step-circle">03</div>
                            </div>
                            <div class="step-card">
                                <span class="step-phase-tag">Fase 3</span>
                                <h3 class="step-title">Desain UI/UX</h3>
                                <p class="step-desc">Merancang estetika visual monokrom modern dan prototipe interaktif untuk divalidasi bersama Anda.</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="timeline-step-item">
                            <div class="step-marker-container">
                                <div class="step-circle">04</div>
                            </div>
                            <div class="step-card">
                                <span class="step-phase-tag">Fase 4</span>
                                <h3 class="step-title">Pengembangan & QA</h3>
                                <p class="step-desc">Pengkodean standar tinggi, optimalisasi kecepatan respon, dan serangkaian uji coba fungsional.</p>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="timeline-step-item">
                            <div class="step-marker-container">
                                <div class="step-circle">05</div>
                            </div>
                            <div class="step-card">
                                <span class="step-phase-tag">Fase 5</span>
                                <h3 class="step-title">Deploy & Garansi</h3>
                                <p class="step-desc">Peluncuran live ke cloud server, serah terima berkas/source code, dan garansi pemeliharaan berkala.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- =======================================================================
             7. WISH LIST (MENIMPA DARI BAWAH & STICKY SCROLL)
             ======================================================================= -->
        <div class="wishlist-wrapper-astro">
            <!-- LIGHT STREAK: Garis cahaya di atas Wishlist -->
            <div class="light-streak-container">
                <div class="light-streak"></div>
            </div>
            
            {{-- Memanggil file wishlist --}}
            @include('wishlist')
        </div>
    </div>

        <!-- =======================================================================
             8. FAQ (Menumpuk di atas Wishlist saat di-scroll)
             ======================================================================= -->        
<section class="faq-section has-pattern faq-combo-left faq-combo-right" id="faq">               
     <div class="section-header-center">
                    <h2 class="section-title">FAQ</h2>
                    <p class="section-desc">
                        Pertanyaan yang paling sering diajukan seputar alur kerja, spesifikasi teknis, dan jaminan layanan di Digikala Studio.
                    </p>
                </div>

                <div class="faq-accordion-list">
                    
                    <details class="faq-card" open>
                        <summary class="faq-summary">
                            <span>Berapa lama rata-rata waktu pengerjaan sebuah proyek website?</span>
                            <span class="faq-toggle-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            Untuk landing page atau company profile standar, pengerjaan memakan waktu sekitar 1 hingga 2 minggu. Untuk sistem kustom yang lebih kompleks atau sistem bimbingan skripsi berbasis algoritma khusus, waktu berkisar antara 3 hingga 6 minggu dengan timeline yang disepakati di awal.
                        </div>
                    </details>

                    <details class="faq-card">
                        <summary class="faq-summary">
                            <span>Bagaimana cara kerja efek Sticky Scroll Pinning pada website ini?</span>
                            <span class="faq-toggle-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            Efek ini murni memanfaatkan properti modern CSS <code>position: sticky</code> dan manipulasi <code>top</code> serta hierarki <code>z-index</code>. Saat halaman di-scroll ke bawah, kartu wishlist atau sidebar portofolio tetap terpaku di layar sementara konten berikutnya meluncur naik menumpuknya seperti halaman lembaran baru.
                        </div>
                    </details>

                    <details class="faq-card">
                        <summary class="faq-summary">
                            <span>Apakah Digikala Studio melayani pembuatan sistem untuk skripsi/tesis mahasiswa?</span>
                            <span class="faq-toggle-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            Ya, kami memiliki divisi khusus pendampingan teknis bagi mahasiswa yang membutuhkan bimbingan rekayasa perangkat lunak, integrasi algoritma kecerdasan buatan, SPK, maupun aplikasi web terintegrasi secara profesional dan edukatif.
                        </div>
                    </details>

                    <details class="faq-card">
                        <summary class="faq-summary">
                            <span>Apakah saya akan mendapatkan kepemilikan penuh terhadap source code?</span>
                            <span class="faq-toggle-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            Tentu. Seluruh aset kode sumber (source code), desain Figma, dan basis data diserahkan 100% kepada Anda setelah proyek tuntas dan disahkan. Anda memegang hak cipta penuh tanpa keterikatan lisensi tersembunyi.
                        </div>
                    </details>

                    <details class="faq-card">
                        <summary class="faq-summary">
                            <span>Bagaimana skema pembayaran dan kontrak kerja?</span>
                            <span class="faq-toggle-icon">+</span>
                        </summary>
                        <div class="faq-answer">
                            Pembayaran dibagi menjadi termin transparan: Down Payment (DP) 40% di awal sebelum riset dimulai, 30% setelah tahap preview/approval, dan 30% pelunasan saat sistem siap di-deploy secara resmi.
                        </div>
                    </details>

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
                    <!-- Slide 1 -->
                    <div class="testimonial-slide active" data-index="0">
                        <div class="testimonial-card">
                            <div class="testimonial-grid">
                                <div class="testimonial-photo-wrap">
                                    <div class="testimonial-photo">
                                        <img src="{{ asset('images/client-andi.jpg') }}" alt="Andi Pratama, CEO Recore Tech">
                                    </div>
                                    <span class="testimonial-badge">VERIFIED CLIENT</span>
                                </div>
                                <div class="testimonial-body">
                                    <div class="testimonial-stars">★★★★★</div>
                                    <blockquote class="testimonial-quote">
                                        "Digikala Studio mentransformasi total identitas digital kami. Sejak peluncuran website baru, kepercayaan mitra internasional meningkat drastis dan konversi prospek enterprise naik lebih dari 200%."
                                    </blockquote>
                                    <div class="testimonial-meta">
                                        <div>
                                            <h4>Andi Pratama</h4>
                                            <p>Chief Executive Officer — Recore Cloud Solutions</p>
                                        </div>
                                        <span class="tag-pill">Website Bisnis & UI/UX</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="testimonial-slide" data-index="1">
                        <div class="testimonial-card">
                            <div class="testimonial-grid">
                                <div class="testimonial-photo-wrap">
                                    <div class="testimonial-photo">
                                        <img src="{{ asset('images/client-rina.jpg') }}" alt="Rina Kusuma, Managing Director Sarait Emeror">
                                    </div>
                                    <span class="testimonial-badge">VERIFIED CLIENT</span>
                                </div>
                                <div class="testimonial-body">
                                    <div class="testimonial-stars">★★★★★</div>
                                    <blockquote class="testimonial-quote">
                                        "Detail visual dan kepekaan estetika tim Digikala luar biasa. Mereka berhasil menerjemahkan nilai kemewahan brand kami ke dalam pengalaman website yang begitu elegan dan fluid."
                                    </blockquote>
                                    <div class="testimonial-meta">
                                        <div>
                                            <h4>Rina Kusuma</h4>
                                            <p>Managing Director — Emeror Architectural Atelier</p>
                                        </div>
                                        <span class="tag-pill">Luxury Editorial Page</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="testimonial-slide" data-index="2">
                        <div class="testimonial-card">
                            <div class="testimonial-grid">
                                <div class="testimonial-photo-wrap">
                                    <div class="testimonial-photo">
                                        <img src="{{ asset('images/client-budi.jpg') }}" alt="Budi Setiawan, Co-Founder KepiTalia">
                                    </div>
                                    <span class="testimonial-badge">VERIFIED CLIENT</span>
                                </div>
                                <div class="testimonial-body">
                                    <div class="testimonial-stars">★★★★★</div>
                                    <blockquote class="testimonial-quote">
                                        "Kecepatan dan performa website baru kami luar biasa cepat. Alur pemesanan jauh lebih seamless, dan tingkat konversi penjualan melonjak signifikan di bulan pertama peluncuran."
                                    </blockquote>
                                    <div class="testimonial-meta">
                                        <div>
                                            <h4>Budi Setiawan</h4>
                                            <p>Co-Founder & COO — KepiTalia Artisan Group</p>
                                        </div>
                                        <span class="tag-pill">D2C E-Commerce</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="testimonial-nav">
                        <button type="button" class="testimonial-arrow" onclick="prevTestimonial()" aria-label="Sebelumnya">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M15 19l-7-7 7-7"/>
                            </svg>
                        </button>
                        <div class="testimonial-dots">
                            <button type="button" class="testimonial-dot active" onclick="goToTestimonial(0)" aria-label="Slide 1"></button>
                            <button type="button" class="testimonial-dot" onclick="goToTestimonial(1)" aria-label="Slide 2"></button>
                            <button type="button" class="testimonial-dot" onclick="goToTestimonial(2)" aria-label="Slide 3"></button>
                        </div>
                        <button type="button" class="testimonial-arrow" onclick="nextTestimonial()" aria-label="Berikutnya">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
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
                                    Diskusikan Proyek Sekarang →
                                </a>
                                <a href="https://wa.me/6281234567890?text=Halo%20Digikala%20Studio" 
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
                                <p>Prosperity Tower Lt. 18, District 8 SCBD, Jakarta Selatan 12190</p>
                            </div>
                            <div class="cta-info-item">
                                <span class="cta-info-label">Telepon & WhatsApp</span>
                                <a href="tel:+6281234567890">+62 812 3456 7890</a>
                            </div>
                            <div class="cta-info-item">
                                <span class="cta-info-label">Email</span>
                                <a href="mailto:hello@digikalastudio.com">hello@digikalastudio.com</a>
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

                        <form id="collab-form" class="collab-form" action="#" method="POST">
                            @csrf
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
                                Kirim Pengajuan Kolaborasi →
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
                        <li><a href="mailto:hello@digikalastudio.com">hello@digikalastudio.com</a></li>
                        <li><a href="https://wa.me/6281200000000" target="_blank">+62 812-0000-0000</a></li>
                        <li><span class="footer-location">Jakarta / Yogyakarta, Indonesia</span></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} DIGIKALA STUDIO. Seluruh hak cipta dilindungi undang-undang.</p>
                <div class="footer-bottom-socials">
                    <a href="#" aria-label="LinkedIn">LinkedIn</a>
                    <a href="#" aria-label="Instagram">Instagram</a>
                    <a href="#" aria-label="GitHub">GitHub</a>
                    <a href="#" aria-label="Dribbble">Dribbble</a>
                </div>
            </div>
        </div>
    </footer>

    {{-- Pemanggilan Script Interaktif (Terpisah) --}}
    <script src="{{ asset('js/script.js') }}?v={{ filemtime(public_path('js/script.js')) }}"></script>
</body>
</html>