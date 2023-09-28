<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cargos = ['Master', 'Atención al Cliente', 'Logística y Envíos'];
        return [
            'cedula' => $this->faker->randomNumber(9),
            'nombre' => $this->faker->name(),
            'direccion'=> $this->faker->address(),
            'email'=> $this->faker->unique()->safeEmail(),
            'celular'=> $this->faker->phoneNumber(),
            'cargo' => $this->faker->randomElement($cargos),
            'password'=> Hash::make($this->faker->password),
        ];
    }
}
