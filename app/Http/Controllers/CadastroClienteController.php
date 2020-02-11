<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroClienteController extends Controller
{
    public function index(){        
        return view('cadastroCliente');
    }

    public function criar(Request $request){
        return "Criar do CadastroClienteController!!!";
    }

    public function editar(){
        return "Editar do CadastroClienteController!!!";
    }
}
