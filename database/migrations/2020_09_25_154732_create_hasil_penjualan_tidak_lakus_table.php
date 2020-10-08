<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPenjualanTidakLakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_penjualan_tidak_lakus', function (Blueprint $table) {
            $table->id();
            $table->integer("bobot_tidak_laku");
            $table->text("alasan");
            $table->tinyInteger("status_pengembalian")->default(0); //belum /sudah
            $table->text("deskripsi_pengembalian")->nullable();
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
        Schema::dropIfExists('hasil_penjualan_tidak_lakus');
    }
}
