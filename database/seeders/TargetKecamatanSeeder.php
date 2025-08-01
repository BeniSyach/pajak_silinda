<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TargetKecamatanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('target_kecamatan')->insert([
            'nama_kecamatan' => 'Silinda',
            'total_target' => 606852580,
            'kode_kecamatan' => '210',
            'tahun' => now()->year,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
