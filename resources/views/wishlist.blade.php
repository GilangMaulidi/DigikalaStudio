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
            @forelse($pricingPlans ?? [] as $plan)
                <div class="pricing-card {{ $plan->is_popular ? 'popular' : '' }}">
                    @if($plan->is_popular && $plan->popular_badge)
                        <div class="badge-popular">{{ $plan->popular_badge }}</div>
                    @endif
                    <p class="plan-label">{{ $plan->plan_label ?? 'PLAN' }}</p>
                    <h3 class="plan-title">{{ $plan->name }}</h3>
                    @if($plan->tagline)
                        <p class="plan-desc">{{ $plan->tagline }}</p>
                    @endif
                    <div class="plan-price">{{ $plan->price }}</div>
                    
                    @if(!empty($plan->features))
                        <ul class="plan-features">
                            @foreach($plan->features as $feature)
                                <li><span>✓</span> {{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <a href="{{ $plan->cta_link ?? '#contact' }}" class="btn-plan {{ $plan->is_popular ? 'plan-btn-black' : 'plan-btn-white' }}">
                        {{ $plan->cta_text ?? 'Pilih Paket' }}
                    </a>
                </div>
            @empty
                <!-- Fallback jika belum ada data -->
                <div class="pricing-card">
                    <p class="plan-label">PLAN</p>
                    <h3 class="plan-title">Landing</h3>
                    <p class="plan-desc">Untuk campaign & promosi</p>
                    <div class="plan-price">Rp 1.900.000</div>
                    <ul class="plan-features">
                        <li><span>✓</span> 1 halaman landing page</li>
                        <li><span>✓</span> Responsive mobile</li>
                        <li><span>✓</span> WhatsApp CTA</li>
                    </ul>
                    <a href="#contact" class="btn-plan plan-btn-white">Pilih Paket</a>
                </div>
            @endforelse
        </div>
    </div>
</div>