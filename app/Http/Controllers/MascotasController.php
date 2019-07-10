<?php

namespace App\Http\Controllers;

use App\Mascotas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Clientes;
use RealRashid\SweetAlert\Facades\Alert;


class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @author [Yovanna] <[<email address>]>
     */
    public function index()
    {
        
        $datos['mascotas']=Mascotas::paginate(3);
        return view('Mascotas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($cliente_id)
    {
        
        $mascotas= Clientes::findOrFail($cliente_id);
        return view('Mascotas.create', compact( 'cliente_id','mascotas'));  
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
         * [$campos] validacion de campos vacios
         * @var [string, numeric]
         * 
         */
$campos=[
    'cliente_id' => 'required|numeric|max:100',
    'Nombre' => 'required|string|max:100',
    'Genero' => 'required|string|max:100',
    'Fecha_Nacimiento' => 'required|string|max:100',
    'Especie' => 'required|string|max:100',
    'Raza' => 'required|string|max:100',
    'Color' => 'required|string|max:100',
    'Microchip' => 'required|numeric|unique:mascotas',
    
];
/**
 * [$Mensaje envia mensaje de error]
 * @var array
 */

$Mensaje=["required"=>':attribute es requerido'];
$this->validate($request,$campos,$Mensaje);

        $datosMascotas = request()->except('_token');

        Mascotas::insert($datosMascotas);

      // return $request->cliente_id;
       return redirect ('detalle/'.$request->cliente_id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function show(Mascotas $mascotas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /**
         * [$mascotas edita los campos de mascota]
         * @var [type]
         */
        $mascotas= Mascotas::findOrFail($id);
        return view('Mascotas.edit', compact('mascotas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
         * [$datosMascotas] actualiza los datos de las mascotas
         * @var [type]
         */
        $datosMascotas = request()->except(['_token','_method']);

        $mascotas= Mascotas::findOrFail($id);
        Mascotas::where('id', '=', $id)->update($datosMascotas);
        return redirect('detalle/'.$request->cliente_id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mascotas  $mascotas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**
         * [$mascotas elimina un dato de  mascotas]
         * @var [type]
         */

        $mascotas= Mascotas::findOrFail($id);
        $idguardada = $mascotas->cliente_id;
        $mascotas= Mascotas::where('id',$id)->delete();
        return redirect('detalle/'.$idguardada);
    }
}
