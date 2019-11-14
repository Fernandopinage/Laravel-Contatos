<div class="row" style="margin:20px;padding:10px; background-color:#708090; color:white;">

    <div style="padding: 10px 0px">

        @if (session('email')==!0)
        <a href="home" class="btn btn-dark"> 
            Home 
        </a>
        <a href="cadastroUsuario" class="btn btn-dark"> 
            New Usuário 
        </a>   
        <a href="contato" class="btn btn-dark">
            Add Contatos 
        </a> 
            
        @else
        
        <a href="cadastroUsuario" class="btn btn-dark"> 
            New Usuário 
        </a>
           

        @endif
        
    </div>
    <div style="position: absolute; top: 40px; right: 30px;; background-color:#708090; color:white;">
        {{session('email')}}
        
    <a href="logaut/{{session('email')}}" class="btn btn-dark">
            logaut 
        </a>
    </div>
</div>
