<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Especialidad;
class EspecialidadController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Especialidad::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('especialidad.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Especialidad;
    //$request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Especialidad');
  }

  public function show($id){
    $datos = Especialidad::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Especialidad::find($id);
    //$request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Especialidad');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Especialidad::find($id);
      $dato->delete();
      return "Especialidad Eliminado";
    }else{
      return redirect('/');
    }
  }

}
