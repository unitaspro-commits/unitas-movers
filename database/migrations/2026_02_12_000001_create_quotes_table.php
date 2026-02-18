<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();

            // Customer info
            $table->string('full_name', 150);
            $table->string('phone', 20);
            $table->string('email', 255);

            // Move details
            $table->string('moving_from', 500);
            $table->string('moving_to', 500);
            $table->date('move_date');
            $table->enum('move_size', [
                'studio',
                '1br',
                '2br',
                '3br',
                '4br_plus',
                'office',
            ]);

            // Services requested (stored as JSON array)
            $table->json('services_needed');
            // e.g. ["moving", "packing", "unpacking", "storage", "piano", "other"]

            // Optional fields
            $table->text('additional_notes')->nullable();
            $table->enum('preferred_language', ['en', 'fr'])->default('en');
            $table->enum('referral_source', [
                'google',
                'referral',
                'social',
                'homestar',
                'kijiji',
                'other',
            ])->nullable();

            // Calculated/enriched fields
            $table->integer('estimated_distance_km')->nullable();
            $table->string('origin_city', 100)->nullable();
            $table->string('destination_city', 100)->nullable();

            // Lead management
            $table->enum('status', [
                'new',
                'contacted',
                'quoted',
                'booked',
                'completed',
                'cancelled',
                'no_response',
            ])->default('new');
            $table->decimal('quoted_amount', 10, 2)->nullable();
            $table->decimal('final_amount', 10, 2)->nullable();
            $table->text('internal_notes')->nullable();

            // Assignment
            $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete();

            // Tracking
            $table->timestamp('contacted_at')->nullable();
            $table->timestamp('quoted_at')->nullable();
            $table->timestamp('booked_at')->nullable();
            $table->timestamp('completed_at')->nullable();

            // Attribution
            $table->string('source_page', 255)->nullable(); // URL where form was submitted
            $table->string('utm_source', 100)->nullable();
            $table->string('utm_medium', 100)->nullable();
            $table->string('utm_campaign', 100)->nullable();

            $table->timestamps();

            // Indexes for filtering and reporting
            $table->index('status');
            $table->index('move_date');
            $table->index('created_at');
            $table->index(['status', 'created_at']);
            $table->index('origin_city');
            $table->index('destination_city');
            $table->index('referral_source');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};
