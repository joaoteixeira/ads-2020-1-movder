<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    protected $table = 'movimentos';
    protected $primaryKey = 'id';
    protected $fillable = [
                
        'data',
        'fiscais',
        'empresa',
        'hora_chegada',
        'hora_saida',
        'quant_passageiros'
        
        
    ];

    public function vistorias(){
        return $this->belongsMany('App\Vistoria');
    }

    public function itinerarios(){
        return $this->belongsMany('App\Itinerario');
    }
}
