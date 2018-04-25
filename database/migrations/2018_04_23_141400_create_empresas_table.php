<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    public function up(){
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('empresa');
            $table->string('celular');
            $table->string('direccion');
            $table->string('representante');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('empresas');
    }
}
