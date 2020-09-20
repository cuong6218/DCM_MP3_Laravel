<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function indexProfile(){
        return view('template.demo.profile');
    }
}
