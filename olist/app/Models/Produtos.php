<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'valor',
        'descricao',
        'tipo'
    ];

    public function getProdutos()
    {
        return $this->hasOne(Tipo_podutos::class, 'id', 'tipo');
    }
}
