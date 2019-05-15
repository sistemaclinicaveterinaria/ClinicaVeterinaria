<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{
    
    public function paginainicio(){	
	return view('index');
    }
    public function administracion(){
	return view('administracion');
    }
    public function calendario(){
	return view('calendario');
    }
    public function clientes(){
	return view('clientes');
    }
    public function especialistas(){
	return view('especialistas');
    }

   public function infoclientes(){
    return view('infoclientes');
    }

    public function nuevocliente(){
    return view('nuevocliente');
    }

    public function historial(){
    return view('historial');
    
    }
    public function nuevaconsulta(){
    return view('nuevaconsulta');
    }
    public function verconsulta(){
    return view('verconsulta');
    }
    public function documentos(){
    return view('documentos');
    }
    public function rip(){
    return view('rip');
    }

    public function nuevoespecialista(){
    return view('nuevoespecialista');
    }

    public function verespecialista(){
    return view('verespecialista');
    }

   public function nuevorip(){
    return view('nuevorip');
    }

    public function verrip(){
    return view('verrip');
    }





}


