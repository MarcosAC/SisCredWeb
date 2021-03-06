@extends('layout.cadastroCliente')

@section('titulo', 'Cadastro Cliente')

@section('conteudoCadastroCliente')
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>SisCred - Versão Alpha 1</title>
  </head>

  <header>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">SisCred - Versão Alpha 1</a>
        <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="login">Login</a></li>
          <!-- <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">Javascript</a></li>
          <li><a href="mobile.html">Mobile</a></li> -->
        </ul>
        <ul class="side-nav" id="mobile">
          <li><a href="login">Login</a></li>
          <!-- <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">Javascript</a></li>
          <li><a href="mobile.html">Mobile</a></li> -->
        </ul>
      </div>
    </nav>
  </header>

  <body>  
    <div class="container">
      <center><p><h3 style="color:#f44336;">Cadastro Cliente</h3></p></center>
      
    <div class="row">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Nome" id="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8">
            <input placeholder="Endereço" id="endereco" type="text" class="validate">
            <label for="endereco">Endereço</label>
          </div>
          <div class="input-field col s4">
            <input placeholder="Telefone" id="telefone" type="text" class="validate">
            <label for="telefone">Telefone</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s8">
            <input placeholder="Profissão" id="profissao" type="text" class="validate">
            <label for="profissao">Profissão</label>
          </div>
          <div class="input-field col s4">
            <input placeholder="Renda" id="renda" type="text" class="validate">
            <label for="renda">Renda</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input placeholder="Email" id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>      
      </form>
      <div>
        <a class="waves-effect waves-light btn red">Salvar</a>
        <a class="waves-effect waves-light btn red">Cancelar</a>
      </div>      
    </div> 
@endsection