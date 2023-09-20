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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->float('cantidad')->unsigned();
            $table->timestamp('pagado')->nullable();
            $table->bigInteger('id_orden')->unsigned();
            $table->timestamps();
            $table->foreign('id_orden')->references('id')->on('ordens');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
