<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{

	use Notifiable;

    protected $table = 'solicitacoes';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable = [
        'id',
        'data_inicio',
        'data_fim',
        'local',
        'qtdd_passageiros',
        'user_requerente',
        'veiculo',
        'motorista',
        'situacao'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    /**
     * User has one Professor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne(User::class, 'user_requerente');
    }

    public function veiculo()
    {
        return $this->hasOne(Veiculo::class, 'veiculo');
    }
    
    public function motorista()
    {
        return $this->hasOne(User::class, 'motorista');
    }
}