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
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('penjualan_id')->index(); // indexing for foreign key
            $table->unsignedBigInteger('barang_id')->index(); // indexing for foreign key
            $table->integer('harga');
            $table->integer('jumlah');
            $table->timestamps();

            // defining foreign key at penjualan_id column refers to penjualan_id column on t_penjualan table
            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan');
            // defining foreign key at barang_id column refers to barang_id column on m_barang table
            $table->foreign('barang_id')->references('barang_id')->on('m_barang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
