<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class listaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->words(3, true),
            'sobrenome' => $this->faker->words(3, true)
        ];
    }
}
