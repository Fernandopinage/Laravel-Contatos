@extends('layout.app')

@section('conteudo')
    
<h1 class="text text-center">New Contatos</h1>
<hr>
<br><br>
        <form action="criandoContato" method="POST">
            <div class="row">

                <div class="col">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" >
                    
                </div>
                <div class="col">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                    
                </div>

            </div>
            <br>
            <div class="row">

                    <div class="col-xl-4">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="Telefone">
                        
                    </div>
                    <div class="col-xl-4">
                        <label for="celular">Celular</label>    
                        <input type="text" name="celular" id="celular" class="form-control" placeholder="Celular">
                        
                    </div>
                    <div class="col-xl-4">
                        <label for="cep">Cep</label> 
                        <input type="text" name="cep" id="cep" class="form-control" placeholder="Cep">
                        
                    </div>
    
            </div>
            <br>
            <div class="row">

                    <div class="col-xl-6">
                        <label for="rua">Rua</label> 
                        <input type="text" name="rua" id="rua" class="form-control" placeholder="Rua">
                        
                    </div>
                    <div class="col-xl-4">
                        <label for="cidade">Cidade</label>
                        <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade">
                        
                    </div>
                    
                    <div class="col-xl-2">
                            <label for="estado">Estado</label>
                        <input type="text" name="estado" id="estado" class="form-control" placeholder="Estado">
                        
                    </div>
    
            </div>
            <br><br>
            
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Salvar</button>
           
            
         </form>

@endsection