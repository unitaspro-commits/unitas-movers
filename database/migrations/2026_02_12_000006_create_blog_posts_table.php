<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 150)->unique();
            $table->string('title', 200);
            $table->string('meta_title', 70);
            $table->string('meta_description', 170);
            $table->text('excerpt')->nullable();
            $table->longText('body')->nullable();
            $table->string('featured_image', 255)->nullable();
            $table->enum('category', ['guides', 'tips', 'seasonal', 'local', 'pillar']);
            $table->string('target_keyword', 100);
            $table->foreignId('related_service_id')->nullable()->constrained('services')->nullOnDelete();
            $table->foreignId('related_area_id')->nullable()->constrained('areas')->nullOnDelete();
            $table->boolean('is_pillar')->default(false);
            $table->json('faq_json')->nullable();
            $table->string('canonical_url', 255)->nullable();
            $table->string('og_image', 255)->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            $table->index(['published_at', 'is_pillar']);
            $table->index(['category', 'published_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
