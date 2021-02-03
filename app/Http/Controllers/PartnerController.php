<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Auth;

use Geocoder\Query\GeocodeQuery;
use Geocoder\Query\ReverseQuery;

class PartnerController extends Controller
{
    public function create()
    {
        return view('auth.account.step2_partner');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:150',
            'siret' => 'required|string|max:14',
            'naf' => 'required|string|max:8',
            'adress' => 'required|string',
            'adress_details' => 'required|string',
            'zip' => 'required|string|max:5',
            'city' => 'required|string|max:10',
            'max_volunteers' => 'required|integer',
        ]);

        $partner  = new Partner();
        $partner->user_id = Auth::id();
        $partner->name = request('name');
        $partner->siret = request('siret');
        $partner->naf = request('naf');
        $partner->adress = request('adress');
        $partner->adress_details = request('adress_details');
        $partner->zip = request('zip');
        $partner->city = request('city');
        $partner->max_volunteers = request('max_volunteers');
        $partner->actual_volunteers = 0;



        $partner->save();

        // $table->float('lattitude', 10, 8);
        // $table->float('longitude', 11, 8);

        return redirect()->route('panel');
    }

    public function update(Request $request, $id)
    {
        if (Auth::id() != $id) {
            //TODO ADMIN
            return;
        }

        $this->validate($request, [
            'firstname' => 'string',
            'siret' => 'string',
            'zip' => 'string|max:5',
            'city' => 'string|max:10',
        ]);

        $partner  = Partner::where('user_id', $id);
        $partner->user_id = Auth::id();
        $partner->firstname = request('firstname');
        $partner->lastname = request('lastname');
        $partner->zip = request('zip');
        $partner->city = request('city');

        $partner->save();

        return redirect()->route('partner.show', $id);
    }

    public function destroy($id)
    {
        if (Auth::id() != $id) {
            //TODO ADMIN
            return;
        }

        $partner  = Partner::where('user_id', $id);
        $partner->destroy();
    }
}
