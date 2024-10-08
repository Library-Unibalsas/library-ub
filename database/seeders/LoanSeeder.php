<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loan;

class LoanSeeder extends Seeder
{
    public function run()
    {
        Loan::factory()->count(15)->create();
    }
}
