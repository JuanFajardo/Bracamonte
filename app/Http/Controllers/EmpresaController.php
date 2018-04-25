<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Empresa;
class EmpresaController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Empresa::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('empresa.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Empresa;
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Empresa');
  }

  public function show($id){
    $datos = Empresa::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Empresa::find($id);
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Empresa');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Empresa::find($id);
      $dato->delete();
      return "Empresa Eliminada";
    }else{
      return redirect('/');
    }
  }
}
