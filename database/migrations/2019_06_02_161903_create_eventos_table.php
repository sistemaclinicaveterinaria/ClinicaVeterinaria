<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('nombremascota',255);
            $table->string('especie',255);
            $table->string('nombrecliente',255);
            $table->string('telefono',255);
            $table->string('email',255);
			$table->text('descripcion');
			$table->string('color',255);
			$table->string('textColor',255);
			$table->dateTime('start');
			$table->dateTime('end');
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
        Schema::dropIfExists('eventos');
    }
}
