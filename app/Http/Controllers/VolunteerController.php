<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Volunteer;
use Illuminate\Support\Facades\Auth;

class VolunteerController extends Controller
{
    public function create()
    {
        return view('auth.account.step2_volunteer');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'zip' => 'required|max:5',
            'city' => 'required|string',
        ]);

        $volunteer  = new Volunteer();
        $volunteer->user_id = Auth::id();
        $volunteer->firstname = request('firstname');
        $volunteer->lastname = request('lastname');
        $volunteer->zip = request('zip');
        $volunteer->city = request('city');

        $volunteer->save();

        return redirect()->route('panel');
    }

    public function update(Request $request, $id)
    {
        if (Auth::id() != $id)
        {
             //TODO ADMIN
             return;
        }

        $this->validate($request, [
            'firstname' => 'string',
            'lastname' => 'string',
            'zip' => 'string|max:5',
            'city' => 'string|max:10',
        ]);

        $volunteer  = Volunteer::where('user_id', $id);
        $volunteer->user_id = Auth::id();
        $volunteer->firstname = request('firstname');
        $volunteer->lastname = request('lastname');
        $volunteer->zip = request('zip');
        $volunteer->city = request('city');

        $volunteer->save();

        return redirect()->route('volunteer.show', $id);
    }

    public function destroy($id)
    {
        if (Auth::id() != $id) {
            //TODO ADMIN
            return;
        }

        $volunteer  = Volunteer::where('user_id', $id);
        $volunteer->destroy();
    }
}
