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
        Category::create(['name' => 'Politics']);
        Category::create(['name' => 'Technology']);
        Category::create(['name' => 'Sports']);
        Category::create(['name' => 'Entertainment']);
        Category::create(['name' => 'Health']);
        Category::create(['name' => 'Business']);
        Category::create(['name' => 'Science']);
        Category::create(['name' => 'Travel']);
        Category::create(['name' => 'Education']);
        Category::create(['name' => 'Environment']);
    }
}
