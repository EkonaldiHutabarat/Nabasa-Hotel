<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_customer_order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tanggal_check_in');
            $table->string('bulan_check_in');
            $table->string('tahun_check_in');
            $table->string('tanggal_check_out');
            $table->string('bulan_check_out');
            $table->string('tahun_check_out');
            $table->string('KTP');
            $table->string('tambahan');
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
        Schema::dropIfExists('_customer_order');
    }
}
