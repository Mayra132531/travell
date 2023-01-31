<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_pemesanans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pemesanan_id');
            $table->enum('pesawat',['batik_air', 'garuda','airbus012','lion_air']);
            $table->date('tanggal_beli');
            $table->date('tanggal_berangkat');
            $table->string('bandara_asal');
            $table->string('bandara_tujuan');

            $table->foreign('pemesanan_id')->references('id')->on('pemesanans')->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_pemesanans');
    }
};
