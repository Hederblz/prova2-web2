<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carro>
 */
class CarroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'marca' => $this->faker->word(),
            'modelo' => $this->faker->word(),
            'placa' => $this->faker->word(),
            'roda' => $this->faker->word(),
            'user_id'=> User::all()->random()->id
        ];
    }
}
