<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contato;
use App\usuario;
use Illuminate\Support\Facades\Auth;

class contatoController extends Controller
{



    // função login -------------------------

    public function login(){

        return view('login');
    }

    //---------------------------------------

    // validando login ----------------------

    public function validandoLogin (Request $request){

        $dados = $request->only('nome','email', 'senha');

        if (Auth::attempt($dados)) {
            // Authentication passed...
            return redirect()->intended('home');
        }

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

        $usuario->save();

        //return dd($usuario);
       return redirect('/');
    }
    //---------------------------------------


}
