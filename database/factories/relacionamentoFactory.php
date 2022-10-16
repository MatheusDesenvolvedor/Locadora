<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class relacionamentoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'locadora_id' => $this->faker->sentece,
            'genero_id' => $this->faker->sentece,
            'lista_id' => $this->faker->sentece,
        ];
    }
}
