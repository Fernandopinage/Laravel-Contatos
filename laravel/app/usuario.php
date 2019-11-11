<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //

    //protected  $PrimaryKey = "id_usuario";

    public function contato(){
        return $this->belongsToMany('App\usuario','usuario_contatos');
    }
}
