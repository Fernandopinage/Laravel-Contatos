<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contato;
use App\usuario;
use Illuminate\Support\Facades\DB;

class contatoController extends Controller
{



    // função login -------------------------

    public function login(){

        return view('login');
    }

    //---------------------------------------

    // validando login ----------------------

    public function validandoLogin (Request $request){

        // criando regra de validação 

        $this->validate($request,[

            'email'=>'required',
            'senha'=>'required'

        ]);



        // funçao para pesquiser no banco se tem algum dado 
        $usuario = usuario::where('email',$request->email)->first();
        if($usuario){
        // caso se tiver o login vai pesquisar a senha no banco    
            if($usuario = usuario::where('senha',$request->senha)->first()){
                return redirect('home');
            }else{
                return redirect('/');
            }
        }
        return redirect('/');

    }

    //---------------------------------------

    // função exibir pagina de cadastro -----
    public function cadastroUsuario(){


        return view('cadastro');
    }
    //---------------------------------------

    // função para validar cadastro -----
    public function validarCadastro( Request $request){

        //criando o relacionamento com a tabela USuario        
        $usuario = new usuario;

        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;

        //dd($usuario);

        $usuario->save();

        
        return redirect('/');
    }
    //---------------------------------------


}
