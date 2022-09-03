<?php

namespace Database\Factories;

use App\Models\Pescador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<Pescador>
 */
class PescadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake('pt_BR')->name(),
            //'avatar' => $this->faker->image(storage_path('app/public/images'), '50', '50', 'null', 'false'),
           'avatar' => $this->faker->imageUrl(300, 300, randomize: false)

        ];
    }
}
