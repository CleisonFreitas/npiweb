<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class EmissorModel extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'emissor';
    protected $fillable = [
        'id','login','menu','banco','title','iframe','token','created_at','updated_at'
    ];
    public $timestamp = true;
}
