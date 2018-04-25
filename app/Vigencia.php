<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Vigencia extends Model
{
  protected $table    = 'vigencias';
  protected $fillable = ['id', 'fecha_recepcion', 'fecha_vencimiento', 'fecha_baja', 'baja', 'cuce', 'imagen', 'obervacion', 'llamar', 'empresa_id', 'empleado_id', 'boleta_id', 'user_id'];

  public function setImagenAttribute($imagen){
    $this->attributes['imagen'] = md5(date('Y_m_d_H_i_s_')).'_'.$imagen->getClientOriginalName();
    $name = md5(date('Y_m_d_H_i_s_')).'_'.$imagen->getClientOriginalName();
    \Storage::disk('local')->put($name, \File::get($imagen));
  }
}
