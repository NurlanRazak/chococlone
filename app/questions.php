<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    public $table='tables';
    public $timestamps =false;
    protected $fillable = ['title','description'];
}
