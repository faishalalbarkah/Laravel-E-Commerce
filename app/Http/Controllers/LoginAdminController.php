<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginAdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('/admin/loginadmin');
    }

    public function Masuk(Request $request){
        $useradmin = DB::table('admin')->where('name', $request->name)->first();
        if($useradmin->password == $request->password){
            Session::put('id', $user->id);
            $request->session()->get('id');
            return redirect('/Admin/dashboardadmin');
        }else {
            echo "name atau password anda salah";
        }
    }
}
