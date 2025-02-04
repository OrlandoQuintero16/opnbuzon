<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reporte>
 */
class ReporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'entidad' => $this->faker->word, // Palabra aleatoria para 'entidad'
            'NombreUsuarios' => $this->faker->name, // Nombre aleatorio
            'TelefonoUsuario' => $this->faker->phoneNumber, // Teléfono aleatorio
            'TipoReporte' => $this->faker->randomElement(['Necesidad', 'Comentario', 'Sugerencia']), // Tipo de reporte aleatorio
            'DescripcionReporte' => $this->faker->sentence, // Descripción aleatoria
            'imagen' => $this->faker->imageUrl(640, 480, 'animals', true, 'Faker'), // Imagen aleatoria
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
