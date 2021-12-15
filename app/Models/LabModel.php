<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabModel extends Model
{
    use HasFactory;

    public static function aula($id){
        $select_content = LabModel::orderBy('ordem')->where([
            ['form_id',$id],
            ['nivel','N'],
            ])->get();
            return $select_content;
    }

    protected $table = 'laboratorio';
    protected $fillable = ['id',
    'descricao',
    'form_id',
    'tipo',
    'iframe',
    'categoria',
    'nivel',
    'etiqueta',
    'ordem',
    'operador'];
    public $timestamps = true;
}
