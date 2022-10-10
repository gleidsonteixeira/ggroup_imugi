<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'funcionario_id';
    protected $table = "gracom_admin_funcionario";
    protected $fillable = [
        'funcionario_id',
        'funcionario_nome',
        'funcionario_email',
        'funcionario_senha',
        'funcionario_telefone',
        'funcionario_status',
        'funcionario_data',
        'funcionario_matricula',
        'unidade_id',
        'cargo_id',
    ];

    public function alunos(){
        return $this->hasOne("App\Models\Ranking\Unidade", "unidade_id", "unidade_id");
    }

}
