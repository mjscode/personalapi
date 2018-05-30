<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
            'subject' => 'Software Web and App Development',
            'school' => 'School of Evolving Technologies (PCS)',
            'completed' => "2018-03-28",
            'degree' => "Certificate",
            'summary' => "Completed an intensive and comprehensive program 
            focused on developing critical, real-world web and application programming and design skills.",
        ]);
        DB::table('education')->insert([
            'subject' => 'Talmudic Studies',
            'school' => 'Beth Medrash Govoha',
            'completed' => "2016-09-15",
            'degree' => "Bachelors",
            'summary' => "Studied in a highly competitive environment, 
            developed inter-personal skills,  strong logic and analytical thinking.",
        ]);
    }
}
