<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ContatoModel extends Model 
{
    

    protected $table = 'requests';
    public $timestamps = true;
    protected $fillable = ['sistema','title','nome','email','status','login','telefone','whatsapp','descricao','created_at','updated_at'];
}
