<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPenjualanLakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_penjualan_lakus', function (Blueprint $table) {
            $table->id();
            $table->integer("bobot_laku");
            $table->unsignedBigInteger("greate_id");
            $table->unsignedBigInteger("daftar_penjualan_id");
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
        Schema::dropIfExists('hasil_penjualan_lakus');
    }
}
