<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'mysql_secondary';

    public function up(): void
    {
         Schema::connection($this->connection)->create('slogan', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();        // Opsional, bisa jadi "Slogan Pajak", dsb
            $table->text('isi');                        // Isi utama slogan
            $table->boolean('is_active')->default(true); // Menandai apakah slogan aktif
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::connection($this->connection)->dropIfExists('slogan');
    }
};

