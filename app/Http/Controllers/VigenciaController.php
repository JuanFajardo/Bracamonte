<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Vigencia;
class VigenciaController extends Controller
{
  public function __construct(){
    //$this->middleware('auth');
  }

  public function index(Request $request){
    $datos = Vigencia::all();
    $datos = \DB::table('vigencias')->join('empleados', 'vigencias.empleado_id', '=', 'empleados.id')
                                    ->join('empresas', 'vigencias.empresa_id', '=', 'empresas.id')
                                    ->select('vigencias.id', 'empleados.empleado', 'empresas.empresa',
                                            'vigencias.fecha_baja', 'vigencias.fecha_recepcion', 'vigencias.fecha_vencimiento', 'vigencias.llamar', 'vigencias.baja')
                                    ->get();
    if ($request->ajax()) {
      return $datos;
    }else{
      return view('vigencia.index', compact('datos'));
    }
  }

  public function store(Request $request){
    $dato = new Vigencia;
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Vigencia');
  }

  public function show($id){
    $datos = Vigencia::Where('id', '=', $id)->get();
    return $datos;
  }

  public function update(Request $request, $id){
    $dato = Vigencia::find($id);
    $request['user_id'] = 1;//\Auth::user()->id;
    $dato->fill($request->all());
    $dato->save();
    return redirect('/Vigencia');
  }

  public function destroy(Request $request, $id){
    if( $request->ajax() ){
      $dato = Vigencia::find($id);
      $dato->delete();
      return "Vigencia Eliminada";
    }else{
      return redirect('/');
    }
  }

  public function llamar($id){
    $dato = Vigencia::find($id);
    if( $dato->llamar == 0 ){
      $dato->llamar = 1;
    }elseif( $dato->llamar == 1 ){
      $dato->llamar = 0;
    }
    $dato->save();
    return "Cambio de estado de la llamada";
  }

  public function baja($id){
    $dato = Vigencia::find($id);
    if( $dato->baja == 0 ){
      $dato->baja = 1;
      $dato->fecha_baja = date('Y-m-d');
    }
    $dato->save();
    return "Cambio de estado de la boleta";
  }

}
