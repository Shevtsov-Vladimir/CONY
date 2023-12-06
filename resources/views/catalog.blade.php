@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/catalog.css') }}">
@endsection


@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Каталог</li>
            </ol>
        </nav>

        <p class="wish">Будь счастлива каждую секунду!</p>

        <div class="category-block mx-auto d-flex justify-content-between">
            <a href="#" class="category order-0 active">Все</a>
            <a href="#" class="category order-1">Серьги</a>
            <a href="#" class="category order-2">Колье</a>
            <a href="#" class="category order-4 order-md-3">Браслеты</a>
            <a href="#" class="category order-5 order-md-4">Кольца</a>
            <a href="#" class="category order-3 order-md-5">Подвески</a>
        </div>
        <div class="after-block mx-auto">
            <a href="#" class="category order-4 order-md-3">Браслеты</a>
            <a href="#" class="category order-5 order-md-4">Кольца</a>
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
        </div>

        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="{{ route('catalog_open') }}" class="btn btn-yellow">Смотреть все</a>
            </div>
        </div>
    </div>
@endsection
