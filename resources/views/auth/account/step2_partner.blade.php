@extends('layouts.app', ['styles' => ['auth/auth']])

@section('content')
<section class="form-ui col-10 col-sm-8 col-md-6 col-xl-4 offset-1 offset-sm-2 offset-md-3 offset-xl-4">
    <form method="POST" action="{{route('partner.store')}}">
        @csrf
        <h1>Ajouter un partenaire</h1>
        <span>Contribuons tous ensembles pour aider son prochain</span>
@if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
        <div class="form-group row col-10">
            <label for="name">Nom partenaire</label>
            <input class="form-control" name="name" type="text" value="{{ old('name') }}">
            @error('name')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10">
            <label for="siret">Siret</label>
            <input class="form-control" name="siret" type="text" value="{{ old('siret') }}">
            @error('siret')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10">
            <label for="naf">Naf</label>
            <input class="form-control" name="naf" type="text" value="{{ old('naf') }}">
            @error('naf')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10">
            <label for="adress">Addresse</label>
            <input class="form-control" name="adress" type="text" value="{{ old('address') }}">
            @error('adress')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10">
            <label for="name">Code postal</label>
            <input class="form-control" name="zip" type="number" value="{{ old('zip') }}">
            @error('zip')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10">
            <label for="name">Ville</label>
            <input class="form-control" name="city" type="text" value="{{ old('city') }}">
            @error('city')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group row col-10">
            <label for="name">Nombre bénévole max</label>
            <input class="form-control" type="number" name="max_volunteers" value="{{ old('max_volunteers') }}">
            @error('max_volunteers')
                <p class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </p>
            @enderror
        </div>
        <div class="form-group col-8">
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>


    </form>
</section>
@endsection
