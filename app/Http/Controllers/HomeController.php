<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\M_Barang;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $barang = DB::table('products_table')->get();
        return view('/index', ['barang' => $barang]);
    }
}
