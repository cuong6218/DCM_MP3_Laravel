<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Services\RegisterService;
use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    protected $registerService;
    public function __construct(RegisterService $registerService)
    {
        $this->registerService= $registerService;
    }
    public function Register(RegisterRequest $request)
    {
        if (Customer::where('email', '=',$request->input('email'))->exists()) {
            Session::flash('error','email đã tồn tại');
            return redirect()->route('form.register');
        }
        toastr()->success('Đăng kí thành công');
//        Session::flash('success','Đăng kí thành công');
        return redirect()->route('form.register');

    }
}
