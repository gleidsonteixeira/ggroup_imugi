<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'resposta_id';
    protected $table = "respostas";
    protected $fillable = [
        'resposta_id',
        'resposta_respostas',
        'atividade_id',
        'unidade_id',
        'resposta_data',
        'resposta_hora',
        'usuario_id'
    ];
}
