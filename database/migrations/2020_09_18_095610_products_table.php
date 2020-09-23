<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_table', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('harga');
            $table->string('is_ready');
            $table->string('kode_unik');
            $table->string('description');
            $table->string('jenis');
            $table->string('gambar');
            $table->integer('menu_id');
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
