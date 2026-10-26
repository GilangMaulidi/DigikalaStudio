{{-- resources/views/wishlist.blade.php --}}

<!-- Background diubah menjadi hitam (#0a0a0a) -->
<div class="wishlist-container" id="wishlist">
    <div class="wishlist-inner">
        <div class="wishlist-fade-bottom"></div>
        <div class="wishlist-header">
            <h2>Pilih Level Website</h2>
            <p>Sesuaikan dengan kebutuhan bisnis Anda. Transparan, tanpa biaya tersembunyi.</p>
        </div>

        <!-- Grid Paket Harga -->
        <div class="wishlist-grid">
            
            <!-- Paket 1: Landing -->
            <div class="pricing-card">
                <p class="plan-label">PLAN</p>
                <h3 class="plan-title">Landing</h3>
                <p class="plan-desc">Untuk campaign & promosi</p>
                <div class="plan-price">Rp 1.900.000</div>
                
                <ul class="plan-features">
                    <li><span>✓</span> 1 halaman landing page</li>
                    <li><span>✓</span> Responsive mobile</li>
                    <li><span>✓</span> WhatsApp CTA</li>
                    <li><span>✓</span> Basic SEO</li>
                    <li><span>✓</span> Analytics & tracking</li>
                </ul>
                
                <!-- Menggunakan class btn-plan khusus agar tidak bentrok dengan tombol Hero -->
                <a href="#contact" class="btn-plan plan-btn-white">Pilih Paket</a>
            </div>

            <!-- Paket 2: Business (Paling Populer) -->
            <div class="pricing-card popular">
                <div class="badge-popular">Paling Populer</div>
                <p class="plan-label">PLAN</p>
                <h3 class="plan-title">Business</h3>
                <p class="plan-desc">Website bisnis untuk berkembang</p>
                <div class="plan-price">Rp 3.900.000</div>
                
                <ul class="plan-features">
                    <li><span>✓</span> Hingga 7 halaman</li>
                    <li><span>✓</span> Responsive premium</li>
                    <li><span>✓</span> SEO structure</li>
                    <li><span>✓</span> Admin / CMS</li>
                    <li><span>✓</span> AI chatbot ready</li>
                </ul>
                
                <a href="#contact" class="btn-plan plan-btn-black">Pilih Paket</a>
            </div>

            <!-- Paket 3: Custom -->
            <div class="pricing-card">
                <p class="plan-label">PLAN</p>
                <h3 class="plan-title">Custom</h3>
                <p class="plan-desc">Solusi khusus sesuai kebutuhan</p>
                <div class="plan-price">Custom Quote</div>
                
                <ul class="plan-features">
                    <li><span>✓</span> Web App / Dashboard</li>
                    <li><span>✓</span> Membership / Login</li>
                    <li><span>✓</span> API integration</li>
                    <li><span>✓</span> AI & Automation</li>
                    <li><span>✓</span> Custom development</li>
                </ul>
                
                <a href="#contact" class="btn-plan plan-btn-white">Konsultasi Dulu</a>
            </div>
        </div>
    </div>
</div>