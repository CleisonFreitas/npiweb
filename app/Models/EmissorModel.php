<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmissorModel extends Model
{
    protected $table = 'emissor';
    protected $fillable = [
        'id','login','menu','title','iframe','token','created_at','updated_at'
    ];
    public $timestamp = true;
}
