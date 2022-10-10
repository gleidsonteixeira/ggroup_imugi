<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'email',
        'matricula',
        'telefone',
        'password',
        'nivel',
        'status',
        'cargo_id',
        'unidade_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cargo(){
        return $this->hasOne('App\Models\Admin\Cargo', 'cargo_id', 'cargo_id');
    }

    public function turma(){
        return $this->hasOne('App\O_Turma','matricula','matricula');
    }

    public function material(){
        return $this->hasOne('App\O_Codigo','matricula','matricula');
    }

    public function notas(){
        return $this->hasMany('App\Nota','matricula','matricula');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

}

