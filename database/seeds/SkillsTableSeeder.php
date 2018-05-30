<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name'=>'Java',
            'proficiency'=>'Advanced',
            'experience'=>'Studied intensivly for six months. Created several projects, a minesweeper game.'
        ]);
        DB::table('skills')->insert([
            'name'=>'Python',
            'proficiency'=>'Intermediate',
            'experience'=>"Learned it on Udacity's online courzes. Completed several online projects."
        ]);
        DB::table('skills')->insert([
            'name'=>'Html',
            'proficiency'=>'Advanced',
            'experience'=>'Used extensively in projects and websites.'
        ]);
        DB::table('skills')->insert([
            'name'=>'CSS',
            'proficiency'=>'Advanced',
            'experience'=>'Used extensively in projects and websites.'
        ]);
        DB::table('skills')->insert([
            'name'=>'Bootstrap',
            'proficiency'=>'Advanced',
            'experience'=>'Used extensively in projects and websites. Familiar with 3 and 4'
        ]);
         DB::table('skills')->insert([
            'name'=>'MySQL',
            'proficiency'=>'Advanced',
            'experience'=>'Used extensively in projects and websites. Created unique queries as needed.'
        ]);
        DB::table('skills')->insert([
            'name'=>'PHP',
            'proficiency'=>'Advanced',
            'experience'=>'Used extensively in projects and websites. Both in the back-end and embedded in the html.'
        ]);
        DB::table('skills')->insert([
            'name'=>'JavaScript',
            'proficiency'=>'Advanced',
            'experience'=>'Used extensively in projects and websites. Used it to create a Goolge App for Google Spreadsheets.'
        ]);
        DB::table('skills')->insert([
            'name'=>'Goolge Scripts',
            'proficiency'=>'Intermediate',
            'experience'=>'Created a Google App for Google Spreadsheets.'
        ]);
        DB::table('skills')->insert([
            'name'=>'JQuery',
            'proficiency'=>'Advanced',
            'experience'=>'Used in almost all projects using JavaScript.'
        ]);
        DB::table('skills')->insert([
            'name'=>'AJAX',
            'proficiency'=>'Advanced',
            'experience'=>'Used in almost all projects using a back-end.'
        ]);
        DB::table('skills')->insert([
            'name'=>'JSON',
            'proficiency'=>'Intermediate',
            'experience'=>"Used together with AJAX, and API's."
        ]);
        DB::table('skills')->insert([
            'name'=>'Angular JS',
            'proficiency'=>'Beginner',
            'experience'=>'Created several school projects.'
        ]);
        DB::table('skills')->insert([
            'name'=>'React JS',
            'proficiency'=>'Beginner',
            'experience'=>'Created several school projects.'
        ]);
        DB::table('skills')->insert([
            'name'=>'Node JS',
            'proficiency'=>'Beginner',
            'experience'=>'Created several school projects".'
        ]);
        DB::table('skills')->insert([
            'name'=>'Express JS',
            'proficiency'=>'Beginner',
            'experience'=>'Created several school projects".'
        ]);
        DB::table('skills')->insert([
            'name'=>'Mongo DB',
            'proficiency'=>'Beginner',
            'experience'=>'Hope to increase my experience.'
        ]);
        DB::table('skills')->insert([
            'name'=>'Word Press',
            'proficiency'=>'Beginner',
            'experience'=>'Assisted in making changes to an existing website.'
        ]);
        DB::table('skills')->insert([
            'name'=>'Android Devopment',
            'proficiency'=>'Beginner',
            'experience'=>'Studied Android design on Udacity.'
        ]);

    }
}
