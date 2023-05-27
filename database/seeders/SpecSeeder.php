<?php

namespace Database\Seeders;

use App\Models\Specification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Specseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specification::truncate();

        Specification::create([
            "bedroom" => "2",
            "bathroom" => "1",
            "surface_area" => "100",
            "building_area" => "100",
            "floor" => "1",
        ]);

        Specification::create([
            "bedroom" => "4",
            "bathroom" => "1",
            "surface_area" => "500",
            "building_area" => "100",
            "floor" => "4",
        ]);

        Specification::create([
            "bedroom" => "2",
            "bathroom" => "1",
            "surface_area" => "400",
            "building_area" => "100",
            "floor" => "2",
        ]);

        Specification::create([
            "bedroom" => "4",
            "bathroom" => "1",
            "surface_area" => "100",
            "building_area" => "100",
            "floor" => "3",
        ]);
        
        Specification::create([
            "bedroom" => "4",
            "bathroom" => "1",
            "surface_area" => "100",
            "building_area" => "100",
            "floor" => "3",
        ]);
    }
}