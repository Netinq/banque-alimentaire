@extends('layouts.app')

@section('content')
<h1>VOICI MON ACCUEIL</h1>
<h2>{{ $name }}</h2>
<h3> {{ $name == "Quentin Sar" ? "Bonjour Quentin" : "Inconnu" }}</h3>
@endsection
