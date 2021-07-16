<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndiModel extends Model
{
    use HasFactory;

    protected $table = 'indices';
    protected $fillable = ['id','nome','form_id','categoria','nivel','ordem','operador'];
    public $timestamps = true;
}
