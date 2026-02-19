<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("ALTER TABLE quotes MODIFY COLUMN move_size ENUM('home','studio','1br','2br','3br','4br_plus','office') NOT NULL");
    }

    public function down(): void
    {
        DB::statement("ALTER TABLE quotes MODIFY COLUMN move_size ENUM('studio','1br','2br','3br','4br_plus','office') NOT NULL");
    }
};
