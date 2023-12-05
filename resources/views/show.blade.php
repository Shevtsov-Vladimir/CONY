@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/show.css') }}">
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active"><a href="#">Каталог</a></li>
                <li class="breadcrumb-item active" aria-current="page">Браслет 1</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('/img/Group 27.png') }}" alt="Браслет" class="img-fluid">
            </div>
            <div class="col-6 info">
                <div class="info-1">
                    <h3 class="h3">Браслет</h3>
                    <p>Наш браслет изготовлен из эстетичного и модного бижутерного сплава, который придает ему изысканность и стиль. Без вставок и гладкий внешний вид делают его минималистичным и подходящим для любого наряда. Жесткий и широкий дизайн из бижутерии стали придает этому аксессуару долговечность и привлекательность. Этот браслет станет прекрасным подарком для вашей любимой, добавив ее образу неповторимый шарм и стиль.</p>
                </div>
                <div class="info-2">
                    <h3 class="h3">550.00 руб.</h3>
                    <div class="d-flex justify-content-between">
                        <a href="#" class="btn btn-yellow">В корзину</a>
                        <a href="#" class="btn btn-outline-dark">Купить сейчас</a>
                    </div>
                </div>
                <div class="info-3">
                    <p class="qty"><span>Штук в наличии:</span><span> 111</span></p>

                    <h5 class="h5">Дополнительная информация</h5>

                    <p class="property"><span>Состав бижутерии:</span><span> гипоаллергенный сплав</span></p>
                    <p class="property"><span>Особенности модели:</span><span> износостойкий</span></p>
                    <p class="property"><span>Пол:</span><span> женский</span></p>
                    <p class="property"><span>Размер:</span><span> универсальный</span></p>
                </div>
                <div class="info-4">
                    <h5 class="h5">Габариты</h5>

                    <p class="property"><span>Длина упаковки:</span><span> 5 см</span></p>
                    <p class="property"><span>Высота упаковки:</span><span> 6 см</span></p>
                    <p class="property"><span>Ширина упаковки:</span><span> 1 см</span></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h5 class="h5">
            Рекомендуем посмотреть
        </h5>

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
            </div>
        </div>
    </div>
@endsection
