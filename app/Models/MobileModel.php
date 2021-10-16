<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class MobileModel extends Model 
{
    
    protected $table = 'mobile';
    protected $fillable = [
        'id','login','menu','modulo','title','banco','iframe','token','created_at','updated_at'
    ];
    public $timestamp = true;
}
