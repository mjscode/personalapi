<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(EducationTableSeeder::class);
         $this->call(ExperienceTableSeeder::class);
         $this->call(ProjectsTableSeeder::class);
         $this->call(SkillsTableSeeder::class);
         $this->call(WebsitesTableSeeder::class);
    }
}
