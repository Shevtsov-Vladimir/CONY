<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONY</title>
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    @yield('asset')
</head>

<body class="d-flex flex-column min-vh-100">

    <header class="container-fluid ">
        <div class="container">
            <nav class="navbar navbar-expand-lg m-auto">
                <div class="container-fluid ">
                    <a class="navbar-brand justify-content-start" href="{{ route('home') }}">
                        <img class=img-fluid src="{{ asset('/img/admin logo.svg') }}" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav gap-n row-gap-3 text-end">
                            @guest()
                                <a class="nav-link fs-3" href="{{ route('auth.loginform') }}">Вход</a>
                            @endguest
                            @auth()
                                <a class="nav-link fs-3" href="{{ route('auth.logout') }}">Выход</a>
                            @endauth
                        </div>
                    </div>
            </nav>
        </div>
    </header>

    <main class="container-fluid  flex-grow-1">
        @yield('content')
    </main>

    @stack('script')
</body>

</html>
