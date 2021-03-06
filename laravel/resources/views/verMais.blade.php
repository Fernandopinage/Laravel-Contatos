@extends('layout.app')

@section('conteudo')
<div class="card">
    <div class="card-heard text-center">
      <h1>Ver Tudo</h1>
    </div>
  </div>
  <hr>
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Celular</th>
        <th scope="col">Email</th>
        <th scope="col">Rua</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Cep</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        
        <td>{{$dados->nome}}</td>
        <td>{{$dados->telefone}}</td>
        <td>{{$dados->celular}}</td>
        <td>{{$dados->email}}</td>
        <td>{{$dados->rua}}</td>
        <td>{{$dados->cidade}}</td>
        <td>{{$dados->estado}}</td>
        <td>{{$dados->cep}}</td>
        
        <td><a href="/editar/{{ $dados->id }}" class="btn btn-primary"><img src='{{'/icons/baseline_create_white_18dp.png'}}'> Editar</a></td>
        <td><a href="/excluir/{{ $dados->id }}" class="btn btn-danger"><img src='{{'/icons/baseline_clear_white_18dp.png'}}'> Excluir</a></td>
      </tr>
           
    </tbody>
  </table>

    
@endsection