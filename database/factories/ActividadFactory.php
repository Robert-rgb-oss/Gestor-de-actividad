<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Actividad;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actividad>
 */
class ActividadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $nombres = [
            'Fútbol', 'Baloncesto', 'Robótica', 'Ajedrez', 'Música', 'Danza', 'Pintura',
            'Teatro', 'Ciencias', 'Lectura Creativa', 'Natación', 'Inglés Avanzado',
        ];

        $dias = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes'];

        return [
            'nombre'      => $this->faker->randomElement($nombres),
            'descripcion' => $this->faker->sentence(8),
            'dia'         => $this->faker->randomElement($dias),
            'hora_inicio' => $this->faker->randomElement(['15:00', '15:30', '16:00']),
            'hora_fin'    => $this->faker->randomElement(['16:30', '17:00', '17:30']),
        ];

    }
}
