<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->sentence(rand(3, 6));
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'author_id' => User::factory(), // Assuming you have users with IDs 1-5
            'category_id' => Category::factory(), // Assuming you have categories with IDs 1-5
            'content' => fake()->text(rand(200, 500)),
        ];
    }
}