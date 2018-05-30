<?php

use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience')->insert([
            'title' => 'Software Engineer Intern',
            'company' => 'BitBean Lakewood New Jersey',
            'start-date' => "2018-05-15",
            'end-date' => "2018-08-15",
            'roles' => "Building personal project, project together with partner, and as part of a team.",
            'accomplishments' => 'currently too early.'
        ]);

        DB::table('experience')->insert([
            'title' => 'Communications Clerk',
            'company' => 'Beth Medrash Govoha New Jersey',
            'start-date' => "2016-04-20",
            'end-date' => "2018-01-28",
            'roles'=> "Contacted Alumni to update contact information. Contacted students to
             assist with issues in regards of registration.",
            'accomplishments' => "Tracked down difficult to reach Alumni and Students. Created and implemented web
             apps for staff use."
        ]);
    }
}
