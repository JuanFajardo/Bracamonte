<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletasTable extends Migration
{

    public function up(){
        Schema::create('boletas', function (Blueprint $table) {
          $table->increments('id');
          $table->string('boleta');
          $table->string('descripcion');
          $table->softDeletes();
          $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('boletas');
    }
}
