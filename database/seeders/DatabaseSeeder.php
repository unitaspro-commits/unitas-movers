<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@unitasmovers.ca',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            ServiceSeeder::class,
            AreaSeeder::class,
            RouteSeeder::class,
            BlogPostSeeder::class,
            ReviewSeeder::class,
            FaqSeeder::class,
            SeoMetaSeeder::class,
        ]);
    }
}
