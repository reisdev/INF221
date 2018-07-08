<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Disciplina;

class ControllerDisciplina extends Controller
{
    public function index(){
        return Disciplina::all();
    }
    public function insert(Request $req){
        if(!$req->has('codigo') || !$req->has("nome") || !$req->has('semestre') || !$req->has('departamento')){
            return response()->json("Você não preencheu todos os campos necessários",500);
        }
        try{
            $disciplina = Disciplina::create([
                "codigo" => $req["codigo"],
                "nome" => $req["nome"],
                "semestre" => $req["semestre"],
                "departamento" => $req["departamento"]
            ]);
            return response()->json($disciplina,200);
        }
        catch(QueryException $error){
            return response()->json($error->errorInfo,500);
        }
    }
    public function filtered(){
        return Disciplina::all();
    }
}
