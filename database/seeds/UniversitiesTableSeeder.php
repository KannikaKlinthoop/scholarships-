<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('universities')->insert([
        ['name' => 'DFID'],
        ['name' => 'University of the People'],
        ['name' => 'VU University Amsterdam'],
        ['name' => 'Utrecht University'],
        ['name' => 'Radboud University'],
        ['name' => 'Chalmers University of Technology']
      ]);
    }
}
