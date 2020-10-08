<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarPenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_penjualans', function (Blueprint $table) {
            $table->id();
            $table->integer("jumlah_bal");
            $table->tinyInteger("pembayaran");
            $table->unsignedBigInteger("user_id");
            $table->tinyInteger("status")->default(0); //status penjualan , apakah masih berlaku atau tidak(belum dievaluasi/tidak)
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
        Schema::dropIfExists('daftar_penjualans');
    }
}
