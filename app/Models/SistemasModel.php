<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class SistemasModel extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'sistemas';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    public $timestamps = true;

    protected $casts = [
        'id' => 'int',
        'descricao' => 'string',
        'modulo' => 'string',
        'menu' => 'string',
        'tipo' => 'string',
        'token' => 'string',
    ];

    protected $fillable = [
        'id',
        'descricao',
        'modulo',
        'menu',
        'tipo',
        'token',
    ];

}
