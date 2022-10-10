<?php

namespace App\Models\Ranking;

use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{

    public $timestamps = false;
    protected $primaryKey = 'dado_id';
    protected $table = "imugi_ranking_dado";
    protected $fillable = [
        'dado_id',
        'dado_visitas',
        'dado_mrt',
        'dado_elleve',
        'dado_data',
        'funcionario_id',
    ];

    public function funcionario(){
        return $this->hasOne("App\Models\Ranking\Funcionario", "funcionario_id", "funcionario_id");
    }
    
}
