<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('profil_complete')->only('panel');
    }

    public function home()
    {
        return view("home");
    }

    public function panel()
    {
        return view("panel.home");
    }
}
