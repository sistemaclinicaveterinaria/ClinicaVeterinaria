<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Clientes;
use App\Mascotas;
use App\Http\Controllers\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use DB;

class Clientes_MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @author [Mayra]
     */
    public function index()
    {
        /**
         * [$mascotas description]
         * @var [type]
         */
        $mascotas = Mascotas::all();
        $clientes = Clientes::all();

        if (session('success_message')){
            Alert::success('Registro Exitoso', session('Success Message'));
        }

        $data = DB::table('clientes')
            ->join('mascotas', 'cliente_id', '=', 'id_cliente')
            ->select('id_cliente','id','mascotas.Nombre','mascotas.Especie','nom_cliente','apePat_cliente','apeMat_cliente',
            'telefono_cliente','email_cliente')
            ->get();
        return View('Cli_Mas.index', compact('mascotas','clientes','data')); 
    }

/**
 * la funcion detalle filtra mascotas por id
 * @param  [int] $id_cliente
 * @return [string] 
 */
    public function detalle($id_cliente) {

/**
 * [$data description]
 * @var [type]
 */
        $data = Mascotas::whereIn("cliente_id", function ($query) use ($id_cliente) {
            $query->select("cliente_id")
                ->from((new Mascotas)->getTable())
                ->where("cliente_id", $id_cliente);
        })->get();

        

        $datacli = Clientes::whereIn("id_cliente", function ($query) use ($id_cliente) {
            $query->select("id_cliente")
                ->from((new Clientes())->getTable())
                ->where("id_cliente", $id_cliente);
        })->get();
       
        $clientes= Clientes::findOrFail($id_cliente);
        //$id = $id_cliente;
        return view('Cli_Mas.detalle',compact('clientes','data', 'id_cliente','datacli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cli_Mas.create');
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
     * Validaciones de campo
     */
    /**
     * [$campos]
     * @var [string
     */
       $campos=[
        'rut_cliente' => 'required|string|max:100',
        'nom_cliente' => 'required|string|max:100',
        'apePat_cliente' => 'required|string|max:100',
        'apeMat_cliente' => 'required|string|max:100',
        'dire_cliente' => 'required|string|max:100',
        'ciudad_cliente' => 'required|string|max:100',
        'telefono_cliente' => 'required|string|max:100',
        'email_cliente' => 'required|email',
       ];

    $Mensaje=["required"=>':attribute es requerido'];
    $this->validate($request,$campos,$Mensaje);

/**
 * recolecta la informacion para que coincida con la table
 */
    /**
     * [$datosCliente description]
     * @var [type]
     */
     $datosCliente=request()->except('_token');

     Clientes::insert($datosCliente);

     return redirect('Cli_Mas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cliente)
    {
        /**
         * [$cliente description]
         * @var [type]
         */
        $cliente= Clientes::findOrFail($id_cliente);
  
        return view('Cli_Mas.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cliente)
    {
        /**
         * [$campos description]
         * @var [string]
         */
        $campos=[
        'rut_cliente' => 'required|string|max:100',
        'nom_cliente' => 'required|string|max:100',
        'apePat_cliente' => 'required|string|max:100',
        'apeMat_cliente' => 'required|string|max:100',
        'dire_cliente' => 'required|string|max:100',
        'ciudad_cliente' => 'required|string|max:100',
        'telefono_cliente' => 'required|string|max:100',
        'email_cliente' => 'required|email',
        ];

        /**
         * [$Mensaje description]
         * @var array
         */
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
/**
 * [$datosCliente description]
 * @var [type]
 */
        $datosCliente=request()->except(['_token','_method']);

        Clientes::where('id_cliente','=',$id_cliente)->update($datosCliente);
        $cliente= Clientes::findOrFail($id_cliente);
       return redirect('Cli_Mas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cliente)
    {
        Clientes::destroy($id_cliente);
/**
 * retorna a la vista con la tabla ya actualizada y el dato borrado
 */
        return redirect('Cli_Mas');
    }

    
/**
 * Se crean las tablas
 * @param  Request
 * @return [InsertMascota]
 */
    public function creartablas(Request $request){

        $campos=[
            'rut_cliente' => 'string|unique:clientes',
            'nom_cliente' => 'required|string|max:100',
            'apePat_cliente' => 'required|string|max:100',
            'apeMat_cliente' => 'required|string|max:100',
            'dire_cliente' => 'required|string|max:100',
            'ciudad_cliente' => 'required|string|max:100',
            'telefono_cliente' => 'required|digits:9',
            'email_cliente' => 'required|email|unique:clientes',
            'Nombre' => 'required|string|max:100',
            'Genero' => 'required|string|max:100',
            'Fecha_Nacimiento' => 'required|string|max:100',
            'Especie' => 'required|string|max:100',
            'Raza' => 'required|string|max:100',
            'Color' => 'required|string|max:100',
            'Microchip' => 'digits:15|unique:mascotas',
            
           ];
    
        $Mensaje=["required"=>':attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
    

        $cliente =  new Clientes();
        $cliente -> rut_cliente = $request ->input('rut_cliente');
        $cliente -> nom_cliente = $request ->input('nom_cliente');
        $cliente -> apePat_cliente = $request ->input('apePat_cliente');
        $cliente -> apeMat_cliente = $request ->input('apeMat_cliente');
        $cliente -> dire_cliente = $request ->input('dire_cliente');
        $cliente -> ciudad_cliente = $request ->input('ciudad_cliente');
        $cliente -> telefono_cliente = $request ->input('telefono_cliente');
        $cliente -> email_cliente = $request ->input('email_cliente');
        $cliente->save();
        return $this->InsertMascota($request, $cliente->id_cliente);
    }
    /**
     * @param Request
     * @param [$id] int
     * @return [redirect] Cli_Mas
     */
    public function InsertMascota(Request $request, $id){
        $mascota = new Mascotas();
        $mascota-> cliente_id= $id;
        $mascota-> Nombre= $request->input('Nombre');
        $mascota-> Genero= $request->input('Genero');
        $mascota-> Fecha_Nacimiento= $request->input('Fecha_Nacimiento');
        $mascota-> Especie= $request->input('Especie');
        $mascota-> Raza= $request->input('Raza');
        $mascota-> Color= $request->input('Color');
        $mascota-> Microchip= $request->input('Microchip');
        $mascota->save();
        return redirect('Cli_Mas');
    }
}
