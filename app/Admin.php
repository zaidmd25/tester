<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Model
{
    //
    use notificable;

    protected $fillable =[
    	'name','email','password',
    ];

    protected $hidden = [
    	'password','remember_token',
    ];
}
