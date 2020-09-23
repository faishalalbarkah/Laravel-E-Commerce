<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public $timestamps = false;
    protected $table = "products_table";

    protected $fillable = ['name','harga','is_ready','description','jenis','gambar','menu_id'];

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }
}
