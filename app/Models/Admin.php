<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\admin as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    public $timestamps = false;
    protected $table = "admin";

    protected $fillable = ['name','password'];

    
}
