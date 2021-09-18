<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ContabilModel extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    protected $table = 'contabil';
    protected $fillable = [
        'id','login','menu','title','banco','iframe','token','created_at','updated_at'
    ];
    public $timestamp = true;
}
