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
        $data = "51 rue de la Peloue 33127 Saint Jean d'Illac France";
        $url = "https://api.mapbox.com/geocoding/v5/mapbox.places/51%20rue%20de%20la%20Peloue%2033127%20Saint%20Jean%20d'Illac%20France.json?access_token=pk.eyJ1IjoibmV0aW5xIiwiYSI6ImNra2N0azJvajBpOWoycHFydWRkcWo5MXMifQ.iCXY_CWx5r8KEOHHCGu3iw";

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
        return view('home', compact('lo', 'la'));
    }

    public function panel()
    {
        return view("panel.home");
    }
}
