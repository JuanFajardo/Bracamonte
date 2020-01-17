<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
  protected $table = 'especialidads';
  protected $fillable = ['id', 'especialidad', 'descripcion'];
}
