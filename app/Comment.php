<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";
    protected $primaryKey = "id";

    protected $fillable = [
    	'prod_id', 
    	'user_id',
        'email',
    	'status',
    	'comment'
    ];
    protected $dates = [
    	'created_at',
    	'updated_at'
    ];
}
