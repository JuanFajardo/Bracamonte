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
Route::get('usuarios', 'UsuarioController@index');
Route::get('usuarios/create', 'UsuarioController@showRegistrationForm');
Route::post('usuarios', 'UsuarioController@create');
Route::get('usuarios/{id}', 'UsuarioController@viewuser');
Route::get('usuarios/{id}/edit', 'UsuarioController@edit');
Route::patch('usuarios/{id}', 'UsuarioController@update');
Route::get('usuarios/info/ver', 'UsuarioController@profile');
Route::post('usuarios/info/ver', 'UsuarioController@profileActulizar');

Route::resource('Medico', 'MedicoController');
Route::resource('Especialidad', 'EspecialidadController');
Route::resource('Horario', 'HorarioController');
Route::resource('Atencion', 'AtencionController');
Route::resource('Noticia', 'NoticiaController');

Route::get('Vigencia/comando/llamar/{id}', 'VigenciaController@llamar');
Route::get('Vigencia/comando/baja/{id}', 'VigenciaController@baja');
