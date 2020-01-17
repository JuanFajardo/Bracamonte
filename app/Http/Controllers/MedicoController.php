<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Medico;

class MedicoController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Medico::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('medico.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Medico;
    //$request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Medico');
  }

  public function show($id){
    $datos = Medico::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Medico::find($id);
    //$request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Medico');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Medico::find($id);
      $dato->delete();
      return "Medico Eliminado";
    }else{
      return redirect('/');
    }
  }

}
