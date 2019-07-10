<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('Historial_consultas/{id}', 'ConsultasController@detallecon');
// Este Metodo crea una FichaClinica con una Mascota ya asociada
Route::get('Consultas/create/{id}', 'ConsultasController@create');
// Metodos de Consulta
Route::resource('Consultas', 'ConsultasController')->middleware('auth');



Route::get('/PDFficha/{id}', 'ConsultasController@generarpdf');
// Metodos de Cliente
Route::resource('Clientes', 'ClientesController')->middleware('auth');
// Metodos de Mascota
Route::resource('Mascotas', 'MascotasController')->middleware('auth');
// Metodos de Especialista
Route::resource('especialistas', 'EspecialistasController')->middleware('auth');
// Metodos de Clientes y Mascotas Asociados
Route::resource('Cli_Mas', 'Clientes_MascotasController')->middleware('auth');
// Metodo de muestra las pestaña de Cliente&Mascotas
Route::get('detalle/{id}', 'Clientes_MascotasController@detalle' );
// Este Metodo crea una mascota con un Cliente ya asociado
Route::get('Mascotas/create/{cliente_id}', 'MascotasController@create');

Route::get('Consultas/{id_consulta}/edit', 'ConsultasController@show');

// Documentos
Route::resource('documentos', 'DocumentosController')->middleware('auth');
Route::get('/DocumentosFicha/{id}', 'DocumentosController@detalledoc')->middleware('auth');
Route::get('/Documentos/create/{id}', 'DocumentosController@create')->middleware('auth');
Route::post('/Documentos', 'DocumentosController@store')->middleware('auth');

//Rips
Route::resource('rips', 'RipsController')->middleware('auth');
// Este Metodo crea un cliente y mascota asociados
Route::post('/Cli_Mas','Clientes_MascotasController@creartablas')->middleware('auth')->name('creartablas');
Route::get('cli/{id}', 'EventosController@clienteselect');

//Vista recetario , recetariopdf //
Route::resource('recetarios', 'RecetariosController')->middleware('auth');
Route::post('recetar','RecetariosController@index');
Route::get('/recetarios/create/{id}', 'RecetariosController@create')->middleware('auth');
//Calendario vistas//
Route::resource('eventos', 'EventosController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
