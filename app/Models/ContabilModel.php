<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContabilModel extends Model
{
    protected $table = 'contabil';
    protected $fillable = [
        'id','login','menu','title','banco','iframe','token','created_at','updated_at'
    ];
    public $timestamp = true;
}
