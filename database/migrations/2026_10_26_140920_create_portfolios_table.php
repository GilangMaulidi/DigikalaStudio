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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category')->default('saas'); // saas, branding, academic
            $table->string('browser_url')->nullable();
            $table->string('window_tag')->nullable();
            $table->string('image')->nullable();
            $table->json('tags')->nullable();
            $table->text('description');
            $table->string('badge_status')->default('Tahun 2026');
            $table->boolean('is_live')->default(false);
            $table->string('project_url')->default('#kolaborasi');
            $table->string('action_label')->default('Eksplorasi Proyek');
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
        Schema::dropIfExists('portfolios');
    }
};
