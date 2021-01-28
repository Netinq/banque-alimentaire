@section('description', 'Créez votre vitrine en ligne, développez un e-commerce, proposez un service de réservation en ligne à vos clients...')

{{-- Keyword, Description, Title, Image --}}

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Default meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">

        <meta name='author' content='Quentin Sar, Netinq'>
        <meta name='owner' content='Banque Alimentaire'>
        <meta name='subject' content="Quentin Sar">

        <meta name='identifier-URL' content='banque-alimentaire.fr'>
        <meta name="description" content="@yield('description')">
        <meta name='reply-to' content='contact@banque-alimentaire.fr'>

        <meta name='language' content='FR'>
        <meta name='target' content='all'>
        <meta name='theme-color' content='#F26E20'>

        <link rel='shortcut icon' type='image/png' href='{{ asset('images/logo.png') }}'>
        <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}" />

        <!-- Twitter Card meta -->
        <meta name='twitter:card' content='summary'>
        <meta name="twitter:site" content="@Netinq" />
        <meta name="twitter:title" content="@hasSection('title') {{Config::get('app.name')}} - @yield('title') @else Banque alimentaire de Bordeaux @endif" />
        <meta name='twitter:url' content='https://banque-alimentaire.fr' />
        <meta name='twitter:domain' content='banque-alimentaire.fr' />
        <meta name="twitter:description" content="@yield('description')" />
        <meta name="twitter:image" content="{{asset('images/meta.png')}}" />

        <!-- Open Graph meta -->
        <meta property='og:title' content='@hasSection('title') {{Config::get('app.name')}} - @yield('title') @else Banque alimentaire de Bordeaux @endif' />
        <meta property="og:description" content="@yield('description')" />
        <meta property="og:image" content="{{asset('images/meta.png')}}" />
        <meta property='og:type' content='website' />
        <meta property='og:url' content='https://banque-alimentaire.fr' />
        <meta property='og:site_name' content='{{Config::get('app.name')}}' />
        <meta property="og:locale" content="fr_FR" />

        <!-- IOS meta -->
        <meta name="apple-mobile-web-app-title" content="{{Config::get('app.name')}}">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

        <title>
            @hasSection('title') {{Config::get('app.name')}} : @yield('title')
            @else Banque alimentaire de Bordeaux @endif
        </title>

        <!-- STATIC Stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/layouts/header.css') }}">

        <!-- STATIC Scripts -->

        @hasSection('noMaster') @else
            <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">
            @endif

            <!-- GENERATE Stylesheet -->
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">

            @if($styles ?? null)
            @foreach($styles as $style)
            <link rel="stylesheet" type="text/css"
            href="{{ asset('css/'.$style.'.css') }}">
            @endforeach
        @endif
    </head>

    <body class="row">
        @include('layouts.header')
        @yield('content')
    </body>
    <script src="{{asset('js/contrast.js')}}"></script>
</html>
