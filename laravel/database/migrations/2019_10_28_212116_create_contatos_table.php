<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->increments('id_contato');
            $table->string('nome');
            $table->integer('telefone');
            $table->integer('celular');
            $table->string('email');
            $table->string('rua');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}
