<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

{
    public function up()
    {
        Schema::create('statistik_pemain', function (Blueprint $table) {
            $table->id('ID_Statistik');
            $table->unsignedBigInteger('ID_Pemain');
            $table->integer('Jumlah_Pertandingan');
            $table->integer('Jumlah_Gol');
            $table->integer('Jumlah_Assist');
            $table->integer('Kartu_Kuning');
            $table->integer('Kartu_Merah');
            $table->integer('Penyelamatan');
            $table->integer('Clean_Sheet');
            $table->integer('Tahun');
            $table->foreign('ID_Pemain')->references('ID_Pemain')->on('pemain');
        });
    }

    public function down()
    {
        Schema::dropIfExists('statistik_pemain');
    }
}
;
