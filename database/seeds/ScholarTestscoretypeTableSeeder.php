<?php

use Illuminate\Database\Seeder;

class ScholarTestscoretypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('scholar_testscoretype')->insert([
        [
        'scholar_id' => 1,
        'test_score_types_id' => 1
      ],
      [
      'scholar_id' => 1,
      'test_score_types_id' => 2
      ]
      ]);
    }
}
