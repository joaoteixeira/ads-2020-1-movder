<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerario extends Model
{
    protected $table = 'itinerarios';
    protected $primaryKey = 'id';
    protected $fillable = [
        
        'linha', 
        'empresa',
        'itinerario'
        
    ];
    public function movimentos(){
        return $this->belongsMany('App\Movimento');
    }
}
