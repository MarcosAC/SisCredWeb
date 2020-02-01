<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroClienteController extends Controller
{
    public function index(){
        $clientes = [
            ["nome"=>"Marcos Aurelio", "telefone"=>"9999-9999"],
            ["nome"=>"Patricia", "telefone"=>"9999-8888"],
            ["nome"=>"Bernardo", "telefone"=>"9999-7777"],
        ];
        return view('cadastroCliente.index',compact('clientes'));
    }

    public function criar(Request $request){
        return "Criar do CadastroClienteController!!!";
    }

    public function editar(){
        return "Editar do CadastroClienteController!!!";
    }
}
