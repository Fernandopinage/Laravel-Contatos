@extends('layout.app')

@section('conteudo')


<div class="card">
  <div class="card-heard text-center">
    <h1>Lista de Contatos</h1>
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
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Cep</th>
            <th scope="col">rua</th>
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dados as $dados)
          <tr>
            
            <td>{{$dados->nome}}</td>
            <td>{{$dados->telefone}}</td>
            <td>{{$dados->celular}}</td>
            <td>{{$dados->email}}</td>
            <td>{{$dados->cidade}}</td>
            <td>{{$dados->estado}}</td>
            <td>{{$dados->cep}}</td>
            <td>{{$dados->rua}}</td>
          <td><a href="editar/{{ $dados->id }}" class="btn btn-primary">Editar</a></td>
          <td><a href="excluir/{{ $dados->id }}" class="btn btn-danger">Excluir</a></td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    
@endsection