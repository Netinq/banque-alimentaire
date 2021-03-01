@extends('layouts.app', ['styles' => ['auth/auth']])

@section('content')
<section class="form-ui col-10 col-sm-8 col-md-6 col-xl-4 offset-1 offset-sm-2 offset-md-3 offset-xl-4">
    <form method="POst" action="{{route('volunteer.store')}}">
        @csrf
        <h1>Devenez volontaire</h1>
        <span>Contribuons tous ensembles pour aider son prochain</span>
        <div class="form-group row col-10">
            <label for="name">Prénom</label>
            <input class="form-control" name="firstname" type="firstname" value="{{ old('firstname') }}" id="firstname">
            @error('firstname')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10">
            <label for="name">Nom</label>
            <input class="form-control" name="lastname" type="lastname" value="{{ old('lastname') }}" id="lastname">
            @error('lastname')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10">
            <label for="name">Code postal</label>
            <input class="form-control" name="zip" type="number" value="{{ old('zip') }}" id="zip">
            @error('zip')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10">
            <label for="name">Ville</label>
            <input class="form-control" name="city" type="text" value="{{ old('city') }}" id="city">
            @error('city')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10 form-bottom">
            <div class="col-6">
                <a href="{{ url()->previous() }}"><div class="btn btn-secondary">Retour</div></a>
            </div>
            <div class="col-6">
                <button type="submit" class="btn btn-primary btn-primary-delmarge">Créer mon espace</button>
            </div>
        </div>

    </form>
</section>
@endsection
