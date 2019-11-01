@extends('layout.app')

@section('conteudo')

<h1 class="text text-center">Lista de Contatos</h1>
<hr>

<table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Celular</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dados as $dados)
          <tr>
            
            <td>{{$dados->nome}}</td>
            <td>{{$dados->email}}</td>
            <td>{{$dados->telefone}}</td>
            <td>{{$dados->celular}}</td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    
@endsection