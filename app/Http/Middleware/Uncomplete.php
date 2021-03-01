<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Volunteer;
use App\Models\Partner;


class Uncomplete
{
    public function handle(Request $request, Closure $next)
    {
        $id = Auth::id();

        $volunteer = Volunteer::where('user_id', $id)->first();
        $partner = Partner::where('user_id', $id)->first();

        if ($volunteer == null && $partner == null) {
            return $next($request);
        } else {
            return redirect(route('step1'));
        }
    }
}
