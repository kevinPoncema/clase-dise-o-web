<?php

namespace App\Http\Controllers\registro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function registerView()  {
        return view("loging/register");
    }
}
