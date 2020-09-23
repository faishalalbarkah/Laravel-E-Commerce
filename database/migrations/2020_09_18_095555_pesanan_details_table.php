<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PesananDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans_details_table', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_pesanan');
            $table->integer('total_harga');
            $table->string('nama');
            $table->string('kode_unik');
            $table->integer('product_id');
            $table->integer('pesanan_id');
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
        //
    }
}
