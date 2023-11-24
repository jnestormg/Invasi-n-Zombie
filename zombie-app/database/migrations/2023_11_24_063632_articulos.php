<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->integer('cantidad');
            $table->integer('puntos');
            $table->foreignId('superviviente_id')
            ->nullable()
            ->constrained('supervivientes')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');

    }
};
