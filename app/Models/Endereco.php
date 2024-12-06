<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //
    protected $fillable = [
        'usuario_id',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'cep',
        'estado',
    ];

}
