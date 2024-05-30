@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/show.css') }}">
    @routes()
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('catalog') }}">Каталог</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row m-0">
            <div class="col-lg mb-lg-0 mb-5 col-12  p-0">
                <img src="{{ asset($product->photo) }}" alt="{{ $product->title }}" class="main-image img-fluid">
            </div>
            <div class="col-lg-6 col-12 info">
                <div class="info-1">
                    <h3 class="h3">{{ $product->title }}</h3>
                    <p class="vendor-code"><span>Артикул: </span>{{ $product->article }}</p>
                    <p>{{ $product->description . '...' }}</p>
                </div>
                @auth
                    <div id="showButtons" class="info-2">
                        <h3 class="h3">{{ $product->price }}.00 руб.</h3>

                        <show-buttons :product-id="{{ $product->id }}"></show-buttons>
                    </div>
                @endauth
                <div class="info-3">
                    <p class="qty"><span>Штук в наличии:</span><span> {{ $product->quantity }}</span></p>

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
        <div class="row">
            <div class="col p-0">
                <h5 class="h5">
                    Рекомендуем посмотреть
                </h5>
            </div>
        </div>

        <div class="container">
            <div id="card" class="row m-0 justify-content-md-between gy-card">

                @foreach ($recommendedProducts as $product)
                    <div class="d-flex justify-content-center d-md-block col-md-auto col-12 p-0">
                        <div class="card" style="width: 339px;">
                            <img src="{{ asset($product->photo) }}" class="card-img-top" alt="{{ $product->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">{{ mb_substr($product->description, 0, 57) . '...' }}</p>
                                <p class="card-price">{{ $product->price }}.00&nbsp;руб.</p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="{{ route('show', ['product' => $product]) }}"
                                        class="btn btn-outline-dark">Подробнее</a>
                                    @auth
                                        <add-to-cart-icon product-id="{{ $product->id }}" />
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection

@push('script')
    @auth
        <script src="{{ asset('js/show.js') }}"></script>
    @endauth
    <script src="{{ asset('js/cartIcon.js') }}"></script>
@endpush
