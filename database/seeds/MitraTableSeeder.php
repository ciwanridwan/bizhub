<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MitraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `mitras` (`id`, `nama`, `email`, `nomor_telepon`, `badan_usaha`, `created_at`, `updated_at`) VALUES
    		(1, 'BRI', 'bri@gmail.com', '081321454899', 'PT', '2019-08-29 12:55:52', '2019-08-29 12:55:52');");
    }
}
