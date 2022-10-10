<?php

namespace App\Models\Ranking;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{

    public $timestamps = false;
    protected $primaryKey = 'funcionario_id';
    protected $table = "imugi_ranking_funcionario";
    protected $fillable = [
        'funcionario_id',
        'funcionario_nome',
        'funcionario_telefone',
        'funcionario_status',
        'funcionario_data',
        'funcionario_cargo',
        'funcionario_status',
        'unidade_id',
    ];

    public function dados(){
        return $this->hasMany("App\Models\Ranking\Dado", "funcionario_id", "funcionario_id");
    }

    public function unidade(){
        return $this->hasOne("App\Models\Admin\Unidade", "unidade_id", "unidade_id");
    }
    
}
