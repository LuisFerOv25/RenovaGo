<?php

namespace Database\Factories;

use App\Models\Orden;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orden>
 */
class OrdenFactory extends Factory
{
    protected $model = Orden::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estado' => $this->faker->randomElement(['pendiente','pagado','enviada']),
           // 'id_usuario' => $this->faker->randomElement(['pendiente','pagado','enviada']),

        ];
    }
}
