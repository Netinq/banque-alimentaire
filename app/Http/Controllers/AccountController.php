<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function step1()
    {
        return view('auth.account.step1');
    }
}
