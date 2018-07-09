<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avaliacao;
use App\Disciplina;
class ControllerAvaliacoes extends Controller
{
    public function index(Request $req){
        return Avaliacao::all();
    }
    public function insert(Request $req){
        if(!$req->has('avaliador') || !$req->has('disciplina') || !$req->has('nota')
        || !$req->has('utilidade') || !$req->has('facilidade') || !$req->has('descricao')
        || !$req->has('recomendacao') || !$req->has('professor')){
            return response()->json("Você não forneceu todos os campos necessários",500);
        }
        $resp = Avaliacao::create([
            "cod_disciplina" => $req['disciplina'],
            "id_usuario" => $req["avaliador"],
            "nota" => $req['nota'],
            "descricao" => $req['descricao'],
            "professor" => $req['professor'],
            "facilidade" => $req['facilidade'],
            "recomendacao" => $req['recomendacao'],
            "utilidade" => $req['utilidade']
        ]);
        $this::propaga($req['disciplina']);

        return response()->json($resp,200);
    }
    public static function propaga($codigo){
        // Re-calcula média notas
        $Avaliacoes = Avaliacao::where("cod_disciplina",$codigo);
        $facilidade = 0;
        $nota = 0;
        $utilidade = 0;
        $recomendacoes = 0;
        foreach($Avaliacoes as $aval){
            return response()->json($aval);
            $nota += $aval["nota"];
            $facilidade += $aval["facilidade"];
            $utilidade += $aval["utilidade"];
            $recomendacoes += $aval["recomendacao"] ? 1 : 0;

        }
        $nota = $nota/count($Avaliacoes);
        $facilidade = $facilidade/count($Avaliacoes);
        $utilidade = $utilidade/count($Avaliacoes);
        $disciplina = Disciplina::where("codigo",$codigo)->update(["nota" => $nota, "facilidade" => $facilidade, "utilidade" => $utilidade, "recomendacoes" => $recomendacoes]);
    }
}
