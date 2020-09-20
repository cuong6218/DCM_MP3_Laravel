<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LayoutController extends Controller
{
    function index()
    {
        return view('admin.layout.master');
    }
    function showLogin()
    {
        return view('admin.layout.login');
    }
    function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(!Auth::attempt($data)){
            return redirect()->route('layout.showLogin');
        }
        return redirect()->route('layout.index');
    }
    function logout(){
        Session::remove('isAuth');
        return redirect()->route('layout.showLogin');
    }
    function showRegister(){
        return view('admin.layout.register');
    }
}
