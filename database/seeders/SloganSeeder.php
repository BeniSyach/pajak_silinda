<?php

namespace Database\Seeders;

use App\Models\Slogan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SloganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slogan::create([
            'judul' => 'Sadar Pajak',
            'isi' => 'Bayar pajak tepat waktu untuk pembangunan daerah.',
            'is_active' => true,
        ]);

        Slogan::create([
            'judul' => 'Pajak Kuat Negara Hebat',
            'isi' => 'Pajak adalah kontribusi nyata untuk kemajuan bangsa.',
            'is_active' => false,
        ]);
    }
}
