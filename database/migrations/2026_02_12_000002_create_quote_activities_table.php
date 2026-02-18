<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quote_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quote_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();

            $table->enum('type', [
                'status_change',
                'note',
                'email_sent',
                'email_received',
                'phone_call',
                'quote_sent',
                'follow_up',
                'system', // auto-generated events
            ]);

            $table->string('summary', 255); // e.g. "Status changed from new to contacted"
            $table->text('details')->nullable(); // Longer notes or email content
            $table->json('metadata')->nullable(); // Flexible data (old_status, new_status, etc.)

            $table->timestamps();

            $table->index(['quote_id', 'created_at']);
            $table->index('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quote_activities');
    }
};
