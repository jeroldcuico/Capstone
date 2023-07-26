<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed sample categories
        $categories = [
            ['name' => 'Technology', 'description' => 'Description for Category 1', 'slug' => 'technology' , 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'Banking', 'description' => 'Description for Category 2', 'slug' => 'banking', 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'BPO Industry', 'description' => 'Description for Category 3', 'slug' => 'bpoindustry', 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'Agriculture', 'description' => 'Description for Category 4', 'slug' => 'agriculture', 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'Accounting / Finance', 'description' => 'Description for Category 4', 'slug' => 'accounting', 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'Airline / Airport', 'description' => 'Description for Category 4', 'slug' => 'airline', 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'Arts / Media / Design', 'description' => 'Description for Category 4', 'slug' => 'arts/mmedia', 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'Education', 'description' => 'Description for Category 4', 'slug' => 'education', 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'Restaurant', 'description' => 'Description for Category 4', 'slug' => 'restaurant', 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'Food', 'description' => 'Description for Category 4', 'slug' => 'food', 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'Architect', 'description' => 'Description for Category 4', 'slug' => 'architect', 'image' => '/default.jpg' , 'created_at' => now()],
            ['name' => 'Travel', 'description' => 'Description for Category 4', 'slug' => 'travel', 'image' => '/default.jpg' , 'created_at' => now()],
            // Add more categories as needed
        ];
        Category::insert($categories);
    }
}
