<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home()
    {
        $name = "Germain Sar";

        return view("home", compact('name'));
    }
}
