<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "cliente";
    public $timestamps = false;

    public static function obtiene_clientes(){
    	 
    	return static::select('*')
    	
        ->paginate(10);
    
    }
}
