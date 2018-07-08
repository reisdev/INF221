<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("tipo");
            $table->string("cod_disciplina");
            $table->foreign("cod_disciplina")->references("cod_disciplina")->on("disciplinas");
            $table->string("id_avaliador");
            $table->foreign("id_avaliador")->references("id_fb")->on("users");
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
        Schema::dropIfExists('reacoes');
    }
}
