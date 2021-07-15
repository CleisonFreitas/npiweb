<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabModel extends Model
{
    use HasFactory;

    protected $table = 'laboratorio';
    protected $fillable = ['id','descricao','form_id','indi_id','cont_id','iframe','categoria','nivel','ordem','operador'];
    public $timestamps = true;
}
