<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacto>
 */
class ContactoFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre'=>fake()->firstname(),
            'apellido'=>fake()->lastname(),
            'correo_electronico'=>fake()->email(),
            'telefono'=>fake()->phoneNumber(),
        
        ];
    }
}
