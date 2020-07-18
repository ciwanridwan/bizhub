<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `sliders` (`id`, `slider1`, `slider2`, `slider3`, `created_at`, `updated_at`) VALUES
    		(1, 'Bizhub adalah layanan khusus yang diberikan oleh Kementerian Ketenagakerjaan Republik Indonesia untuk para wirausahawan mengembangkan usahanya.', 'Wirausaha Berdaya, Semua Bisa Kerja', 'Dengan layanan Bizhub, wirausahawan dapat memantau perkembangan usahanya dan mendapatkan saran dari para pakar', '2020-07-01 12:55:52', '2020-07-01 12:55:52');");
    }
}
