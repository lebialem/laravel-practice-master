<?php

namespace Database\Factories;

use App\Models\Pizza;
use App\Models\PizzaModule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PizzaModule>
 */
class PizzaModuleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = PizzaModule::class;

    public function definition()
    {
        return [
            'content' => $this->faker->paragraph,
            'pizza_id' => Pizza::factory(),
        ];
    }
}
