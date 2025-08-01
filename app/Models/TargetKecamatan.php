<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TargetKecamatan extends Model
{
    protected $connection = 'mysql_secondary';
    protected $table = 'target_kecamatan';
    protected $fillable = ['kode_kecamatan', 'nama_kecamatan', 'total_target', 'tahun'];

    public function desa()
    {
        return $this->hasMany(TargetPerDesa::class);
    }
}