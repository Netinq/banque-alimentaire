@extends('layouts.app', ['styles' => ['panel']])

@section('content')
<div class="col-10 offset-1 row" style="margin-top: 75px">
    <div class="col-12 col-md-5 d-block d-md-none" style="padding: 0;">
        <div class="profile">
            <h1>{{ $type }}</h1>
            <h2>{{ ($isPartner) ? $partner['name'] : $volunteer['firstname'] }}</h2>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                <button type="submit">Déconnexion</button>
            </form>
        </div>
    </div>
    <div class="col-12 col-md-6" style="padding: 0;">
        <div class="volunteers">
            <h1>Ils se sont porté volontaires :</h1>
            @foreach ($volunteers as $volunteer)
            <div class="volunteer">
                <h3>{{$volunteer->firstname}} {{$volunteer->lastname}}</h3>
                <a href="mailto:{{$volunteer->user->email}}"><p>e-mail : {{$volunteer->user->email}}</p></a>
                <a href="tel:{{$volunteer->user->phone}}"><p>téléphone : {{$volunteer->user->phone}}</p></a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-12 col-md-5 d-none d-md-block offset-md-1" style="padding: 0;">
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
