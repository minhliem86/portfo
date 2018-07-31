<?php

use Illuminate\Database\Seeder;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\ProjectTypes::class, 5)->create()->each(function ($projecttype){
           $projecttype->projects()->save(factory(App\Models\Project::class)->make());
        });
    }
}
