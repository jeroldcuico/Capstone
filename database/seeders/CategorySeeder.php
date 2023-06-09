<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Information and Technology', 'slug' => 'info_tech', 'category_code' => 'info-tech' , 'created_at' => now() , 'updated_at' => now()],
            ['name' => 'BPO Industry', 'slug' => 'bpo_industry', 'category_code' => 'bpo_industry' , 'created_at' => now() , 'updated_at' => now()],
        ]);
    }
}
