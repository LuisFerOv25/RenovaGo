<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuarios>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = User::class;

     public function definition(): array
     {
         return [
             'cedula' => $this->faker->randomNumber(9),
             'nombre' => $this->faker->name(),
             'direccion'=> $this->faker->address(),
             'email'=> $this->faker->unique()->safeEmail(),
             'celular'=> $this->faker->phoneNumber(),
             'password'=> Hash::make($this->faker->password),
         ];
     }

}
