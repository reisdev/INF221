<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Disciplina;

class ControllerDisciplina extends Controller
{
    public function index(){
        return Disciplina::all();
    }
    public function filtered(){
        return Disciplina::all();
    }
}
