<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $hidden = ['senha'];
    public $timestamps=false;
    protected $fillable = [
        'id',
        'matricula',
        'nome',
        'email',
        'senha',
        'tipo_user'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    /**
     * User has one Professor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function tipos_users() 
    {
        return $this->hasOne(TipoUser::class, 'tipo_user');
    }

    public function solicitacoes()
    {
        return $this->belongsToMany(Solicitacao::class, 'id');
    }
}