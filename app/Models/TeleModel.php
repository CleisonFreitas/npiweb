<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeleModel extends Model
{
    protected $table = 'telemarketing';
    protected $fillable = [
        'id','login','menu','title','iframe','token','created_at','updated_at'
    ];
    public $timestamp = true;
}
