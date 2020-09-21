<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class checkLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
//        if (Session::get('isLogin') == false)
//        {
//            return $next($request);
//        }
        return redirect()->route('layout.showLogin');
//        return redirect()->route('layout.showLogin');

    }
}
