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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pemesanan_id');
            $table->unsignedBigInteger('detail_pemesanan_id');
            $table->string('harga');
            $table->enum('pembayaran',['ATM', 'BANK','SMS Banking']);
            $table->enum('status',['sudah', 'belum']);

            $table->foreign('pemesanan_id')->references('id')->on('pemesanans')->onDelete('cascade');
            $table->foreign('detail_pemesanan_id')->references('id')->on('detail_pemesanans')->onDelete('cascade');

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
        Schema::dropIfExists('transaksis');
    }
};
