<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginCtr extends Controller
{
    public function loginView()  {
        return view("loging/login");
    }
}
