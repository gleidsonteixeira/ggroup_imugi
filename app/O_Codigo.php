<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class O_Codigo extends Model
{
    protected $primaryKey = 'idCod';
    protected $table = "codigo";
    protected $fillable = [
       'nivel',
       'matricula'
    ];
}
