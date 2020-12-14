<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// khai báo sử dụng loginRequest
use App\Http\Requests\LoginRequest;
use Auth;
use App\User;
class AdminLoginController extends Controller
{

    public function getLogin()
    {
        if (Auth::check()) {
            // nếu đăng nhập thàng công thì 
            return redirect('welcome');
        } else {
            return view('auth.login');
        }
        

    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function postLogin(LoginRequest $request)
    {
        $login = [
            'Name' => $request->txtEmail,
            'Password' => $request->txtPassword,
            'Level' => 1,
            'Status' => 1
        ];
        if (Auth::attempt($login)) {
            return redirect('welcome');
        } else {
            return redirect()->back()->with('Status', 'Email hoặc Password không chính xác');
        }
    }

    /**
     * action admincp/logout
     * @return RedirectResponse
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('login.get');
    }

}