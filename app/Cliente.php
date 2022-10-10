<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'cliente_id';
    protected $table = "clientes";
    protected $fillable = [
        'cliente_id',
        'cliente_nome',
        'cliente_email',
        'cliente_senha',
        'cliente_descricao',
        'cliente_foto',
        'cliente_capa',
        'cliente_matricula',
        'cliente_primeiro_acesso',
        'cliente_status',
        'cliente_status_financeiro',
        'unidade_id'
    ];

    public function unidade(){
        return $this->hasOne("App\Unidade", "unidade_id", "unidade_id");
    }
    
    // public function turmas(){
    //     return $this->belongsToMany("App\Turma", "turma_cliente_id", "cliente_id", "turma_id");
    // }
}
