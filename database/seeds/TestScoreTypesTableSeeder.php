<?php

use Illuminate\Database\Seeder;

class TestScoreTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('test_score_types')->insert([
        ['name' => 'TOEIC'],
        ['name' => 'TOEFL'],
        ['name' => 'IELTS'],
        ['name' => 'Not defined']
      ]);
    }
}
