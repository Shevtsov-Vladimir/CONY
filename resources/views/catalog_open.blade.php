@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/catalog.css') }}">
@endsection


@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Каталог</li>
            </ol>
        </nav>

        <p class="wish">Будь счастлива каждую секунду!</p>

        <div class="category-block mx-auto d-flex flex-wrap justify-content-md-between">
            <a href="#" class="category order-0 active">Все</a>
            <a href="#" class="category order-1">Серьги</a>
            <a href="#" class="category order-2">Колье</a>
            <a href="#" class="category order-4 order-md-3">Браслеты</a>
            <a href="#" class="category order-5 order-md-4">Кольца</a>
            <a href="#" class="category order-3 order-md-5">Подвески</a>
        </div>
    </div>

    <div class="container">
        <div class="row gy-card">

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/колье-1.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Колье</h5>
                        <p class="card-text">Представляем вам колье женское на шею..</p>
                        <p class="card-price">800.00&nbsp;руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/подвеска-1.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Подвеска бижутерная на&nbsp;шею</h5>
                        <p class="card-text">Подвеска с пиромидкой имеет универсальный дизайн, который..</p>
                        <p class="card-price">500.00&nbsp;руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Серьги-1.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Серьги висячие гвоздики</h5>
                        <p class="card-text">Серьги в форме лепестка из бижутерного сплава – оригинальный..</p>
                        <p class="card-price">600.00&nbsp;руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Браслет1.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Браслет на ногу</h5>
                        <p class="card-text">Представляем вам женский браслет на ногу...</p>
                        <p class="card-price">550.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Серьги2.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Серьги золотые</h5>
                        <p class="card-text">Приобретите эти элегантные серьги с жемчугом, чтобы порадовать...</p>
                        <p class="card-price">600.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Браслет2.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Браслет на руку</h5>
                        <p class="card-text">Приобретите этот стильный и эстетичный женский браслет на руку...</p>
                        <p class="card-price">800.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Колье2.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Колье</h5>
                        <p class="card-text">Приобретите это стильное и эстетичное колье с кулоном в...</p>
                        <p class="card-price">550.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Браслет3.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Браслет на ногу</h5>
                        <p class="card-text">Представляем вам браслет на ногу анклет, который станет...</p>
                        <p class="card-price">800.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Колье3.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Колье с крестом</h5>
                        <p class="card-text">Представляем вам колье на шею с кулоном крестом</p>
                        <p class="card-price">800.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Браслет4.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Браслет стальной</h5>
                        <p class="card-text">Подарите своей любимой особенный аксессуар, который...</p>
                        <p class="card-price">550.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Подвеска1.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Подвеска на шею</h5>
                        <p class="card-text">Представляем вам колье женское на шею..</p>
                        <p class="card-price">800.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Кольцо1.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Кольцо змейка</h5>
                        <p class="card-text">Мужское кольцо со змеёй - это эстетичное и модное украшение...</p>
                        <p class="card-price">800.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Браслет5.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Браслет серебристый</h5>
                        <p class="card-text">Представляю вашему вниманию женский браслет на руку...</p>
                        <p class="card-price">550.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Колье4.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Колье на шею</h5>
                        <p class="card-text">Женское колье бижутерия на шею с кулоном из колец...</p>
                        <p class="card-price">800.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Браслет6.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Браслет на руку</h5>
                        <p class="card-text">Приобретите этот женский браслет на руку и добавьте немного...</p>
                        <p class="card-price">800.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Браслет7.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Браслет на руку</h5>
                        <p class="card-text">Браслет женский на руку - это стильное и эстетичное украшение...</p>
                        <p class="card-price">550.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-md-6 col-xl-4 d-flex justify-content-center">
                <div class="card" style="width: 339px;">
                    <img src="{{ asset('/img/Колье5.png') }}" class="card-img-top" alt="Колье">
                    <div class="card-body">
                        <h5 class="card-title">Колье на шею</h5>
                        <p class="card-text">Это эстетичное и модное женское колье с сердцем...</p>
                        <p class="card-price">800.00 руб.</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="#" class="btn btn-outline-dark">Подробнее</a>
                            <a href="#">
                                <img src="{{ asset('/img/Add Shopping Cart.jpg') }}" alt="Колье" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
