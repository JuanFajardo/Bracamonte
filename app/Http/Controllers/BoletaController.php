<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Boleta;
class BoletaController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Boleta::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('boleta.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Boleta;
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Boleta');
  }

  public function show($id){
    $datos = Boleta::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Boleta::find($id);
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Boleta');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Boleta::find($id);
      $dato->delete();
      return "Boleta Eliminada";
    }else{
      return redirect('/');
    }
  }

}
