<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitaskategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasilitaskategori', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_fasilitas')->unsigned();
            $table->integer('id_kategori')->unsigned();
            $table->timestamps();

            $table->foreign('id_fasilitas')->references('id')->on('fasilitas');
            $table->foreign('id_kategori')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasilitaskategori');
    }
}
