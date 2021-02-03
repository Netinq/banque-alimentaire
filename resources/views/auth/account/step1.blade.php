@extends('layouts.app', ['styles' => ['auth/step']])

@section('content')
<section class="col-10 col-sm-8 col-md-6 col-xl-4 offset-1 offset-sm-2 offset-md-3 offset-xl-4" id="step1">
    <h1>Choisissez votre type d'espace :</h1>
    <div class="space-content">
        <a href="#">
            <div>
                <h2>Espace Partenaire</h2>
                <p>Pour les associations...</p>
            </div>
        </a>
        <a href="#">
            <div>
                <h2>Espace Bénévole</h2>
                <p>Pour les gens souhaitant aider...</p>
            </div>
        </a>
    </div>
</section>
@endsection
