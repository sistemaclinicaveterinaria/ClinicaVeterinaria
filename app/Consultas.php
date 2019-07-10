<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    protected $table = 'consultas';
    protected $primaryKey='id_consulta';

    protected $fillable = ['mascota_id','cliente_consulta_id','Estado','motivo_consulta','Anamnesis','Examen_Clinico','FC_consulta','FR_consulta',
        'Peso','Temp','PC_Consulta','TRC_Consulta','CC_Consulta','Resultado','RX','Ecocardio','Ecografia','Hemograma','Perfil_bio',
        'Test_parvo','Test_dis','Test_brucelo','Test_vif','Bipsia','Directo_pelo','Raspado','Reactivo_koh'];

    public function mascota()
    {
        return $this->hasMany('App\Mascotas');
    }

}