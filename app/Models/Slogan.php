<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slogan extends Model
{
    protected $connection = 'mysql_secondary';
    protected $table = 'slogan';

    protected $fillable = [
        'judul',
        'isi',
        'is_active',
    ];
}
