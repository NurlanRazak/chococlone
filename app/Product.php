<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "deals";
    protected $primaryKey = "id_deals";

    protected $fillable = [
    	'name', 'description', 'price'
    ];
    protected $dates = [
    	'created_at', 'updated_at'
    ];
}
