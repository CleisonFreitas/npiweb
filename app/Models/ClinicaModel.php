<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ClinicaModel extends Model 
{
   

    protected $table = 'clinica';
    protected $fillable = [
        'id','login','menu','title','banco','iframe','token','created_at','updated_at'
    ];
    public $timestamp = true;
}
