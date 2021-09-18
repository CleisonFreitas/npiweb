<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class FunerarioModel extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'funerario';
    protected $fillable = [
        'id','login','modulo','menu','banco','title','token','iframe','created_at','updated_at'
    ];
    public $timestamp = true;
}
