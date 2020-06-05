<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class Admin extends Authenticable
{
    use Notifiable;

    protected $fillable = [
    	'name','username','password','phone'
    ];

    protected $hidden = [
    	'password', 'remember_token'
    ];
}
