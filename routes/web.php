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
    return view('auth.login');
});

Route::get('/home',function(){
    return view('home');

});

Route::get('/bills',function(){
    return view('reporte.bills');

});
  

Auth::routes();

Route::resource('productos', 'ProductosController');
Route::resource('usuarios', 'UsuariosController');
Route::resource('facturas', 'FacturasController');

Route::get('/home', 'HomeController@consultaruser')->name('home');

Route::get('/verfacturas', 'ReporteController@getFacturas');
Route::get('/verfacturasbyusers', 'ReporteController@Facturasbyusers');
Route::get('/verfacturasbyproductos','ReporteController@Facturasbyproductos');



