<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('consulta_id')->unsigned();
            $table->foreign('consulta_id')->references('id_consulta')->on ('consultas')->onDelete('cascade');
            $table->date('Fecha');
            $table->string('Control_Fecha');
            $table->string('Paciente');
            $table->string('Especie');
            $table->string('Raza');
            $table->string('Edad');
            $table->string('Propietario');
            $table->text('Descripcion');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recetarios');
    }
}
