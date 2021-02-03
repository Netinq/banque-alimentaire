@extends('layouts.app', ['styles' => ['auth/auth']])

@section('content')
<section class="form-ui col-10 col-sm-8 col-md-6 col-xl-4 offset-1 offset-sm-2 offset-md-3 offset-xl-4">
    <form>
        <h1>Devenez volontaire</h1>
        <span>Contribuons tous ensembles pour aider son prochain</span>

        <div class="form-group row col-10">
            <label for="name">Prénom</label>

            <input class="form-control" name="fname" type="text">
        </div>
        <div class="form-group row col-10">
            <label for="name">Nom</label>

            <input class="form-control" name="lname" type="text">
        </div>
        <div class="form-group row col-10">
            <label for="name">Code postal</label>

            <input class="form-control" name="zip" type="number" step="100">
        </div>
        <div class="form-group row col-10">
            <label for="name">Ville</label>

            <input class="form-control" name="city" type="text">
        </div>
        <div class="form-group col-8">
            <button type="submit" class="btn btn-primary">Accéder à mon compte</button>
        </div>

    </form>
</section>
@endsection