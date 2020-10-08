<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('nama');
            $table->string('no_handphone')->unique();
            $table->string('password');
            $table->integer('role')->default(0);
            $table->string('nik');
            $table->text('alamat');
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('nama_ketua_kelompok')->nullable();
            $table->string('tahun_tanam')->nullable();
            $table->string('jumlah_paket')->nullable();
            $table->string('nomor_rekening')->nullable();
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
        Schema::dropIfExists('users');
    }
}
