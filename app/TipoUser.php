<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TipoUser extends Model
{

    use Notifiable;

    protected $table = 'tipo_user';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable = [
        'id',
        'descricao'
    ];

    public function users() 
    {
        return $this->belongsToMany(User::class, 'id');
    }
}
