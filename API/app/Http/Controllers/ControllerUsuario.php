<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\User;

class ControllerUsuario extends Controller
{
    public function index(){
        return User::all();
    }
    public function insert(Request $req){
        if(!$req->has('id_facebook') || !$req->has('curso') || !$req->has('data_ingresso'))
            return response()->json("Você não preencheu todos os campos necessários",500);
        try {
            User::create([
                "id_fb" => $req('id_facebook'),
                "curso" => $req('curso'),
                "data_ingresso" => $req('data_ingresso')
            ]);
        }
        catch(QueryException $error){
            return response()->json($error,500);
        }
    }
}
