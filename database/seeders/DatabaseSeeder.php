<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agent;
use App\Models\Agent_Property;
use App\Models\Customer;
use App\Models\Developer;
use App\Models\Guide;
use App\Models\Location;
use App\Models\Property;
use App\Models\Specification;
use App\Models\Status;
use App\Models\Type;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        Status::truncate();

        $statuses = [
            'Dijual',
            'Disewa'
        ];

        foreach ($statuses as $status) {
            Status::create([
                "name" => $status,
            ]);
        }

        Type::truncate();

        $types = [
            'Housing',
            'Apartement',
            'Ruko',
            'Villa',
            'Rusun',
        ];

        foreach ($types as $type) {
            Type::create([
                "name" => $type,
            ]);
        }

        Location::truncate();
        
        $provinces = [
            "Aceh",
            "Bali",
            "Bangka Belitung",
            "Banten",
            "Bengkulu",
            "Gorontalo",
            "DKI Jakarta",
            "Jambi",
            "Jawa Barat",
            "Jawa Tengah",
            "Jawa Timur",
            "Kalimantan Barat",
            "Kalimantan Selatan",
            "Kalimantan Tengah",
            "Kalimantan Timur",
            "Kalimantan Utara",
            "Kepulauan Riau",
            "Lampung",
            "Maluku",
            "Maluku Utara",
            "Nusa Tenggara Barat",
            "Nusa Tenggara Timur",
            "Papua",
            "Papua Barat",
            "Riau",
            "Sulawesi Barat",
            "Sulawesi Selatan",
            "Sulawesi Tengah",
            "Sulawesi Tenggara",
            "Sulawesi Utara",
            "Sumatera Barat",
            "Sumatera Selatan",
            "Sumatera Utara",
            "Yogyakarta"
        ];

        foreach ($provinces as $province) {
            Location::create([
                "name" => $province,
            ]);
        }

        // Agent::truncate();

        for ($i = 0; $i < 5; $i++) {
            Agent::create([
                "email" => fake()->email(),
                "password" => bcrypt(fake()->password()),
                "name" => fake()->name(),
                "address" => Str::limit(fake()->address(), 20),
                "location_id" => mt_rand(1,34),
                "ktp" => fake()->imageUrl(),
                "face" => fake()->imageUrl(),
                "phone_number" => fake()->phoneNumber(),
            ]);
        }

        Guide::truncate();

        for ($i = 0; $i < 6; $i++) {
            Guide::create([
                "title" => fake()->title(),
                "description" => fake()->text(),
                "image" => fake()->imageUrl(),
            ]);
        }

    }
}
