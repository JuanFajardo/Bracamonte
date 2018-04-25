<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{

    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
          $table->increments('id');
          $table->string('empleado');
          $table->string('celular');
          $table->string('cargo');
          $table->softDeletes();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
