<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_usaha');
            $table->string('bidang_usaha');
            $table->string('skala_usaha');
            $table->string('existing_pt');
            $table->string('nama_pt');
            $table->string('npwp');
            $table->string('tanggal_berdiri');
            $table->string('omset_perbulan');
            $table->string('modal_awal');
            $table->string('jumlah_kas');
            $table->string('jumlah_karyawan_tetap');
            $table->string('jumlah_karyawan_lengkap');
            $table->string('kondisi_usaha');
            $table->mediumText('penjelasan_kondisi');
            $table->string('jangkauan_area');
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
        Schema::dropIfExists('kuesioners');
    }
}
