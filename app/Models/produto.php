<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $table = 'produtos';
    protected $fillable = [ 
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'categoria',
        'imagem'
    ];
    use HasFactory;
}
