<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteCNPJ extends Model
{
    use HasFactory;

    protected $table = 'cliente_cnpj';
    protected $fillable = [
        'id',
        'empresa',
        'cnpj'
    ];
    public $timestamps = true;
}
