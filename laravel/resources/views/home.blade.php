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
          </tr>
        </thead>
        <tbody>
          @foreach ($dados as $dados)
          <tr>
            
            <td>{{$dados->nome}}</td>
            <td>{{$dados->telefone}}</td>
            <td>{{$dados->celular}}</td>

          <td><a href="vermais/{{ $dados->id }}" class="btn btn-info">ver tudo</a></td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
    
@endsection