<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contato;
use App\User;

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
        $usuario = new user;

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;

        $usuario->create();

        //return dd($usuario);
       return redirect('/');
    }
    //---------------------------------------


}
