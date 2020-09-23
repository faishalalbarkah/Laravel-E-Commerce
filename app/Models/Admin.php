<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $timestamps = false;
    protected $table = "admin";

    protected $fillable = ['name','password'];
}
