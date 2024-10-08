<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'genre_id' => \App\Models\Genre::factory(), // Associa um gênero
            'published_at' => fake()->date(),
            'available' => fake()->boolean(),
        ];
    }
}