<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nit')->unique()->notNullable();
            $table->string('nombre',420);
            $table->string('razon')->notNullable();
            $table->string('direccion')->unsigned();
            $table->string('email')->unique();
            $table->string('celular')->unsigned();
            $table->string('password')->unsigned();
            $table->timestamp('admin_since')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
