<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cvucv_id')->nullable();
            $table->string('cvucv_shortname')->nullable();
            $table->bigInteger('cvucv_category_id')->nullable();
            $table->string('cvucv_fullname')->nullable();
            $table->string('cvucv_displayname')->nullable();
            $table->string('cvucv_summary')->nullable();
            $table->boolean('cvucv_visible')->default(true);
            $table->string('cvucv_link')->nullable();
            $table->longText('cvucv_participantes')->nullable();
            $table->integer('categoria_id')->unsigned();
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
        Schema::dropIfExists('cursos');
    }
}
