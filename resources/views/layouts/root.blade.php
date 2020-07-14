<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&family=Dancing+Script:wght@500&display=swap"
        rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"
        media="screen,projection" />

    <script type="text/javascript" src="{{ asset('js/jquery-3.5.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

    @yield('css')

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }
    </style>
</head>

<body class="grey lighten-3">
    <nav>
        <div class="nav-wrapper indigo darken-1">
            @if (Request::url() != route('home'))
                <a class="brand-logo" href="{{ route('home') }}" style="font-family: 'YellowTail', cursive; font-size: 18pt; margin-left: 20px">Resep Jamu Tradisional</a>
            @endif
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('jamu') }}">Jamu</a></li>
                <li><a href="{{ route('jamu.cari') }}">Cari</a></li>
                @auth
                    <li><a class="dropdown-trigger" href="#!" data-target="userDropdown">{{ auth()->user()->name }}<i
                                class="material-icons right">arrow_drop_down</i></a></li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            </ul>
        </div>
    </nav>

    @auth
        <ul id="userDropdown" class="dropdown-content indigo darken-1">
            <li><a href="{{ route('profile') }}" class="white-text">Profil</a></li>
            <li><a href="{{ route('jamu.add') }}" class="white-text">Tambah Jamu</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" class="white-text">Keluar</a></li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    @endauth

    <main>
        @yield('content')
    </main>

    <footer class="page-footer @if (Request::url() == route('home')) transparent @else indigo darken-1 @endif">
        <div class="footer-copyright">
            <div class="container center-align @if (Request::url() == route('home')) indigo-text darken-1 @endif">Resep Jamu Tradisional © 2020 Copyright</div>
        </div>
    </footer>

    <script>
        $(document).ready(function () {
            $(".dropdown-trigger").dropdown({
                hover: false,
                coverTrigger: false,
                constrainWidth: false
            });

            $('.slider').slider({
                indicators: false,
                // height: 175
            });
        });
    </script>
</body>

</html>
