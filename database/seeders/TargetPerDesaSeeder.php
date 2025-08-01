<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TargetPerDesaSeeder extends Seeder
{
    public function run(): void
    {
        $targetKecamatanId = DB::table('target_kecamatan')
            ->where('kode_kecamatan', '210')
            ->value('id');

        if (!$targetKecamatanId) {
            $this->command->error('Target Kecamatan dengan kode 210 tidak ditemukan.');
            return;
        }

        $data = [
            ['kode_desa' => '201', 'nama_desa' => 'Tarean',         'total_target' => 253709609],
            ['kode_desa' => '202', 'nama_desa' => 'Tapak Meriah',   'total_target' => 76610616],
            ['kode_desa' => '204', 'nama_desa' => 'Damak Gelugur',  'total_target' => 104623567],
            ['kode_desa' => '205', 'nama_desa' => 'Sungai Buaya',   'total_target' => 63508257],
            ['kode_desa' => '207', 'nama_desa' => 'Kulasar',        'total_target' => 14994794],
            ['kode_desa' => '208', 'nama_desa' => 'Pamah',          'total_target' => 32163473],
            ['kode_desa' => '206', 'nama_desa' => 'Batu Masagi',    'total_target' => 33117087],
            ['kode_desa' => '209', 'nama_desa' => 'Pagar Manik',    'total_target' => 28134177],
        ];

        foreach ($data as &$desa) {
            $desa['target_kecamatan_id'] = $targetKecamatanId;
            $desa['created_at'] = now();
            $desa['updated_at'] = now();
        }

        DB::table('target_per_desa')->insert($data);
    }
}
