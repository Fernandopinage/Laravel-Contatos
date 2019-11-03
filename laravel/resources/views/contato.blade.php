@extends('layout.app')
    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- -------------------- -->
@section('conteudo')
    
<h1 class="text text-center">New Contatos</h1>
<hr>
<br><br>

        <!--  funçao para validar -->
        @if($errors->any())
            @foreach($errors->all() as $error)    
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                    </button>
                </div>
   
            @endforeach 

        @endif
    <!--                fim                      -->   

        <form action="criandoContato" method="POST">

            {{ csrf_field() }}
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
                        <input type="text" name="estado" id="uf" class="form-control" placeholder="Estado">
                        
                    </div>
    
            </div>
            <br><br>
            
                    <button type="submit" class="btn btn-dark btn-lg btn-block">Salvar</button>
           
            
         </form>

         <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
               // $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                      //  $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                               // $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    


    </script>

@endsection