<?php

namespace App\Http\Controllers;

use App\Rips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class RipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @author [Javiera] <[<email address>]>
     */
    public function index()
    {
        $datos['rips']=Rips::paginate(2);
        
        return view('rips.index',$datos);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rips.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * [$campos valida los campos vacios]
         * @var [string]
         */
       $campos=[
        'Fecha_Defuncion' => 'required|string|max:100',
        'Motivo' => 'required|string|max:100',
   ];
   /**
    * [$Mensaje envia mensaje de error]
    * @var array
    */
    $Mensaje=["required"=>':attribute es requerido'];
    $this->validate($request,$campos,$Mensaje);

        $datosRip=request()->except('_token');
   
     Rips::insert($datosRip);
     return redirect('rips')->with('Mensaje','Paciente Rip Agregado con exito');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rips  $rips
     * @return \Illuminate\Http\Response
     */
    public function show(Rips $rips)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rips  $rips
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rip= Rips::findOrFail($id);
        return view('rips.edit',compact('rip'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rips  $rips
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
         * [$datosRip actualiza datos de rip]
         * @var [type]
         */
        $datosRip=request()->except(['_token','_method']);
      
        Rips::where('id','=',$id)->update($datosRip);
        
        return redirect('rips')->with('Mensaje','Paciente rip editado con exito');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rips  $rips
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rips::destroy($id);
        return redirect('rips')->with('Mensaje','Paciente Rip Eliminado');
        //
        //
    }
}
