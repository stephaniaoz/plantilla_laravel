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
    return view('master');
});

Route::get('/example', function () {
    return view('layouts.master-example');
});

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->name('dashboard');

Route::resources([
    'usuario' => 'UsuarioController',
    'pais' => 'PaisController'
]);

