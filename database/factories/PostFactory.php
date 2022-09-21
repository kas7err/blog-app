<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $slug = \Str::slug($title, '-');
        $body = '<div>';
        for ($i=0; $i < 3; $i++) {
            $body .= '<h2 class="text-2xl">' . $this->faker->sentence . '</h2>';
            $body .= '<p>' . $this->faker->paragraphs(5, true) . '</p>';
            $body .= '<br>';
        }
        $body .= '</div>';

        return [
            'title' => $title,
            'slug' => $slug,
            'author_name' => $this->faker->name(),
            'thumbnail_path' => $this->faker->imageUrl(1240, 400, 'dogs', true, 'cats'),
            'body' => $body,
            'category_id' => $this->faker->numberBetween(1, 6)
        ];
    }
}
