<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function step1()
    {
        return view('auth.account.step1');
    }

    public function step2_partner()
    {
        return view('auth.account.step2_partner');
    }
    
    public function step2_volunteer()
    {
        return view('auth.account.step2_volunteer');
    }
}
