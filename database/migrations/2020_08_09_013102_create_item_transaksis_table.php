<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_transaksis', function (Blueprint $table) {
            $table->id();
            $table->string("uuid");
            $table->string("nama");
            $table->string("gambar");
            $table->integer("harga");
            $table->integer("jumlah");
            $table->unsignedBigInteger("transaksi_id"); 
            $table->timestamps();

            $table->foreign("transaksi_id")->references("id")->on("transaksis")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_transaksis');
    }
}
