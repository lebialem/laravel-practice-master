<?php

namespace Database\Factories;

use App\Models\Pizza;
use App\Enums\PizzaBase;
use App\Enums\PizzaType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pizza>
 */
class PizzaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pizza::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(2, true),
            'age' => $this->faker->randomElement(['new', 'classic', 'vintage']),
            'description' => $this->faker->paragraph,
            'slug' => Str::slug($this->faker->unique()->words(3, true)),
            'price' => $this->faker->randomFloat(2, 5, 50), // random price between 5 and 50
            'base' => $this->faker->randomElement(PizzaBase::asArray()),
            'type' => $this->faker->randomElement(PizzaType::asArray()),
        ];
    }
}