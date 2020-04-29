<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vistoria extends Model
{
    protected $table = 'vistorias';
    protected $primaryKey = 'id';
    protected $fillable = [
        
        'prefixo', 
        'placa', 
        'empresa',
        'vencimento'
        
    ];
    public function movimentos(){
        return $this->belongsMany('App\Movimento');
    }
    
    
}
