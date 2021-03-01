<header class="col-10 offset-1 row">
    <div class="col-8 col-md-4">
        <a id="title" href="/">
            <img src="{{ asset('img/logo.png') }}" alt="Banque Alimentaire de Bordeaux et de la Gironde">
        </a>
    </div>
    <div class="col-4 d-flex d-md-none burger" id="burger" onclick="display_menu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
    </div>
    <nav class="col-8 d-none d-md-flex">
        <a href="/">
            <div class="nav-btn">Carte</div>
        </a>
        <a href="/contact">
            <div class="nav-btn">Contact</div>
        </a>
        @if (!(Auth::check()))
        <a href="/login" >
            <div class="nav-btn">Me connecter</div>
        </a>
        <a href="/register">
            <div class="nav-btn nav-btn-primary">Créer un compte</div>
        </a>
        @else
        <a href="/panel">
            <div class="nav-btn nav-btn-primary">Mon espace</div>
        </a>
        @endif
    </nav>
    <nav class="d-flex d-md-none nav-mobile hide" id="m_nav">
        <a href="/">
            <div class="nav-btn">Carte</div>
        </a>
        <a href="/contact">
            <div class="nav-btn">Contact</div>
        </a>
        @if (!(Auth::check()))
        <a href="/login" >
            <div class="nav-btn">Me connecter</div>
        </a>
        <a href="/register">
            <div class="nav-btn nav-btn-primary">Créer un compte</div>
        </a>
        @else
        <a href="/panel">
            <div class="nav-btn nav-btn-primary">Mon espace</div>
        </a>
        @endif
    </nav>
</header>
