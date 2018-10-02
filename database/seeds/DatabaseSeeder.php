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
        $this->call(LevelsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(ProgramsTableSeeder::class);
        $this->call(TestScoreTypesTableSeeder::class);
        $this->call(UniversitiesTableSeeder::class);
        $this->call(ScholarsTableSeeder::class);
        $this->call(ScholarTestscoretypeTableSeeder::class);
        $this->call(ScholarLinkTypesTableSeeder::class);
    }
}
