<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class CemiterioModel extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'cemiterio';
    protected $fillable = [
        'id','login','title','banco','menu','iframe','token','created_at','update_at'
    ];
    public $timestamp = true;
}
