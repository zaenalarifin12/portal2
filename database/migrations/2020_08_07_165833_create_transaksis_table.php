<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string("uuid");
            // status pembayaran lunas/ belum
            $table->string("status")->default(0);
            $table->string("gambar")->nullable();
            $table->string("status_pengiriman")->default(0);
            $table->integer("tipe_pembayaran");
            $table->unsignedBigInteger("user_id");
            $table->timestamps();

            $table->foreign("user_id")
                ->references("id")->on("users")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
