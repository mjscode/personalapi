<?php

use Illuminate\Database\Seeder;

class WebsitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('websites')->insert([
            'url' => 'http:mylevitz.com',
            'summary'=>'Myls Portfolio',
            'description'=>'A website showcasing my portfolio.',
            'skills'=>'["Bootstrap 4", "PHP", "JavaScript", "JQuery", "AJAX"]'
        ]);
        DB::table('websites')->insert([
            'url' => 'https://mylsretail.mylevitz.com',
            'summary'=>'Sample Retail Site',
            'description'=>'A sample website for a retail store. Uses complex code to provide a powerful user experience.
            Security, Crud, Administrative UI, and other features.',
            'skills'=>'["OOP", "DataBase", "Bootstrap 3", "PHP", "MySQL", "JavaScript", "JQuery", "AJAX"]'
        ]);
        DB::table('websites')->insert([
            'url' => 'www.shualmislaserhair.com',
            'summary'=>'Website for Small Business',
            'description'=>'A website for a business showing basic information,
             users can send an email directly from the site.',
            'skills'=>'["Responsive Design", "Bootstrap", "HTML", "CSS", "PHP"]'
        ]);
        DB::table('websites')->insert([
            'url' => 'https://docs.google.com/spreadsheets/d/1gUb2byl7PwvDdGeG67zJS0vinUpOk2dHPX12lMAz4pk/edit#gid=0',
            'summary'=>'Google Web App',
            'description'=>'A web app for Google Spreadsheets. Uses can set, delete, and view an alarm directly from 
            spreadsheets.',
            'skills'=>'["JavaScript", "Google Scripts"]'
        ]);
    }
}
