@extends('layout.app')


@section('conteudo')

<div class="row"  style="margin:220px 400px;">


  @if($errors->any())
  @foreach($errors->all() as $error)    
  <div class="alert alert-danger">
    {{ $error }}
  </div>
   
  @endforeach 

  @endif
    

    <form method="POST" action="validandoLogin">

        {{ csrf_field() }}
        
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