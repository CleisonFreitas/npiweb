<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ContatoModel extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $table = 'requests';
    public $timestamps = true;
    protected $fillable = ['sistema','title','nome','email','status','login','telefone','whatsapp','descricao'];
}
