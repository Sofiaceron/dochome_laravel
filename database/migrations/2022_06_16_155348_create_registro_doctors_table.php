<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_doctors', function (Blueprint $table) {
            $table->id();
              $table->string('nombres',40);
              $table->string('apellidos',40);
              $table->enum('sexo',["M", "F"]);
              $table->integer('cedula');
              $table->date('fecha_expedicion');
              $table->integer('telefono');
              $table->string('fcopia_cedula',200);
              $table->string('fcopia_acta_certificacion',200);
              $table->string('fcopia_diploma',200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_doctors');
    }
};
