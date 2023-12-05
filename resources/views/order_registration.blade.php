@extends('layout')

@section('asset')
    <link rel="stylesheet" href="{{ asset('/css/order_registration.css') }}">
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Корзина</li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md-5">
                <form action="#">
                    <h3 class="h3">Оформление заказа</h3>

                    <input class="form-control" placeholder="Введите фамилию" type="text" name="surname">
                    <input class="form-control" placeholder="Введите имя" type="text" name="firstname">
                    <input class="form-control" placeholder="Введите отчество" type="text" name="patronymic">
                    <input class="form-control" placeholder="Введите телефон" type="tel" name="telephone">
                    <input class="form-control" placeholder="Введите адрес доставки" type="text" name="delivery_address">

                    <label for="comment" class="form-label">Комментарий к заказу</label>
                    <textarea class="form-control" id="comment" rows="5"></textarea>

                    <button type="submit" class="btn btn-yellow">Оформить заказ</button>
                </form>
            </div>


            <div class="col-12 col-md-4">
                <div class="cheque">
                    <div class="row">
                        <h5 class="h5">Ваш заказ</h5>
                        <a href="#">Изменить</a>
                    </div>

                    <div class="row">
                        <p>Товаров</p>
                        <p>2</p>
                    </div>

                    <div class="row">
                        <p>Товаров</p>
                        <p>1000. 00 руб.</p>
                    </div>

                    <div class="row">
                        <p>Доставка</p>
                        <p>0.00 руб.</p>
                    </div>

                    <div class="row">
                        <p>Скидка</p>
                        <p>0.00 руб.</p>
                    </div>

                    <hr class="text-center">

                    <p class="text-center">Итоговая сумма: 1000.00 руб.</p>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
