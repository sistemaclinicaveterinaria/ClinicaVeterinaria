<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Consultas;
use App\Mascotas;
use App\Clientes;
use App\Documentos;
use DB;
use Barryvdh\DomPDF\Facade as PDF;

class ConsultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @author [Javiera] <[<email address>]>
     */
    public function index()
    {

        $mascotas = Mascotas::all();
        $clientes = Clientes::all();

        $data = DB::table('consultas')
            ->select('motivo_consulta')
            ->get();
        return View('Consultas.index', compact('data','mascotas','clientes'));

        
    }
/**
 * @param  [int] $id
 * @return [view] Consultas.index
 */
    public function detallecon($id)
    {
        /**
         *  Filtrar Detalles de consultas por ID
         */

         $data = Consultas::whereIn("mascota_id", function ($query) use ($id) {
            $query->select("mascota_id")
                ->from((new Consultas)->getTable())
                ->where("mascota_id", $id);
        })->get();

        

        /*Para agrrar el id de la tabla y mostrar el detalle que corresponde */
        $mascotas= Mascotas::findOrFail($id);
        
       
        return view('Consultas.index',compact('data','mascotas','id'));
    }
   

    public function generarpdf($id){

        $data = DB::table('consultas')
        ->join('mascotas', 'id', '=', 'mascota_id')
        ->leftjoin('clientes', 'cliente_id', '=', 'id_cliente')
        ->where('id_consulta', '=',$id)
        ->select('clientes.*','mascotas.*')
        ->get();

            $consulta = Consultas::findOrFail($id);
       
        $pdf = PDF::loadView('Consultas.pdf', compact('data','consulta'));
        return $pdf->stream('consultapdf.pdf');
    }

    
     /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = DB::table('clientes')
        ->join('mascotas', 'cliente_id', '=', 'id_cliente')
        ->where('id', '=',$id)
        ->select('clientes.*','mascotas.*')
        ->get();

        $mascotas = Mascotas::findOrFail($id);
        $consulta = Mascotas::findOrFail($id);
                
        return view('Consultas.create', compact('id','mascotas','consulta','data'));
        
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
            'mascotas_id' => 'required|numeric|max:100',
            'cliente_consulta_id' => 'required|numeric|max:100',
            'motivo_consulta' => 'required|text',
            'Anammesis' => 'required|text',
            'Examen_Clinico' => 'required|text',
            'FC_consulta' => 'required|string|max:100',
            'FR_consulta' => 'required|string|max:100',
            'Peso' => 'required|string|max:100',
            'Temp' => 'required|string|max:100',
            'PC_consulta' => 'required|string|max:100',
            'TRC_consulta' => 'required|string|max:100',
            'CC_consulta' => 'required|string|max:100',
            'Resultado' => 'required|text'
        ];
            
        //////////////////////////
        /**
         * [$datosConsulta]recolecta la informacion para que coincida con la table
         * @var [type]
         */
        // Dejare comentado esto porque me sale un error de tipos en la validacion xD
           //$Mensaje=["required"=>':attribute es requerido'];
           //$this->validate($request,$campos,$Mensaje);

        $datosConsulta=request()->except('_token','Nombre','rip','Raza','Color','Especie','Genero','Fecha_Nacimiento',
        'Microchip','nom_cliente','rut_cliente','dire_cliente','ciudad_cliente','telefono_cliente','email_cliente');

        Consultas::insert($datosConsulta);

       /**
        * imprimir informacion
        */
        return redirect ('Historial_consultas/'.$request->mascota_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function show($id_cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultas  $consultas
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request, $id_consulta)
    {

        $data = DB::table('consultas')
        ->join('mascotas', 'id', '=', 'mascota_id')
        ->leftjoin('clientes', 'cliente_id', '=', 'id_cliente')
        ->where('id_consulta', '=',$id_consulta)
        ->select('clientes.*','mascotas.*')
        ->get();

        
        $consulta= Consultas::findOrFail($id_consulta);
        return view('Consultas.edit',compact('consulta','data','id_consulta'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_consulta)
    {
        /**
         * [$datosConsulta]
         * @var [type]
         */
        $datosConsulta=request()->except(['_token','_method']);

        $consulta= Consultas::findOrFail($id_consulta);
        
        Consultas::where('id_consulta','=',$id_consulta)->update($datosConsulta);

        return redirect('Historial_consultas/'.$request->mascota_id);
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultas  $consultas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_consulta)
    {
        Consultas::destroy($id_consulta);
        /**
         * retorna a la vista con la tabla ya actualizada y el dato borrado
         */
        return redirect('Consultas');
    }
}