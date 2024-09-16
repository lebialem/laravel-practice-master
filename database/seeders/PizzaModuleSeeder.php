<?php

namespace Database\Seeders;

use App\Models\PizzaModule;
use Illuminate\Database\Seeder;

class PizzaModuleSeeder extends Seeder
{
    public function run()
    {
        // Then create some PizzaModule entries
        PizzaModule::factory()->count(25)->create();
    }
}