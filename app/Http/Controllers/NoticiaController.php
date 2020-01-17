<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Noticia;
class NoticiaController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Noticia::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('noticia.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Noticia;
    //$request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Noticia');
  }

  public function show($id){
    $datos = Noticia::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Noticia::find($id);
    //$request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Noticia');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Noticia::find($id);
      $dato->delete();
      return "Noticia Eliminado";
    }else{
      return redirect('/');
    }
  }
}
