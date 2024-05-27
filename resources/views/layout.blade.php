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
                        <img class=img-fluid src="{{ asset('/img/logo.svg') }}" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav gap-n row-gap-3 text-end">
                            <a class="nav-link mt-4 mt-lg-0 fs-3" href="{{ route('catalog') }}">Каталог</a>
                            <a class="nav-link fs-3" href="{{ route('home') . '#faq' }}">FAQ</a>
                            @guest()
                                <a class="nav-link fs-3" href="{{ route('auth.loginform') }}">Вход</a>
                            @endguest
                            @auth()
                                <li class="d-none d-lg-block nav-item align-self-end dropdown">
                                    <button class="nav-link fs-3" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        Личный кабинет
                                    </button>
                                    <ul class="dropdown-menu m-0 pt-ddt pb-ddb">
                                        <li><a class="dropdown-item fs-1 py-0"
                                                href="{{ route('purchase_history') }}">История покупок</a></li>
                                        <li><a class="dropdown-item fs-1 py-0" href="{{ route('cart') }}">Корзина</a></li>
                                    </ul>
                                </li>

                                <a class="d-block d-lg-none nav-link fs-3" href="{{ route('purchase_history') }}">История
                                    покупок</a>
                                <a class="d-block d-lg-none nav-link fs-3" href="{{ route('cart') }}">Корзина</a>
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

    <footer class="container-fluid bg-dark">
        <div class="container d-flex justify-content-between flex-wrap pt-ftop pb-fbottom pt-md-fdtop pb-md-fdbottom">
            <div class="text-white justify-content-start mb-fbetween m-md-0">
                <p class="fw-bold">Свяжитесь с&nbsp;нами</p>
                <p><a class="text-white fs-1" href="mailto:cony2023@gmail.com">cony2023@gmail.com</a></p>
                <p><a class="text-white fs-1" href="tel:+7(977)-333-88-77">+7(977)-333-88-77</a></p>
            </div>

            <div class="text-white justify-content-end">
                <p class="fw-bold">&copy;&nbsp;{{ date('Y') }}&nbsp;CONY</p>
                <p class="fs-1">Используя данный сайт, вы&nbsp;автоматически<br>принимаете условия пользовательского
                    соглашения<br>и&nbsp;соглашаетесь с&nbsp;политикой конфиденциальности.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('script')
</body>

</html>
