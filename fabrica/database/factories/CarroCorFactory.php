<?php

namespace Database\Factories;

use App\Models\Carro;
use App\Models\Cor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarroCor>
 */
class CarroCorFactory extends Factory
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
            'carro_id'=> Carro::all()->random()->id,
            'cor_id'=> Cor::all()->random()->id
        ];
    }
}
