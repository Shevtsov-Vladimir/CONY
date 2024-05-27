@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/purchase_history.css') }}">
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">История покупок</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <h3 class="h3">Мои покупки</h3>

        <div class="row">

            @foreach ($orders as $order)
                <div class="order">

                    @foreach ($order->products as $product)
                        <div class="col-12">
                            <div class="purchase">
                                <a href="{{ route('show', ['product' => $product->id]) }}"><img
                                        src="{{ asset($product->photo) }}" alt="{{ $product->title }}"
                                        class="img-fluid"></a>
                                <div class="grid">
                                    <div class="fw-bold">{{ $product->title }}</div>
                                    <div class="d-md-block d-none fw-bold text-end">Цена</div>
                                    <div class="d-md-block d-none fw-bold text-end">Количество</div>
                                    <div class="d-md-block d-none fw-bold text-end">Стоимость</div>
                                    <div class="d-none d-md-block fw-bold text-end">Заказ</div>
                                    <div class="d-md-block d-none">{{ $product->vendor_code }}</div>
                                    <div class="text-start text-md-end">
                                        {{ $product->price . '.00 руб.' }}
                                    </div>
                                    <div class="text-start text-md-end">
                                        <span class="d-md-none fw-bold">Количество &nbsp;</span>
                                        {{ $product->pivot->quantity }}
                                    </div>
                                    <div class="d-md-block d-none text-end">
                                        {{ $product->price * $product->pivot->quantity . '.00 руб.' }}
                                    </div>
                                    <div class="d-none d-md-block text-end">
                                        {{ $order->id }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>
    </div>
@endsection