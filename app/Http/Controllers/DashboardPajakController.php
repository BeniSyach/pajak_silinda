<?php

namespace App\Http\Controllers;

use App\Models\TargetKecamatan;
use App\Models\TargetPerDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardPajakController extends Controller
{
    public function index(Request $request)
    {
        $dataPerKeluarahanDesa = DB::select("
            SELECT 
                r.NM_KELURAHAN,
                r.KD_KELURAHAN,
                COALESCE(COUNT(v.KD_KELURAHAN), 0) AS TOTAL_WP,
                COALESCE(SUM(CASE 
                    WHEN v.YG_HARUS_BYR - ((v.BAYAR_KE_1 + v.BAYAR_KE_2 + v.BAYAR_KE_3 + v.BAYAR_KE_4) - 
                                           (v.DENDA_KE_1 + v.DENDA_KE_2 + v.DENDA_KE_3 + v.DENDA_KE_4)) <= 0 
                    THEN 1 ELSE 0 END), 0) AS SDH_BAYAR,
                COALESCE(SUM(CASE 
                    WHEN v.YG_HARUS_BYR - ((v.BAYAR_KE_1 + v.BAYAR_KE_2 + v.BAYAR_KE_3 + v.BAYAR_KE_4) - 
                                           (v.DENDA_KE_1 + v.DENDA_KE_2 + v.DENDA_KE_3 + v.DENDA_KE_4)) = v.YG_HARUS_BYR 
                    THEN 1 ELSE 0 END), 0) AS BLM_BAYAR,
                COALESCE(SUM(CASE 
                    WHEN v.YG_HARUS_BYR - ((v.BAYAR_KE_1 + v.BAYAR_KE_2 + v.BAYAR_KE_3 + v.BAYAR_KE_4) - 
                                           (v.DENDA_KE_1 + v.DENDA_KE_2 + v.DENDA_KE_3 + v.DENDA_KE_4)) > 0 
                         AND v.YG_HARUS_BYR - ((v.BAYAR_KE_1 + v.BAYAR_KE_2 + v.BAYAR_KE_3 + v.BAYAR_KE_4) - 
                                               (v.DENDA_KE_1 + v.DENDA_KE_2 + v.DENDA_KE_3 + v.DENDA_KE_4)) < v.YG_HARUS_BYR 
                    THEN 1 ELSE 0 END), 0) AS KRG_BAYAR
            FROM REF_KELURAHAN_PBB r
            LEFT JOIN v_sppt_vs_bayar v ON r.KD_KELURAHAN = v.KD_KELURAHAN 
                                        AND v.KD_PROPINSI = '12'
                                        AND v.KD_KECAMATAN = '210' 
                                        AND v.THN_SPPT = '2025'
            WHERE r.KD_KECAMATAN = '210'
            GROUP BY r.NM_KELURAHAN, r.KD_KELURAHAN
            ORDER BY r.NM_KELURAHAN
        ");

            $penerimaan = DB::select("
            SELECT 
                SUM(NVL(BAYAR_KE_1, 0) + NVL(BAYAR_KE_2, 0) + NVL(BAYAR_KE_3, 0) + NVL(BAYAR_KE_4, 0)) AS TOTAL_BAYAR,
                SUM(NVL(DENDA_KE_1, 0) + NVL(DENDA_KE_2, 0) + NVL(DENDA_KE_3, 0) + NVL(DENDA_KE_4, 0)) AS TOTAL_DENDA,
                SUM(
                    NVL(BAYAR_KE_1, 0) + NVL(BAYAR_KE_2, 0) + NVL(BAYAR_KE_3, 0) + NVL(BAYAR_KE_4, 0) +
                    NVL(DENDA_KE_1, 0) + NVL(DENDA_KE_2, 0) + NVL(DENDA_KE_3, 0) + NVL(DENDA_KE_4, 0)
                ) AS TOTAL_PENERIMAAN
            FROM v_sppt_vs_bayar
            WHERE KD_PROPINSI = '12'
            AND KD_KECAMATAN = '210'
            AND THN_SPPT = '2025'
        ")[0]; // ambil hasil pertama karena DB::select mengembalikan array

        $data_per_desa_penerimaan = DB::select("
                      SELECT
                KD_KELURAHAN,
                NM_KELURAHAN,
                BULAN,
                TAHUN,
                SUM(TOTAL_BAYAR) AS TOTAL_PENERIMAAN
            FROM (
                SELECT
                    vs.KD_KELURAHAN,
                    r.NM_KELURAHAN,
                    TO_CHAR(vs.TGLBYR_KE_1, 'MM') AS BULAN,
                    vs.THN_SPPT AS TAHUN,
                    NVL(vs.BAYAR_KE_1, 0) + NVL(vs.DENDA_KE_1, 0) AS TOTAL_BAYAR
                FROM v_sppt_vs_bayar vs
                LEFT JOIN REF_KELURAHAN_PBB r 
                    ON vs.KD_KELURAHAN = r.KD_KELURAHAN AND vs.KD_KECAMATAN = r.KD_KECAMATAN
                WHERE vs.KD_PROPINSI = '12' AND vs.KD_KECAMATAN = '210' AND vs.THN_SPPT = '2025' AND vs.TGLBYR_KE_1 IS NOT NULL

                UNION ALL

                SELECT
                    vs.KD_KELURAHAN,
                    r.NM_KELURAHAN,
                    TO_CHAR(vs.TGLBYR_KE_2, 'MM') AS BULAN,
                    vs.THN_SPPT AS TAHUN,
                    NVL(vs.BAYAR_KE_2, 0) + NVL(vs.DENDA_KE_2, 0) AS TOTAL_BAYAR
                FROM v_sppt_vs_bayar vs
                LEFT JOIN REF_KELURAHAN_PBB r 
                    ON vs.KD_KELURAHAN = r.KD_KELURAHAN AND vs.KD_KECAMATAN = r.KD_KECAMATAN
                WHERE vs.KD_PROPINSI = '12' AND vs.KD_KECAMATAN = '210' AND vs.THN_SPPT = '2025' AND vs.TGLBYR_KE_2 IS NOT NULL

                UNION ALL

                SELECT
                    vs.KD_KELURAHAN,
                    r.NM_KELURAHAN,
                    TO_CHAR(vs.TGLBYR_KE_3, 'MM') AS BULAN,
                    vs.THN_SPPT AS TAHUN,
                    NVL(vs.BAYAR_KE_3, 0) + NVL(vs.DENDA_KE_3, 0) AS TOTAL_BAYAR
                FROM v_sppt_vs_bayar vs
                LEFT JOIN REF_KELURAHAN_PBB r 
                    ON vs.KD_KELURAHAN = r.KD_KELURAHAN AND vs.KD_KECAMATAN = r.KD_KECAMATAN
                WHERE vs.KD_PROPINSI = '12' AND vs.KD_KECAMATAN = '210' AND vs.THN_SPPT = '2025' AND vs.TGLBYR_KE_3 IS NOT NULL

                UNION ALL

                SELECT
                    vs.KD_KELURAHAN,
                    r.NM_KELURAHAN,
                    TO_CHAR(vs.TGLBYR_KE_4, 'MM') AS BULAN,
                    vs.THN_SPPT AS TAHUN,
                    NVL(vs.BAYAR_KE_4, 0) + NVL(vs.DENDA_KE_4, 0) AS TOTAL_BAYAR
                FROM v_sppt_vs_bayar vs
                LEFT JOIN REF_KELURAHAN_PBB r 
                    ON vs.KD_KELURAHAN = r.KD_KELURAHAN AND vs.KD_KECAMATAN = r.KD_KECAMATAN
                WHERE vs.KD_PROPINSI = '12' AND vs.KD_KECAMATAN = '210' AND vs.THN_SPPT = '2025' AND vs.TGLBYR_KE_4 IS NOT NULL
            ) hasil
            GROUP BY
                KD_KELURAHAN,
                NM_KELURAHAN,
                BULAN,
                TAHUN
            ORDER BY
                NM_KELURAHAN,
                TO_NUMBER(BULAN)
            ");

            // Ubah ke pivot: kelurahan -> bulan -> total
            $data_per_desa = [];

            foreach ($data_per_desa_penerimaan as $row) {
                $nama = $row->nm_kelurahan;
                $bulan = (int)$row->bulan; // sudah '01' - '12', jadi cast ke integer
                $total = (float)$row->total_penerimaan;
            
                if (!isset($data_per_desa[$nama])) {
                    $data_per_desa[$nama] = array_fill(1, 12, 0); // isi default 12 bulan
                }
            
                $data_per_desa[$nama][$bulan] += $total;
            }

            $data_chart = [];

            foreach ($data_per_desa as $nama_kelurahan => $data_bulanan) {
                $data_chart[] = [
                    'x' => $nama_kelurahan,
                    'y' => array_sum($data_bulanan),
                ];
            }
            $targetKecamatan = TargetKecamatan::first();

            // Kelompokkan total penerimaan per kelurahan
        $penerimaan_per_desa = [];
        foreach ($data_per_desa_penerimaan as $row) {
            $kode = $row->kd_kelurahan;
            if (!isset($penerimaan_per_desa[$kode])) {
                $penerimaan_per_desa[$kode] = [
                    'nama_desa' => $row->nm_kelurahan,
                    'total_penerimaan' => 0,
                ];
            }
            $penerimaan_per_desa[$kode]['total_penerimaan'] += $row->total_penerimaan;
        }

        // Ambil data target per desa (MySQL secondary)
        $targets = TargetPerDesa::all()->keyBy('kode_desa');

        // Hitung persentase per desa
        $persentase_per_desa = [];

        foreach ($penerimaan_per_desa as $kode_desa => $data) {
            $target = $targets[$kode_desa]->total_target ?? 0;
            $realisasi = $data['total_penerimaan'];
            $persen = $target > 0 ? ($realisasi / $target) * 100 : 0;

            $persentase_per_desa[] = [
                'kode_desa' => $kode_desa,
                'nama_desa' => $data['nama_desa'],
                'target' => $target,
                'penerimaan' => $realisasi,
                'persentase' => round($persen, 2),
            ];
        }

        // Urutkan berdasarkan persentase
        usort($persentase_per_desa, fn($a, $b) => $b['persentase'] <=> $a['persentase']);
                $persen = ($penerimaan->total_penerimaan / $targetKecamatan->total_target) * 100;
            // Kirim data ke view dashboard
            return view('dashboard', [
                'data' => $dataPerKeluarahanDesa,
                'data_penerimaan' => $penerimaan,
                'data_per_desa' => $data_per_desa,
                'target_kecamatan' => $targetKecamatan,
                'persen' => $persen,
                'data_chart' => $data_chart,
                'data_target_desa' => $persentase_per_desa
            ]);
    }

    public function detail($kd_kelurahan, $status)
    {
        $status = strtolower($status);
        
        $wajibPajak = DB::table('v_sppt_vs_bayar as v')
        ->select(
            DB::raw("v.KD_PROPINSI || '.' || v.KD_DATI2 || '.' || v.KD_KECAMATAN || '.' || v.KD_KELURAHAN || '.' || v.KD_BLOK || '.' || v.NO_URUT || '.' || v.KD_JNS_OP AS NOP"),
            'v.NAMA_WP',
            'v.ALAMAT_WP',
            'v.YG_HARUS_BYR',
            DB::raw('(v.BAYAR_KE_1 + v.BAYAR_KE_2 + v.BAYAR_KE_3 + v.BAYAR_KE_4) AS TOTAL_BAYAR'),
            DB::raw('(v.DENDA_KE_1 + v.DENDA_KE_2 + v.DENDA_KE_3 + v.DENDA_KE_4) AS TOTAL_DENDA')
        )
        ->where('v.KD_PROPINSI', '12')
        ->where('v.KD_KECAMATAN', '210')
        ->where('v.THN_SPPT', '2025')
        ->where('v.KD_KELURAHAN', $kd_kelurahan);

        // Filter berdasarkan status
        if ($status === 'sdh_bayar') {
            $wajibPajak->whereRaw("v.YG_HARUS_BYR - ((v.BAYAR_KE_1 + v.BAYAR_KE_2 + v.BAYAR_KE_3 + v.BAYAR_KE_4) - 
                                (v.DENDA_KE_1 + v.DENDA_KE_2 + v.DENDA_KE_3 + v.DENDA_KE_4)) <= 0");
        } elseif ($status === 'blm_bayar') {
            $wajibPajak->whereRaw("v.YG_HARUS_BYR - ((v.BAYAR_KE_1 + v.BAYAR_KE_2 + v.BAYAR_KE_3 + v.BAYAR_KE_4) - 
                                (v.DENDA_KE_1 + v.DENDA_KE_2 + v.DENDA_KE_3 + v.DENDA_KE_4)) = v.YG_HARUS_BYR");
        } elseif ($status === 'krg_bayar') {
            $wajibPajak->whereRaw("v.YG_HARUS_BYR - ((v.BAYAR_KE_1 + v.BAYAR_KE_2 + v.BAYAR_KE_3 + v.BAYAR_KE_4) - 
                                (v.DENDA_KE_1 + v.DENDA_KE_2 + v.DENDA_KE_3 + v.DENDA_KE_4)) > 0")
                    ->whereRaw("v.YG_HARUS_BYR - ((v.BAYAR_KE_1 + v.BAYAR_KE_2 + v.BAYAR_KE_3 + v.BAYAR_KE_4) - 
                                (v.DENDA_KE_1 + v.DENDA_KE_2 + v.DENDA_KE_3 + v.DENDA_KE_4)) < v.YG_HARUS_BYR");
        }

        $results = $wajibPajak->get();

        return view('detail_pajak', [
            'wajibPajak' => $results,
            'status' => strtoupper($status),
        ]);
    }

}
