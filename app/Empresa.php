<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'empresa_id';
    protected $table = "empresas";
    protected $fillable = [
        'empresa_id',
        'empresa_nome',
        'empresa_status',
    ];

    public function unidade(){
        return $this->belongsTo("App\Unidade", "empresa_id", "empresa_id");
    }
}
