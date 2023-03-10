<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->words(2, true),
            'slug' => $this->faker->slug,
            'excerpt' => '<p>' . implode($this->faker->paragraphs(2)) . '</p>',
            'body' => '<p>' . implode($this->faker->paragraphs(6)) . '</p>',
        ];
    }
}
