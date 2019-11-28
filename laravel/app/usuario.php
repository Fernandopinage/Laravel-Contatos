<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //

    //protected  $PrimaryKey = "id_usuario";
    protected $fillable = [

        'nome',
        'email',
        'senha'

    ];


    public function contato(){
        return $this->belongsToMany('App\contato','usuario_contatos','usuario_id','contato_id');
    }
}
