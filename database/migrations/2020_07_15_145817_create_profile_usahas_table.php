<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_usahas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_usaha');
            $table->string('badan_usaha');
            $table->string('jenis_usaha');
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->string('kodepos');
            $table->string('nomor_kontak');
            $table->string('email');
            $table->string('tahun_berdiri');
            $table->string('deskripsi_usaha');
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
        Schema::dropIfExists('profile_usahas');
    }
}
