<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //dar valores aleatorios a los campos
            "nombre"=>$this->faker->name,
            "apellido"=>$this->faker->lastName,
            "direccion"=>$this->faker->address,
            "password"=>$this->faker->randomNumber(8),
            "email"=>$this->faker->email
        ];
    }
}
