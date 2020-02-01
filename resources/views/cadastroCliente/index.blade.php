@extends('layout.cadastroCliente')

@section('titulo', 'Cadastro Cliente')

@section('conteudo')  
  <h3>View de Cadastro Clientes//Deu certo!!!</h3>

  @foreach($clientes as $cliente)
    <p>{{ $cliente['nome'] }}</p>
    <p>{{ $cliente['telefone'] }}</p>
  @endforeach
@endsection