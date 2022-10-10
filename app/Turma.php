<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'turma_id';
    protected $table = "turmas";
    protected $fillable = [
        'turma_id',
        'turma_nome',
        'turma_descricao',
        'turma_alunos',
        'turma_foto',
        'turma_capa',
        'turma_periodo',
        'turma_data',
        'turma_data_inicio',
        'turma_data_fim',
        'turma_status',
        'curso_id',
        'horario_id',
        'professor_id',
        'unidade_id'
    ];

    public function curso(){
        return $this->hasOne("App\Curso", "curso_id", "curso_id");
    }

    public function professor(){
        return $this->hasOne("App\User", "id", "professor_id");
    }

    public function unidade(){
        return $this->hasOne("App\Unidade", "unidade_id", "unidade_id");
    }
    
    public function horario(){
        return $this->hasOne("App\Horario", "horario_id", "horario_id");
    }

    // public function clientes(){
    //     return $this->belongsToMany("App\Cliente", "turma_cliente_id", "turma_id", "cliente_id");
    // }
}
