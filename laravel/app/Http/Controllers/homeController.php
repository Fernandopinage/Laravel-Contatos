<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usuario;
use App\contato;

class homeController extends Controller
{
    //

    public function home(){


        $contato = new contato;

        $dados =  $contato->all();

        return view('home',compact('dados'));
    } 
}
