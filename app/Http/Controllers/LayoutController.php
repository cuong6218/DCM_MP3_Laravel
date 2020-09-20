<?php

namespace App\Http\Controllers;

use App\Http\Middleware\checkLogin;
use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LayoutController extends Controller
{
    protected $userService;
    function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

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
        if(!auth::attempt($data)){
            return redirect()->route('layout.showLogin');
        }
        return redirect()->route('layout.index');
    }
    function logout(){
//        Session::remove('isAuth');
        Auth::logout();
        return redirect()->route('layout.showLogin');
    }
    function showRegister(){
        return view('admin.layout.register');
    }
    function register(Request $request){
        $this->userService->store($request);
        return redirect()->route('layout.showLogin');
    }
}
