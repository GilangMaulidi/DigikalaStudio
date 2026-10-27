<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\Portfolio;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\WorkProcess;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Portfolios
        Portfolio::truncate();
        $portfolios = [
            [
                'title' => 'Lunar Analytics — High Scale Intelligence Dashboard',
                'category' => 'saas',
                'browser_url' => 'lunar-analytics.enterprise.app',
                'window_tag' => 'SaaS Platform',
                'image' => 'images/portfolio1.jpg',
                'tags' => ['SaaS Platform', 'Laravel & React', 'Dark Mode UI'],
                'description' => 'Platform analitik data enterprise dengan visualisasi real-time, arsitektur microservices, dan antarmuka gelap yang ergonomis untuk pengguna intensif.',
                'badge_status' => 'Tahun 2026',
                'is_live' => false,
                'project_url' => '#kolaborasi',
                'action_label' => 'Eksplorasi Proyek',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Sistem Informasi Administrasi Tata Usaha Seragam — WhatsApp Gateway - QrCode Pengambilan',
                'category' => 'academic',
                'browser_url' => 'sim-seragam.smpn3rajadesa.sch.id',
                'window_tag' => 'Academic System',
                'image' => 'images/portofolio_Sangga.jpeg',
                'tags' => ['Laravel', 'MySql', 'Api WhatsApp'],
                'description' => "Tugas akhir ini berfokus pada pengembangan sistem informasi berbasis website untuk mempermudah dan meningkatkan efisiensi proses administrasi seragam siswa di SMP Negeri 3 Rajadesa. Sistem ini memiliki dua jenis pengguna, yaitu Tata Usaha (TU) dan siswa.\n\nSiswa dapat mengajukan kebutuhan seragam serta memantau status pengajuannya, sedangkan petugas TU dapat mengelola data siswa, memeriksa dan menyetujui pengajuan, serta mengelola laporan administrasi.\n\nSistem ini juga terintegrasi dengan WhatsApp Gateway menggunakan Fonnte untuk notifikasi otomatis, dilengkapi QR Code dinamis untuk mendukung proses verifikasi pengambilan seragam, serta fitur impor data siswa melalui Excel dan ekspor laporan. Pengujian sistem menggunakan Black Box Testing terhadap 48 skenario pengujian dengan hasil valid 100%.",
                'badge_status' => 'Live Website',
                'is_live' => true,
                'project_url' => 'https://sanggam13.github.io/root-hosting/',
                'action_label' => 'Eksplorasi Proyek',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title' => "Ken's Coffee House — Artisan Roastery & Personal Brand",
                'category' => 'branding',
                'browser_url' => 'ferdianbimastya.ifree.page',
                'window_tag' => 'Live Showcase',
                'image' => 'images/portfolio-kopi.jpg',
                'tags' => ['Coffee Shop & Roastery', 'Personal Branding', 'Online Booking'],
                'description' => 'Platform digital eksklusif untuk coffee house & artisan roastery Master Barista Ken. Menampilkan kurasi biji kopi single origin, signature cold brew showcase, menu interaktif, serta sistem reservasi meja dan kelas barista profesional.',
                'badge_status' => 'Live Website',
                'is_live' => true,
                'project_url' => 'https://ferdianbimastya.ifree.page/',
                'action_label' => 'Kunjungi Website',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title' => "Pondok Pesantren Hidayatul Muhajirin — Portal Resmi & PSB Online",
                'category' => 'academic',
                'browser_url' => 'pondokmumodern.iblogger.org',
                'window_tag' => 'Live Showcase',
                'image' => 'images/portfolio-pesantren.png',
                'tags' => ['Pondok Pesantren', 'PSB Online', "Tahfizh Al-Qur'an"],
                'description' => "Website resmi lembaga pendidikan Islam terpadu yang memadukan kurikulum Tahfizh Al-Qur'an 30 Juz dan Kitab Kuning. Dilengkapi modul Pendaftaran Santri Baru (PSB Online), informasi kurikulum, publikasi kegiatan, galeri santri, dan kontak asrama.",
                'badge_status' => 'Live Website',
                'is_live' => true,
                'project_url' => 'https://pondokmumodern.iblogger.org/',
                'action_label' => 'Kunjungi Website',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title' => 'SD Negeri 258/VI Rejo Sari — Portal Informasi Akademik Terpadu',
                'category' => 'academic',
                'browser_url' => 'sekolahdasarnegeri.free.je',
                'window_tag' => 'Live Showcase',
                'image' => 'images/portfolio-sekolah.png',
                'tags' => ['Sekolah Dasar Negeri', 'Portal Akademik', 'Kurikulum Merdeka'],
                'description' => 'Portal web resmi sekolah dasar negeri untuk media publikasi kegiatan belajar mengajar, pengumuman akademik berkala, portal berita sekolah, galeri prestasi siswa, informasi dewan guru, dan integrasi akses administrasi Tata Usaha.',
                'badge_status' => 'Live Website',
                'is_live' => true,
                'project_url' => 'https://sekolahdasarnegeri.free.je/',
                'action_label' => 'Kunjungi Website',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title' => 'ScholarSphere — Sistem Informasi & Manajemen Tesis',
                'category' => 'saas',
                'browser_url' => 'scholarsphere.edu.id',
                'window_tag' => 'Academic SaaS',
                'image' => 'images/portfolio3.jpg',
                'tags' => ['Sistem Skripsi / Riset', 'Machine Learning', 'RESTful API'],
                'description' => 'Sistem bimbingan dan pelacakan riset akademik yang dilengkapi algoritma pencocokan topik cerdas, validasi dokumen instan, dan antarmuka ramah mahasiswa/dosen.',
                'badge_status' => 'Tahun 2026',
                'is_live' => false,
                'project_url' => '#kolaborasi',
                'action_label' => 'Eksplorasi Proyek',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($portfolios as $data) {
            Portfolio::create($data);
        }

        // 2. Services
        Service::truncate();
        $services = [
            [
                'step_number' => '01',
                'icon' => '🌐',
                'title' => 'Website Bisnis & Korporat',
                'description' => 'Membangun landing page dan company profile berkecepatan tinggi yang mengonversi pengunjung menjadi klien setia, dengan reputasi brand yang kuat.',
                'features' => [
                    'Desain eksklusif tanpa template generik',
                    'Optimalisasi SEO On-Page dan Core Web Vitals',
                    'Responsif sempurna di iOS, Android, dan Desktop',
                ],
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'step_number' => '02',
                'icon' => '⚙️',
                'title' => 'Aplikasi Web & Sistem Kustom',
                'description' => 'Pengembangan software berbasis web dengan logika backend kompleks, arsitektur database terukur, dan dashboard admin yang aman.',
                'features' => [
                    'Laravel framework dengan struktur clean code',
                    'Integrasi Payment Gateway, WhatsApp API, dan CRM',
                    'Proteksi keamanan data dan backup otomatis',
                ],
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'step_number' => '03',
                'icon' => '🎓',
                'title' => 'Pendampingan Riset & Skripsi IT',
                'description' => 'Bimbingan intensif dan implementasi algoritma pemrograman untuk mahasiswa tingkat akhir dalam menyelesaikan proyek perangkat lunak ilmiah.',
                'features' => [
                    'Implementasi AI, SPK, GIS, Data Mining, atau Web System',
                    'Bimbingan arsitektur kode dan persiapan sidang teknis',
                    'Dokumentasi flowchart, ERD, dan struktur database',
                ],
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'step_number' => '04',
                'icon' => '🚀',
                'title' => 'UI/UX Design & Prototyping',
                'description' => 'Riset antarmuka pengguna, perancangan user journey terarah, dan pembuatan interactive high-fidelity prototype menggunakan Figma.',
                'features' => [
                    'Design system terstandarisasi dan komponen reusable',
                    'Usability testing dan visual hierarchy yang presisi',
                    'Aset siap serah terima bagi tim developer internal',
                ],
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($services as $data) {
            Service::create($data);
        }

        // 3. Work Processes
        WorkProcess::truncate();
        $processes = [
            [
                'step_number' => '01',
                'phase_tag' => 'Fase 1',
                'title' => 'Discovery & Brief',
                'description' => 'Membedah tujuan bisnis atau skripsi, memahami profil audiens, serta memetakan batasan proyek.',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'step_number' => '02',
                'phase_tag' => 'Fase 2',
                'title' => 'Wireframe & Alur',
                'description' => 'Menyusun struktur informasi, skema database (ERD), dan tata letak dasar sebelum mendesain visual.',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'step_number' => '03',
                'phase_tag' => 'Fase 3',
                'title' => 'Desain UI/UX',
                'description' => 'Merancang estetika visual monokrom modern dan prototipe interaktif untuk divalidasi bersama Anda.',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'step_number' => '04',
                'phase_tag' => 'Fase 4',
                'title' => 'Pengembangan & QA',
                'description' => 'Pengkodean standar tinggi, optimalisasi kecepatan respon, dan serangkaian uji coba fungsional.',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'step_number' => '05',
                'phase_tag' => 'Fase 5',
                'title' => 'Deploy & Garansi',
                'description' => 'Peluncuran live ke cloud server, serah terima berkas/source code, dan garansi pemeliharaan berkala.',
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($processes as $data) {
            WorkProcess::create($data);
        }

        // 4. Pricing Plans (Wishlist / Pilih Level Website)
        PricingPlan::truncate();
        $plans = [
            [
                'plan_label' => 'PLAN',
                'name' => 'Landing',
                'tagline' => 'Untuk campaign & promosi',
                'price' => 'Rp 1.900.000',
                'features' => [
                    '1 halaman landing page',
                    'Responsive mobile',
                    'WhatsApp CTA',
                    'Basic SEO',
                    'Analytics & tracking',
                ],
                'is_popular' => false,
                'popular_badge' => null,
                'cta_text' => 'Pilih Paket',
                'cta_link' => '#contact',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'plan_label' => 'PLAN',
                'name' => 'Business',
                'tagline' => 'Website bisnis untuk berkembang',
                'price' => 'Rp 3.900.000',
                'features' => [
                    'Hingga 7 halaman',
                    'Responsive premium',
                    'SEO structure',
                    'Admin / CMS',
                    'AI chatbot ready',
                ],
                'is_popular' => true,
                'popular_badge' => 'Paling Populer',
                'cta_text' => 'Pilih Paket',
                'cta_link' => '#contact',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'plan_label' => 'PLAN',
                'name' => 'Custom',
                'tagline' => 'Solusi khusus sesuai kebutuhan',
                'price' => 'Custom Quote',
                'features' => [
                    'Web App / Dashboard',
                    'Membership / Login',
                    'API integration',
                    'AI & Automation',
                    'Custom development',
                ],
                'is_popular' => false,
                'popular_badge' => null,
                'cta_text' => 'Konsultasi Dulu',
                'cta_link' => '#contact',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($plans as $data) {
            PricingPlan::create($data);
        }

        // 5. FAQs
        Faq::truncate();
        $faqs = [
            [
                'question' => 'Berapa lama rata-rata waktu pengerjaan sebuah proyek website?',
                'answer' => 'Untuk landing page atau company profile standar, pengerjaan memakan waktu sekitar 1 hingga 2 minggu. Untuk sistem kustom yang lebih kompleks atau sistem bimbingan skripsi berbasis algoritma khusus, waktu berkisar antara 3 hingga 6 minggu dengan timeline yang disepakati di awal.',
                'is_open_default' => true,
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana cara kerja efek Sticky Scroll Pinning pada website ini?',
                'answer' => 'Efek ini murni memanfaatkan properti modern CSS position: sticky dan manipulasi top serta hierarki z-index. Saat halaman di-scroll ke bawah, kartu wishlist atau sidebar portofolio tetap terpaku di layar sementara konten berikutnya meluncur naik menumpuknya seperti halaman lembaran baru.',
                'is_open_default' => false,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah Digikala Studio melayani pembuatan sistem untuk skripsi/tesis mahasiswa?',
                'answer' => 'Ya, kami memiliki divisi khusus pendampingan teknis bagi mahasiswa yang membutuhkan bimbingan rekayasa perangkat lunak, integrasi algoritma kecerdasan buatan, SPK, maupun aplikasi web terintegrasi secara profesional dan edukatif.',
                'is_open_default' => false,
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah saya akan mendapatkan kepemilikan penuh terhadap source code?',
                'answer' => 'Tentu. Seluruh aset kode sumber (source code), desain Figma, dan basis data diserahkan 100% kepada Anda setelah proyek tuntas dan disahkan. Anda memegang hak cipta penuh tanpa keterikatan lisensi tersembunyi.',
                'is_open_default' => false,
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana skema pembayaran dan kontrak kerja?',
                'answer' => 'Pembayaran dibagi menjadi termin transparan: Down Payment (DP) 40% di awal sebelum riset dimulai, 30% setelah tahap preview/approval, dan 30% pelunasan saat sistem siap di-deploy secara resmi.',
                'is_open_default' => false,
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah website yang dibuat sudah responsif di perangkat mobile dan tablet?',
                'answer' => 'Tentu saja. Seluruh website dan sistem yang kami rancang mengusung prinsip mobile-first dan responsive design. Tampilan akan secara otomatis menyesuaikan dengan sempurna di smartphone, tablet, laptop, hingga layar monitor desktop lebar.',
                'is_open_default' => false,
                'sort_order' => 6,
                'is_active' => true,
            ],
            [
                'question' => 'Apakah sudah termasuk penyediaan domain, hosting, dan sertifikat SSL?',
                'answer' => 'Ya, paket pembuatan website kami dapat mencakup domain kustom pilihan (.com, .id, dll), konfigurasi cloud hosting berkecepatan tinggi, dan instalasi sertifikat keamanan SSL (HTTPS) resmi untuk menjamin keamanan data.',
                'is_open_default' => false,
                'sort_order' => 7,
                'is_active' => true,
            ],
            [
                'question' => 'Bagaimana dengan garansi dan pemeliharaan (maintenance) setelah website selesai?',
                'answer' => 'Kami memberikan garansi perbaikan bug gratis pasca peluncuran serta menyediakan layanan maintenance berkala untuk pembaruan sistem, backup basis data otomatis, dan optimasi performa berkelanjutan.',
                'is_open_default' => false,
                'sort_order' => 8,
                'is_active' => true,
            ],
        ];

        foreach ($faqs as $data) {
            Faq::create($data);
        }

        // 6. Testimonials
        Testimonial::truncate();
        $testimonials = [
            [
                'client_name' => 'Andi Pratama',
                'client_role' => 'Chief Executive Officer — Recore Cloud Solutions',
                'client_avatar' => 'images/client-andi.jpg',
                'rating' => 5,
                'verified_badge' => 'VERIFIED CLIENT',
                'quote' => 'Digikala Studio mentransformasi total identitas digital kami. Sejak peluncuran website baru, kepercayaan mitra internasional meningkat drastis dan konversi prospek enterprise naik lebih dari 200%.',
                'project_tag' => 'Website Bisnis & UI/UX',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'client_name' => 'Rina Kusuma',
                'client_role' => 'Managing Director — Emeror Architectural Atelier',
                'client_avatar' => 'images/client-rina.jpg',
                'rating' => 5,
                'verified_badge' => 'VERIFIED CLIENT',
                'quote' => 'Detail visual dan kepekaan estetika tim Digikala luar biasa. Mereka berhasil menerjemahkan nilai kemewahan brand kami ke dalam pengalaman website yang begitu elegan dan fluid.',
                'project_tag' => 'Luxury Editorial Page',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'client_name' => 'Budi Setiawan',
                'client_role' => 'Co-Founder & COO — KepiTalia Artisan Group',
                'client_avatar' => 'images/client-budi.jpg',
                'rating' => 5,
                'verified_badge' => 'VERIFIED CLIENT',
                'quote' => 'Kecepatan dan performa website baru kami luar biasa cepat. Alur pemesanan jauh lebih seamless, dan tingkat konversi penjualan melonjak signifikan di bulan pertama peluncuran.',
                'project_tag' => 'D2C E-Commerce',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($testimonials as $data) {
            Testimonial::create($data);
        }
    }
}
