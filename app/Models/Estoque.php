<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Estoque extends Model
{
    use HasFactory;

    protected $table = 'estoque';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome_produto',
        'quantidade'
    ];

    


    
}
