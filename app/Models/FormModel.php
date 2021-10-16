<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormModel extends Model 
{
    use HasFactory;

    protected $table = 'formacoes';
    protected $fillable = ['id','descricao','categoria','nivel','ordem','operador'];
    public $timestamps = true;
}
