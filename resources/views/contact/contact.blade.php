@extends('layouts.app', ['styles' => ['auth/auth']])

@section('content')
<section class="form-ui col-10 col-sm-8 col-md-6 col-xl-4 offset-1 offset-sm-2 offset-md-3 offset-xl-4">
    <form method="POST" action="{{route('mail')}}">
        @csrf
        <h1>Contactez nous !</h1>
        <span>Envoyez nous un message grace à ce formulaire</span>
        <div class="form-group row col-10">
            <label for="email">Nom</label>
            <input type="name" class="form-control" name="name" id="name" required />
        </div>
        <div class="form-group row col-10">
            <label for="email">Adresse e-mail</label>
            <input type="email" class="form-control" name="email" id="email" required />
        </div>
        <div class="form-group row col-10">
            <label for="email">Message</label>
            <textarea type="text" class="form-control" name="text" id="text" required></textarea>
        </div>
        <div class="form-group col-8">
            <button type="submit" class="btn">Envoyer</button>
        </div>
    </form>
</section>

@endsection
