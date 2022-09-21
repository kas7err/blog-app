<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Technology', 'Automotive', 'Finance', 'Politics', 'Culture', 'Sports'];
        foreach ($categories as $category) {
            Category::factory()->create([
                'name' => $category,
            ]);
        }

        Post::factory(50)->create();
    }
}
