<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\M_Barang;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $barang = DB::table('products_table')->get();
        return view('/Admin/dashboardadmin', ['barang' => $barang]);
    }

    public function store(){
        return view('/Admin/addproducts');
    }

    public function order(){
        return view('/Admin/order');
    }
}
