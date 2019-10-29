<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contato;
use App\usuario;
use App\Auth;

class contatoController extends Controller
{



    // função login -------------------------

    public function login(){

        return view('login');
    }

    //---------------------------------------

    // validando login ----------------------

    public function validandoLogin (Request $request){



    }

    //---------------------------------------

    // função exibir pagina de cadastro -----
    public function cadastroUsuario(){


        return view('cadastro');
    }
    //---------------------------------------

    // função para validar cadastro -----
    public function validarCadastro( Request $request){

        return "cadastrado";
       // return view('cadastro');
    }
    //---------------------------------------


}
