<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //$this->call(ParcelLocationsTableSeeder::class);
        //$this->call(ParcelsTableSeeder::class);
        $this->call(StocksTableSeeder::class);
    }
}
