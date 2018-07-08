<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        catch(Exception $error){
            return response()->json(["status"=> 500, "message" => $error]);
        }
    }
}
