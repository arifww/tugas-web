<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nasabah>
 */
class NasabahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //            
            'email' => fake()->name(),
            'password' => fake()->name(),
            'nama' => fake()->name(),
            'namabelakang' => fake()->name(),
            'alamat' => fake()->name(),
            'telepon' => fake()->randomNumber(12),
            'avatar' => Str::random(12),
        ];
    }
}
