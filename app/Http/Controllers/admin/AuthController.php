<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.index');
    }

    public function auth(Request $req)
    {
        if (!auth()->attempt($req->only('email', 'password'))) {
            return redirect()->route('login')->with('message', 'Данные не совпадают проверьте поле Емейл или Пароль');
        }
        return redirect('/admin');
    }
}
