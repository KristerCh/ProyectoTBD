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

// Route::get('/', function () {
//     return view('auth.register');
// });

Route::POST('login', 'Auth\LoginController@login')->name('login');
Route::POST('register', 'Auth\RegisterController@register')->name('register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('empleados', 'EmpleadosController');
Route::resource('clientes', 'ClientesController');
Route::resource('articulo', 'ArticuloController');
Route::resource('detalle', 'DetalleController');
Route::resource('inventario', 'InventarioController');
Route::resource('material', 'MaterialController');
Route::resource('ordenc', 'OrdencController');
Route::resource('servicios', 'ServiciosController');
Route::resource('servicioxorden', 'ServicioxordenController');


