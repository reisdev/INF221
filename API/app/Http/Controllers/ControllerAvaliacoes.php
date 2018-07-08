<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avaliacao;

class ControllerAvaliacoes extends Controller
{
    public function index(){
        return Avaliacao::all();
    }
}
