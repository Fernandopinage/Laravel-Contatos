@extends('layout.app')

<!-- criando o form de cadastro de novo Usuario -->
@section('conteudo')

<div class="card">
    <div class="card-heard text-center">
      <h1>New Contatos</h1>
    </div>
  </div>

<hr style="color:teal">
   <div class="row" style="margin:100px 400px;">
    
        <!--  funçao para validar -->
        @if($errors->any())
            @foreach($errors->all() as $error)    
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
   
            @endforeach 

        @endif
    <!--                fim                      -->  
    
    
        <form action="validarCadastro" method="POST">

                {{ csrf_field() }}

                <div class="form-group row">

                        <label for="nome" class="col-sm-4">Nome:</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
                        </div>
        
                </div>

                <div class="form-group row">

                    <label for="text" class="col-sm-4">Email:</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" name="email" id="text" placeholder="Email">
                    </div>
    
                </div>
    
    
                <div class="form-group row">
                    <label for="password" class="col-sm-4">Password:</label>
                    <div class="col-sm-12">
                      <input type="password" class="form-control" name="senha" id="password" placeholder="Password">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-dark btn-lg btn-block">Salvar</button>
              </form>

   </div>


@endsection