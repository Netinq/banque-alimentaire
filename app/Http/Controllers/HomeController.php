<?php

namespace App\Http\Controllers;


use App\Models\Partner;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('profil_complete')->only('panel');
        $this->middleware('auth')->only('panel');
    }

    public function home()
    {
        $partners = Partner::all();
        return view('home', compact('partners'));
    }

    public function panel()
    {
        if (Partner::where('user_id', Auth::id())->exists())
        {
            $partner = Partner::where('user_id', Auth::id())->first();
            $type = "Partenaire";
            $isPartner = true;
            return view("panel.home", compact('partner', 'type', 'isPartner'));

        } else if (Volunteer::where('user_id', Auth::id())->exists()) {
            $volunteer = Volunteer::where('user_id', Auth::id())->first();
            $type = "Volontaire";
            $isPartner = false;
            return view("panel.home", compact('volunteer', 'type', 'isPartner'));
        }
    }

    public function join($id)
    {
        return redirect()->route('home')->with('success', ['Vous avez rejoins le groupe', 'Ils vous recontracteront bientôt !']);
    }
}
