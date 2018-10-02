<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
          ['name' => 'Master'],
          ['name' => 'PHD'],
          ['name' => 'Master and PHD'],
          ['name' => 'Bachelors'],
          ['name' => 'Not defined']
        ]);
    }
}
