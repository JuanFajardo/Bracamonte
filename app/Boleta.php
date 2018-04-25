<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Boleta extends Model
{
  use SoftDeletes;
  protected $table    = 'boletas';
  protected $fillable = ['id', 'boleta', 'descripcion'];
  protected $dates    = ['deleted_at'];
}
