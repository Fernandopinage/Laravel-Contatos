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

    // função para pegar o ID do usuario conectado    
    $pessoa = usuario::where('email',session('email'))->value('id');    

        
    //função para mostra na home uma lista de contatos 
    $usuario = usuario::find($pessoa);
    $contato = $usuario->contato;
    $dados = $contato;
        
    return view('home',compact('dados'));     
      
    } 
}
