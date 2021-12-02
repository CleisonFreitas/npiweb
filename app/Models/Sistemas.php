<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sistemas extends Model
{
    use \OwenIt\Auditing\Auditable;
    
    protected $table = 'sistemas';
    public $timestamp = true;
}
