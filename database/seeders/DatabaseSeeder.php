<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Carrito;
use App\Models\Categoria;
use App\Models\Empresa;
use App\Models\Image;
use App\Models\Orden;
use App\Models\Pago;
use App\Models\PaymentPlatform;
use App\Models\Productos;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaymentPlatformTable::class);
        $this->call(CurrenciesTableSeeder::class);
        
        $administrador = Admin::factory(20)->create();

        $categorias = [
            'Electrónica',
            'Ropa y Moda',
            'Hogar y Decoración',
            'Belleza y Cuidado Personal',
            'Salud y Bienestar',
            'Alimentos y Bebidas',
            'Joyería y Relojes',
            'Deportes y Fitness',
            'Juguetes y Juegos',
            'Libros y Material de Lectura',
            'Herramientas y Mejoras para el Hogar',
            'Arte y Artesanía',
            'Electrónica de Consumo',
            'Muebles',
            'Productos para Bebés y Niños',
            'Automoción y Accesorios de Vehículos',
            'Suministros de Oficina',
            'Electrónica para el Hogar',
            'Productos de Viaje y Equipaje',
            'Instrumentos Musicales',
        ];

        foreach ($categorias as $nombreCategoria) {
            Categoria::factory()->create(['nombre' => $nombreCategoria]);
        }

        $users = User::factory(20)
            ->create()
            ->each(function ($user) {
                $image = Image::factory()
                    ->user()
                    ->make();

                $user->image()->save($image);
            });
        
        $empresa = Empresa::factory(20)->create();

        $orders = Orden::factory(10)
            ->make()
            ->each(function ($order) use ($users) {
                $order->customer_id = $users->random()->id;
                $order->save();

                $payment = Pago::factory()->make();

                // $payment->order_id = $order->id;
                // $payment->save();

                $order->pago()->save($payment);
            });


        $carts = Carrito::factory(20)->create();
// Obtén todas las categorías existentes

        $productos = Productos::factory(50)
            ->create()
            ->each(function ($product) use ($orders, $carts) {
                $order = $orders->random();

                $order->productos()->attach([
                    $product->id => ['cantidad' => mt_rand(1, 3)]
                ]);

                $cart = $carts->random();

                $cart->productos()->attach([
                    $product->id => ['cantidad' => mt_rand(1, 3)]
                ]);

                $images = Image::factory(mt_rand(2, 4))->make();
                $product->images()->saveMany($images);

                $cart->productos()->attach([
                    $product->id => ['cantidad' => mt_rand(1, 3)]
                ]);

            });
    }
}