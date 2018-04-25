<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVigenciasTable extends Migration
{
    public function up()
    {
        Schema::create('vigencias', function (Blueprint $table) {
          $table->increments('id');
          $table->date('fecha_recepcion');
          $table->date('fecha_vencimiento');
          $table->date('fecha_baja')->nullable();
          $table->integer('baja');
          $table->string('cuce');
          $table->string('imagen');
          $table->string('obervacion');
          $table->integer('llamar');
          $table->integer('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
          $table->integer('empleado_id')->references('id')->on('empleados')->onDelete('cascade');
          $table->integer('boleta_id')->references('id')->on('boletas')->onDelete('cascade');
          $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vigencias');
    }
}
