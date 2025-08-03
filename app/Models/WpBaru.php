<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WpBaru extends Model
{
    use HasFactory;

    protected $connection = 'mysql_secondary';
    protected $fillable = [
        'nama_wp', 'alamat_wp', 'no_ktp', 'no_hp',
        'bukti_kepemilikan_tanah', 'ktp_wp',
        'status_penjemputan', 'status_validasi'
    ];
}
