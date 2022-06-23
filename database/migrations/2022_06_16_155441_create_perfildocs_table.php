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
        Schema::create('perfildocs', function (Blueprint $table) {
            $table->id();
            $table->string('correo_electronico',40);
            $table->string('password',40);
            $table->unsignedBigInteger('idEspecializacion');
            $table->foreign("idEspecializacion")->references("id")->on("especialidads")
            ->onDelete("cascade")->onUpdate("cascade");
            $table->string('whatsApp',40);
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
        Schema::dropIfExists('perfildocs');
    }
};
