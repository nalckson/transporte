<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use Notifiable;

    protected $table = 'veiculos';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable = [
        'id',
        'placa',
        'modelo',
        'capacidade',
        'status'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function Solicitacoes()
    {
        return $this->belongsToMany(Solicitacao::class, 'id');
    }
}