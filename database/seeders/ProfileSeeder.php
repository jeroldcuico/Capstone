<?php

namespace Database\Seeders;

use App\Models\Profile;
use Faker\Factory as Faker;
use Faker\Provider\Lorem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i < 5; $i++) {
            $title = $faker->jobTitle;
            Profile::insert([
                'user_id' => $i++,
                'image' => '/default.jpg',
                'job_title' => $title,
                'overview' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae officiis ullam quam soluta facere delectus!',
                'city' => $faker->city,
                'province' => $faker->state,
                'country' => $faker->country,
            ]);
        }
    }
}
