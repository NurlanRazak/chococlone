<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deals extends Model
{
     public $table='deals';
    public $primaryKey='id_deals';
    public $timestamps =false;
    
    public function images(){
    return $this->hasOne('App\images','id_deals');	
    }
    

    public function comments()
    {
    	return $this->hasMany('App\Comment','prod_id');
    }

}
