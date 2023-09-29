<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Productos;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Productos::class;

    public function definition(): array
    {
        $categoria = Categoria::inRandomOrder()->first();
        $user_id = User::inRandomOrder()->first();
        return [
            'nombre' => $this->faker->sentence(3),
            'descripcion'=> $this->faker->paragraph(1),
            'cantidad'=> $this->faker->numberBetween(1,100),
            'precio'=> $this->faker-> randomFloat($maxDecimal=2, $min = 3, $max= 100),
            'categoria' => $categoria->id,
        ];
    }
}
