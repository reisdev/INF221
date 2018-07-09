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
        $avaliacao = Avaliacao::create([
            "cod_disciplina" => $req['disciplina'],
            "id_usuario" => $req["avaliador"],
            "nota" => $req['nota'],
            "descricao" => $req['descricao'],
            "professor" => $req['professor'],
            "facilidade" => $req['facilidade'],
            "recomendacao" => $req['recomendacao'],
            "utilidade" => $req['utilidade']
        ]);
        $this::propaga($req['disciplina']); // Chama a propagação da nova avaliação

        return response()->json($avaliacao,200);
    }
    public function porDisciplina(Request $req,$id){
        return Avaliacao::where("cod_disciplina",$id)->get();
    }
    public function porUsuario(Request $req,$id){
        return Avaliacao::where("id_usuario",$id)->get();
    }
    public static function propaga($codigo){
        // Re-calcula média notas
        $avaliacoes = Avaliacao::where("cod_disciplina","=",$codigo)->get();
        $facilidade = 0;
        $nota = 0;
        $utilidade = 0;
        $recomendacoes = 0;
        foreach($avaliacoes as $aval){
            $nota += $aval["nota"];
            $facilidade += $aval["facilidade"];
            $utilidade += $aval["utilidade"];
            $recomendacoes += $aval["recomendacao"] ? 1 : -1;
        }
        $nota = $nota/count($avaliacoes);
        $facilidade = $facilidade/count($avaliacoes);
        $utilidade = $utilidade/count($avaliacoes);
        Disciplina::where("codigo",$codigo)->update(["nota" => $nota, "facilidade" => $facilidade, "utilidade" => $utilidade, "recomendacoes" => $recomendacoes]);
    }
}
