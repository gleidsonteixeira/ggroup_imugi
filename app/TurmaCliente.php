<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurmaCliente extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'turma_cliente_id';
    protected $table = "turmas_clientes";
    protected $fillable = [
        'turma_cliente_id',
        'turma_cliente_data',
        'turma_id',
        'cliente_id'
    ];

    public function cliente(){
        return $this->hasOne("App\Cliente", "cliente_id", "cliente_id");
    }

    public function turma(){
        return $this->hasOne("App\Turma", "turma_id", "turma_id");
    }

}
