<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('countries')->insert([
        ['name' => 'United Kingdom'],
        ['name' => 'United State'],
        ['name' => 'Thailand'],
        ['name' => 'Canada'],
        ['name' => 'Japan'],
        ['name' => 'Australia'],
        ['name' => 'China'],
        ['name' => 'Netherlands']
      ]);
    }
}
