<?php

use Illuminate\Database\Seeder;

class ScholarLinkTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('scholar_link_type')->insert([
      [
        'reference_id' => 1,
        'reference_type'=> 'App\Country',
        'scholar_id' => 1
      ],
      [
        'reference_id' => 1,
        'reference_type'=> 'App\University',
        'scholar_id' => 1
      ],
      [
        'reference_id' => 2,
        'reference_type'=> 'App\Country',
        'scholar_id' => 2
      ],
      [
        'reference_id' => 2,
        'reference_type'=> 'App\University',
        'scholar_id' => 2
      ]
    ]);
    }
}
