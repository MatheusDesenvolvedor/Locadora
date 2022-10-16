<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class locadoraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentece,
            'nome' => $this->faker->words(3, true)
        ];
    }
}
