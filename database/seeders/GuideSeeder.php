<?php

namespace Database\Seeders;

use App\Models\Guide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guide::truncate();

        for ($i = 0; $i < 6; $i++) {
            Guide::create([
                "title" => fake()->title(),
                "description" => fake()->text(),
                "image" => fake()->imageUrl(),
            ]);
        }
        

        // Guide::create([
        //     "title" => fake()->title(),
        //     "description" => fake()->text(),
        //     "image" => fake()->imageUrl(),
        // ]);
        // Guide::create([
        //     "title" => fake()->title(),
        //     "description" => fake()->text(),
        //     "image" => fake()->imageUrl(),
        // ]);
        // Guide::create([
        //     "title" => fake()->title(),
        //     "description" => fake()->text(),
        //     "image" => fake()->imageUrl(),
        // ]);
        // Guide::create([
        //     "title" => fake()->title(),
        //     "description" => fake()->text(),
        //     "image" => fake()->imageUrl(),
        // ]);
        // Guide::create([
        //     "title" => fake()->title(),
        //     "description" => fake()->text(),
        //     "image" => fake()->imageUrl(),
        // ]);
        // Guide::create([
        //     "title" => fake()->title(),
        //     "description" => fake()->text(),
        //     "image" => fake()->imageUrl(),
        // ]);
    }
}