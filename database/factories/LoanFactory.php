<?php

namespace Database\Factories;

use App\Models\Loan;
use App\Models\User;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    protected $model = Loan::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'book_id' => Book::factory(),
            'loaned_at' => $this->faker->dateTime(),
            'returned_at' => null, // Inicialmente, o livro não foi devolvido
        ];
    }
}
