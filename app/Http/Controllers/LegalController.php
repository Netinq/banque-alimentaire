<?php

namespace App\Http\Controllers;

class LegalController extends Controller
{
    public function mentions()
    {
        return view('legale.mentions');
    }

    public function rgpd()
    {
        return view('legale.rgpd');
    }

    public function cgu()
    {
        return view('legale.cgu');
    }
}
