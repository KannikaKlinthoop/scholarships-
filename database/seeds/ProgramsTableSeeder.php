<?php

use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('programs')->insert([
        ['name' => 'Information Technology'],
        ['name' => 'Computer Science'],
        ['name' => 'Computer Engineer']
      ]);
    }
}
