<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    function indexRegister(){
        return view('template.login.register');
    }

    function indexLogin(){
        return view('template.login.login');
    }

    function storeRegister(UserRequest $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password1);
        $user->save();

        $data = [
            'status' => 'success',
            'message' => 'Register for a successful account'
        ];

        return response()->json($data);
    }

    function storeLogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($data)) {
            toastr()->error('Please try again', 'Error!');
            return back();
        }
        toastr()->success('Login Success', 'Success!');
        return redirect()->route('home2.index');



    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home2.index');
    }
}
