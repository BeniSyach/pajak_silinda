<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTotalTargetToInteger extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('target_kecamatan', function (Blueprint $table) {
            $table->integer('total_target')->change();
        });

        Schema::table('target_per_desa', function (Blueprint $table) {
            $table->integer('total_target')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('target_kecamatan', function (Blueprint $table) {
            $table->decimal('total_target', 16, 2)->change();
        });

        Schema::table('target_per_desa', function (Blueprint $table) {
            $table->decimal('total_target', 16, 2)->change();
        });
    }
}
