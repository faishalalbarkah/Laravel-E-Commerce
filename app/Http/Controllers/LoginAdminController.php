<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Foundation\Auth\Admin;
// use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginAdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/admin/loginadmin');
    }

    public function Login(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);
        $name = $request->name;
        $password = $request->password;

        $data = DB::table('Admin')->where('name', $request->name)->first();
        if ($data) {
            if (
                Hash::check($password, $data->password)
            ) {
                Session::put('name', $data->name);
                Session::put('password', $data->password);
                // Session::put('login',TRUE);
                return redirect('/admin/dashboard');
            } else {
                return redirect('/admin')->with('user atau password anda salah!!');

            }
        }
    }
}
