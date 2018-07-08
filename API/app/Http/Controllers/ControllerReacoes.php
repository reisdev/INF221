<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reacao;

class ControllerReacoes extends Controller
{
    public function index() {
        return Reacao::all();
    }
}
