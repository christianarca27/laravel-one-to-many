<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $generator)
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();

            $newProject->title = $generator->sentence(3);
            $newProject->date = $generator->date();
            $newProject->preview = $generator->imageUrl();
            $newProject->description = $generator->paragraph();
            $newProject->url = 'https://github.com/christianarca27/' . $generator->word() . '.git';
            $newProject->slug = Str::slug($newProject->title);

            $newProject->save();
        }
    }
}
