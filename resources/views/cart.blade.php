@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/cart.css') }}">
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Корзина</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <h3 class="h3">Корзина</h3>

        <div class="row">
            <div class="col-12">
                <div class="purchase">
                    <img src="{{ asset('/img/Браслет1.png') }}" alt="Браслет" class="img-fluid">
                    <table>
                        <thead>
                            <tr>
                                <th>Браслет на ногу</th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th>Стоимость</th>
                                <th>
                                    <a href="#">
                                        <img src="{{ asset('/img/icons8-cross-mark-100 1.svg') }}" alt="Удалить">
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>500.00 руб.</td>
                                <td>1</td>
                                <td>500.00 руб.</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12">
                <div class="purchase">
                    <img src="{{ asset('/img/Браслет2.png') }}" alt="Браслет" class="img-fluid">
                    <table>
                        <thead>
                            <tr>
                                <th>Браслет на руку</th>
                                <th>Цена</th>
                                <th>Количество</th>
                                <th>Стоимость</th>
                                <th>
                                    <a href="#">
                                        <img src="{{ asset('/img/icons8-cross-mark-100 1.svg') }}" alt="Удалить">
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>500.00 руб.</td>
                                <td>1</td>
                                <td>500.00 руб.</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-end">
        <p class="cost">Итоговая сумма: 1000.00 руб.</p>
        <a href="#" class="btn btn-yellow">К оформлению</a>
    </div>
@endsection
