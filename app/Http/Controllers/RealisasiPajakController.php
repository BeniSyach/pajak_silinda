<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RealisasiPajakController extends Controller
{

    // public function index(Request $request)
    // {
    //     $search = $request->input('search');
    
    //     $query = DB::table('v_sppt_vs_bayar as vs')
    //         ->leftJoin('REF_KELURAHAN_PBB as rk', function ($join) {
    //             $join->on('rk.KD_KECAMATAN', '=', 'vs.KD_KECAMATAN')
    //                  ->on('rk.KD_KELURAHAN', '=', 'vs.KD_KELURAHAN');
    //         })
    //         ->selectRaw("
    //             vs.NAMA_WP AS nama_wp,
    //             MIN(vs.ALAMAT_WP || ', ' || rk.NM_KELURAHAN) AS alamat,
    //             MIN(vs.KD_PROPINSI || '.' || vs.KD_DATI2 || '.' || vs.KD_KECAMATAN || '.' || vs.KD_KELURAHAN || '.' || vs.KD_BLOK || '.' || vs.NO_URUT || '.' || vs.KD_JNS_OP) AS nop,
    //             SUM(vs.LUAS_BUMI) AS luas_bumi,
    //             SUM(vs.LUAS_BNG) AS luas_bng,
    //             SUM(vs.YG_HARUS_BYR) AS yg_harus_byr,
    //             SUM(
    //                 (vs.BAYAR_KE_1 + vs.BAYAR_KE_2 + vs.BAYAR_KE_3 + vs.BAYAR_KE_4) - 
    //                 (vs.DENDA_KE_1 + vs.DENDA_KE_2 + vs.DENDA_KE_3 + vs.DENDA_KE_4)
    //             ) AS sudah_bayar,
    //             MAX(vs.THN_SPPT) AS thn_sppt,
    //             CASE 
    //                 WHEN SUM(
    //                     (vs.BAYAR_KE_1 + vs.BAYAR_KE_2 + vs.BAYAR_KE_3 + vs.BAYAR_KE_4) - 
    //                     (vs.DENDA_KE_1 + vs.DENDA_KE_2 + vs.DENDA_KE_3 + vs.DENDA_KE_4)
    //                 ) >= SUM(vs.YG_HARUS_BYR) THEN 'LUNAS'
    //                 WHEN SUM(
    //                     (vs.BAYAR_KE_1 + vs.BAYAR_KE_2 + vs.BAYAR_KE_3 + vs.BAYAR_KE_4) - 
    //                     (vs.DENDA_KE_1 + vs.DENDA_KE_2 + vs.DENDA_KE_3 + vs.DENDA_KE_4)
    //                 ) = 0 THEN 'BELUM BAYAR'
    //                 ELSE 'KURANG BAYAR'
    //             END AS status
    //         ")
    //         ->where('vs.KD_PROPINSI', '12')
    //         ->where('vs.KD_KECAMATAN', '210')
    //         ->where('vs.THN_SPPT', '2025');
    
    //     if ($search) {
    //         $query->where(function ($q) use ($search) {
    //             $q->where('vs.NAMA_WP', 'like', "%{$search}%")
    //               ->orWhere('vs.ALAMAT_WP', 'like', "%{$search}%")
    //               ->orWhereRaw("vs.KD_PROPINSI || '.' || vs.KD_DATI2 || '.' || vs.KD_KECAMATAN || '.' || 
    //                             vs.KD_KELURAHAN || '.' || vs.KD_BLOK || '.' || vs.NO_URUT || '.' || vs.KD_JNS_OP 
    //                             LIKE ?", ["%{$search}%"]);
    //         });
    //     }
    
    //     $data_wp = $query
    //         ->groupBy('vs.NAMA_WP')
    //         ->orderBy('vs.NAMA_WP')
    //         ->paginate(20);
    
    //     return view('pbb', compact('data_wp', 'search'));
    // }

    public function index(Request $request)
    {
        $data_kecamatan = DB::table('DAT_PBB')
        ->selectRaw('"NM_KELURAHAN" AS nama_desa, COUNT(DISTINCT "NM_WP") AS total_wp')
        ->where('KD_PROPINSI', '12')
        ->where('KD_KECAMATAN', '210')
        ->groupBy('NM_KELURAHAN')
        ->orderBy('NM_KELURAHAN')
        ->get();
    
    return view('per_desa', compact('data_kecamatan'));
    
    
    return view('per_desa', compact('data_kecamatan'));
    }

    public function perDesa($nama_desa)
    {
        $data_wp = DB::table('v_sppt_vs_bayar as vs')
            ->leftJoin('REF_KELURAHAN_PBB as rk', function ($join) {
                $join->on('rk.KD_KECAMATAN', '=', 'vs.KD_KECAMATAN')
                     ->on('rk.KD_KELURAHAN', '=', 'vs.KD_KELURAHAN');
            })
            ->selectRaw("
                vs.NAMA_WP AS nama_wp,
                MIN(vs.ALAMAT_WP || ', ' || rk.NM_KELURAHAN) AS alamat,
                MIN(vs.KD_PROPINSI || '.' || vs.KD_DATI2 || '.' || vs.KD_KECAMATAN || '.' || vs.KD_KELURAHAN || '.' || vs.KD_BLOK || '.' || vs.NO_URUT || '.' || vs.KD_JNS_OP) AS nop,
                SUM(vs.LUAS_BUMI) AS luas_bumi,
                SUM(vs.LUAS_BNG) AS luas_bng,
                SUM(vs.YG_HARUS_BYR) AS yg_harus_byr,
                SUM(
                    (vs.BAYAR_KE_1 + vs.BAYAR_KE_2 + vs.BAYAR_KE_3 + vs.BAYAR_KE_4) -
                    (vs.DENDA_KE_1 + vs.DENDA_KE_2 + vs.DENDA_KE_3 + vs.DENDA_KE_4)
                ) AS sudah_bayar,
                MAX(vs.THN_SPPT) AS thn_sppt,
                CASE 
                    WHEN SUM(
                        (vs.BAYAR_KE_1 + vs.BAYAR_KE_2 + vs.BAYAR_KE_3 + vs.BAYAR_KE_4) -
                        (vs.DENDA_KE_1 + vs.DENDA_KE_2 + vs.DENDA_KE_3 + vs.DENDA_KE_4)
                    ) >= SUM(vs.YG_HARUS_BYR) THEN 'LUNAS'
                    WHEN SUM(
                        (vs.BAYAR_KE_1 + vs.BAYAR_KE_2 + vs.BAYAR_KE_3 + vs.BAYAR_KE_4) -
                        (vs.DENDA_KE_1 + vs.DENDA_KE_2 + vs.DENDA_KE_3 + vs.DENDA_KE_4)
                    ) = 0 THEN 'BELUM BAYAR'
                    ELSE 'KURANG BAYAR'
                END AS status
            ")
            ->where('vs.KD_PROPINSI', '12')
            ->where('vs.KD_KECAMATAN', '210')
            ->where('rk.NM_KELURAHAN', $nama_desa)
            ->where('vs.THN_SPPT', '2025')
            ->groupBy('vs.NAMA_WP')
            ->orderBy('vs.NAMA_WP')
            ->paginate(20); // ✅ Gunakan paginate di sini
    
        return view('pbb', compact('data_wp', 'nama_desa'));
    }
    

    
    public function history($nop)
    {
        // 1. Pecah NOP menjadi 7 bagian
        $parts = explode('.', $nop);
        if (count($parts) !== 7) {
            abort(400, 'Format NOP tidak valid.');
        }
    
        [$satu, $dua, $tiga, $empat, $lima, $enam, $tujuh] = $parts;
    
        // 2. Jalankan query
        $history = DB::select("
            SELECT 
                nama_wp, 
                alamat_wp || ' ' || kelur AS alamat_wp, 
                thn_sppt, 
                yg_harus_byr, 
                tgl_tempo,
                denda_ke_1 + denda_ke_2 + denda_ke_3 + denda_ke_4 AS jml_denda_sdh_byr,
                bayar_ke_1 + bayar_ke_2 + bayar_ke_3 + bayar_ke_4 AS yg_sdh_dibayar, 
                CASE 
                    WHEN yg_harus_byr - (
                        (bayar_ke_1 + bayar_ke_2 + bayar_ke_3 + bayar_ke_4) - 
                        (denda_ke_1 + denda_ke_2 + denda_ke_3 + denda_ke_4)
                    ) <= 0 THEN 'Sudah Bayar' 
                    WHEN yg_harus_byr - (
                        (bayar_ke_1 + bayar_ke_2 + bayar_ke_3 + bayar_ke_4) - 
                        (denda_ke_1 + denda_ke_2 + denda_ke_3 + denda_ke_4)
                    ) = yg_harus_byr THEN 'Belum Bayar' 
                    ELSE 'Kurang Bayar' 
                END AS ket 
            FROM v_sppt_vs_bayar 
            WHERE kd_propinsi = ? 
              AND kd_dati2 = ? 
              AND kd_kecamatan = ? 
              AND kd_kelurahan = ? 
              AND kd_blok = ? 
              AND no_urut = ? 
              AND kd_jns_op = ? 
            ORDER BY thn_sppt DESC
        ", [$satu, $dua, $tiga, $empat, $lima, $enam, $tujuh]);
    
        return view('pbb-history', compact('nop', 'history'));
    }
    
    
    
    
}