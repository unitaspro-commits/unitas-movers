<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->unsignedInteger('avg_home_price')->nullable()->after('population');
            $table->string('dominant_housing_type', 100)->nullable()->after('avg_home_price');
            $table->text('parking_restrictions')->nullable()->after('dominant_housing_type');
            $table->boolean('elevator_booking_required')->default(false)->after('parking_restrictions');
            $table->text('access_notes')->nullable()->after('elevator_booking_required');
            $table->text('nearby_landmarks')->nullable()->after('access_notes');
            $table->enum('move_complexity', ['easy', 'medium', 'hard'])->nullable()->after('nearby_landmarks');
            $table->unsignedInteger('avg_move_cost_2bed')->nullable()->after('move_complexity');
            $table->text('walkability_notes')->nullable()->after('avg_move_cost_2bed');
        });
    }

    public function down(): void
    {
        Schema::table('areas', function (Blueprint $table) {
            $table->dropColumn([
                'avg_home_price',
                'dominant_housing_type',
                'parking_restrictions',
                'elevator_booking_required',
                'access_notes',
                'nearby_landmarks',
                'move_complexity',
                'avg_move_cost_2bed',
                'walkability_notes',
            ]);
        });
    }
};
