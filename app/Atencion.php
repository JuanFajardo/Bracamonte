<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atencion extends Model
{
  protected $table = 'atencions';
  protected $fillable = ['id', 'id_medico', 'id_especialidad', 'id_horario'];
}
