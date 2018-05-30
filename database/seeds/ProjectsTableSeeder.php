<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'url' => 'https://github.com/mjscode/Minesweeper/tree/master/New%20folder',
            'name'=>'Minesweeper Game',
            'description'=>'A clone of the popular Minesweeper game. Saves high scores and allows user to view them later.',
            'skills'=>'["OOP", "Java", "Swing", "TreeSet", "IO", "GUI"]'
        ]);
        DB::table('projects')->insert([
            'url' => 'http://mylevitz.com/sampleBlog/',
            'name'=>'Blog Site',
            'description'=>'A sample blog site.',
            'skills'=>'["API", "JavaScript", "JQuery", "JSON", "AJAX"]'
        ]);
        DB::table('projects')->insert([
            'url' => 'http://mylevitz.com/responsiveSite/',
            'name'=>'Responsive Website',
            'description'=>'A fully responsive website.',
            'skills'=>'["Responsive Design", "HTML", "CSS"]'
        ]);
    }
}
