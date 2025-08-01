<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'mysql_secondary';

    public function up(): void
    {
        Schema::connection($this->connection)->create('target_kecamatan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kecamatan', 10)->index();
            $table->string('nama_kecamatan');
            $table->decimal('total_target', 16, 2);
            $table->year('tahun');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::connection($this->connection)->dropIfExists('target_kecamatan');
    }
};
