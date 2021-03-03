<?php

namespace App\Http\Controllers;


use App\Models\Partner;
use App\Models\Volunteer;
use App\Models\User;
use App\Models\PartnerVolunteer;
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

            $volunteers = PartnerVolunteer::where('partner_id', $partner->id)->get();
            $count = 0;
            foreach ($volunteers as $volunteer) {
                $new = Volunteer::where('id', $volunteer->volunteer_id)->first();
                $new->user = User::where('id', $new->user_id)->first();
                $volunteers[$count] = $new;
                $count++;
            }
            return view("panel.home", compact('partner', 'type', 'isPartner', 'volunteers'));

        } else if (Volunteer::where('user_id', Auth::id())->exists()) {
            $volunteer = Volunteer::where('user_id', Auth::id())->first();
            $type = "Volontaire";
            $isPartner = false;
            return view("panel.home", compact('volunteer', 'type', 'isPartner'));
        }
    }

    public function join($id)
    {
        $v = Volunteer::where('user_id', Auth::id())->first();
        if ($v == null) {
            return redirect()->route('home')->with('error', ['Vous n\'avez pas de compte Volontaire !', 'Veuillez créer un compte volontaire pour rejoindre un de nos partenaires.']);;
        }
        $vp = PartnerVolunteer::where('volunteer_id', $v->id)
            ->where('partner_id', $id)
            ->first();
        if ($vp != null) {
            return redirect()->route('home')->with('error', ['Vous avez déjà envoyé une requête !', 'Merci de votre engagement. Le partenaire vous recontactera très bientôt !']);;
        }

        $vp = new PartnerVolunteer();
        $vp->partner_id = $id;
        $vp->volunteer_id = $v->id;
        $vp->save();

        return redirect()->route('home')->with('success', ['Votre demande à été envoyé !', 'Merci de votre engagement. Le partenaire vous recontactera très bientôt !']);;
    }

    public function mail()
    {
        return redirect()->route('home')->with('success', ['Votre e-mail à été envoyé !', 'Nous reviendrons vers vous rapidement.']);;
    }
}
