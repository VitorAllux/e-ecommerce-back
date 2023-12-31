<?php

// Produto Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'valor',
        'quantidade'
    ];

    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }
}
