<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatosController extends Controller
{
    public function index(){
        return "esse é o index do contatosController";
    }

    public function criar(Request $req){
        dd($req->all());
        return "esse é o criar do contatosController";
    }

    public function editar(){
        return "esse é o editar do contatosController";
    }
}
