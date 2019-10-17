<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatusInvitaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatus_invitaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('nombre_corto');
            $table->string('descripcion')->nullable();
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
        Schema::dropIfExists('estatus_invitaciones');
    }
}
