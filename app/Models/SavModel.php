<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavModel extends Model 
{
   

    protected $table = 'veicular';
    protected $fillable = [
        'id','login','menu','title','banco','iframe','token','created_at','updated_at'
    ];
    public $timestamps = true;
}
