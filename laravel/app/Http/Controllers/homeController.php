<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\contato;
use App\usuario_contato;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    //

    public function home(){

    $pessoa = usuario::where('email',session('email'))->value('id');    

        
    
    $usuario = usuario::find($pessoa);
    $contato = $usuario->contato;
    $dados = $contato;
        
            return view('home',compact('dados'));     
      
    } 
}
