<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    //

    //protected  $PrimaryKey = "id_usuario";

    public function contatos(){
        return $this->belongsToMany('App\usuario','usuario_contatos','usuario_id','contato_id');
    }
}
