<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = "avaliacoes";

    protected $fillable = [
        "id","id_usuario","cod_disciplina","descricao","nota","facilidade","recomendacao","utilidade"
    ];
}
