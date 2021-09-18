<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Sistemas extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    protected $table = 'sistemas';
    public $timestamp = true;
}
