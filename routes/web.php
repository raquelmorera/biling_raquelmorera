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
    return view('/auth/login');
});

Route::get('/home',function(){
    return view('home');

});

Auth::routes();



Route::get('/home', 'HomeController@consultaruser')->name('home');

//Usuarios
Route::get('/usuarios','UserController@consultarUsers')->name('Usuarios');
Route::post('/deleteUser','UserController@deleteUser');
Route::post('/updateUsuario','UserController@updateUser');

//Productos
Route::get('/bodega','ProductsController@consultarProductos')->name('Productos');
Route::post('/updateProducto', 'ProductsController@updateProducto');
Route::post('/deleteProducto','ProductsController@deleteProducto');

//Facturas
Route::get('/facturas','FacturasController@consultarFacturas')->name('Facturas');
Route::post('/deleteFactura','FacturasController@deleteFacturas');
Route::post('/updateFactura', 'FacturasController@updateFacturas');

