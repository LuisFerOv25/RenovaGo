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
        Schema::create('users', function (Blueprint $table){
            $table->id();
            $table->string('cedula')->unique()->notNullable();
            $table->string('nombre',400);
            $table->string('direccion')->unsigned();
            $table->string('email')->unique();
            $table->string('celular')->unsigned();
            $table->string('password')->unsigned();
            $table->rememberToken();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
