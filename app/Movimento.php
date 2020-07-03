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
        return $this->belongsToMany('App\Vistoria', 'movimentos_vistorias');
    }

    public function itinerario(){
        return $this->belongsTo('App\Itinerario');
    }
}
