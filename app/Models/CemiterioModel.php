<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CemiterioModel extends Model 
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'cemiterio';
    protected $fillable = [
        'id','login','title','banco','menu','iframe','token','created_at','update_at'
    ];
    public $timestamp = true;
}
