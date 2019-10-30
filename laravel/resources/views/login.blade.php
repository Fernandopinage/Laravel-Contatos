@extends('layout.app')


@section('conteudo')

<div class="row"  style="margin:220px 400px;">

    <form method="POST" action="validandoLogin">

        {{ csrf_field() }}
        

              <div class="form-group row">

              <label for="nome" class="col-sm-4">Nome:</label>
              <div class="col-sm-12">
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
              </div>

              </div>
              <div class="form-group row">

                 <label for="email" class="col-sm-4">Email:</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>

              </div>


              <div class="form-group row">
                <label for="senha" class="col-sm-4">Password:</label>
                <div class="col-sm-12">
                  <input type="password" class="form-control" name="senha" id="senha" placeholder="Password">
                </div>
              </div>
              
              <div>
                  <input type="submit" class="btn btn-dark btn-lg btn-block" value="Enviar">
              </div>
      </form>

</div>
    
@endsection