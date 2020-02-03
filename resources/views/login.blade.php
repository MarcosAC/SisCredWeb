@extends('layout.login')

@section('titulo', 'SisCred - Login')

@section('conteudoLogin')
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

  <body>
    <div class="container">
      <center><h3>Login</h3></center>
      <div class="row>">
        <center>
          <div class="container">        
            <div class="row">        
              <form class="col s12">          
                <div class="row">            
                  <div class="input-field col s12">
                    <input  id="login" type="text" class="validate">
                    <label for="login">Login</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input id="senha" type="password" class="validate">
                    <label class="active" for="senha">Senha</label>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <a class="waves-effect waves-light btn">Entrar</a>
        </center>
      </div>    
    </div>
