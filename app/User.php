<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";
        protected $primaryKey = "id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     protected $casts = [
        'id'             => 'integer',
        'email'          => 'string',
        'password'       => 'string',
        'remember_token' => 'string',
        'created_at'     => 'datetime',
        'updated_at'     => 'datetime',
        'isAdmin'        => 'boolean'
    ];

     protected $dates = [
        'created_at',
        'updated_at'
    ];

}