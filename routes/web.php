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
Route::get('/quienes-somos', function () {
    return view('quienes');
})->name('quienes');
Route::get('/como-funciona', function () {
    return view('como');
})->name('como');
Route::get('/precios', function () {
    return view('precios');
})->name('precios');

Route::get('confirmar','ConfirmacionController@index')->name('confirmar');
Route::get('/codigo','ConfirmacionController@show')->name('confirmaciones.show');
Route::post('confirmar/store','ConfirmacionController@store')->name('confirmaciones.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
	//Administrador
	Route::get('admin','AdminController@index')->name('admin.index')->middleware('permission:admin.index');

	//Cliente
	Route::get('clientes','ClienteController@index')->name('clientes.index')->middleware('permission:clientes.index');

	//Eventos
	Route::post('eventos/store','EventoController@store')->name('eventos.store')->middleware('permission:eventos.create');
	Route::get('eventos','EventoController@index')->name('eventos.index')->middleware('permission:eventos.index');
	Route::get('eventos/create','EventoController@create')->name('eventos.create')->middleware('permission:eventos.create');
	Route::put('eventos/{mesa}','EventoController@update')->name('eventos.update')->middleware('permission:eventos.edit');
	Route::get('eventos/{mesa}/edit','EventoController@edit')->name('eventos.edit')->middleware('permission:eventos.edit');
	Route::get('eventos/{mesa}','EventoController@show')->name('eventos.show')->middleware('permission:eventos.show');
	Route::get('eventos/{mesa}/destroy','EventoController@destroy')->name('eventos.destroy')->middleware('permission:eventos.destroy');
	Route::post('eventos/validateCode','EventoController@validateCode')->name('eventos.validateCode')->middleware('permission:eventos.create');
	Route::get('eventos/{mesa}/definitiveGuest','EventoController@definitiveGuest')->name('eventos.definitiveGuest')->middleware('permission:eventos.edit');

	//Mesas
	Route::post('tipomesas/store','TipoMesaController@store')->name('tipomesas.store')->middleware('permission:mesas.create');
	Route::get('tipomesas','TipoMesaController@index')->name('tipomesas.index')->middleware('permission:mesas.index');
	Route::get('tipomesas/create','TipoMesaController@create')->name('tipomesas.create')->middleware('permission:mesas.create');
	Route::put('tipomesas/{mesa}','TipoMesaController@update')->name('tipomesas.update')->middleware('permission:mesas.edit');
	Route::get('tipomesas/{mesa}/edit','TipoMesaController@edit')->name('tipomesas.edit')->middleware('permission:mesas.edit');
	Route::get('tipomesas/{mesa}','TipoMesaController@show')->name('tipomesas.show')->middleware('permission:mesas.show');
	Route::get('tipomesas/{mesa}/destroy','TipoMesaController@destroy')->name('tipomesas.destroy')->middleware('permission:mesas.destroy');

	//Tipo de Eventos
	Route::post('tipoEventos/store','tipoEventoController@store')->name('tipoEventos.store')->middleware('permission:tipoEventos.create');
	Route::get('tipoEventos','tipoEventoController@index')->name('tipoEventos.index')->middleware('permission:tipoEventos.index');
	Route::get('tipoEventos/create','tipoEventoController@create')->name('tipoEventos.create')->middleware('permission:tipoEventos.create');
	Route::put('tipoEventos/{mesa}','tipoEventoController@update')->name('tipoEventos.update')->middleware('permission:tipoEventos.edit');
	Route::get('tipoEventos/{mesa}/edit','tipoEventoController@edit')->name('tipoEventos.edit')->middleware('permission:tipoEventos.edit');
	Route::get('tipoEventos/{mesa}','tipoEventoController@show')->name('tipoEventos.show')->middleware('permission:tipoEventos.show');
	Route::get('tipoEventos/{mesa}/destroy','tipoEventoController@destroy')->name('tipoEventos.destroy')->middleware('permission:tipoEventos.destroy');

	//Planes
	Route::post('planes/store','PlanController@store')->name('planes.store')->middleware('permission:planes.create');
	Route::get('planes','PlanController@index')->name('planes.index')->middleware('permission:planes.index');
	Route::get('planes/create','PlanController@create')->name('planes.create')->middleware('permission:planes.create');
	Route::put('planes/{mesa}','PlanController@update')->name('planes.update')->middleware('permission:planes.edit');
	Route::get('planes/{mesa}/edit','PlanController@edit')->name('planes.edit')->middleware('permission:planes.edit');
	Route::get('planes/{mesa}','PlanController@show')->name('planes.show')->middleware('permission:planes.show');
	Route::get('planes/{mesa}/destroy','PlanController@destroy')->name('planes.destroy')->middleware('permission:planes.destroy');

	//Codigos
	Route::post('codigos/store','CodigoController@store')->name('codigos.store')->middleware('permission:codigos.create');
	Route::get('codigos','CodigoController@index')->name('codigos.index')->middleware('permission:codigos.index');
	Route::get('codigos/create','CodigoController@create')->name('codigos.create')->middleware('permission:codigos.create');
	Route::put('codigos/{mesa}','CodigoController@update')->name('codigos.update')->middleware('permission:codigos.edit');
	Route::get('codigos/{mesa}/edit','CodigoController@edit')->name('codigos.edit')->middleware('permission:codigos.edit');
	Route::get('codigos/{mesa}','CodigoController@show')->name('codigos.show')->middleware('permission:codigos.show');
	Route::get('codigos/{mesa}/destroy','CodigoController@destroy')->name('codigos.destroy')->middleware('permission:codigos.destroy');
	Route::get('codigos/{mesa}','CodigoController@generatePDF')->name('codigos.generatePDF')->middleware('permission:codigos.edit');

	//Tipo Asistencias
	Route::post('asistencias/store','AsistenciaController@store')->name('asistencias.store')->middleware('permission:asistencias.create');
	Route::get('asistencias','AsistenciaController@index')->name('asistencias.index')->middleware('permission:asistencias.index');
	Route::get('asistencias/create','AsistenciaController@create')->name('asistencias.create')->middleware('permission:asistencias.create');
	Route::put('asistencias/{asistencia}','AsistenciaController@update')->name('asistencias.update')->middleware('permission:asistencias.edit');
	Route::get('asistencias/{asistencia}/edit','AsistenciaController@edit')->name('asistencias.edit')->middleware('permission:asistencias.edit');
	Route::get('asistencias/{asistencia}','AsistenciaController@show')->name('asistencias.show')->middleware('permission:asistencias.show');
	Route::get('asistencias/{asistencia}/destroy','AsistenciaController@destroy')->name('asistencias.destroy')->middleware('permission:asistencias.destroy');
	Route::get('asistencias/{asistencia}','AsistenciaController@generatePDF')->name('asistencias.generatePDF')->middleware('permission:asistencias.edit');

	//Invitados
	Route::get('invitados','InvitadoController@index')->name('invitados.index')->middleware('permission:invitados.index');
	Route::get('invitados/create','InvitadoController@create')->name('invitados.create')->middleware('permission:invitados.create');
	Route::post('invitados/store','InvitadoController@store')->name('invitados.store')->middleware('permission:invitados.create');
	Route::get('invitados/{id}','InvitadoController@show')->name('invitados.show')->middleware('permission:invitados.show');
	Route::get('invitados/{id}/edit','InvitadoController@edit')->name('invitados.edit')->middleware('permission:invitados.edit');
	Route::put('invitados/{id}','InvitadoController@update')->name('invitados.update')->middleware('permission:invitados.edit');
	Route::get('invitados/{id}/destroy','InvitadoController@destroy')->name('invitados.destroy')->middleware('permission:invitados.destroy');

	//Acompañantes
	Route::get('acompanantes','AcompananteController@index')->name('acompanantes.index')->middleware('permission:acompanantes.index');
	Route::get('acompanantes/create','AcompananteController@create')->name('acompanantes.create')->middleware('permission:acompanantes.create');
	Route::post('acompanantes/store','AcompananteController@store')->name('acompanantes.store')->middleware('permission:acompanantes.create');
	Route::get('acompanantes/{id}','AcompananteController@show')->name('acompanantes.show')->middleware('permission:acompanantes.show');
	Route::get('acompanantes/{id}/edit','AcompananteController@edit')->name('acompanantes.edit')->middleware('permission:acompanantes.edit');
	Route::put('acompanantes/{id}','AcompananteController@update')->name('acompanantes.update')->middleware('permission:acompanantes.edit');
	Route::get('acompanantes/{id}/destroy','AcompananteController@destroy')->name('acompanantes.destroy')->middleware('permission:acompanantes.destroy');

	//PDF
	Route::get('reporte','pdfController@download')->name('pdf.reporte');
	Route::get('qrGenerateAll','pdfController@qrGenerateAll')->name('pdf.qrGenerateAll');

});