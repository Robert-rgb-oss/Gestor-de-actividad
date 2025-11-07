<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombres   = ['Sara', 'Alejandro', 'Lucía', 'Daniel', 'Martina', 'Pablo', 'Alba', 'Diego', 'Claudia', 'Adrián', 'Jimena', 'Marcos', 'Nerea', 'Hugo', 'Laura'];
        $apellidos = ['García', 'Fernández', 'López', 'Martínez', 'Sánchez', 'Pérez', 'Rodríguez', 'Gómez', 'Díaz', 'Álvarez', 'Moreno', 'Romero', 'Navarro', 'Torres', 'Domínguez'];

        return [
            'nombre' => $this->faker->randomElement($nombres) . ' ' . $this->faker->randomElement($apellidos),
            'curso'  => $this->faker->randomElement(['1º Primaria', '2º Primaria', '3º Primaria', '4º Primaria', '5º Primaria', '6º Primaria']),
            'edad'   => $this->faker->numberBetween(6, 12),
        ];
    }
}
