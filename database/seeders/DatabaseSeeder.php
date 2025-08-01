<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan seeder untuk koneksi MySQL sekunder
        $this->call(MysqlSecondaryUserSeeder::class);

        // Jalankan seeder untuk slogan
        $this->call(SloganSeeder::class);
        $this->call(TargetKecamatanSeeder::class);
        $this->call(TargetPerDesaSeeder::class);
    }
}
