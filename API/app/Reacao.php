<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reacao extends Model
{
    protected $table="reacoes";

    protected $fillable = [
        "id","tipo","cod_disciplina","id_avaliador"
    ];
}
