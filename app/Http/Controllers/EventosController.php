<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @author [Bayron] <[<email address>]>
     */
    public function index()
    {
        
        $clientes['clientes'] = Clientes::all();
		$data ['eventos'] = eventos::all();
        return view('eventos.index',$data,$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        
		
		 $datosEvento=request()->except(['_token','_method']);
		 eventos::insert($datosEvento);
		return $datosEvento;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
		$data['eventos'] = eventos::all();
		return response()->json($data['eventos']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
         * [$datosEvento actualiza los eventos]
         * @var [type]
         */
		$datosEvento=request()->except(['_token','_method']);
		$respuesta=eventos::where('id','=',$id)->update($datosEvento);
		return response()->json($respuesta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\eventos  $eventos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**
         * [$eventos elimina un evento]
         * @var [type]
         */
		$eventos= eventos::findOrFail($id);
        eventos::destroy($id);
		return response()->json($id);
        

    }
    /**
     * @param  Request $id
     * @param  [int]
     * @return [$cliente]
     */
    public function clienteselect(Request $request ,$id){
        /**
         * aquí le digo que, si el $request es una respuesta de una función ajax, ejecutará lo de dentro
         */
        if($request->ajax()){
           /**
            * aquí se crea la variable trabajador, la cual toma el Model del trabajador y le dice que
           le entregue todos los datos que obtenga del método emails() que se encuentra en el model y le entrega el parámetro $rut (ir al model a ver el método)*/
           $cliente = Clientes::getclientes($id);
           /**
            * entonces, le retorna al javascript el Json con los registros obtenidos en forma de array
            */
           return response()->json($cliente);
        }
   }
}
