<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    public function run(): void
    {
        // Generate 10 random pizza records
        Pizza::factory()->count(25)->create();
    }
}