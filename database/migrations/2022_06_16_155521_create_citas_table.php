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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('especialidadId');
            $table->foreign("especialidadId")->references("id")->on("especialidads")
            ->onDelete("cascade")->onUpdate("cascade");
            $table->unsignedBigInteger('doctorId');
            $table->foreign("doctorId")->references("id")->on("registro_doctors")
            ->onDelete("cascade")->onUpdate("cascade");
            $table->unsignedBigInteger('calendarioId');
            $table->foreign("calendarioId")->references("id")->on("calendarios")
            ->onDelete("cascade")->onUpdate("cascade");
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
        Schema::dropIfExists('citas');
    }
};
