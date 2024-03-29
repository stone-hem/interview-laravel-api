<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsControllerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        // Seed 100 news articles
        for ($i = 1; $i <= 100; $i++) {
            $category = $categories->random(); // Randomly choose a category
            News::create([
                'title' => "Sample News Title {$i} - {$category->name}",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel aliquam velit. consectetur adipiscing elit. Ut vel aliquam velit",
                'photo_url' => $this->getRandomImageUrl(),
                'more_url' => 'https://example.com/more-info',
                'category_id' => $category->id,
            ]);
        }
    }
    private function getRandomImageUrl()
    {
        $imageUrls = [
            'coffee.jpg',
            'sunset.jpg',
            'golf.jpg',
        ];

        return $imageUrls[array_rand($imageUrls)];
    }
}
