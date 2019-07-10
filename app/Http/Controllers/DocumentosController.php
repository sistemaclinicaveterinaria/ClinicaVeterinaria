<?php

namespace App\Http\Controllers;

use App\Documentos;
use App\Consultas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentosController extends Controller
{
    /**j
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @author [Javiera]
     */
    public function index()

    {

        
        return view('documentos.index');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('documentos.create',compact('id'));
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
         * [$campos validaciones de campos vacios]
         * @var [string]
         */

        
        $campos=[
            'Nombre' => 'required|string|max:100',
            'Archivo' => 'required|max:100040',
       ];
        $Mensaje=["required"=>':attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
    //-------------------------------------------------------------
    
         //$datosDocumento=request()->all();
         $datosDocumento=request()->except('_token');
         if($request->hasFile('Archivo')){
            $datosDocumento['Archivo']=$request->file('Archivo')->store('uploads','public');
         }

         Documentos::insert($datosDocumento);
         
         return redirect('/DocumentosFicha/'.$request->consulta_id);
         
     //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function show(Documentos $documentos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $documento= Documentos::findOrFail($id);
        return view('documentos.edit',compact('documento'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        /**
         * [$datosDocumento actualiza el documento registrado]
         * @var [string]
         */
        $datosDocumento=request()->except(['_token','_method']);
    
        if($request->hasFile('Archivo')){
           
            $documento= Documentos::findOrFail($id);
            
            Storage::delete('public/'.$documento->Archivo);

            $datosDocumento['Archivo']=$request->file('Archivo')->store('uploads','public');
        
        }
        
        Documentos::where('id','=',$id)->update($datosDocumento);
        
        return redirect('documentos')->with('Mensaje','Documento editado con exito');
        //$documento= Documentos::findOrFail($id);
        //return view('documentos.edit',compact('documento'));
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documentos  $documentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /**
         * [$documento elimina documento seleccionado]
         * @var [string]
         */

        $documento= Documentos::findOrFail($id);
        $idguardada=$documento->consulta_id;
    
        if(Storage::delete('public/'.$documento->Archivo)){
        Documentos::destroy($id);
        }

        return redirect('/DocumentosFicha/'.$idguardada)->with('Mensaje','Documento Eliminado');
        //
    }

    public function detalledoc($id)
    {

        
        
        /**
         *  Filtrar Detalles de consultas por ID
         */
        $documentos = Documentos::whereIn("consulta_id", function ($query) use ($id) {
            $query->select("consulta_id")
                ->from((new Documentos)->getTable())
                ->where("consulta_id", $id);
                })->get();

        /*Para agrrar el id de la tabla y mostrar el detalle que corresponde */
        return View('Documentos.index',compact('documentos','id'));
    }
}
