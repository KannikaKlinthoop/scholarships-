<?php

use Illuminate\Database\Seeder;

class ScholarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('scholars')->insert([
        [
          'name_scholar' => 'Commonwealth Scholarships for Developing Commonwealth Countries',
          'level_id' => 1,
          'program_id' => 1,
          // 'test_score_types_id' => 4,
          'inclusion' => 'Each Scholarship provides airfare to and from United Kingdom,tuition and examination fees, stipend, thesis grant (if applicable), initial arrival allowance, among others.',
          'description' => 'Commonwealth Scholarships for Master’s study in the UK are offered for citizens of developing Commonwealth countries. These scholarships are funded by the UK Department for International Development (DFID).'
        ],
        [
          'name_scholar' => 'Utrecht Excellence Scholarships for International Students',
          'level_id' => 1,
          'program_id' => 1,
          // 'test_score_types_id' => 4,
          'inclusion' => 'The Utrecht Excellence scholarship can be awarded as tuition fees OR tuition fees plus 11.000 euro living expenses.',
          'description' => 'The Utrecht Excellence Scholarship offers a number of outstanding prospective students the opportunity to pursue a Master’s degree in a selected number of fields at Utrecht University.'
        ],
        [
          'name_scholar' => 'Radboud Scholarship Programme for International Students',
          'level_id' => 1,
          'program_id' => 1,
          // 'test_score_types_id' => 4,
          'inclusion' => 'The scholarship consists of a partial tuition waiver. The tuition fee will be waived to the level of an EEA student. For example: a grant holder in 2018/2019 will pay a tuition fee of only €2,060, instead of €9,879 or €10,856.
In addition, the Radboud Scholarship also covers costs such as those for visa, residence permit, health insurance and liability insurance. This amounts to about €940..*The Radboud Scholarship is not a full scholarship and does not include living costs.
In the case of a two-year programme: to qualify for the grant during the second year, you need to have passed all courses in the first year.',
          'description' => 'The Radboud Scholarship Programme offers a selected number of talented prospective non-EEA students the opportunity to receive a scholarship to pursue a complete English-taught Master’s degree programme at Radboud University.'
        ]
      ]);
    }
}
