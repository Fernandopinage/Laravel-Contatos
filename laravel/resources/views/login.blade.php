@extends('layout.app')


@section('conteudo')

<div class="row" style="margin:220px 400px;">

    <form method="" action="">

        {{ csrf_field() }}
        
              <div class="form-group row">

                    <label for="text" class="col-sm-4">Login:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" id="text" placeholder="Login">
                </div>

              </div>


              <div class="form-group row">
                <label for="password" class="col-sm-4">Password:</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
              </div>
              
              <div>
                  <input type="submit" class="btn btn-primary" value="Enviar">
              </div>
      </form>

</div>
    
@endsection