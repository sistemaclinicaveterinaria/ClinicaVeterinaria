<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->bigIncrements('id_consulta');

            /* Datos Mascota */
            $table->unsignedBigInteger('mascota_id')->unsigned();
                       
            /* Datos Cliente */
            $table->unsignedBigInteger('cliente_consulta_id')->unsigned();

        
            /* Datos Ficha */
            $table->enum('Estado', ['Activo', 'Inactivo']);
            $table->text('motivo_consulta');
            $table->text('Anamnesis');
            $table->text('Examen_Clinico');
            $table->string ('FC_consulta');
            $table->string ('FR_consulta');
            $table->string ('Peso');
            $table->string ('Temp');
            $table->string ('PC_Consulta');
            $table->string ('TRC_Consulta');
            $table->string ('CC_Consulta');
            $table->text('Resultado');

            /* Chbox */

             $table->boolean('RX')->default(0)->nullable();
            $table->boolean('Ecocardio')->default(0)->nullable();
            $table->boolean('Ecografia')->default(0)->nullable();
            $table->boolean('Hemograma')->default(0)->nullable();
            $table->boolean('Perfil_bio')->default(0)->nullable();
            $table->boolean('Test_parvo')->default(0)->nullable();
            $table->boolean('Test_dis')->default(0)->nullable();
            $table->boolean('Test_brucelo')->default(0)->nullable();
            $table->boolean('Test_vif')->default(0)->nullable();
            $table->boolean('Bipsia')->default(0)->nullable();
            $table->boolean('Directo_pelo')->default(0)->nullable();
            $table->boolean('Raspado')->default(0)->nullable();
            $table->boolean('Reactivo_koh')->default(0)->nullable();
            $table->boolean('T3T4')->default(0)->nullable();


            /* Foreign Key */
           
            $table->foreign('mascota_id')->references('id')->on ('mascotas')->onDelete('cascade');
            $table->foreign('cliente_consulta_id')->references('id_cliente')->on ('clientes')->onDelete('cascade');

            /* Times */

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
        Schema::dropIfExists('consultas');
    }
}
