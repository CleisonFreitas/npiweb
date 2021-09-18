<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class MobileModel extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    protected $table = 'mobile';
    protected $fillable = [
        'id','login','menu','modulo','title','banco','iframe','token','created_at','updated_at'
    ];
    public $timestamp = true;
}
