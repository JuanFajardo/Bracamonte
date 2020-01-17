<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Atencion;
class AtencionController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Atencion::all();
    if ($request->ajax()) {
      return $datos;
    }else{
      $datos = \DB::table('atencions')->join('horarios', 'atencions.id_horario', '=', 'horarios.id')
                                      ->join('medicos', 'atencions.id_medico', '=', 'medicos.id')
                                      ->join('especialidads', 'atencions.id_especialidad', '=', 'especialidads.id')
                                      ->get();
      return view('atencion.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Atencion;
    //$request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Atencion');
  }

  public function show($id){
    $datos = Atencion::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Atencion::find($id);
    //$request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Atencion');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Atencion::find($id);
      $dato->delete();
      return "Atencion Eliminado";
    }else{
      return redirect('/');
    }
  }
}
