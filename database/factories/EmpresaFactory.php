<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{

    protected $model = Empresa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nit' => $this->faker->randomNumber(9),
            'nombre' => $this->faker->sentence(2),
            'razon' => $this->faker->sentence(2),
            'direccion'=> $this->faker->address(),
            'email'=> $this->faker->unique()->safeEmail(),
            'celular'=> $this->faker->phoneNumber(),
            'password'=> Hash::make($this->faker->password)
        ];
    }
}
