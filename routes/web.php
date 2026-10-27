<?php

use App\Models\Faq;
use App\Models\Portfolio;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\WorkProcess;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $portfolios = Portfolio::where('is_active', true)->orderBy('sort_order', 'asc')->get();
    $services = Service::where('is_active', true)->orderBy('sort_order', 'asc')->get();
    $workProcesses = WorkProcess::where('is_active', true)->orderBy('sort_order', 'asc')->get();
    $pricingPlans = PricingPlan::where('is_active', true)->orderBy('sort_order', 'asc')->get();
    $faqs = Faq::where('is_active', true)->orderBy('sort_order', 'asc')->get();
    $testimonials = Testimonial::where('is_active', true)->orderBy('sort_order', 'asc')->get();

    return view('welcome', compact(
        'portfolios',
        'services',
        'workProcesses',
        'pricingPlans',
        'faqs',
        'testimonials'
    ));
});
