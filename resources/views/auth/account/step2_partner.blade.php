@extends('layouts.app', ['styles' => ['auth/auth']])

@section('content')
<section class="form-ui col-10 col-sm-8 col-md-6 col-xl-4 offset-1 offset-sm-2 offset-md-3 offset-xl-4">
    <form>
        <h1>Ajouter un partenaire</h1>
        <span>Contribuons tous ensembles pour aider son prochain</span>

        <div class="form-group row col-10">
            <label for="name">Nom partenaire</label>

            <input class="form-control" name="name" type="text">
        </div>
        <div class="form-group row col-10">
            <label for="name">Siret</label>

            <input class="form-control" name="siret" type="text">
        </div>
        <div class="form-group row col-10">
            <label for="name">Naf</label>

            <input class="form-control" name="naf" type="text">
        </div>
        <div class="form-group row col-10">
            <label for="name">Addresse</label>

            <input class="form-control" name="address" type="text">
        </div>
        <div class="form-group row col-10">
            <label for="name">Code postal</label>

            <input class="form-control" name="zip" type="number" step="100">
        </div>
        <div class="form-group row col-10">
            <label for="name">Ville</label>

            <input class="form-control" name="city" type="text">
        </div>
        <div class="form-group row col-10">
            <label for="name">Contact (email)</label>

            <input class="form-control" name="email" type="text">
        </div>
        <div class="form-group row col-10">
            <label for="name">Nombre bénévole max</label>

            <input class="form-control" type="number">
        </div>
        <div class="form-group col-8">
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>


    </form>
</section>
@endsection