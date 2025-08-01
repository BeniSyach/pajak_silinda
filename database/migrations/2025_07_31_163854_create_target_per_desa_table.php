<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'mysql_secondary';

    public function up(): void
    {
        Schema::connection($this->connection)->create('target_per_desa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('target_kecamatan_id')->constrained('target_kecamatan')->onDelete('cascade');
            $table->string('kode_desa', 10)->index();
            $table->string('nama_desa');
            $table->decimal('total_target', 16, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::connection($this->connection)->dropIfExists('target_per_desa');
    }
};
