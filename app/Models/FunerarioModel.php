<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class FunerarioModel extends Model 
{
    protected $table = 'funerario';
    protected $fillable = [
        'id','login','modulo','menu','banco','title','token','iframe','created_at','updated_at'
    ];
    public $timestamp = true;
}
