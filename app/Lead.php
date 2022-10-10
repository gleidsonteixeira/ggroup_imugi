<?php



namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model{

    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = "imugi_contato";
    protected $fillable = [
        'id',
        'nome',
        'email',
        'telefone',
        'como_conheceu',
        'cidade',
        'status',
        'data_cadastro',
        'data_update'
    ];

    public function estado(){
        return $this->hasOne("App\Estado", "id_estados", "estado");
    }

    public function unidade(){
        return $this->hasOne("App\UnidadesImugi", "unidade_id", "cidade");
    }

}

