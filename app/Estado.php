<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_estados';
    protected $table = "imugi_estados";
    protected $fillable = [
        'id_estado',
        'estado_nome',
        'estado_sigla'
    ];

    public function quantidade(){
        return $this->hasMany("App\Lead", "estado", "id_estados");
    }
}
