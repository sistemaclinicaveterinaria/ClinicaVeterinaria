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

Route::get('/', 'PagesController@paginainicio')->name('index');

Route::get('administracion', 'PagesController@administracion')->name('paginaadmin');

Route::get('calendario', 'PagesController@calendario')->name('paginacalendario');

Route::get('clientes', 'PagesController@clientes')->name('paginaclientes');

Route::get('especialistas', 'PagesController@especialistas')->name('paginaespecialistas');

Route::get('infoclientes', 'PagesController@infoclientes')->name('paginainfoclientes');

Route::get('nuevocliente', 'PagesController@nuevocliente')->name('paginanuevocliente');

Route::get('historial', 'PagesController@historial')->name('paginahistorial');

Route::get('nuevaconsulta', 'PagesController@nuevaconsulta')->name('paginanuevaconsulta');

Route::get('verconsulta', 'PagesController@verconsulta')->name('paginaverconsulta');

Route::get('documentos', 'PagesController@documentos')->name('paginadocumentos');

Route::get('rip', 'PagesController@rip')->name('paginarip');

Route::get('nuevoespecialista', 'PagesController@nuevoespecialista')->name('paginanuevoespecialista');

Route::get('verespecialista', 'PagesController@verespecialista')->name('paginaverespecialista');

Route::get('nuevorip', 'PagesController@nuevorip')->name('paginanuevorip');

Route::get('verrip', 'PagesController@verrip')->name('paginaverrip');


