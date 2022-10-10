<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{

    public $timestamps = false;
    protected $primaryKey = 'id_notas';
    protected $table = "notas";
    protected $fillable = [
        'id_notas',
        'etapa',
        'avaliacao',
        'notas',
        'matricula',
    ];

}

