@extends('layouts.app', ['styles' => ['auth/step']])

@section('content')
<section class="col-10 col-sm-8 col-md-6 col-xl-4 offset-1 offset-sm-2 offset-md-3 offset-xl-4" id="step1">
    <div class="box-content">
        <h1>Choisissez votre type d'espace</h1>
        <span>Sélectionnez l'espace auquel vous correspondez</span>
        <div class="space-content">
            <a href="{{route('partner.create')}}" class="box-link">
                <div class="box" id="box-first">
                    <h2>Espace Partenaire</h2>
                    <p>Pour les associations...</p>
                </div>
            </a>
            <a href="{{route('volunteer.create')}}" class="box-link">
                <div class="box" id="box-second">
                    <h2>Espace Bénévole</h2>
                    <p>Je souhaite aider...</p>
                </div>
            </a>
        </div>
    </div>
</section>
<script src="{{asset('js/hover.js')}}"></script>
@endsection
