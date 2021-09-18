<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ClinicaModel extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'clinica';
    protected $fillable = [
        'id','login','menu','title','banco','iframe','token','created_at','updated_at'
    ];
    public $timestamp = true;
}
