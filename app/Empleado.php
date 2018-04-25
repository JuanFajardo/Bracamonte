<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Empleado extends Model{
  use SoftDeletes;
  protected $table    = 'empleados';
  protected $fillable = ['id', 'empleado', 'celular', 'cargo'];
  protected $dates    = ['deleted_at'];
}
