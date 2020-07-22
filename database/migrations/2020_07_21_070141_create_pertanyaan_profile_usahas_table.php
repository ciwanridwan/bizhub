<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanProfileUsahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan_profile_usahas', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan_pertama');
            $table->string('pertanyaan_kedua');
            $table->string('pertanyaan_ketiga');
            $table->string('pertanyaan_keempat');
            $table->string('pertanyaan_kelima');
            $table->string('pertanyaan_keenam');
            $table->string('pertanyaan_ketujuh');
            $table->string('pertanyaan_kedelapan');
            $table->string('pertanyaan_kesembilan');
            $table->string('pertanyaan_kesepuluh');
            $table->string('pertanyaan_kesebelas');
            $table->string('pertanyaan_keduabelas');
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
        Schema::dropIfExists('pertanyaan_profile_usahas');
    }
}
