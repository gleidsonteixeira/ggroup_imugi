<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'horario_id';
    protected $table = "horarios";
    protected $fillable = [
        'horario_id',
        'horario_inicio',
        'horario_fim',
        'horario_dias'
    ];

    public function turmas(){
        return $this->belongsTo("App\Turma", "horario_id", "horario_id");
    }

}
