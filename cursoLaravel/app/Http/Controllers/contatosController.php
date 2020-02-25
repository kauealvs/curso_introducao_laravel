<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatosController extends Controller
{
    public function index(){
        $contatos = [
            (object)["nome"=>"Carolina", "tel"=>"7474475656"],
            (object)["nome"=>"kauê", "tel"=>"8365373845"],
            (object)["nome"=>"aline", "tel"=>"1235373845"],
            (object)["nome"=>"bruno", "tel"=>"7895373845"],
            (object)["nome"=>"daniel", "tel"=>"4565373845"],
            (object)["nome"=>"lara", "tel"=>"5373845"]
        ];

        $contato = new\App\Contato();
        dd($contato->lista());

        return view('contatos.index', compact('contatos'));
    }

    public function criar(Request $req){
        dd($req->all());
        return "esse é o criar do contatosController";
    }

    public function editar(){
        return "esse é o editar do contatosController";
    }
}
