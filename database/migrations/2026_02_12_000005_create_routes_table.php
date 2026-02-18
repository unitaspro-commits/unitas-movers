<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('routes', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 100)->unique();
            $table->string('origin_city', 100);
            $table->string('dest_city', 100);
            $table->integer('distance_km');
            $table->decimal('drive_time_hours', 4, 1);
            $table->integer('price_range_min')->nullable();
            $table->integer('price_range_max')->nullable();
            $table->string('meta_title', 70);
            $table->string('meta_description', 170);
            $table->string('h1', 150);
            $table->text('route_overview')->nullable();
            $table->text('cost_breakdown')->nullable();
            $table->text('destination_guide')->nullable();
            $table->json('faq_json')->nullable();
            $table->json('schema_json')->nullable();
            $table->string('canonical_url', 255)->nullable();
            $table->string('og_image', 255)->nullable();
            $table->boolean('is_bidirectional')->default(false);
            $table->boolean('is_published')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('routes');
    }
};
