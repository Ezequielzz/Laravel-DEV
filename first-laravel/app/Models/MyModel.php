<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'descricao',
        'valor'
    ];
}
