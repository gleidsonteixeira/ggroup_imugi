<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'curso_id';
    protected $table = "cursos";
    protected $fillable = [
        'curso_id',
        'curso_nome',
        'curso_descricao',
        'curso_descricao_curta',
        'curso_valor',
        'curso_thumb',
        'curso_duracao',
        'curso_status',
        'unidade_id'
    ];

    public function unidade(){
        return $this->hasOne("App\Unidade", "unidade_id", "unidade_id");
    }

    public function turma(){
        return $this->belongsTo("App\Turma", "curso_id", "curso_id");
    }
}
