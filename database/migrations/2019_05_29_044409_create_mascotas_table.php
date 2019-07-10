<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\ForeignKeyDefinition;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            /* Foreign Key */
            $table->unsignedBigInteger('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id_cliente')->on ('clientes')->onDelete('cascade');
            $table->string ('Nombre');
            $table->enum('Genero', ['Hembra', 'Macho']);
            $table->date ('Fecha_Nacimiento');
            $table->enum('Especie', ['Canino', 'Felino', 'Exotico']);
            $table->string ('Raza');
            $table->string ('Color');
            $table->bigInteger ('Microchip')->nullable();            
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
        Schema::dropIfExists('mascotas');
    }
}
