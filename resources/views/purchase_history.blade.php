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
            {{-- <div class="col-12">
                <div class="purchase">
                    <img src="{{ asset('/img/Браслет1.png') }}" alt="Браслет" class="img-fluid">
                    <table>
                        <thead>
                            <tr>
                                <th>Браслет на ногу</th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th>Стоимость</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>550.00 руб.</td>
                                <td>1</td>
                                <td>550.00 руб.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> --}}

            @foreach ($orders as $order)
                <div class="col-12">
                    <div class="purchase">
                        {{-- @foreach ($order->products as $product) --}}
                            {{-- {{ $product }} --}}
                        {{-- @endforeach --}}
                        {{-- {{ $order }} --}}
                        <img src="{{ asset($order->products[0]->photo) }}" alt="Браслет" class="img-fluid">
                        <table>
                            <thead>
                                <tr>
                                    <th>{{ $order->products[0]->title }}</th>
                                    <th>Цена</th>
                                    <th>Количество</th>
                                    <th>Стоимость</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td> {{ $order->products[0]->price . ".00 руб." }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->totalCost . ".00 руб." }}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

@push('script')
    <script src="/js/bootstrap.bundle.min.js"></script>
@endpush
