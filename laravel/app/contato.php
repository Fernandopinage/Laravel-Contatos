<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    //

    //protected $PrimaryKey ='id_contato';

    public function usuario(){
        return $this->hasMany('App\contato','usuario_contatos','contato_id','usuario_id');
    }
}
