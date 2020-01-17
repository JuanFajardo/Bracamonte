<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Horario;
class HorarioController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Horario::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('horario.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Horario;
    //$request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Horario');
  }

  public function show($id){
    $datos = Horario::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Horario::find($id);
    //$request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Horario');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Horario::find($id);
      $dato->delete();
      return "Horario Eliminado";
    }else{
      return redirect('/');
    }
  }
}
