<?php

namespace App\Http\Controllers;

use App\Http\Middleware\checkLogin;
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
    function login(CustomerRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(!auth::attempt($data)){
            toastr()->error('Wrong email or password', 'Error!');
            return back();
        }
        toastr()->success('Login Success', 'Success!');
        return redirect()->route('layout.index');
    }
    function logout(){
        Auth::logout();
        return redirect()->route('layout.showLogin');
    }
    function showRegister(){
        return view('admin.layout.register');
    }
    function register(CustomerRequest $request){
        $this->userService->store($request);
        toastr()->success('Register Success', 'Success!');
        return redirect()->route('layout.showLogin');
    }
}
