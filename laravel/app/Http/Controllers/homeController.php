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

        // pegando o ID do usuario atual
        $usuario = usuario::where('email',session('email'))->value('id');
        // $dados = usuario::find($usuario);
        // pegando o id da tabela entre relação
        $usuario_contato = usuario_contato::where('usuario_id',$usuario)->value('usuario_id');
        
        if($usuario == $usuario_contato){
            
            if($usuario_contato){
                
            }

        }
            $dados =DB::table('usuario_contatos')
                        ->join('usuarios','id', '=' ,'usuarios.id')
                        ->join('contatos','contato_id', '=' ,'contatos.id')
                        ->whereColumn('usuarios.id','usuario_contatos.usuario_id')
                        ->get();
                        
           
                        

            echo $dados;
            return view('home',compact('dados'));

            /*
            $contato = new contato;

            $dados =  $contato->all();

            return view('home',compact('dados'));
        
        echo $usuario."<br>".$usuario_contato;
            */
    } 
}
