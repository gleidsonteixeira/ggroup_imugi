<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'unidade_id';
    protected $table = "unidades";
    protected $fillable = [
        'unidade_id',
        'unidade_nome',
        'unidade_codigo',
        'unidade_estado',
        'unidade_data',
        'unidade_franquia',
        'unidade_status',
        'empresa_id',
    ];

    public function empresa(){
        return $this->hasOne("App\Empresa", "empresa_id", "empresa_id");
    }

    public function clientes(){
        return $this->belongsTo("App\Cliente", "unidade_id", "unidade_id");
    }

    public function colaboradores(){
        return $this->belongsTo("App\User", "unidade_id", "unidade_id");
    }

    public function cursos(){
        return $this->belongsTo("App\Curso", "unidade_id", "unidade_id");
    }

    public function turmas(){
        return $this->belongsTo("App\Turma", "unidade_id", "unidade_id");
    }

    public function funcionarios(){
        return $this->hasMany("App\Models\Ranking\Funcionario", "unidade_id", "unidade_id");
    }

}

