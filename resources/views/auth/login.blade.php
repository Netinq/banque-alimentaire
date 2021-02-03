@extends('layouts.app', ['styles' => ['auth/auth']])

@section('content')
<section class="col-10 col-sm-8 col-md-6 col-xl-4 offset-1 offset-sm-2 offset-md-3 offset-xl-4" id="login">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        {{-- <h1>Devenez membre</h1>
        <span>Rejoignez-nous en tant que partenaire ou bénévole</span> --}}
        <h1>Mon espace</h1>
        <span>Me connecter à mon interface en ligne</span>
        <div class="form-group row col-10">
            <label for="email" >Adresse e-mail</label>

            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10">
            <label for="password" >Mot de passe</label>

            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

            @error('password')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
         <div class="form-group col-8">
                <button type="submit" class="btn btn-primary">Accéder à mon compte</button>
        </div>
    </form>
</section>
@endsection
