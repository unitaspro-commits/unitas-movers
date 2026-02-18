<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 100)->unique();
            $table->string('name', 150);
            $table->enum('area_type', ['quadrant', 'neighborhood', 'town', 'corridor']);
            $table->foreignId('parent_id')->nullable()->constrained('areas')->nullOnDelete();
            $table->string('meta_title', 70);
            $table->string('meta_description', 170);
            $table->string('h1', 150);
            $table->longText('body')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->integer('population')->nullable();
            $table->json('faq_json')->nullable();
            $table->json('schema_json')->nullable();
            $table->string('canonical_url', 255)->nullable();
            $table->string('og_image', 255)->nullable();
            $table->boolean('is_published')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();

            $table->index(['area_type', 'parent_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
