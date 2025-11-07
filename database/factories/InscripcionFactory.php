<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InscripcionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_inscripcion' => $this->faker->dateTimeBetween('-2 months', 'now')->format('Y-m-d'),
            'estado'            => $this->faker->randomElement(['pendiente', 'aceptada', 'cancelada']),
        ];

    }
}
