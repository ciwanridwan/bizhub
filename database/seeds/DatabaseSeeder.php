<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersTableSeeder');
        $this->call('ProvinsiTableSeeder');
        $this->call('KotaTableSeeder');
        $this->call('KecamatanTableSeeder');
        $this->call('KelurahanTableSeeder');
        $this->call('KodeposTableSeeder');
        $this->call('KontakTableSeeder');
        $this->call('MitraTableSeeder');
        $this->call('SliderTableSeeder');
        $this->call('FormulirKuesionerTableSeeder');
        $this->call('FormulirProfileUsahaTableSeeder');
        $this->call('FormulirProfilePemilikTableSeeder');
    }
}
