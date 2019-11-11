<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contato;
use App\usuario;


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


        // criando validação do formulario de cadastro 
        $this->validate($request,[

            'nome'=>'required',
            'email'=>'required',
            'senha'=>'required'

        ]);


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

    // função tela de contato ---------------
    public function contato(){

        
        return view('contato');
    }
    //---------------------------------------
    // função criando novo contato ----------
    public function criandoContato(Request $request){

        //criando a validação dos campos 
        $this->validate($request,[
            'nome'=>'required',
            'email'=>'required',
            'telefone'=>'required',
            'celular'=>'required',
            'cep'=>'required',
            'rua'=>'required',
            'cidade'=>'required',
            'estado'=>'required'

        ]);

        // pegando os dados do formulario e salvando no banco    
        $contato = new contato;
        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->telefone = $request->telefone;
        $contato->celular = $request->celular;
        $contato->cep = $request->cep;
        $contato->rua = $request->rua;
        $contato->cidade = $request->cidade;
        $contato->estado = $request->estado;
        $contato->save();
        return view('contato');
    }
    //---------------------------------------

    //----- Metodo para editar --------------

    public function editarContado($id){

        $contato = contato::find($id);

        return view('editarContato',compact('contato'));

    }

    //---------------------------------------

    //- Metodo depois de editado salva update

    public function updateContato(Request $request , $id){

        $contato = contato::find($id); //primiero procura o id do contato

        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->telefone = $request->telefone;
        $contato->celular = $request->celular;
        $contato->cep = $request->cep;
        $contato->rua = $request->rua;
        $contato->cidade = $request->cidade;
        $contato->estado = $request->estado;
        $contato->save();              // segundo pega os dados do forme e salva no banco 

        // lembrando que quando for mostra o camnho no form tem que acrecentar 
        // o id mais um a / antes para nao concatenar exemplo "/update/{{$contato->id}}"

        return redirect('home'); // redirecinando para pagina home
       
        
       //return dd($contato);
    }


    //---------------------------------------
    
    //---- metodo para excluir registro -----
    public function excluirContato($id){

         
           contato::destroy($id);
           return redirect('home'); //redirecinando para pagina home
    }

    //---------------------------------------
    

    //---- metodo para mostra usuario -------

    public function mostraUsuario(){

     $usuario = usuario::find(1);
     $contato = $usuario->contato;
    
 

     return $usuario.'<br>'. $contato;
    //dd($usuario , $contato);

    }

    //---------------------------------------
}
