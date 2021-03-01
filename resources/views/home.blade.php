@extends('layouts.app', ['styles' => ['home']])

@section('content')
<script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
<div class='content'>
@if ( Session::has('error'))
<div class="popup error alert alert-dismissible fade show">
    <h4>{{ Session::get('error')[0] }}</h4>
    <span>{{ Session::get('error')[1] }}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Fermer">
      <span aria-hidden="true">&times;</span>
      <span class="sr-only">Fermer</span>
    </button>
</div>
@endif
    <div id="map" style='width: 100vw; height: 100vh;'>
    </div>
    <div id="mapover" class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 offset-sm-3 offset-md-5 offset-lg-6 offset-xl-7">
        <div id="container" class="hide">
            <h2 id="part_title">Titre partenaire</h2>
            <p><span id="part_place">0</span> Place(s) restante(s)</p>
            {{-- <img class="separator" src="{{ asset('svg/separator.svg') }}" alt="Separator"> --}}
            {{-- <div class="categories">
                <div class="category">
                    <img src="{{ asset('svg/categories/food.svg') }}" alt="Food icon">
                    <p>Restauration</p>
                </div>
                <div class="category">
                    <img src="{{ asset('svg/categories/food.svg') }}" alt="Food icon">
                    <p>Restauration</p>
                </div>
                <div class="category">
                    <img src="{{ asset('svg/categories/food.svg') }}" alt="Food icon">
                    <p>Restauration</p>
                </div>
            </div> --}}
            {{-- <img class="separator" src="{{ asset('svg/separator.svg') }}" alt="Separator"> --}}
            <a href="#"><div class="adress-content">
                <img src="{{asset('svg/location.svg')}}" alt="Location icon">
                <div class="adress">
                    <p id="adress">00 rue Charles de Gaule</p>
                    <p id="city">3300 Bordeaux</p>
                </div>
            </div></a>
            <button><img src="{{ asset('svg/join.svg')}}"> Les rejoindre</button>
        </div>
    </div>
</div>
<div id="home-space"></div>
<script>
    const geojson = {
        type: "FeatureCollection",
        features: []
    };
    const array = {!! json_encode($partners) !!};
    array.forEach(elem => {
        geojson['features'].push({
                type: "Feature",
                properties: {
                    message: "Foo",
                    iconSize: [40, 40],
                    name: elem['name'],
                    size: elem['max_volunteers']-elem['actual_volunteers'],
                },
                geometry: {
                    type: "Point",
                    coordinates: [elem['longitude'], elem['lattitude']] ,
                },
            });
    });
</script>
<script type="module" src="{{asset('js/geo/script.js')}}"></script>
<script type="module" src="{{asset('js/geo/locations.js')}}"></script>
@endsection
