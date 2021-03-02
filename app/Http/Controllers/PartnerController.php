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
            'adress_details' => 'string',
            'zip' => 'required|string|max:5',
            'city' => 'required|string',
            'max_volunteers' => 'required|integer',
            ]);

        $partner  = new Partner();
        $partner->user_id = Auth::id();
        $partner->name = request('name');
        $partner->siret = request('siret');
        $partner->naf = request('naf');
        $partner->adress = request('adress');
        $partner->adress_details = request('adress');
        $partner->zip = request('zip');
        $partner->city = request('city');
        $partner->max_volunteers = request('max_volunteers');
        $partner->actual_volunteers = 0;

        $data = request('adress')." ".request('zip')." ".request('city')." France";
        $data = str_replace(' ', '%20', $data);
        //$url = "https://api.mapbox.com/geocoding/v5/mapbox.places/51%20rue%20de%20la%20Peloue%2033127%20Saint%20Jean%20d'Illac%20France.json?access_token=pk.eyJ1IjoibmV0aW5xIiwiYSI6ImNra2N0azJvajBpOWoycHFydWRkcWo5MXMifQ.iCXY_CWx5r8KEOHHCGu3iw";
        $url = "https://api.mapbox.com/geocoding/v5/mapbox.places/".$data.".json?access_token=pk.eyJ1IjoibmV0aW5xIiwiYSI6ImNra2N0azJvajBpOWoycHFydWRkcWo5MXMifQ.iCXY_CWx5r8KEOHHCGu3iw";

        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_PROXYPORT, 3128);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($result, true);

        $lo = $response['features'][0]['center'][0];
        $la = $response['features'][0]['center'][1];

        $partner->longitude = $lo;
        $partner->lattitude = $la;

        $partner->save();

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
