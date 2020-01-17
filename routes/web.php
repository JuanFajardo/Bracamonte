<?php

Route::get('/', function () {
    $medicos = \App\Medico::all();
    $especialidads = \App\Especialidad::all();
    $horarios = \App\Horario::all();
    $atencions = \DB::table('atencions')->join('horarios', 'atencions.id_horario', '=', 'horarios.id')
                                    ->join('medicos', 'atencions.id_medico', '=', 'medicos.id')
                                    ->join('especialidads', 'atencions.id_especialidad', '=', 'especialidads.id')
                                    ->get();
    $noticias = \App\Noticia::all();
    return view('diego', compact('medicos', 'especialidads', 'horarios', 'atencions', 'noticias'));
});
Route::get('/home',function () {
    return view('diegoCuerpo');
});

/* Inisio de Session
//Route::Auth();*/

Route::get('login', 'Auth\AuthController@showLoginForm');
Route::post('login', 'Auth\AuthController@login');
Route::get('logout', 'Auth\AuthController@logout');

/* Administracion de Usuarios */
Route::get('usuario', 'UsuarioController@index');
Route::get('usuario/create', 'UsuarioController@showRegistrationForm');
Route::post('usuario', 'UsuarioController@create');
Route::get('usuario/{id}', 'UsuarioController@viewuser');
Route::get('usuario/{id}/edit', 'UsuarioController@edit');
Route::patch('usuario/{id}', 'UsuarioController@update');
Route::get('usuario/info/ver', 'UsuarioController@profile');
Route::post('usuario/info/ver', 'UsuarioController@profileActulizar');

Route::resource('Medico', 'MedicoController');
Route::resource('Especialidad', 'EspecialidadController');
Route::resource('Horario', 'HorarioController');
Route::resource('Atencion', 'AtencionController');
Route::resource('Noticia', 'NoticiaController');

Route::get('Vigencia/comando/llamar/{id}', 'VigenciaController@llamar');
Route::get('Vigencia/comando/baja/{id}', 'VigenciaController@baja');

Auth::routes();
