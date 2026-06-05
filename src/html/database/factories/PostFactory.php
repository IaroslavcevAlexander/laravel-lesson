<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $title = Str::ucfirst(fake()->unique()->words(3, true)),
            'slug' => Str::slug($title),
            'content' => fake()->paragraph(),
            'category_id' => fake()->numberBetween(1, 10),
        ];
    }
}
