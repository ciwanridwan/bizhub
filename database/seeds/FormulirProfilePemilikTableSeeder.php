<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormulirProfilePemilikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `pertanyaan_profile_pemiliks` (`id`, `pertanyaan_pertama`, `pertanyaan_kedua`, `pertanyaan_ketiga`, `pertanyaan_keempat`, `pertanyaan_kelima`, `pertanyaan_keenam`, `pertanyaan_ketujuh`, `pertanyaan_kedelapan`, `pertanyaan_kesembilan`, `pertanyaan_kesepuluh`, `created_at`, `updated_at`) VALUES
    		(1, 'Nama Lengkap', 'Alamat Rumah', 'Kecamatan', 'Kabupaten/Kota', 'Provinsi', 'Kodepos', 'Nomor Handphone', 'Nomor Whatsapp', 'Email', 'Upload Foto KTP', '2019-08-29 12:55:52', '2019-08-29 12:55:52');");
    }
}
