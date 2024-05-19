<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginFormController extends Controller
{
    public function __invoke()
    {
        return view('login');
    }
}
