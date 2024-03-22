<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        if (User::count() == 0) {
            throw new \Exception('No hay usuarios en la base de datos. Por favor, crea algunos usuarios antes de generar notas.');
        }

        return [
            'title' => $this->faker->sentence,
            'text' => $this->faker->paragraph,
            'public' => $this->faker->boolean(50),
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
