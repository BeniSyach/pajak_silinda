<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TargetPerDesa extends Model
{
    protected $connection = 'mysql_secondary';
    protected $table = 'target_per_desa';
    protected $fillable = ['target_kecamatan_id', 'kode_desa', 'nama_desa', 'total_target'];

    public function kecamatan()
    {
        return $this->belongsTo(TargetKecamatan::class, 'target_kecamatan_id');
    }
}