<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAvaliacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("cod_disciplina");
            $table->foreign("cod_disciplina")->references("cod_disciplina")->on("disciplinas");
            $table->string("id_usuario");
            $table->foreign("id_usuario")->references("id_fb")->on("users");
            $table->double("nota");
            $table->double("facilidade");
            $table->double("recomendacao");
            $table->double("utilidade");
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
        Schema::dropIfExists('avaliacoes');
    }
}
