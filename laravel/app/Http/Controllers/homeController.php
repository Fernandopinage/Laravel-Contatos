<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\contato;
use App\usuario_contato;

class homeController extends Controller
{
    //

    public function home(){

        // pegando o ID do usuario atual
        $usuario = usuario::where('email',session('email'))->value('id');
        // $dados = usuario::find($usuario);
        // pegando o id da tabela entre relação
        $usuario_contato = usuario_contato::where('usuario_id',$usuario)->value('usuario_id');
        
        if($usuario == $usuario_contato){
            


        }

        
        $contato = new contato;

        $dados =  $contato->all();

        return view('home',compact('dados'));
        
    } 
}
