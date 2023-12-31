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
        //
        Schema::create('productos', function (Blueprint $table){
            $table->id();
            $table->string('nombre');
            $table->string('descripcion',1000);
            $table->integer('cantidad')->unsigned();
            $table->float('precio')->unsigned();
            $table->unsignedBigInteger('categoria');
            $table->unsignedBigInteger('empresa_id')->nullable(); 
            $table->unsignedBigInteger('user_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('categoria')->references('id')->on('categorias');

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
