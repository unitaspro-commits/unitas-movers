<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('routes', function (Blueprint $table) {
            $table->string('highway_name', 150)->nullable()->after('is_bidirectional');
            $table->string('highway_number', 20)->nullable()->after('highway_name');
            $table->text('seasonal_tips')->nullable()->after('highway_number');
            $table->unsignedInteger('fuel_cost_estimate')->nullable()->after('seasonal_tips');
            $table->string('popular_move_months', 100)->nullable()->after('fuel_cost_estimate');
            $table->json('origin_housing_data')->nullable()->after('popular_move_months');
            $table->json('dest_housing_data')->nullable()->after('origin_housing_data');
            $table->text('road_conditions_note')->nullable()->after('dest_housing_data');
            $table->text('notable_stops')->nullable()->after('road_conditions_note');
            $table->boolean('backhaul_discount')->default(false)->after('notable_stops');
            $table->string('elevation_change', 100)->nullable()->after('backhaul_discount');
        });
    }

    public function down(): void
    {
        Schema::table('routes', function (Blueprint $table) {
            $table->dropColumn([
                'highway_name',
                'highway_number',
                'seasonal_tips',
                'fuel_cost_estimate',
                'popular_move_months',
                'origin_housing_data',
                'dest_housing_data',
                'road_conditions_note',
                'notable_stops',
                'backhaul_discount',
                'elevation_change',
            ]);
        });
    }
};
