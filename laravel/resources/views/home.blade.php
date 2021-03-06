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
            <th scope="col">Ver Mais</th>
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
          <td><a href="vermais/{{ $dados->id }}" class="btn btn-success"><img src='{{'icons/baseline_visibility_white_18dp.png'}}'> ver tudo</a></td>
          <td><a href="/editar/{{ $dados->id }}" class="btn btn-primary"><img src='{{'icons/baseline_create_white_18dp.png'}}'> Editar</a></td>
          <td><a href="/excluir/{{ $dados->id }}" class="btn btn-danger"><img src='{{'icons/baseline_clear_white_18dp.png'}}'> Excluir</a></td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    
@endsection