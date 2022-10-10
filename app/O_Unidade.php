<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class O_Unidade extends Model
{
    protected $primaryKey = 'idunidades';
    protected $table = "unidades";
    protected $fillable = [
        'matricula',
        'cod_unidade',
        'unidade',
        'tipo_unidade'
    ];
}
