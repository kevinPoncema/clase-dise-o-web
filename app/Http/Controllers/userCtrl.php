<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userCtrl extends Controller
{
    //
    public function registerView()  {
        return view("loging/register");
    }
}
