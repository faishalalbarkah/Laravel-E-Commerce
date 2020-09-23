<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan_Detail extends Model
{
    use HasFactory;

    public function barang()
    {
        return $this->belongsTo('App\Barang');
    }

    public function pesanan()
    {
        return $this->belongsTo('App\Menu\Pesanan');
    }
}
