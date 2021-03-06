<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialistas', function (Blueprint $table) {
            $table->increments('id_espe');
            $table->string('rut_espe');
            $table->string('nom_espe');
            $table->string('apePat_espe');
            $table->string('apeMat_espe');
            $table->string('email_espe')->unique();
            $table->enum('especialidad', ['Cardiologia', 'Oftalmologia', 'Medicina Alternativa','Medicina Preventiva','Cirugia Ortopedica','Radiografia',
            'Ecografia','Traumatologia','Exoticos','Cirugia','Cirugia Especializada']);
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
        Schema::dropIfExists('especialistas');
    }
}
