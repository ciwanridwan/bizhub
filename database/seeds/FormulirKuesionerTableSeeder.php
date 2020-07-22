<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormulirKuesionerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FORMULIR PERTANYAAN KUESIONER
        DB::insert("INSERT INTO `pertanyaan_kuesioners` (`id`, `pertanyaan_pertama`, `pertanyaan_kedua`, `pertanyaan_ketiga`, `pertanyaan_keempat`, `pertanyaan_kelima`, `pertanyaan_keenam`, `pertanyaan_ketujuh`, `pertanyaan_kedelapan`, `pertanyaan_kesembilan`, `pertanyaan_kesepuluh`, `pertanyaan_kesebelas`, `pertanyaan_keduabelas`, `pertanyaan_ketigabelas`, `pertanyaan_keempatbelas`, `pertanyaan_kelimabelas`, `created_at`, `updated_at`) VALUES
    		(1, 'Jenis Usaha', 'Bidang Usaha', 'Skala Usaha', 'Sudah Ada PT Atau Belum', 'Nama PT/CV', 'NPWP', 'Tanggal Pendirian', 'Omset Perbulan', 'Modal Awal', 'Jumlah Kas Saat Ini', 'Jumlah Karyawan Tetap', 'Jumlah Karyawan Lengkap', 'Kondisi Terkini Usaha', 'Jelaskan Kondisi Mengapa Usaha Bagus/Kurang Bagus', 'Jangkauan Area Pelanggan', '2019-08-29 12:55:52', '2019-08-29 12:55:52');");
    }
}
