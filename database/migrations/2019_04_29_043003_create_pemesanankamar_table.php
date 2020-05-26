<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanankamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanankamar', function (Blueprint $table) {
            $table->increments('idpemesanankamar');
            $table->integer('nomorKTP');
            $table->Date('checkIn');
            $table->Date('checkOut');
            $table->string('tambahan');
            $table->string('member');
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
        Schema::dropIfExists('pemesanankamar');
    }
}
