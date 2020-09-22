<?php

namespace App\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use App\Http\Requests\CustomerRequest;
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
//        return redirect()->route('layout.index');
        if($request->email == 'admin@gmail.com' && $request->password == '123456')
        {
            Session::put('isLogin', true);
            toastr()->success('Login success!', 'Success!');
            return redirect()->route('layout.index');
        } else {
            toastr()->error('Wrong email or password', 'Error!');
            return redirect()->route('layout.showRegister');
        }
    }
    function logout(){
//        Auth::logout();
        Session::remove('isLogin');
        return redirect()->route('layout.showLogin');
    }
    function showRegister(){
        return view('admin.layout.register');
    }
    function register(CustomerRequest $request){
        $this->userService->store($request);
        return redirect()->route('layout.showLogin');
    }
}
