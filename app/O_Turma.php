<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class O_Turma extends Model
{

    protected $primaryKey = 'id_turma';
    protected $table = "turmas";
    protected $fillable = [
        'matricula',
        'curso',
        'cod_unidade',
        'turma',
        'nome',
        'unidade',
    ];

    public function tipo(){
        return $this->hasOne('App\O_Unidade', 'cod_unidade', 'cod_unidade');
    }
}
