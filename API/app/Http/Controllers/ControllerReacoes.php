<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Reacao;

class ControllerReacoes extends Controller
{
    public function index() {
        return Reacao::all();
    }
    public function insert(Request $req){
        if(!$req->has('disciplina') || !$req->has("avaliador") || !$req->has("tipo")){
            return response()->json(["status" => 500, "message"=> "Você não forneceu todos os dados necessários"]);
        }
        try{
            $reacao = Reacao::create([
                "cod_disciplina" => $req["disciplina"],
                "id_avaliador" => $req["avaliador"],
                "tipo"=> $req["tipo"]]);
            return response()->json($reacao,200);
        }
        catch(QueryException $error){
            return response()->json("O usuário ou a disciplina fornecidos não existem",500)->header('Content-Type','application/json; charset=utf-8');
        }
    }
}
