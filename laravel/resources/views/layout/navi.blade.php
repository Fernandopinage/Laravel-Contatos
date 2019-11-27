<div class="row" style="margin:20px;padding:10px; background-color:#708090; color:white;">

    <div style="padding: 10px 0px">

        @if (session('email')==!0)
        <a href="/home" class="btn btn-dark"> 
            <img src='{{'/icons/baseline_house_white_18dp.png'}}'> Home 
        </a>
        <a href="/cadastroUsuario" class="btn btn-dark"> 
            <img src='{{'/icons/baseline_person_add_white_18dp.png'}}'> New Usuário 
        </a>   
        <a href="/contato" class="btn btn-dark">
            <img src='{{'/icons/baseline_group_add_white_18dp.png'}}'> Add Contatos 
        </a> 
            
        @else
        
        <a href="/cadastroUsuario" class="btn btn-dark"> 
            <img src='{{'/icons/baseline_person_add_white_18dp.png'}}'> New Usuário 
        </a>
           
        
        @endif
        
    </div>

    @if (session('email')==!0)
    <div style="position: absolute; top: 40px; right: 30px;; background-color:#708090; color:white;">
        <img src='{{'/icons/baseline_perm_identity_white_18dp.png'}}'>  {{session('email')}}
        
    <a href="logaut/{{session('email')}}" class="btn btn-dark">
        <img src='{{'/icons/baseline_meeting_room_white_18dp.png'}}'> logaut 
        </a>
    </div>
    @endif
    
</div>
