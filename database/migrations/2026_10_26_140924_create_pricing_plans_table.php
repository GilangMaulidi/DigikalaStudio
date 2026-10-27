<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_label')->default('PLAN');
            $table->string('name'); // Landing, Business, Custom
            $table->string('tagline')->nullable(); // Untuk campaign & promosi
            $table->string('price'); // Rp 1.900.000, Custom Quote
            $table->json('features')->nullable(); // checklist items
            $table->boolean('is_popular')->default(false);
            $table->string('popular_badge')->nullable()->default('Paling Populer');
            $table->string('cta_text')->default('Pilih Paket');
            $table->string('cta_link')->default('#contact');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};
