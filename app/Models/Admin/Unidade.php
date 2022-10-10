<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'unidade_id';
    protected $table = "Imugi_unidades";
    protected $fillable = [
        'unidade_id',
        'unidade_nome',
        'unidade_status',
        'unidade_sophia',
        'unidade_endereco',
        'unidade_telefone',
        'unidade_estado'
    ];

    public function alunos(){
        return $this->hasMany("App\Lead", "cidade", "unidade_id");
    }

    public function funcionarios(){
        return $this->hasMany("App\Models\Ranking\Funcionario", "unidade_id", "unidade_id");
    }

}
