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
        Schema::create('rewardand_punishments', function (Blueprint $table) {
            $table->id();
            $table->string('id_user');
            $table->string('tahun');
            $table->string('bulan');
            $table->string('potongan_gaji');
            $table->string('bonus');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rewardand_punishments');
    }
};
