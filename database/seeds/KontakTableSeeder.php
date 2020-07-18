<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KontakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `kontaks` (`id`, `nama`, `email`, `nomor_telepon`, `created_at`, `updated_at`) VALUES
    		(1, 'Bizhub', 'bizhub@gmail.com', '081321454899', '2019-08-29 12:55:52', '2019-08-29 12:55:52');");
    }
}
