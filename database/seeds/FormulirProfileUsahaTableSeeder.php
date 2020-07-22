<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FormulirProfileUsahaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PERTANYAAN PROFILE USAHA
        DB::insert("INSERT INTO `pertanyaan_profile_usahas` (`id`, `pertanyaan_pertama`, `pertanyaan_kedua`, `pertanyaan_ketiga`, `pertanyaan_keempat`, `pertanyaan_kelima`, `pertanyaan_keenam`, `pertanyaan_ketujuh`, `pertanyaan_kedelapan`, `pertanyaan_kesembilan`, `pertanyaan_kesepuluh`, `pertanyaan_kesebelas`, `pertanyaan_keduabelas`, `created_at`, `updated_at`) VALUES
        (1, 'Nama Usaha', 'Badan Usaha', 'Jenis Usaha', 'Alamat', 'Kecamatan', 'Kabupaten/Kota', 'Provinsi', 'Kodepos', 'Nomor Kontak', 'Email', 'Tahun Berdiri', 'Deskripsi Usaha',  '2019-08-29 12:55:52', '2019-08-29 12:55:52');");
    }
}
