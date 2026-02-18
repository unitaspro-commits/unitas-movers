<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Reviews table — customer testimonials for display + schema
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name', 150);
            $table->unsignedTinyInteger('rating'); // 1–5
            $table->text('body');
            $table->foreignId('service_id')->nullable()->constrained('services')->nullOnDelete();
            $table->foreignId('area_id')->nullable()->constrained('areas')->nullOnDelete();
            $table->enum('source', ['google', 'homestars', 'yelp', 'bbb', 'direct', 'other'])->default('direct');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(true);
            $table->timestamps();

            $table->index(['service_id', 'rating']);
            $table->index(['is_published', 'is_featured']);
        });

        // FAQs table — global FAQ entries for /faq/ page
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->text('answer');
            $table->string('category', 50)->default('general');
            $table->integer('sort_order')->default(0);
            $table->boolean('schema_eligible')->default(true);
            $table->boolean('is_published')->default(true);
            $table->timestamps();

            $table->index(['category', 'sort_order']);
        });

        // Redirects table — 301/302 redirect map
        Schema::create('redirects', function (Blueprint $table) {
            $table->id();
            $table->string('from_path', 500)->unique();
            $table->string('to_path', 500);
            $table->unsignedSmallInteger('status_code')->default(301);
            $table->unsignedInteger('hit_count')->default(0);
            $table->timestamp('last_hit_at')->nullable();
            $table->timestamps();
        });

        // Media table — image library with SEO metadata
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('path', 500);
            $table->string('alt_text', 255);
            $table->string('title', 255)->nullable();
            $table->unsignedInteger('width')->nullable();
            $table->unsignedInteger('height')->nullable();
            $table->string('format', 10)->nullable(); // webp, jpg, png
            $table->unsignedInteger('size_bytes')->nullable();
            $table->timestamps();
        });

        // Internal links — tracks cross-page linking for auditing
        Schema::create('internal_links', function (Blueprint $table) {
            $table->id();
            $table->string('source_page_type', 50); // service, area, route, blog, page
            $table->unsignedBigInteger('source_page_id');
            $table->string('target_url', 500);
            $table->string('anchor_text', 255);
            $table->timestamps();

            $table->index(['source_page_type', 'source_page_id']);
        });

        // French pages — French content translations
        Schema::create('french_pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 150)->unique();
            $table->string('locale', 5)->default('fr');
            $table->string('meta_title', 70);
            $table->string('meta_description', 170);
            $table->string('h1', 150);
            $table->longText('body')->nullable();
            $table->string('english_equivalent_url', 255)->nullable();
            $table->json('faq_json')->nullable();
            $table->string('canonical_url', 255)->nullable();
            $table->string('og_image', 255)->nullable();
            $table->boolean('is_published')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        // SEO meta — polymorphic SEO for static pages
        Schema::create('seo_meta', function (Blueprint $table) {
            $table->id();
            $table->string('page_key', 50)->unique(); // homepage, pricing, faq, about, quote, etc.
            $table->string('meta_title', 70);
            $table->string('meta_description', 170);
            $table->string('h1', 150)->nullable();
            $table->string('canonical_url', 255)->nullable();
            $table->json('schema_json')->nullable();
            $table->string('og_image', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seo_meta');
        Schema::dropIfExists('french_pages');
        Schema::dropIfExists('internal_links');
        Schema::dropIfExists('media');
        Schema::dropIfExists('redirects');
        Schema::dropIfExists('faqs');
        Schema::dropIfExists('reviews');
    }
};
