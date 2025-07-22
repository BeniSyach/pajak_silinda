<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RealisasiPajakController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $query = DB::table('v_sppt_vs_bayar as vs')
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
            ->where('vs.THN_SPPT', '2025');
    
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('vs.NAMA_WP', 'like', "%{$search}%")
                  ->orWhere('vs.ALAMAT_WP', 'like', "%{$search}%")
                  ->orWhereRaw("vs.KD_PROPINSI || '.' || vs.KD_DATI2 || '.' || vs.KD_KECAMATAN || '.' || 
                                vs.KD_KELURAHAN || '.' || vs.KD_BLOK || '.' || vs.NO_URUT || '.' || vs.KD_JNS_OP 
                                LIKE ?", ["%{$search}%"]);
            });
        }
    
        $data_wp = $query
            ->groupBy('vs.NAMA_WP')
            ->orderBy('vs.NAMA_WP')
            ->paginate(20);
    
        return view('pbb', compact('data_wp', 'search'));
    }
    
    public function history($nop)
    {
        $history = DB::table('v_sppt_vs_bayar as vs')
            ->selectRaw("
                vs.THN_SPPT,
                vs.YG_HARUS_BYR,
                vs.TGL_TEMPO,
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
            ->whereRaw("
                KD_PROPINSI || '.' || KD_DATI2 || '.' || KD_KECAMATAN || '.' || 
                KD_KELURAHAN || '.' || KD_BLOK || '.' || NO_URUT || '.' || KD_JNS_OP = ?
            ", [$nop])
            ->groupBy('vs.THN_SPPT', 'vs.YG_HARUS_BYR', 'vs.TGL_TEMPO')
            ->orderByDesc('vs.THN_SPPT')
            ->get();
    
        return view('pbb-history', compact('nop', 'history'));
    }
    
    
    
}