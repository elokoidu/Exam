@include('partials._head')
<body>
<div id="app">
    <div class="uk-hidden@l">
        <nav class="uk-navbar-container uk-margin uk-margin-remove-bottom uk-text-secondary" uk-navbar>
            <div class="uk-navbar-center" id="logo">
                <a class="uk-navbar-item uk-logo uk-width-small" href="/"><img src="img/Logo_name.png"></a>
            </div>
            <button class="uk-button uk-button-default uk-margin-small-right uk-border-rounded" type="button"
                    uk-toggle="target: #offcanvas-nav-primary"><span uk-icon="icon: menu"></span></button>
            <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column">
                    <button class="uk-offcanvas-close" type="button" uk-close></button>
                    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                        <li class="uk-parent">
                            <a href="/">Avaleht</a>
                        </li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-parent">
                            <a href="#">Tooted</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Tootjad</a></li>
                                <li><a href="#">Kategooriad</a></li>
                                <li><a href="#">Kõik tooted</a></li>
                            </ul>
                        </li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-parent">
                            <a href="#">Kampaaniad</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">SALE</a></li>
                                <li><a href="#">Eripakkumised</a></li>
                            </ul>
                        </li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-parent">
                            <a href="#">Töökoda</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="#">Parandus</a></li>
                                    <li><a href="#">Ehitame koos</a></li>
                                </ul>
                        </li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-parent">
                            <a href="#">Konto</a>
                            <ul class="uk-nav-sub">
                                @auth
                                    @if (Auth::user()->role === 'admin')
                                        <li><a href="/products">Tooted</a></li>
                                    @endif
                                @endauth
                            </ul>
                        </li>
                        <li class="uk-nav-divider"></li>
                        <li class="uk-parent">
                            <ul class="uk-nav-sub">
                                <li><a href="#">EST</a></li>
                                <li><a href="#">ENG</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-overlay uk-navbar-right" uk-toggle="target: #logo; nimation: uk-animation-fade;">
                <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade;" href="#"></a>
            </div>
            <div class="nav-overlay uk-navbar-right uk-flex-1" hidden uk-toggle="target: #logo; nimation: uk-animation-fade;">
                <div class="uk-navbar-item uk-width-expand">
                    <form class="uk-search uk-search-navbar uk-width-1-1">
                        <input class="uk-search-input" type="search" placeholder="Otsi..." autofocus>
                    </form>
                </div>
                <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade;" href="#"></a>
            </div>
        </nav>
    </div>
    <div class="uk-background-primary uk-dark uk-visible@l" uk-sticky>
        <nav class="uk-navbar-container uk-margin uk-margin-remove-bottom uk-text-bold uk-text-secondary"
             uk-navbar="dropbar: true;">
            <div class="uk-navbar-left uk-margin-large-left">
                <div class="uk-navbar-left">
                    <div>
                        <ul class="uk-navbar-nav">
                            <li><a href="/">Avaleht</a></li>
                            <li>
                                <a href="#">Tooted</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav uk-margin-remove-top">
                                        <li><a href="#">Tootjad</a></li>
                                        <li><a href="#">Kategooriad</a></li>
                                        <li><a href="/products">Kõik tooted</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Kampaaniad</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">SALE</a></li>
                                        <li><a href="#">Eripakkumised</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">Töökoda</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">Parandus</a></li>
                                        <li><a href="#">Ehitame koos</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="uk-navbar-center">
                <a class="uk-navbar-item uk-logo uk-width-medium" href="/"><img src="img/Logo_name.png"></a>
            </div>
            <div class="uk-navbar-right uk-margin-large-right">
                <div class="uk-navbar-right">
                    <div>
                        <ul class="uk-navbar-nav">
                            <div>
                                <a class="uk-navbar-toggle" uk-search-icon href="#"></a>
                                <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                                    <form class="uk-search uk-search-navbar uk-width-1-1">
                                        <input class="uk-search-input" type="search" placeholder="Otsi..." autofocus>
                                    </form>
                                </div>
                            </div>
                            <li>
                                <a href="#" uk-icon="icon: cart"></a>
                            </li>
                            <li>
                                <a href="#">Konto</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        @auth
                                            @auth
                                                @if (Auth::user()->role === 'admin')
                                                    <li><a href="/products">Tooted</a></li>
                                                @endif
                                            @endauth
                                            <li><a href="/logout">Logi Välja</a></li></a>
                                        @endauth
                                        @guest
                                            <li><a href="/login">Logi sisse</a></li>
                                            <li><a href="/register">Registreeru</a></li>
                                        @endguest
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">EST</a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-bottom-right">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="#">EST</a></li>
                                        <li><a href="#">ENG</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    </nav>
</div>
<main>
    @yield('content')
</main>

@include('partials._messages')

<footer class="uk-section uk-section-xsmall uk-margin-small-top uk-section-secondary">
    <div class="uk-container">
        <div class="uk-grid uk-text-center uk-text-left@s uk-flex-middle" data-uk-grid>
            <div class="uk-text-small uk-text-muted uk-width-1-3@s">
                <h4>Kontakt</h4>
                <ul class="uk-list">
                    <li>Tel: 5068 3950</li>
                    <li>E-mail: teraflop@gmail.com</li>
                    <li>Leia meid ka sotsiaalmeediast!</li>
                </ul>
            </div>
            <div class="uk-text-center uk-width-1-3@s">
                <a target="_blank" href="#"
                   class="uk-icon-button uk-margin-small-right" data-uk-icon="twitter"></a>
                <a target="_blank" href="#"
                   class="uk-icon-button uk-margin-small-right" data-uk-icon="facebook"></a>
                <a target="_blank" href="#"
                   class="uk-icon-button" data-uk-icon="instagram"></a>
            </div>
            <div class="uk-text-small uk-text-muted uk-text-center uk-text-right@s uk-width-1-3@s">
                <h4>Asukohad</h4>
                <ul class="uk-list">
                    <li><h5>Kauplus</h5></li>
                    <li>Pärnu mnt 58a, Tallinn</li>
                    <li><h5>Laopood</h5></li>
                    <li>Sõpruse pst 23, Tallinn</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
