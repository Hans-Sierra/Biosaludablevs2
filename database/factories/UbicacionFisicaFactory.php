<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class UbicacionFisicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'codigo' => $this->faker->unique()->regexify('[A-Z0-9]{8}'),
            'descripcion'=>$this->faker->sentence(3),
            'ambiente'=>$this->faker->word(),
            'estado'=>$this->faker->boolean(),
        ];
    }
}
