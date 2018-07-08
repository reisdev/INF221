<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avaliacao;

class ControllerAvaliacoes extends Controller
{
    public function index(Request $req){
        return Avaliacao::all();
    }
    public function insert(Request $req){
        if(!$req->has('avaliador') || !$req->has('disciplina') || !$req->has('nota') 
        || !$req->has('utilidade') || !$req->has('facilidade') || !$req->has('descricao')
        || !$req->has('recomendacao')){
            return response()->json("Você não forneceu todos os campos necessários",500);
        }
        $resp = Avaliacao::create([
            "cod_disciplina" => $req['disciplina'],
            "id_usuario" => $req["avaliador"],
            "nota" => $req['nota'],
            "descricao" => $req['descricao'],
            "facilidade" => $req['facilidade'],
            "recomendacao" => $req['recomendacao'],
            "utilidade" => $req['utilidade']
        ]);
        return response()->json($resp,200);
    }
}
