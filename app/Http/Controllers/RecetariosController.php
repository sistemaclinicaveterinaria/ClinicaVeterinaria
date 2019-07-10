<?php

namespace App\Http\Controllers;

use App\Recetarios;
use App\Consultas;
use DB;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class RecetariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @author [Bayron] <[<email address>]>
     */
    public function index()
    {
        // $datos['recetarios']=Recetarios::paginate(3);
        
        return view('Recetarios.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $consultasdatos = Consultas::findOrFail($id);
        
        $data = DB::table('consultas')
        ->join('mascotas', 'id', '=', 'mascota_id')
        ->leftjoin('clientes', 'cliente_id', '=', 'id_cliente')
        ->where('id_consulta', '=',$id)
        ->select('clientes.*','mascotas.*')
        ->get();
        
        return view('Recetarios.create',compact('id','data'));
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
 * [$campos valida los campos vacios del formulario]
 * @var [string]
 */

$campos=[
    'Fecha' => 'required|string|max:100',
    'Control_Fecha' => 'required|string|max:100',
    'Descripcion' => 'required|string|max:1000',
];;
/**
 * [$Mensaje envia mensaje de error]
 * @var array
 */
$Mensaje=["required"=>'El :attribute es requerido'];
$this->validate($request,$campos,$Mensaje);

        $datosRecetario=request()->except('_token');
   
     Recetarios::insert($datosRecetario);
     $datos=$_POST; 
     
     $pdf = PDF::loadView('recetarios.pdf', compact('datos'));
     return $pdf->stream('Receta.pdf');
   //  return redirect('recetarios')->with('Mensaje','Recetario Agregado con exito');
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Recetarios  $recetarios
     * @return \Illuminate\Http\Response
     */
    public function show(Recetarios $recetarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recetarios  $recetarios
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recetario= Recetarios::findOrFail($id);
        return view('Recetarios.edit',compact('recetario'));
    }

    /**S
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recetarios  $recetarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
         * [$datosRecetario actualiza los datos de recetas]
         * @var [type]
         */
        $datosRecetario=request()->except(['_token','_method']);
      
        Recetarios::where('id','=',$id)->update($datosRecetario);
        
        return redirect('recetarios')->with('Mensaje','Recetario editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recetarios  $recetarios
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        Recetarios::destroy($id);
        return redirect('recetarios')->with('Mensaje','Recetario Eliminado');
    }
}
