<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDisciplina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplina', function (Blueprint $table) {
            $table->string("cod_disciplina")->unique();
            $table->string("nome");
            $table->double("nota");
            $table->double("dificuldade");
            $table->string("semestre");
            $table->string("departamento");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("disciplina");
    }
}
