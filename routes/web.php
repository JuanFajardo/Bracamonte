<?php

Route::get('/', function () {
    return view('gamp');
});
Route::get('/home',function () {
    return view('home');
});

/* Inisio de Session
//Route::Auth();*/
Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

/* Administracion de Usuarios */
Route::get('usuarios', 'UsuarioController@index');
Route::get('usuarios/create', 'UsuarioController@showRegistrationForm');
Route::post('usuarios', 'UsuarioController@create');
Route::get('usuarios/{id}', 'UsuarioController@viewuser');
Route::get('usuarios/{id}/edit', 'UsuarioController@edit');
Route::patch('usuarios/{id}', 'UsuarioController@update');
Route::get('usuarios/info/ver', 'UsuarioController@profile');
Route::post('usuarios/info/ver', 'UsuarioController@profileActulizar');

Route::resource('Boleta',   'BoletaController');
Route::resource('Empleado', 'EmpleadoController');
Route::resource('Empresa',  'EmpresaController');
Route::resource('Vigencia', 'VigenciaController');
Route::get('Vigencia/comando/llamar/{id}', 'VigenciaController@llamar');
Route::get('Vigencia/comando/baja/{id}', 'VigenciaController@baja');
