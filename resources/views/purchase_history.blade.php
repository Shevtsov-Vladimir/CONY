@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/purchase_history.css') }}">
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">История покупок</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <h3 class="h3">Мои покупки</h3>

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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>800.00 руб.</td>
                                <td>1</td>
                                <td>800.00 руб.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
