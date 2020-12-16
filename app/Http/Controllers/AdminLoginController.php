<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminLoginController extends Controller
{
    public function getcheck()
    {
        return view('auth.login');
    }


    public function check(Request $request)
    {
        $data = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return view('welcome');
        } else {
            return view('auth.login');
        }
    }

}
