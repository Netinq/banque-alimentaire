@extends('layouts.app', ['styles' => ['panel']])

@section('content')
<div class="col-10 offset-1">
    <div class="col-6" style="padding: 0;">
        <div class="profile">
            <h1>{{ $type }}</h1>
            <h2>{{ ($isPartner) ? $partner['name'] : $volunteer['firstname'] }}</h2>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button type="submit">Déconnexion</button>
            </form>
        </div>
    </div>
</div>
@endsection
