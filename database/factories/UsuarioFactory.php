<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome'  => $this->faker->name(),
            'email' => $this->faker->email(),
            'senha' => Hash::make('123456'),
        ];
    }
}
