<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Briefing extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'data_criacao',
        'id_user_responsavel',
        'status'
    ];
}
