<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Disciplina;

class Avaliacao extends Model
{
    protected $table = "avaliacoes";

    protected $fillable = [
        "id","id_usuario","cod_disciplina","descricao","professor","nota","facilidade","recomendacao","utilidade"
    ];
}
