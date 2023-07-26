<?php

namespace Database\Seeders;

use App\Models\Job;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $title = $faker->jobTitle;
            $slug = Str::slug($title);
            Job::insert([
                'title' => $title,
                'user_id' => 1,
                'slug' => $slug,
                'category_id' => rand(1, 6),
                'budget' => rand(10000, 20000),
                'position_type' => 'part-time',
                'project_duration' => '6',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus non numquam fugiat sapiente corrupti ab at totam, natus beatae doloremque.',
                'category_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
