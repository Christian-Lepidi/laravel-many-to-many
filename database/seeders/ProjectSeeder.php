<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = Type::all()->pluck('id');
        $types[] = null;

        for ($i = 0; $i < 40; $i++) {
            $type_id = $faker->randomElement($types);
            $project = new Project;
            $project->type_id = $type_id;
            $project->title = $faker->catchphrase();
            $project->description = $faker->sentence();
            $project->date_of_publication = $faker->date();
            $project->save();
        }
    }
}
