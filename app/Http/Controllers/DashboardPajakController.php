<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardPajakController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::select("
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
                    vs.KD_KELURAHAN,
                    r.NM_KELURAHAN,
                    TO_CHAR(vs.TGL_TEMPO, 'MM') AS BULAN,
                    TO_CHAR(vs.TGL_TEMPO, 'YYYY') AS TAHUN,
                    SUM(
                        NVL(BAYAR_KE_1, 0) + NVL(BAYAR_KE_2, 0) +
                        NVL(BAYAR_KE_3, 0) + NVL(BAYAR_KE_4, 0) +
                        NVL(DENDA_KE_1, 0) + NVL(DENDA_KE_2, 0) +
                        NVL(DENDA_KE_3, 0) + NVL(DENDA_KE_4, 0)
                    ) AS TOTAL_PENERIMAAN
                FROM v_sppt_vs_bayar vs
                LEFT JOIN REF_KELURAHAN_PBB r 
                    ON vs.KD_KELURAHAN = r.KD_KELURAHAN AND vs.KD_KECAMATAN = r.KD_KECAMATAN
                WHERE
                    vs.KD_PROPINSI = '12'
                    AND vs.KD_KECAMATAN = '210'
                    AND vs.THN_SPPT = '2025'
                    AND vs.TGL_TEMPO IS NOT NULL
                GROUP BY
                    vs.KD_KELURAHAN,
                    r.NM_KELURAHAN,
                    TO_CHAR(vs.TGL_TEMPO, 'YYYY'),
                    TO_CHAR(vs.TGL_TEMPO, 'MM')
                ORDER BY
                    r.NM_KELURAHAN,
                    TO_CHAR(vs.TGL_TEMPO, 'YYYY'),
                    TO_CHAR(vs.TGL_TEMPO, 'MM')
            ");

            // Ubah ke pivot: kelurahan -> bulan -> total
            $data_per_desa = [];
            foreach ($data_per_desa_penerimaan as $item) {
                $nama = $item->nm_kelurahan;
                $bulan = intval($item->bulan); // Ubah jadi angka 1-12
                $total = $item->total_penerimaan;

                if (!isset($data_per_desa[$nama])) {
                    $data_per_desa[$nama] = array_fill(1, 12, 0);
                }

                $data_per_desa[$nama][$bulan] = $total;
            }

        // Kirim data ke view dashboard
        return view('dashboard', [
            'data' => $data,
            'data_penerimaan' => $penerimaan,
            'data_per_desa' => $data_per_desa
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
