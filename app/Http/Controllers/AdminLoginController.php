<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;
class AdminLoginController extends Controller

{
    public function getcheck()
    {
        return view('auth.login');
    }


    public function check(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'name' =>DB::table('users')->where('email',"=",$request->email)->select('name')->get()->get(0)->name
        ];

        if (Auth::attempt($data)) {
            return view('welcome');
        } else {
            return view('auth.login');
        }
    }

}
