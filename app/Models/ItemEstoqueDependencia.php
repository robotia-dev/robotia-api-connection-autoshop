<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemEstoqueDependencia extends Model
{
    protected $table = 'item_estoque_dependencia';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'empresa', 'revenda','item_principal','item_dependente','relacao','dependencia_multipla','client'
    ];
}
