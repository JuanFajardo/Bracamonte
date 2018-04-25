<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Empresa extends Model{
  use SoftDeletes;
  protected $table    = 'empresas';
  protected $fillable = ['id', 'empresa', 'celular', 'direccion', 'representante'];
  protected $dates    = ['deleted_at'];
}
