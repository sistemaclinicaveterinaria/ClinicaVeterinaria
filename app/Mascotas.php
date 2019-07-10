<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    protected $table = 'mascotas';
    protected $fillable = ['cliente_id','Nombre','Genero','Fecha_Nacimiento','Especie','Raza','Color','Microchip','Color'];
    protected $primaryKey='id';

    public function mascotas()
    {
    	return $this->belongsTo('App\Clientes');
    }

    public function consultas()
    {
        return $this->belongsTo('App\Consultas');
    }
}
