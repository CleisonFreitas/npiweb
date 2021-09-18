<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class TeleModel extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'telemarketing';
    protected $fillable = [
        'id','login','menu','title','banco','iframe','token','created_at','updated_at'
    ];
    public $timestamp = true;
}
