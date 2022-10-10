<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'cargo_id';
    protected $table = "imugi_cargos";
    protected $fillable = [
        'cargo_id',
        'cargo_nome',
    ];

    public function usuario(){
        return $this->hasOne("App\User", "cargo_id", "cargo_id");
    }

}

