<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $table = 'documentos';
    protected $primaryKey='id';
    protected $fillable = ['consulta_id','Nombre','Archivo','created_by','updated_by'];

public function consultas()
    {
    	return $this->belongsTo('App\Consultas');
    }
}