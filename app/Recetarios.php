<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recetarios extends Model
{
    protected $table = 'recetarios';
    protected $primaryKey='id';
    protected $fillable = ['consulta_id','Fecha','Control_Fecha','Paciente','Especie','Raza','Edad','Propietario','Descripcion','created_by','updated_by'];

public function consultas()
    {
    	return $this->belongsTo('App\Consultas');
    }
}
