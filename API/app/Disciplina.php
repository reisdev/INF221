<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
        "codigo","nome","nota","dificuldade","semestre","departamento"
    ];
}
