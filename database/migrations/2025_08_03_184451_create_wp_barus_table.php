<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('mysql_secondary')->create('wp_barus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wp');
            $table->text('alamat_wp')->nullable();
            $table->string('no_ktp');
            $table->string('bukti_kepemilikan_tanah'); // path file
            $table->string('ktp_wp'); // path file
            $table->string('no_hp'); 
            $table->enum('status_penjemputan', ['belum_dijemput', 'sudah_dijemput'])->default('belum_dijemput');
            $table->enum('status_validasi', ['menunggu', 'valid', 'tidak_valid'])->default('menunggu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wp_barus');
    }
};
